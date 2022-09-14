<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SeoMetaTags;


class SitemapXmlController extends Controller
{
    public function index()
    {
        $meta_tag_pages = SeoMetaTags::latest()->get();
        return response()->view('front-end.pages.sitemap', [
            'meta_tag_pages' => $meta_tag_pages,
        ])->header('Content-Type', 'text/xml');

    }
    
}
