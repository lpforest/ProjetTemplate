<?php
namespace App\metier;

use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use DB;

class Oeuvres extends Model {
    protected $table = 'Oeuvres';
    protected $primaryKey= 'id_oeuvre';
    public $timestamps = false;
    protected $fillable = [
        'id_oeuvre',
        'titre',
        'artiste',
        'annee',
        'medium'
                ];

}
?>
