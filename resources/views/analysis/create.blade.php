@extends("../layouts.layout")

@section("content")

    <form action="/analysis" method="POST">
    
        <div class="tab-pane fade show" id="quimica" role="tabpanel" aria-labelledby="quimica-tab">
            <h3 class="register-heading">QUIMICA CLINICA</h3>
            <h4 class="register-heading">Paciente #653768</h4>
            <div class="row register-form">
                <div>
                    <table class="table col-md-6">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Valor Referencia</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Acido Urico</th>
                                <td><input type="text" class="form-control"></td>
                                <td>Hombre 3.6-7.2 MG/DL, Mujer 2.5-6.0 MG/DL</td>
                              </tr>
                          <tr>
                            <th scope="row">Colesterol</th>
                            <td><input type="text" class="form-control"></td>
                            <td>Hombre 123-270 MG/DL, Mujer 123-243 MG/DL</td>
                          </tr>
                          <tr>
                            <th scope="row">Colesterol HDL</th>
                            <td><input type="text" class="form-control"></td>
                            <td>Hombre 35-60 MG/DL</td>
                          </tr>
                          <tr>
                            <th scope="row">Colesterol LDL</th>
                            <td><input type="text" class="form-control"></td>
                            <td>Hasta 130 MDL</td>
                          </tr>
                          <tr>
                            <th scope="row">CREATININA</th>
                            <td><input type="text" class="form-control"></td>
                            <td>Hombre 0.9-1.3 MG/DL</td>
                          </tr>                                      <tr>
                            <th scope="row">Glicemia</th>
                            <td><input type="text" class="form-control"></td>
                            <td>70 - 110 MG/DL</td>
                          </tr>                                      <tr>
                            <th scope="row">Trigliceridos</th>
                            <td><input type="text" class="form-control"></td>
                            <td>60 - 150 MG/DL</td>
                          </tr>                                      <tr>
                            <th scope="row">Urea</th>
                            <td><input type="text" class="form-control"></td>
                            <td>15 - 39 MG/DL</td>
                        </tbody>
                      </table>
                </div>
                <div>
                    <table class="table col-md-6">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Valor Referencia</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Bilirrubina T</th>
                                <td><input type="text" class="form-control"></td>
                                <td>Hasta MG/DL</td>
                              </tr>
                          <tr>
                            <th scope="row">Bilirrubina D</th>
                            <td><input type="text" class="form-control"></td>
                            <td>Hasta 0.2 MG/DL</td>
                          </tr>
                          <tr>
                            <th scope="row">Bilirrubina I</th>
                            <td><input type="text" class="form-control"></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">Fosfatasa Alcalina</th>
                            <td><input type="text" class="form-control"></td>
                            <td>26 - 117 U/L</td>
                          </tr>
                          <tr>
                            <th scope="row">Fosfatasa Asida</th>
                            <td><input type="text" class="form-control"></td>
                            <td></td>
                          </tr>                                      <tr>
                            <th scope="row">Lipasa</th>
                            <td><input type="text" class="form-control"></td>
                            <td></td>
                          </tr>                                      <tr>
                            <th scope="row">TGO U/L</th>
                            <td><input type="text" class="form-control"></td>
                            <td>Hasta 40 U/L</td>
                          </tr>                                      <tr>
                            <th scope="row">TGO U/L</th>
                            <td><input type="text" class="form-control"></td>
                            <td>Hasta 41 U/L</td>
                        </tbody>
                      </table>
                    <input type="submit" class="btnRegister" value="Register" />
                </div>
            </div>
        </div>  

    </form>

@endsection