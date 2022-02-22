<?php

namespace App\Http\Controllers;

use App\Project;
use App\Worker;
use App\User;
use App\Document;
use App\Historial;
use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=Project::all();
        $documents=Document::all();
        $workers=Worker::all();
        $users=User::all();
        $projects=Project::paginate(100);
       
        return view('projects.index', compact('projects','documents','workers','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $request->validate([
        'name'=>'required',
        'typeproject'=>'required',
        'dateb'=>'required',
        'datef'=>'required',
        'dateentry'=>'required',
        'surface'=>'required',
        'description'=>'required',
        'location'=>'required',
        'latlon'=>'required',
    ]);
        $project=Project::create($request->all());
        return redirect()->route('projects.index',$project->id)
        ->with('info','proyecto  Guardado con exito!!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->update($request->all());
        return redirect()->route('projects.index', $project->id)
        ->with('info','Registro laminas Actualizado con exito!!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return back()->with('info','eliminado correctamente');
    }
    public function generaPDF(Project $project)
    {
        $worker=Worker::all();
        $user=User::all();
        $document=Document::all();
        $historial=Historial::all();
        /* return response()->json($ids); */
       $pdf = PDF::loadView('projects.pdf', compact('project','worker','user','document','historial'))->setPaper('A4', 'portrait'); 

       return $pdf->stream('projects.pdf');
    }
}
