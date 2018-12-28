<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateParceirosRequest;
use App\Http\Requests\UpdateParceirosRequest;
use App\Repositories\ParceirosRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ParceirosController extends AppBaseController
{
    /** @var  ParceirosRepository */
    private $parceirosRepository;

    public function __construct(ParceirosRepository $parceirosRepo)
    {
        $this->parceirosRepository = $parceirosRepo;
    }

    /**
     * Display a listing of the Parceiros.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->parceirosRepository->pushCriteria(new RequestCriteria($request));
        $parceiros = $this->parceirosRepository->all();

        return view('parceiros.index')
            ->with('parceiros', $parceiros);
    }

    /**
     * Show the form for creating a new Parceiros.
     *
     * @return Response
     */
    public function create()
    {
        return view('parceiros.create');
    }

    /**
     * Store a newly created Parceiros in storage.
     *
     * @param CreateParceirosRequest $request
     *
     * @return Response
     */
    public function store(CreateParceirosRequest $request)
    {
        $input = $request->all();

        $parceiros = $this->parceirosRepository->create($input);

        Flash::success('Parceiros saved successfully.');

        return redirect(route('parceiros.index'));
    }

    /**
     * Display the specified Parceiros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $parceiros = $this->parceirosRepository->findWithoutFail($id);

        if (empty($parceiros)) {
            Flash::error('Parceiros not found');

            return redirect(route('parceiros.index'));
        }

        return view('parceiros.show')->with('parceiros', $parceiros);
    }

    /**
     * Show the form for editing the specified Parceiros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $parceiros = $this->parceirosRepository->findWithoutFail($id);

        if (empty($parceiros)) {
            Flash::error('Parceiros not found');

            return redirect(route('parceiros.index'));
        }

        return view('parceiros.edit')->with('parceiros', $parceiros);
    }

    /**
     * Update the specified Parceiros in storage.
     *
     * @param  int              $id
     * @param UpdateParceirosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateParceirosRequest $request)
    {
        $parceiros = $this->parceirosRepository->findWithoutFail($id);

        if (empty($parceiros)) {
            Flash::error('Parceiros not found');

            return redirect(route('parceiros.index'));
        }

        $parceiros = $this->parceirosRepository->update($request->all(), $id);

        Flash::success('Parceiros updated successfully.');

        return redirect(route('parceiros.index'));
    }

    /**
     * Remove the specified Parceiros from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $parceiros = $this->parceirosRepository->findWithoutFail($id);

        if (empty($parceiros)) {
            Flash::error('Parceiros not found');

            return redirect(route('parceiros.index'));
        }

        $this->parceirosRepository->delete($id);

        Flash::success('Parceiros deleted successfully.');

        return redirect(route('parceiros.index'));
    }
}
