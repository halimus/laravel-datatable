@extends('layouts.app')

@push('css')
<link href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush


@section('content')

<div class="row">
    <div class="col-xs-12 table-responsive">

        <table class="stripe hover row-border- cell-border order-column" id="users-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
        </table>

    </div>
</div>
@endsection


@push('scripts')
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<script>
    $(function () {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url("example2/getdata") }}',
            columns: [
                {data: 0, name: 'id'},
                {data: 1, name: 'name'},
                {data: 2, name: 'email'},
                {data: 3, name: 'created_at'},
                {data: 4, name: 'updated_at'}
            ]
        });
    });
</script>
@endpush
