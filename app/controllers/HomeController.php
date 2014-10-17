<?php

class HomeController extends BaseController
{

	/**
	 * Show homepage with map view and whatever else.
	 */
    public function index()
    {
		return View::make('index');
    }
}
