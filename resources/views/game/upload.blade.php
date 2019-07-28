@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Formulaire d'ajout d'un jeu</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form  action="{{ route('games.store') }}"  method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Nom du jeu</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Super jeu" required>
                </div>
                <div class="form-group">
                    <label for="description">description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description..." required>
                </div>
                <div class="form-group">
                    <label>Topics</label>
                    <select class="form-control" name="topic_id" required>
                        <option value="" >Choiris un topic</option>
                        @foreach ($topics as $topic)
                            <option value="{{$topic->id}}">{{$topic->topic}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="zip">Jeu (zip)</label>
                    <input type="file" name="file" accept=".zip" id="zip" required>
                </div>
                <div class="form-group">
                        <label for="version">Numéro de version</label>
                        <input step="0.1" type="number" name="version" class="form-control" id="version" placeholder="1.0" required>
                    </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
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