<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRecadoRequest;
use App\Http\Requests\UpdateRecadoRequest;
use App\Repositories\RecadoRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RecadoController extends AppBaseController
{
    /** @var  RecadoRepository */
    private $recadoRepository;

    public function __construct(RecadoRepository $recadoRepo)
    {
        $this->recadoRepository = $recadoRepo;
    }

    /**
     * Display a listing of the Recado.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->recadoRepository->pushCriteria(new RequestCriteria($request));
        $recados = $this->recadoRepository->all();

        return view('recados.index')
            ->with('recados', $recados->where('para', '=', auth()->user()->name ));
    }

    /**
     * Show the form for creating a new Recado.
     *
     * @return Response
     */
    public function create()
    {
        return view('recados.create');
    }

    /**
     * Store a newly created Recado in storage.
     *
     * @param CreateRecadoRequest $request
     *
     * @return Response
     */
    public function store(CreateRecadoRequest $request)
    {
        $input = $request->all();

        $recado = $this->recadoRepository->create($input);

        Flash::success('Salvo.');

        return redirect(route('recados.index'));
    }

    /**
     * Display the specified Recado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $recado = $this->recadoRepository->findWithoutFail($id);

        if (empty($recado)) {
            Flash::error('Ocorreu um erro #5517.');

            return redirect(route('recados.index'));
        }

        return view('recados.show')->with('recado', $recado);
    }

    /**
     * Show the form for editing the specified Recado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $recado = $this->recadoRepository->findWithoutFail($id);

        if (empty($recado)) {
            Flash::error('Ocorreu um erro #5517.');

            return redirect(route('recados.index'));
        }

        return view('recados.edit')->with('recado', $recado);
    }

    /**
     * Update the specified Recado in storage.
     *
     * @param  int              $id
     * @param UpdateRecadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRecadoRequest $request)
    {
        $recado = $this->recadoRepository->findWithoutFail($id);

        if (empty($recado)) {
            Flash::error('Ocorreu um erro #5517.');

            return redirect(route('recados.index'));
        }

        $recado = $this->recadoRepository->update($request->all(), $id);

        Flash::success('Atualizado.');

        return redirect(route('recados.index'));
    }

    /**
     * Remove the specified Recado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $recado = $this->recadoRepository->findWithoutFail($id);

        if (empty($recado)) {
            Flash::error('Ocorreu um erro #5517.');

            return redirect(route('recados.index'));
        }

        $this->recadoRepository->delete($id);

        Flash::success('Excluído.');

        return redirect(route('recados.index'));
    }
}
