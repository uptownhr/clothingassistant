<?php

class My_Controller extends Jien_Controller {

    public function init(){
    	parent::init();

    	// if it doesn't exist, it will use the default
    	$theme = THEME;
    	$this->view->addScriptPath(APPLICATION_PATH.'/views/'.$theme.'/');
    	$this->layout('site');

    	// set title
    	$this->view->title = TITLE;
    }

    public function setGender($gender){
        $_SESSION['user']['gender'] = $gender;
    }
    
    public function setUserBrands($brands){
        if( is_array($brands) ){
            $_SESSION['user']['brands'] = $brands;
        }else{
            $_SESSION['user']['brands'][] = $brands;
        }
    }
    
    public function getUser(){
        if( empty($_SESSION['user']) ){
            return false;
        }else{
            return $_SESSION['user'];
        }
    }
}
