@extends('layouts.master')
@section('content')
    <table class="table table-bordered table-striped table-responsive">
        <br><br><br><thead>
        <tr>
            <th style="width: 5%">ID</th>
            <th style="width: 30%">nom</th>
            <th style="width: 20%">prenom</th>
            <th style="width: 20%">date_visite</th>
        </tr>
        </thead>
        @foreach($mesVisiteurs as $unVisiteur)
            <tr>
                <td> {{$unVisiteur->id_visiteur}}</td>
                <td> {{$unVisiteur->nom}}</td>
                <td> {{$unVisiteur->prenom}}</td>
                <td> {{$unVisiteur->date_visite}}</td>

                <td style="text-align: center">
                    <a href="{{url('/modifierManga')}}/{{$unVisiteur->id_visiteur}}"><span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Modification"  ></span></a>

                <td style="text-align: center">
                    <a class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="Supprimer" onclick="javascript:if (confirm('Suppression confirmée ?'))
                                {window.location = '{{url('/supprimerManga')}}/{{$unVisiteur->id_visiteur}}';}">
                    </a>
                </td>

    @endforeach
