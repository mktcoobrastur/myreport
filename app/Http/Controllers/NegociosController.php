<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNegociosRequest;
use App\Http\Requests\UpdateNegociosRequest;
use App\Repositories\NegociosRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class NegociosController extends AppBaseController
{
    /** @var  NegociosRepository */
    private $negociosRepository;

    public function __construct(NegociosRepository $negociosRepo)
    {
        $this->negociosRepository = $negociosRepo;
    }

    /**
     * Display a listing of the Negocios.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->negociosRepository->pushCriteria(new RequestCriteria($request));
        $negocios = $this->negociosRepository->all();

        return view('negocios.index')
            ->with('negocios', $negocios->where('departamento', '=', 'Negocios'));
    }

    /**
     * Show the form for creating a new Negocios.
     *
     * @return Response
     */
    public function create()
    {
        return view('negocios.create');
    }

    /**
     * Store a newly created Negocios in storage.
     *
     * @param CreateNegociosRequest $request
     *
     * @return Response
     */
    public function store(CreateNegociosRequest $request)
    {
        $input = $request->all();

        $negocios = $this->negociosRepository->create($input);

        Flash::success('Registro salvo com sucesso.');

        return redirect(route('negocios.index'));
    }

    /**
     * Display the specified Negocios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $negocios = $this->negociosRepository->findWithoutFail($id);

        if (empty($negocios)) {
            Flash::error('Sem registro!');

            return redirect(route('negocios.index'));
        }

        return view('negocios.show')->with('negocios', $negocios);
    }

    /**
     * Show the form for editing the specified Negocios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $negocios = $this->negociosRepository->findWithoutFail($id);

        if (empty($negocios)) {
            Flash::error('Sem registro!');

            return redirect(route('negocios.index'));
        }

        return view('negocios.edit')->with('negocios', $negocios);
    }

    /**
     * Update the specified Negocios in storage.
     *
     * @param  int              $id
     * @param UpdateNegociosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNegociosRequest $request)
    {
        $negocios = $this->negociosRepository->findWithoutFail($id);

        if (empty($negocios)) {
            Flash::error('Sem registro!');

            return redirect(route('negocios.index'));
        }

        $negocios = $this->negociosRepository->update($request->all(), $id);

        Flash::success('Tarefa atualizada com sucesso.');

        return redirect(route('negocios.index'));
    }

    /**
     * Remove the specified Negocios from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $negocios = $this->negociosRepository->findWithoutFail($id);

        if (empty($negocios)) {
            Flash::error('Sem registro!');

            return redirect(route('negocios.index'));
        }

        $this->negociosRepository->delete($id);

        Flash::success('Tarefa deletada com sucesso.');

        return redirect(route('negocios.index'));
    }
}
