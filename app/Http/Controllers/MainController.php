<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function getReviews ()
    {
        if(file_exists('time.txt')) {
            $time = file_get_contents('time.txt');
        } else {
            $time = '0';
        }

        // If upload a week before, new review upload in reviews.json
        if(time() > $time + 604800 || !file_exists('reviews.json')) {
            $ch = curl_init('https://maps.googleapis.com/maps/api/place/details/json?key=' . env('GOOGLE_API_KEY') . '&placeid=' . env('GOOGLE_PLACE_ID') . '&fields=reviews&reviews_no_translations=true%27');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            $json = curl_exec($ch);
            curl_close($ch);

            // Get reviews with Google Places API and register JSON in review.json
            file_put_contents('reviews.json', $json);
            // Put time when upload in time.txt
            $date = time();
            file_put_contents('time.txt', $date);
        }

        if(file_exists('reviews.json')) {
            $data = file_get_contents('reviews.json');
        } else {
            $data = '';
        }

        if(!json_validate($data)) {
            return null;
        }

        $result = json_decode($data, true);

        if($result['status'] !== 'OK') {
            unlink('reviews.json');
            return null;
        }

        return json_decode($data, true)['result']['reviews'];
    }


    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $reviews = $this->getReviews();

        return view('main.index', [
            'mode' => 'dark',
            'reviews' => $reviews
        ]);
    }

    public function shop_service(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('main.shop_service', [
            'mode' => 'light'
        ]);
    }

    public function home_service(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('main.home_service', [
            'mode' => 'dark'
        ]);
    }

    public function glasses(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('main.glasses', [
            'mode' => 'dark'
        ]);
    }

    public function lenses(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('main.lenses', [
            'mode' => 'light'
        ]);
    }

    public function about(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $reviews = $this->getReviews();

        return view('main.about', [
            'mode' => 'light',
            'reviews' => $reviews
        ]);
    }

    public function contact(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('main.contact', [
            'mode' => 'light'
        ]);
    }

    public function contact_store(ContactRequest $request): RedirectResponse
    {
        Mail::send(new ContactMail($request->validated()), [], function ($message) use ($request) {
            $message->attach($request->validated()['prescription-file']->getRealPath(), [
                'as' => $request->validated()['prescription-file']->getClientOriginalName(),
                'mime' => $request->validated()['prescription-file']->getMimeType(),
            ]);
        });
        return back()->with('success', 'Merci, nous avons bien reçu votre demande, notre équipe vous contactera aussi vite que possible');
    }

    public function legal_notice(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('main.legal_notice', [
            'mode' => 'dark'
        ]);
    }

    public function privacy_policy(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('main.privacy_policy', [
            'mode' => 'dark'
        ]);
    }
}
