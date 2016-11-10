@extends('layouts.app')

@push('css')
<link href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush

<style type="text/css">

</style>


@section('content')

<div class="row">
    <div class="col-xs-12 table-responsive">

        {!! $html->table() !!}

    </div>
</div>
@endsection


@push('scripts')
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<script>
    $(function () {

        $('#users-table').DataTable({
            processing: true,
            serverSide: true
        });

    });
</script>
@endpush

