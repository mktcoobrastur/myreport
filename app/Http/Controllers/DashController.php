<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDashRequest;
use App\Http\Requests\UpdateDashRequest;
use App\Repositories\DashRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use DB;

class DashController extends AppBaseController
{
    /** @var  DashRepository */
    private $dashRepository;

    public function __construct(DashRepository $dashRepo)
    {
        $this->dashRepository = $dashRepo;
    }

    /**
     * Display a listing of the Dash.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dashRepository->pushCriteria(new RequestCriteria($request));
        $dashes = $this->dashRepository->all();
        $dashes = DB::table('dash')
        ->orderBy('id', 'desc')  // You can pass as many columns as you required. Required 'use DB';
        ->get();       

        return view('dashes.index')
            ->with('dashes', $dashes);
    }

    /**
     * Show the form for creating a new Dash.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashes.create');
    }

    /**
     * Store a newly created Dash in storage.
     *
     * @param CreateDashRequest $request
     *
     * @return Response
     */
    public function store(CreateDashRequest $request)
    {
        $input = $request->all();

        $dash = $this->dashRepository->create($input);

        Flash::success('Dash saved successfully.');

        return redirect(route('dashes.index'));
    }

    /**
     * Display the specified Dash.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dash = $this->dashRepository->findWithoutFail($id);

        if (empty($dash)) {
            Flash::error('Dash not found');

            return redirect(route('dashes.index'));
        }

        return view('dashes.show')->with('dash', $dash);
    }

    /**
     * Show the form for editing the specified Dash.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dash = $this->dashRepository->findWithoutFail($id);

        if (empty($dash)) {
            Flash::error('Dash not found');

            return redirect(route('dashes.index'));
        }

        return view('dashes.edit')->with('dash', $dash);
    }

    /**
     * Update the specified Dash in storage.
     *
     * @param  int              $id
     * @param UpdateDashRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDashRequest $request)
    {
        $dash = $this->dashRepository->findWithoutFail($id);

        if (empty($dash)) {
            Flash::error('Dash not found');

            return redirect(route('dashes.index'));
        }

        $dash = $this->dashRepository->update($request->all(), $id);

        Flash::success('Dash updated successfully.');

        return redirect(route('dashes.index'));
    }

    /**
     * Remove the specified Dash from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dash = $this->dashRepository->findWithoutFail($id);

        if (empty($dash)) {
            Flash::error('Dash not found');

            return redirect(route('dashes.index'));
        }

        $this->dashRepository->delete($id);

        Flash::success('Dash deleted successfully.');

        return redirect(route('dashes.index'));
    }
}
