<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePermissoesRequest;
use App\Http\Requests\UpdatePermissoesRequest;
use App\Repositories\PermissoesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PermissoesController extends AppBaseController
{
    /** @var  PermissoesRepository */
    private $permissoesRepository;

    public function __construct(PermissoesRepository $permissoesRepo)
    {
        $this->permissoesRepository = $permissoesRepo;
    }

    /**
     * Display a listing of the Permissoes.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->permissoesRepository->pushCriteria(new RequestCriteria($request));
        $permissoes = $this->permissoesRepository->all();

        return view('permissoes.index')
            ->with('permissoes', $permissoes);
    }

    /**
     * Show the form for creating a new Permissoes.
     *
     * @return Response
     */
    public function create()
    {
        return view('permissoes.create');
    }

    /**
     * Store a newly created Permissoes in storage.
     *
     * @param CreatePermissoesRequest $request
     *
     * @return Response
     */
    public function store(CreatePermissoesRequest $request)
    {
        $input = $request->all();

        $permissoes = $this->permissoesRepository->create($input);

        Flash::success('Salvo.');

        return redirect(route('permissoes.index'));
    }

    /**
     * Display the specified Permissoes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $permissoes = $this->permissoesRepository->findWithoutFail($id);

        if (empty($permissoes)) {
            Flash::error('Ocorreu um erro #2776.');

            return redirect(route('permissoes.index'));
        }

        return view('permissoes.show')->with('permissoes', $permissoes);
    }

    /**
     * Show the form for editing the specified Permissoes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $permissoes = $this->permissoesRepository->findWithoutFail($id);

        if (empty($permissoes)) {
            Flash::error('Ocorreu um erro #2776.');

            return redirect(route('permissoes.index'));
        }

        return view('permissoes.edit')->with('permissoes', $permissoes);
    }

    /**
     * Update the specified Permissoes in storage.
     *
     * @param  int              $id
     * @param UpdatePermissoesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePermissoesRequest $request)
    {
        $permissoes = $this->permissoesRepository->findWithoutFail($id);

        if (empty($permissoes)) {
            Flash::error('Ocorreu um erro #2776.');

            return redirect(route('permissoes.index'));
        }

        $permissoes = $this->permissoesRepository->update($request->all(), $id);

        Flash::success('Atualizado.');

        return redirect(route('permissoes.index'));
    }

    /**
     * Remove the specified Permissoes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $permissoes = $this->permissoesRepository->findWithoutFail($id);

        if (empty($permissoes)) {
            Flash::error('Ocorreu um erro #2776.');

            return redirect(route('permissoes.index'));
        }

        $this->permissoesRepository->delete($id);

        Flash::success('Excluído.');

        return redirect(route('permissoes.index'));
    }
}
