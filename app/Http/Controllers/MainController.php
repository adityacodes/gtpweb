<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Show the application main page.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
    	return view('main.index');
    }

    /**
     * Show the application ideology page.
     *
     * @return \Illuminate\Http\Response
     */

    public function getIdeology()
    {
    	return view('main.ideology');
    }

    /**
     * Show the application FAQ page.
     *
     * @return \Illuminate\Http\Response
     */

    public function getFaq()
    {
    	return view('main.faq');
    }

    /**
     * Show the application Abroad page.
     *
     * @return \Illuminate\Http\Response
     */

    public function getAbroad()
    {
    	return view('main.abroad');
    }


    /**
     * Show the application Charity page.
     *
     * @return \Illuminate\Http\Response
     */

    public function getCharity()
    {
    	return view('main.charity');
    }


    /**
     * Show the application Marketing page.
     *
     * @return \Illuminate\Http\Response
     */

    public function getMarketing()
    {
    	return view('main.marketing');
    }

    /**
     * Show the application Tutorials list page.
     *
     * @return \Illuminate\Http\Response
     */

    public function getTutorialList()
    {
        return view('main.tutorials');
    }

    /**
     * Show the application Tutorials page.
     *
     * @return \Illuminate\Http\Response
     */


    public function getTutorials($name)
    {
        return view('main.tutorials')->with('name', $name);
    }

    /**
     * Show the application Contact page.
     *
     * @return \Illuminate\Http\Response
     */


    public function getContact()
    {
    	return view('main.contact');
    }

    /**
     * Show the application Legality page.
     *
     * @return \Illuminate\Http\Response
     */

    public function getLegality()
    {
    	return view('main.legality');
    }

    /**
     * Show the application Ads page.
     *
     * @return \Illuminate\Http\Response
     */


    public function getAds()
    {
    	return view('main.ads');
    }

    /**
     * Show the application How To page.
     *
     * @return \Illuminate\Http\Response
     */

    public function getHowto()
    {
    	return view('main.howto');
    }

    /**
     * Show the application How To page.
     *
     * @return \Illuminate\Http\Response
     */

    public function getWhatIs()
    {
        return view('main.whatis');
    }

    /**
     * Show the application Registration page.
     *
     * @return \Illuminate\Http\Response
     */


    public function getRegister()
    {
        return view('main.registernow');
    }

    /**
     * Show the application How To Participate page.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHowToParticipate()
    {
        return view('main.howtoparticipate');
    }


}
