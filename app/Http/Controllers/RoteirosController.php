<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoteirosRequest;
use App\Http\Requests\UpdateRoteirosRequest;
use App\Repositories\RoteirosRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RoteirosController extends AppBaseController
{
    /** @var  RoteirosRepository */
    private $roteirosRepository;

    public function __construct(RoteirosRepository $roteirosRepo)
    {
        $this->roteirosRepository = $roteirosRepo;
    }

    /**
     * Display a listing of the Roteiros.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->roteirosRepository->pushCriteria(new RequestCriteria($request));
        $roteiros = $this->roteirosRepository->all();

        return view('roteiros.index')
            ->with('roteiros', $roteiros);
    }

    /**
     * Show the form for creating a new Roteiros.
     *
     * @return Response
     */
    public function create()
    {
        return view('roteiros.create');
    }

    /**
     * Store a newly created Roteiros in storage.
     *
     * @param CreateRoteirosRequest $request
     *
     * @return Response
     */
    public function store(CreateRoteirosRequest $request)
    {
        $input = $request->all();

        $roteiros = $this->roteirosRepository->create($input);

        Flash::success('Roteiros saved successfully.');

        return redirect(route('roteiros.index'));
    }

    /**
     * Display the specified Roteiros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $roteiros = $this->roteirosRepository->findWithoutFail($id);

        if (empty($roteiros)) {
            Flash::error('Roteiros not found');

            return redirect(route('roteiros.index'));
        }

        return view('roteiros.show')->with('roteiros', $roteiros);
    }

    /**
     * Show the form for editing the specified Roteiros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $roteiros = $this->roteirosRepository->findWithoutFail($id);

        if (empty($roteiros)) {
            Flash::error('Roteiros not found');

            return redirect(route('roteiros.index'));
        }

        return view('roteiros.edit')->with('roteiros', $roteiros);
    }

    /**
     * Update the specified Roteiros in storage.
     *
     * @param  int              $id
     * @param UpdateRoteirosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRoteirosRequest $request)
    {
        $roteiros = $this->roteirosRepository->findWithoutFail($id);

        if (empty($roteiros)) {
            Flash::error('Roteiros not found');

            return redirect(route('roteiros.index'));
        }

        $roteiros = $this->roteirosRepository->update($request->all(), $id);

        Flash::success('Roteiros updated successfully.');

        return redirect(route('roteiros.index'));
    }

    /**
     * Remove the specified Roteiros from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $roteiros = $this->roteirosRepository->findWithoutFail($id);

        if (empty($roteiros)) {
            Flash::error('Roteiros not found');

            return redirect(route('roteiros.index'));
        }

        $this->roteirosRepository->delete($id);

        Flash::success('Roteiros deleted successfully.');

        return redirect(route('roteiros.index'));
    }
}
