<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Option;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function getReviews ()
    {
        // On vérifie si le fichier existe pour récupérer la dernière màj
        if(file_exists('time.txt')) {
            $time = file_get_contents('time.txt');
        } else {
            $time = '0';
        }

        /* Si la dernière màj date de plus d'une semaine ou que le fichier reviews.json n'existe pas,
        * on récupère les informations de l'API et on les enregistre
        */
        if(time() > $time + 604800 || !file_exists('reviews.json')) {
            $ch = curl_init('https://maps.googleapis.com/maps/api/place/details/json?key=' . env('GOOGLE_API_KEY') . '&placeid=' . env('GOOGLE_PLACE_ID') . '&fields=reviews&reviews_no_translations=true%27');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            $json = curl_exec($ch);
            curl_close($ch);

            file_put_contents('reviews.json', $json);
            $date = time();
            file_put_contents('time.txt', $date);
        }

        // Si le fichier reviews.json existe, on récupère les données
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

    // 'mode' → définit l'apparence du header sur light ou dark

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
        Mail::send(new ContactMail($request->validated()));
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
