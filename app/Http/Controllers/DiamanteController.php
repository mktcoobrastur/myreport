<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDiamanteRequest;
use App\Http\Requests\UpdateDiamanteRequest;
use App\Repositories\DiamanteRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DiamanteController extends AppBaseController
{
    /** @var  DiamanteRepository */
    private $diamanteRepository;

    public function __construct(DiamanteRepository $diamanteRepo)
    {
        $this->diamanteRepository = $diamanteRepo;
    }

    /**
     * Display a listing of the Diamante.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->diamanteRepository->pushCriteria(new RequestCriteria($request));
        $diamantes = $this->diamanteRepository->all();

        return view('diamantes.index')
            ->with('diamantes', $diamantes);
    }

    /**
     * Show the form for creating a new Diamante.
     *
     * @return Response
     */
    public function create()
    {
        return view('diamantes.create');
    }

    /**
     * Store a newly created Diamante in storage.
     *
     * @param CreateDiamanteRequest $request
     *
     * @return Response
     */
    public function store(CreateDiamanteRequest $request)
    {
        $input = $request->all();

        $diamante = $this->diamanteRepository->create($input);

        Flash::success('Página salva com sucesso.');

        return redirect(route('diamantes.index'));
    }

    /**
     * Display the specified Diamante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $diamante = $this->diamanteRepository->findWithoutFail($id);

        if (empty($diamante)) {
            Flash::error('Erro! #084795 (Comunique este código de erro ao Setor Responsável)');

            return redirect(route('diamantes.index'));
        }

        return view('diamantes.show')->with('diamante', $diamante);
    }

    /**
     * Show the form for editing the specified Diamante.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $diamante = $this->diamanteRepository->findWithoutFail($id);

        if (empty($diamante)) {
            Flash::error('Erro! #084795 (Comunique este código de erro ao Setor Responsável)');

            return redirect(route('diamantes.index'));
        }

        return view('diamantes.edit')->with('diamante', $diamante);
    }

    /**
     * Update the specified Diamante in storage.
     *
     * @param  int              $id
     * @param UpdateDiamanteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDiamanteRequest $request)
    {
        $diamante = $this->diamanteRepository->findWithoutFail($id);

        if (empty($diamante)) {
            Flash::error('Erro! #084795 (Comunique este código de erro ao Setor Responsável)');

            return redirect(route('diamantes.index'));
        }

        $diamante = $this->diamanteRepository->update($request->all(), $id);

        Flash::success('Página atualizada com sucesso.');

        return redirect(route('diamantes.index'));
    }

    /**
     * Remove the specified Diamante from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $diamante = $this->diamanteRepository->findWithoutFail($id);

        if (empty($diamante)) {
            Flash::error('Erro! #084795 (Comunique este código de erro ao Setor Responsável)');

            return redirect(route('diamantes.index'));
        }

        $this->diamanteRepository->delete($id);

        Flash::success('Página excluída.');

        return redirect(route('diamantes.index'));
    }
}
