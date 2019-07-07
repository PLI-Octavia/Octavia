@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="box-body">
        <div class="box box-info">
            <form   action="{{ route('games.store') }}"  method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label for="name">Nom du jeu</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">description</label>
                    <input type="textarea" name="description" accept=".zip" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile3">Topics</label>
                    <select name="" id="exampleFormControlFile3">
                        <option value="">choisir</option>
                        @foreach ($topics as $topic)
                            <option value="{{$topic->id}}">{{$topic->topic}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile2">Example file input</label>
                    <input type="file" name="file" accept=".zip" class="form-control-file" id="exampleFormControlFile2">
                </div>
                <div class="form-group">
                    <button type="submit">send</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}
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
                            <input type="text" name="version" class="form-control" id="version" placeholder="1.0.5" required>
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