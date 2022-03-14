<?php defined('SYSPATH') or die('No direct script access.');
abstract class Controller_Global extends Controller_Template {

// public function action_index()
// {
//     $posts = ORM::factory('Posts')->find_all();
// 	$view = new View('blog/index');
// 	$this->response->body($view->body);
// 	// $this->response->body($view->render('blog/index'))->bind('posts', $posts);
public $posts =DB::select()->from('postses')->execute();
public function before()
{
    parent::before();
View::bind_global('posts', $posts);
    // $default = Database::instance();
    // $posts = DB::select()->from('postses')->execute();
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

}