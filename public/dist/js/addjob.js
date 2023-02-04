
// shopw the input that determine how pall to the job
$(document).on("change", "#apply-job", function (e) {
    var container  = $('#to_apply');
    container.html('<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>')
    var value = $(this).val();
    container.removeClass('text-center');
    if (value == "email_to_apply") {
        $('#to_apply').html('<label for="job-location">What\'s email</label><input name="to_apply" type="text" class="form-control" id="job-location" placeholder="company@apply.com">')
    } else $('#to_apply').html('<label for="job-location">What\'s link</label><input  name="to_apply" type="text" class="form-control" id="job-location" placeholder="https://">')

   
    
    
    
    
});



