<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLaminaRequest;
use App\Http\Requests\UpdateLaminaRequest;
use App\Repositories\LaminaRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LaminaController extends AppBaseController
{
    /** @var  LaminaRepository */
    private $laminaRepository;

    public function __construct(LaminaRepository $laminaRepo)
    {
        $this->laminaRepository = $laminaRepo;
    }

    /**
     * Display a listing of the Lamina.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->laminaRepository->pushCriteria(new RequestCriteria($request));
        $laminas = $this->laminaRepository->all();

        return view('laminas.index')
            ->with('laminas', $laminas);
    }

    /**
     * Show the form for creating a new Lamina.
     *
     * @return Response
     */
    public function create()
    {
        return view('laminas.create');
    }

    /**
     * Store a newly created Lamina in storage.
     *
     * @param CreateLaminaRequest $request
     *
     * @return Response
     */
    public function store(CreateLaminaRequest $request)
    {
        $input = $request->all();

        $lamina = $this->laminaRepository->create($input);

        Flash::success('Solicitação salva com sucesso.');

        return redirect(route('laminas.index'));
    }

    /**
     * Display the specified Lamina.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lamina = $this->laminaRepository->findWithoutFail($id);

        if (empty($lamina)) {
            Flash::error('Solicitação não existe!');

            return redirect(route('laminas.index'));
        }

        return view('laminas.show')->with('lamina', $lamina);
    }

    /**
     * Show the form for editing the specified Lamina.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lamina = $this->laminaRepository->findWithoutFail($id);

        if (empty($lamina)) {
            Flash::error('Solicitação não existe!');

            return redirect(route('laminas.index'));
        }

        return view('laminas.edit')->with('lamina', $lamina);
    }

    /**
     * Update the specified Lamina in storage.
     *
     * @param  int              $id
     * @param UpdateLaminaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLaminaRequest $request)
    {
        $lamina = $this->laminaRepository->findWithoutFail($id);

        if (empty($lamina)) {
            Flash::error('Solicitação não existe!');

            return redirect(route('laminas.index'));
        }

        $lamina = $this->laminaRepository->update($request->all(), $id);

        Flash::success('Solicitação atualizada com sucesso.');

        return redirect(route('laminas.index'));
    }

    /**
     * Remove the specified Lamina from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lamina = $this->laminaRepository->findWithoutFail($id);

        if (empty($lamina)) {
            Flash::error('Solicitação não existe!');

            return redirect(route('laminas.index'));
        }

        $this->laminaRepository->delete($id);

        Flash::success('Solicitação apagada com sucesso.');

        return redirect(route('laminas.index'));
    }
}
