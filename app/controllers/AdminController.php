<?php

class AdminController extends BaseController {

	public function index(){
		return View::make('main.login');
	}


	public function logincheck(){
		$input_value = array(
				'name' => Input::get('name'),
				'password' => Input::get('password'),
			);
		$input_check = array(
				'name' => array('required','min:4'),
				'password' => array('required','min:4','Alpha'),
			);

		$validation = Validator::make($input_value,$input_check);
		if($validation->fails()){
			$error_login = $validation->messages()->toArray();
			return View::make('main.login')->with('error_login',$error_login);
		}else{
			if(Auth::attempt(array('name' => Input::get('name'), 'password' => Input::get('password')))){
				return Redirect::to('admin');
			}else{
				/*return Redirect::to('signin')->with('error','username or password incorrect');*/
				$error = 'Username or password incorrect';
				return View::make('main.login')->with('error',$error);
			}
		}
	}

	public function showIndex() {
		return View::make('admin.index');
	}

	public function content() {
		return View::make('admin.content');
	}

	public function slider(){
		$sliderImages = SliderImages::all();
		return View::make('admin.slider.slider')->with('slider',$sliderImages);
	}

	public function upload(){
		$input_value = array(
				'img_url'=>Input::file('image'),
				'name'=>Input::get('name'),
				'description'=>Input::get('description'),
			);
		$input_check = array(
				'img_url'=>array('required','mimes:png,gif,jpeg,jpg'),
				'name'=>array('required'),
				'description'=>array('required'),
			);
		$validator = Validator::make($input_value,$input_check);
		if($validator->fails()){
			$error = $validator->messages()->toArray();
			$index = SliderImages::all();
			return View::make('admin.slider.sliderAdd')->with('slider',$index)->with('error',$error);
		}else{
			$type = Input::file('image')->getClientOriginalExtension();
			$fileName = rand(1111111,9999999).time().".".$type;
			$path = 'upload';
			$upload = Input::file('image')->move($path, $fileName);
           // var_dump($upload);die;
			if($upload){
				$index = new SliderImages();
				$index->img_url = $fileName;
				$index->name = Input::get('name');
				$index->description = Input::get('description');
				$index->save();
				return Redirect::to('slider')->with('save_img','save');
			}
		}

	}

	public function sliderAdd(){
		return View::make('admin.slider.sliderAdd');
	}



	public function delete_img($id){
		$index = SliderImages::find($id);
		if(file_exists('public/upload/'.$index->img_url)){
			unlink('public/upload/'.$index->img_url);
		}
		$index->delete();
		return Redirect::to('slider');
	}

	public function top(){
		$top = Top::all();
		return View::make('admin.top.top')->with('top',$top);
	}

	public function editslide($id){
		$top = Top::find($id);
		return View::make('admin.top.top')->with('topid',$top);
	}

	public function topImg($id){
		$input_value = array(
				'title' => Input::get('title'),
				'text' => Input::get('text'),
				'img_url' => Input::file('image'),
			);
		$input_check = array(
				'title' => array('required'),
				'text' => array('required'),
				'img_url' => array('mimes:png,gif,jpeg,jpg'),
			);

		$validator = Validator::make($input_value,$input_check);
		if($validator->fails()){
			$error = $validator->messages()->toArray();
			$top = Top::find($id);
			return View::make('admin.top.top')->with('topid',$top)->with('error_top',$error);
		}else{

			if(empty(Input::file('image'))){
				$top = Top::find($id);
				$top->title = Input::get('title');
				$top->text = Input::get('text');
				$top->img_name = Input::get('img_name');
				$top->save();
				return Redirect::to('top').with('update_img','save');
			}else{
				$path = 'uploadtop';
				$type = Input::file('image')->getClientOriginalExtension();
				$imgName = rand(1111111,9999999).time().".".$type;
				$upload = Input::file('image')->move($path,$imgName);
				if($upload){
					$top = Top::find($id);
					$top->img_url = $imgName;
					$top->title = Input::get('title');
					$top->text = Input::get('text');
					$top->img_name = Input::get('img_name');
					$top->save();
					return Redirect::to('top').with('update_img','save');
				}
			}
		}
	}

