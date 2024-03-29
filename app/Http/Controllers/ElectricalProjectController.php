<?php

namespace App\Http\Controllers;

use App\Models\ElectricalProject;
use Illuminate\Http\Request;

/**
 * Class ElectricalProjectController
 * @package App\Http\Controllers
 */
class ElectricalProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $electricalProjects = ElectricalProject::paginate();

        return view('electrical-project.index', compact('electricalProjects'))
            ->with('i', (request()->input('page', 1) - 1) * $electricalProjects->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $electricalProject = new ElectricalProject();
        return view('electrical-project.create', compact('electricalProject'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ElectricalProject::$rules);

        $electricalProject = ElectricalProject::create($request->all());

        return redirect()->route('electrical-projects.index')
            ->with('success', 'ElectricalProject created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $electricalProject = ElectricalProject::find($id);

        return view('electrical-project.show', compact('electricalProject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $electricalProject = ElectricalProject::find($id);

        return view('electrical-project.edit', compact('electricalProject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ElectricalProject $electricalProject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ElectricalProject $electricalProject)
    {
        request()->validate(ElectricalProject::$rules);

        $electricalProject->update($request->all());

        return redirect()->route('electrical-projects.index')
            ->with('success', 'ElectricalProject updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $electricalProject = ElectricalProject::find($id)->delete();

        return redirect()->route('electrical-projects.index')
            ->with('success', 'ElectricalProject deleted successfully');
    }
}
