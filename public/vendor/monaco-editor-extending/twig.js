if (window.jQuery === undefined) jQuery = $ = {};

!function($, window, document)
{
	"use strict";

    function rebuildThemes(name) {
        monaco.editor.defineTheme(name, {
            base: name,
            inherit: true,
            rules: [
                {
                    token: 'mention.domevent.html',
                    foreground: 'e39300'
                }
            ],
            colors: {}
        });
    }

    $(function () {
        rebuildThemes('vs');
        rebuildThemes('vs-dark');

        const customTokens = [
            [/"(?!\{Mention:)([^"]*)"/, "attribute.value.html"],
            [/"\{Mention\:App-domEvent-([a-zA-Z]+)\}"/, "mention.domevent.html"]
        ];

        const customTokenizer = {
            tokenizer: {
                style: [
                    customTokens[0],
                    customTokens[1]
                ],
                script: [
                    customTokens[0],
                    customTokens[1]
                ],
                otherTag: [
                    customTokens[0],
                    customTokens[1]
                ]
            }
        };
        async function setupCustomTokenizer() {
            const allLangs = await monaco.languages.getLanguages();
            const { conf, language: jsLang } = await allLangs.find(({ id }) => id === 'twig').loader();
            for (let key in customTokenizer) {
                const value = customTokenizer[key];
                if (key === 'tokenizer') {
                    for (let category in value) {
                        const tokenDefs = value[category];
                        if (!jsLang.tokenizer.hasOwnProperty(category)) {
                            jsLang.tokenizer[category] = [];
                        }
                        if (Array.isArray(tokenDefs)) {
                            jsLang.tokenizer[category].unshift.apply(jsLang.tokenizer[category], tokenDefs)
                        }
                    }
                } else if (Array.isArray(value)) {
                    if (!jsLang.hasOwnProperty(key)) {
                        jsLang[key] = [];
                    }
                    jsLang[key].unshift.apply(jsLang[key], value)
                }
            }
        }
        setupCustomTokenizer();
    });
}
(window.jQuery, window, document);