	public function deleteslide($id){
		$top = Top::find($id);
		if(file_exists('uploadtop/'.$top->img_url)){
			unlink('uploadtop/'.$top->img_url);
		}
		$top->delete();
		return Redirect::to('top');
	}

	public function addslidertop(){
		return View::make('admin.top.top')->with('add','add');
	}

	public function addtopimg() {
		$input_value = array(
				'title' => Input::get('title'),
				'text' => Input::get('text'),
				'img_url' => Input::file('image'),
			);
		$input_check = array(
				'title' => array('required'),
				'text' => array('required'),
				'img_url' => array('required','mimes:png,gif,jpeg,jpg'),
			);

		$validation = Validator::make($input_value,$input_check);
		if($validation->fails()){
			$error = $validation->messages()->toArray();
			return View::make('admin.top.top')->with('add','add')->with('error_add',$error);
		}else{
			$type = Input::file('image')->getClientOriginalExtension();
			$imgName = rand(1111111,9999999).time().".".$type;
			$path = 'uploadtop';
			$upload = Input::file('image')->move($path,$imgName);
			if($upload){
				$top = new Top();
				$top->img_url = $imgName;
				$top->title = Input::get('title');
				$top->text = Input::get('text');
				$top->save();
				return Redirect::to('addslidertop')->with('update_img','save');
			}
		}
	}

	public function tab(){
		$tab = TabCategoris::all();
		return View::make('admin.tab.tab')->with('tab', $tab);
	}

	public function tabid($id){
		$tab = TabCategoris::where('parent_id', '=', $id)->get();
		return View::make('admin.tab.tab')->with('tabid', $tab);
	}

	public function edit_title($id){
		$tab = TabCategoris::find($id);
		return View::make('admin.tab.tab')->with('editid', $tab);
	}

	public function edittab($id){
		$input_value = array(
				'title' => Input::get('title'),
				'text' => Input::get('text'),
				'img_url' => Input::file('image'),
			);
		$input_check = array(
				'title' => array('required'),
				'text' => array('required'),
				'img_url' => array('mimes:png,gif,jpg,jpeg'),
			);
		$validator = Validator::make($input_value,$input_check);
		if($validator->fails()){
			$error = $validator->messages()->toArray();
			$tab = TabCategoris::find($id);
			return View::make('admin.tab.tab')->with('editid', $tab)->with('error_tab',$error);
		}
		if(Input::file('image')){
			$tab = TabCategoris::find($id);
			$img_delete = $tab->img_url;
			if(!empty($img_delete)){
				if(file_exists('uploadtab/'.$img_delete)){
					unlink('uploadtab/'.$img_delete);
				}
			}
			$path = 'uploadtab';
			$type = Input::file('image')->getClientOriginalExtension();
			$imgName = rand(1111111,9999999).time().".".$type;
			$upload = Input::file('image')->move($path,$imgName);
			if($upload){
				$tab = TabCategoris::find($id);
				$tab->img_url = $imgName;
				$tab->title = Input::get('title');
				$tab->text = Input::get('text');
				$tab->save();
				if($tab->save()){
					return Redirect::to('edit_title/'.$id)->with('edit_tab_true','save');
				}
			}
		}else{
				$tab = TabCategoris::find($id);
				$tab->title = Input::get('title');
				$tab->text = Input::get('text');
				$tab->save();
				if($tab->save()){
					return Redirect::to('edit_title/'.$id)->with('edit_tab_true','save');
				}
			}
	}

	public function renameid($id){
		$tab = TabCategoris::find($id);
		return View::make('admin.tab.tab')->with('rename_tab',$tab);
	}


	public function editrename($id){
		$input_value = array(
				'tab_name' => Input::get('tab_name'),
			);
		$input_check = array(
				'tab_name' => array('required','unique:tabcategorys'),
			);
		$validator = Validator::make($input_value, $input_check);
		if($validator->fails()){
			$error = $validator->messages()->toArray();
			$tab = TabCategoris::find($id);
			return View::make('admin.tab.tab')->with('rename_tab',$tab)->with('empty_rename',$error);
		}else{
			$tab = TabCategoris::find($id);
			$tab->tab_name = Input::get('tab_name');
			$tab->save();
		}

	}

}
