@extends('layouts.backend.app')

@section('title','Détails du propriétaire')

@push('css')

@endpush

@section('content')
    <!-- Page content -->
    <div id="page-content">
        <!-- Table Styles Header -->
        <div class="content-header">
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-section">
                        <h1>Détails sur le propriétaire</h1>
                    </div>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <div class="header-section">
                        <ul class="breadcrumb breadcrumb-top">
                            <li>User Interface</li>
                            <li>Elements</li>
                            <li><a href="">Tables</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Table Styles Header -->

        <!-- Datatables Block -->
        <!-- Datatables is initialized in js/pages/uiTables.js -->
        <div class="block full">
            <!--Add new owner modal -->
            <div >
                <h4 class="text-center">Nom du bien: <strong>{{ $property->name }}</strong></h4>
            </div>
        </div>
        <!-- END Datatables Block -->
    </div>
    <!-- END Page Content -->

@endsection

@push('script')

@endpush
