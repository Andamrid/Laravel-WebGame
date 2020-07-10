@extends('home')
@section('title','Create User')
@section('content')     
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
   

    <!-- Create Form -->
    <form method="POST" action="{{route('user.users.store')}}" >
        @csrf
        <div class="form-group">
          <input type="text" id="login" class="fadeIn second form-control" name="username" placeholder="User Name">
          <input type="password" id="password" class="fadeIn third  form-control " name="password" placeholder="PassWord">
          <input type="submit" class="fadeIn fourth" value="Create">
        </div>
      
   

    <!-- Remind Passo
    <div id="formFooter" class="row">
      <a class="underlineHover" href="login">Return Login Page</a>
    </div>

  </div>
</div>
</body>
</html>

<!------ Include the above in your HEAD tag ---------->

@endsection