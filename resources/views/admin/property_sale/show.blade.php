@extends('layouts.backend.app')

@section('title','Ajouter un nouveau bien')

@push('css')

@endpush

@section('content')
    <div id="page-content">
        <!-- Forms Components Header -->
        <div class="content-header">
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-section">
                       <h1>{{ $property->name }}</h1>
                        <small>Publié par <strong>
                                <a href="">{{ $property->user->name }}</a>
                            </strong> le {{ $property->created_at->toFormattedDateString()
                             }}</small>
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

        <!-- Property add informations -->
        <div class="block">
            <div class="block-title">
                <div class="block-options pull-right">
                    <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">Borderless</a>
                </div>
                <h2>Renseignez le formulaire ci-dessous</h2>
            </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="category">Catégorie</label>

                </div>

        </div>
        <!-- END CKEditor Block -->
    </div
@endsection

@push('script')

@endpush

