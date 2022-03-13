<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$this->response->body('this is ');
	}
	public function action_echo()
	{
		$saysmt = $this->request->param('id');
		$this->response->body('this is my first time'.$saysmt);
	}

} // End Welcome
<? foreach($posts as $post): ?>
    
    <hr/>
    <h4><?= $post->author ?></h4>
    <p><?= $post->body ?></p>
    <? endforeach; ?>



	$posts = ORM::factory('Posts')->find_all();
		$view = View::factory('blog/index')->bind('posts', $posts);
		$this->response->body($view);