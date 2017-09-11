@extends('layout')

@section('content')

@foreach ($errors->all() as $error)
    <p class="bg-danger" style="padding: 15px;">{{ $error }}</p>
@endforeach

<form method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="inputEmail">Email address</label>
        <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="inputTitle">Title</label>
        <input type="text" class="form-control" name="inputTitle" id="inputTitle">
    </div>
    <div class="form-group">
        <label for="inputMessage">Message</label>
        <textarea class="form-control" name="inputMessage" id="inputMessage" rows="3"></textarea>            
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection