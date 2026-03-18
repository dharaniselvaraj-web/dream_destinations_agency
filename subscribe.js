$(document).ready(function() {
    $('#subscribeForm').on('submit', function(e) {
        e.preventDefault();

        var form = $(this);
        var submitBtn = $('#subscribeBtn');
        var messageDiv = $('#subscribe-message');
        
        messageDiv.text('Subscribing...').css('color', 'black').css('background', 'lightyellow').show();
        submitBtn.prop('disabled', true);

        $.ajax({
            type: 'POST',
            url: form.attr('action'), 
            data: form.serialize(),
            dataType: 'json',
            success: function(response) {
                var color;
                if (response.status === 'success') {
                    color = 'green';
                    form.trigger('reset'); 
                } else if (response.status === 'info') {
                    color = 'orange'; 
                } else {
                    color = 'red';
                }
                
                messageDiv.text(response.message).css('color', color).css('background', 'white');
                submitBtn.prop('disabled', false); 
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log("Subscription AJAX Error:", jqXHR.responseText);
                messageDiv.text('Subscription failed due to server error.').css('color', 'red').css('background', 'white');
                submitBtn.prop('disabled', false);
            }
        });
    });
});