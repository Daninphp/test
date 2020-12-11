jQuery(".submit").on('click', function(){
    var id = jQuery(this).attr('id');
    if (confirm("Are you sure you want to approve this comment?")){
        jQuery.ajax({
            url:  'controller/approveHandler.php',
            method: 'post',
            data: {'id': id},
            success: function(data) {
                // jQuery(alert('Comment Approved'))
            },
            error: function(data) {
                // jQuery(alert('There was an error'))
            }
        }).done(function (returnResult) {
            returnResult = JSON.parse(returnResult);
            jQuery('.message-reporting').append('<h2 class="pos-message">' + returnResult + '</h2>');
            setTimeout(function(){
                location.reload();
                jQuery('.pos-message').hide()
            }, 1000);
        })
    } else {
        event.preventDefault();
    }
});