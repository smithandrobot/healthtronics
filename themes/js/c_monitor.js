// arguments are passed in as strings 
// of the elements to be read and altered
function CMonitorForm(form, btn, input, header, details)
{
    var form = $(form)
      , btn = $(btn)
      , input = $(input)
      , emailHeader = $(header)
      , emailDetails = $(details)
      , formAction
      , emailId
      , str
      , final
    
    log(form);
    form.submit(function() { return false; })
    btn.click(emailSubmit);
    
    function emailSubmit()
    {	
    	// First, disable the form from submitting
    	form.submit(function() { return false; });
        formAction = form.attr("action");
        emailId = "djktky";
    	emailId = emailId + "-" + emailId;
    	
    	if (!checkEmail()) 
    	{
            input.css({color:'red'});
            input.val('Please enter a valid email address.')
    		return;
    	}
    	
    	str = form.serialize();
    	final = str + "&action=" + formAction;
    	log('final: '+final);
        emailHeader.text('Submitting...');
        emailDetails.text('Thanks for waiting.');
    	$.ajax({
    		url: formAction,
    		type: "POST",
    		data: final,
    		dataType:'jsonp',
    		success: onSuccess,
    		error:onError 
    	});
    }

    function checkEmail(email)
    {	
    	var pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    	var emailVal = input.val();
    	return pattern.test(emailVal);
    }
    
    function onSuccess(d)
    {
        if(d.Status==200)
        {
          log(d);
          emailHeader.text('Thanks!');
          emailDetails.text('You are now subscribed to recieve HealthTronics email alerts.');
          form.fadeOut("fast");
        }else{
          emailHeader.text('Ooops!');
          emailDetails.text('Something went wrong. Please try again');
        }
    }
    
    function onError(xhr, ajaxOptions, thrownError)
    {
        log("ERROR:"); 
        log(thrownError);
        log(ajaxOptions);
        log(xhr);
        emailHeader.text('Ooops!');
        emailDetails.text('Something went wrong. Please try again');
    }
}


function log(s)
{
    try{
        console.log(s);
    }catch(e){
        // no console object;
    }
    
}