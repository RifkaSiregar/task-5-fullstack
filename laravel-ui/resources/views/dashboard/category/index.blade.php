@extends('layouts.dashboard')


@section('title')
Categories
@endsection

@section('content')

<main>
  <div class="container-fluid">
    <h1 class="mt-4">Category</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Categories</li>
      <li class="breadcrumb-item active">List</li>
    </ol>
    <!-- content -->
    {!! $dataTable->table() !!}
</main>

@endsection

@push('external-css')
<link rel="stylesheet" href="{{ asset('datatables/css/datatables.min.css')}}">
<link rel="stylesheet" href="{{ asset('datatables/css/datatables.costum.css')}}">
<link rel="stylesheet" href="{{ asset('datatables/css/buttons.bootstrap4.min.css')}}">
@endpush

@push('external-javascript')
<script src="{{ asset('datatables/js/datatables.min.js')}}"></script>
<script src="{{ asset('datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('datatables/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('datatables/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('datatables/js/buttons.server-side.js')}}"></script>
@endpush

@push('internal-javascript')
{!! $dataTable->scripts() !!}
@endpush