@extends('layouts.backend.app')

@section('title','Ajouter une catégorie')

@push('css')

@endpush

@section('content')
    <div id="page-content">
        <!-- Forms Components Header -->
        <div class="content-header">
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-section">
                        <h1>Ajouter une nouvelle catégorie</h1>
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
                    <form id="form-login" action="{{ route('admin.category.store') }}" method="post" class="form-horizontal">

                        @include('admin.includes.form_category')
                        <div class="form-group form-actions">
                            <div class="col-xs-9">
                                <a href="{{ route('admin.category.index') }}">
                                    <button type="button" class="btn btn-effect-ripple btn-danger"><i class="fa fa-check"></i> Annuler</button>
                                </a>
                                <button type="submit" class="btn btn-effect-ripple btn-primary"><i class="fa fa-check"></i> Valider</button>
                            </div>

                        </div>
                    </form>

                </div>

                <a href="#{{ route('admin.category.create') }}" class="btn btn-effect-ripple btn-default" data-toggle="modal" style="overflow: hidden; position: relative;">
                    <span class="btn-ripple animate" style="height: 65px; width: 65px; top: -8.15625px; left: 0.5px;"></span>Modal</a>

                <div id="modal-regular" class="modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3 class="modal-title"><strong>Modal</strong></h3>
                            </div>
                            <div class="modal-body">
                                Content..
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-effect-ripple btn-primary" style="overflow: hidden; position: relative;">Save</button>
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" style="overflow: hidden; position: relative;"><span class="btn-ripple animate" style="height: 60px; width: 60px; top: -17px; left: 12.875px;"></span>Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Inline Form Block -->
            </div>
        </div>
        <!-- END Form Components Row -->
    </div>
@endsection

@push('script')

@endpush
