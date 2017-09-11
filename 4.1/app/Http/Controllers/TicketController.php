<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\Http\Requests\CreateTicketFormRequest;
use App\Http\Requests\EditTicketFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $userId = Auth::user()->getId();
        $tickets = Ticket::where('user_id', $userId)->paginate(2);

        return view('ticket.index', array('tickets'=>$tickets));
    }

    public function showCreateForm() {
        return view('ticket.create');
    }

    public function create(CreateTicketFormRequest $request) {
        $ticket = new Ticket(array(
            'user_id' => Auth::user()->getId(),
            'title' => $request->get('inputTitle'),
            'description' => $request->get('inputDescription')
        ));

        $ticket->save();

        return redirect('/tickets');
    }

    public function showEditForm($ticketId) {
        $userId = Auth::user()->getId();
        $where = array('id' => $ticketId, 'user_id' => $userId);

        $ticket = Ticket::where($where)->firstOrFail();
        
        return view('ticket.edit', array('ticket'=>$ticket));
    }

    public function edit($ticketId, EditTicketFormRequest $request) {
        $userId = Auth::user()->getId();
        $where = array('id' => $ticketId, 'user_id' => $userId);

        $ticket = Ticket::where($where)->firstOrFail()
                ->update(array(
                    'title' => $request->get('inputTitle'),
                    'description' => $request->get('inputDescription')
                ));

        return redirect('/tickets');
    }
}
