<?php
namespace App\metier;

use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use DB;

class Visiteurs extends Model {
    protected $table = 'Visiteurs';
    protected $primaryKey= 'id_visiteur';
    public $timestamps = false;
    protected $fillable = [
        'id_visiteur',
        'nom',
        'prenom',
        'date_visite'
    ];

}
?>
