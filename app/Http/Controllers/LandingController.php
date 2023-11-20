<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function changeLanguage($language)
    {
        session()->put('locale', $language);
        return redirect()->back();
    }

    public function home()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(4);

        SEOMeta::setTitle(__('Home'));
        return view('landing.home', compact('posts'));
    }

    public function contactUs()
    {
        SEOTools::setTitle(__('Contact us'));
        return view('landing.contact-us');
    }

    public function aboutUs()
    {
        SEOTools::setTitle(__('About us'));
        return view('landing.about-us');
    }

    public function longTermVision()
    {

        SEOTools::setTitle(__('Long term vision'));
        return view('landing.long-term-vision');
    }

    public function businessEnterprise()
    {
        SEOTools::setTitle(__('Enterprise'));
        return view('landing.business-enterprise');
    }

    public function managementTeam()
    {
        SEOTools::setTitle(__('Management team'));
        return view('landing.management-team');
    }

    public function ourQuality()
    {
        SEOTools::setTitle(__('Our quality'));
        return view('landing.our-quality');
    }

    public function careers()
    {
        SEOTools::setTitle(__('Careers'));
        return view('landing.careers');
    }

    public function supportCenter()
    {
        SEOTools::setTitle(__('Support center'));
        return view('landing.support-center');
    }

    public function faq()
    {
        SEOTools::setTitle(__('FAQ'));
        return view('landing.faq');
    }

    public function companyNews()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        SEOTools::setTitle(__('Company news'));
        return view('landing.company-news', compact('posts'));
    }

    public function companyNewDetail($id)
    {
        try {
            $post = Post::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('company-news');
        }

        SEOTools::setTitle(__('Company news'));
        return view('landing.company-new-detail', compact('post'));
    }

    public function resources()
    {
        SEOTools::setTitle(__('Resources'));
        return view('landing.resources');
    }

    public function landFreight()
    {
        SEOTools::setTitle(__('Land freight'));
        return view('landing.land-freight');
    }

    public function seaFreight()
    {
        SEOTools::setTitle(__('Sea freight'));
        return view('landing.sea-freight');
    }

    public function airFreight()
    {
        SEOTools::setTitle(__('Air freight'));
        return view('landing.air-freight');
    }

    public function warehouse()
    {
        SEOTools::setTitle(__('Warehouse'));
        return view('landing.warehouse');
    }

    public function mainBusinessSummary()
    {
        SEOTools::setTitle(__('Main business summary'));
        return view('landing.main-business-summary');
    }

    public function supplyChainSolution()
    {
        SEOTools::setTitle(__('Supply chain solution'));
        return view('landing.supply-chain-solution');
    }

    public function aToZ()
    {
        SEOTools::setTitle(__('A to Z Transportation Service'));
        return view('landing.a-to-z');
    }

    public function consultingAndQuotation()
    {
        SEOTools::setTitle(__('Consulting and quotation'));
        return view('landing.consulting-and-quotation');
    }

    public function serviceUsageProcess()
    {
        SEOTools::setTitle(__('Service usage process'));
        return view('landing.service-usage-process');
    }
}
