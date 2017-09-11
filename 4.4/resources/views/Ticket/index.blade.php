@extends('layout')

@section('content')
<div class="container-fluid">
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Tickets
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
          <thead>
            <tr>
              <th>Email</th>
              <th>Title</th>
              <th>Created</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->email }}</td>
                    <td>{{ $ticket->title }}</td>
                    <td>{{ $ticket->created_at }}</td>
                    <td>
                        <a href={{ url("/tickets/edit/$ticket->id")}}>Edit</a>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
        {{ $tickets->links() }}
      </div>
    </div>
  </div>
</div>
@endsection