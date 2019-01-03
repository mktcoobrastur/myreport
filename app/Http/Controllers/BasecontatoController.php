<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBasecontatoRequest;
use App\Http\Requests\UpdateBasecontatoRequest;
use App\Repositories\BasecontatoRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class BasecontatoController extends AppBaseController
{
    /** @var  BasecontatoRepository */
    private $basecontatoRepository;

    public function __construct(BasecontatoRepository $basecontatoRepo)
    {
        $this->basecontatoRepository = $basecontatoRepo;
    }

    /**
     * Display a listing of the Basecontato.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->basecontatoRepository->pushCriteria(new RequestCriteria($request));
        $basecontatos = $this->basecontatoRepository->all();

        return view('basecontatos.index')
            ->with('basecontatos', $basecontatos);
    }

    /**
     * Show the form for creating a new Basecontato.
     *
     * @return Response
     */
    public function create()
    {
        return view('basecontatos.create');
    }

    /**
     * Store a newly created Basecontato in storage.
     *
     * @param CreateBasecontatoRequest $request
     *
     * @return Response
     */
    public function store(CreateBasecontatoRequest $request)
    {
        $input = $request->all();

        $basecontato = $this->basecontatoRepository->create($input);

        Flash::success('Basecontato saved successfully.');

        return redirect(route('basecontatos.index'));
    }

    /**
     * Display the specified Basecontato.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $basecontato = $this->basecontatoRepository->findWithoutFail($id);

        if (empty($basecontato)) {
            Flash::error('Basecontato not found');

            return redirect(route('basecontatos.index'));
        }

        return view('basecontatos.show')->with('basecontato', $basecontato);
    }

    /**
     * Show the form for editing the specified Basecontato.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $basecontato = $this->basecontatoRepository->findWithoutFail($id);

        if (empty($basecontato)) {
            Flash::error('Basecontato not found');

            return redirect(route('basecontatos.index'));
        }

        return view('basecontatos.edit')->with('basecontato', $basecontato);
    }

    /**
     * Update the specified Basecontato in storage.
     *
     * @param  int              $id
     * @param UpdateBasecontatoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBasecontatoRequest $request)
    {
        $basecontato = $this->basecontatoRepository->findWithoutFail($id);

        if (empty($basecontato)) {
            Flash::error('Basecontato not found');

            return redirect(route('basecontatos.index'));
        }

        $basecontato = $this->basecontatoRepository->update($request->all(), $id);

        Flash::success('Basecontato updated successfully.');

        return redirect(route('basecontatos.index'));
    }

    /**
     * Remove the specified Basecontato from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $basecontato = $this->basecontatoRepository->findWithoutFail($id);

        if (empty($basecontato)) {
            Flash::error('Basecontato not found');

            return redirect(route('basecontatos.index'));
        }

        $this->basecontatoRepository->delete($id);

        Flash::success('Basecontato deleted successfully.');

        return redirect(route('basecontatos.index'));
    }
}
