@extends('layouts.layout')

@section('list')
    <h1>Lista de Contactos</h1>
    <a href="/contact/create">Criar Contacto</a>
    <table>
        <tr>
            <th>Nome</th>
            <th>Morada</th>
            <th>Telefone</th>
            <th>Opções</th>
        </tr>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->address }}</td>
                <td>{{ $contact->phone }}</td>
                <td><a href="/contact/edit/{{ $contact->id }}">editar</a></td>
            </tr>
        @endforeach
    </table>
@endsection

