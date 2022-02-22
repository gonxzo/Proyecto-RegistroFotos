<?php

namespace App\Http\Controllers;

use App\Document;
use App\Project;
use App\Worker;
use App\Historial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::all();
        $projects = Project::all();
        $workers = Worker::all();
        $documents = Document::paginate(1000);
        return view('documents.index', compact('documents','projects','workers'));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project=Project::All();
        $worker=Worker::All();
        return view('documents.create',compact('project','worker'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proy = $request->idproject;
        $des = $request->descripcion;
            if($request->hasfile('document')) 
            foreach($request->file('document') as $file){
            
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/uploads/', $name);  
                $imgData = $name;  
            
    
            $fileModal = new Document();
            $fileModal->document = $imgData;
            $fileModal->idproject = $proy;
            
           
            $fileModal->save();
        }
        DB::table('historials')->insert([
            'idproject' => $proy,
            'descripcion' => $des,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);    
        return redirect()->route('projects.index')
        ->with('info', 'Documento  guardado con exito!!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        $document->delete();
        return back()->with('info','eliminado correctamente');
    }
}
