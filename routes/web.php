<?php

use Illuminate\Support\Facades\Route;
use App\Patient;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', function () {
     return view('home');
 });

// Route::get('/laboratorio', 'HomeController@home');
// Route::get('/', 'LabController@index');

//  Route::get("/registrar", function(){
//      DB::insert("INSERT INTO patients (name, lastname, nss, doctor, sex, age, phone, unidad) VALUES (?, ?, ?, ?, ?, ?, ?, ?)",
//      ["Adriana", "Almanzar", "7564","Hernandez", "Femenino", 19, 809456754, "unidad3"]);
//  });

// Route::get("/leer", function(){
//    $resul = DB::select("SELECT * FROM registerpaciente WHERE ID=?", [1]);

//     foreach($resul as $paciente){
//         return $paciente->name;

//     }
// });

// Route::get("/actualizar", function(){
//     DB::update("UPDATE registerpaciente SET age=19 WHERE ID=?", [1]);
// });

// Route::get("/leer", function(){

//      $patients = Patient::all();

//      foreach($patients as $patient){
//          echo $patient->name . "  Doctor: " . $patient->doctor . "<br>";
//      }

//     $patients = Patient::WHERE("doctor", "medina")->get();
//     return $patients;

// });

// Route::get('/patients/create', 'PatientController@create');
// Route::get('/patients', 'PatientController@index');
// Route::get('/patients/{patient}', 'PatientController@show');

// Route::post('/patients', 'PatientController@store');

Route::get('/analysis/create', 'AnalysisController@create');

Route::resource('patients', PatientController::class)->shallow();

 Route::get('/analysis_serologia', function () {
     return view('/analysis/analysis_serologia');
 });
 Route::get('/analysis_hematologia', function () {
    return view('/analysis/analysis_hematologia');
}); 

Route::get('/analysis_especial', function () {
    return view('/analysis/analysis_especial');
});

Route::get('/analysis_fecales', function () {
    return view('/analysis/analysis_fecales');
}); 
