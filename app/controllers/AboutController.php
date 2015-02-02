<?php

class AboutController extends BaseController {
	public function index() {
		$about_text = About::find('1');
		return  View::make('admin.about.about')->with('about_text',$about_text);
	}

	public function EditAboutText($id){
		$input_value = array(
				'title' => Input::get('title'),
				'text' => Input::get('text'),
				'full_text' => Input::get('full_text'),
				'img_url' => Input::file('image'),
			);
		$input_check = array(
				'title' => array('required'),
				'text' => array('required'),
				'full_text' => array('required'),
				'img_url' => array('mimes:png,gif,jpg,jpeg'),
			);

		$validator = Validator::make($input_value, $input_check);
		if($validator->fails()){
			$error = $validator->messages()->toArray();
			$about_text = About::find('1');
			return  View::make('admin.about.about')->with('about_text',$about_text)->with('error_abouts',$error);
		}
		if(Input::file('image')){
			$about_text = About::find('1');
			if(!empty($about_text->img_url)){
				if(file_exists('public/uploadabout'.$about_text->img_url)){
					unlink('public/uploadabout'.$about_text->img_url);
				}
			}
			$path = 'public/uploadabout';
			$type = Input::file('image')->getClientOriginalExtension();
			$img_name = rand(1111111,9999999).time().".".$type;
			$upload = Input::file('image')->move($path,$img_name);

			$about_text->img_url = $img_name;
			$about_text->title = Input::get('title');
			$about_text->text = Input::get('text');
			$about_text->full_text = Input::get('full_text');
			$about_text->save();
			if($about_text->save()){
				return  View::make('admin.about.about')->with('about_text',$about_text)->with('about_save','');
			}
		}else{
			$about_text = About::find('1');
			$about_text->title = Input::get('title');
			$about_text->text = Input::get('text');
			$about_text->full_text = Input::get('full_text');
			$about_text->save();
			if($about_text->save()){
				return  View::make('admin.about.about')->with('about_text',$about_text)->with('about_save','');
			}
		}

	}

}
