if (window.jQuery === undefined) jQuery = $ = {};

!(function ($, window, document) {
    "use strict";

    $.fn.extend({
        isChanged: function () {
            return this.data("changed");
        },

        //https://stackoverflow.com/a/8015864
        hasClasses: function (selectors) {
            var self = this;
            for (var i in selectors) {
                if ($(self).hasClass(selectors[i]))
                    return true;
            }
            return false;
        },

        trackChanges: function () {
            $(":input", this).change(function () {
                $(this.form).data("changed", true);
            });
        },

        alterClass: function (removals, additions) {
            var self = this;

            if (removals.indexOf("*") === -1) {
                self.removeClass(removals);
                return !additions ? self : self.addClass(additions);
            }

            var patt = new RegExp("\\s" + removals.replace(/\*/g, "[A-Za-z0-9-_]+").split(" ").join("\\s|\\s") + "\\s", "g");

            self.each(function (i, it) {
                var cn = " " + it.className + " ";
                while (patt.test(cn)) {
                    cn = cn.replace(patt, " ");
                }
                it.className = $.trim(cn);
            });

            return !additions ? self : self.addClass(additions);
        },

        isOnScreen: function () {
            var win = $(window);

            var viewport = {
                top: win.scrollTop(),
                left: win.scrollLeft(),
            };
            viewport.right = viewport.left + win.width();
            viewport.bottom = viewport.top + win.height();

            var bounds = this.offset();
            bounds.right = bounds.left + this.outerWidth();
            bounds.bottom = bounds.top + this.outerHeight();

            return !(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom);
        },

        donetyping: function (callback, timeout) {
            timeout = timeout || 1e3; // 1 second default timeout
            var timeoutReference,
                doneTyping = function (el) {
                    if (!timeoutReference) return;
                    timeoutReference = null;
                    callback.call(el);
                };
            return this.each(function (i, el) {
                var $el = $(el);
                // Chrome Fix (Use keyup over keypress to detect backspace)
                // thank you @palerdot
                $el.is(":input") &&
                    $el
                        .on("keyup keypress paste", function (e) {
                            // This catches the backspace button in chrome, but also prevents
                            // the event from triggering too preemptively. Without this line,
                            // using tab/shift+tab will make the focused element fire the callback.
                            if (e.type == "keyup" && e.keyCode != 8) return;

                            // Check if timeout has been set. If it has, "reset" the clock and
                            // start over again.
                            if (timeoutReference) clearTimeout(timeoutReference);
                            timeoutReference = setTimeout(function () {
                                // if we made it here, our timeout has elapsed. Fire the
                                // callback
                                doneTyping(el);
                            }, timeout);
                        })
                        .on("blur", function () {
                            // If we can, fire the event since we're leaving the field
                            doneTyping(el);
                        });
            });
        },

        stickySidebar: function (options) {
            var defaults = {
                containerSelector: "",
                additionalMarginTop: 0,
                additionalMarginBottom: 0,
                updateSidebarHeight: true,
                minWidth: 0,
                disableOnResponsiveLayouts: true,
                sidebarBehavior: "modern",
            };

            options = $.extend(defaults, options);

            options.additionalMarginTop = parseInt(options.additionalMarginTop) || 0;
            options.additionalMarginBottom = parseInt(options.additionalMarginBottom) || 0;

            tryInitOrHookIntoEvents(options, this);

            function tryInitOrHookIntoEvents(options, $that) {
                var success = tryInit(options, $that);

                if (!success) {
                    console.log("TST: Body width smaller than options.minWidth. Init is delayed.");

                    $(document).scroll(
                        (function (options, $that) {
                            return function (evt) {
                                var success = tryInit(options, $that);

                                if (success) {
                                    $(this).unbind(evt);
                                }
                            };
                        })(options, $that)
                    );
                    $(window).resize(
                        (function (options, $that) {
                            return function (evt) {
                                var success = tryInit(options, $that);

                                if (success) {
                                    $(this).unbind(evt);
                                }
                            };
                        })(options, $that)
                    );
                }
            }

            function tryInit(options, $that) {
                if (options.initialized === true) {
                    return true;
                }

                if ($("body").width() < options.minWidth) {
                    return false;
                }

                init(options, $that);

                return true;
            }

            function init(options, $that) {
                options.initialized = true;

                $("head").append($('<style>.StickySidebar:after {content: ""; display: table; clear: both;}</style>'));

                $that.each(function () {
                    var o = {};

                    o.sidebar = $(this);

                    o.options = options || {};

                    o.container = $(o.options.containerSelector);
                    if (o.container.length == 0) {
                        o.container = o.sidebar.parent();
                    }

                    o.sidebar.parents().css("-webkit-transform", "none");
                    o.sidebar.css({
                        position: "relative",
                        overflow: "visible",

                        "-webkit-box-sizing": "border-box",
                        "-moz-box-sizing": "border-box",
                        "box-sizing": "border-box",
                    });

                    o.stickySidebar = o.sidebar.find(".StickySidebar");
                    if (o.stickySidebar.length == 0) {
                        o.sidebar.find("script").remove();
                        o.stickySidebar = $("<div>").addClass("StickySidebar").append(o.sidebar.children());
                        o.sidebar.append(o.stickySidebar);
                    }

                    o.marginTop = parseInt(o.sidebar.css("margin-top"));
                    o.marginBottom = parseInt(o.sidebar.css("margin-bottom"));
                    o.paddingTop = parseInt(o.sidebar.css("padding-top"));
                    o.paddingBottom = parseInt(o.sidebar.css("padding-bottom"));

                    var collapsedTopHeight = o.stickySidebar.offset().top;
                    var collapsedBottomHeight = o.stickySidebar.outerHeight();
                    o.stickySidebar.css("padding-top", 1);
                    o.stickySidebar.css("padding-bottom", 1);
                    collapsedTopHeight -= o.stickySidebar.offset().top;
                    collapsedBottomHeight = o.stickySidebar.outerHeight() - collapsedBottomHeight - collapsedTopHeight;
                    if (collapsedTopHeight == 0) {
                        o.stickySidebar.css("padding-top", 0);
                        o.stickySidebarPaddingTop = 0;
                    } else {
                        o.stickySidebarPaddingTop = 1;
                    }

                    if (collapsedBottomHeight == 0) {
                        o.stickySidebar.css("padding-bottom", 0);
                        o.stickySidebarPaddingBottom = 0;
                    } else {
                        o.stickySidebarPaddingBottom = 1;
                    }

                    o.previousScrollTop = null;

                    o.fixedScrollTop = 0;

                    resetSidebar();

                    o.onScroll = function (o) {
                        if (!o.stickySidebar.is(":visible")) {
                            return;
                        }

                        if ($("body").width() < o.options.minWidth) {
                            resetSidebar();
                            return;
                        }

                        if (o.options.disableOnResponsiveLayouts) {
                            var sidebarWidth = o.sidebar.outerWidth(o.sidebar.css("float") == "none");

                            if (sidebarWidth + 50 > o.container.width()) {
                                resetSidebar();
                                return;
                            }
                        }

                        var scrollTop = $(document).scrollTop();
                        var position = "static";

                        if (scrollTop >= o.container.offset().top + (o.paddingTop + o.marginTop - o.options.additionalMarginTop)) {
                            var offsetTop = o.paddingTop + o.marginTop + options.additionalMarginTop;
                            var offsetBottom = o.paddingBottom + o.marginBottom + options.additionalMarginBottom;

                            var containerTop = o.container.offset().top;
                            var containerBottom = o.container.offset().top + getClearedHeight(o.container);

                            var windowOffsetTop = 0 + options.additionalMarginTop;
                            var windowOffsetBottom;

                            var sidebarSmallerThanWindow = o.stickySidebar.outerHeight() + offsetTop + offsetBottom < $(window).height();
                            if (sidebarSmallerThanWindow) {
                                windowOffsetBottom = windowOffsetTop + o.stickySidebar.outerHeight();
                            } else {
                                windowOffsetBottom = $(window).height() - o.marginBottom - o.paddingBottom - options.additionalMarginBottom;
                            }

                            var staticLimitTop = containerTop - scrollTop + o.paddingTop + o.marginTop;
                            var staticLimitBottom = containerBottom - scrollTop - o.paddingBottom - o.marginBottom;

                            var top = o.stickySidebar.offset().top - scrollTop;
                            var scrollTopDiff = o.previousScrollTop - scrollTop;

                            if (o.stickySidebar.css("position") == "fixed") {
                                if (o.options.sidebarBehavior == "modern") {
                                    top += scrollTopDiff;
                                }
                            }

                            if (o.options.sidebarBehavior == "stick-to-top") {
                                top = options.additionalMarginTop;
                            }

                            if (o.options.sidebarBehavior == "stick-to-bottom") {
                                top = windowOffsetBottom - o.stickySidebar.outerHeight();
                            }

                            if (scrollTopDiff > 0) {
                                top = Math.min(top, windowOffsetTop);
                            } else {
                                top = Math.max(top, windowOffsetBottom - o.stickySidebar.outerHeight());
                            }

                            top = Math.max(top, staticLimitTop);

                            top = Math.min(top, staticLimitBottom - o.stickySidebar.outerHeight());

                            var sidebarSameHeightAsContainer = o.container.height() == o.stickySidebar.outerHeight();

                            if (!sidebarSameHeightAsContainer && top == windowOffsetTop) {
                                position = "fixed";
                            } else if (!sidebarSameHeightAsContainer && top == windowOffsetBottom - o.stickySidebar.outerHeight()) {
                                position = "fixed";
                            } else if (scrollTop + top - o.sidebar.offset().top - o.paddingTop <= options.additionalMarginTop) {
                                position = "static";
                            } else {
                                position = "absolute";
                            }
                        }

                        if (position == "fixed") {
                            o.stickySidebar.css({
                                position: "fixed",
                                width: o.sidebar.width(),
                                top: top,
                                left: o.sidebar.offset().left + parseInt(o.sidebar.css("padding-left")),
                            });
                        } else if (position == "absolute") {
                            var css = {};

                            if (o.stickySidebar.css("position") != "absolute") {
                                css.position = "absolute";
                                css.top = scrollTop + top - o.sidebar.offset().top - o.stickySidebarPaddingTop - o.stickySidebarPaddingBottom;
                            }

                            css.width = o.sidebar.width();
                            css.left = "";

                            o.stickySidebar.css(css);
                        } else if (position == "static") {
                            resetSidebar();
                        }

                        if (position != "static") {
                            if (o.options.updateSidebarHeight == true) {
                                o.sidebar.css({
                                    "min-height": o.stickySidebar.outerHeight() + o.stickySidebar.offset().top - o.sidebar.offset().top + o.paddingBottom,
                                });
                            }
                        }

                        o.previousScrollTop = scrollTop;
                    };

                    o.onScroll(o);

                    $(document).scroll(
                        (function (o) {
                            return function () {
                                o.onScroll(o);
                            };
                        })(o)
                    );
                    $(window).resize(
                        (function (o) {
                            return function () {
                                o.stickySidebar.css({ position: "static" });
                                o.onScroll(o);
                            };
                        })(o)
                    );

                    function resetSidebar() {
                        o.fixedScrollTop = 0;
                        o.sidebar.css({
                            "min-height": "1px",
                        });
                        o.stickySidebar.css({
                            position: "static",
                            width: "",
                        });
                    }

                    function getClearedHeight(e) {
                        var height = e.height();

                        e.children().each(function () {
                            height = Math.max(height, $(this).height());
                        });

                        return height;
                    }
                });
            }
        },

        replaceText: function (search, replace, text_only) {
            return this.each(function () {
                var node = this.firstChild,
                    val, new_val, remove = [];
                if (node) {
                    do {
                        if (node.nodeType === 3) {
                            val = node.nodeValue;
                            new_val = val.replace(search, replace);
                            if (new_val !== val) {
                                if (!text_only && /</.test(new_val)) {
                                    $(node).before(new_val);
                                    remove.push(node);
                                } else {
                                    node.nodeValue = new_val;
                                }
                            }
                        }
                    } while (node = node.nextSibling);
                }
                remove.length && $(remove).remove();
            });
        }
    });

    Storages.cookieStorage.setConf({
        path: '/',
        expires: 30
    });

    if ('serviceWorker' in navigator) {
        window.addEventListener('load', function () {
            navigator.serviceWorker.register(app.config.settings.site_url + '/service-worker.js').then(function (registration) {

            }, function (err) {
                console.log('ServiceWorker registration failed: ', err);
            }).catch(function (err) {
                console.log(err);
            });
        });
    } else {
        console.log('service worker is not supported');
    }

    $(function () {
        if ($('textarea[data-single-line="true"]').length) {
            document.querySelector('textarea[data-single-line="true"]').addEventListener("keydown", (e) => {
                if (e.keyCode === 13) e.preventDefault();
            });
        }
    });

    $(document).on("click", ".dropdown:not(.bootstrap-select) .dropdown-menu", function (e) {
        e.stopPropagation();
    });

    $(document).on("click", '[data-ui="show-editor"], .app-post-create .bootstrap-select > .dropdown-menu a', function () {
        if (!tinymce.get('post-editor') || $(".app-post-create .app-writer-area").hasClass('d-none')) {
            $(".app-post-create .progress").removeClass("d-none");

            app.editorConfig("#post-editor");

            setTimeout(function () {
                $(".app-post-create .app-writer-area").removeClass("d-none");
                $('.app-post-create .post-content [name="post-title"]').focus();

                if ($(".title-area.in-discussion").length) {
                    $(".title-area.in-discussion").removeClass("d-flex");
                    $(".title-area.in-discussion").hide();

                    if ($(this).data("scroll")) {
                        app.scrollTopAnchor($(".app-post-create"));
                    }

                    tinyMCE.activeEditor.focus();
                }

                $(".app-post-create .progress").addClass("d-none");
            }, 200);

            setTimeout(function () {
                $(".app-writer-area")
                    .removeClass("animate")
                    .removeClass("slideIn");
            }, 500);

            if ($(".app-writer-area").closest('.app-post-container').length) {
                setTimeout(function () {
                    $(".app-post-container")
                        .removeClass("animate")
                        .removeClass("slideIn");
                }, 500);
            }
        }
    });

    $(function () {
        $(".navbar .search-container :input").donetyping(function () {
            if ($(this).val().length > 0 && $(this).val() != ' ') {
                $('.navbar .search-container').addClass('show');

                $('.navbar .search-container > .search-results').addClass('animate');
                $('.navbar .search-container > .search-results').addClass('fadeIn');
                $('.navbar .search-container > .search-results').removeClass('d-none');

                $('.navbar .search-container > .search-results .load-area').nextAll().remove();
                $('.navbar .search-container > .search-results .load-area').addClass('d-block');

                var dataString = {
                    keyword: $(this).val()
                };

                if ($('body .search-results-backdrop').length < 1) {
                    $('body').append('<div class="modal-backdrop search-results-backdrop show"></div>');
                }

                $(".navbar").css("z-index", "1041");
                $(".navbar").addClass('sticky-top');

                app.post("search/quick-search", dataString).done(function (response) {
                    if (response.status === "ok") {
                        $('.navbar .search-container > .search-results .load-area').removeClass('d-block');
                        $('.navbar .search-container > .search-results .load-area').addClass('d-none');

                        $('.navbar .search-container > .search-results .load-area').after(response.template);

                        $('.navbar .search-container > .search-results .discussions a > span').replaceText(new RegExp('(' + dataString.keyword + ')', 'gi'), '<span class="font-weight-bold">$1</span>');
                        $('.navbar .search-container > .search-results .users a > span').replaceText(new RegExp('(' + dataString.keyword + ')', 'gi'), '<span class="font-weight-bold">$1</span>');
                    }
                }).fail(function (xhr, status, err) {
                    console.log(status, err);
                });
            }
        });
    });

    $(document).on('click', '.navbar .search-container .form-control-clear', function (e) {
        $('.navbar .search-container').removeClass('show');

        //$('.navbar .search-container > .search-results .load-area').nextAll().remove();

        $('.navbar .search-container > .search-results').addClass('d-none');

        $('.navbar .search-container > .search-results').removeClass('animate');
        $('.navbar .search-container > .search-results').removeClass('fadeIn');

        $('.modal-backdrop.search-results-backdrop').remove();

        $(".navbar").css("z-index", "1");
        $(".navbar").removeClass('sticky-top');
    });

    $(document).on('click', '.modal-backdrop.search-results-backdrop', function (e) {
        $('.navbar .search-container').removeClass('show');

        //$('.navbar .search-container > .search-results .load-area').nextAll().remove();

        $('.navbar .search-container > .search-results').addClass('d-none');

        $('.navbar .search-container > .search-results').removeClass('animate');
        $('.navbar .search-container > .search-results').removeClass('fadeIn');

        $('.modal-backdrop.search-results-backdrop').remove();

        $(".navbar").css("z-index", "1");
        $(".navbar").removeClass('sticky-top');
    });

    $(document).on('click', '.navbar .search-container input[type="text"]', function (e) {
        if ($('.navbar .search-container > .search-results .load-area').nextAll().length > 0) {
            $('.navbar .search-container').addClass('show');

            $('.navbar .search-container > .search-results').removeClass('d-none');

            $('.navbar .search-container > .search-results').addClass('animate');
            $('.navbar .search-container > .search-results').addClass('fadeIn');

            if ($('body .search-results-backdrop').length < 1) {
                $('body').append('<div class="modal-backdrop search-results-backdrop show"></div>');
            }

            $(".navbar").css("z-index", "1041");
            $(".navbar").addClass('sticky-top');
        }
    });

    $(document).on('click', '.notification .friendship-request-buttons > button', function (e) {
        if ($(this).hasClass('approve')) {
            var elem = $(this);

            var dataString = {
                sender_id: $(this).closest('.friendship-request-buttons').data('sender-id')
            };

            app.post("account/approve-request-friend", dataString).done(function (response) {
                if (response.status === "ok") {
                    elem.closest('.friendship-request-buttons').find('.approved-friendship-request').show();
                    elem.closest('.friendship-request-buttons').find('button').remove();
                }
            }).fail(function (xhr, status, err) {
                console.log(status, err);
            });
        } else {
            var elem = $(this);

            var dataString = {
                sender_id: $(this).closest('.friendship-request-buttons').data('sender-id')
            };

            app.post("account/remove-friend", dataString).done(function (response) {
                if (response.status === "ok") {
                    elem.closest('.friendship-request-buttons').find('.removed-friendship-request').show();
                    elem.closest('.friendship-request-buttons').find('button').remove();
                }
            }).fail(function (xhr, status, err) {
                console.log(status, err);
            });
        }
    });

    $('.checkbox.switcher > label').on('click', function () {
        if (!$(this).find('input').is(':checked')) {
            $(this).find('input').removeAttr('checked');
        } else {
            $(this).find('input').attr('checked', true);
        }
    });

    $(function () {
        $('.has-clear input[type="text"]').on('input propertychange', function () {
            var $this = $(this);
            var visible = Boolean($this.val());
            $this.siblings('.form-control-clear').toggleClass('d-none', !visible);
        }).trigger('propertychange');

        $('.form-control-clear').click(function () {
            $(this).siblings('input[type="text"]').val('')
                .trigger('propertychange').focus();
        });
    });

    $(function () {
        var cookieAlert = document.querySelector(".cookiealert");
        var acceptCookies = document.querySelector(".acceptcookies");

        cookieAlert.offsetHeight; // Force browser to trigger reflow (https://stackoverflow.com/a/39451131)

        if (!Storages.localStorage.get("acceptCookies")) {
            cookieAlert.classList.add("show");
        }

        acceptCookies.addEventListener("click", function () {
            Storages.localStorage.set("acceptCookies", true);
            cookieAlert.classList.remove("show");
        });
    });

    $(function () {
        if ($('.sticky').length > 0) {
            $('.sticky').stickySidebar({
                additionalMarginTop: 40
            });
        }
    });

    $(document).on('focusin', function (e) {
        if ($(e.target).closest(".tox-tinymce, .tox-tinymce-aux, .moxman-window, .tam-assetmanager-root").length) {
            e.stopImmediatePropagation();
        }
    });

    $(document).ready(function () {
        app.initTooltip();
    });

    $(document).bind('ajaxStop', function () {
        app.initTooltip();
    });
})(window.jQuery, window, document);