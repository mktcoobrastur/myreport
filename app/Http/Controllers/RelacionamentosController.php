<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRelacionamentosRequest;
use App\Http\Requests\UpdateRelacionamentosRequest;
use App\Repositories\RelacionamentosRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RelacionamentosController extends AppBaseController
{
    /** @var  RelacionamentosRepository */
    private $relacionamentosRepository;

    public function __construct(RelacionamentosRepository $relacionamentosRepo)
    {
        $this->relacionamentosRepository = $relacionamentosRepo;
    }

    /**
     * Display a listing of the Relacionamentos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->relacionamentosRepository->pushCriteria(new RequestCriteria($request));
        $relacionamentos = $this->relacionamentosRepository->all();

        return view('relacionamentos.index')
            ->with('relacionamentos', $relacionamentos->where('departamento', '=', 'Relacionamento'));
    }

    /**
     * Show the form for creating a new Relacionamentos.
     *
     * @return Response
     */
    public function create()
    {
        return view('relacionamentos.create');
    }

    /**
     * Store a newly created Relacionamentos in storage.
     *
     * @param CreateRelacionamentosRequest $request
     *
     * @return Response
     */
    public function store(CreateRelacionamentosRequest $request)
    {
        $input = $request->all();

        $relacionamentos = $this->relacionamentosRepository->create($input);

        Flash::success('Registro salvo com sucesso.');

        return redirect(route('relacionamentos.index'));
    }

    /**
     * Display the specified Relacionamentos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $relacionamentos = $this->relacionamentosRepository->findWithoutFail($id);

        if (empty($relacionamentos)) {
            Flash::error('Relacionamentos not found');

            return redirect(route('relacionamentos.index'));
        }

        return view('relacionamentos.show')->with('relacionamentos', $relacionamentos);
    }

    /**
     * Show the form for editing the specified Relacionamentos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $relacionamentos = $this->relacionamentosRepository->findWithoutFail($id);

        if (empty($relacionamentos)) {
            Flash::error('Relacionamentos not found');

            return redirect(route('relacionamentos.index'));
        }

        return view('relacionamentos.edit')->with('relacionamentos', $relacionamentos);
    }

    /**
     * Update the specified Relacionamentos in storage.
     *
     * @param  int              $id
     * @param UpdateRelacionamentosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRelacionamentosRequest $request)
    {
        $relacionamentos = $this->relacionamentosRepository->findWithoutFail($id);

        if (empty($relacionamentos)) {
            Flash::error('Relacionamentos not found');

            return redirect(route('relacionamentos.index'));
        }

        $relacionamentos = $this->relacionamentosRepository->update($request->all(), $id);

        Flash::success('Relacionamentos updated successfully.');

        return redirect(route('relacionamentos.index'));
    }

    /**
     * Remove the specified Relacionamentos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $relacionamentos = $this->relacionamentosRepository->findWithoutFail($id);

        if (empty($relacionamentos)) {
            Flash::error('Relacionamentos not found');

            return redirect(route('relacionamentos.index'));
        }

        $this->relacionamentosRepository->delete($id);

        Flash::success('Relacionamentos deleted successfully.');

        return redirect(route('relacionamentos.index'));
    }
}
