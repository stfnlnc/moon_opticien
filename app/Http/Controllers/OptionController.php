<?php

namespace App\Http\Controllers;

use App\Http\Requests\OptionRequest;
use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        $option = Option::first();
        return view('admin.options.create', [
            'option' => $option,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionRequest $request)
    {
        // Get Option if exists
        $option = Option::first() ?? new Option();
        $data = $request->validated();

        $data['site_favicon'] = $this->storeImage($option, $request, $option->site_favicon, 'site_favicon');
        $data['site_logo'] = $this->storeImage($option, $request, $option->site_logo, 'site_logo');

        if(empty($option->toArray())) {
            $option->create($data);
        } else {
            $option->update($data);
        }
        return redirect()->route('options.index');
    }

    public function storeImage(Option|null $option, OptionRequest $request, $image, $name)
    {
        /** @var UploadedFile|null $file */
        $file = $request->validated($name);
        if($file !== null && !$file->getError()) {
            // Delete favicon if exists
            if($option && $image) {
                Storage::disk('public')->delete($image);
            }
            return $file->store($name, 'public');
        }
        return $image;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
