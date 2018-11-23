<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePromocoeRequest;
use App\Http\Requests\UpdatePromocoeRequest;
use App\Repositories\PromocoeRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PromocoeController extends AppBaseController
{
    /** @var  PromocoeRepository */
    private $promocoeRepository;

    public function __construct(PromocoeRepository $promocoeRepo)
    {
        $this->promocoeRepository = $promocoeRepo;
    }

    /**
     * Display a listing of the Promocoe.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->promocoeRepository->pushCriteria(new RequestCriteria($request));
        $promocoes = $this->promocoeRepository->all();

        return view('promocoes.index')
            ->with('promocoes', $promocoes);
    }

    /**
     * Show the form for creating a new Promocoe.
     *
     * @return Response
     */
    public function create()
    {
        return view('promocoes.create');
    }

    /**
     * Store a newly created Promocoe in storage.
     *
     * @param CreatePromocoeRequest $request
     *
     * @return Response
     */
    public function store(CreatePromocoeRequest $request)
    {
        $input = $request->all();

        $promocoe = $this->promocoeRepository->create($input);

        Flash::success('Promocoe saved successfully.');

        return redirect(route('promocoes.index'));
    }

    /**
     * Display the specified Promocoe.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $promocoe = $this->promocoeRepository->findWithoutFail($id);

        if (empty($promocoe)) {
            Flash::error('Promocoe not found');

            return redirect(route('promocoes.index'));
        }

        return view('promocoes.show')->with('promocoe', $promocoe);
    }

    /**
     * Show the form for editing the specified Promocoe.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $promocoe = $this->promocoeRepository->findWithoutFail($id);

        if (empty($promocoe)) {
            Flash::error('Promocoe not found');

            return redirect(route('promocoes.index'));
        }

        return view('promocoes.edit')->with('promocoe', $promocoe);
    }

    /**
     * Update the specified Promocoe in storage.
     *
     * @param  int              $id
     * @param UpdatePromocoeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePromocoeRequest $request)
    {
        $promocoe = $this->promocoeRepository->findWithoutFail($id);

        if (empty($promocoe)) {
            Flash::error('Promocoe not found');

            return redirect(route('promocoes.index'));
        }

        $promocoe = $this->promocoeRepository->update($request->all(), $id);

        Flash::success('Promocoe updated successfully.');

        return redirect(route('promocoes.index'));
    }

    /**
     * Remove the specified Promocoe from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $promocoe = $this->promocoeRepository->findWithoutFail($id);

        if (empty($promocoe)) {
            Flash::error('Promocoe not found');

            return redirect(route('promocoes.index'));
        }

        $this->promocoeRepository->delete($id);

        Flash::success('Promocoe deleted successfully.');

        return redirect(route('promocoes.index'));
    }
}
