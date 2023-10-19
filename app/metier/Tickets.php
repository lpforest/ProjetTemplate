<?php

namespace App\metier;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use DB;
class Tickets extends Model
{
    protected $table = 'Tickets';
    protected $primaryKey= 'id_ticket';
    public $timestamps = false;
    protected $fillable = [
        'id_ticket',
        'date_achat',
        'id_visiteur',
        'prix'
    ];

}
?>
