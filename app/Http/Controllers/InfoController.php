<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInfoRequest;
use App\Http\Requests\UpdateInfoRequest;
use App\Repositories\InfoRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class InfoController extends AppBaseController
{
    /** @var  InfoRepository */
    private $infoRepository;

    public function __construct(InfoRepository $infoRepo)
    {
        $this->infoRepository = $infoRepo;
    }

    /**
     * Display a listing of the Info.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->infoRepository->pushCriteria(new RequestCriteria($request));
        $infos = $this->infoRepository->all();

        return view('infos.index')
            ->with('infos', $infos);
    }

    /**
     * Show the form for creating a new Info.
     *
     * @return Response
     */
    public function create()
    {
        return view('infos.create');
    }

    /**
     * Store a newly created Info in storage.
     *
     * @param CreateInfoRequest $request
     *
     * @return Response
     */
    public function store(CreateInfoRequest $request)
    {
        $input = $request->all();

        $info = $this->infoRepository->create($input);

        Flash::success('Info saved successfully.');

        return redirect(route('infos.index'));
    }

    /**
     * Display the specified Info.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $info = $this->infoRepository->findWithoutFail($id);

        if (empty($info)) {
            Flash::error('Info not found');

            return redirect(route('infos.index'));
        }

        return view('infos.show')->with('info', $info);
    }

    /**
     * Show the form for editing the specified Info.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $info = $this->infoRepository->findWithoutFail($id);

        if (empty($info)) {
            Flash::error('Info not found');

            return redirect(route('infos.index'));
        }

        return view('infos.edit')->with('info', $info);
    }

    /**
     * Update the specified Info in storage.
     *
     * @param  int              $id
     * @param UpdateInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInfoRequest $request)
    {
        $info = $this->infoRepository->findWithoutFail($id);

        if (empty($info)) {
            Flash::error('Info not found');

            return redirect(route('infos.index'));
        }

        $info = $this->infoRepository->update($request->all(), $id);

        Flash::success('Informações atualizadas com sucesso.');

        return view('infos.edit')->with('info', $info);
    }

    /**
     * Remove the specified Info from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $info = $this->infoRepository->findWithoutFail($id);

        if (empty($info)) {
            Flash::error('Info not found');

            return redirect(route('infos.index'));
        }

        $this->infoRepository->delete($id);

        Flash::success('Info deleted successfully.');

        return redirect(route('infos.index'));
    }
}
