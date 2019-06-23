@extends('layouts.app')

@section('content')
<div class="container">
    <div class="box-body">
        <div class="box box-info">
            <form   action="{{ route('games.store') }}"  method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label for="name">Nom du jeu</label>
                    <input type="text" name="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">description</label>
                    <input type="textarea" name="description" accept=".zip" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" name="file" accept=".zip" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group">
                    <button type="submit">send</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
@endsection