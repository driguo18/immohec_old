@extends('layouts.backend.app')

@section('title','Modifier une catégorie')

@push('css')

@endpush

@section('content')
    <div id="page-content">
        <!-- Forms Components Header -->
        <div class="content-header">
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-section">
                        <h1>Modifier une catégorie</h1>
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
            <div class="col-md-10   ">
                <!-- Inline Form Block -->
                <div class="block full">
                    <form id="form-login" action="{{ route('admin.category.update',$category->id) }}" method="post" class="form-horizontal">
                        @method('PUT')

                        @include('admin.includes.form_category')
                        <div class="form-group form-actions">
                            <div class="col-xs-9">
                                <a href="{{ route('admin.category.index') }}">
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
