@extends('layouts.app')

@section('content')
<div class="container">
    @if (isset($error))
        <div class="bg-danger text-white">Les parametres ne sont pas valides</div>
    @endif
    <form class="form" action="{{ route('upload_template', ['game' => $gameId]) }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Nom du template</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="datas">Template</label>
            <textarea type="textarea" class="form-control" id="datas" rows="6" name="datas"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Créer">
    </form>
</div>
@endsection