// APPENDING TEXTBOX AND CAPTCHA IMAGE DYNAMICALLY ON PAGE LOAD BEFORE THE SUBMIT BUTTON
jQuery(function($) {
  //$( document ).ready(function() {
  var img = "<img src='fileadmin/resources/form/captcha.png' id='CaptchaImg'>";
  
  
  $("input[type=submit]").before("<input type='text' id='ValueBox' placeholder='Please enter the text here' />");
  $("#ValueBox").before(img);
  
  
  
  // GET VALUE OF TEXT BOX AND COMPARE WITH SPECIFIC STRING
  
  $('input[type=submit]').click(function() { 
    
    //return false;
    var human = $("#ValueBox").val();
    var correct = "APPLICATION";
    var correct2 = "application";
    
    var $message;  //handled in foreach statements in case we wish to use multiple / similiar fields
    var $phone; 
    var email;
    var exitflag = false;
    
    
    if(human == correct || human == correct2 ){
      
    }
    else
    {
      alert('Wrong Captcha');
      return false;
    }
    
    

    
    //alert("test");
    if (email = $('input[name="tx_form[Email]"]').val()) {
      if (email != undefined){
        if (!isValidEmailAddress(email)) {
          alert("Invalid E-mail Address");
          exitflag == true;
          return false;
        }
      }  
      
      if (exitflag == true) {
        return false;
      }
    }
    
    
    
    //Check for URL in message
    
    if($message = $('textarea[name="tx_form[Message]"]').val()) {
      if ($message != undefined || $message != 'undefined') {
        if(new RegExp("([a-zA-Z0-9]+://)?([a-zA-Z0-9_]+:[a-zA-Z0-9_]+@)?([a-zA-Z0-9.-]+\\.[A-Za-z]{2,4})(:[0-9]+)?(/.*)?").test($message)) {
          alert("URL Detected in Message");
          return false;
        }
      }
    }
    
    
    //Check that the phone number is valid (length)
    //$phone = $phone.replace(/-/g,"");
    
    //alert($phone);
    if ($phone = $('input[name="tx_form[Phone]"]').val()) {
      if ($phone != undefined || $phone != 'undefined') {
        
        $phone = $phone.replace(/-/g,"");
        
        if ($phone.length > 11) {
          alert("Phone Number is not Valid");
          return false;
        }
        
        
        //Check that the phone number is a numeric value  
        if (isNaN( $phone ) && $phone != undefined) {
          alert("Phone Number is not Valid");
          return false;
        }
      }
    }
    
    
        if (isRequired() == true) {
      return false;
    }
    
    
  });
  
  //Functions
  
  function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
  };
  
  
  function isRequired() {
    var exitflag;
    var notification;
    var checkinput;
    var checkinput2;
    exitflag = false;
    
    $('.csc-form-element label').each(function() {
      
      var check = $(this).text();
      if (check.charAt(0) == '*' && check != undefined && check != 'undefined') {

        checkinput = $(this).next().val();

        if (checkinput.length < 1 || checkinput == undefined || checkinput == 'undefined') {
          notification = check.replace(/\s+/g, '').replace(/[^a-zA-Z-]/g, '');
          alert(notification + ' is a required field.');
          exitflag = true;
          return false;
          
        } 
        
        
        
        
        
        if (exitflag == true) {
          return false;  
        }
        
      }
      
    });
    
    
    //return results
    if(exitflag == true) {
      return true;
    } else {
      return false;
    }
    
    
  };
  
  
});  

