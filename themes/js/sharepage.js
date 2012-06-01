$(
    function()
    { 
        if($('#share-email').length > 0) var sharePage = new ShareThis('share-email');
        if($('#share-video-email').length > 0) var shareVideo = new ShareThis('share-video-email');
    }
)

function ShareThis(formName)
{
    //alert('share this');

// modalCollapse = video
// share = page
    var form = $('#'+formName)
      , btn = form.find('#share-page-btn')
      , str
      , emailHeader = (formName == 'share-email') ? $('#share .share-headline') : $('#modalCollapse .share-headline')
      , orgHeadline = emailHeader.html()
      , orgColor = form.find('#to-email').css('color')
      , toEmail = form.find('#to-email')
      , fromEmail = form.find('#from-email')
      , message = form.find('#message')

      form.submit(function() { return false; })
      btn.click(emailSubmit);
    
      function emailSubmit()
      {
          form.submit(function() { return false; });
          formAction = form.attr("action");
          str = form.serialize();
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
          emailHeader.text('Sorry, something went wrong. Please try again later.');
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