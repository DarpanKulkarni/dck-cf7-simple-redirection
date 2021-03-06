(function ($) {
    'use strict';

    $(document).ready(function () {
        $('#dck_cf7_sr_type').on('change', function () {
            toggle_destination($(this).val());
        }).trigger('change');

        function toggle_destination(type) {
            if (type === 'page') {
                $('#dck_cf7_sr_page_row').show();
                $('#dck_cf7_sr_custom_url_row').hide();
            } else {
                $('#dck_cf7_sr_page_row').hide();
                $('#dck_cf7_sr_custom_url_row').show();
            }
        }
    });

})(jQuery);
