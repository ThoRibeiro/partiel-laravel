@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Ajouter un nouveau livre</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Auteur</label>
            <input type="text" name="author" class="form-control" id="author" value="{{ old('author') }}" required>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Année</label>
            <input type="number" name="year" class="form-control" id="year" value="{{ old('year') }}" required>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" name="genre" class="form-control" id="genre" value="{{ old('genre') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
@endsection
