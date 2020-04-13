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
                        <h1>Modifier un bien</h1>
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

            <!-- CKEditor Content -->
            <form action="{{ route('admin.property.update',$property->id) }}" method="post" class="form-horizontal form-bordered"
                  enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- Nom, ville, quartier, ... -->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Nom <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Entrez le nom du bien" required value="{{ $property->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="city">Ville <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="city" name="city" class="form-control" placeholder="Dans quelle ville se trouve le bien ?" required value="{{ $property->city }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="locality">Localisation <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="locality" name="locality" class="form-control" placeholder="Commune - Quartier - en face de ..." required value="{{ $property->locality }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="surface">Surface (m²) <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="surface" name="surface" class="form-control" placeholder="Entrez la surface du bien" required value="{{ $property->surface }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="pieces_number">Nb. pièces <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="pieces_number" name="pieces_number" class="form-control" placeholder="Combien de pièces comporte ce bien" required value="{{ $property->pieces_number }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="price">Prix (FCFA) <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="price" name="price" class="form-control" placeholder="Entrez le prix de ce bien" required value="{{ $property->price }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="caution">Caution (mois) <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" id="caution" name="caution" class="form-control" placeholder="Entrez la durée de la caution" required value="{{ $property->caution }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="image">Insérer une photo<span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="file" id="image" name="image">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Publier</label>
                    <div class="col-md-9">
                        <label class="csscheckbox csscheckbox-primary"><input type="checkbox" checked value="{{ $property->status == true ? 'checked' : ''}}"><span></span></label>
                    </div>
                </div>
                <!-- Fin Nom, ville, quartier, ...  -->

                <!-- Catégorie, Type de bien, Nom propriétaire -->

                <div class="form-group">
                    <label class="col-md-3 control-label" for="category">Catégorie</label>
                    <div class="col-md-5 {{ $errors->has('categories') ? 'focused error' :''}}">
                        <select id="category" name="categories[]" class="select-select2" style="width: 100%;" data-placeholder="Sélectionnez la catégorie">
                            <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                            @foreach($categories as $category)
                                <option
                                    @foreach($property->categories as $propertyCategory)
                                        {{ $propertyCategory->id == $category->id ? 'selected' : ''}}
                                    @endforeach
                                    value="{{ $category->id }}">{{ $category->name
                                    }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="property_type">Type de bien</label>
                    <div class="col-md-5 {{ $errors->has('property_types') ? 'focused error' :''}}">
                        <select id="property_type" name="property_types[]" class="select-select2" style="width: 100%;" data-placeholder="Selectionnez le type de bien">
                            <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                            @foreach($property_types as $property_type)
                                <option
                                    @foreach($property->property_types as $propertyProperty_type)
                                    {{ $propertyProperty_type->id == $property_type->id ? 'selected' : ''}}
                                    @endforeach
                                    value="{{ $property_type->id }}">{{ $property_type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="owner">Propriétaire</label>
                    <div class="col-md-5">
                        <select id="owner" name="owners[]" class="select-select2" style="width: 100%;" data-placeholder="Selectionnez le propriétaire du bien">
                            <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                            @foreach($owners as $owner)
                                <option
                                    @foreach($property->owners as $propertyOwner)
                                    {{ $propertyOwner->id == $owner->id ? 'selected' : ''}}
                                    @endforeach
                                    value="{{ $owner->id }}">{{ $owner->firstname }} {{ $owner->lastname }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- Fin Catégorie, Type de bien, Nom propriétaire -->

                <!--Description d'un nouveau bien -->
                <fieldset>
                    <legend><i class="fa fa-angle-right"></i> Description du bien</legend>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <textarea id="textarea-ckeditor" name="description" class="ckeditor">{{ $property->description }}</textarea>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group form-actions">
                    <div class="col-xs-9">
                        <a href="{{ route('admin.property.index') }}">
                            <button type="button" class="btn btn-effect-ripple btn-danger"><i class="fa fa-check"></i> Annuler</button>
                        </a>
                        <button type="submit" class="btn btn-effect-ripple btn-primary"><i class="fa fa-check"></i> Valider</button>
                    </div>
                </div>
            </form>
            <!-- END CKEditor Content -->
        </div>
        <!-- END CKEditor Block -->
    </div
@endsection

@push('script')

@endpush

