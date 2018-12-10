<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMarkconveniadoRequest;
use App\Http\Requests\UpdateMarkconveniadoRequest;
use App\Repositories\MarkconveniadoRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MarkconveniadoController extends AppBaseController
{
    /** @var  MarkconveniadoRepository */
    private $markconveniadoRepository;

    public function __construct(MarkconveniadoRepository $markconveniadoRepo)
    {
        $this->markconveniadoRepository = $markconveniadoRepo;
    }

    /**
     * Display a listing of the Markconveniado.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->markconveniadoRepository->pushCriteria(new RequestCriteria($request));
        $markconveniados = $this->markconveniadoRepository->all();

        return view('markconveniados.index')
            ->with('markconveniados', $markconveniados);
    }

    /**
     * Show the form for creating a new Markconveniado.
     *
     * @return Response
     */
    public function create()
    {
        return view('markconveniados.create');
    }

    /**
     * Store a newly created Markconveniado in storage.
     *
     * @param CreateMarkconveniadoRequest $request
     *
     * @return Response
     */
    public function store(CreateMarkconveniadoRequest $request)
    {
        $input = $request->all();

        $markconveniado = $this->markconveniadoRepository->create($input);

        Flash::success('Salvo.');

        return redirect('markconveniados/'.$markconveniado->id.'/edit');
    }

    /**
     * Display the specified Markconveniado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $markconveniado = $this->markconveniadoRepository->findWithoutFail($id);

        if (empty($markconveniado)) {
            Flash::error('Ocorreu um erro #5222.');

            return redirect(route('markconveniados.index'));
        }

        return view('markconveniados.show')->with('markconveniado', $markconveniado);
    }

    /**
     * Show the form for editing the specified Markconveniado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $markconveniado = $this->markconveniadoRepository->findWithoutFail($id);

        if (empty($markconveniado)) {
            Flash::error('Ocorreu um erro #5222.');

            return redirect(route('markconveniados.index'));
        }

        return view('markconveniados.edit')->with('markconveniado', $markconveniado);
    }

    /**
     * Update the specified Markconveniado in storage.
     *
     * @param  int              $id
     * @param UpdateMarkconveniadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMarkconveniadoRequest $request)
    {
        $markconveniado = $this->markconveniadoRepository->findWithoutFail($id);

        if (empty($markconveniado)) {
            Flash::error('Ocorreu um erro #5222.');

            return redirect(route('markconveniados.index'));
        }

        $markconveniado = $this->markconveniadoRepository->update($request->all(), $id);

        Flash::success('Atualizado.');

        return redirect(route('markconveniados.index'));
    }

    /**
     * Remove the specified Markconveniado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $markconveniado = $this->markconveniadoRepository->findWithoutFail($id);

        if (empty($markconveniado)) {
            Flash::error('Ocorreu um erro #5222.');

            return redirect(route('markconveniados.index'));
        }

        $this->markconveniadoRepository->delete($id);

        Flash::success('Excluído.');

        return redirect(route('markconveniados.index'));
    }
}
