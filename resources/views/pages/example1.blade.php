@extends('layouts.app')

@push('css')
<link href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush


@section('content')

    <table class="table table-bordered" id="users-table">
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

@endsection


@push('scripts')
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
    $(function () {
        $('#users-table').DataTable({
            "oLanguage": {
                sProcessing: '<i class="fa fa-spinner fa-spin loader"></i>'
            },
            processing: true,
            serverSide: true,
            ajax: '{{ url("example1/getdata") }}'
        });
    });
</script>
@endpush
