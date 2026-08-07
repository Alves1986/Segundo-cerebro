document.documentElement.classList.add('js-ready');

(function ($) {
    if (!$ || !$.fn || !$.fn.select2) {
        return;
    }

    function initSearchableSelects(context) {
        $('select.form-control', context || document).each(function () {
            var $select = $(this);

            if ($select.data('select2') || $select.data('select2Off')) {
                return;
            }

            $select.select2({
                width: '100%',
                allowClear: !$select.prop('required'),
                placeholder: $select.find('option[value=""]').first().text() || 'Selecione ou busque na lista',
                language: {
                    noResults: function () {
                        return 'Nenhum resultado encontrado';
                    },
                    searching: function () {
                        return 'Buscando...';
                    }
                }
            });
        });
    }

    $(function () {
        initSearchableSelects(document);
    });

    $(window).on('load', function () {
        initSearchableSelects(document);
    });

    window.mcInitSearchableSelects = initSearchableSelects;
})(window.jQuery);

(function ($) {
    if (!$) {
        return;
    }

    function initMcSidebar() {
        var $menu = $('#sidebar-menu');

        if (!$menu.length) {
            return;
        }

        $menu.find('a').off('click');

        $menu.find('li').has('ul.child_menu').each(function () {
            var $li = $(this);
            var $submenu = $li.children('ul.child_menu');
            var $trigger = $li.children('a').first();

            if ($li.hasClass('active') || $submenu.find('li.current-page').length) {
                $li.addClass('active');
                $submenu.show();
            } else {
                $submenu.hide();
            }

            $trigger.on('click.mcSidebar', function (event) {
                event.preventDefault();
                event.stopPropagation();

                var aberto = $li.hasClass('active');
                var $irmaos = $li.siblings('li').has('ul.child_menu');

                $irmaos.removeClass('active active-sm');
                $irmaos.children('ul.child_menu').stop(true, true).slideUp(160);

                if (aberto) {
                    $li.removeClass('active active-sm');
                    $submenu.stop(true, true).slideUp(160);
                    return;
                }

                $li.addClass('active');
                $submenu.stop(true, true).slideDown(160);
            });
        });
    }

    $(function () {
        initMcSidebar();
    });

    $(window).on('load', function () {
        initMcSidebar();
    });
})(window.jQuery);

(function ($) {
    if (!$) {
        return;
    }

    var MOBILE_MENU_CLASS = 'mc-mobile-menu-open';

    function isMobileLayout() {
        return window.matchMedia && window.matchMedia('(max-width: 991px)').matches;
    }

    function closeMobileMenu() {
        $('body').removeClass(MOBILE_MENU_CLASS);
    }

    $(function () {
        $('#menu_toggle').on('click.mcMobileMenu', function () {
            if (!isMobileLayout()) {
                closeMobileMenu();
                return;
            }

            $('body').toggleClass(MOBILE_MENU_CLASS);
        });

        $('.left_col a[href]').on('click.mcMobileMenu', function () {
            if (isMobileLayout()) {
                closeMobileMenu();
            }
        });

        $(document).on('click.mcMobileMenu', function (event) {
            if (!isMobileLayout() || !$('body').hasClass(MOBILE_MENU_CLASS)) {
                return;
            }

            if ($(event.target).closest('.left_col, #menu_toggle').length) {
                return;
            }

            closeMobileMenu();
        });

        $(window).on('resize.mcMobileMenu orientationchange.mcMobileMenu', function () {
            if (!isMobileLayout()) {
                closeMobileMenu();
            }
        });
    });
})(window.jQuery);
