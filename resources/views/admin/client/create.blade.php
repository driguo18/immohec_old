@extends('layouts.backend.app')

@section('title','Ajouter un client')

@push('css')

@endpush

@section('content')
    <div id="page-content">
        <!-- Forms Components Header -->
        <div class="content-header">
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-section">
                        <h1>Ajouter un nouveau client</h1>
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
                    <h2>Entrez les informations sur le client à enregistrer</h2>
                </div>
                <!-- END Form Validation Title -->
                <!-- Form Validation Form -->
                <form id="form-validation" action="{{ route('admin.client.store') }}" method="post" class="form-horizontal form-bordered"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-username">Civilité <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <select id="civility" name="civility" class="form-control" required>
                                <option value="M." selected>M.</option>
                                <option value="Mme.">Mme.</option>
                                <option value="Mlle.">Mlle</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="firstname">Nom <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Entrez le nom du client" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="lastname">Prénom(s) <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Entrez le(s) prénom(s) du client" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="cni_number">N°CNI <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="cni_number" name="cni_number" class="form-control" placeholder="Entrez le matricule de la carte CNI du client" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="birth_date">Date de naissance <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="birth_date" name="birth_date" class="form-control input-datepicker" data-date-format="dd-mm-yyyy" placeholder="jj-mm-aaaa" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="birth_place">Lieu de naissance <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="birth_place" name="birth_place" class="form-control" placeholder="Entrez le lieu de naissance du client" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="address">Lieu d'habitation <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="address" name="address" class="form-control" placeholder="Entrez l'adresse du lieu d'habitation du client" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="email">E-mail <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Entrez l'adresse E-mail du client" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="phone_number">Tel <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Entrez le(s) contact(s) du client" required>
                        </div>
                    </div>

                    <div class="form-group form-actions">
                        <div class="col-xs-9 col-md-offset-3">
                            <a href="{{ route('admin.client.index') }}">
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
