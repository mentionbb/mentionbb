if (window.jQuery === undefined) jQuery = $ = {};

!function ($, window, document) {
    "use strict";

    $(function () {
        $(".app-admin-user-search.search-container :input").donetyping(function () {
            if ($(this).val().length > 0 && $(this).val() != ' ') {
                $('.app-admin-user-search.search-container').addClass('show');

                $('.app-admin-user-search.search-container > .search-results').addClass('animate');
                $('.app-admin-user-search.search-container > .search-results').addClass('fadeIn');
                $('.app-admin-user-search.search-container > .search-results').removeClass('d-none');

                $('.app-admin-user-search.search-container > .search-results .load-area').nextAll().remove();
                $('.app-admin-user-search.search-container > .search-results .load-area').addClass('d-block');

                var dataString = {
                    keyword: $(this).val()
                };

                app.post("admin/common?indexUserQuickSearch", dataString).done(function (response) {
                    if (response.status === "ok") {
                        $('.app-admin-user-search.search-container > .search-results .load-area').removeClass('d-block');
                        $('.app-admin-user-search.search-container > .search-results .load-area').addClass('d-none');

                        $('.app-admin-user-search.search-container > .search-results .load-area').after(response.template);

                        $('.app-admin-user-search.search-container > .search-results .users a > span').replaceText(new RegExp('(' + dataString.keyword + ')', 'gi'), '<span class="font-weight-bold">$1</span>');
                    }
                }).fail(function (xhr, status, err) {
                    console.log(status, err);
                });
            }
        });
    });

    $(document).on('click', '.app-admin-user-search.search-container .form-control-clear', function (e) {
        $('.app-admin-user-search.search-container').removeClass('show');

        $('.app-admin-user-search.search-container > .search-results').addClass('d-none');

        $('.app-admin-user-search.search-container > .search-results').removeClass('animate');
        $('.app-admin-user-search.search-container > .search-results').removeClass('fadeIn');
    });

    $(document).mouseup(function (e) {
        var container = $(".app-admin-user-search.search-container");

        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.removeClass('show');

            container.find('.search-results').addClass('d-none');
        }
    });

    $(document).on('click', '.app-admin-user-search.search-container input[type="text"]', function (e) {
        if ($('.app-admin-user-search.search-container > .search-results .load-area').nextAll().length > 0) {
            $('.app-admin-user-search.search-container').addClass('show');

            $('.app-admin-user-search.search-container > .search-results').removeClass('d-none');

            $('.app-admin-user-search.search-container > .search-results').addClass('animate');
            $('.app-admin-user-search.search-container > .search-results').addClass('fadeIn');
        }
    });

    $(function () {
        if ($('body[data-template="@ComponentBundle/admin/index"]').length) {
            $('.progress').removeClass('d-none');

            app.post("admin/common?getVisitorStats", {}).done(function (response) {
                if (response.status === "ok") {
                    $('.progress').addClass('d-none');

                    var ctx = document.getElementById('appMention_Chart').getContext('2d');

                    new Chart(
                        ctx,
                        {
                            type: 'line',
                            data: {
                                labels: response.dates,
                                datasets: [{
                                    label: 'Ziyaretçi',
                                    data: [1, 2],
                                    backgroundColor: [
                                        'rgb(251 143 32)',
                                    ],
                                    borderColor: [
                                        'rgb(251 143 32)'
                                    ],
                                    borderWidth: 3,
                                }]
                            },
                            options: {
                                responsive: true,
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        grid: {
                                            color: 'transparent',
                                            borderColor: '#a9b6c3'
                                        },
                                        ticks: {
                                            color: '#a9b6c3',
                                            stepSize: 1
                                        }
                                    },
                                    x: {
                                        grid: {
                                            color: '#a9b6c3',
                                            borderColor: '#a9b6c3'
                                        },
                                        ticks: {
                                            color: '#a9b6c3'
                                        }
                                    }
                                }
                            }
                        }
                    );
                }
            });
        }
    });

    $(function () {
        $("#admin_settings").trackChanges();

        $("#admin_settings").validate({
            onfocusout: false,
            submitHandler: function (form, e) {
                e.preventDefault();

                if ($("#admin_settings").isChanged()) {
                    $('.app-box .progress').removeClass('d-none');

                    var dataString = new FormData();

                    var optionsArray = {};
                    $('#admin_settings [name^="options"]').each(function (index) {
                        var name = $(this).attr('name').split('[').pop().replace(']', '');

                        optionsArray[name] = $(this).val();
                    });

                    dataString.append('settings', JSON.stringify(optionsArray));

                    app.post("admin/settings?save", dataString, false, false).done(function (response) {
                        if (response.status === "ok") {
                            $('.app-box .progress').addClass('d-none');

                            app.flashMessage(app.phrases.alert_messages.saved_successfull);
                        }
                    }).fail(function (xhr, status, err) {
                        console.log(status, err);
                    });
                }
            }
        });
    });

    $(function () {
        $('#admin_settings input:file').on("change", function () {
            var elem = $(this).closest('.app-admin-file-text');
            var file = $(this).get(0).files[0];

            $('.app-box .progress').removeClass('d-none');

            var dataString = new FormData();

            if (file.size <= 0) {
                app.flashMessage(app.phrases.alert_messages.upload_file_is_blank, 'warning');
                $('.app-box .progress').addClass('d-none');
                return false;
            }

            if (file.size > app.config.settings.admin.max_site_logo_size) {
                app.flashMessage(app.phrases.alert_messages.upload_file_is_too_big, 'warning');
                $('.app-box .progress').addClass('d-none');
                return false;
            }

            elem.find('input').attr('disabled', 'disabled');

            if (elem.find('input[type="text"]').length) {
                elem.find('input[type="text"]').val(file.name);

                var optionsArray = {};
                elem.find('input[name^="options"]').each(function (index) {
                    var name = $(this).attr('name').split('[').pop().replace(']', '');

                    optionsArray[name] = $(this).val();
                });

                dataString.append('settings', JSON.stringify(optionsArray));
            }

            dataString.append(file.name, file);

            app.post("admin/common?uploadImage", dataString, false, false).done(function (response) {
                if (response.status === "ok") {
                    $('.app-box .progress').addClass('d-none');

                    elem.find('input').attr('disabled', false);

                    if (elem.find('input[name="options[site_logo]"]').length) {
                        if (!Storages.cookieStorage.get("night_mode")) {
                            $('.navbar-brand > img').attr('src', app.config.settings.public_dir + '/images/' + file.name);
                        }
                    } else if (elem.find('input[name="options[site_logo_night]"]').length) {
                        if (Storages.cookieStorage.get("night_mode")) {
                            $('.navbar-brand > img').attr('src', app.config.settings.public_dir + '/images/' + file.name);
                        }
                    }

                    app.flashMessage(app.phrases.alert_messages.saved_successfull);
                }
            });
        });
    });

    $(function () {
        $("#admin_services_edit").validate({
            submitHandler: function (form, e) {
                e.preventDefault();

                var elem = $(this.submitButton).closest('.app-service');

                $('.app-box .progress').removeClass('d-none');

                var dataString = new FormData();

                var optionsArray = {};
                elem.find('[name^="options"]').each(function (index) {
                    var name = $(this).attr('name').split('[').pop().replace(']', '');

                    if ($(this).is(':checkbox')) {
                        optionsArray[name] = $(this).is(':checked');
                    } else {
                        optionsArray[name] = $(this).val();
                    }
                });

                dataString.append('options', JSON.stringify(optionsArray));
                dataString.append('service_id', elem.data('service-id'));

                app.post("admin/oauth?updateService", dataString, false, false).done(function (response) {
                    if (response.status === "ok") {
                        $('.app-box .progress').addClass('d-none');

                        app.flashMessage(app.phrases.alert_messages.saved_successfull);
                    }
                });
            }
        });
    });

    $(function () {
        $("#admin_services_new").validate({
            submitHandler: function (form, e) {
                e.preventDefault();

                var elem = $(this.submitButton).closest('.app-service');

                $('.app-box .progress').removeClass('d-none');

                var dataString = new FormData();

                var optionsArray = {};
                elem.find('[name^="options"]').each(function (index) {
                    var name = $(this).attr('name').split('[').pop().replace(']', '');

                    if ($(this).is(':checkbox')) {
                        optionsArray[name] = $(this).is(':checked');
                    } else {
                        optionsArray[name] = $(this).val();
                    }
                });

                dataString.append('options', JSON.stringify(optionsArray));

                app.post("admin/oauth?addService", dataString, false, false).done(function (response) {
                    if (response.status === "ok") {
                        $('.app-box .progress').addClass('d-none');

                        app.flashMessage(app.phrases.alert_messages.service_added_successfull);

                        window.location.replace(
                            $('.app-box[data-tab="oauth"] a.back').attr('href')
                        );
                    } else if (response.status === "same_service_is_exist") {
                        $('.app-box .progress').addClass('d-none');

                        app.flashMessage(app.phrases.alert_messages.there_is_same_service_exist, 'warning');
                    }
                });
            }
        });
    });

    $(function () {
        $("#route_filters_edit").validate({
            submitHandler: function (form, e) {
                e.preventDefault();

                $('.progress').removeClass('d-none');

                var dataString = new FormData();

                var optionsArray = {};
                $('#route_filters_edit [name^="options"]').each(function (index) {
                    var routeName = /\[([a-zA-Z0-9_]+)\]/g.exec($(this).attr('name'))[1];                        

                    $('#route_filters_edit [name^="options['+ routeName +']"]').each(function (index) {
                        var name = $(this).attr('name').split('[').pop().replace(']', '');
                        optionsArray[routeName] = {
                            path: {
                                value: $('#route_filters_edit [name="options['+ routeName +'][path]"]').val()
                            },
                            controller: {
                                value: $('#route_filters_edit [name="options['+ routeName +'][controller]"]').val()
                            }
                        };
                    });     
                });

                dataString.append('options', JSON.stringify(optionsArray));

                app.post("admin/route-filters?rebuild", dataString, false, false).done(function (response) {
                    if (response.status === "ok") {
                        $('.progress').addClass('d-none');

                        app.flashMessage(app.phrases.alert_messages.saved_successfull);
                    }
                });
            }
        });
    });

    $(document).on('click', '[data-template="@ComponentBundle/admin/route_filters"] a.restore', function (e) {
        e.preventDefault();

        app.post("admin/route-filters?restore", []).done(function (response) {
            if (response.status === "ok") {
                $('.app-box .progress').addClass('d-none');

                app.flashMessage(app.phrases.alert_messages.saved_successfull);

                window.location.reload();
            }
        });
    });

    $(function () {
        $("#censored_words_edit").validate({
            submitHandler: function (form, e) {
                e.preventDefault();

                $('.app-box .progress').removeClass('d-none');

                var dataString = new FormData();

                dataString.append('words', $('#censored_words_edit textarea[name="word_list"]').val());

                app.post("admin/censor-words?edit", dataString, false, false).done(function (response) {
                    if (response.status === "ok") {
                        $('.app-box .progress').addClass('d-none');

                        app.flashMessage(app.phrases.alert_messages.saved_successfull);
                    }
                });
            }
        });
    });

    $(document).on('click', '[data-template="@ComponentBundle/admin/forums"] [data-forum-id] > a:not(.append-btn)', function (e) {
        e.preventDefault();

        var elem = $(this);

        if (elem.closest('[data-forum-id').next('#adminNodeEdit').length < 1) {
            $('.app-box .progress').removeClass('d-none');
        } else {
            elem.closest('[data-forum-id').next('#adminNodeEdit').collapse('show');
        }

        var dataString = {
            forum_id: $(this).closest('[data-forum-id').data('forum-id')
        }

        if (elem.closest('[data-forum-id').next('#adminNodeEdit').length < 1) {
            app.post("admin/forums?showAccordion", dataString).done(function (response) {
                if (response.status === "ok") {

                    elem.closest('[data-forum-id]').after(response.template);
                    elem.closest('[data-forum-id').next('#adminNodeEdit').find('select.selectpicker').selectpicker();
                    elem.closest('[data-forum-id').next('#adminNodeEdit').collapse('show');

                    $('.app-box .progress').addClass('d-none');
                }
            });
        } else {
            elem.closest('[data-forum-id').next('#adminNodeEdit').collapse('hide');
        }
    });

    $(document).bind('ajaxStop', function () {
        $('[data-template="@ComponentBundle/admin/forums"] #adminNodeEdit form').each(function () {
            var elem = $(this).closest('#adminNodeEdit').prev('[data-forum-id]');
            var formd = $(this).closest('#adminNodeEdit').find('form');
            var default_parent_id = formd.find('select[name="forum_parent"]').val();

            formd.trackChanges();

            $(this).validate({
                submitHandler: function (form, e) {
                    e.preventDefault();

                    if(!formd.isChanged()) {
                        return false;
                    }

                    $('.app-box .progress').removeClass('d-none');

                    var dataString = new FormData();

                    dataString.append('forum_id', elem.data('forum-id'));
                    dataString.append('parent_id', formd.find('select[name="forum_parent"]').val());
                    dataString.append('forum_title', formd.find('input[name="forum_title"]').val());
                    dataString.append('forum_order', formd.find('input[name="forum_order"]').val());
                    dataString.append('forum_description', formd.find('input[name="forum_description"]').val());

                    app.post("admin/forums?updateNode", dataString, false, false).done(function (response) {
                        if (response.status === "ok") {
                            app.flashMessage(app.phrases.alert_messages.saved_successfull);

                            $('.app-box .progress').addClass('d-none');

                            elem.find('.title .h5').text(
                                formd.find('input[name="forum_title"]').val()
                            );
                            elem.find('.title small').text(
                                formd.find('input[name="forum_description"]').val()
                            );

                            if (formd.find('input[name="forum_order"]').val() != elem.data('order')) {
                                window.location.reload();
                            }

                            elem.attr('data-order', formd.find('input[name="forum_order"]').val());
                            if (default_parent_id != formd.find('select[name="forum_parent"]').val()) {
                                if (formd.find('select[name="forum_parent"]').val() != 0) {
                                    elem.find('.icon').before('<span class="icon sub"></span>');

                                    var clone_node = elem.clone();
                                    $('#adminNodeEdit').remove();
                                    elem.closest('.list').remove();

                                    $('#nodeAccordion').find('[data-forum-id="' + formd.find('select[name="forum_parent"]').val() + '"]').after(
                                        clone_node
                                    );
                                } else {
                                    elem.find('.icon.sub').remove();
                                    formd.find('select[name="forum_parent"] option[value="0"]').attr('selected', true);

                                    var clone_node = elem.clone();
                                    $('#adminNodeEdit').remove();
                                    elem.remove();

                                    $('#nodeAccordion').find('.list').after(
                                        '<div class="setting-group list bg-white text-dark shadow-sm position-relative rounded new"></div>'
                                    );
                                    $('#nodeAccordion').find('.list.new').html(clone_node);

                                    $('#nodeAccordion').find('.list.new').removeClass('new');
                                }
                            }
                        }
                    });
                }
            });
        });
    });

    $(function () {
        $("#admin_forums_new").validate({
            submitHandler: function (form, e) {
                e.preventDefault();

                var elem = $(this.submitButton).closest('.app-service');

                $('.app-box .progress').removeClass('d-none');

                var dataString = new FormData();

                dataString.append('parent_id', $('#admin_forums_new select[name="forum_parent"]').val());
                dataString.append('forum_title', $('#admin_forums_new input[name="forum_title"]').val());
                dataString.append('forum_order', $('#admin_forums_new input[name="forum_order"]').val());
                dataString.append('forum_description', $('#admin_forums_new input[name="forum_description"]').val());

                app.post("admin/forums?addNode", dataString, false, false).done(function (response) {
                    if (response.status === "ok") {
                        $('.app-box .progress').addClass('d-none');

                        app.flashMessage(app.phrases.alert_messages.forum_added_successfull);

                        window.location.replace(
                            $('.app-box[data-tab="forumNew"] a.back').attr('href')
                        );
                    }
                });
            }
        });
    });

    $(document).on('click', '[data-template="@ComponentBundle/admin/forums"] [data-ui="admin-remove-node"]', function (e) {
		e.preventDefault();
		e.stopPropagation();

		var dataString = {
			forum_id: $(this).closest('[data-forum-id]').data('forum-id')
		};

		var elem = $(this);

		$('.app-box .progress').removeClass('d-none');  

		app.post("admin/forums?removeNode", dataString).done(function(response) {
			if(response.status === "ok") {
				$('.app-box .progress').addClass('d-none');     

				if($('#forum-delete[data-forum-id="'+dataString.forum_id+'"]').length < 1) {
					$('body').append(response.template);

					$('#forum-delete[data-forum-id="'+dataString.forum_id+'"]').modal();
				} else {
					$('#forum-delete[data-forum-id="'+dataString.forum_id+'"]').modal();
				}
			}
		}).fail(function(xhr, status, err) {
			console.log(status, err);
		});
	});

    $(document).bind('ajaxStop', function() {
		$('#forum-delete form').each(function() {
			var forum_id = $(this).closest('#forum-delete').data('forum-id');

			$(this).validate({
				onfocusout: false,
				submitHandler: function(form,e) {
					e.preventDefault();

					var elem = $('#forum-delete[data-forum-id="'+forum_id+'"]');

					elem.find('button').attr('disabled', true);

					var dataString = {
						forum_id: forum_id
					};

					app.post("admin/forums?removeNodeComplete", dataString).done(function(response) {
						if(response.status === "ok") {
							elem.find('button').addClass('succeeded');
							elem.find('button').text(elem.find('button').data('complete-text'));

							elem.find('span.close').click();

                            $('[data-forum-id="'+dataString.forum_id+'"]').closest('.list').remove();

							app.flashMessage(app.phrases.alert_messages.forum_delete_successfull);
						}
					}).fail(function(xhr, status, err) {
						console.log(status, err);
					});
				}
			});
		});
	});

    $(function () {
        $("#admin_users_new").validate({
            submitHandler: function (form, e) {
                e.preventDefault();

                $('.app-box .progress').removeClass('d-none');

                var dataString = new FormData();

                dataString.append('username', $('#admin_users_new input[name="username"]').val());
                dataString.append('password', $('#admin_users_new input[name="password"]').val());
                dataString.append('mail', $('#admin_users_new input[name="mail"]').val());
                dataString.append('title', $('#admin_users_new input[name="title"]').val());
                dataString.append('role', $('#admin_users_new input[name="role"]').val());

                app.post("admin/users?new", dataString, false, false).done(function (response) {
                    if (response.status === "ok") {
                        $('.app-box .progress').addClass('d-none');

                        app.flashMessage(app.phrases.alert_messages.user_added_successfull);

                        window.location.replace(
                            $('.app-box[data-tab="userNew"] a.back').attr('href')
                        );
                    } else if (response.status === "user-is-exist") {
                        $('.app-box .progress').addClass('d-none');

                        app.flashMessage(app.phrases.alert_messages.user_is_exist, 'warning');
                    }
                });
            }
        });
    });

    $(function () {
        $("#admin_users_edit").trackChanges();

        $("#admin_users_edit").validate({
            submitHandler: function (form, e) {
                e.preventDefault();

                if($("#admin_users_edit").isChanged() || $('#admin_users_edit .profile-picture img').data('default') == true) {
					$('.app-box .progress').removeClass('d-none');

					var dataString = new FormData();

                    dataString.append('username', $('#admin_users_edit input[name="username"]').val());

                    if($('#admin_users_edit input[name="password"]').val()) {
						dataString.append('password', $('#admin_users_edit input[name="password"]').val());
					}

					if($('#admin_users_edit input[name="title"]').val()) {
						dataString.append('title', $('#admin_users_edit input[name="title"]').val());
					}

					if($("#admin_users_edit #profile_picture").val()) {
						dataString.append('acs_profile_picture', $("#admin_users_edit #profile_picture").get(0).files[0]);
						if ($("#admin_users_edit #profile_picture").get(0).files[0] > app.config.settings.profile_photo_max_size) {
							$('.app-box .progress').addClass('d-none');
							app.flashMessage(app.phrases.profile_photo_max_size, 'warning');
							return false;
						}

                        $('#admin_users_edit .profile-picture img').attr('data-default', false);
					}

					if($('#admin_users_edit .profile-picture img').data('default') == true) {
						dataString.append('profile_picture_ready', $('#admin_users_edit .profile-picture img').data('name'));
					}

					if($('#admin_users_edit input[name="mail"]').val()) {
						dataString.append('mail', $('#admin_users_edit input[name="mail"]').val());
					}

                    dataString.append('role', $('#admin_users_edit select[name="role"]').val());

                    dataString.append('user_id', $('#admin_users_edit input[name="user_id"]').val());

					app.post("admin/users?edit", dataString, false, false).done(function(response) {
						if(response.status === "ok") {
							$('.app-box .progress').addClass('d-none');

							app.flashMessage(app.phrases.alert_messages.user_edit_successfull);

                            window.location.replace(
                                $('.app-box[data-tab="users"] a.back').attr('href')
                            );
						}
					}).fail(function(xhr, status, err) {
						console.log(status, err);
					});
				}
            }
        });
    });

    $(document).on('change', '[data-template="@ComponentBundle/admin/edit_user"] #profile_picture', function() {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#admin_users_edit .profile-picture > label > img').attr('src', e.target.result);
		}

		reader.readAsDataURL($(this).get(0).files[0]);
	});

    $(document).on('click', '[data-template="@ComponentBundle/admin/edit_user"] [data-ui="remove-pp"]', function (e) {
        e.preventDefault();
		e.stopPropagation();

        $(this).closest('.profile-picture').find('img').attr('src', 
            $(this).closest('.profile-picture').data('default')
        );
        $(this).closest('.profile-picture').find('img').attr('data-default', true);
        $(this).closest('.profile-picture').find('img').attr('data-name', 'default.svg');
    });

    $(function () {
        $("#admin_users_ban").validate({
            submitHandler: function (form, e) {
                e.preventDefault();

                $('.app-box .progress').removeClass('d-none');

                var dataString = new FormData();

                dataString.append('user_id', $('#admin_users_ban input[name="user_id"]').val());
                dataString.append('expires_in', $('#admin_users_ban input[name="expires_in"]').val());
                dataString.append('text', $('#admin_users_ban textarea[name="text"]').val());

                app.post("admin/users?ban", dataString, false, false).done(function (response) {
                    if (response.status === "ok") {
                        $('.app-box .progress').addClass('d-none');

                        app.flashMessage(app.phrases.alert_messages.user_banned_successfull);

                        window.location.replace(
                            $('.app-box[data-tab="users"] a.back').attr('href')
                        );
                    }
                });
            }
        });
    });

    $(document).on('click', '[data-template="@ComponentBundle/admin/ban_user"] a[data-ui="admin-unban-user"]', function (e) {
        e.preventDefault();

        $('.app-box .progress').removeClass('d-none');

        var dataString = {
			ban_id: $(this).closest('.app-banning-flag').data('ban-id')
		};

        app.post("admin/users?unban", dataString).done(function (response) {
            if (response.status === "ok") {
                $('.app-box .progress').addClass('d-none');

                app.flashMessage(app.phrases.alert_messages.user_unban_successfull);

                window.location.reload();
            }
        });
    });

    $(document).on('change', '[data-template="@ComponentBundle/admin/addons/list"] [data-ui="addon-switcher"] [type="checkbox"]', function() {
        $('.app-box .progress').removeClass('d-none');

        var dataString = {
			addon_name: $(this).closest('.app-addon').data('name')
		};

        if (!this.checked) {
            app.post("admin/addons?disableAddon", dataString).done(function (response) {
                if (response.status === "ok") {
                    $('.app-box .progress').addClass('d-none');

                    app.flashMessage(app.phrases.alert_messages.addon_disabled_successfull);
                }
            });
        } else {
            app.post("admin/addons?activateAddon", dataString).done(function (response) {
                if (response.status === "ok") {
                    $('.app-box .progress').addClass('d-none');

                    app.flashMessage(app.phrases.alert_messages.addon_activated_successfull);
                }
            });
        }
    });

    $(function () {
        if ($('[data-template="@ComponentBundle/admin/addons/app"]').length) {
            monaco.languages.registerCompletionItemProvider('php', {
                provideCompletionItems: function (model, position) {
                    // find out if we are completing a property in the 'dependencies' object.
                    var textUntilPosition = model.getValueInRange({
                        startLineNumber: 1,
                        startColumn: 1,
                        endLineNumber: position.lineNumber,
                        endColumn: position.column
                    });
                    var match = textUntilPosition.match(
                        /\$event\-\>container\-\>dom\-\>(?:[a-zA-Z]+)\((.*?)/
                    );
                    if (!match) {
                        return { suggestions: [] };
                    }
                    var word = model.getWordUntilPosition(position);
                    var range = {
                        startLineNumber: position.lineNumber,
                        endLineNumber: position.lineNumber,
                        startColumn: word.startColumn,
                        endColumn: word.endColumn
                    };
                    return {
                        suggestions: [
                            {
                                label: 'pagecontent',
                                kind: monaco.languages.CompletionItemKind.Function,
                                insertText: '\'{hook:pagecontent}\'',
                                range: range
                            },
                        ]
                    };
                }
            });

            var editor = monaco.editor.create(document.getElementById('editor'), {
                fontSize: '15px',
                language: 'php',
                value: $('.content').text()
            });
        }
        
        $("#admin_addons_app").validate({
            submitHandler: function (form, e) {
                e.preventDefault();

                $('.progress').removeClass('d-none');

                var dataString = new FormData();

                dataString.append('name', $('#admin_addons_app .app-addon').data('app'));
                dataString.append('content', editor.getValue());

                app.post("admin/addons?updateApp", dataString, false, false).done(function (response) {
                    if (response.status === "ok") {
                        $('.progress').addClass('d-none');

                        app.flashMessage(app.phrases.alert_messages.saved_successfull);
                    } else if (response.status === "exception-php-parser") {
                        $('.progress').addClass('d-none');

                        $('#php-parser-exception').find('code').text(response.message);
                        $('#php-parser-exception').modal();
                    }
                });
            }
        });

        $(document).on('click', '[data-template="@ComponentBundle/admin/addons/app"] a[data-ui="app-show-originalContent"]', function (e) {
            e.preventDefault();

            $('.app-box .progress').removeClass('d-none');
    
            $('#editor').addClass('d-none');
            $('.sticky-button').addClass('d-none');

            $('#originalContent-editor').show();
            $('#originalContent-editor').addClass('show');
            if($('#originalContent-editor').html().trim().length < 1) {
                var originalModel = monaco.editor.createModel(
                    $('.originalContent').text(),
                    'php'
                );
                var modifiedModel = monaco.editor.createModel(
                    editor.getValue(),
                    'php'
                );

                var diffEditor = monaco.editor.createDiffEditor(document.getElementById('originalContent-editor'), {
                    enableSplitViewResizing: false,
                    renderSideBySide: false,
                    fontSize: '15px'
                });
                diffEditor.setModel({
                    original: originalModel,
                    modified: modifiedModel
                });                
            }

            $(this).addClass('d-none');
            $(this).next().removeClass('d-none');

            $('.app-box .progress').addClass('d-none');
        });

        $(document).on('click', '[data-template="@ComponentBundle/admin/addons/app"] a[data-ui="app-show-content"]', function (e) {
            e.preventDefault();

            $('.app-box .progress').removeClass('d-none');

            $('#editor').removeClass('d-none');
            $('.sticky-button').removeClass('d-none');

            $('#originalContent-editor').remove();
            $('.originalContent').after('<div id="originalContent-editor"></div>');

            $(this).addClass('d-none');
            $(this).prev().removeClass('d-none');

            $('.app-box .progress').addClass('d-none');
        });
    });

    $(function () {
        $("#admin_addons_install").trackChanges();

        $("#admin_addons_install").validate({
            submitHandler: function (form, e) {
                e.preventDefault();

                if ($("#admin_addons_install").isChanged()) {
                    $('.app-box .progress').removeClass('d-none');

                    var dataString = new FormData();

                    dataString.append('archive', $("#admin_addons_install input#file").get(0).files[0]);

                    app.post("admin/addons?install", dataString, false, false).done(function (response) {
                        if (response.status === "ok") {
                            $('.app-box .progress').addClass('d-none');

                            app.flashMessage(app.phrases.alert_messages.saved_successfull);

                            window.location.replace(
                                $('.app-box[data-tab="addons"] a.back').attr('href')
                            );
                        }
                    });
                }
            }
        });
    });

    $(function () {
        $("#admin_attchfiletypes_edit").validate({
            submitHandler: function (form, e) {
                e.preventDefault();

                var elem = $(this.submitButton).closest('.app-attachment-filetypes');

                $('.app-box .progress').removeClass('d-none');

                var dataString = new FormData();

                var optionsArray = {};
                elem.find('[name^="options"]').each(function (index) {
                    var name = $(this).attr('name').split('[').pop().replace(']', '');

                    if ($(this).is(':checkbox')) {
                        optionsArray[name] = $(this).is(':checked');
                    } else {
                        optionsArray[name] = $(this).val();
                    }
                });

                dataString.append('options', JSON.stringify(optionsArray));
                dataString.append('type_id', elem.data('type-id'));

                app.post("admin/attachments?updateFileTypes", dataString, false, false).done(function (response) {
                    if (response.status === "ok") {
                        $('.app-box .progress').addClass('d-none');

                        app.flashMessage(app.phrases.alert_messages.saved_successfull);
                    }
                });
            }
        });
    });

    $(function () {
        $("#admin_attchfiletypes_new").validate({
            submitHandler: function (form, e) {
                e.preventDefault();

                var elem = $(this.submitButton).closest('.app-attachment-filetypes');

                $('.app-box .progress').removeClass('d-none');

                var dataString = new FormData();

                var optionsArray = {};
                elem.find('[name^="options"]').each(function (index) {
                    var name = $(this).attr('name').split('[').pop().replace(']', '');

                    if ($(this).is(':checkbox')) {
                        optionsArray[name] = $(this).is(':checked');
                    } else {
                        optionsArray[name] = $(this).val();
                    }
                });

                dataString.append('options', JSON.stringify(optionsArray));

                app.post("admin/attachments?createFileType", dataString, false, false).done(function (response) {
                    if (response.status === "ok") {
                        $('.app-box .progress').addClass('d-none');

                        app.flashMessage(app.phrases.alert_messages.saved_successfull);

                        window.location.replace(
                            $('.app-box[data-tab="attachments.new_file_type"] a.back').attr('href')
                        );
                    }
                });
            }
        });
    });

    $(function () {
        if ($('[data-template="@ComponentBundle/admin/theme/editor"]').length) {
            var editor = monaco.editor.create(document.getElementById('editor'), {
                fontSize: '15px',
                language: 'less',
                value: $('.content').text()
            });

            $(document).on('change', '.js-AppAdmin_ThemeStyleSelector select', function () {
                $('.app-box .progress').removeClass('d-none');

                var dataString = {
                    file: $(this).val()
                };

                app.post("admin/theme?getCss", dataString).done(function (response) {
                    if (response.status === "ok") {
                        $('.app-box .progress').addClass('d-none');

                        $('.app-style-editor').find('.head-title > span').text(dataString.file);

                        editor.setValue(response.content);
                        editor.setScrollPosition({scrollTop: 0});
                    }
                });
            });

            $("#admin_theme_editor").validate({
                submitHandler: function (form, e) {
                    e.preventDefault();
    
                    $('.progress').removeClass('d-none');
    
                    var dataString = new FormData();
    
                    dataString.append('name', $('.js-AppAdmin_ThemeStyleSelector select').val());
                    dataString.append('content', editor.getValue());
    
                    app.post("admin/theme?updateCssFile", dataString, false, false).done(function (response) {
                        if (response.status === "ok") {
                            $('.progress').addClass('d-none');
    
                            app.flashMessage(app.phrases.alert_messages.saved_successfull);
                        }
                    });
                }
            });
        }
    });

    $(function() {
        $(document).on('click', '.directory-list li.folder > span', function (e) {
            if($(this).hasClass('active')) {
                $(this).next('ul').addClass('d-none');
                $(this).removeClass('active');
            } else {
                if ($(this).closest('.folder').closest('.folder').length) {
                    $(this).closest('ul').removeClass('d-none');
                    $(this).closest('ul').closest('ul').prev('span').addClass('active');
                    $(this).addClass('active');
                }
                $(this).next('ul').removeClass('d-none');
                $(this).addClass('active');
            }
        });
    });

    $(function () {
        if ($('[data-template="@ComponentBundle/admin/theme/templates/editor"]').length) {
            var editor = monaco.editor.create(document.getElementById('editor'), {
                fontSize: '15px',
                language: 'twig'
            });

            $(document).on('click', '.directory-list li:not(.folder) > span', function (e) {
                var elem = $(this);
    
                $('.app-box .progress').removeClass('d-none');
    
                var dataString = {
                    template: $(this).data('template'),
                    file: $(this).data('path')
                };
    
                app.post("admin/templates?getTemplate", dataString).done(function (response) {
                    if (response.status === "ok") {
                        $('.app-box .progress').addClass('d-none');
    
                        $('.app-template-editor').find('.head-title > span').text(dataString.template);
                        $('.directory-list li:not(.folder) > span').removeClass('active');
                        elem.addClass('active');
    
                        editor.setValue(response.content);
                        editor.setScrollPosition({scrollTop: 0});
                        
                        if(response.originalContent) {
                            $('.app-template-editor').find('.head-title').next().removeClass('d-none');
    
                            $('#originalContent-editor').after('<div class="originalContent d-none"></div>');
                            $('.originalContent').text(response.originalContent);
                        } else {
                            if(!$('.app-template-editor').find('.head-title').next().hasClass('d-none')) {
                                $('.app-template-editor').find('.head-title').next().addClass('d-none');
                            }
    
                            $('.originalContent').remove();
                        }
    
                        window.history.pushState(null, null, app.config.settings.admin_url + '/templates?path=[' + dataString.file + ']');
                    }
                });
            });
    
            $("#admin_template_editor").validate({
                submitHandler: function (form, e) {
                    e.preventDefault();
    
                    $('.progress').removeClass('d-none');
    
                    var dataString = new FormData();
    
                    dataString.append('name', $('.js-AppAdmin_TemplateSelector .directory-list span.active:not(.folder-name)').data('template'));
                    dataString.append('path', $('.js-AppAdmin_TemplateSelector .directory-list span.active:not(.folder-name)').data('path'));
                    dataString.append('content', editor.getValue());
    
                    app.post("admin/templates?updateTemplate", dataString, false, false).done(function (response) {
                        if (response.status === "ok") {
                            $('.progress').addClass('d-none');
    
                            app.flashMessage(app.phrases.alert_messages.saved_successfull);
                        } else if (response.status === "exception-twig-syntax") {
                            $('.progress').addClass('d-none');
    
                            $('#twig-syntax-exception').find('code').text(response.message);
                            $('#twig-syntax-exception').modal();
                        }
                    });
                }
            });
    
            var templateName_regex = /path=\[(.*?)\.twig\]$/g;
    
            if (window.location.href.match(templateName_regex)) {
                var templateName_id = templateName_regex.exec(window.location.href);
    
                $('.js-AppAdmin_TemplateSelector .directory-list span[data-path="' + templateName_id[1] + '.twig"]').click();
                $('.js-AppAdmin_TemplateSelector .directory-list span[data-path="' + templateName_id[1] + '.twig"]').closest('ul').prev('span').click();
            } else {
                $('.js-AppAdmin_TemplateSelector .directory-list span[data-path="' + $('.js-AppAdmin_TemplateSelector').data('default') + '"]').click();
                $('.js-AppAdmin_TemplateSelector .directory-list span[data-path="' + $('.js-AppAdmin_TemplateSelector').data('default') + '"]').closest('ul').prev('span').click();
            }
    
            $(document).on('click', '[data-template="@ComponentBundle/admin/theme/templates/editor"] a[data-ui="app-show-originalContent"]', function (e) {
                e.preventDefault();
    
                $('.app-box .progress').removeClass('d-none');
        
                $('#editor').addClass('d-none');
                $('.sticky-button').addClass('d-none');
    
                $('#originalContent-editor').show();
                $('#originalContent-editor').addClass('show');
                if($('#originalContent-editor').html().trim().length < 1) {
                    var originalModel = monaco.editor.createModel(
                        $('.originalContent').text(),
                        'twig'
                    );
                    var modifiedModel = monaco.editor.createModel(
                        editor.getValue(),
                        'twig'
                    );
    
                    var diffEditor = monaco.editor.createDiffEditor(document.getElementById('originalContent-editor'), {
                        enableSplitViewResizing: false,
                        renderSideBySide: false,
                        fontSize: '15px'
                    });
                    diffEditor.setModel({
                        original: originalModel,
                        modified: modifiedModel
                    });
                }
    
                $(this).addClass('d-none');
                $(this).next().removeClass('d-none');
    
                $('.app-box .progress').addClass('d-none');
            });
    
            $(document).on('click', '[data-template="@ComponentBundle/admin/theme/templates/editor"] a[data-ui="app-show-content"]', function (e) {
                e.preventDefault();
    
                $('.app-box .progress').removeClass('d-none');
    
                $('#editor').removeClass('d-none');
                $('.sticky-button').removeClass('d-none');
    
                $('#originalContent-editor').remove();
                $('.originalContent').after('<div id="originalContent-editor"></div>');
    
                $(this).addClass('d-none');
                $(this).prev().removeClass('d-none');
    
                $('.app-box .progress').addClass('d-none');
            });
        };
    });

    $(document).on('click', '.input-callback > .js-ClickableDivs', function (e) {
        $(this).addClass('d-none');
        $(this).prev('input').removeClass('text-transparent');

        $(this).closest('.input-callback').find('input').focus().val(
            $(this).closest('.input-callback').find('input').val()
        );
    });

    $(function () {
        $(".js-AppAdmin_QuickSearchForums input").on("keyup click input", function () {
            if (this.value.length > 0) {
                var value = $(this).val().toLowerCase();
                $("#nodeAccordion .nested-items > .title").filter(function () {
                    $("#adminNodeEdit").remove();
                    return $(this).closest('.nested-items').toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            } else {
                $("#nodeAccordion .nested-items").show();
            }
        });

        $(".js-AppAdmin_QuickSearchForums").find(".form-control-clear").click(function () {
            $("#nodeAccordion .nested-items").show();
        });

        $(".js-AppAdmin_QuickSearchAddons input").on("keyup click input", function () {
            if (this.value.length > 0) {
                var value = $(this).val().toLowerCase();
                $("#servicesAccordion .head-title > span").filter(function () {
                    return $(this).closest('.app-addon').toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            } else {
                $("#servicesAccordion .app-addon").show();
            }
        });

        $(".js-AppAdmin_QuickSearchAddons").find(".form-control-clear").click(function () {
            $("#servicesAccordion .app-addon").show();
        });

        $(".js-AppAdmin_QuickSearchLanguage_Phrases input").on("keyup click input", function () {
            if (this.value.length > 0) {
                var value = $(this).val().toLowerCase();
                $(".app-language-phrase .head-title").filter(function () {
                    var phrase = $(this).find('.phrase').text();
                    var text = $(this).find('.text').text();
                    var regex = new RegExp(value, 'ig');
                    text = text.replace(regex, (match, $1) => {
                        return '<span class="font-weight-bold">' + match + '</span>';
                    });
                    phrase = phrase.replace(regex, (match, $1) => {
                        return '<span class="font-weight-bold">' + match + '</span>';
                    });

                    $(this).find('.phrase').html(phrase);

                    $(this).find('.text').removeClass('d-none');
                    $(this).find('.text').html(text);

                    return $(this).closest('.app-language-phrase').toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            } else {
                $(".app-language-phrase .head-title").find('.text').addClass('d-none');
                $(".app-language-phrase .head-title .phrase").each(function () {
                    $(this).html(
                        $(this).data('text')
                    );
                });

                $(".app-language-phrase").show();
            }
        });

        $(".js-AppAdmin_QuickSearchLanguage_Phrases").find(".form-control-clear").click(function () {
            $(".app-language-phrase .head-title").find('.text').addClass('d-none');
            $(".app-language-phrase .head-title .phrase").each(function() {
                $(this).html(
                    $(this).data('text')
                );
            });

            $(".app-language-phrase").show();
        });
    });

    $(document).on('change', '[data-template="@ComponentBundle/admin/languages/list"] [data-ui="language-switcher"] [type="checkbox"]', function() {
        $('.app-box .progress').removeClass('d-none');

        var elem = $(this);

        var dataString = {
			name: $(this).closest('.app-language').find('[data-language-id]').data('language-id')
		};

        if (!this.checked) {
            $(this).prop('checked', true);
            $('.app-box .progress').addClass('d-none');
        } else {
            app.post("admin/languages?changeDefaultLanguage", dataString).done(function (response) {
                if (response.status === "ok") {
                    $('.app-box .progress').addClass('d-none');

                    elem.closest('.app-language-list').find('[type="checkbox"]').prop('checked', false);
                    elem.prop('checked', true);

                    app.flashMessage(app.phrases.alert_messages.saved_successfull);
                }
            });
        }
    });

    $(function () {
        $("#admin_languages_edit").validate({
            submitHandler: function (form, e) {
                e.preventDefault();

                $('.progress').removeClass('d-none');

                var dataString = new FormData();

                var optionsArray = {};
                $("#admin_languages_edit").find('[name^="options"]').each(function (index) {
                    var name = $(this).attr('name').split('[').pop().replace(']', '');

                    optionsArray[name] = $(this).val();
                });

                dataString.append('options', JSON.stringify(optionsArray));
                dataString.append('language_id', $('.app-language').data('name'));

                app.post("admin/languages?edit", dataString, false, false).done(function (response) {
                    if (response.status === "ok") {
                        $('.progress').addClass('d-none');

                        console.log(response.data);

                        app.flashMessage(app.phrases.alert_messages.saved_successfull);
                    }
                });
            }
        });
    });

    $(function () {
        $("#admin_phrase_edit").validate({
            submitHandler: function (form, e) {
                e.preventDefault();

                $('.progress').removeClass('d-none');

                var dataString = new FormData();

                dataString.append('language', $('.app-phrase').data('language'));
                dataString.append('phrase', $('.app-phrase').data('phrase'));
                dataString.append('text', $('#admin_phrase_edit').find('textarea[name="text"]').val());

                app.post("admin/languages?editPhrase", dataString, false, false).done(function (response) {
                    if (response.status === "ok") {
                        $('.progress').addClass('d-none');

                        console.log(response.data);

                        app.flashMessage(app.phrases.alert_messages.saved_successfull);
                    }
                });
            }
        });
    });

    $(function () {
        if ($('[data-template="@ComponentBundle/admin/languages/sentences"]').length) {
            $(document).on('click', '.directory-list li:not(.folder) > span', function (e) {
                var elem = $(this);
    
                $('.app-box .progress').removeClass('d-none');
    
                var dataString = {
                    connectLanguage: $(this).data('language'),
                    language: $(this).data('file'),
                    file: $(this).data('path')
                };
    
                app.post("admin/languages?getLanguage", dataString).done(function (response) {
                    if (response.status === "ok") {
                        $('.app-box .progress').addClass('d-none');
    
                        $('.js-AppAdmin_LanguagesSentence_List .app-phrase-search').nextAll().remove();
                        $('.js-AppAdmin_LanguagesSentence_List .app-phrase-search').after(response.template);
                        $('.directory-list li:not(.folder) > span').removeClass('active');
                        elem.addClass('active');
    
                        window.history.pushState(null, null, app.config.settings.admin_url + '/languages?sentences&path=[' + dataString.file + ']');
                    }
                });
            });

            var languageName_regex = /path=\[(.*?)\.yaml\]$/g;
    
            if (window.location.href.match(languageName_regex)) {
                var languageName_id = languageName_regex.exec(window.location.href);
    
                $('.js-AppAdmin_LanguagesSentence .directory-list span[data-path="' + languageName_id[1] + '.yaml"]').click();
                $('.js-AppAdmin_LanguagesSentence .directory-list span[data-path="' + languageName_id[1] + '.yaml"]').closest('ul').prev('span').click();
            } else {
                $('.js-AppAdmin_LanguagesSentence .directory-list span[data-path="' + $('.js-AppAdmin_LanguagesSentence_List').data('default') + '"]').click();
                $('.js-AppAdmin_LanguagesSentence .directory-list span[data-path="' + $('.js-AppAdmin_LanguagesSentence_List').data('default') + '"]').closest('ul').prev('span').click();
            }
        }
    });

    $(function() {
        $(document).on('click', '.js-AppAdmin_QuickSearchSentences .app-searchSentences-selectLanguages [data-language]', function (e) {
            e.preventDefault();

            $('.js-AppAdmin_QuickSearchSentences .app-searchSentences-selectLanguages [data-language]').removeClass('active');
            $(this).addClass('active');

            if($(this).data('language') !== '__default') {
                $(this).closest('.dropdown-menu').prev('button').html(
                    $(this).find('.text').html()
                );
                $(this).closest('.dropdown-menu').prev('button').removeClass('icon').removeClass('languages');
            } else {
                $(this).closest('.dropdown-menu').prev('button').html(
                    $(this).find('.text').text()
                );
                $(this).closest('.dropdown-menu').prev('button').addClass('icon').addClass('languages');
            }
        });

        $(document).on('click', '.js-AppAdmin_QuickSearchSentences .app-searchSentences-selectAddon [data-addon]', function (e) {
            e.preventDefault();

            $('.js-AppAdmin_QuickSearchSentences .app-searchSentences-selectAddon [data-addon]').removeClass('active');
            $(this).addClass('active');

            if($(this).data('addon') !== '__default') {
                $(this).closest('.dropdown-menu').prev('button').html(
                    $(this).find('.text').text()
                );
                $(this).closest('.dropdown-menu').prev('button').removeClass('icon').removeClass('addons');
                $(this).closest('.dropdown-menu').prev('button').addClass('icon').addClass('puzzle');
            } else {
                $(this).closest('.dropdown-menu').prev('button').html(
                    $(this).find('.text').text()
                );
                $(this).closest('.dropdown-menu').prev('button').removeClass('icon').removeClass('puzzle');
                $(this).closest('.dropdown-menu').prev('button').addClass('icon').addClass('addons');
            }
        });

        function searchSentences() {
            $('.app-box .progress').removeClass('d-none');

            var dataString = {
                language: $('.js-AppAdmin_QuickSearchSentences .app-searchSentences-selectLanguages [data-language].active').data('language'),
                addon: $('.js-AppAdmin_QuickSearchSentences .app-searchSentences-selectAddon [data-addon].active').data('addon'),
                query: $('.js-AppAdmin_QuickSearchSentences input').val()
            };

            app.post("admin/languages?searchAdv", dataString).done(function (response) {
                if (response.status === "ok") {
                    $('.app-box .progress').addClass('d-none');

                    $('.app-sentenceList').html(response.template);
                    $('.app-sentenceList').find('span.fi[data-language]').each(function (index, domEle) {
                        $(this)
                        .addClass('fi-' + $('.app-searchSentences-selectLanguages [data-language="' + $(this).data('language') + '"]').data('flag'))
                        .addClass('--xs');
                    });

                    $('.app-sentenceList .text').each(function (index, domEle) {
                        var text = $(this).text();
                        var regex = new RegExp($('.js-AppAdmin_QuickSearchSentences input').val(), 'ig');
                        text = text.replace(regex, (match, $1) => {
                            return '<span class="font-weight-bold">' + match + '</span>';
                        });
                        $(this).html(text);
                    });
                }
            });
        };

        $(document).on('click', '.js-AppAdmin_QuickSearchSentences .input-group-append button', function (e) {
            e.preventDefault();

            if ($('.js-AppAdmin_QuickSearchSentences input').val().length > 0) {
                return searchSentences();
            }
        });

        $(document).on('keypress', '.js-AppAdmin_QuickSearchSentences input', function (e) {
            if (e.which == 13) {
                e.preventDefault();
                
                if ($('.js-AppAdmin_QuickSearchSentences input').val().length > 0) {
                    return searchSentences();
                }
            }
        });

        $(document).on('click', '.js-AppAdmin_QuickSearchSentences .form-control-clear', function (e) {
            $('.app-sentenceList').html('');
        });
    });

    $(function() {
        $(document).on('click', '.app-newLanguage-selectMain [data-language]', function (e) {
            e.preventDefault();

            $('.app-box .progress').removeClass('d-none');

            $('.app-newLanguage-selectMain [data-language]').removeClass('active');
            $(this).addClass('active');

            var dataString = {
                language: $(this).data('language'),
            };

            app.post("admin/languages?duplicateLanguageInit", dataString).done(function (response) {
                if (response.status === "ok") {
                    $('.app-box .progress').addClass('d-none');

                    $('#admin_languages_new').find('input[name="options[dir]"]').val(response.data.text_direction);
                    $('#admin_languages_new').find('select[name="options[zone]"] option[value="'+response.data.timer.zone+'"]').attr('selected', 'selected');
                    $('#admin_languages_new').find('input[name="options[format]"]').val(response.data.timer.format);
                    $('#admin_languages_new').find('input[name="options[date_format]"]').val(response.data.timer.date_format);
                    $('#admin_languages_new').find('input[name="options[date_format_simple]"]').val(response.data.timer.date_format_simple);
                    $('#admin_languages_new').find('input[name="options[year_format]"]').val(response.data.timer.year_format);

                    app.flashMessage(
                        $('.app-language-new').find('.js-AppAdmin_SelectedMainLanguageMessage span').html(function (i, html) {
                            return html.replace('{1}', response.data.title);
                        }).html()
                    );
                }
            });
        });
    });

    $(function () {
        $("#admin_languages_new").validate({
            submitHandler: function (form, e) {
                e.preventDefault();

                $('.progress').removeClass('d-none');

                var dataString = new FormData();

                var optionsArray = {};
                $("#admin_languages_new").find('[name^="options"]').each(function (index) {
                    var name = $(this).attr('name').split('[').pop().replace(']', '');

                    optionsArray[name] = $(this).val();
                });
                
                if ($('.app-newLanguage-selectMain [data-language].active').length > 0) {
                    dataString.append('copyLanguageName', $('.app-newLanguage-selectMain [data-language].active').data('language'));
                } else {
                    dataString.append('copyLanguageName', "Turkish");
                }

                dataString.append('options', JSON.stringify(optionsArray));

                app.post("admin/languages?create", dataString, false, false).done(function (response) {
                    if (response.status === "ok") {
                        $('.progress').addClass('d-none');

                        app.flashMessage(app.phrases.alert_messages.saved_successfull);

                        window.location.replace(
                            $('.app-box[data-tab="languages"] a.back').attr('href')
                        );
                    }
                });
            }
        });
    });

    $(document).on('click', '[data-template="@ComponentBundle/admin/languages/list"] [data-ui="admin-remove-language"]', function (e) {
		e.preventDefault();
		e.stopPropagation();

        if($(this).closest('[data-language-id]').find('[data-ui="language-switcher"] input').is(':checked')) {
            app.flashMessage(app.phrases.alert_messages.language_remove_default_error, 'warning');
            return false;
        }

		var dataString = {
			language: $(this).closest('[data-language-id]').data('language-id')
		};

		var elem = $(this);

		$('.app-box .progress').removeClass('d-none');  

		app.post("admin/languages?remove", dataString).done(function(response) {
			if(response.status === "ok") {
				$('.app-box .progress').addClass('d-none');     

				if($('#language-delete[data-language-id="'+dataString.language+'"]').length < 1) {
					$('body').append(response.template);

					$('#language-delete[data-language-id="'+dataString.language+'"]').modal();
				} else {
					$('#language-delete[data-language-id="'+dataString.language+'"]').modal();
				}
			}
		}).fail(function(xhr, status, err) {
			console.log(status, err);
		});
	});

    $(document).bind('ajaxStop', function() {
		$('#language-delete form').each(function() {
			var language_id = $(this).closest('#language-delete').data('language-id');

			$(this).validate({
				onfocusout: false,
				submitHandler: function(form,e) {
					e.preventDefault();

					var elem = $('#language-delete[data-language-id="'+language_id+'"]');

					elem.find('button').attr('disabled', true);

					var dataString = {
						language_id: language_id
					};

					app.post("admin/languages?removeLanguageComplete", dataString).done(function(response) {
						if(response.status === "ok") {
							elem.find('button').addClass('succeeded');
							elem.find('button').text(elem.find('button').data('complete-text'));

							elem.find('span.close').click();

                            $('[data-language-id="'+dataString.language_id+'"]').closest('.list').remove();

							app.flashMessage(app.phrases.alert_messages.saved_successfull);
						}
					}).fail(function(xhr, status, err) {
						console.log(status, err);
					});
				}
			});
		});
	});

    $(function () {
        $("#admin_language_install").trackChanges();

        $("#admin_language_install").validate({
            submitHandler: function (form, e) {
                e.preventDefault();

                if ($("#admin_language_install").isChanged()) {
                    $('.app-box .progress').removeClass('d-none');

                    var dataString = new FormData();

                    dataString.append('archive', $("#admin_language_install input#file").get(0).files[0]);

                    app.post("admin/languages?install", dataString, false, false).done(function (response) {
                        if (response.status === "ok") {
                            $('.app-box .progress').addClass('d-none');

                            app.flashMessage(app.phrases.alert_messages.saved_successfull);

                            window.location.replace(
                                $('.app-box[data-tab="languages"] a.back').attr('href')
                            );
                        } else if (response.status === "language-is-exist") {
                            $('.app-box .progress').addClass('d-none');
                            
                            app.flashMessage(app.phrases.alert_messages.language_is_exist, "warning");
                        }
                    });
                }
            }
        });
    });

    $(function () {
        if ($('[data-template="@ComponentBundle/admin/editor/buttons"]').length) {
            var nestedSortables = [].slice.call(document.querySelectorAll('#toolbars #js-AppAdmin_DraggableItems .parent'));
            for (var i = 0; i < nestedSortables.length; i++) {
                new Sortable(nestedSortables[i], {
                    group: 'nested',
                    animation: 150,
                    fallbackOnBody: true,
                    swapThreshold: 0.65,
                    selectedClass: 'selected',
                    filter: '.non-draggable',
                    onEnd: function (evt) {
                        var parents = {};
                        $("#js-AppAdmin_DraggableItems .parent > [data-parent]").each(function (index) {
                            var parent = $(this).data("parent");

                            $('#js-AppAdmin_DraggableItems .parent > [data-parent="' + parent + '"]').removeClass('group-line');

                            if (parents.hasOwnProperty(parent) === false) {
                                $('#js-AppAdmin_DraggableItems .parent > [data-parent="' + parent + '"]').last().addClass('group-line');
                            }

                            $(this).attr('data-order', (index + 1));
                        });
                    },
                    handle: '[data-toggle="dropdown"]'
                });
            }

            var parents = {};
            $("#toolbars #js-AppAdmin_DraggableItems .parent > [data-parent]").each(function (index) {
                var parent = $(this).data("parent");

                if (parents.hasOwnProperty(parent) === false) {
                    $('#js-AppAdmin_DraggableItems .parent > [data-parent="' + parent + '"]').last().addClass('group-line');
                }

                $(this).attr('data-order', (index + 1));
            });

            $("#toolbars #js-AppAdmin_DraggableItems .dropdown-menu").each(function (index) {
                var cloneDropdownMenu = $(this).clone();

                cloneDropdownMenu.removeClass('d-none');
                $(this).prev('.dropdown').find('button').after(cloneDropdownMenu);

                $(this).remove();
            });
        }
    });

    $(document).on('click', '[data-template="@ComponentBundle/admin/editor/buttons"] .tab-content #toolbars button[data-ui="save-order"]', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var elem = $(this).closest('#toolbars');

        $('.app-box .progress').removeClass('d-none');

        var ActiveToolbars = {};
        $('.tab-content #toolbars .active-toolbars [data-id]').each(function (index) {
            ActiveToolbars[$(this).data('id')] = (index + 1);
        });

        var DisableToolbars = {};
        $('.tab-content #toolbars .nonactive-toolbars [data-id]').each(function (index) {
            DisableToolbars[$(this).data('id')] = (index + 1);
        });

        var dataString = {
            activeToolbars: ActiveToolbars,
            disableToolbars: DisableToolbars
        };

        app.post("admin/editor?toolbarConfig", dataString).done(function (response) {
            if (response.status === "ok") {
                $('.app-box .progress').addClass('d-none');

                app.flashMessage(app.phrases.alert_messages.saved_successfull);
            }
        });
    });

    $(function () {
        $('#toolbars .dropdown-menu form').each(function () {
            var toolbar_id = $(this).closest('[data-id]').data('id');

            $(this).validate({
                onfocusout: false,
                submitHandler: function (form, e) {
                    e.preventDefault();

                    var elem = $('#toolbars .parent [data-id="' + toolbar_id + '"]');

                    elem.find('.progress').removeClass('d-none');

                    var dataString = new FormData();

                    var optionsArray = {};
                    elem.find('[name^="options"]').each(function (index) {
                        var name = $(this).attr('name').split('[').pop().replace(']', '');

                        optionsArray[name] = $(this).val();
                    });

                    dataString.append('options', JSON.stringify(optionsArray));
                    dataString.append('toolbar_id', toolbar_id);

                    app.post("admin/editor?toolbarEdit", dataString, false, false).done(function (response) {
                        if (response.status === "ok") {
                            elem.find('.progress').addClass('d-none');

                            app.flashMessage(app.phrases.alert_messages.saved_successfull);
                        }
                    });
                }
            });
        });
    });

    $(function () {
        $("#admin_buttons_edit").validate({
            submitHandler: function (form, e) {
                e.preventDefault();

                $('.progress').removeClass('d-none');

                var dataString = new FormData();

                dataString.append('tag', $('#admin_buttons_edit').find('input[name="tag"]').val());
                dataString.append('content', $('#admin_buttons_edit').find('textarea[name="replace_text"]').val());
                dataString.append('bbcode', $('#admin_buttons_edit').find('input[name="bbcode"]').val());
                dataString.append('is_active', $('#admin_buttons_edit').find('input[name="is_active"]').is(':checked') ? 1 : 0);
                dataString.append('toolbar_name', $('#admin_buttons_edit').find('input[name="toolbar_name"]').val());
                dataString.append('toolbar_button', $('#admin_buttons_edit').find('input[name="toolbar_button"]').val());
                dataString.append('toolbar_icon', $('#admin_buttons_edit').find('textarea[name="toolbar_icon"]').val());
                dataString.append('toolbar_order_by', $('#admin_buttons_edit').find('input[name="toolbar_order_by"]').val());
                dataString.append('toolbar_id', $('#admin_buttons_edit').find('input[name="toolbar_id"]').val());
                dataString.append('button_id', $('#admin_buttons_edit').find('input[name="button_id"]').val());

                app.post("admin/editor?buttonEdit", dataString, false, false).done(function (response) {
                    if (response.status === "ok") {
                        $('.progress').addClass('d-none');

                        console.log(response.data);

                        app.flashMessage(app.phrases.alert_messages.saved_successfull);
                    }
                });
            }
        });
    });

    $(function () {
        if($('.sticky-button').length) {
            $('.sticky-button').width(
                $('.sticky-button').closest('form').width()
            );
        }

        if($('.app-box').height() >= '1000') {
            $('.sticky-button').addClass('is-sticky');
        }
    });

    $(function () {
        $('.datepicker').datepicker({
            autoclose: true,
            startDate: '0',
        }).datepicker("setDate", new Date());
    });

    $(function () {
        if (typeof monaco !== "undefined") {
            if (Storages.cookieStorage.get("night_mode")) {
                monaco.editor.setTheme('vs-dark');
            } else {
                monaco.editor.setTheme('vs');
            }

            $('.app-theme-mode').on('click', function () {
                if ($('.app-theme-mode input').is(':checked')) {
                    monaco.editor.setTheme('vs-dark');
                } else {
                    monaco.editor.setTheme('vs');
                }
            });
        }
    });
}
(window.jQuery, window, document);