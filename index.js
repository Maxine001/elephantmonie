$(document).ready(function() {
  $('#signup').validate({
    rules: {
      user_name: {
        rangelength: [6,15]
      },
      email: {
         required: true,
         email: true
      },
      password: {
         required: true, 
         rangelength: [8,16]
      },
      confirm_password: {equalTo:'#password'},
      spam: "required"
    }, //end rules
    messages: {
       user_name: {
         rangelength: 'name must be above 6 characters long.'
       },
       email: {
          required: "Please supply an e-mail address.",
          email: "This is not a valid email address."
        },
       password: {
         required: 'Please type a password',
         rangelength: 'Password must be between 8 and 16 characters long.'
       },
       confirm_password: {
         equalTo: 'The two passwords do not match.'
       }
    },
    errorPlacement: function(error, element) { 
        if ( element.is(":radio") || element.is(":checkbox")) {
           error.appendTo( element.parent()); 
         } else {
           error.insertAfter(element);
         } 
     } 
 
   }); // end validate 
 }); // end ready


 
  

