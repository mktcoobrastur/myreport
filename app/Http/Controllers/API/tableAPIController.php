<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatetableAPIRequest;
use App\Http\Requests\API\UpdatetableAPIRequest;
use App\Models\table;
use App\Repositories\tableRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class tableController
 * @package App\Http\Controllers\API
 */

class tableAPIController extends AppBaseController
{
    /** @var  tableRepository */
    private $tableRepository;

    public function __construct(tableRepository $tableRepo)
    {
        $this->tableRepository = $tableRepo;
    }

    /**
     * Display a listing of the table.
     * GET|HEAD /tables
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tableRepository->pushCriteria(new RequestCriteria($request));
        $this->tableRepository->pushCriteria(new LimitOffsetCriteria($request));
        $tables = $this->tableRepository->all();

        return $this->sendResponse($tables->toArray(), 'Tables retrieved successfully');
    }

    /**
     * Store a newly created table in storage.
     * POST /tables
     *
     * @param CreatetableAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatetableAPIRequest $request)
    {
        $input = $request->all();

        $tables = $this->tableRepository->create($input);

        return $this->sendResponse($tables->toArray(), 'Table saved successfully');
    }

    /**
     * Display the specified table.
     * GET|HEAD /tables/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var table $table */
        $table = $this->tableRepository->findWithoutFail($id);

        if (empty($table)) {
            return $this->sendError('Table not found');
        }

        return $this->sendResponse($table->toArray(), 'Table retrieved successfully');
    }

    /**
     * Update the specified table in storage.
     * PUT/PATCH /tables/{id}
     *
     * @param  int $id
     * @param UpdatetableAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetableAPIRequest $request)
    {
        $input = $request->all();

        /** @var table $table */
        $table = $this->tableRepository->findWithoutFail($id);

        if (empty($table)) {
            return $this->sendError('Table not found');
        }

        $table = $this->tableRepository->update($input, $id);

        return $this->sendResponse($table->toArray(), 'table updated successfully');
    }

    /**
     * Remove the specified table from storage.
     * DELETE /tables/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var table $table */
        $table = $this->tableRepository->findWithoutFail($id);

        if (empty($table)) {
            return $this->sendError('Table not found');
        }

        $table->delete();

        return $this->sendResponse($id, 'Table deleted successfully');
    }
}
