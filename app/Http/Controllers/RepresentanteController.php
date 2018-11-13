<?php

namespace App\Http\Controllers;

use App\DataTables\RepresentanteDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateRepresentanteRequest;
use App\Http\Requests\UpdateRepresentanteRequest;
use App\Repositories\RepresentanteRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
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
     * @param RepresentanteDataTable $representanteDataTable
     * @return Response
     */
    public function index(RepresentanteDataTable $representanteDataTable)
    {
        return $representanteDataTable->render('representantes.index');
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

        Flash::success('Representante saved successfully.');

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
            Flash::error('Representante not found');

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
            Flash::error('Representante not found');

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
            Flash::error('Representante not found');

            return redirect(route('representantes.index'));
        }

        $representante = $this->representanteRepository->update($request->all(), $id);

        Flash::success('Representante updated successfully.');

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
            Flash::error('Representante not found');

            return redirect(route('representantes.index'));
        }

        $this->representanteRepository->delete($id);

        Flash::success('Representante deleted successfully.');

        return redirect(route('representantes.index'));
    }
}
