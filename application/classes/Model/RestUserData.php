<?php
//Model/RestUserData.php
class Model_RestUserData extends Model_RestAPI {

        public function create($params)
        {
            //logic to store data in db
            //You can access $this->_user here
            DB::insert('postses', array('title', 'body'=>'$title', '$body'))->execute();
            // if (isset($_REQUEST['submit'])) {
            //     $title = $_REQUEST['title'];
            //     $body = $_REQUEST['body'];
    
            //     DB::insert('postses', array('title', 'body'=>$title, $body))->execute();
            // }
        }

}