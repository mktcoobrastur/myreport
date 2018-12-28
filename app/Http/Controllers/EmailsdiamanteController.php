<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmailsdiamanteRequest;
use App\Http\Requests\UpdateEmailsdiamanteRequest;
use App\Repositories\EmailsdiamanteRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EmailsdiamanteController extends AppBaseController
{
    /** @var  EmailsdiamanteRepository */
    private $emailsdiamanteRepository;

    public function __construct(EmailsdiamanteRepository $emailsdiamanteRepo)
    {
        $this->emailsdiamanteRepository = $emailsdiamanteRepo;
    }

    /**
     * Display a listing of the Emailsdiamante.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->emailsdiamanteRepository->pushCriteria(new RequestCriteria($request));
        $emailsdiamantes = $this->emailsdiamanteRepository->all();

        return view('emailsdiamantes.index')
            ->with('emailsdiamantes', $emailsdiamantes);
    }

    /**
     * Show the form for creating a new Emailsdiamante.
     *
     * @return Response
     */
    public function create()
    {
        return view('emailsdiamantes.create');
    }

    /**
     * Store a newly created Emailsdiamante in storage.
     *
     * @param CreateEmailsdiamanteRequest $request
     *
     * @return Response
     */
    public function store(CreateEmailsdiamanteRequest $request)
    {
        $input = $request->all();

        $emailsdiamante = $this->emailsdiamanteRepository->create($input);

        Flash::success('Emailsdiamante saved successfully.');

        return redirect(route('emailsdiamantes.index'));
    }

    /**
     * Display the specified Emailsdiamante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $emailsdiamante = $this->emailsdiamanteRepository->findWithoutFail($id);

        if (empty($emailsdiamante)) {
            Flash::error('Emailsdiamante not found');

            return redirect(route('emailsdiamantes.index'));
        }

        return view('emailsdiamantes.show')->with('emailsdiamante', $emailsdiamante);
    }

    /**
     * Show the form for editing the specified Emailsdiamante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $emailsdiamante = $this->emailsdiamanteRepository->findWithoutFail($id);

        if (empty($emailsdiamante)) {
            Flash::error('Emailsdiamante not found');

            return redirect(route('emailsdiamantes.index'));
        }

        return view('emailsdiamantes.edit')->with('emailsdiamante', $emailsdiamante);
    }

    /**
     * Update the specified Emailsdiamante in storage.
     *
     * @param  int              $id
     * @param UpdateEmailsdiamanteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmailsdiamanteRequest $request)
    {
        $emailsdiamante = $this->emailsdiamanteRepository->findWithoutFail($id);

        if (empty($emailsdiamante)) {
            Flash::error('Emailsdiamante not found');

            return redirect(route('emailsdiamantes.index'));
        }

        $emailsdiamante = $this->emailsdiamanteRepository->update($request->all(), $id);

        Flash::success('Emailsdiamante updated successfully.');

        return redirect(route('emailsdiamantes.index'));
    }

    /**
     * Remove the specified Emailsdiamante from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $emailsdiamante = $this->emailsdiamanteRepository->findWithoutFail($id);

        if (empty($emailsdiamante)) {
            Flash::error('Emailsdiamante not found');

            return redirect(route('emailsdiamantes.index'));
        }

        $this->emailsdiamanteRepository->delete($id);

        Flash::success('Emailsdiamante deleted successfully.');

        return redirect(route('emailsdiamantes.index'));
    }
}
