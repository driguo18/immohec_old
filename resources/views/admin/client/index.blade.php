@extends('layouts.backend.app')

@section('title','clients')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/backend/css/bootstrap-sweetalert/sweetalert.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/separate/sweet-alert-animations.min.css ') }}">
@endpush

@push('script')

@endpush()

@section('content')

    <!-- Page content -->
    <div id="page-content">
        <!-- Table Styles Header -->
        <div class="content-header">
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-section">
                        <h1>Gestion des clients</h1>
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
            <div class="block-section">
                <a href="#modal-regular" data-toggle="modal">
                    <button class="btn btn-success btn-rounded"><i class="fa fa-plus"></i> Nouveau client</button></a>
            </div>

            <!-- Add new client modal -->
            <div id="modal-regular" class="modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 class="modal-title"><strong>Ajouter un nouveau client</strong></h3>
                        </div>
                        <div class="modal-body">
                            <!-- Inline Form Block -->
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
                                        <button type="reset" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Annuler</button>
                                        <button type="submit" class="btn btn-effect-ripple btn-primary">Valider</button>
                                    </div>
                                </div>
                            </form>
                            <!-- END Inline Form Block -->
                        </div>

                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table id="example-datatable" class="table table-striped table-bordered table-vcenter">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">ID</th>
                        <th class="text-center">Civilité</th>
                        <th class="text-center">Nom & Prénom(s)</th>
                        <th class="text-center">Id. CNI</th>
                        <th class="text-center">Adresse</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Contact(s)</th>
                        <th class="text-center">Date d'ajout</th>
                        <th class="text-center" style="width: 70px;"><i class="fa fa-flash"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach( $clients as $key=> $client)
                            <tr>
                                <td class="text-center">{{$key + 1 }}</td>
                                <td class="text-center"><strong>{{  $client->civility }}</strong></td>
                                <td class="text-center"><a href="{{ route('admin.client.show', $client->id) }}"><strong>{{  $client->firstname }}</strong> <strong>{{  $client->lastname }}</strong></a></td>
                                <td class="text-center"><strong>{{  $client->cni_number }}</strong></td>
                                <td class="text-center">{{  $client->address }}</td>
                                <td class="text-center"><strong>{{  $client->email }}</strong></td>
                                <td class="text-center">{{  $client->phone_number }}</td>
                                <td class="text-center">{{  $client->created_at }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.client.edit', $client->id) }} " data-toggle="tooltip" title="Modifier ce client" class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                    <button data-toggle="tooltip" title="Supprimer ce client" class="btn btn-effect-ripple btn-xs btn-danger" type="button"
                                    onclick="deleteClient({{  $client->id }})">
                                        <i class="fa fa-times"></i></button>
                                    <form id="delete-form-{{  $client->id }}" action="{{ route('admin.client.destroy',  $client->id) }}" method="POST" style="display: none">
                                        @csrf
                                        @method('DELETE')
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Datatables Block -->
    </div>
    <!-- END Page Content -->
@endsection

@push('scripts')
    <script src="{{ asset('assets/backend/js/sweetalert2.all.js') }}"></script>
    <script type="text/javascript">
        function deleteClient(id) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Voulez-vous vraiment supprimer ce client ?',
                text: "Ce dernier sera supprimé de façon définitive !",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Oui, supprimer',
                cancelButtonText: 'Non, annuler',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Action annulée',
                        'Ce client n\'a pas été supprimé',
                        'Erreur'
                    )
                }
            })
        }
    </script>
@endpush
