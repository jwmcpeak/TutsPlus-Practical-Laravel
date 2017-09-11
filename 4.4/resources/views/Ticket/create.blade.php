@extends('layout')

@section('content')
<div class="col-md-6">

  <div class="card ">
    <div class="card-header">
      Create Ticket
    </div>
    <div class="card-body">
      <form method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control" name="inputEmail" id="inputEmail" aria-describedby="Email" placeholder="Your email address">
        </div>
        <div class="form-group">
          <label for="inputTitle">Title</label>
          <input type="text" class="form-control" name="inputTitle" id="inputTitle" aria-describedby="Title" placeholder="Enter title">
        </div>
        <div class="form-group">
          <label for="inputDescription">Description</label>
          <textarea class="form-control" rows="10" name="inputDescription" id="inputDescription" placeholder="Describe your issue"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Create Ticket</a>
      </form>
    </div>
  </div>
</div>
@endsection