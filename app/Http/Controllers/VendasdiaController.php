<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVendasdiaRequest;
use App\Http\Requests\UpdateVendasdiaRequest;
use App\Repositories\VendasdiaRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class VendasdiaController extends AppBaseController
{
    /** @var  VendasdiaRepository */
    private $vendasdiaRepository;

    public function __construct(VendasdiaRepository $vendasdiaRepo)
    {
        $this->vendasdiaRepository = $vendasdiaRepo;
    }

    /**
     * Display a listing of the Vendasdia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vendasdiaRepository->pushCriteria(new RequestCriteria($request));
        $vendasdias = $this->vendasdiaRepository->all();

        return view('vendasdias.index')
            ->with('vendasdias', $vendasdias->where('created_at','=','NOW()'));
    }

    /**
     * Show the form for creating a new Vendasdia.
     *
     * @return Response
     */
    public function create()
    {
        return view('vendasdias.create');
    }

    /**
     * Store a newly created Vendasdia in storage.
     *
     * @param CreateVendasdiaRequest $request
     *
     * @return Response
     */
    public function store(CreateVendasdiaRequest $request)
    {
        $input = $request->all();

        $vendasdia = $this->vendasdiaRepository->create($input);

        Flash::success('Salvo.');

        return redirect(route('vendasdias.index'));
    }

    /**
     * Display the specified Vendasdia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vendasdia = $this->vendasdiaRepository->findWithoutFail($id);

        if (empty($vendasdia)) {
            Flash::error('Sem registro!');

            return redirect(route('vendasdias.index'));
        }

        return view('vendasdias.show')->with('vendasdia', $vendasdia);
    }

    /**
     * Show the form for editing the specified Vendasdia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vendasdia = $this->vendasdiaRepository->findWithoutFail($id);

        if (empty($vendasdia)) {
            Flash::error('Sem registro!');

            return redirect(route('vendasdias.index'));
        }


        return view('vendasdias.edit')->with('vendasdia', $vendasdia);
    }

    /**
     * Update the specified Vendasdia in storage.
     *
     * @param  int              $id
     * @param UpdateVendasdiaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVendasdiaRequest $request)
    {
        $vendasdia = $this->vendasdiaRepository->findWithoutFail($id);

        if (empty($vendasdia)) {
            Flash::error('Sem registro!');

            return redirect(route('vendasdias.index'));
        }

        $vendasdia = $this->vendasdiaRepository->update($request->all(), $id);

        Flash::success('Atualizado com Sucesso.');

        return redirect(route('vendasdias.index'));
    }

    /**
     * Remove the specified Vendasdia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vendasdia = $this->vendasdiaRepository->findWithoutFail($id);

        if (empty($vendasdia)) {
            Flash::error('Sem registro!');

            return redirect(route('vendasdias.index'));
        }

        $this->vendasdiaRepository->delete($id);

        Flash::success('Venda deletada com sucesso.');

        return redirect(route('vendasdias.index'));
    }
}
