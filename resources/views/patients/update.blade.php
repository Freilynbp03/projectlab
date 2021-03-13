@extends("../layouts.layout")

@section("content")

    <form action="/patients/{{$patients->id}}" method="post">
        <div class="col-md-12 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Actualizar Paciente</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group p-2">
                                <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{$patients->name}}" />
                            </div>
                            <div class="form-group p-2">
                                <input type="text" class="form-control" placeholder="Apellido" name="lastname" value="{{$patients->lastname}}" />
                            </div> 
                            <div class="form-group p-2">
                                <input type="text" class="form-control" placeholder="NSS" name="nss" value="{{$patients->nss}}" />
                            </div>
                            <div class="form-group p-2">
                                <input type="text" class="form-control" placeholder="Doctor" name="doctor" value="{{$patients->doctor}}" />
                            </div>
                            <div class="form-group p-2">
                                <div class="maxl">
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="male">
                                        <span> Hombre </span>
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="female">
                                        <span>Mujer </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group p-2">
                                <input type="edad" class="form-control" placeholder="Edad" name="age" value="{{$patients->age}}" />
                            </div>
                            <div class="form-group p-2">
                                <input type="text" minlength="10" maxlength="10" name="phone"
                                    class="form-control" placeholder="Telefono" value="{{$patients->phone}}" />
                            </div>
                            <div class="form-group p-2">
                                <input type="text" class="form-control" placeholder="Unidad" name="unidad" value="{{$patients->unidad}}" />
                            </div>
                            <div class="form-group p-2">
                                <input type="date" class="form-control" id="start" name="trip-start" value="2021-03-01" min="2018-01-01">
                            </div>
                            <input type="submit" class="btnRegister" value="Registrar" />
                        </div>
                    </div>
                </div>                  
            </div>
        </div>
    </form>
@endsection