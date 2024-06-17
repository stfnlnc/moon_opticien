<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function getReviews ()
    {
        $json = file_get_contents('https://maps.googleapis.com/maps/api/place/details/json?placeid=ChIJmyZzjQVJVg0R7UwDRXmV21Y');
        $data = json_decode($json, true);
        $reviews = $data['result']['reviews'];
        return $reviews;
    }


    public function index()
    {
        return view('main.index', [
            'mode' => 'dark'
        ]);
    }

    public function shop_service()
    {
        return view('main.shop_service', [
            'mode' => 'light'
        ]);
    }

    public function home_service()
    {
        return view('main.home_service', [
            'mode' => 'dark'
        ]);
    }

    public function glasses()
    {
        return view('main.glasses', [
            'mode' => 'dark'
        ]);
    }

    public function lenses()
    {
        return view('main.lenses', [
            'mode' => 'light'
        ]);
    }

    public function about()
    {
        return view('main.about', [
            'mode' => 'light'
        ]);
    }

    public function contact()
    {
        return view('main.contact', [
            'mode' => 'light'
        ]);
    }

    public function contact_store(ContactRequest $request) {
        Mail::send(new ContactMail($request->validated()), [], function ($message) use ($request) {
            $message->attach($request->validated()['prescription-file']->getRealPath(), [
                'as' => $request->validated()['prescription-file']->getClientOriginalName(),
                'mime' => $request->validated()['prescription-file']->getMimeType(),
            ]);
        });
        return back()->with('success', 'Merci, nous avons bien reçu votre demande, notre équipe vous contactera aussi vite que possible');
    }

    public function legal_notice()
    {
        return view('main.legal_notice', [
            'mode' => 'dark'
        ]);
    }

    public function privacy_policy()
    {
        return view('main.privacy_policy', [
            'mode' => 'dark'
        ]);
    }
}
