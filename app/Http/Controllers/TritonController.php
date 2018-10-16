<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTritonRequest;
use App\Http\Requests\UpdateTritonRequest;
use App\Repositories\TritonRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TritonController extends AppBaseController
{
    /** @var  TritonRepository */
    private $tritonRepository;

    public function __construct(TritonRepository $tritonRepo)
    {
        $this->tritonRepository = $tritonRepo;
    }

    /**
     * Display a listing of the Triton.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tritonRepository->pushCriteria(new RequestCriteria($request));
        $tritons = $this->tritonRepository->all();

        return view('tritons.index')
            ->with('tritons', $tritons);
    }

    /**
     * Show the form for creating a new Triton.
     *
     * @return Response
     */
    public function create()
    {
        return view('tritons.create');
    }

    /**
     * Store a newly created Triton in storage.
     *
     * @param CreateTritonRequest $request
     *
     * @return Response
     */
    public function store(CreateTritonRequest $request)
    {
        $input = $request->all();

        $triton = $this->tritonRepository->create($input);

        Flash::success('Triton saved successfully.');

        return redirect(route('tritons.index'));
    }

    /**
     * Display the specified Triton.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $triton = $this->tritonRepository->findWithoutFail($id);

        if (empty($triton)) {
            Flash::error('Triton not found');

            return redirect(route('tritons.index'));
        }

        return view('tritons.show')->with('triton', $triton);
    }

    /**
     * Show the form for editing the specified Triton.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $triton = $this->tritonRepository->findWithoutFail($id);

        if (empty($triton)) {
            Flash::error('Triton not found');

            return redirect(route('tritons.index'));
        }

        return view('tritons.edit')->with('triton', $triton);
    }

    /**
     * Update the specified Triton in storage.
     *
     * @param  int              $id
     * @param UpdateTritonRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTritonRequest $request)
    {
        $triton = $this->tritonRepository->findWithoutFail($id);

        if (empty($triton)) {
            Flash::error('Triton not found');

            return redirect(route('tritons.index'));
        }

        $triton = $this->tritonRepository->update($request->all(), $id);

        Flash::success('Triton updated successfully.');

        return redirect(route('tritons.index'));
    }

    /**
     * Remove the specified Triton from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $triton = $this->tritonRepository->findWithoutFail($id);

        if (empty($triton)) {
            Flash::error('Triton not found');

            return redirect(route('tritons.index'));
        }

        $this->tritonRepository->delete($id);

        Flash::success('Triton deleted successfully.');

        return redirect(route('tritons.index'));
    }
}
