@extends('layouts.backend.app')

@section('title','Ajouter un propriétaire')

@push('css')

@endpush

@section('content')
    <div id="page-content">
        <!-- Forms Components Header -->
        <div class="content-header">
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-section">
                        <h1>Ajouter un nouveau propriétaire</h1>
                    </div>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <div class="header-section">
                        <ul class="breadcrumb breadcrumb-top">
                            <li>User Interface</li>
                            <li>Forms</li>
                            <li><a href="">Components</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Forms Components Header -->

        <!-- Form Components Row -->
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">

            <div class="block">
                <!-- Form Validation Title -->
                <div class="block-title">
                    <h2>Entrez les informations sur le propriétaire à enregistrer</h2>
                </div>
                <!-- END Form Validation Title -->
                <!-- Form Validation Form -->
                <form id="form-validation" action="{{ route('admin.owner.store') }}" method="post" class="form-horizontal form-bordered"
                    enctype="multipart/form-data">

                   @include('admin.includes.form_owner')
                    <div class="form-group form-actions">
                        <div class="col-xs-9 col-md-offset-3">
                            <a href="{{ route('admin.owner.index') }}">
                                <button type="reset" class="btn btn-effect-ripple btn-danger">Annuler</button>
                            </a>
                            <button type="submit" class="btn btn-effect-ripple btn-primary">Valider</button>
                        </div>
                    </div>
                </form>
                <!-- END Form Validation Form -->
            </div>

        </div>
    </div>
@endsection

@push('script')

@endpush
