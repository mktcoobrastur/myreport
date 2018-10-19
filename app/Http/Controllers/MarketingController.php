<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMarketingRequest;
use App\Http\Requests\UpdateMarketingRequest;
use App\Repositories\MarketingRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MarketingController extends AppBaseController
{
    /** @var  MarketingRepository */
    private $marketingRepository;

    public function __construct(MarketingRepository $marketingRepo)
    {
        $this->marketingRepository = $marketingRepo;
    }

    /**
     * Display a listing of the Marketing.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->marketingRepository->pushCriteria(new RequestCriteria($request));
        $marketings = $this->marketingRepository->all();

        return view('marketings.index')
            ->with('marketings', $marketings->where('departamento', '=', 'Marketing'));
        
    }

    /**
     * Show the form for creating a new Marketing.
     *
     * @return Response
     */
    public function create()
    {
        return view('marketings.create');
    }

    /**
     * Store a newly created Marketing in storage.
     *
     * @param CreateMarketingRequest $request
     *
     * @return Response
     */
    public function store(CreateMarketingRequest $request)
    {
        $input = $request->all();

        $marketing = $this->marketingRepository->create($input);

        Flash::success('Registro salvo com sucesso.');

        return redirect(route('marketings.index'));
    }

    /**
     * Display the specified Marketing.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $marketing = $this->marketingRepository->findWithoutFail($id);

        if (empty($marketing)) {
            Flash::error('Sem registro!');

            return redirect(route('marketings.index'));
        }

        return view('marketings.show')->with('marketing', $marketing);
    }

    /**
     * Show the form for editing the specified Marketing.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $marketing = $this->marketingRepository->findWithoutFail($id);

        if (empty($marketing)) {
            Flash::error('Sem registro!');

            return redirect(route('marketings.index'));
        }

        return view('marketings.edit')->with('marketing', $marketing);
    }

    /**
     * Update the specified Marketing in storage.
     *
     * @param  int              $id
     * @param UpdateMarketingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMarketingRequest $request)
    {
        $marketing = $this->marketingRepository->findWithoutFail($id);

        if (empty($marketing)) {
            Flash::error('Sem registro!');

            return redirect(route('marketings.index'));
        }

        $marketing = $this->marketingRepository->update($request->all(), $id);

        Flash::success('Tarefa atualizada com sucesso.');

        return redirect(route('marketings.index'));
    }

    /**
     * Remove the specified Marketing from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $marketing = $this->marketingRepository->findWithoutFail($id);

        if (empty($marketing)) {
            Flash::error('Sem registro!');

            return redirect(route('marketings.index'));
        }

        $this->marketingRepository->delete($id);

        Flash::success('Tarefa deletada com sucesso.');

        return redirect(route('marketings.index'));
    }
}
