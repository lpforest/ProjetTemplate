<?php
namespace App\dao;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
use App\Exceptions\MonException;

class ServicesOeuvres
{
    public function getOeuvres($id_oeuvre)
    {
        try {
            $lesOeuvres = DB::table('Oeuvres')
                ->Select()
                ->where('id_oeuvre','=',$id_oeuvre)
                ->get();
            return $lesOeuvres;
    }catch (QueryException $e){
            throw new MonException($e->getMessage(), 5);
        }
}
}
