<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMarkcampanhaRequest;
use App\Http\Requests\UpdateMarkcampanhaRequest;
use App\Repositories\MarkcampanhaRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MarkcampanhaController extends AppBaseController
{
    /** @var  MarkcampanhaRepository */
    private $markcampanhaRepository;

    public function __construct(MarkcampanhaRepository $markcampanhaRepo)
    {
        $this->markcampanhaRepository = $markcampanhaRepo;
    }

    /**
     * Display a listing of the Markcampanha.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->markcampanhaRepository->pushCriteria(new RequestCriteria($request));
        $markcampanhas = $this->markcampanhaRepository->all();

        return view('markcampanhas.index')
            ->with('markcampanhas', $markcampanhas);
    }

    /**
     * Show the form for creating a new Markcampanha.
     *
     * @return Response
     */
    public function create()
    {
        return view('markcampanhas.create');
    }

    /**
     * Store a newly created Markcampanha in storage.
     *
     * @param CreateMarkcampanhaRequest $request
     *
     * @return Response
     */
    public function store(CreateMarkcampanhaRequest $request)
    {
        $input = $request->all();

        $markcampanha = $this->markcampanhaRepository->create($input);

        Flash::success('Salvo.');

        return redirect(route('markcampanhas.index'));
    }

    /**
     * Display the specified Markcampanha.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $markcampanha = $this->markcampanhaRepository->findWithoutFail($id);

        if (empty($markcampanha)) {
            Flash::error('Ocorreu um erro.');

            return redirect(route('markcampanhas.index'));
        }

        return view('markcampanhas.show')->with('markcampanha', $markcampanha);
    }

    /**
     * Show the form for editing the specified Markcampanha.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $markcampanha = $this->markcampanhaRepository->findWithoutFail($id);

        if (empty($markcampanha)) {
            Flash::error('Ocorreu um erro.');

            return redirect(route('markcampanhas.index'));
        }

        return view('markcampanhas.edit')->with('markcampanha', $markcampanha);
    }

    /**
     * Update the specified Markcampanha in storage.
     *
     * @param  int              $id
     * @param UpdateMarkcampanhaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMarkcampanhaRequest $request)
    {
        $markcampanha = $this->markcampanhaRepository->findWithoutFail($id);

        if (empty($markcampanha)) {
            Flash::error('Ocorreu um erro.');

            return redirect(route('markcampanhas.index'));
        }

        $markcampanha = $this->markcampanhaRepository->update($request->all(), $id);

        Flash::success('Atualizado.');

        return redirect(route('markcampanhas.index'));
    }

    /**
     * Remove the specified Markcampanha from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $markcampanha = $this->markcampanhaRepository->findWithoutFail($id);

        if (empty($markcampanha)) {
            Flash::error('Ocorreu um erro.');

            return redirect(route('markcampanhas.index'));
        }

        $this->markcampanhaRepository->delete($id);

        Flash::success('Excluído.');

        return redirect(route('markcampanhas.index'));
    }
}
