<?php

namespace ComponentBundle\Extending\Admin\Mvc\Pub;

use ComponentBundle\Extending\Admin\Mvc\ApplicationDefinitions;
use App\Rule\Pub;
use App\Repository\Post as PostRepo;
use App\Repository\Get as GetRepo;
use ComponentBundle\Extending\Admin\String\Languages as LanguageString;

class Languages extends ApplicationDefinitions implements Pub
{
    protected $languageString;

    public function container($option)
    {
        $this->languageString = new LanguageString;

        $query = new GetRepo();

        if (!$this->accessProtocol())
        {
            return $this->request->redirect($this->settings->site_url, false);
        }

        if ($this->request->getRequestMethod() == "GET")
        {
            if ($query->has('l'))
            {
                if ($this->languageString->isLanguageExist($query->get('l')))
                {
                    echo $this->template->render(
                        $this->getTemplate('Languages/edit.twig'),
                        [
                            'option' => $option,
                            'string' => [
                                'item' => $this->languageString,
                                'language' => $this->languageString->getLanguage($query->get('l'))
                            ]
                        ]
                    );
                }
            }
            else if ($query->has('sentences'))
            {
                echo $this->template->render(
                    $this->getTemplate('Languages/sentences.twig'),
                    [
                        'option' => $option,
                        'string' => [
                            'language' => $this->languageString
                        ]
                    ]
                );
            }
            else if ($query->has('editPhrase/?q'))
            {
                $phraseQuery = json_decode(
                    base64_decode($query->get('editPhrase/?q')),
                    true
                );

                $file = $phraseQuery['file'];
                $phrase = $phraseQuery['phrase'];

                $phrasePath = $phraseQuery['phrasePath'];
                if ($phraseQuery['phraseNull'] !== '__null')
                {
                    $phrasePathWithPhrase = "{$phrasePath}{$phrase}";
                }
                else
                {
                    $phrasePathWithPhrase = $phrase;
                }

                $text = $this->languageString->getLanguagePhrase($file, $phrase);
                if ($text)
                {
                    $modifiedText = $this->languageString->getLanguagePhrase("{$phraseQuery['language']}/Modification.yaml", "modification.{$phrase}");

                    echo $this->template->render(
                        $this->getTemplate('Languages/phrase.twig'),
                        [
                            'option' => $option,
                            'string' => [
                                'language' => $this->languageString,
                                'phrase' => [
                                    'language' => $phraseQuery['language'],
                                    'file' => $file,
                                    'path' => $phrasePath,
                                    'var' => $phrasePathWithPhrase,
                                    'phrase' => $phrase,
                                    'text' => $text
                                ],
                                'modifiedText' => $modifiedText
                            ]
                        ]
                    );
                }
            }
            else if ($query->has('searchSentences'))
            {
                echo $this->template->render(
                    $this->getTemplate('Languages/search_sentences.twig'),
                    [
                        'option' => $option,
                        'string' => [
                            'language' => $this->languageString
                        ]
                    ]
                );
            }
            else if ($query->has('new'))
            {
                echo $this->template->render(
                    $this->getTemplate('Languages/new.twig'),
                    [
                        'option' => $option,
                        'string' => [
                            'language' => $this->languageString
                        ]
                    ]
                );
            }
            else if ($query->has('export'))
            {
                $data = [
                    'language_id' => $query->get('export')
                ];
                $export = \ComponentBundle\Extending\Admin\SubContainer\Languages\Export::doExport($data);

                $this->request->setContentDisposition("{$data['language_id']}.zip", $export, 'application/zip', true);

                (new \App\Util\File())->remove(APPLICATION_SELF . "/Languages/{$data['language_id']}.zip");
            }
            else if ($query->has('import'))
            {
                echo $this->template->render(
                    $this->getTemplate('Languages/import.twig'),
                    [
                        'option' => $option
                    ]
                );
            }
            else
            {
                echo $this->template->render(
                    $this->getTemplate('Languages/list.twig'),
                    [
                        'option' => $option,
                        'string' => [
                            'language' => $this->languageString
                        ]
                    ]
                );
            }
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
            if ($this->request->getPathInfo() == '/admin/languages')
            {
                if ($query->has('changeDefaultLanguage'))
                {
                    return $this->changeDefaultLanguage();
                }
                else if ($query->has('edit'))
                {
                    return $this->editLanguage();
                }
                else if ($query->has('getLanguage'))
                {
                    return $this->getLanguageFile();
                }
                else if ($query->has('editPhrase'))
                {
                    return $this->editPhrase();
                }
                else if ($query->has('searchAdv'))
                {
                    return $this->search();
                }
                else if ($query->has('duplicateLanguageInit'))
                {
                    return $this->duplicateLanguageInit();
                }
                else if ($query->has('create'))
                {
                    return $this->createLanguage();
                }
                else if ($query->has('remove'))
                {
                    return $this->removeLanguage();
                }
                else if ($query->has('removeLanguageComplete'))
                {
                    return $this->removeLanguageComplete();
                }
                else if ($query->has('install'))
                {
                    return $this->install();
                }
            }
        }
    }

    private function changeDefaultLanguage()
    {
        $post = new PostRepo();

        (new \App\Entity\Settings())->setSettings('default_language', $post->get('name'));

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }

