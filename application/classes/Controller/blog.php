<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog extends Controller {

	
	public function action_index()
	{ 
		$posts = DB::select()->from('postses')->execute();
		$view = View::factory('blog/index')
		->set('posts', $posts)
		->bind('query', $this->posts);
		$this->response->body($view);
	
	}
	public function action_addposts()
	{
		$view = View::factory('blog/addposts');
	
		$this->response->body($view);
	
	}
	public function action_deletepost()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 0;

		$posts = DB::select()->from('postses')->where('id', '=', $id)->execute();
		$view = View::factory('blog/deletepost')
		->set('posts', $posts)
			->bind('query', $this->posts);
	
		$this->response->body($view);
	
	}
	public function action_updatepost()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 0;

		$posts = DB::select()->from('postses')->where('id', '=', $id)->execute();
		$view = View::factory('blog/updatepost')
		->set('posts', $posts)
		->bind('query', $this->posts);
	
		$this->response->body($view);
	
	}
	public function action_createposts()
	{
		$view = View::factory('blog/createposts');
	
		$this->response->body($view);
	
	}
	public function action_blogpost()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$posts = DB::select()->from('postses')->where('id', '=', $id)->execute();
	
		$view1 = View::factory('blog/blogpost')
			->set('posts', $posts)
			->bind('query', $this->posts);

		$this->response->body($view1);
	}
	

}