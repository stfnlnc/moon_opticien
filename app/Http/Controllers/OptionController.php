<?php

namespace App\Http\Controllers;

use App\Http\Requests\OptionRequest;
use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $option = Option::first();

        return view('admin.options.index', [
            'option' => $option,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $oldOption = Option::first();
        return view('admin.options.create', [
            'oldOption' => $oldOption,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionRequest $request)
    {
        $oldOption = Option::first();
        if($oldOption) {
            $oldOption->delete();
        }
        $option = Option::create($request->validated());
        return redirect()->route('options.index', [
            'oldOption' => $oldOption,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
