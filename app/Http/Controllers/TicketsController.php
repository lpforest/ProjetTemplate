<?php

namespace App\Http\Controllers;

use App\dao\ServicesTickets;
use App\Exceptions\MonException;
use Illuminate\Support\Facades\Session;
use App\metier\Tickets;
use Exception;
use Request;
use Illuminate\Support\Facades\Input;
class TicketsController
{
    public function listerTickets()
    {
        try {
            $monErreur = Session::get('monErreur');
            Session::forget('monErreur');
            $unServiceTickets = new ServicesTickets();
            $id_ticket = Session::get('id');
            $mesTickets = $unServiceTickets->getTicket($id_ticket);
            return view('vues/listeTickets', compact('mesTickets', 'monErreur'));
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/pageErreur', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/pageErreur', compact('monErreur'));
        }
    }
}
