<?php

class AddUserController extends BaseController {
	public function index(){
		return View::make('admin.user.user');
	}

	public function Addnewuser(){
		$input_value = array(
				'name' => Input::get('name'),
				'password' => Input::get('password'),
				'email' => Input::get('email'),
			);
		$input_check = array(
				'name' => array('required','unique:user'),
				'password' => array('required'),
				'email' => array('required','email'),
			);

		$data = array(
			'detail'=>'Your awesome detail here',
			'name' => Input::get('name'),
		);

		$user = array(
			'email' => Input::get('email'),
			'name' => Input::get('name'),
		);

		$validation = Validator::make($input_value, $input_check);
		if($validation->fails()){
			$error = $validation->messages()->toArray();
			echo "<pre>";
				print_r($error);
			echo "</pre>";
		}else{
			$user = new User();
			$user->name = Input::get('name');
			$user->password = Hash::make(Input::get('name'));
			$user->save();
			Mail::send('emails.welcome', $data, function($message) use ($user)
			{
			  $message->from('admin@site.com', 'Site Admin');
			  $message->to(Input::get('email'), Input::get('name'))->subject('Welcome to My Laravel app!');
			});
		}

	}
}
/*$user = array(
	'email'=>'myemail@mailserver.com',
	'name'=>'Laravelovich'
);

// the data that will be passed into the mail view blade template
$data = array(
	'detail'=>'Your awesome detail here',
	'name'	=> $user['name'];
);
*/
// use Mail::send function to send email passing the data and using the $user variable in the closure
/*Mail::send('emails.welcome', $data, function($message) use ($user)
{
  $message->from('admin@site.com', 'Site Admin');
  $message->to($user['email'], $user['name'])->subject('Welcome to My Laravel app!');
});
*/
