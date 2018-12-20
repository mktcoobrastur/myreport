<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDestinosRequest;
use App\Http\Requests\UpdateDestinosRequest;
use App\Repositories\DestinosRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DestinosController extends AppBaseController
{
    /** @var  DestinosRepository */
    private $destinosRepository;

    public function __construct(DestinosRepository $destinosRepo)
    {
        $this->destinosRepository = $destinosRepo;
    }

    /**
     * Display a listing of the Destinos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->destinosRepository->pushCriteria(new RequestCriteria($request));
        $destinos = $this->destinosRepository->all();

        return view('destinos.index')
            ->with('destinos', $destinos);
    }

    /**
     * Show the form for creating a new Destinos.
     *
     * @return Response
     */
    public function create()
    {
        return view('destinos.create');
    }

    /**
     * Store a newly created Destinos in storage.
     *
     * @param CreateDestinosRequest $request
     *
     * @return Response
     */
    public function store(CreateDestinosRequest $request)
    {
        $input = $request->all();

        $destinos = $this->destinosRepository->create($input);

        Flash::success('Destinos saved successfully.');

        return redirect(route('destinos.index'));
    }

    /**
     * Display the specified Destinos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $destinos = $this->destinosRepository->findWithoutFail($id);

        if (empty($destinos)) {
            Flash::error('Destinos not found');

            return redirect(route('destinos.index'));
        }

        return view('destinos.show')->with('destinos', $destinos);
    }

    /**
     * Show the form for editing the specified Destinos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $destinos = $this->destinosRepository->findWithoutFail($id);

        if (empty($destinos)) {
            Flash::error('Destinos not found');

            return redirect(route('destinos.index'));
        }

        return view('destinos.edit')->with('destinos', $destinos);
    }

    /**
     * Update the specified Destinos in storage.
     *
     * @param  int              $id
     * @param UpdateDestinosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDestinosRequest $request)
    {
        $destinos = $this->destinosRepository->findWithoutFail($id);

        if (empty($destinos)) {
            Flash::error('Destinos not found');

            return redirect(route('destinos.index'));
        }

        $destinos = $this->destinosRepository->update($request->all(), $id);

        Flash::success('Destinos updated successfully.');

        return redirect(route('destinos.index'));
    }

    /**
     * Remove the specified Destinos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $destinos = $this->destinosRepository->findWithoutFail($id);

        if (empty($destinos)) {
            Flash::error('Destinos not found');

            return redirect(route('destinos.index'));
        }

        $this->destinosRepository->delete($id);

        Flash::success('Destinos deleted successfully.');

        return redirect(route('destinos.index'));
    }
}
