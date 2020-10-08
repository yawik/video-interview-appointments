/**
 * YAWIK Video Interview Appointments
 *
 * @see       https://github.com/yawik/video-interview-appointments for the canonical source repository
 * @copyright https://github.com/yawik/video-interview-appointments/blob/master/COPYRIGHT
 * @license   https://github.com/yawik/video-interview-appointments/blob/master/LICENSE
 */

(function ($) {
    $(function() {
        var $box = $('#via-invite-box');
        $box.find('#via-invite-sending, #via-invite-done, #via-invite-cancel').hide();
        $box.find('#via-invite-box-send').on('click', function(event) {
            $box.find('button').hide();
            $box.find('#via-invite-sending').show();
            $box.find('#via-invite-collect').hide();
            setTimeout(function() {
                $box.find('#via-invite-done').show();
                $box.find('#via-invite-sending').hide();
                $box.find('#via-invite-box-send').hide();
                $box.find('#via-invite-cancel').show();
            }, 3000);
        });


    });
})(jQuery);


