<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVendasreRequest;
use App\Http\Requests\UpdateVendasreRequest;
use App\Repositories\VendasreRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class VendasreController extends AppBaseController
{
    /** @var  VendasreRepository */
    private $vendasreRepository;

    public function __construct(VendasreRepository $vendasreRepo)
    {
        $this->vendasreRepository = $vendasreRepo;
    }

    /**
     * Display a listing of the Vendasre.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vendasreRepository->pushCriteria(new RequestCriteria($request));
        $vendasres = $this->vendasreRepository->all();

        return view('vendasres.index')
            ->with('vendasres', $vendasres);
    }

    /**
     * Show the form for creating a new Vendasre.
     *
     * @return Response
     */
    public function create()
    {
        return view('vendasres.create');
    }

    /**
     * Store a newly created Vendasre in storage.
     *
     * @param CreateVendasreRequest $request
     *
     * @return Response
     */
    public function store(CreateVendasreRequest $request)
    {
        $input = $request->all();

        $vendasre = $this->vendasreRepository->create($input);

        Flash::success('Salvo.');

        return redirect(route('vendasres.index'));
    }

    /**
     * Display the specified Vendasre.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vendasre = $this->vendasreRepository->findWithoutFail($id);

        if (empty($vendasre)) {
            Flash::error('Ocorreu um erro #4534.');

            return redirect(route('vendasres.index'));
        }

        return view('vendasres.show')->with('vendasre', $vendasre);
    }

    /**
     * Show the form for editing the specified Vendasre.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vendasre = $this->vendasreRepository->findWithoutFail($id);

        if (empty($vendasre)) {
            Flash::error('Ocorreu um erro #4534.');

            return redirect(route('vendasres.index'));
        }

        return view('vendasres.edit')->with('vendasre', $vendasre);
    }

    /**
     * Update the specified Vendasre in storage.
     *
     * @param  int              $id
     * @param UpdateVendasreRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVendasreRequest $request)
    {
        $vendasre = $this->vendasreRepository->findWithoutFail($id);

        if (empty($vendasre)) {
            Flash::error('Ocorreu um erro #4534.');

            return redirect(route('vendasres.index'));
        }

        $vendasre = $this->vendasreRepository->update($request->all(), $id);

        Flash::success('Atualizado.');

        return redirect(route('vendasres.index'));
    }

    /**
     * Remove the specified Vendasre from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vendasre = $this->vendasreRepository->findWithoutFail($id);

        if (empty($vendasre)) {
            Flash::error('Ocorreu um erro #4534.');

            return redirect(route('vendasres.index'));
        }

        $this->vendasreRepository->delete($id);

        Flash::success('Excluído.');

        return redirect(route('vendasres.index'));
    }
}
