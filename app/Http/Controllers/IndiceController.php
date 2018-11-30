<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateIndiceRequest;
use App\Http\Requests\UpdateIndiceRequest;
use App\Repositories\IndiceRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class IndiceController extends AppBaseController
{
    /** @var  IndiceRepository */
    private $indiceRepository;

    public function __construct(IndiceRepository $indiceRepo)
    {
        $this->indiceRepository = $indiceRepo;
    }

    /**
     * Display a listing of the Indice.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->indiceRepository->pushCriteria(new RequestCriteria($request));
        $indices = $this->indiceRepository->all();

        return view('indices.index')
            ->with('indices', $indices);
    }

    /**
     * Show the form for creating a new Indice.
     *
     * @return Response
     */
    public function create()
    {
        return view('indices.create');
    }

    /**
     * Store a newly created Indice in storage.
     *
     * @param CreateIndiceRequest $request
     *
     * @return Response
     */
    public function store(CreateIndiceRequest $request)
    {
        $input = $request->all();

        $indice = $this->indiceRepository->create($input);

        Flash::success('Indice salvo.');

        return redirect(route('indices.index'));
    }

    /**
     * Display the specified Indice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $indice = $this->indiceRepository->findWithoutFail($id);

        if (empty($indice)) {
            Flash::error('Ocorreu um erro.');

            return redirect(route('indices.index'));
        }

        return view('indices.show')->with('indice', $indice);
    }

    /**
     * Show the form for editing the specified Indice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $indice = $this->indiceRepository->findWithoutFail($id);

        if (empty($indice)) {
            Flash::error('Ocorreu um erro.');

            return redirect(route('indices.index'));
        }

        return view('indices.edit')->with('indice', $indice);
    }

    /**
     * Update the specified Indice in storage.
     *
     * @param  int              $id
     * @param UpdateIndiceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateIndiceRequest $request)
    {
        $indice = $this->indiceRepository->findWithoutFail($id);

        if (empty($indice)) {
            Flash::error('Ocorreu um erro.');

            return redirect(route('indices.index'));
        }

        $indice = $this->indiceRepository->update($request->all(), $id);

        Flash::success('Indice atualizado.');

        return redirect(route('indices.index'));
    }

    /**
     * Remove the specified Indice from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $indice = $this->indiceRepository->findWithoutFail($id);

        if (empty($indice)) {
            Flash::error('Ocorreu um erro.');

            return redirect(route('indices.index'));
        }

        $this->indiceRepository->delete($id);

        Flash::success('Indice excluído.');

        return redirect(route('indices.index'));
    }
}
