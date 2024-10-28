@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-center fst-italic my-5">Passeggeri</h1>
            </div>

            <div class="col-12">
                <table class="table-dark table table-striped table-hover">
                    <thead>
                        <tr class="">
                            <th>#</th>
                            <th>Nome</th>
                            <th>Cognome</th>
                            <th>Età</th>
                            <th>Indirizzo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($passengers as $passenger)
                            <tr>
                                <td> {{ $passenger->id }} </td>
                                <td> {{ $passenger->first_name }} </td>
                                <td> {{ $passenger->last_name }} </td>
                                <td> {{ $passenger->age }} </td>
                                <td> {{ $passenger->address }} </td>
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
