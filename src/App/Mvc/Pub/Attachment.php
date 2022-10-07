<?php

namespace App\Mvc\Pub;

use App\Mvc\Controller;
use App\Rule\Pub;
use App\Phrase;

class Attachment extends Controller implements Pub
{
	public function container($option)
	{
		if ($this->request->getRequestMethod() == "GET")
		{
			$attachments = new \App\String\Attachments();

			if ($attachments->getAttachmentByAttachId($option['show']))
			{
				$attachment = $attachments->getAttachmentByAttachId($option['show']);
				$mime = $attachments->getMime($attachment['filename']);

				if (Phrase::buildSeoLink($attachment['filename']) !== $option['section'])
				{
					echo $this->template->render(
						'404.tpl',
						[
							'option' => $option,
						]
					);

					return false;
				}

				$path = PUBLIC_DIR . "/uploads/attachments/{$attachment['unique_id']}.attachment";
				if (file_exists($path))
				{
					if ($mime['mime_type'] == 'application/pdf' || $mime['mime_type'] == 'text/plain')
					{
						$this->request->setContentDisposition(Phrase::buildSeoLink($attachment['filename']), $path, $mime['mime_type']);
					}
					else
					{
						$this->request->setContentDisposition($attachment['filename'], $path, $mime['mime_type'], true);
					}
				}
				else
				{
					echo $this->template->render(
						'404.tpl',
						[
							'option' => $option,
						]
					);

					return false;
				}
			}
			else
			{
				return $this->request->redirect($this->settings->site_url, false);
			}
		}
		elseif ($this->request->getRequestMethod() == "POST")
		{
			if ($this->request->getPathInfo() == '/attachments/editor-image-upload')
			{
				return $this->editorImageUpload();
			}
		}
	}

	private function editorImageUpload()
	{
		$upload = (new \App\SubContainer\Attachment\Editor())->doImageUpload([
			'temp' => current($_FILES),
			'dir' => 'editor'
		]);

		if (is_array($upload))
		{
			return $this->phrase->render('json')->serialize([
				'location' => $upload['dir']
			])->render();
		}
		else
		{
			return $this->phrase->render('json')->serialize([
				'status' => 'fail'
			])->render();
		}
	}
}
