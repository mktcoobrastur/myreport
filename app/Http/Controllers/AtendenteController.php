<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAtendenteRequest;
use App\Http\Requests\UpdateAtendenteRequest;
use App\Repositories\AtendenteRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AtendenteController extends AppBaseController
{
    /** @var  AtendenteRepository */
    private $atendenteRepository;

    public function __construct(AtendenteRepository $atendenteRepo)
    {
        $this->atendenteRepository = $atendenteRepo;
    }

    /**
     * Display a listing of the Atendente.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->atendenteRepository->pushCriteria(new RequestCriteria($request));
        $atendentes = $this->atendenteRepository->all();

        return view('atendentes.index')
            ->with('atendentes', $atendentes);
    }

    /**
     * Show the form for creating a new Atendente.
     *
     * @return Response
     */
    public function create()
    {
        return view('atendentes.create');
    }

    /**
     * Store a newly created Atendente in storage.
     *
     * @param CreateAtendenteRequest $request
     *
     * @return Response
     */
    public function store(CreateAtendenteRequest $request)
    {
        $input = $request->all();

        $atendente = $this->atendenteRepository->create($input);

        Flash::success('Atendente saved successfully.');

        return redirect(route('atendentes.index'));
    }

    /**
     * Display the specified Atendente.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $atendente = $this->atendenteRepository->findWithoutFail($id);

        if (empty($atendente)) {
            Flash::error('Atendente not found');

            return redirect(route('atendentes.index'));
        }

        return view('atendentes.show')->with('atendente', $atendente);
    }

    /**
     * Show the form for editing the specified Atendente.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $atendente = $this->atendenteRepository->findWithoutFail($id);

        if (empty($atendente)) {
            Flash::error('Atendente not found');

            return redirect(route('atendentes.index'));
        }

        return view('atendentes.edit')->with('atendente', $atendente);
    }

    /**
     * Update the specified Atendente in storage.
     *
     * @param  int              $id
     * @param UpdateAtendenteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAtendenteRequest $request)
    {
        $atendente = $this->atendenteRepository->findWithoutFail($id);

        if (empty($atendente)) {
            Flash::error('Atendente not found');

            return redirect(route('atendentes.index'));
        }

        $atendente = $this->atendenteRepository->update($request->all(), $id);

        Flash::success('Atendente updated successfully.');

        return redirect(route('atendentes.index'));
    }

    /**
     * Remove the specified Atendente from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $atendente = $this->atendenteRepository->findWithoutFail($id);

        if (empty($atendente)) {
            Flash::error('Atendente not found');

            return redirect(route('atendentes.index'));
        }

        $this->atendenteRepository->delete($id);

        Flash::success('Atendente deleted successfully.');

        return redirect(route('atendentes.index'));
    }
}
