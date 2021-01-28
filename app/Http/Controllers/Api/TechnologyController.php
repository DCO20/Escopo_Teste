<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Api\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    
    public function index()
    {
        return Technology::all();
    }

   
    public function store(Request $request)
    {
       Technology::create($request->all());
    }

    public function show($id)
    {
        return Technology::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $technology =Technology::findOrFail($id);
        $technology->update($request->all());
    }

    public function destroy($id)
    {
        $technology =Technology::findOrFail($id);
        $technology->delete();
    }
}
