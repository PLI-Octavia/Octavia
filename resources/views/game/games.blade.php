@extends('layouts.app')

@section('content')
    <div class="container">
        @if (isset($error))
            <div class="bg-danger text-white">Les parametres ne sont pas valides</div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>Utilisateurs</h2>
                <table class="table table-bordered" id="table">
                    <thead>
                    <tr>
                        <th class="col-md-6">Nom</th>
                        <th class="col-md-4">Version</th>
                        <th class="col-md-2">Action</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url('gamesjson') }}',
                language: { url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/French.json"},
                columns: [
                    { data: 'name', name: 'name' },
                    { data: 'version', name: 'version' },
                    { data: 'Id', render: function (data, display, params) {
                        return '<a href="/templates/upload/'+ params.id +'" class="btn btn-primary">New Template</a>'} }
                ],
            });
        });
    </script>
@endsection