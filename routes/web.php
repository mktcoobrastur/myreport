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

Route::get('/ramais-coobrastur', function () {
    return view('ramais-coobrastur');
});

Route::get('/indice', function () {
    return view('indice');
});

Route::get('/sugest', function () {
    return view('sugest');
});

Route::get('/mark', function () {
    return view('mark');
});

Route::get('/historico-chamados', function () {
    return view('historico-chamados');
});

Route::get('/filtro-chamados', function () {
    return view('filtro-chamados');
});

Route::get('/notificacoes', function () {
    return view('notificacoes');
});

Route::get('/reclameaqui', function () {
    return view('reclameaqui');
});

Route::get('/ranking', function () {
    return view('ranking');
});

Route::get('/converter', function () {
    return view('converter');
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

Route::resource('representantes', 'RepresentanteController');

Route::resource('vendasres', 'VendasreController');

Route::resource('laminas', 'LaminaController');

Route::resource('indices', 'IndiceController');

Route::resource('funcionarios', 'FuncionarioController');

Route::resource('diamantes', 'DiamanteController');

Route::resource('destinos', 'DestinosController');

Route::resource('hoteisdiamantes', 'HoteisdiamanteController');

Route::resource('roteiros', 'RoteirosController');

Route::resource('infos', 'InfoController');

Route::resource('parceiros', 'ParceirosController');

Route::resource('emailsdiamantes', 'EmailsdiamanteController');

Route::resource('basecontatos', 'BasecontatoController');