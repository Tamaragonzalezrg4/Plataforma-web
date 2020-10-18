<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTablaRequest;
use App\Http\Requests\UpdateTablaRequest;
use App\Repositories\TablaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TablaController extends AppBaseController
{
    /** @var  TablaRepository */
    private $tablaRepository;

    public function __construct(TablaRepository $tablaRepo)
    {
        $this->tablaRepository = $tablaRepo;
    }

    /**
     * Display a listing of the Tabla.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tablas = $this->tablaRepository->all();

        return view('tablas.index')
            ->with('tablas', $tablas);
    }

    /**
     * Show the form for creating a new Tabla.
     *
     * @return Response
     */
    public function create()
    {
        return view('tablas.create');
    }

    /**
     * Store a newly created Tabla in storage.
     *
     * @param CreateTablaRequest $request
     *
     * @return Response
     */
    public function store(CreateTablaRequest $request)
    {
        $input = $request->all();

        $tabla = $this->tablaRepository->create($input);

        Flash::success('Tabla saved successfully.');

        return redirect(route('tablas.index'));
    }

    /**
     * Display the specified Tabla.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tabla = $this->tablaRepository->find($id);

        if (empty($tabla)) {
            Flash::error('Tabla not found');

            return redirect(route('tablas.index'));
        }

        return view('tablas.show')->with('tabla', $tabla);
    }

    /**
     * Show the form for editing the specified Tabla.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tabla = $this->tablaRepository->find($id);

        if (empty($tabla)) {
            Flash::error('Tabla not found');

            return redirect(route('tablas.index'));
        }

        return view('tablas.edit')->with('tabla', $tabla);
    }

    /**
     * Update the specified Tabla in storage.
     *
     * @param int $id
     * @param UpdateTablaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTablaRequest $request)
    {
        $tabla = $this->tablaRepository->find($id);

        if (empty($tabla)) {
            Flash::error('Tabla not found');

            return redirect(route('tablas.index'));
        }

        $tabla = $this->tablaRepository->update($request->all(), $id);

        Flash::success('Tabla updated successfully.');

        return redirect(route('tablas.index'));
    }

    /**
     * Remove the specified Tabla from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tabla = $this->tablaRepository->find($id);

        if (empty($tabla)) {
            Flash::error('Tabla not found');

            return redirect(route('tablas.index'));
        }

        $this->tablaRepository->delete($id);

        Flash::success('Tabla deleted successfully.');

        return redirect(route('tablas.index'));
    }
}
