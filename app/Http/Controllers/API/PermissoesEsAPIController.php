<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePermissoesEsAPIRequest;
use App\Http\Requests\API\UpdatePermissoesEsAPIRequest;
use App\Models\PermissoesEs;
use App\Repositories\PermissoesEsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class PermissoesEsController
 * @package App\Http\Controllers\API
 */

class PermissoesEsAPIController extends AppBaseController
{
    /** @var  PermissoesEsRepository */
    private $permissoesEsRepository;

    public function __construct(PermissoesEsRepository $permissoesEsRepo)
    {
        $this->permissoesEsRepository = $permissoesEsRepo;
    }

    /**
     * Display a listing of the PermissoesEs.
     * GET|HEAD /permissoesEs
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->permissoesEsRepository->pushCriteria(new RequestCriteria($request));
        $this->permissoesEsRepository->pushCriteria(new LimitOffsetCriteria($request));
        $permissoesEs = $this->permissoesEsRepository->all();

        return $this->sendResponse($permissoesEs->toArray(), 'Permissoes Es retrieved successfully');
    }

    /**
     * Store a newly created PermissoesEs in storage.
     * POST /permissoesEs
     *
     * @param CreatePermissoesEsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePermissoesEsAPIRequest $request)
    {
        $input = $request->all();

        $permissoesEs = $this->permissoesEsRepository->create($input);

        return $this->sendResponse($permissoesEs->toArray(), 'Permissoes Es saved successfully');
    }

    /**
     * Display the specified PermissoesEs.
     * GET|HEAD /permissoesEs/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var PermissoesEs $permissoesEs */
        $permissoesEs = $this->permissoesEsRepository->findWithoutFail($id);

        if (empty($permissoesEs)) {
            return $this->sendError('Permissoes Es not found');
        }

        return $this->sendResponse($permissoesEs->toArray(), 'Permissoes Es retrieved successfully');
    }

    /**
     * Update the specified PermissoesEs in storage.
     * PUT/PATCH /permissoesEs/{id}
     *
     * @param  int $id
     * @param UpdatePermissoesEsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePermissoesEsAPIRequest $request)
    {
        $input = $request->all();

        /** @var PermissoesEs $permissoesEs */
        $permissoesEs = $this->permissoesEsRepository->findWithoutFail($id);

        if (empty($permissoesEs)) {
            return $this->sendError('Permissoes Es not found');
        }

        $permissoesEs = $this->permissoesEsRepository->update($input, $id);

        return $this->sendResponse($permissoesEs->toArray(), 'PermissoesEs updated successfully');
    }

    /**
     * Remove the specified PermissoesEs from storage.
     * DELETE /permissoesEs/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var PermissoesEs $permissoesEs */
        $permissoesEs = $this->permissoesEsRepository->findWithoutFail($id);

        if (empty($permissoesEs)) {
            return $this->sendError('Permissoes Es not found');
        }

        $permissoesEs->delete();

        return $this->sendResponse($id, 'Permissoes Es deleted successfully');
    }
}
