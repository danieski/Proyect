<?php

namespace App\Http\Controllers;

use App\Models\Proyect;
use Illuminate\Http\Request;
use App\Http\Resources\ProyectResource;

class ProyectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Proyect = Proyect::all();

        return response(['Proyect' => ProyectResource::collection($Proyect),
        'message' => 'Retrived Sucefull'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'Title' => 'required',
            'Description' => 'required'
        ]);
        if ($validator->fails()) {
            return response (['error' => $validator->error(),
            'message' =>'Validator Fail'], 400)

        }
        $Proyect = Proyect::create($data);

        return response (['Proyect' =>new ProyectResource($Proyect),
            'message' =>'Created Sucefully'], 200)
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function show(Proyect $proyect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyect $proyect)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyect $proyect)
    {
        //
    }
}
