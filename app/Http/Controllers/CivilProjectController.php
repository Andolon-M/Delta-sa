<?php

namespace App\Http\Controllers;

use App\CivilProject;
use Illuminate\Http\Request;

/**
 * Class CivilProjectController
 * @package App\Http\Controllers
 */
class CivilProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $civilProjects = CivilProject::paginate();

        return view('civil-project.index', compact('civilProjects'))
            ->with('i', (request()->input('page', 1) - 1) * $civilProjects->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $civilProject = new CivilProject();
        return view('civil-project.create', compact('civilProject'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CivilProject::$rules);

        $civilProject = CivilProject::create($request->all());

        return redirect()->route('civil-projects.index')
            ->with('success', 'CivilProject created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $civilProject = CivilProject::find($id);

        return view('civil-project.show', compact('civilProject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $civilProject = CivilProject::find($id);

        return view('civil-project.edit', compact('civilProject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CivilProject $civilProject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CivilProject $civilProject)
    {
        request()->validate(CivilProject::$rules);

        $civilProject->update($request->all());

        return redirect()->route('civil-projects.index')
            ->with('success', 'CivilProject updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $civilProject = CivilProject::find($id)->delete();

        return redirect()->route('civil-projects.index')
            ->with('success', 'CivilProject deleted successfully');
    }
}
