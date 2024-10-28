@extends('layouts.app')

@section('page-title', 'tickets')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-center fst-italic my-5">Tickets</h1>
            </div>

            <div class="col-12">
                <table class="table-dark table table-striped table-hover">
                    <thead>
                        <tr class="">
                            <th>#</th>
                            <th>ID passegero</th>
                            <th>Nome passegero</th>
                            <th>Cognome passegero</th>
                            <th>ID treno</th>
                            <th>Stazione di partenza</th>
                            <th>Stazione di arrivo</th>
                            <th>Prezzo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tickets as $ticket)
                            <tr>
                                <td> {{ $ticket->id }} </td>
                                <td> {{ $ticket->id_passeggero }} </td>
                                <td> {{ $ticket->nome_passeggero }} </td>
                                <td> {{ $ticket->cognome_passeggero }} </td>
                                <td> {{ $ticket->id_treno }} </td>
                                <td> {{ $ticket->stazione_partenza }} </td>
                                <td> {{ $ticket->stazione_arrivo }} </td>
                                <td> {{ $ticket->prezzo }} </td>
                            </tr>
                        @empty
                            <tr>
                                <td>
                                    Nessuna informazione disponbile
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
