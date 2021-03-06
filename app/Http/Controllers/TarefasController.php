<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTarefasRequest;
use App\Http\Requests\UpdateTarefasRequest;
use App\Repositories\TarefasRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TarefasController extends AppBaseController
{
    /** @var  TarefasRepository */
    private $tarefasRepository;

    public function __construct(TarefasRepository $tarefasRepo)
    {
        $this->tarefasRepository = $tarefasRepo;
    }

    /**
     * Display a listing of the Tarefas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tarefasRepository->pushCriteria(new RequestCriteria($request));
        $tarefas = $this->tarefasRepository->all();

        return view('tarefas.index')
            ->with('tarefas', $tarefas);
    }

    /**
     * Show the form for creating a new Tarefas.
     *
     * @return Response
     */
    public function create()
    {
        return view('tarefas.create');
    }

    /**
     * Store a newly created Tarefas in storage.
     *
     * @param CreateTarefasRequest $request
     *
     * @return Response
     */
    public function store(CreateTarefasRequest $request)
    {
        $input = $request->all();

        $tarefas = $this->tarefasRepository->create($input);

        Flash::success('Tarefa salva com sucesso.');

        return redirect(route('tarefas.index'));
    }

    /**
     * Display the specified Tarefas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tarefas = $this->tarefasRepository->findWithoutFail($id);

        if (empty($tarefas)) {
            Flash::error('Sem registro!');

            return redirect(route('tarefas.index'));
        }

        return view('tarefas.show')->with('tarefas', $tarefas);
    }

    /**
     * Show the form for editing the specified Tarefas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tarefas = $this->tarefasRepository->findWithoutFail($id);

        if (empty($tarefas)) {
            Flash::error('Sem registro!');

            return redirect(route('tarefas.index'));
        }

        return view('tarefas.edit')->with('tarefas', $tarefas);
    }

    /**
     * Update the specified Tarefas in storage.
     *
     * @param  int              $id
     * @param UpdateTarefasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTarefasRequest $request)
    {
        $tarefas = $this->tarefasRepository->findWithoutFail($id);

        if (empty($tarefas)) {
            Flash::error('Sem registro!');

            return redirect(route('tarefas.index'));
        }

        $tarefas = $this->tarefasRepository->update($request->all(), $id);

        Flash::success('Registro salvo com sucesso.');

        return redirect(route('tarefas.index'));
    }

    /**
     * Remove the specified Tarefas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tarefas = $this->tarefasRepository->findWithoutFail($id);

        if (empty($tarefas)) {
            Flash::error('Sem registro!');

            return redirect(route('tarefas.index'));
        }

        $this->tarefasRepository->delete($id);

        Flash::success('Tarefa deletada com sucesso.');

        return redirect(route('tarefas.index'));
    }
}
