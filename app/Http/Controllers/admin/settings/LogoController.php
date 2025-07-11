<?php

namespace App\Http\Controllers\admin\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Category;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        
        $categories = Category::orderBy('name', 'asc')->get();
        
        $category = Category::latest();
        $page = [
            'name' => 'Logo'
        ];
        return view('admin.pages.settings.logo.index', compact('page', 'categories', 'category'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
