<?php

namespace App\dao;

use App\Exceptions\MonException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ServicesTickets
{
    public function getTicket()
    {
        try {
            $lesTickets = DB::table('Tickets')
                ->Select('id_ticket','date_achat','visiteurs.id_visiteur','prix','visiteurs.nom')
                ->join('visiteurs','oeuvres.id_visiteur', "=",'visiteurs.id_visiteur')
                ->get();
            return $lesTickets;
        }catch (QueryException $e){
            throw new MonException($e->getMessage(), 5);
        }
    }
}
