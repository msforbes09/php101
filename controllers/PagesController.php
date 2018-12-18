<?php

class PagesController
{
	public function home()
	{

		return view('index');

	}
	public function about()
	{
		$name = "Laracasts";

		return view('about', compact('name'));

	}
	public function contact()
	{

		return view('contact');

	}
}