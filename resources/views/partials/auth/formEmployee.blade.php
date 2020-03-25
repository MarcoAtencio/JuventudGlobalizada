<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Nombre y Apellido</span>
    </div>
    <input type="text" aria-label="First name" name="name" class="form-control" size="50" required value="{{ isset($emp->name) ? $emp->name : '' }}">
    <input type="text" aria-label="Last name" name="lastName" class="form-control" size="50" required value="{{ isset($emp->name) ? $emp->lastName : '' }}">
</div>

<div class="input-group mb-3">
    <input type="email" class="form-control" name="email" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" required value="{{ isset($emp) ? $emp->email : '' }}">
    <div class="input-group-append">
        <span class="input-group-text" id="basic-addon2">@example.com</span>
    </div>
</div>

<div class="form-row">
    <div class="input-group mb-3 col-4">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Documento</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01">
            <option value="1">Dni</option>
            <option value="2">Ruc</option>
            <option value="3">Documento de extranjeria</option>
        </select>
    </div>

    <div class="input-group mb-3 col-8">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Dni</span>
        </div>
        <input type="text" class="form-control" name="dni" placeholder="" aria-label="Username" aria-describedby="basic-addon1" required value="{{ isset($emp) ? $emp->dni : '' }}">
    </div>
</div>

<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Telefono</span>
    </div>
    <input type="tel" class="form-control" name="cellPhone" placeholder="+51 999 999 999" aria-label="Username" aria-describedby="basic-addon1" pattern="[0-9]{9}" required value="{{ isset($emp) ? $emp->cellPhone : '' }}">
</div>

<div class="form-group py-2">
    <button class="btn btn-primary" type="submit">Guardar</button>
    <button class="btn btn-danger" type="reset">Cancelar</button>
</div>
