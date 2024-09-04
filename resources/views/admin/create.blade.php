<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/stylesignup.css')}}">
</head>
<body>
      <!-- main -->
  <div class="main-w3layouts wrapper">
    <h1>SignUp</h1>
    <div class="main-agileinfo">
      <div class="agileits-top">
        <form action="#" method="post">
          <input class="text" type="text" name="Username" placeholder="Username" required="">
          <input class="text email" type="email" name="email" placeholder="Email" required="">
          <input class="text" type="password" name="password" placeholder="Password" required="">
          <div class="wthree-text">
            <label class="anim">
              <input type="checkbox" class="checkbox" required="">
              <span>I Agree To The Terms & Conditions</span>
            </label>
            <div class="clear"> </div>
          </div>
          <input type="submit" value="Sign Up">
        </form>
        <p>Don't have an Account? <a href="#"> Login Now!</a></p>
      </div>
    </div>
  </div>
  <!-- //main -->
</body>
</html>