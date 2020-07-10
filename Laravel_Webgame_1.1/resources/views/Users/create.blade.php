@extends('home')
@section('title','Create User')
@section('content')     
<div class="wrapper fadeInDown">
  <div id="formContent">
    <form method="POST" action="{{route('user.users.store')}}" >
      @csrf
      {{-- card  --}}
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Create user</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
      <div class="card-body">
        <div class="form-group">
            <input type="text" id="login" class="fadeIn second form-control" name="username" placeholder="User Name">
            <input type="password" id="password" class="fadeIn third  form-control " name="password" placeholder="PassWord">
            <input type="submit" class="fadeIn fourth" value="Create">
        </div>
      </div>
      {{-- end card --}}

    </form>
    
    {{-- end form --}}

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