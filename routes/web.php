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

<<<<<<< HEAD
Route::get('/profile', function () {
    return view('profile');
});

=======
>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
Route::get('/mark', function () {
    return view('mark');
});

Route::get('/notificacoes', function () {
    return view('notificacoes');
});

<<<<<<< HEAD
=======
Route::get('/component', function () {
    return view('component');
});


/* Relatórios */

        Route::get('/r-televenda', function () {
            return view('r-televenda');
        });

        Route::get('/r-representantes', function () {
            return view('r-representantes');
        });

        Route::get('/relatorio-representantes', function () {
            return view('relatorio-representantes');
        });

        Route::get('/relatorio-televenda', function () {
            return view('relatorio-televenda');
        });

/* Fim Relatórios */

>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('tarefas', 'TarefasController');

Route::resource('departamentos', 'DepartamentosController');

Route::resource('tritons', 'TritonController');

Route::resource('negocios', 'NegociosController');

Route::resource('relacionamentos', 'RelacionamentosController');

Route::resource('telemarketings', 'TelemarketingController');

Route::resource('marketings', 'MarketingController');

<<<<<<< HEAD
Route::resource('vendas', 'VendasController');

=======
>>>>>>> 02789964ec70ae9a125b3f62c782f02e5f99d9ef
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