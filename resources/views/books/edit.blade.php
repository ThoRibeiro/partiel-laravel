@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Modifier le livre</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $book->title }}" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Auteur</label>
            <input type="text" name="author" class="form-control" id="author" value="{{ $book->author }}" required>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Année</label>
            <input type="number" name="year" class="form-control" id="year" value="{{ $book->year }}" required>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" name="genre" class="form-control" id="genre" value="{{ $book->genre }}">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
