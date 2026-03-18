$(document).ready(function() {
    var modal = $('#enquiryModal');
    var thankYou = $('#thankYouContainer');
    var enquiryForm = $('#enquiryFormWrapper'); 
    var serviceNameSelect = $('#serviceNameInput'); 
    var statusMessage = $('.form-status-message'); 

    function getMatchingServiceValue(h1Text) {
        let text = h1Text.trim();

        let normalizedH1 = text.toLowerCase().replace(/[^a-z0-9& ]/g, '').trim();
        
        const serviceMap = {
        'flights': 'Flights', 
        'cabs & coaches': 'Cabs & Coaches',
        'cruise vacations': 'Cruise Vacations',
        'day outings': 'Day Outings',
        'surprise anniversary & birthday outings': 'Surprise Anniversary & Birthday outings',
        'students educational tours': 'Students Educational Tours',
        'events & meetings': 'Events & Meetings',
        'food for occasions': 'Food for Occasions',
        'passport': 'Passport',
        'visa': 'Visa',
        'hotels stay': 'Hotels Stay'
    };
        
        
        return serviceMap[normalizedH1] || text; 
    }

    $('.enquiryBtn').on('click', function() {
        var serviceGroup = $(this).closest('.service-group');
        var serviceH1Text = serviceGroup.find('h1').text().trim();
        
        var serviceValueToSelect = getMatchingServiceValue(serviceH1Text);

        $('#enquirySubmitForm').trigger('reset');
        
        serviceNameSelect.val(serviceValueToSelect); 

        $('.get-quotes-btn').prop('disabled', false); 
        statusMessage.hide();
        
        enquiryForm.show();
        thankYou.hide();
        modal.show();
    });

   $('.quote-btn').on('click', function(e) {
    e.preventDefault();

    $('#enquirySubmitForm').trigger('reset'); 
    enquiryForm.show();
    thankYou.hide();
    statusMessage.hide();
    
    modal.show();
});

   
    $('.close-btn').on('click', function() {
        modal.hide();
    });

    $(window).on('click', function(event) {
        if (event.target.id === 'enquiryModal') {
            modal.hide();
        }
    });

    $('#enquirySubmitForm').on('submit', function(e) {
        e.preventDefault();

        statusMessage.text('Submitting enquiry...').css('color', 'darkturquoise').show();
        $('.get-quotes-btn').prop('disabled', true); 

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'), 
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
               if (response.status === 'success') {
                enquiryForm.fadeOut(300, function() {
                    thankYou.fadeIn(300);
                });
                statusMessage.hide(); 
            }else {
                    
                    statusMessage.text('Error: ' + (response.message || 'Submission failed.')).css('color', 'red');
                    $('.get-quotes-btn').prop('disabled', false); 
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                
                console.log("AJAX Error Details:", jqXHR.responseText); 
                
                statusMessage.text('Server Error: Check console for responseText.').css('color', 'red').show();
                $('.get-quotes-btn').prop('disabled', false);
            }
        });
    });
    
});