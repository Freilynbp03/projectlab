@extends("../layouts.layout")

@section("content")
<div class="tab-pane fade show" id="materias" role="tabpanel" aria-labelledby="serologia-tab">
    <h3 class="register-heading">MATERIAS FECALES</h3>
    <h4 class="register-heading">Paciente #653768</h4>
    <div class="row register-form">
        <div class="col-md-6">
            <div class="form-group p-2">
                <input type="text" class="form-control" placeholder="Color" value="" />
            </div>
            <div class="form-group p-2">
                <input type="text" class="form-control" placeholder="Consistencia" value="" />
            </div>
            <div class="form-group p-2">
                <input type="text" class="form-control" placeholder="Quistes" value="" />
            </div>
            <div class="form-group p-2">
                <input type="text" class="form-control" placeholder="Larvas" value="" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group p-2">
                <input type="text" class="form-control" placeholder="Sangre Oculta" value="" />
            </div>
            <div class="form-group p-2">
                <input type="text" class="form-control" placeholder="Globulos Blancos" value="" />
            </div>
            <div class="form-group p-2">
                <input type="text" class="form-control" placeholder="Globulos Rojos" value="" />
            </div>
            <div class="form-group p-2">
                <input type="text" class="form-control" placeholder="Otros" value="" />
            </div>
            <input type="submit" class="btnRegister" value="Register" />
        </div>
    </div>
</div>
@endsection