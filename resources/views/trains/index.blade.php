@extends('layouts.app')

@section('page-title', 'trains index')

@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-center fst-italic my-5">TRENI</h1>
            </div>

            <div class="col-12">
                <table class="table-dark table table-striped table-hover">
                    <thead>
                        <tr class="">
                            <th>#</th>
                            <th>Data odierna</th>
                            <th>Nome azienda</th>
                            <th>Stazione di partenza</th>
                            <th>Stazione di arrivo</th>
                            <th>Orario di partenza</th>
                            <th>Orario di arrivo</th>
                            <th>Codice treno</th>
                            <th>Numero di carrozze</th>
                            <th>Corsa Cancellata</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($trains as $train)
                            <tr>
                                <td> {{ $train->id }} </td>
                                <td> {{ $train->data_odierna }} </td>
                                <td> {{ $train->azienda }} </td>
                                <td> {{ $train->stazione_di_partenza }} </td>
                                <td> {{ $train->stazione_di_arrivo }} </td>
                                <td> {{ $train->orario_di_partenza }} </td>
                                <td> {{ $train->orario_di_arrivo }} </td>
                                <td> {{ $train->codice_treno }} </td>
                                <td> {{ $train->numero_carrozze }} </td>
                                <td> {{ $train->in_orario }} </td>
                                <td> {{ $train->cancellato }} </td>
                            </tr>
                        @empty
                            <tr>
                                <td>
                                    Nessun treno disponbile
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
