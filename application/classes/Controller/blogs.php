<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blogs extends Controller {

	
	public function action_index()
	{
		$default = Database::instance();
		$posts = DB::select()->from('postses')->execute();
		$view = View::factory('blog/index')
		->set('posts', $posts)
		->bind('query', $this->posts);
		View::set_global($posts);
	
		print_r($posts);
		$this->response->body($view);
	
	}

}