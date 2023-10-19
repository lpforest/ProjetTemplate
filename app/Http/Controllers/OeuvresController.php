<?php
namespace App\Http\Controllers;

use App\dao\ServicesOeuvres;
use App\Exceptions\MonException;
use Exception;
use Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\metier\Oeuvres;
class OeuvresController extends Controller
{
    public function listerOeuvres()
    {
        try {
            $monErreur = Session::get('monErreur');
            Session::forget('monErreur');
            $unServiceOeuvre = new ServicesOeuvres();
            $id_oeuvre = Session::get('id');
            $mesOeuvres = $unServiceOeuvre->getOeuvres($id_oeuvre);
            return view('vues/listeOeuvres', compact('mesOeuvres', 'monErreur'));
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/pageErreur', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/pageErreur', compact('monErreur'));
        }
    }

    public function addOeuvre(){
        try{
            $monErreur = "";
            $titreVue = "Ajout d'une Oeuvre";
            return view ('vues/formOeuvre', compact( 'titreVue', 'monErreur'));
        }catch (MonException $e){
            $monErreur = $e->getMessage();
            return view('Vues/error', compact('monErreur'));
        }catch(Exception $e){
            return view('Vues/error', compact('monErreur'));
        }
    }
}
