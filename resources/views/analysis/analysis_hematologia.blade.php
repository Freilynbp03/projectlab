@extends("../layouts.layout")

@section("content")
<div class="register">
    <h3 class="register-heading">HEMATOLOAGIA</h3>
    <h4 class="register-heading">Paciente #653768</h4>
    <div class="row register-form">
        <div class="col-md-12">
            <div class="form-group p-2">
                <input type="text" class="form-control" placeholder="TIP. SANGUINEA" value="" />
            </div>
            <div class="form-group p-2">
                <input type="text" class="form-control" placeholder="Electrocedimenacion" value="" />
            </div>
            <div class="form-group p-2">
                <input type="text" class="form-control" placeholder="T. Sangria" value="" />
            </div>
            <div class="form-group p-2">
                <input type="text" class="form-control" placeholder="T. Cuagulacion" value="" />
            </div>
            <div class="form-group p-2">
                <input type="text" class="form-control" placeholder="Falcemia" value="" />
            </div>
        </div>

        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Realizar" />
    </div>
</div>


@endsection