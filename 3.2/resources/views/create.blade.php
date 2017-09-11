@extends('layout')

@section('content')
<form method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="inputEmail">Email address</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="inputMessage">Message</label>
        <textarea class="form-control" id="inputMessage" rows="3"></textarea>            
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection