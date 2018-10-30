<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHoteiRequest;
use App\Http\Requests\UpdateHoteiRequest;
use App\Repositories\HoteiRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class HoteiController extends AppBaseController
{
    /** @var  HoteiRepository */
    private $hoteiRepository;

    public function __construct(HoteiRepository $hoteiRepo)
    {
        $this->hoteiRepository = $hoteiRepo;
    }

    /**
     * Display a listing of the Hotei.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->hoteiRepository->pushCriteria(new RequestCriteria($request));
        $hoteis = $this->hoteiRepository->all();

        return view('hoteis.index')
            ->with('hoteis', $hoteis->where('departamento', '=', 'Hoteis'));
    }

    /**
     * Show the form for creating a new Hotei.
     *
     * @return Response
     */
    public function create()
    {
        return view('hoteis.create');
    }

    /**
     * Store a newly created Hotei in storage.
     *
     * @param CreateHoteiRequest $request
     *
     * @return Response
     */
    public function store(CreateHoteiRequest $request)
    {
        $input = $request->all();

        $hotei = $this->hoteiRepository->create($input);

        Flash::success('Hotei saved successfully.');

        return redirect(route('hoteis.index'));
    }

    /**
     * Display the specified Hotei.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hotei = $this->hoteiRepository->findWithoutFail($id);

        if (empty($hotei)) {
            Flash::error('Hotei not found');

            return redirect(route('hoteis.index'));
        }

        return view('hoteis.show')->with('hotei', $hotei);
    }

    /**
     * Show the form for editing the specified Hotei.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hotei = $this->hoteiRepository->findWithoutFail($id);

        if (empty($hotei)) {
            Flash::error('Hotei not found');

            return redirect(route('hoteis.index'));
        }

        return view('hoteis.edit')->with('hotei', $hotei);
    }

    /**
     * Update the specified Hotei in storage.
     *
     * @param  int              $id
     * @param UpdateHoteiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHoteiRequest $request)
    {
        $hotei = $this->hoteiRepository->findWithoutFail($id);

        if (empty($hotei)) {
            Flash::error('Hotei not found');

            return redirect(route('hoteis.index'));
        }

        $hotei = $this->hoteiRepository->update($request->all(), $id);

        Flash::success('Hotei updated successfully.');

        return redirect(route('hoteis.index'));
    }

    /**
     * Remove the specified Hotei from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $hotei = $this->hoteiRepository->findWithoutFail($id);

        if (empty($hotei)) {
            Flash::error('Hotei not found');

            return redirect(route('hoteis.index'));
        }

        $this->hoteiRepository->delete($id);

        Flash::success('Hotei deleted successfully.');

        return redirect(route('hoteis.index'));
    }
}
