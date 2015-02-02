<?php

class HomeController extends BaseController {

	public function index() {
		$index = Index::all();
		$top = Top::all();
		$tab = TabCategoris::all();
		return View::make('main.index')->with('slider',$index)->with('top_img',$top)->with('tab',$tab);
	}


	public function About(){
		$index = Index::all();
		$about = About::all();
		return View::make('about.about')->with('slider',$index)->with('about_text',$about);
	}

	public function Gallery(){
		$index = Index::all();
		$gallery = Gallery::all();
		return View::make('gallery.gallery')->with('slider',$index)->with('gallery',$gallery);
	}

	public function Tours(){
		$index = Index::all();
		$tours = Tours::all();
		$country = Country::all();
		return View::make('tours.tours')->with('slider',$index)->with('tours',$tours)->with('country',$country);
	}

	public function Blog(){
		$index = Index::all();
		return View::make('blog.blog')->with('slider',$index);
	}

	public function Contacts(){
		$index = Index::all();
		return View::make('contacts.contacts')->with('slider',$index);
	}

	public function Agency(){
		echo "Agency";
	}

	public function News(){
		echo "News";
	}

	public function Team(){
		echo "Team";
	}

}



