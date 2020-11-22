<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use  Auth;

class NewsController extends Controller
{
    public function index()
    {
        $projects = News::latest()->paginate(5);

        return view('projects.index', compact('projects'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
            'title' => 'required',
            'description' => 'required',
            'small_descr' => 'required',
            'img_url' => 'required',
            'user_id' => 'required'

        ]);

        News::create($request->all());

        return redirect()->route('news.index')
            ->with('success', 'News created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $project
     * @return \Illuminate\Http\Response
     */
    public function show(news $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(News $project)
    {
        return view('projects.edit', compact('project'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $project)
    {
        $request->validate([
            'name' => 'required',
            'introduction' => 'required',
            'location' => 'required',
            'cost' => 'required'
        ]);
        $project->update($request->all());

        return redirect()->route('news.index')
            ->with('success', 'Project updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $project)
    {
        $project->delete();

        return redirect()->route('projects.index')
            ->with('success', 'Project deleted successfully');
    }
}

