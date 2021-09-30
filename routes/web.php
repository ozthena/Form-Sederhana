<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    $formData=[
        'nama'=>['text','Nama'],
        'alamat'=>['text','Alamat'],
        'username'=>['email','Username'],
        'password'=>['password','Password'],
        'blood'=>['select','Golongan Darah',['A','B','AB','O']],
        'hobby'=>['checkbox', 'Hobby',['Jalan-jalan', 'Memancing','Berenang']],
        'gender'=>['radio','Jenis Kelamin',['Pria','Wanita']],
        'profile'=>['textarea','Profile'],
        'btnsimpan'=>['submit','Simpan']
        
    ];
    return view('forms',compact('formData'));
});

Route::post('/hasil', function (Request $request) {
    return $request->all();
});
