<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\Http\Requests\CreateTicketFormRequest;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index() {
        $tickets = Ticket::paginate(2);

        return view('ticket.index', array('tickets'=>$tickets));
    }

    public function showCreateForm() {
        return view('ticket.create');
    }

    public function create(CreateTicketFormRequest $request) {
        $ticket = new Ticket(array(
            'email' => $request->get('inputEmail'),
            'title' => $request->get('inputTitle'),
            'description' => $request->get('inputDescription')
        ));

        $ticket->save();

        return redirect('/');
    }
}
