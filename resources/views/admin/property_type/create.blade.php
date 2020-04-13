@extends('layouts.backend.app')

@section('title','Ajouter un type de bien')

@push('css')

@endpush

@section('content')
    <div id="page-content">
        <!-- Forms Components Header -->
        <div class="content-header">
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-section">
                        <h1>Ajouter un nouveau type de bien</h1>
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

                <div id="modal-fade" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h3 class="modal-title"><strong>Modal</strong></h3>
                            </div>
                            <div class="modal-body">
                                Content..
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-effect-ripple btn-primary">Save</button>
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Inline Form Block -->
                <div class="block full">
                    <form id="form-login" action="{{ route('admin.property_type.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Entrez le nouveau type de bien">
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div class="col-xs-9">
                                <a href="{{ route('admin.property_type.index') }}">
                                    <button type="button" class="btn btn-effect-ripple btn-danger"><i class="fa fa-check"></i> Annuler</button>
                                </a>
                                <button type="submit" class="btn btn-effect-ripple btn-primary"><i class="fa fa-check"></i> Valider</button>
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
