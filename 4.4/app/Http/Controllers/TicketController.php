<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\Http\Requests\CreateTicketFormRequest;
use App\Http\Requests\EditTicketFormRequest;
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

        return redirect('/tickets');
    }

    public function showEditForm($ticketId) {
        $ticket = Ticket::findOrFail($ticketId);
        
        return view('ticket.edit', array('ticket'=>$ticket));
    }

    public function edit($ticketId, EditTicketFormRequest $request) {
        $ticket = Ticket::findOrFail($ticketId)
                ->update(array(
                    'email' => $request->get('inputEmail'),
                    'title' => $request->get('inputTitle'),
                    'description' => $request->get('inputDescription')
                ));

        return redirect('/tickets');
    }
}
