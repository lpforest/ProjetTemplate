<?php
namespace App\Http\Controllers;

use App\dao\ServicesVisiteurs;
use App\Exceptions\MonException;
use Exception;
use Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\metier\Visiteurs;
class VisiteurController extends Controller
{
    public function listerVisiteurs()
    {
        try {
            $monErreur = Session::get('monErreur');
            Session::forget('monErreur');
            $unServiceVisiteur = new ServicesVisiteurs();
            $id_visteur = Session::get('id');
            $mesVisiteurs = $unServiceVisiteur->getVisiteur($id_visteur);
            return view('vues/listeVisiteurs', compact('mesVisiteurs', 'monErreur'));
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/pageErreur', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/pageErreur', compact('monErreur'));
        }
    }
}
