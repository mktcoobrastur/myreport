<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMetaRequest;
use App\Http\Requests\UpdateMetaRequest;
use App\Repositories\MetaRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use DB;

class MetaController extends AppBaseController
{
    /** @var  MetaRepository */
    private $metaRepository;

    public function __construct(MetaRepository $metaRepo)
    {
        $this->metaRepository = $metaRepo;
    }

    /**
     * Display a listing of the Meta.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->metaRepository->pushCriteria(new RequestCriteria($request));
        $metas = $this->metaRepository->all();
        $metas = DB::table('metas')
        ->orderBy('representante', 'asc')  // You can pass as many columns as you required
        ->get();
        return view('metas.index')
            ->with('metas', $metas);
    }

    /**
     * Show the form for creating a new Meta.
     *
     * @return Response
     */
    public function create()
    {
        return view('metas.create');
    }

    /**
     * Store a newly created Meta in storage.
     *
     * @param CreateMetaRequest $request
     *
     * @return Response
     */
    public function store(CreateMetaRequest $request)
    {
        $input = $request->all();

        $meta = $this->metaRepository->create($input);

        Flash::success('Meta salva com sucesso.');

        return redirect(route('metas.index'));
    }

    /**
     * Display the specified Meta.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $meta = $this->metaRepository->findWithoutFail($id);

        if (empty($meta)) {
            Flash::error('Sem registro!');

            return redirect(route('metas.index'));
        }

        return view('metas.show')->with('meta', $meta);
    }

    /**
     * Show the form for editing the specified Meta.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $meta = $this->metaRepository->findWithoutFail($id);

        if (empty($meta)) {
            Flash::error('Sem registro!');

            return redirect(route('metas.index'));
        }

        return view('metas.edit')->with('meta', $meta);
    }

    /**
     * Update the specified Meta in storage.
     *
     * @param  int              $id
     * @param UpdateMetaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMetaRequest $request)
    {
        $meta = $this->metaRepository->findWithoutFail($id);

        if (empty($meta)) {
            Flash::error('Sem registro!');

            return redirect(route('metas.index'));
        }

        $meta = $this->metaRepository->update($request->all(), $id);

        Flash::success('Meta atualizada com sucesso.');

        return redirect(route('metas.index'));
    }

    /**
     * Remove the specified Meta from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $meta = $this->metaRepository->findWithoutFail($id);

        if (empty($meta)) {
            Flash::error('Sem registro!');

            return redirect(route('metas.index'));
        }

        $this->metaRepository->delete($id);

        Flash::success('Meta deletada com sucesso.');

        return redirect(route('metas.index'));
    }
}
