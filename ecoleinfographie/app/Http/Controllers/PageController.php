<?php

namespace App\Http\Controllers;

use Backpack\PageManager\app\Models\Page;

class PageController extends Controller
{
	/*public function home($slug){
		$page = Page::findBySlug($slug);
		
		if ($slug = 'Accueil')
		{
			abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
		}
		return view('pages.'.$page->template, $this->data);
	}*/
	
	public function home()
	{
		$page = Page::findBySlug('accueil');
		if (!$page)
		{
			abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
		}
		
		$this->data['title'] = $page->title;
		$this->data['page'] = $page->withFakes();
		
		return view('pages.home', $this->data);
	}
	
	public function index($slug)
	{
		$page = Page::findBySlug($slug);
		
		if (!$page)
		{
			abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
		}
		
		$this->data['title'] = $page->title;
		$this->data['page'] = $page->withFakes();
		
		return view('pages.'.$page->template, $this->data);
	}
}