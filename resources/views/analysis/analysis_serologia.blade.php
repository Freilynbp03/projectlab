@extends("../layouts.layout")

@section("content")

<div class="tab-pane fade show" id="serologia" role="tabpanel" aria-labelledby="serologia-tab">
    <h3 class="register-heading">SOROLOGIA</h3>
    <h4 class="register-heading">Paciente #653768</h4>
    <div class="row register-form">
        <div class="col-md-6">
            <div class="form-group p-2">
                <input type="text" class="form-control" placeholder="VDRL" value="" />
            </div>
            <div class="form-group p-2">
                <input type="text" class="form-control" placeholder="ASO" value="" />
            </div>
            <div class="form-group p-2">
                <input type="text" class="form-control" placeholder="PCR" value="" />
            </div>
            <div class="form-group p-2">
                <input type="text" class="form-control" placeholder="Gestatest" value="" />
            </div>
            <div class="form-group p-2">
                <input type="text" class="form-control" placeholder="COVID 19" value="" />
            </div>
        </div>
        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Realizar" />
    </div>
</div>

@endsection