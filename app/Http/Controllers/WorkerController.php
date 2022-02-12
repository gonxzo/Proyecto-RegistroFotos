<?php

namespace App\Http\Controllers;

use App\Worker;
use App\Project;
use App\User;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workers=Worker::all();
        $projects=Project::all();
        $users=User::all();
        $workers=Worker::paginate(500);
        return view('workers.index', compact('workers','projects','users')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project=Project::all();
        $user=User::all();
        return view('workers.create',compact('project','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $worker=Worker::create($request->all());
        return redirect()->route('workers.index',$worker->id)
        ->with('info','trabajador  Guardado con exito!!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show(Worker $worker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit(Worker $worker)
    {
        $project=Project::all();
        $user=User::all();
        return view('workers.edit',compact('worker','project','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Worker $worker)
    {
        $worker->update($request->all());
        return redirect()->route('workers.index', $worker->id)
        ->with('info','Registro trabajador Actualizado con exito!!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worker $worker)
    {
        $worker->delete();
        return back()->with('info','eliminado correctamente');
    }
}
