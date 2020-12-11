jQuery("#submit").on('click', function(){
    if (jQuery.trim(jQuery("#name").val()) === "" || jQuery.trim(jQuery("#email").val()) === "" || jQuery.trim(jQuery("#comment").val()) === "") {
        alert('You did not fill out one or more fields');
        return false;
    } else {
        jQuery.ajax({
            url:  'controller/commentsHandler.php',
            method: 'post',
            data : jQuery("#comment-create").serialize(),
        }).done(function (returnResult) {
            returnResult = JSON.parse(returnResult);
            jQuery('.message-reporting').append('<h2 class="pos-message">' + returnResult + '</h2>');
            setTimeout(function(){ jQuery('.pos-message').hide() }, 2000);
            jQuery('#comment-create').find('input:text').val('');
            jQuery("#email").val('');
            jQuery('#comment-create').find('textarea').val('');

        })
    }
});