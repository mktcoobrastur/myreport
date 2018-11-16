<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetableRequest;
use App\Http\Requests\UpdatetableRequest;
use App\Repositories\tableRepository;
use InfyOm\Generator\Controller\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tableController extends AppBaseController
{
    /** @var  tableRepository */
    private $tableRepository;

    public function __construct(tableRepository $tableRepo)
    {
        $this->tableRepository = $tableRepo;
    }

    /**
     * Display a listing of the table.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tableRepository->pushCriteria(new RequestCriteria($request));
        $tables = $this->tableRepository->all();

        return view('tables.index')
            ->with('tables', $tables);
    }

    /**
     * Show the form for creating a new table.
     *
     * @return Response
     */
    public function create()
    {
        return view('tables.create');
    }

    /**
     * Store a newly created table in storage.
     *
     * @param CreatetableRequest $request
     *
     * @return Response
     */
    public function store(CreatetableRequest $request)
    {
        $input = $request->all();

        $table = $this->tableRepository->create($input);

        Flash::success('Table saved successfully.');

        return redirect(route('tables.index'));
    }

    /**
     * Display the specified table.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $table = $this->tableRepository->findWithoutFail($id);

        if (empty($table)) {
            Flash::error('Table not found');

            return redirect(route('tables.index'));
        }

        return view('tables.show')->with('table', $table);
    }

    /**
     * Show the form for editing the specified table.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $table = $this->tableRepository->findWithoutFail($id);

        if (empty($table)) {
            Flash::error('Table not found');

            return redirect(route('tables.index'));
        }

        return view('tables.edit')->with('table', $table);
    }

    /**
     * Update the specified table in storage.
     *
     * @param  int              $id
     * @param UpdatetableRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetableRequest $request)
    {
        $table = $this->tableRepository->findWithoutFail($id);

        if (empty($table)) {
            Flash::error('Table not found');

            return redirect(route('tables.index'));
        }

        $table = $this->tableRepository->update($request->all(), $id);

        Flash::success('Table updated successfully.');

        return redirect(route('tables.index'));
    }

    /**
     * Remove the specified table from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $table = $this->tableRepository->findWithoutFail($id);

        if (empty($table)) {
            Flash::error('Table not found');

            return redirect(route('tables.index'));
        }

        $this->tableRepository->delete($id);

        Flash::success('Table deleted successfully.');

        return redirect(route('tables.index'));
    }
}
