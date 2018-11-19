<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePermissoesAPIRequest;
use App\Http\Requests\API\UpdatePermissoesAPIRequest;
use App\Models\Permissoes;
use App\Repositories\PermissoesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class PermissoesController
 * @package App\Http\Controllers\API
 */

class PermissoesAPIController extends AppBaseController
{
    /** @var  PermissoesRepository */
    private $permissoesRepository;

    public function __construct(PermissoesRepository $permissoesRepo)
    {
        $this->permissoesRepository = $permissoesRepo;
    }

    /**
     * Display a listing of the Permissoes.
     * GET|HEAD /permissoes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->permissoesRepository->pushCriteria(new RequestCriteria($request));
        $this->permissoesRepository->pushCriteria(new LimitOffsetCriteria($request));
        $permissoes = $this->permissoesRepository->all();

        return $this->sendResponse($permissoes->toArray(), 'Permissoes retrieved successfully');
    }

    /**
     * Store a newly created Permissoes in storage.
     * POST /permissoes
     *
     * @param CreatePermissoesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePermissoesAPIRequest $request)
    {
        $input = $request->all();

        $permissoes = $this->permissoesRepository->create($input);

        return $this->sendResponse($permissoes->toArray(), 'Permissoes saved successfully');
    }

    /**
     * Display the specified Permissoes.
     * GET|HEAD /permissoes/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Permissoes $permissoes */
        $permissoes = $this->permissoesRepository->findWithoutFail($id);

        if (empty($permissoes)) {
            return $this->sendError('Permissoes not found');
        }

        return $this->sendResponse($permissoes->toArray(), 'Permissoes retrieved successfully');
    }

    /**
     * Update the specified Permissoes in storage.
     * PUT/PATCH /permissoes/{id}
     *
     * @param  int $id
     * @param UpdatePermissoesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePermissoesAPIRequest $request)
    {
        $input = $request->all();

        /** @var Permissoes $permissoes */
        $permissoes = $this->permissoesRepository->findWithoutFail($id);

        if (empty($permissoes)) {
            return $this->sendError('Permissoes not found');
        }

        $permissoes = $this->permissoesRepository->update($input, $id);

        return $this->sendResponse($permissoes->toArray(), 'Permissoes updated successfully');
    }

    /**
     * Remove the specified Permissoes from storage.
     * DELETE /permissoes/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Permissoes $permissoes */
        $permissoes = $this->permissoesRepository->findWithoutFail($id);

        if (empty($permissoes)) {
            return $this->sendError('Permissoes not found');
        }

        $permissoes->delete();

        return $this->sendResponse($id, 'Permissoes deleted successfully');
    }
}
