<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('webre/css/style.css') }}" rel="stylesheet" >
    <link href="{{ asset('webre/css/login.css') }}" rel="stylesheet">
    <script src="{{ asset('webre/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('webre/js/jquery.min.js') }}"></script>
    <title>Document</title>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="{{ asset('webre/icon/usericon.png') }}" id="icon" alt="User Icon"/> 
      <h1>Register</h1>
    </div>

    <!-- Register Form -->
    <form method="POST" action="{{route('user.users.postlogin')}}">
      @csrf
      <input type="text" id="login" class="fadeIn second" name="name" placeholder="name">
      <input type="password" id="password" class="fadeIn third" name="gender" placeholder="gender">
      <input type="password" id= class="fadeIn third"  name="email" placeholder="email">
      <input type="password" id= class="fadeIn third"  name="age" placeholder="age">
      <input type="submit" class="fadeIn fourth" value="Sign up">
    </form>


  </div>
</div>
</body>
</html>

<!------ Include the above in your HEAD tag ---------->

