<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Api\Candidate;
use Illuminate\Http\Request;

class CandidatyController extends Controller
{
    
    public function index()
    {
        return Candidate::all();
    }

   
    public function store(Request $request)
    {
        Candidate::create($request->all());
    }

    public function show($id)
    {
        return Candidate::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $device = Candidate::findOrFail($id);
        $device->update($request->all());
    }


    public function destroy($id)
    {
        $device = Candidate::findOrFail($id);
        $device->delete();
    }
}
