<?php

class AddToursController extends BaseController {
	public function index(){
		$tours = Tours::all();
		return View::make('admin.tours.tours')->with('tours_all',$tours);
	}

	public function add_tours() {
		$country = Country::all();
		$city = City::all();
		return View::make('admin.tours.tours')->with('country',$country)->with('city',$city);
	}

	public function AddNewTours(){
		$input_value = array(
				'title' => Input::get('title'),
				'description' => Input::get('description'),
				'country' => Input::get('country'),
				'city' => Input::get('city'),
				'price' => Input::get('price'),
				'start_date' => Input::get('start_date'),
				'end_date' => Input::get('end_date'),
				'img_url' => Input::file('image'),
			);
		$input_check = array(
				'title' => array('required'),
				'description' => array('required'),
				'country' => array('required'),
				'city' => array('required'),
				'price' => array('required'),
				'start_date' => array('required'),
				'end_date' => array('required'),
				'img_url' => array('required','mimes:png,jpeg,jpg,gif'),
			);

		$validator = Validator::make($input_value,$input_check);
		if($validator->fails()){
			$error = $validator->messages()->toArray();
			echo "<pre>";
				print_r($error);
			echo "</pre>";
		}else{
			$path = 'public/uploadtours';
			$type = Input::file('image')->getClientOriginalExtension();
			$imageName = rand(1111111,9999999).time().".".$type;
			$upload = Input::file('image')->move($path,$imageName);
			if($upload){
				$tours = new Tours();
				$tours->title = Input::get('title');
				$tours->description = Input::get('description');
				$tours->country = Input::get('country');
				$tours->city = Input::get('city');
				$tours->price = Input::get('price');
				$tours->end_date = strtotime(Input::get('end_date'));
				$tours->start_date = strtotime(Input::get('start_date'));
				$tours->start_date = date('Y-m-d H:i:s',$tours->start_date);
				$tours->end_date = date('Y-m-d H:i:s',$tours->end_date);
				$tours->img_url = $imageName;
				$tours->save();
				if($tours->save()){
					$tours = Tours::all();
					return View::make('admin.tours.tours')->with('tours_all',$tours)->with('save_add_tours','');
				}
			}
		}

	}


	public function edit_tours($id){
		$tours = Tours::find($id);
		$country = Country::all();
		$city = City::all();
		return View::make('admin.tours.tours')->with('tours_edit',$tours)->with('country_edit',$country)->with('city_edit',$city);
	}


	public function editTours($id) {
		$input_value = array(
				'title' => Input::get('title'),
				'description' => Input::get('description'),
				'start_date' => Input::get('start_date'),
				'end_date' => Input::get('end_date'),
				'country' => Input::get('country'),
				'city' => Input::get('city'),
				'price' => Input::get('price'),
			);

		$input_check = array(
				'title' => array('required'),
				'description' => array('required'),
				'start_date' => array('required'),
				'end_date' => array('required'),
				'country' => array('required'),
				'city' => array('required'),
				'price' => array('required'),
			);

		$validator = Validator::make($input_value,$input_check);
		if($validator->fails()){
			$error = $validator->messages()->toArray();
			$tours = Tours::find($id);
			$country = Country::all();
			$city = City::all();
			return View::make('admin.tours.tours')->with('tours_edit',$tours)->with('country_edit',$country)->with('city_edit',$city)->with('error_edit',$error);
		}else{
			if(!empty(Input::file('image'))){
				$tours = Tours::find($id);
				$img_delete = $tours->img_url;
				if(file_exists('public/uploadtours/'.$img_delete)){
					unlink('public/uploadtours/'.$img_delete);
				}
				$type = Input::file('image')->getClientOriginalExtension();
				$imgName = rand(1111111,9999999).time().".".$type;
				$upload = Input::file('image')->move($type,$imgName);

				if($upload){
					$tours->img_url = $imgName;
					$tours->title = Input::get('title');
					$tours->description = Input::get('description');
					$tours->end_date = strtotime(Input::get('end_date'));
					$tours->start_date = strtotime(Input::get('start_date'));
					$tours->start_date = date('Y-m-d H:i:s',$tours->start_date);
					$tours->end_date = date('Y-m-d H:i:s',$tours->end_date);
					$tours->country = Input::get('country');
					$tours->city = Input::get('city');
					$tours->price = Input::get('price');
					$tours->save();
					if($tours->save()){
						$tours = Tours::all();
						return View::make('admin.tours.tours')->with('tours_all',$tours)->with('save_edit','');
					}
				}

			}else{
				$tours = Tours::find($id);
				$tours->title = Input::get('title');
				$tours->description = Input::get('description');
				$tours->end_date = strtotime(Input::get('end_date'));
				$tours->start_date = strtotime(Input::get('start_date'));
				$tours->start_date = date('Y-m-d H:i:s',$tours->start_date);
				$tours->end_date = date('Y-m-d H:i:s',$tours->end_date);
				$tours->country = Input::get('country');
				$tours->city = Input::get('city');
				$tours->price = Input::get('price');
				$tours->save();
				if($tours->save()){
					$tours = Tours::all();
					return View::make('admin.tours.tours')->with('tours_all',$tours)->with('save_edit','');
				}
			}
		}

	}


	public function delete_tours($id){
		$tours = Tours::find($id);
		if($tours->delete()){
			return Redirect::to('AddTours')->with('save_delete','deleted');
		}
	}


	public function pricesearch() {
		$index = Index::all();
		$country = Country::all();
		$city = City::all();
		$gallery = Gallery::all();
				$startdatae_search = strtotime(Input::get('startdatae_search'));
				$startdatae_search = date('Y-m-d H:i:s',$startdatae_search);
				$enddate_search = strtotime(Input::get('enddate_search'));
				$enddate_search = date('Y-m-d H:i:s',$enddate_search);
				$country_search = Input::get('country_search');
				$price_search_start = Input::get('price_search_start');
				$price_search_end = Input::get('price_search_end');


				


				
				if($enddate_search == '1970-01-01 00:00:00') $enddate_search = '2038-01-19 00:00:00';
				if(empty($price_search_start)) $price_search_start = '0';
				if(empty($price_search_end)){
					$res = DB::select(DB::raw('select max(price) as max_price from tours'));
					foreach ($res as $value) {
						$price_search_end = ((int)$value->max_price + 1);
					}
				}
			

				$tours = new Tours();
				if($startdatae_search != '1970-01-01 00:00:00'){
					$tours = $tours->where('start_date', '>',$startdatae_search);
				}

				if($enddate_search != '1970-01-01 00:00:00'){
					$tours = $tours->where('end_date', '<',$enddate_search);
				}
				$tours = $tours->where('country', '=', $country_search);

				if(!empty($price_search_start)){
					$tours = $tours->where('price', '>', $price_search_start);
				}
				if(!empty($price_search_end)){
					$tours = $tours->where('price', '<', $price_search_end);
				}
				$tours = $tours->get();
				
				return View::make('main.search')->with('tours',$tours)->with('country',$country)->with('gallery',$gallery)->with('slider',$index);
	}


}
