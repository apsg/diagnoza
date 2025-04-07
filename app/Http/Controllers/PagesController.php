<?php
namespace App\Http\Controllers;

class PagesController extends Controller
{
    const MOXO_PAGES = [
        'moxo.local',
        'diagnoza-krakow.pl',
    ];
    const ADOS_PAGES = [
        'diagnoza.locla',
        'autyzmdiagnoza.pl',
    ];

    public function welcome()
    {
        $domain = parse_url(request()->root(), PHP_URL_HOST);

        if (in_array($domain, static::MOXO_PAGES)) {
            return view('pages.moxo');
        }

        if (in_array($domain, static::ADOS_PAGES)) {
            return view('pages.ados');
        }

        return view('pages.ados');
    }

    public function ados()
    {
        return view('pages.ados');
    }

    public function moxo()
    {
        return view('pages.moxo');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
