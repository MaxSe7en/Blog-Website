<?php defined('SYSPATH') or die('No direct script access.');
abstract class Controller_MyGlobal extends Controller_Template {
    public $posts;
    public function before()
    {
        parent::before();
        View::bind_global('posts', $posts);
    }

}