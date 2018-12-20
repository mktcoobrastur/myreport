<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRepresentanteRequest;
use App\Http\Requests\UpdateRepresentanteRequest;
use App\Repositories\RepresentanteRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RepresentanteController extends AppBaseController
{
    /** @var  RepresentanteRepository */
    private $representanteRepository;

    public function __construct(RepresentanteRepository $representanteRepo)
    {
        $this->representanteRepository = $representanteRepo;
    }

    /**
     * Display a listing of the Representante.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->representanteRepository->pushCriteria(new RequestCriteria($request));
        $representantes = $this->representanteRepository->all();

        return view('representantes.index')
            ->with('representantes', $representantes);
    }

    /**
     * Show the form for creating a new Representante.
     *
     * @return Response
     */
    public function create()
    {
        return view('representantes.create');
    }

    /**
     * Store a newly created Representante in storage.
     *
     * @param CreateRepresentanteRequest $request
     *
     * @return Response
     */
    public function store(CreateRepresentanteRequest $request)
    {
        $input = $request->all();

        $representante = $this->representanteRepository->create($input);

        Flash::success('Salvo.');

        return redirect(route('representantes.index'));
    }

    /**
     * Display the specified Representante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $representante = $this->representanteRepository->findWithoutFail($id);

        if (empty($representante)) {
            Flash::error('Ocorreu um erro #8484 (Comunique este código de erro ao Setor Responsável).');

            return redirect(route('representantes.index'));
        }

        return view('representantes.show')->with('representante', $representante);
    }

    /**
     * Show the form for editing the specified Representante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $representante = $this->representanteRepository->findWithoutFail($id);

        if (empty($representante)) {
            Flash::error('Ocorreu um erro #8484 (Comunique este código de erro ao Setor Responsável).');

            return redirect(route('representantes.index'));
        }

        return view('representantes.edit')->with('representante', $representante);
    }

    /**
     * Update the specified Representante in storage.
     *
     * @param  int              $id
     * @param UpdateRepresentanteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRepresentanteRequest $request)
    {
        $representante = $this->representanteRepository->findWithoutFail($id);

        if (empty($representante)) {
            Flash::error('Ocorreu um erro #8484 (Comunique este código de erro ao Setor Responsável).');

            return redirect(route('representantes.index'));
        }

        $representante = $this->representanteRepository->update($request->all(), $id);

        Flash::success('Atualizado.');

        return redirect(route('representantes.index'));
    }

    /**
     * Remove the specified Representante from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $representante = $this->representanteRepository->findWithoutFail($id);

        if (empty($representante)) {
            Flash::error('Ocorreu um erro #8484 (Comunique este código de erro ao Setor Responsável).');

            return redirect(route('representantes.index'));
        }

        $this->representanteRepository->delete($id);

        Flash::success('Excluido.');

        return redirect(route('representantes.index'));
    }
}
