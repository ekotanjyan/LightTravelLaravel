<?php

class GalleryController extends BaseController {
	public function index(){
		$gallery = Gallery::all();
		return View::make('admin.gallery.gallery')->with('gallery_img',$gallery);
	}

	public function AddGallery(){
		return View::make('admin.gallery.gallery')->with('addgallery','addgallery');
	}

	public function AddGallerySave() {
		$array_value = array(
				'img' => Input::file('image'),
			);
		$array_check = array(
				'img' => array('required','mimes:png,gif,jpg,jpeg'),
			);

		$validator = Validator::make($array_value,$array_check);
		if($validator->fails()){
			$error = $validator->messages()->toArray();
			$gallery = Gallery::all();
			return View::make('admin.gallery.gallery')->with('gallery_img',$gallery)->with('error_gallery',$error);
		}else{
			$path = 'uploadgallery';
			$type = Input::file('image')->getClientOriginalExtension();
			$imgName = rand(1111111,9999999).time().".".$type;
			$upload = Input::file('image')->move($path,$imgName);

			if($upload){
				$gallery = new Gallery();
				$gallery->img = $imgName;
				$gallery->save();
				if($gallery->save()){
					$gallery = Gallery::all();
					return View::make('admin.gallery.gallery')->with('gallery_img',$gallery)->with('gallery_ok','');
				}
			}
		}

	}

	public function deletegallery($id){
		$gallery = Gallery::find($id);
		$img =  $gallery->img;
		if(!empty($img)){
			if(file_exists('uploadgallery/'.$img)){
				unlink('uploadgallery/'.$img);
			}
		}
		$gallery->delete();
		$gallery = Gallery::all();
		return View::make('admin.gallery.gallery')->with('gallery_img',$gallery);
	}

	public function editgallery($id){
		$gallery = Gallery::find($id);
		return View::make('admin.gallery.gallery')->with('edit_gallery',$gallery);
	}

	public function EditGallerySave($id){
		$input_value = array(
				'image' => Input::file('image'),
			);
		$input_check = array(
				'image' => array('required','mimes:png,gif,jpg,jpeg'),
			);

		$validator = Validator::make($input_value, $input_check);
		if($validator->fails()){
			$error = $validator->messages()->toArray();
			$gallery = Gallery::all();
			return View::make('admin.gallery.gallery')->with('gallery_img',$gallery)->with('error_gallery',$error);
		}else{
			$gallery = Gallery::find($id);
			$img =  $gallery->img;
			if(!empty($img)){
				if(file_exists('public/uploadgallery/'.$img)){
					unlink('public/uploadgallery/'.$img);
				}
			}
			$path = 'uploadgallery';
			$type = Input::file('image')->getClientOriginalExtension();
			$imgName = rand(1111111,9999999).time().".".$type;
			$upload = Input::file('image')->move($path,$imgName);

			if($upload){
				$gallery->img = $imgName;
				$gallery->save();
				if($gallery->save()){
					$gallery = Gallery::all();
					return View::make('admin.gallery.gallery')->with('gallery_img',$gallery)->with('edit_gallery_save','');
				}
			}
		}

	}


	public function Renametitle(){
		$gallery = Gallery::find('1');
		return View::make('admin.gallery.gallery')->with('title_rename',$gallery);
	}

	public function TitleSave($id){
		//$gallery = Gallery::find($id);
		$input_value = array(
				'title' => Input::get('text'),
			);
		$input_check = array(
				'title' => array('required'),
			);
		$validator = Validator::make($input_value, $input_check);
		if($validator->fails()){
			$error = $validator->messages()->toArray();
			$gallery = Gallery::all();
			return View::make('admin.gallery.gallery')->with('gallery_img',$gallery)->with('error_gallery',$error);
		}else{
			$gallery = Gallery::find($id);
			$gallery->title = Input::get('text');
			$gallery->save();
			if($gallery->save()){
				$gallery = Gallery::all();
				return View::make('admin.gallery.gallery')->with('gallery_img',$gallery)->with('edit_gallery_save','');
			}
		}
	}


}
