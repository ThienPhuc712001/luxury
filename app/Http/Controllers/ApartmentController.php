<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index()
    {
        $apartments = Apartment::orderBy('created_at', 'desc')->paginate(6);
        return view('apartments.index', compact('apartments'));
    }

    public function create()
    {
        return view('apartments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:10|max:50',
            'address' => 'required|string',
            'price' => 'required|numeric',
            'image_url' => 'required|url',
            'status' => 'required|integer|between:1,3',
        ]);

        Apartment::create($request->all());

        return redirect()->route('apartments.index');
    }
}
