@extends('layouts.master')
@section('content')
    <table class="table table-bordered table-striped table-responsive">
        <br><br><br><thead>
        <tr>
            <th style="width: 5%">ID</th>
            <th style="width: 30%">Titre</th>
            <th style="width: 20%">artiste</th>
            <th style="width: 20%">annee</th>
            <th style="width: 20%">medium</th>
        </tr>
        </thead>
        @foreach($mesOeuvres as $unOeuvre)
            <tr>
                <td> {{$unOeuvre->id_oeuvre}}</td>
                <td> {{$unOeuvre->titre}}</td>
                <td> {{$unOeuvre->artiste}}</td>
                <td> {{$unOeuvre->annee}}</td>
                <td> {{$unOeuvre->medium}}</td>
                <td style="text-align: center">
                    <a href="{{url('/modifierManga')}}/{{$unOeuvre->id_oeuvre}}"><span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Modification"  ></span></a>

                <td style="text-align: center">
                    <a class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="Supprimer" onclick="javascript:if (confirm('Suppression confirmée ?'))
                                {window.location = '{{url('/supprimerManga')}}/{{$unOeuvre->id_oeuvre}}';}">
                    </a>
                </td>

    @endforeach
