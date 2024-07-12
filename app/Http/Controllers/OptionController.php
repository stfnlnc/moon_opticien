<?php

namespace App\Http\Controllers;

use App\Http\Requests\OptionRequest;
use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OptionController extends Controller
{

    public function index()
    {
        $options = Option::orderBy('id', 'asc')->get();

        return view('admin.options.index', [
            'options' => $options,
        ]);
    }

    public function update(OptionRequest $request, Option $option)
    {
        $option->update($request->validated());

        return Redirect::route('options.index');
    }

}
