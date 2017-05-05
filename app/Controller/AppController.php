<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('File', 'Utility');
App::uses('Folder', 'Utility');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array(
        'Tool',
        'RequestHandler',
        'Session',
        'DebugKit.Toolbar',
        'Auth' => array( //them
            'loginAction' => array(
                'controller' => 'users',
                'action' => 'login',
                'manager' => false,
                'admin' => true),
            'authenticate' => array(
                'Form' => array(
                    'fields' => array('username' => 'username','password'=>'password')
                )
            )
        )
    );
	public function beforeFilter()
    {
        //$this->Auth->allow();
        //$this->bussiness();
    	if(isset($this->request->params['prefix']) && $this->request->params['prefix'] ==
            'admin') {
            $admin=$this->get_user(); 
            $this->theme = 'Admin'; 
        } else {
            $this->Auth->allow();
            $this->theme = 'Truck';	
            $this->menu();			
        }
    }
    public function contact(){
        $this->loadModel('Contact');
         $contacts = $this->Contact->find('all',
            array(
                'conditions' => array('Contact.publish' => 0)
            )
         );
         return $contacts;
    }
    public function new_right(){
         $this->loadModel('Post');
         $count=$this->bussiness();
         $menu = $this->Post->find('all',
                array(
                    'conditions' => array('Post.publish' => 1),
                    'limit' => $count['number_new'],
                    'order' => array('Post.created' => 'desc')
                )
                

            );
         return $menu;
    }
    public function get_user()
    { //them

        $user = $this->Auth->user();
        if ($user) {
            return $user;
        } else {
            $user = null;
        }
        return $user;
    }
    public function menu(){
         $this->loadModel('Category');
         $products = $this->Category->find('all',
                array(
                    'conditions' => array('publish' => 1,'type'=>0),
                    'fields' => array('name', 'slug', 'meta_keyword', 'meta_description', 'type', 'created', 'id', 'description','publish'),
                )
        );
         $news = $this->Category->find('all',
                array(
                    'conditions' => array('publish' => 1,'type'=>1),
                    'fields' => array('name', 'slug', 'meta_keyword', 'meta_description', 'type', 'created', 'id', 'description','publish'),
                )
              

            );
         $menu['products']=$products; 
         $menu['news']=$news;   
         return $menu;
    }
    public function UploadFile($folder,$model,$name){
        $allow_ext = array('jpg', 'png', 'jpeg','pjpeg','PNG');
       
        $file = new File($this->request->data[$model][$name]['tmp_name']);
        $arr = explode('.',$this->request->data[$model][$name]['name']);
        $png = explode('/',$this->request->data[$model][$name]['type']);
        $ext = end($arr);
        $png = end($png);
        if(in_array($ext, $allow_ext))
        {
            $filename = $png.'_'.$this->request->data[$model]['link'].$arr[0].'.'.$ext;
            
            if($file->copy(APP . 'webroot/uploads/' .$folder . '/' . $filename))
            {
               
                $result = array(
                    'filename' => $filename,
                    'status' => true
                );
            }
            else
            {
                $result = array(
                    'status' => false
                );
            }
        }
        else
        {
            $result = array(
                'status' => false
            );
        }
        return $result;
    } 
    public function bussiness(){
        $this->loadModel('Bussiness');
        $products = $this->Bussiness->find('all');
        //pr($products);die();
        return  $products[0]['Bussiness'];
    }
     public function supporter(){
        $this->loadModel('Supporter');
        $supporter = $this->Supporter->find('all');
       // pr($supporter);die();
        return  $supporter;
    }
}
