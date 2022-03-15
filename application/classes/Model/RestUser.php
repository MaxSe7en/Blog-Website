<?php
// Model/RestUser.php
class RestUser extends Kohana_RestUser {
    protected $user='';
    protected function _find()
    {

    //generally these are stored in databases 
    $api_keys=array('abc','123','testkey');

    $users['abc']['name']='Harold Finch';
    $users['abc']['roles']=array('admin','login');

    $users['123']['name']='John Reese';
    $users['123']['roles']=array('login');

    $users['testkey']['name']='Fusco';
    $users['testkey']['roles']=array('login');

    foreach ($api_keys as $key => $value) {
        if($value==$this->_api_key){
            //the key is validated which is authorized key
            $this->_id = $key;//if this not null then controller thinks it is validated
            //$this->_id must be set if key is valid.
            //setting name
            $this->user = $users[$value];
            $this->_roles = $users[$value]['roles']; 
            break;

        }
    }


    }//end of _find
    public function get_user()
    {
        return $this->name;
    }
}//end of RestUser