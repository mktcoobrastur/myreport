<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateChamadoRequest;
use App\Http\Requests\UpdateChamadoRequest;
use App\Repositories\ChamadoRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use Flash;
use Response;
use DB;

class ChamadoController extends AppBaseController
{
    /** @var  ChamadoRepository */
    private $chamadoRepository;

    public function __construct(ChamadoRepository $chamadoRepo)
    {
        $this->chamadoRepository = $chamadoRepo;
    }

    /**
     * Display a listing of the Chamado.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->chamadoRepository->pushCriteria(new RequestCriteria($request));
        $chamados = $this->chamadoRepository->all();
        $chamados = DB::table('chamados')
        ->orderBy('id', 'desc')  // You can pass as many columns as you required. Required 'use DB';
        ->get();
        return view('chamados.index')
            ->with('chamados', $chamados);
    }

    /**
     * Show the form for creating a new Chamado.
     *
     * @return Response
     */
    public function create()
    {
        return view('chamados.create');
    }

    /**
     * Store a newly created Chamado in storage.
     *
     * @param CreateChamadoRequest $request
     *
     * @return Response
     */
    public function store(CreateChamadoRequest $request)
    {
        $input = $request->all();

        $chamado = $this->chamadoRepository->create($input);

        Flash::success('Chamado salvo.');

        return redirect(route('chamados.index'));
    }

    /**
     * Display the specified Chamado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $chamado = $this->chamadoRepository->findWithoutFail($id);

        if (empty($chamado)) {
            Flash::error('Ocorreu um erro.');

            return redirect(route('chamados.index'));
        }

        return view('chamados.show')->with('chamado', $chamado);
    }

    /**
     * Show the form for editing the specified Chamado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $chamado = $this->chamadoRepository->findWithoutFail($id);

        if (empty($chamado)) {
            Flash::error('Ocorreu um erro.');

            return redirect(route('chamados.index'));
        }

        return view('chamados.edit')->with('chamado', $chamado);
    }

    /**
     * Update the specified Chamado in storage.
     *
     * @param  int              $id
     * @param UpdateChamadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateChamadoRequest $request)
    {
        $chamado = $this->chamadoRepository->findWithoutFail($id);

        if (empty($chamado)) {
            Flash::error('Ocorreu um erro.');

            return redirect(route('chamados.index'));
        }

        $chamado = $this->chamadoRepository->update($request->all(), $id);

        Flash::success('Chamado atualizado.');

        return redirect(route('chamados.index'));
    }

    /**
     * Remove the specified Chamado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $chamado = $this->chamadoRepository->findWithoutFail($id);

        if (empty($chamado)) {
            Flash::error('Ocorreu um erro.');

            return redirect(route('chamados.index'));
        }

        $this->chamadoRepository->delete($id);

        Flash::success('Chamado excluído.');

        return redirect(route('chamados.index'));
    }
}
