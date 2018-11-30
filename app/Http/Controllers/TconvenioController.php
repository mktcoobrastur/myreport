<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTconvenioRequest;
use App\Http\Requests\UpdateTconvenioRequest;
use App\Repositories\TconvenioRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TconvenioController extends AppBaseController
{
    /** @var  TconvenioRepository */
    private $tconvenioRepository;

    public function __construct(TconvenioRepository $tconvenioRepo)
    {
        $this->tconvenioRepository = $tconvenioRepo;
    }

    /**
     * Display a listing of the Tconvenio.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tconvenioRepository->pushCriteria(new RequestCriteria($request));
        $tconvenios = $this->tconvenioRepository->all();

        return view('tconvenios.index')
            ->with('tconvenios', $tconvenios);
    }

    /**
     * Show the form for creating a new Tconvenio.
     *
     * @return Response
     */
    public function create()
    {
        return view('tconvenios.create');
    }

    /**
     * Store a newly created Tconvenio in storage.
     *
     * @param CreateTconvenioRequest $request
     *
     * @return Response
     */
    public function store(CreateTconvenioRequest $request)
    {
        $input = $request->all();

        $tconvenio = $this->tconvenioRepository->create($input);

        Flash::success('Salvo.');

        return redirect(route('convenios.index'));
    }

    /**
     * Display the specified Tconvenio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tconvenio = $this->tconvenioRepository->findWithoutFail($id);

        if (empty($tconvenio)) {
            Flash::error('Ocorreu um erro.');

            return redirect(route('tconvenios.index'));
        }

        return view('tconvenios.show')->with('tconvenio', $tconvenio);
    }

    /**
     * Show the form for editing the specified Tconvenio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tconvenio = $this->tconvenioRepository->findWithoutFail($id);

        if (empty($tconvenio)) {
            Flash::error('Ocorreu um erro.');

            return redirect(route('tconvenios.index'));
        }

        return view('tconvenios.edit')->with('tconvenio', $tconvenio);
    }

    /**
     * Update the specified Tconvenio in storage.
     *
     * @param  int              $id
     * @param UpdateTconvenioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTconvenioRequest $request)
    {
        $tconvenio = $this->tconvenioRepository->findWithoutFail($id);

        if (empty($tconvenio)) {
            Flash::error('Ocorreu um erro.');

            return redirect(route('tconvenios.index'));
        }

        $tconvenio = $this->tconvenioRepository->update($request->all(), $id);

        Flash::success('Atualizado.');

        return redirect(route('tconvenios.index'));
    }

    /**
     * Remove the specified Tconvenio from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tconvenio = $this->tconvenioRepository->findWithoutFail($id);

        if (empty($tconvenio)) {
            Flash::error('Ocorreu um erro.');

            return redirect(route('tconvenios.index'));
        }

        $this->tconvenioRepository->delete($id);

        Flash::success('Excluído.');

        return redirect(route('tconvenios.index'));
    }
}
