<?php

namespace Webflax\Portfolio\App\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Webflax\Portfolio\App\Models\Skill;
use Webflax\Portfolio\App\Models\Social;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Social::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'platform' => ['required', 'in:instagram,telegram,youtube'],
            'username' => ['required']
        ]);

        $created = Social::create($data);


        return $created;
    }

    /**
     * Display the specified resource.
     */
    public function show(Social $social)
    {
        return $social;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Social $social)
    {
        // return
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Social $social)
    {
        $data = $request->validate([
            'name' => ['required']
        ]);

        $updated = $social->update($data);

        return $updated;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Social $social)
    {
        return $social->delete();
    }
}
