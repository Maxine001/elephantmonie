
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <link href="_css/site.css" rel="stylesheet">
  <link href="styleform.css" rel="stylesheet">
  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="jquery_validate/jquery.validate.min.js"></script>
  
  <script src="index.js"></script>
</head>
<body>
 
  <p class="signup-top">Signup</p>
  <p class="top">Please provide all necessary information</p>

  <div class="container">

      <form action="insert.php" method="post" id="signup">
        <div>
          <label for="name" class="label">Full name</label>
          <input name="user_name" type="text" class="required" id="name">
        </div>
        <div>
          <label for="email" class="label">Email Address</label>
          <input name="email" type="text" id="email">
        </div>
        <div>
          <label for="password" class="label">Password</label>
          <input name="password" type="password" id="password">
        </div>
        <div>
          <label for="confirm_password" class="label">Confirm password</label>
          <input name="confirm_password" type="password" id="confirm_password" >
        </div>
        <div>
          <input type="submit" name="submit" id="submit" value="Submit">
        </div>


      </form>
  </div>


  <script>
  /*
    $(document).ready(function() {
      $('#signup').validate({
        rules: {
          email: {
             required: true,
             email: true
          },
          password: {
             required: true,
             rangelength:[8,16]
          },
          confirm_password: {equalTo:'#password'},
          spam: "required"
        }, //end rules
        messages: {
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
     */
  </script>
</body>
</html>