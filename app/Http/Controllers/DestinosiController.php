<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDestinosiRequest;
use App\Http\Requests\UpdateDestinosiRequest;
use App\Repositories\DestinosiRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DestinosiController extends AppBaseController
{
    /** @var  DestinosiRepository */
    private $destinosiRepository;

    public function __construct(DestinosiRepository $destinosiRepo)
    {
        $this->destinosiRepository = $destinosiRepo;
    }

    /**
     * Display a listing of the Destinosi.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->destinosiRepository->pushCriteria(new RequestCriteria($request));
        $destinosis = $this->destinosiRepository->all();

        return view('destinosis.index')
            ->with('destinosis', $destinosis);
    }

    /**
     * Show the form for creating a new Destinosi.
     *
     * @return Response
     */
    public function create()
    {
        return view('destinosis.create');
    }

    /**
     * Store a newly created Destinosi in storage.
     *
     * @param CreateDestinosiRequest $request
     *
     * @return Response
     */
    public function store(CreateDestinosiRequest $request)
    {
        $input = $request->all();

        $destinosi = $this->destinosiRepository->create($input);

        Flash::success('Destinosi saved successfully.');

        return redirect(route('destinosis.index'));
    }

    /**
     * Display the specified Destinosi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $destinosi = $this->destinosiRepository->findWithoutFail($id);

        if (empty($destinosi)) {
            Flash::error('Destinosi not found');

            return redirect(route('destinosis.index'));
        }

        return view('destinosis.show')->with('destinosi', $destinosi);
    }

    /**
     * Show the form for editing the specified Destinosi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $destinosi = $this->destinosiRepository->findWithoutFail($id);

        if (empty($destinosi)) {
            Flash::error('Destinosi not found');

            return redirect(route('destinosis.index'));
        }

        return view('destinosis.edit')->with('destinosi', $destinosi);
    }

    /**
     * Update the specified Destinosi in storage.
     *
     * @param  int              $id
     * @param UpdateDestinosiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDestinosiRequest $request)
    {
        $destinosi = $this->destinosiRepository->findWithoutFail($id);

        if (empty($destinosi)) {
            Flash::error('Destinosi not found');

            return redirect(route('destinosis.index'));
        }

        $destinosi = $this->destinosiRepository->update($request->all(), $id);

        Flash::success('Destinosi updated successfully.');

        return redirect(route('destinosis.index'));
    }

    /**
     * Remove the specified Destinosi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $destinosi = $this->destinosiRepository->findWithoutFail($id);

        if (empty($destinosi)) {
            Flash::error('Destinosi not found');

            return redirect(route('destinosis.index'));
        }

        $this->destinosiRepository->delete($id);

        Flash::success('Destinosi deleted successfully.');

        return redirect(route('destinosis.index'));
    }
}
