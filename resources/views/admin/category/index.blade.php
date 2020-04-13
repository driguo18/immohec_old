@extends('layouts.backend.app')

@section('title','Catégorie')

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
                        <h1>Gestion des Catégories</h1>
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
                    <button class="btn btn-success btn-rounded"><i class="fa fa-plus"></i> Nouvelle catégorie</button></a>
            </div>

            <!-- Add new category modal -->
            <div id="modal-regular" class="modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 class="modal-title"><strong>Ajouter une nouvelle catégorie</strong></h3>
                        </div>
                        <div class="modal-body">
                            <!-- Inline Form Block -->
                            <form id="form-login" action="{{ route('admin.category.store') }}" method="post" class="form-horizontal">
                                @csrf
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Nommez la nouvelle catégorie">
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="col-xs-9">
                                        <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal"><i class="fa fa-check"></i> Annuler</button>
                                        <button type="submit" class="btn btn-effect-ripple btn-primary"><i class="fa fa-check"></i> Valider</button>
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
                        <th>Nom</th>
                        <th>Date de création</th>
                        <th>Date de modification</th>
                        <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $key=>$category)
                        <tr>
                            <td class="text-center">{{$key + 1 }}</td>
                            <td><strong>{{ $category->name }}</strong></td>
                            <td>{{ $category->created_at }}</td>
                            <td>{{ $category->updated_at }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.category.edit',$category->id) }} " data-toggle="tooltip" title="Modifier ce catégorie" class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                <button data-toggle="tooltip" title="Supprimer cette catégorie" class="btn btn-effect-ripple btn-xs btn-danger" type="button"
                                        onclick="deleteCategory({{ $category->id }})">
                                    <i class="fa fa-times"></i></button>
                                <form id="delete-form-{{ $category->id }}" action="{{ route('admin.category.destroy', $category->id) }}" method="POST" style="display: none">
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
        function deleteCategory(id) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Voulez-vous vraiment supprimer cette catégorie ?',
                text: "Elle sera supprimée définitivement !",
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
                        'Cette catégorie n\'a pas été supprimé',
                        'Erreur'
                    )
                }
            })
        }
    </script>
@endpush
