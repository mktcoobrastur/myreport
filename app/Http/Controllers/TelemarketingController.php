<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTelemarketingRequest;
use App\Http\Requests\UpdateTelemarketingRequest;
use App\Repositories\TelemarketingRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TelemarketingController extends AppBaseController
{
    /** @var  TelemarketingRepository */
    private $telemarketingRepository;

    public function __construct(TelemarketingRepository $telemarketingRepo)
    {
        $this->telemarketingRepository = $telemarketingRepo;
    }

    /**
     * Display a listing of the Telemarketing.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->telemarketingRepository->pushCriteria(new RequestCriteria($request));
        $telemarketings = $this->telemarketingRepository->all();

        return view('telemarketings.index')
            ->with('telemarketings', $telemarketings->where('departamento', '=', 'Telemarketing'));
    }

    /**
     * Show the form for creating a new Telemarketing.
     *
     * @return Response
     */
    public function create()
    {
        return view('telemarketings.create');
    }

    /**
     * Store a newly created Telemarketing in storage.
     *
     * @param CreateTelemarketingRequest $request
     *
     * @return Response
     */
    public function store(CreateTelemarketingRequest $request)
    {
        $input = $request->all();

        $telemarketing = $this->telemarketingRepository->create($input);

        Flash::success('Telemarketing saved successfully.');

        return redirect(route('telemarketings.index'));
    }

    /**
     * Display the specified Telemarketing.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $telemarketing = $this->telemarketingRepository->findWithoutFail($id);

        if (empty($telemarketing)) {
            Flash::error('Telemarketing not found');

            return redirect(route('telemarketings.index'));
        }

        return view('telemarketings.show')->with('telemarketing', $telemarketing);
    }

    /**
     * Show the form for editing the specified Telemarketing.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $telemarketing = $this->telemarketingRepository->findWithoutFail($id);

        if (empty($telemarketing)) {
            Flash::error('Telemarketing not found');

            return redirect(route('telemarketings.index'));
        }

        return view('telemarketings.edit')->with('telemarketing', $telemarketing);
    }

    /**
     * Update the specified Telemarketing in storage.
     *
     * @param  int              $id
     * @param UpdateTelemarketingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTelemarketingRequest $request)
    {
        $telemarketing = $this->telemarketingRepository->findWithoutFail($id);

        if (empty($telemarketing)) {
            Flash::error('Telemarketing not found');

            return redirect(route('telemarketings.index'));
        }

        $telemarketing = $this->telemarketingRepository->update($request->all(), $id);

        Flash::success('Telemarketing updated successfully.');

        return redirect(route('telemarketings.index'));
    }

    /**
     * Remove the specified Telemarketing from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $telemarketing = $this->telemarketingRepository->findWithoutFail($id);

        if (empty($telemarketing)) {
            Flash::error('Telemarketing not found');

            return redirect(route('telemarketings.index'));
        }

        $this->telemarketingRepository->delete($id);

        Flash::success('Telemarketing deleted successfully.');

        return redirect(route('telemarketings.index'));
    }
}
