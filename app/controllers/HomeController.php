<?php

class HomeController extends BaseController {

	public function index() {
		$SliderImages = SliderImages::all();
		$top = Top::all();
		$tab = TabCategoris::all();
		return View::make('main.index')->with('slider',$SliderImages)->with('top_img',$top)->with('tab',$tab);
	}


	public function About(){
        $SliderImages = SliderImages::all();
		$about = About::first();
		return View::make('about.about')->with('slider',$SliderImages)->with('about',$about);
	}

	public function Gallery(){
        $SliderImages = SliderImages::all();
		$gallery = Gallery::all();
		return View::make('gallery.gallery')->with('slider',$SliderImages)->with('gallery',$gallery);
	}

	public function Tours(){
        $SliderImages = SliderImages::all();
		$tours = Tours::all();
		$country = Country::all();
		return View::make('tours.tours')->with('slider',$SliderImages)->with('tours',$tours)->with('country',$country);
	}

	public function Blog(){
        $SliderImages = SliderImages::all();
		return View::make('blog.blog')->with('slider',$SliderImages);
	}

	public function Contacts(){
        $SliderImages = SliderImages::all();
		return View::make('contacts.contacts')->with('slider',$SliderImages);
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



