@extends('layouts.layout')

@section('list')
    <h1>Criar Contact</h1>
    @isset($contact)
        <form action="/contact/update/{{ $contact->id }}" method="POST">
            @method('patch')
    @else
        <form action="/contact/store" method="POST">
    @endisset
        @csrf
        <table>
            {{-- name input --}}
            <tr>
                <td>Nome</td>
                <td><input type="text" name="name" @isset($contact) value="{{ $contact->name }}" @endisset></td>
            </tr>
            {{-- address input --}}
            <tr>
                <td>Morada</td>
                <td><input type="text" name="address" @isset($contact) value="{{ $contact->address }}" @endisset></td>
            </tr>
            {{-- name input --}}
            <tr>
                <td>Telefone</td>
                <td><input type="text" name="phone" @isset($contact) value="{{ $contact->phone }}" @endisset></td>
            </tr>
            {{-- submit --}}
            <tr>
                <td colspan="3"><input type="submit" value="Guardar"></td>
            </tr>
        </table>
    </form>
@endsection

