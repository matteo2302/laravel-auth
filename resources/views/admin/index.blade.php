@extends('layouts.app')

@section('content')
    <div class="container">
        <header class="d-flex justify-content-between align-item-center my-4">
            <h1>I miei progetti</h1>
            <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">Torna indietro</a>
        </header>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Data</th>
                    <th scope="col">ultimo aggiornamento</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                    <tr>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->date }}</td>
                        <td>{{ $project->last_update }}</td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="6">
                            <h1>Non ci sono più progetti</h1>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
