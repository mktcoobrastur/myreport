<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHoteisdiamanteRequest;
use App\Http\Requests\UpdateHoteisdiamanteRequest;
use App\Repositories\HoteisdiamanteRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class HoteisdiamanteController extends AppBaseController
{
    /** @var  HoteisdiamanteRepository */
    private $hoteisdiamanteRepository;

    public function __construct(HoteisdiamanteRepository $hoteisdiamanteRepo)
    {
        $this->hoteisdiamanteRepository = $hoteisdiamanteRepo;
    }

    /**
     * Display a listing of the Hoteisdiamante.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->hoteisdiamanteRepository->pushCriteria(new RequestCriteria($request));
        $hoteisdiamantes = $this->hoteisdiamanteRepository->all();

        return view('hoteisdiamantes.index')
            ->with('hoteisdiamantes', $hoteisdiamantes);
    }

    /**
     * Show the form for creating a new Hoteisdiamante.
     *
     * @return Response
     */
    public function create()
    {
        return view('hoteisdiamantes.create');
    }

    /**
     * Store a newly created Hoteisdiamante in storage.
     *
     * @param CreateHoteisdiamanteRequest $request
     *
     * @return Response
     */
    public function store(CreateHoteisdiamanteRequest $request)
    {
        $input = $request->all();

        $hoteisdiamante = $this->hoteisdiamanteRepository->create($input);

        Flash::success('Hoteisdiamante saved successfully.');

        return redirect(route('hoteisdiamantes.index'));
    }

    /**
     * Display the specified Hoteisdiamante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hoteisdiamante = $this->hoteisdiamanteRepository->findWithoutFail($id);

        if (empty($hoteisdiamante)) {
            Flash::error('Hoteisdiamante not found');

            return redirect(route('hoteisdiamantes.index'));
        }

        return view('hoteisdiamantes.show')->with('hoteisdiamante', $hoteisdiamante);
    }

    /**
     * Show the form for editing the specified Hoteisdiamante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hoteisdiamante = $this->hoteisdiamanteRepository->findWithoutFail($id);

        if (empty($hoteisdiamante)) {
            Flash::error('Hoteisdiamante not found');

            return redirect(route('hoteisdiamantes.index'));
        }

        return view('hoteisdiamantes.edit')->with('hoteisdiamante', $hoteisdiamante);
    }

    /**
     * Update the specified Hoteisdiamante in storage.
     *
     * @param  int              $id
     * @param UpdateHoteisdiamanteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHoteisdiamanteRequest $request)
    {
        $hoteisdiamante = $this->hoteisdiamanteRepository->findWithoutFail($id);

        if (empty($hoteisdiamante)) {
            Flash::error('Hoteisdiamante not found');

            return redirect(route('hoteisdiamantes.index'));
        }

        $hoteisdiamante = $this->hoteisdiamanteRepository->update($request->all(), $id);

        Flash::success('Hoteisdiamante updated successfully.');

        return redirect(route('hoteisdiamantes.index'));
    }

    /**
     * Remove the specified Hoteisdiamante from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $hoteisdiamante = $this->hoteisdiamanteRepository->findWithoutFail($id);

        if (empty($hoteisdiamante)) {
            Flash::error('Hoteisdiamante not found');

            return redirect(route('hoteisdiamantes.index'));
        }

        $this->hoteisdiamanteRepository->delete($id);

        Flash::success('Hoteisdiamante deleted successfully.');

        return redirect(route('hoteisdiamantes.index'));
    }
}
