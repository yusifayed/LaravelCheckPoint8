<?php
//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/12', function () {
return view('conten');
});
Route::get('/1', function () {
return view('tabels');
});
Route::resource('kontak','Kontak');
Route::get('/2', function () {
return view('create');});
Route::resource('satpam','satpam');
Route::resource('pulau','pulau');
Route::resource('barang','barang');
Route::resource('pembelian','pembelian');
Route::resource('penjualan','penjualan');
Route::get('/90', function () {
return view('createpembelian');});
Route::get('/5', function () {
return view('createpenjualan');});
Route::get('/9', function () {
return view('createpulau');});
Route::get('/00', function () {
return view('createbarang');});
Route::get('login','login@index');
Route::post('/cek','login@cek');
Route::get('/','dashboar@index');
Route::get('/logout','login@logout');