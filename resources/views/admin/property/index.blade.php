@extends('layouts.backend.app')

@section('title','Liste de tous les biens')

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
                        <h1>Gestion des Biens</h1>
                    </div>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <div class="header-section">
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Tableau de bord</li>
                            <li><a href="">Gestion des biens</a></li>
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
                <a href="{{ route('admin.property.create') }}" data-toggle="modal">
                    <button class="btn btn-success btn-rounded"><i class="fa fa-plus"></i> Nouveau bien</button></a>
            </div>

            <div class="table-responsive">
                <table id="example-datatable" class="table table-striped table-bordered table-vcenter">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">ID</th>
                        <th class="text-center">Nom du bien</th>
                        <th class="text-center">Type de bien</th>
                        <th class="text-center">Ville</th>
                        <th class="text-center">Localisation</th>
                        <th class="text-center">Catégorie</th>
                        <th class="text-center">Prix</th>
                        <th class="text-center">Propriétaire</th>
                        <th class="text-center">Client</th>
                        <th class="text-center">Statut</th>
                        <th class="text-center">Date d'ajout</th>
                        <th class="text-center" style="width: 70px;"><i class="fa fa-flash"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($properties as $key=>$property)
                        <tr>
                            <td class="text-center">{{$key + 1 }}</td>
                            <td class="text-center"><a href="{{ route('admin.property.show', $property->id) }}"><strong>{{  $property->name }}</strong></a></td>
                            <td><strong>{{ $property->property_type->name }}</strong></td>
                            <td class="text-center">{{ $property->city }}</td>
                            <td class="text-center">{{ $property->locality }}</td>
                            <td><strong>{{ $property->category->name }}</strong></td>
                            <td class="text-center">{{ $property->price }}</td>
                            <td><a href="{{ route('admin.owner.show',$property->owner->id) }}"><strong>{{ $property->owner->firstname }} {{ $property->owner->lastname }}</strong></a></td>
                            <td><a href="{{ route('admin.client.show',$property->client->id) }}"><strong>{{ $property->client->firstname }} {{ $property->client->lastname }}</strong></a></td>
                            <td class="text-center">{{ $property->status }}</td>

                            <td>{{ $property->created_at }}</td>

                            <td class="text-center">
                                <a href="{{ route('admin.property.edit',$property->id) }} " data-toggle="tooltip" title="Modifier ce bien" class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                <button data-toggle="tooltip" title="Supprimer ce bien" class="btn btn-effect-ripple btn-xs btn-danger" type="button"
                                        onclick="deleteProperty({{ $property->id }})">
                                    <i class="fa fa-times"></i></button>
                                <form id="delete-form-{{ $property->id }}" action="{{ route('admin.property.destroy', $property->id) }}" method="POST" style="display: none">
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
        function deleteProperty(id) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Voulez-vous vraiment supprimer ce bien ?',
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
                        'Ce bien n\'a pas été supprimé',
                        'Erreur'
                    )
                }
            })
        }
    </script>
@endpush