    private function editLanguage()
    {
        $post = new PostRepo();

        $data = [];
        foreach ($post->toArray('options') as $key => $val)
        {
            $data[$key] = $val;
        }
        $data['_lang_id'] = $post->get('language_id');
        \ComponentBundle\Extending\Admin\SubContainer\Languages\Edit::doEdit($data);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }

    private function getLanguageFile()
    {
        $post = new PostRepo();

        $phrasePath = \mb_strtolower($post->get('language'));
        if ($phrasePath !== '__null')
        {
            $phrasePathWithPhrase = "{$phrasePath}.";
        }
        else
        {
            $phrasePathWithPhrase = "";
        }

        $sentences = [];
        foreach ($this->languageString->getPhraseKeys($post->get('file')) as $key => $val)
        {
            $link = function () use ($post, $phrasePath, $phrasePathWithPhrase, $key, $val)
            {
                return base64_encode(
                    json_encode(
                        [
                            'file' => $post->get('file'),
                            'phrasePath' => $phrasePathWithPhrase,
                            'phraseNull' => $phrasePath,
                            'phrase' => $key,
                            'language' => $post->get('connectLanguage')
                        ]
                    )
                );
            };

            $sentences[$key] = [
                'text' => $val,
                'link' => $link()
            ];
        }

        $template = $this->template->render(
            $this->getTemplate('Languages/sentence_list.twig'),
            [
                'string' => [
                    'phrasePath' => $phrasePathWithPhrase,
                    'sentences' => $sentences
                ]
            ]
        );

        return $this->phrase->render('json')->serialize([
            'template' => $template
        ])->render();
    }

    private function editPhrase()
    {
        $post = new PostRepo();

        $data = [
            'language' => $post->get('language'),
            'phrase' => $post->get('phrase'),
            'text' => $post->get('text')
        ];
        \ComponentBundle\Extending\Admin\SubContainer\Languages\EditPhrase::doEdit($data);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }

    private function search()
    {
        $post = new PostRepo();

        $data = [
            'addon' => $post->get('addon'),
            'language' => $post->get('language'),
            'query' => $post->get('query'),
        ];
        $result = \ComponentBundle\Extending\Admin\SubContainer\Languages\Search::doSearch($data);

        $sentences = [];
        foreach ($result as $item)
        {
            $phrasePath = \mb_strtolower($item['phrasePath']);
            if ($phrasePath !== '__null')
            {
                $phrasePathWithPhrase = "{$phrasePath}.";
            }
            else
            {
                $phrasePathWithPhrase = "";
            }

            $link = base64_encode(
                json_encode(
                    [
                        'file' => $item['file'],
                        'phrasePath' => $phrasePathWithPhrase,
                        'phraseNull' => $phrasePath,
                        'phrase' => $item['phrase'],
                        'language' => $item['language']
                    ]
                )
            );

            $sentences[$item['phrase']] = [
                'text' => $item['text'],
                'link' => $link,
                'phrasePath' => $phrasePathWithPhrase,
                'path' => $phrasePath,
                'language' => $item['language'],
                'search' => true
            ];
        }

        $template = $this->template->render(
            $this->getTemplate('Languages/sentence_list.twig'),
            [
                'string' => [
                    'sentences' => $sentences
                ]
            ]
        );

        return $this->phrase->render('json')->serialize([
            'template' => $template
        ])->render();
    }

    private function duplicateLanguageInit()
    {
        $post = new PostRepo();

        $data = $this->languageString->getLanguage($post->get('language'));

        return $this->phrase->render('json')->serialize([
            'data' => $data
        ])->render();
    }

    private function createLanguage()
    {
        $post = new PostRepo();

        $data = [];
        foreach ($post->toArray('options') as $key => $val)
        {
            $data[$key] = $val;
        }
        $data = array_merge($data, ['copyLanguageName' => $post->get('copyLanguageName')]);
        \ComponentBundle\Extending\Admin\SubContainer\Languages\Create::doCreate($data);

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }

    private function removeLanguage()
    {
        $post = new PostRepo();

        $data = [
            'language' => $post->get('language'),
        ];

        return $this->phrase->render('json')->serialize([
            'template' => $this->template->render(
                $this->getTemplate('Languages/remove_language_modal.twig'),
                [
                    'string' => [
                        'language' => $post->get('language')
                    ]
                ]
            )
        ])->render();
    }

    private function removeLanguageComplete()
    {
        $post = new PostRepo();

        if ($this->settings->default_language == $post->get('language_id'))
        {
            return false;
        }

        $data = [
            'language_id' => $post->get('language_id'),
        ];
        \ComponentBundle\Extending\Admin\SubContainer\Languages\Remove::doRemove($data);

        return $this->phrase->render('json')->serialize([
            'template' => $this->template->render(
                $this->getTemplate('Languages/remove_language_modal.twig'),
                [
                    'string' => [
                        'language' => $post->get('language')
                    ]
                ]
            )
        ])->render();
    }

    private function install()
    {
        $post = new PostRepo();

        $import = \ComponentBundle\Extending\Admin\SubContainer\Languages\Import::doImport($_FILES['archive']);
        if (!$import)
        {
            return false;
        }

        if (isset($import['status']))
        {
            return $this->phrase->render('json')->serialize([
                'status' => $import['status']
            ])->render();
        }

        return $this->phrase->render('json')->serialize(
            []
        )->render();
    }
}
