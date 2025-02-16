<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Tag;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::with(['employer', 'tags'])
            ->latest()
            ->get()
            ->groupBy('featured');
        $tags = Tag::all();

        return view('jobs.index', [
            'featuredJobs' => $jobs[1]->take(3),
            'jobs' => $jobs[0],
            'tags' => $tags
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
        $attributes = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'salary' => ['required', 'numeric'],
            'location' => ['required', 'string', 'max:255'],
            'url' => ['required', 'url'],
            'type' => ['required', 'string', Rule::in(['Full Time', 'Part Time', 'Freelance'])],
            'tags' => ['nullable'],
        ]);
        $attributes['featured'] = $request->has('featured');

        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, ['tags']));

        if ($attributes['tags'] ?? false) {
            foreach (explode(",", $attributes['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/');
    }
}
