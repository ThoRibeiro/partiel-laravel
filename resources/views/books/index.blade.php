@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Liste des livres</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Ajouter un nouveau livre</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th class="text-center">Titre</th>
            <th class="text-center">Auteur</th>
            <th class="text-center">Année</th>
            <th class="text-center">Genre</th>
            <th class="text-center">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
        <tr>
            <td class="align-middle text-center">{{ $book->title }}</td>
            <td class="align-middle text-center">{{ $book->author }}</td>
            <td class="align-middle text-center">{{ $book->year }}</td>
            <td class="align-middle text-center">{{ $book->genre }}</td>
            <td class="align-middle text-center">
                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm mx-1">Modifier</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline-block mx-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce livre ?');">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
