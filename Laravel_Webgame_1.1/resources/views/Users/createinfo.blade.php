@extends('home')
@section('title','Create User')
@section('content')     
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="{{ asset('webre/icon/usericon.png') }}" id="icon" alt="User Icon"/> 
      <h1>Register</h1>
    </div>

    <!-- Register Form -->
    <form method="POST" action="{{ route('user.users.postlogin')}}">
      @csrf
      <div class="form-group">
        <input type="text" id="login" class="fadeIn second form-control" name="name" placeholder="name">
        <input type="text" id="password" class="fadeIn third" name="gender" placeholder="gender">
        <input type="text"  class="fadeIn third"  name="email" placeholder="email">
        <input type="text"  class="fadeIn third"  name="age" placeholder="age">
        <input type="submit" class="fadeIn fourth" value="Sign up">
      </div>
    </form>
  </div>
</div>

<!------ Include the above in your HEAD tag ---------->

<!------ Include the above in your HEAD tag ---------->

@endsection