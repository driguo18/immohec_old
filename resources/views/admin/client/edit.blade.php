@extends('layouts.backend.app')

@section('title','Modifier un client')

@push('css')

@endpush

@section('content')
    <div id="page-content">
        <!-- Forms Components Header -->
        <div class="content-header">
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-section">
                        <h1>Modifier un client</h1>
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
                <!-- Inline Form Block -->
                <div class="block full">
                    <div class="block-title">
                        <h2>Entrez les nouvelles informations du client</h2>
                    </div>
                    <form id="form-login" action="{{ route('admin.client.update',$client->id) }}" method="post" class="form-horizontal"
                          enctype="multipart/form-data">
                        @method('PUT')
                       @include('admin.includes.form_client')
                        <div class="form-group form-actions">
                            <div class="col-xs-9 col-md-offset-3">
                                <a href="{{ route('admin.client.index') }}">
                                    <button type="button" class="btn btn-effect-ripple btn-danger"><i class="fa fa-check"></i> Annuler</button>
                                </a>
                                <button type="submit" class="btn btn-effect-ripple btn-primary"><i class="fa fa-check"></i> Mettre à jour</button>
                            </div>

                        </div>
                    </form>

                </div>
                <!-- END Inline Form Block -->
            </div>
        </div>
        <!-- END Form Components Row -->
    </div>
@endsection

@push('script')

@endpush
