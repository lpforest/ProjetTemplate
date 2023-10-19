<?php

namespace App\dao;

use App\Exceptions\MonException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class ServicesVisiteurs
{
    public function getVisiteur($id_visiteur)
    {
        try {
            $lesVisiteurs = DB::table('Visiteurs')
                ->Select()
                ->where('id_visiteur','=',$id_visiteur)
                ->get();
            return $lesVisiteurs;
        }catch (QueryException $e){
            throw new MonException($e->getMessage(), 5);
        }
    }
}
