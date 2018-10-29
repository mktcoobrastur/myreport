<?php

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/indice', function () {
    return view('indice');
});

Route::get('/nav', function () {
    return view('nav');
});

Route::get('/mark', function () {
    return view('mark');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('tarefas', 'TarefasController');

Route::resource('departamentos', 'DepartamentosController');

Route::resource('tritons', 'TritonController');

Route::resource('negocios', 'NegociosController');

Route::resource('relacionamentos', 'RelacionamentosController');

Route::resource('telemarketings', 'TelemarketingController');

Route::resource('marketings', 'MarketingController');

Route::resource('vendas', 'VendasController');

Route::resource('vendasdias', 'VendasdiaController');

Route::resource('metas', 'MetaController');

Route::resource('atendentes', 'AtendenteController');

Route::resource('usuarios', 'UsuarioController');

Route::resource('tconvenios', 'TconvenioController');

Route::resource('projetos', 'ProjetoController');

Route::resource('tprojetos', 'TprojetoController');

Route::resource('promocoes', 'PromocoeController');

Route::resource('fotos', 'FotoController');

Route::resource('markconvenios', 'MarkconvenioController');

Route::resource('markconveniados', 'MarkconveniadoController');

Route::resource('markcampanhas', 'MarkcampanhaController');

Route::resource('hoteis', 'HoteiController');

Route::resource('departamentos', 'DepartamentoController');

Route::resource('recados', 'RecadoController');

Route::resource('chamados', 'ChamadoController');

Route::resource('convenios', 'ConvenioController');