@csrf
<div class="form-group">
    <label class="col-md-3 control-label" for="val-username">Civilité <span class="text-danger">*</span></label>
    <div class="col-md-6">
        <select id="civility" name="civility" class="form-control" required>
            <option value="M." @if($client->civility=='M.') selected='selected' @endif > M.</option>
            <option value="Mme." @if($client->civility=='Mme.') selected='selected' @endif > Mme.</option>
            <option value="Mlle." @if($client->civility=='Mlle.') selected='selected' @endif > Mlle.</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="firstname">Nom <span class="text-danger">*</span></label>
    <div class="col-md-6">
        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Entrez le nom du client" value="{{ $client->firstname }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="lastname">Prénom(s) <span class="text-danger">*</span></label>
    <div class="col-md-6">
        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Entrez le(s) prénom(s) du client" value="{{ $client->lastname }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="cni_number">N°CNI <span class="text-danger">*</span></label>
    <div class="col-md-6">
        <input type="text" id="cni_number" name="cni_number" class="form-control" placeholder="Entrez le matricule de la carte CNI du client" value="{{ $client->cni_number }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="birth_date">Date de naissance <span class="text-danger">*</span></label>
    <div class="col-md-6">
        <input type="text" id="birth_date" name="birth_date" class="form-control input-datepicker" data-date-format="dd-mm-yyyy" placeholder="jj-mm-aaaa" value="{{ $client->birth_date}}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="birth_place">Lieu de naissance <span class="text-danger">*</span></label>
    <div class="col-md-6">
        <input type="text" id="birth_place" name="birth_place" class="form-control" placeholder="Entrez le lieu de naissance du client" value="{{ $client->birth_place }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="address">Lieu d'habitation <span class="text-danger">*</span></label>
    <div class="col-md-6">
        <input type="text" id="address" name="address" class="form-control" placeholder="Entrez l'adresse du lieu d'habitation du client" value="{{ $client->address }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="email">E-mail <span class="text-danger">*</span></label>
    <div class="col-md-6">
        <input type="email" id="email" name="email" class="form-control" placeholder="Entrez l'adresse E-mail du client" value="{{ $client->email }}">
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="phone_number">Tel <span class="text-danger">*</span></label>
    <div class="col-md-6">
        <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Entrez le(s) contact(s) du client" value="{{ $client->phone_number }}">
    </div>
</div>
