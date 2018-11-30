<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTprojetoRequest;
use App\Http\Requests\UpdateTprojetoRequest;
use App\Repositories\TprojetoRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TprojetoController extends AppBaseController
{
    /** @var  TprojetoRepository */
    private $tprojetoRepository;

    public function __construct(TprojetoRepository $tprojetoRepo)
    {
        $this->tprojetoRepository = $tprojetoRepo;
    }

    /**
     * Display a listing of the Tprojeto.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tprojetoRepository->pushCriteria(new RequestCriteria($request));
        $tprojetos = $this->tprojetoRepository->all();

        return view('tprojetos.index')
            ->with('tprojetos', $tprojetos);
    }

    /**
     * Show the form for creating a new Tprojeto.
     *
     * @return Response
     */
    public function create()
    {
        return view('tprojetos.create');
    }

    /**
     * Store a newly created Tprojeto in storage.
     *
     * @param CreateTprojetoRequest $request
     *
     * @return Response
     */
    public function store(CreateTprojetoRequest $request)
    {
        $input = $request->all();

        $tprojeto = $this->tprojetoRepository->create($input);

        Flash::success('Salvo.');

        return redirect(route('tprojetos.index'));
    }

    /**
     * Display the specified Tprojeto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tprojeto = $this->tprojetoRepository->findWithoutFail($id);

        if (empty($tprojeto)) {
            Flash::error('Ocorreu um erro.');

            return redirect(route('tprojetos.index'));
        }

        return view('tprojetos.show')->with('tprojeto', $tprojeto);
    }

    /**
     * Show the form for editing the specified Tprojeto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tprojeto = $this->tprojetoRepository->findWithoutFail($id);

        if (empty($tprojeto)) {
            Flash::error('Ocorreu um erro.');

            return redirect(route('tprojetos.index'));
        }

        return view('tprojetos.edit')->with('tprojeto', $tprojeto);
    }

    /**
     * Update the specified Tprojeto in storage.
     *
     * @param  int              $id
     * @param UpdateTprojetoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTprojetoRequest $request)
    {
        $tprojeto = $this->tprojetoRepository->findWithoutFail($id);

        if (empty($tprojeto)) {
            Flash::error('Ocorreu um erro.');

            return redirect(route('tprojetos.index'));
        }

        $tprojeto = $this->tprojetoRepository->update($request->all(), $id);

        Flash::success('Atualizado.');

        return redirect(route('tprojetos.index'));
    }

    /**
     * Remove the specified Tprojeto from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tprojeto = $this->tprojetoRepository->findWithoutFail($id);

        if (empty($tprojeto)) {
            Flash::error('Ocorreu um erro.');

            return redirect(route('tprojetos.index'));
        }

        $this->tprojetoRepository->delete($id);

        Flash::success('Excluído.');

        return redirect(route('tprojetos.index'));
    }
}
