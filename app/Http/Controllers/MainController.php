<?php

namespace App\Http\Controllers;

use DiDom\Document;
use http\Client;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function mainView()
    {
        $url = 'https://www.ivi.ru/new/movie-new/?sort=year';
        $client = new \GuzzleHttp\Client();
        $resp = $client->get($url);
        $html = $resp->getBody()->getContents();
        $document = new Document();
        $document->loadHtml($html);
        $catalog = $document->find('ul.gallery__list li.gallery__item');
        return view('main', compact('catalog'));
    }

    public function cardView(Request $request)
    {
        $id = $request->item;
            $url = 'https://www.ivi.ru/watch/'.$id;
            $client = new \GuzzleHttp\Client();
            $resp = $client->get($url);
            $html = $resp->getBody()->getContents();
            $document = new Document();
            $document->loadHtml($html);

            $items = $document->find('div.contentCard__mainContent div.contentCard__container');

            $link = 'https://www.ivi.ru/new/movie-new/?sort=year';
            $client = new \GuzzleHttp\Client();
            $resp = $client->get($link);
            $html = $resp->getBody()->getContents();
            $document = new Document();
            $document->loadHtml($html);
            $catalog = $document->find('ul.gallery__list li.gallery__item');

            return view('card', compact('items', 'catalog'));

    }

    public function cardSerialView(Request $request)
    {
        $id = $request->item;
        $url = 'https://www.ivi.ru/watch/'.$id;
        $client = new \GuzzleHttp\Client();
        $resp = $client->get($url);
        $html = $resp->getBody()->getContents();
        $document = new Document();
        $document->loadHtml($html);

        $items = $document->find('div.contentCard__mainContent div.contentCard__container');

        $link = 'https://www.ivi.ru/series/2022';
        $client = new \GuzzleHttp\Client();
        $resp = $client->get($link);
        $html = $resp->getBody()->getContents();
        $document = new Document();
        $document->loadHtml($html);
        $catalog = $document->find('ul.gallery__list li.gallery__item');

        return view('cardSerials', compact('items', 'catalog'));
    }

    public function pageView(Request $request)
    {
        $num = $request->num;
        $url = 'https://www.ivi.ru/new/movie-new/page'.$num.'?sort=year';
        $client = new \GuzzleHttp\Client();
        $resp = $client->get($url);
        $html = $resp->getBody()->getContents();
        $document = new Document();
        $document->loadHtml($html);
        $catalog = $document->find('ul.gallery__list li.gallery__item');
        return view('main', compact('catalog'));
    }

    public function serialsView()
    {
        $url = 'https://www.ivi.ru/series/2022';
        $client = new \GuzzleHttp\Client();
        $resp = $client->get($url);
        $html = $resp->getBody()->getContents();
        $document = new Document();
        $document->loadHtml($html);
        $catalog = $document->find('ul.gallery__list li.gallery__item');
        return view('serials', compact('catalog'));
    }

    public function serialsPageView(Request $request)
    {
        $num = $request->num;
        $url = 'https://www.ivi.ru/series/2022/page'.$num;
        $client = new \GuzzleHttp\Client();
        $resp = $client->get($url);
        $html = $resp->getBody()->getContents();
        $document = new Document();
        $document->loadHtml($html);
        $catalog = $document->find('ul.gallery__list li.gallery__item');
        return view('serials', compact('catalog'));
    }
}
