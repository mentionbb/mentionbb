 if (window.jQuery === undefined) jQuery = $ = {};

 !function($, window, document)
 {
    "use strict";

    $(function() {
        tinymce.PluginManager.add("userTagging", function (editor, url) {
            editor.ui.registry.addAutocompleter('autocompleter-user-tagging', {
                ch: '@',
                minChars: 2,
                columns: 1,
                fetch: function (pattern) {
                    return new tinymce.util.Promise(function (resolve) {
                        var dataString = {
                            pattern: pattern
                        }

                        app.post("post/user-tagging", dataString).done(function(response) {
                            if(response.status === "ok") {
                                var data = response.data;
                                var results = [];

                                for (var i = 0; i < data.length; i++) {
                                    var result = data[i];

                                    results.push({
                                        value: result.username,
                                        text: result.username,
                                        icon: '<img class="rounded-circle w-100" src="'+app.config.settings.public_dir+'/uploads/profile_picture/'+result.profile_picture+'" />'
                                    });
                                };

                                results.sort(function (a, b) {
                                    var x = a.text.toLowerCase();
                                    var y = b.text.toLowerCase();

                                    if (x < y)
                                    {
                                        return -1;
                                    }

                                    if (x > y)
                                    {
                                        return 1;
                                    }
                                    
                                    return 0;
                                });

                                resolve(results);
                            }
                        }).fail(function(xhr, status, err) {
                            console.log(status, err);
                        });
                    });
                },
                onAction: function (autocompleteApi, rng, value) {
                    var render = '<span style="color: rgb(53, 152, 219);"><strong>@'+value+';</strong></span>';

                    editor.selection.setRng(rng);
                    editor.insertContent(render);
                    editor.execCommand('Forecolor');

                    autocompleteApi.hide();
                }
            });

            return {
                getMetadata: function () {
                    return {
                        name: "Mention User tagging for TinyMCE 5",
                        url: "https://www.r10.net/members/90047-scarecrow.html"
                    };
                }
            };
        });
    });
}
(window.jQuery, window, document);