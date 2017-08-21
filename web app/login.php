<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <script src="jquery-1.12.4.js"></script>
  <script type="text/javascript">
   
    $(window).load(function () {
  
  /* function() -> checks value inside textbox */
  $('.form-row input').bind('checkValue', function () {
    var label = $(this).prev('label');
    if(this.value !== '') {
      label.addClass('show');
    } else {
      label.removeClass('show');
    }
  });

  $('.form-row input').on('keyup', function () {
    $(this).trigger('checkValue');
      }).on('focus', function () {
    $(this).prev('label').addClass('display');
      }).on('blur', function () {
    $(this).prev('label').removeClass('display');
      }).trigger('checkValue');

});

    $(window).load(function () {
  
  /* function() -> checks value inside textbox */
  $('.form-row select').bind('checkValue', function () {
    var label = $(this).prev('label');
    if(this.value !== '') {
      label.addClass('show');
    } else {
      label.removeClass('show');
    }
  });

  $('.form-row select').on('keyup', function () {
    $(this).trigger('checkValue');
      }).on('focus', function () {
    $(this).prev('label').addClass('display');
      }).on('blur', function () {
    $(this).prev('label').removeClass('display');
      }).trigger('checkValue');

});
    // script for 'back to log in' from sign up page-->
    function pageSubmit(url)
    {
      document.getElementById("temp").action=url;
      document.getElementById("temp").submit();      
    }
  </script>


  <style type="text/css">
    
   body {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}
body {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  font-family: sans-serif,helvetica;
  line-height: 1.75;
}
.container {
  margin: 0 auto;
}
.container form {
  text-align: center;
}
.container h1 {
  text-align: center;
  font-size: 40px;
  color: #2a2e2f;
  text-shadow:2px 3px 8px #717879;
  margin: 0 0 .75em;
  font-family: sans-serif,helvetica;
}
.container .form-row {
  position: relative;  
  margin-bottom: 22px;
}
.container input {
  font-size: 19px;
  padding: 8px;
  border: 1px solid #cbcbda;
  border-radius: 5px;
}

.container button {
  text-transform: uppercase;
  background: #0d5c6c;
  border: none;
  outline: none;
  margin-top: 5px;
  padding: 6px;
  border-radius: 2px;
  color: #e7e7e7;
  font-size: 22px;
  opacity: 1;
  transition:opacity 0.5s ease-out;
}
.container button:hover {
  opacity: 0.9;
}

/* Label Styles */
.container form label {
  background: #fff;
  color: #0d5c6c;
  z-index: -1;
  font-size: 17px;
  font-weight: 500;
  left: .80em;
  opacity: 0;
  padding: 0 .13em;
  position: absolute;
  top: 20px;
  -webkit-transition: all 0.6s cubic-bezier(0.18, 0.89, 0.32, 1.28);
  -moz-transition: all 0.6s cubic-bezier(0.18, 0.89, 0.32, 1.28);
  transition: all 0.6s cubic-bezier(0.18, 0.89, 0.32, 1.28);
}
.container form label.display {
  color: #4481c4;
}
.container form  label.show {
  opacity: 1;
  top: -1em;
  z-index: 1;
}
  </style>

</head>
<body>

<div class="container" style="padding-top: 7%;">
    <h1>Login</h1>
  <form method="post" action="#">
    <div class="form-row">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" min="1" max="4" required placeholder="Enter your Username" required style="width:300px;">
    </div>  
    <div class="form-row">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required placeholder="Enter Password" required style="width:300px;">
    </div>
    <button type="submit">Login</button>
    <button type="reset" >Cancel</button>
    <br /><button type="submit">Forgot Password</button>
  </form>
</div>
</body   >
 </html>
 