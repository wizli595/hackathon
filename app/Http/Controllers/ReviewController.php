<?php

namespace App\Http\Controllers;

use App\Models\Repository;
use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Repository $repository)
    {
        $request->validate([
            'comment' => 'string'
        ]);

        Review::create([
            'teacher_id' => Auth::user()->id,
            'repository_id' => $repository->id,
            'comment' => $request->comment
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $request->validate([
            'comment' => 'string'
        ]);

        Review::findOrFail($review)->update([
            'comment' => $request->comment
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        Review::findOrFail($review)->delete();

        return redirect()->back();
    }
}
