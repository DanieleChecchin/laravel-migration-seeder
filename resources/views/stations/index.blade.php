@extends('layouts.app')

@section('page-title', 'Homepage')

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
                            <th>Nome stazione</th>
                            <th>Posizione</th>
                            <th>Numero di binari</th>
                            <th>Orario di apertura</th>
                            <th>Orario di chiusura</th>
                            <th>Numero di negozi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($stations as $station)
                            <tr>
                                <td> {{ $station->id }} </td>
                                <td> {{ $station->nome }} </td>
                                <td> {{ $station->posizione }} </td>
                                <td> {{ $station->numero_binari }} </td>
                                <td> {{ $station->orario_apertura }} </td>
                                <td> {{ $station->orario_chiusura }} </td>
                                <td> {{ $station->numero_negozi }} </td>
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
