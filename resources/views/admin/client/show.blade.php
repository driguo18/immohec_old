@extends('layouts.backend.app')

@section('title','Détails du client')

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
                        <h1>Détails sur le client</h1>
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
                <h4 class="text-center">Civilité: <strong>{{  $client->civility }}</strong></h4>
                <h4 class="text-center">Nom & Prénom(s): <strong>{{  $client->firstname }}</strong> <strong>{{  $client->lastname }}</strong></h4>
                <h4 class="text-center">Date et lieu de naissance: <strong>Né(e) le {{  $client->birth_date }}</strong> à <strong>{{  $client->birth_place }}</strong></h4>
                <h4 class="text-center">Localisation: <strong>{{  $client->address }}</strong></h4>
                <h4 class="text-center">N° CNI: <strong>{{  $client->cni_number }}</strong></h4>
                <h4 class="text-center">Adresse e-mail: <strong>{{  $client->email }}</strong></h4>
                <h4 class="text-center">créé la: <strong>{{  $client->created_at }}</strong></h4>
                <h4 class="text-center">Localisation: <strong>{{  $client->updated_at }}</strong></h4>
            </div>
        </div>
        <!-- END Datatables Block -->
    </div>
    <!-- END Page Content -->

@endsection

@push('script')

@endpush
