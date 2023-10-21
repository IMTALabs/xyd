<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
        return view('landing.home');
    }

    public function contactUs()
    {
        return view('landing.contact-us');
    }

    public function aboutUs()
    {
        return view('landing.about-us');
    }

    public function longTermVision()
    {
        return view('landing.long-term-vision');
    }

    public function businessEnterprise()
    {
        return view('landing.business-enterprise');
    }

    public function managementTeam()
    {
        return view('landing.management-team');
    }

    public function ourQuality()
    {
        return view('landing.our-quality');
    }

    public function careers()
    {
        return view('landing.careers');
    }

    public function supportCenter()
    {
        return view('landing.support-center');
    }

    public function faq()
    {
        return view('landing.faq');
    }

    public function companyNews()
    {
        return view('landing.company-news');
    }

    public function resources()
    {
        return view('landing.resources');
    }

    public function landFreight()
    {
        return view('landing.land-freight');
    }

    public function seaFreight()
    {
        return view('landing.sea-freight');
    }

    public function airFreight()
    {
        return view('landing.air-freight');
    }

    public function warehouse()
    {
        return view('landing.warehouse');
    }

    public function mainBusinessSummary()
    {
        return view('landing.main-business-summary');
    }

    public function supplyChainSolution()
    {
        return view('landing.supply-chain-solution');
    }

    public function aToZ()
    {
        return view('landing.a-to-z');
    }

    public function consultingAndQuotation()
    {
        return view('landing.consulting-and-quotation');
    }

    public function serviceUsageProcess()
    {
        return view('landing.service-usage-process');
    }
}
