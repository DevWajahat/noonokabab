<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('screens.web.about.index');
    }
    public function careers()
    {
        return view('screens.web.about.careers');
    }
    public function gallery()
    {
        return view('screens.web.about.photo-gallery');
    }
    public function mediaReviews()
    {
        return view('screens.web.about.media-reviews');
    }
    public function guestReviews()
    {
        return view('screens.web.about.guest-review');
    }
}
