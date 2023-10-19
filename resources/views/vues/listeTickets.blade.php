@extends('layouts.master')
@section('content')
    <table class="table table-bordered table-striped table-responsive">
        <br><br><br><thead>
        <tr>
            <th style="width: 5%">ID_ticket</th>
            <th style="width: 30%">date achat</th>
            <th style="width: 20%">id_visiteur</th>
            <th style="width: 10%">Prix</th>
        </tr>
        </thead>
        @foreach($mesTickets as $unTicket)
            <tr>
                <td> {{$unTicket->id_ticket}}</td>
                <td> {{$unTicket->date_achat}}</td>
                <td> {{$unTicket->id_visiteur}}</td>
                <td> {{$unTicket->prix}}</td>

                <td style="text-align: center">
                    <a href="{{url('/modifierManga')}}/{{$unTicket->id_ticket}}"><span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Modification"  ></span></a>

                <td style="text-align: center">
                    <a class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="Supprimer" onclick="javascript:if (confirm('Suppression confirmée ?'))
                                {window.location = '{{url('/supprimerManga')}}/{{$unTicket->id_ticket}}';}">
                    </a>
                </td>

    @endforeach
