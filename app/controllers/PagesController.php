<?php

class PagesController extends BaseController {

	public function single()
	{
		return View::make('pages.home');
	}

	public function rightSidebar()
	{
		return View::make('pages.home-1');
	}

	public function leftSidebar()
	{
		return View::make('pages.home-2');
	}

}
