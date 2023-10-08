<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use function Livewire\Features\SupportTesting\id;

class CatagoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private static $remove;
    public function index()
    {
        return view('admin.catagory.index',[
            'catagories' => Catagory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.catagory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Catagory::saveInfo($request);
       return redirect(route('catagories.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $id;
        Catagory::showStatus($id);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.catagory.edit',[
            'catagory' => Catagory::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Catagory::saveInfo($request,$id);
        return redirect(route('catagories.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        self::$remove = Catagory::find($id);
        self::$remove->delete();
        return back();
    }
}
