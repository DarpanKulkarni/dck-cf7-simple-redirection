(function () {
    document.addEventListener('wpcf7mailsent', function (e) {
        var dck_cf7_sr = e.detail.apiResponse.dck_cf7_sr;

        if (dck_cf7_sr.enabled) {
            var new_tab = dck_cf7_sr.new_tab;
            var delay = dck_cf7_sr.delay * 1000;

            setTimeout(function () {
                if (dck_cf7_sr.type === 'page') {
                    redirect(dck_cf7_sr.page_url, new_tab);
                } else if (dck_cf7_sr.type === 'custom_url' && isValidHttpUrl(dck_cf7_sr.custom_url)) {
                    redirect(dck_cf7_sr.custom_url, new_tab);
                }
            }, delay);
        }

        function redirect(destination, new_tab = false) {
            new_tab ? window.open(destination, '_blank') : window.location.href = destination;
        }

        function isValidHttpUrl(string) {
            var url;

            try {
                url = new URL(string);
            } catch (_) {
                return false;
            }

            return url.protocol === "http:" || url.protocol === "https:";
        }
    }, false);
})(jQuery);
