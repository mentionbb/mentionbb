if (window.jQuery === undefined) jQuery = $ = {};

!function ($, window, document) {
    "use strict";

    $(document).on('click', '[data-ui="profile-quick-tab"]', function (e) {
        e.preventDefault();

        $('[data-ui="profile-quick-tab"].active').removeClass('active');
        $(this).addClass('active');

        $('.app-post-container').hide();

        $('.post-loader-spin').show();

        var dataString = {
            user_id: $('.app-profile-info').data('user-id'),
            order: $('[data-ui="order-profile-posts"].active').data('order'),
            tab: $(this).data('tab')
        };

        var elem = $(this);

        app.post("post/quick-tabs", dataString).done(function (response) {
            if (response.status === "ok") {
                $('.post-loader-spin').hide();

                $('.app-post-container').html(response.template);
                $('.app-post-container').show();

                $('[data-ui="order-profile-posts"]').each(function (index) {
                    if (elem.data('tab') === 'posts') {
                        $(this).attr('href',
                            $(this).data('href')
                        );
                    } else if (elem.data('tab') === 'discussions') {
                        $(this).attr('href',
                            $(this).data('toggle-href')
                        );
                    }
                });

                window.history.pushState(null, null, $('[data-ui="order-profile-posts"].active').attr('href'));
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(document).on('click', '[data-ui="load-more-profile-posts"]', function () {
        $('[data-ui="load-more-profile-posts"]').remove();

        $('.post-loader-spin').show();

        var dataString = {
            next_id: $(this).data('next-id'),
            current_page: $(this).data('current-page'),
            user_id: $('.app-profile-info').data('user-id'),
            order: $('[data-ui="order-profile-posts"].active').data('order'),
            tab: $('[data-ui="profile-quick-tab"].active').data('tab')
        };

        app.post("post/profile-posts-next-page", dataString).done(function (response) {
            if (response.status === "ok") {
                $('[data-ui="load-more-profile-posts"]').attr('data-current-page', response.current_page)

                $('.post-loader-spin').hide();

                $('.app-post-container').append(response.template);
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(document).on('click', '[data-ui="order-profile-posts"]', function (e) {
        e.preventDefault();

        $('[data-ui="order-profile-posts"]').removeClass('active');
        $('.app-post-container').addClass('d-none');

        $(this).addClass('active');

        $('.app-order-profile-post button').text($(this).text());
        $('.app-order-profile-post button').alterClass('order-*', '');
        $('.app-order-profile-post button').addClass('order-' + $(this).data('order'));

        $('.post-loader-spin').show();

        var dataString = {
            user_id: $('.app-profile-info').data('user-id'),
            order: $(this).data('order'),
            tab: $('[data-ui="profile-quick-tab"].active').data('tab')
        };

        $(this).addClass('active');

        var elem = $(this);

        app.post("post/order-profile-posts", dataString).done(function (response) {
            if (response.status === "ok") {
                $('.post-loader-spin').hide();

                $('.app-post-container').html(response.template);
                $('.app-post-container').removeClass('d-none');

                window.history.pushState(null, null, elem.attr('href'));
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(document).on('click', '[data-ui="add-as-friend"]', function (e) {
        e.preventDefault();

        var dataString = {
            user_id: $('.app-profile-info').data('user-id'),
        };

        app.post("account/add-friend", dataString).done(function (response) {
            if (response.status === "ok") {
                $('.post-loader-spin').hide();

                $('[data-ui="add-as-friend"]').text($('[data-ui="add-as-friend"]').data('complete-text'));

                $('[data-ui="add-as-friend"]').removeClass('add-friend');
                $('[data-ui="add-as-friend"]').addClass('awaiting-friend');

                $('[data-ui="add-as-friend"]').attr('data-ui', 'remove-friend');

                app.flashMessage(app.phrases.alert_messages.add_friend);
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(document).on('click', '[data-ui="remove-friend"]', function (e) {
        e.preventDefault();

        var dataString = {
            user_id: $('.app-profile-info').data('user-id'),
        };

        app.post("account/remove-friend", dataString).done(function (response) {
            if (response.status === "ok") {
                $('.post-loader-spin').hide();

                $('[data-ui="remove-friend"]').text($('[data-ui="remove-friend"]').data('text'));

                $('[data-ui="remove-friend"]').removeClass('remove-friend');
                $('[data-ui="remove-friend"]').removeClass('awaiting-friend');
                $('[data-ui="remove-friend"]').addClass('add-friend');

                $('[data-ui="remove-friend"]').attr('data-ui', 'add-as-friend');

                app.flashMessage(app.phrases.alert_messages.remove_friend);
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(function () {
        if ($('[data-ui="order-profile-posts"].active').length > 0) {
            var profile_tab_regex = /(posts|discussions)(\/)?(newest|top-likes|oldest)?$/g;

            if (window.location.href.match(profile_tab_regex)) {
                $('.app-forums [data-ui="profile-quick-tab"].active').removeClass('active');

                var tab = profile_tab_regex.exec(window.location.href);

                $('.app-forums [data-tab="' + tab[1] + '"]').click();
                $('.app-forums [data-tab="' + tab[1] + '"]').addClass('active');
                $('[data-ui="order-profile-posts"][data-order="' + tab[3] + '"]').click();
            }
        }
    });
}(window.jQuery, window, document);