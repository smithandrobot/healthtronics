$(
    function()
    { 
        var share = new ShareThis();
    }
)

function ShareThis()
{
    //alert('share this');
    var form = $('#share-email')
      , btn = $('#share-page-btn')
      , str
      , emailHeader = $('.share-headline')
      , orgHeadline = emailHeader.html()
      , orgColor = $('#to-email').css('color')
      , toEmail = $('#to-email')
      , fromEmail = $('#from-email')
      , message = $('#message')

      form.submit(function() { return false; })
      btn.click(emailSubmit);
    
      function emailSubmit()
      {
          form.submit(function() { return false; });
          formAction = form.attr("action");
          str = form.serialize();
          log('submitting');
          if(!validate()) return;
          
          emailHeader.html('Submitting...');
          
          $.ajax({
          	url: formAction,
          	type: "POST",
          	data: str,
          	success: onSuccess,
          	error:onError 
          });
      }
    
      function onSuccess(d)
      {
          log(d);
          emailHeader.html(orgHeadline);
          toEmail.val('To (email address)');
          fromEmail.val('Sender\'s Email');
          message.val('Your Message');
      }
    
      function onError(xhr, ajaxOptions, thrownError)
      {
          log("ERROR:"); 
          log(thrownError);
          log(ajaxOptions);
          log(xhr);
          emailHeader.text('Ooops! Something went wrong. Please try again.');
      }
      
      
      function validate()
      {
          if(!checkEmail(toEmail))
          {
              toEmail.css({color:'red'});
              toEmail.val('Please enter a valid email address');
              log('to email is bad');
              return false;
          }else{
              toEmail.css({color:orgColor});

          }
          if(!checkEmail(fromEmail))
          {
              fromEmail.css({color:'red'});
              fromEmail.val('Please enter a valid email address');
              log('from email is bad');
              return false;
          }else{
              fromEmail.css('color', orgColor);
          }
          
          if(message.val() === '' || message.val() === 'Your Message')
          {
              message.css({color:'red'});
              message.val('Message is required');
              log('message is empty');
              return false;
          }else{
              message.css({color:orgColor});
          }
          
          return true;
      }
      
      
      function checkEmail(email)
      {	
      	var pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
      	  , emailVal = email.val();
      	log('form val: '+emailVal);
      	return pattern.test(emailVal);
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