@extends('layout')

@section('content')

@if ($messages->isEmpty())
    <p>There are no messages. Create one!</p>
@else

    @foreach ($messages as $message)
        <div class="row" style="padding: 15px;">
            <h4> {{ $message->created_at }}</h4>
            <p>{{ $message->message }}</p>
        </div>
    @endforeach


@endif

@endsection