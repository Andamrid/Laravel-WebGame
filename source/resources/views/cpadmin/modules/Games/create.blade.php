@extends('cpadmin.master')
@section('title','Add Game')
@section('content')     
<form role="form" action="{{ route('game.games.store') }}" method="POST">
  @csrf
<!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Add Game</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
        {{-- form add game  --}}
            <div class="card-body">
              <div class="form-group">
                <label for="game">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name">
              </div>
              {{-- <div class="form-group">
                <label for="category">Choose category</label>
                <select name="category" class="form-control" id="category" >              
                    <option value="action">Acction</option>
                    <option value="roleplaying">Roleplaying</option>         
                    <option value="brain">Brain test</option>
                    <option value="tactic">Tactic</option>  
                </select>
              </div> --}}
                            {{-- <div class="form-group">
                <label for="link">Link</label>
                <input type="text" class="form-control" name="link" placeholder="Enter link">
              </div> --}}
              <div class="form-group">
                <label for="age">Choose age</label>
                <select name="age" class="form-control" id="age" >              
             
                  <option value="16">16+</option>
                    <option value="18">18+</option>            
                </select>
              </div>
              {{-- <div class="form-group">
                <label for="info">Info</label>
                <textarea name="info" class="form-control" cols="30" rows="10"  placeholder="Enter Info"></textarea>
              </div> --}}

              {{-- <div class="form-group">
                <label for="exampleInputImage">Choose image</label>
                <div class="input-group">
                  <div class="custom-image">
                    <input type="file" class="form-control" class="custom-image-input" accept="image/*" id="exampleInputImage">
                  
                  </div>                         
                </div>
              </div>    

              <div class="form-group">
                <label for="exampleInputVideo">Choose video</label>
                <div class="input-group">
                  <div class="custom-video">
                    <input type="file" class="form-control" class="custom-video-input" accept="video/*" id="exampleInputVideo">
                  
                  </div>                         
                </div>
              </div>                 
            </div> --}}
            <!-- /.card-body -->
    
            <div class="card-footer">
              <button type="submit" class="btn btn-warning">Add now</button>
            </div>
          
    </div>
    <!-- /.card-body -->
    {{-- <div class="card-footer">
      Footer
    </div> --}}
    <!-- /.card-footer-->
    
  </div>
</form>
  
@endsection