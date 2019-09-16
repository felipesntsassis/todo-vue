@extends('layouts.main')


@section('content')
    {{-- <app-users :users="{{ $users }}"></app-users> --}}
    <app-users></app-users>

    {{-- <h1>@{{ title }}</h1>
    <table class="table table-bordered table-hover table-stripped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($users as $u)
                <tr>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
@stop
