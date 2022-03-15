<?php defined('SYSPATH') or die('No direct script access.');
//Controller/Test.php
class Controller_Test extends Controller_Rest
{
    protected $_rest;
    // saying the user must pass an API key.It is set according to the your requirement
    //protected $_auth_type = RestUser::AUTH_TYPE_APIKEY;
    // saying the authorization data is expected to be found in the request's query parameters.
    //protected $_auth_source = RestUser::AUTH_SOURCE_GET;//depends on requirement/coding style
    //note $this->_user is current Instance of RestUser Class

    public function before()
    {
        parent::before();
        //An extension of the base model class with user and ACL integration.
        $this->_rest = Model_RestAPI::factory('RestUserData', $this->_user);

    }
    //Get API Request
    public function action_index()
    {

        try
        {

                $user = $this->_user->get_name();
                if ($user)
                {
                    $this->rest_output( array(
                        'user'=>$user,

                    ) );
                }
                else
                {
                    return array(
                        'error'
                    );
                }
        }
        catch (Kohana_HTTP_Exception $khe)
        {
            $this->_error($khe);
            return;
        }
        catch (Kohana_Exception $e)
        {
            $this->_error('An internal error has occurred', 500);
            throw $e;
        }

    }
    //POST API Request
    public function action_create()
    {
        //logic to create 
        try
        {
            //create is a method in RestUserData Model
            $this->rest_output( $this->_rest->create( $this->_params ) );
        }
        catch (Kohana_HTTP_Exception $khe)
        {
            $this->_error($khe);
            return;
        }
        catch (Kohana_Exception $e)
        {
            $this->_error('An internal error has occurred', 500);
            throw $e;
        }
    }
    //PUT API Request
    public function action_update()
    {
        //logic to create
    }
    //DELETE API Request
    public function action_delete()
    {
        //logic to create
    }

}