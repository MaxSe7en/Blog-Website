<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog extends Controller {

	
	public function action_index()
	{
		$posts = DB::select()->from('postses')->execute();
		$view = View::factory('blog/index')
		->set('posts', $posts)
		->bind('query', $this->posts);
		View::set_global($posts);
	
		print_r($posts);
		$this->response->body($view);
	
	}
	public function action_addposts()
	{
		if (isset($_REQUEST['submit'])) {
			$title = $_REQUEST['title'];
			$body = $_REQUEST['body'];

			DB::insert('postses', array('title', 'body'=>$title, $body))->execute();
		}
		$view = View::factory('blog/addposts');
		// ->set('posts', $posts)
		// ->bind('query', $this->posts);
	
		print_r('posts');
		$this->response->body($view);
	
	}
	public function action_blogpost1()
	{
		$id = 'id';
		$posts = DB::select()->from('postses')->where($id, '=', 1)->execute();
	
		$view1 = View::factory('blog/blogpost1')
			->set('posts', $posts)
			->bind('query', $this->posts);
		// print_r($posts);
		print_r('posts');

		$this->response->body($view1);
	}
	public function action_blogpost2()
	{
		$id = 'id';
		$posts = DB::select()->from('postses')->where($id, '=', 2)->execute();
		$view = View::factory('blog/blogpost2')
			->set('posts', $posts)
			->bind('query', $this->posts);
		print_r('posts');

		$this->response->body($view);
	}
	public function action_blogpost3()
	{
		$id = 'id';
		$posts = DB::select()->from('postses')->where($id, '=', 3)->execute();
		$view = View::factory('blog/blogpost3')
			->set('posts', $posts)
			->bind('query', $this->posts);
		print_r('posts');

		$this->response->body($view);
	}
	public function action_blogpost4()
	{
		$id = 'id';
		$posts = DB::select()->from('postses')->where($id, '=', 4)->execute();
		$view = View::factory('blog/blogpost4')
			->set('posts', $posts)
			->bind('query', $this->posts);
		print_r('posts');

		$this->response->body($view);
	}
	public function action_blogpost5()
	{
		$id = 'id';
		$posts = DB::select()->from('postses')->where($id, '=', 5)->execute();
		$view = View::factory('blog/blogpost5')
			->set('posts', $posts)
			->bind('query', $this->posts);
		print_r('posts');

		$this->response->body($view);
	}

}