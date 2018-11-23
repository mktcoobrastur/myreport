<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMarkconvenioRequest;
use App\Http\Requests\UpdateMarkconvenioRequest;
use App\Repositories\MarkconvenioRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MarkconvenioController extends AppBaseController
{
    /** @var  MarkconvenioRepository */
    private $markconvenioRepository;

    public function __construct(MarkconvenioRepository $markconvenioRepo)
    {
        $this->markconvenioRepository = $markconvenioRepo;
    }

    /**
     * Display a listing of the Markconvenio.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->markconvenioRepository->pushCriteria(new RequestCriteria($request));
        $markconvenios = $this->markconvenioRepository->all();

        return view('markconvenios.index')
            ->with('markconvenios', $markconvenios);
    }

    /**
     * Show the form for creating a new Markconvenio.
     *
     * @return Response
     */
    public function create()
    {
        return view('markconvenios.create');
    }

    /**
     * Store a newly created Markconvenio in storage.
     *
     * @param CreateMarkconvenioRequest $request
     *
     * @return Response
     */
    public function store(CreateMarkconvenioRequest $request)
    {
        $input = $request->all();

        $markconvenio = $this->markconvenioRepository->create($input);

        Flash::success('Markconvenio saved successfully.');

        return redirect(route('markconvenios.index'));
    }

    /**
     * Display the specified Markconvenio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $markconvenio = $this->markconvenioRepository->findWithoutFail($id);

        if (empty($markconvenio)) {
            Flash::error('Markconvenio not found');

            return redirect(route('markconvenios.index'));
        }

        return view('markconvenios.show')->with('markconvenio', $markconvenio);
    }

    /**
     * Show the form for editing the specified Markconvenio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $markconvenio = $this->markconvenioRepository->findWithoutFail($id);

        if (empty($markconvenio)) {
            Flash::error('Markconvenio not found');

            return redirect(route('markconvenios.index'));
        }

        return view('markconvenios.edit')->with('markconvenio', $markconvenio);
    }

    /**
     * Update the specified Markconvenio in storage.
     *
     * @param  int              $id
     * @param UpdateMarkconvenioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMarkconvenioRequest $request)
    {
        $markconvenio = $this->markconvenioRepository->findWithoutFail($id);

        if (empty($markconvenio)) {
            Flash::error('Markconvenio not found');

            return redirect(route('markconvenios.index'));
        }

        $markconvenio = $this->markconvenioRepository->update($request->all(), $id);

        Flash::success('Markconvenio updated successfully.');

        return redirect(route('markconvenios.index'));
    }

    /**
     * Remove the specified Markconvenio from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $markconvenio = $this->markconvenioRepository->findWithoutFail($id);

        if (empty($markconvenio)) {
            Flash::error('Markconvenio not found');

            return redirect(route('markconvenios.index'));
        }

        $this->markconvenioRepository->delete($id);

        Flash::success('Markconvenio deleted successfully.');

        return redirect(route('markconvenios.index'));
    }
}
