@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Templates</h2>
    <table class="table table-bordered" id="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Jeu</th>
                <th>Matiere</th>
                <th width='25%'>Action</th>
            </tr>
        </thead>
    </table>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('templates/templatesjson') }}',
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/French.json"
            },
            columns: [{
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'game.name',
                    name: 'game'
                },
                {
                    data: 'game.topic_id',
                    name: 'game'
                },
                {
                    data: 'Id',
                    render: function(data, display, params) {
                        return '<a href="/templates/delete/'+ params.id +'" class="btn btn-danger">Delete</a>'
                    }
                }
            ],
        });
    });
</script>
@endsection