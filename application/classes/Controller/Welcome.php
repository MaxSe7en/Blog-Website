<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	// public function action_index()
	// {
    //     $posts = ORM::factory('Posts')->find_all();
	// 	$view = new View('blog/index');
	// 	$this->response->body($view->body);
	// 	// $this->response->body($view->render('blog/index'))->bind('posts', $posts);
	// 	$this->response->body($posts[1]->body);
	// 	print_r($posts);
	// }
	public function action_index()
	{
		$default = Database::instance();
		$posts = DB::select()->from('postses')->execute();
		$view = View::factory('blog/index')
		->set('posts', $posts)
		->bind('query', $this->posts);
		print_r($posts);
		// foreach($posts as $post){
		// 	// echo $quer['body'];
		// 	echo $post['author'];

		// }
		$this->response->body($view);
	}
	// public function action_echo()
	// {
	// 	$saysmt = $this->request->param('id');
	// 	$this->response->body('this is my first time'.$saysmt);
	// }

}