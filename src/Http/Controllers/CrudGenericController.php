<?php

namespace JeffAlmeida\CrudGeneric\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CrudGenericController extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param model nome do modelo, ex: App\\Models\\User
     * requerido
     */
    protected $model;

    public function __construct()
    {
        if(!$this->model) {
            throw new \Exception('Variável $model em ' . get_class($this) . ' não configurada. App\\Models\\Example?', 500);
        }
    }

    public function index()
    {
        return $this->model::all();
    }

    public function create()
    {
    }
    
    public function store(Request $request)
    {
        return $this->model::create(request()->all());
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
