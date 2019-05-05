@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Utilisateurs</h2>
        <table class="table table-bordered" id="table">
            <thead>
                <tr>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
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
        ajax: '{{ url('usersjson') }}',
        language: { url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/French.json"},
        columns: [
                { data: 'firstname', name: 'firstname' },
                { data: 'lastname', name: 'lastname' },
                { data: 'email', name: 'email' },
                { data: 'role', name: 'role' },
                { data: 'Id', render: function (data) {return '<a href="#" class="btn btn-danger">Delete</a>'} }
            ],
        });
    });
</script>
@endsection