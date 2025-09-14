<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatejobRequest;
use App\Models\employer;
use App\Models\Job;
use App\Models\Tag;
use Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paginated = Job::latest()
            ->with(['employer','tags'])
            ->simplePaginate(10);

        $jobs = $paginated->getCollection()->groupBy('featured');

        return view('jobs.index', [
            'allJobs' => $paginated,
            'jobs' => $jobs[0]??collect(),
            'featuredJobs' => $jobs[1]??collect(),
            'tags' => Tag::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes= request()->validate([
            'title' => 'required',
            'salary' => 'required',
            'location' => 'required',
            'schedule' => 'required | in:Full-time,Part-time',
            'url' => 'required | url',
            'tags' => 'nullable'

        ]);
        $attributes['featured'] = $request->has('featured');

        $job =Auth::user()->employer->jobs()->create(Arr::except($attributes, ['tags']));

        if ($request->filled('tags')) {
            foreach(explode(',', $request->tags) as $tag) {;
             $job->tag($tag) ;
            }
        }
        return redirect('/')->with('success', 'Job posted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatejobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
