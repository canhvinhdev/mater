<?php
App::uses('AppController', 'Controller');
/**
* Users Controller
*
* @property User $User
* @property PaginatorComponent $Paginator
*/
class UsersController extends AppController {

/**
* Components
*
* @var array
*/
public $components = array('Paginator');
 public function beforeFilter() {
		$this->Auth->allow('admin_forget_password','admin_reset_password');
		parent::beforeFilter();
        
    }

/**
* index method
*
* @return void
*/
public function admin_index() {
	$this->User->recursive = 0;
	$this->set('users', $this->Paginator->paginate());
}
public function admin_login() {
	//die();
	$this->theme = 'Admin'; 
    $this->layout = 'login';    
	if ($this->request->is('post') )
	{	
	$this->request->data['User']['username']=$this->request->data['username'];
	$this->request->data['User']['password']=$this->request->data['password'];
		if ($this->Auth->login()) {
			$this->Session->setFlash('Login Successfull');
			$this->redirect('/admin');
		} else {
			$this->Session->setFlash('Login Incorrect');
		}    
	}
}
public function admin_logout() {
	
	return $this->redirect($this->Auth->logout());
}


/**
* view method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function view($id = null) {
	if (!$this->User->exists($id)) {
		throw new NotFoundException(__('Invalid user'));
	}
	$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
	$this->set('user', $this->User->find('first', $options));
}
public function admin_forget_password(){
	$this->theme = 'Admin'; 
    $this->layout = 'login';  
    if($this->request->is('post'))
		{
			$email = $this->request->data['email'];
			$user = $this->User->find('first',array(
				'conditions'=>array('User.email'=>$email)
				));
			if(empty($user))
			{
				//$this->Session->setFlash(SYS_MSG13,'default',array('class'=>'alert alert-info'));
			}				
			else
			{
				$characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
				$randstring = ""; //random string
				for ($i = 0; $i < 100; $i++)
				{
				    $randstring = $randstring.$characters[rand(0, strlen($characters)-1)];
				}
				$this->User->id = $user['User']['id'];
				if($this->User->saveField('verification_code', $randstring))
				{
					$this->Session->setFlash('Login '.$user['User']['email'].' to verify');
					$Email = new CakeEmail();
					$Email->config('smtp');
					$Email->to($email);
					$Email->subject('Xác minh lấy lại mật khẩu');
					$Email->send('Xác nhận lấy lại mật khẩu tài khoản '.$email .'. Link '.Router::url('/',true ).'users/re_password/'.$randstring);
					//return $this->redirect(array('action' => 'admin_reset_password'));
					
				}
			}
		}
}

public function re_password($code = null)
{
	
	$this->theme = 'Admin'; 
    $this->layout = 'login'; 
    
	if(isset($code))
	{		
		$user = $this->User->find('first',array(
				'conditions'=>array('User.verification_code'=>$code)
				));
		if(empty($user)){
			$this->Session->setFlash('ERROR');

		} 
		else
		{
			
			if($this->request->is('post')){
			   $this->User->id = $user['User']['id'];
			   if($this->User->saveField('password', $this->request->data['password'])){
			   		$this->User->saveField('verification_code', ' ');
					$this->redirect('/admin');					
				}	
			}
		}
	}
}

/**
* add method
*
* @return void
*/
public function admin_add() {
	if ($this->request->is('post')) {
		$this->User->create();
		$this->request->data['User']['group_id']=1;
		if ($this->User->save($this->request->data)) {
			$this->Session->setFlash(__('Thêm người dùng thành công.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
			return $this->redirect(array('action' => 'admin_index'));
		} else {
			$this->Session->setFlash(__('Thêm người dùng thất bại.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
		}
	}
	$groups = $this->User->Group->find('list');
	$this->set(compact('groups'));
}

/**
* edit method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function admin_edit($id = null) {
	if (!$this->User->exists($id)) {

		throw new NotFoundException(__('Invalid user'));
	}
	if ($this->request->is(array('post', 'put'))) {
		 $this->request->data['User']['group_id']=1;
		 $this->request->data['User']['id']=$id;
		if ($this->User->save($this->request->data)) {
			$this->Session->setFlash(__('Sửa người dùng thành công.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
			return $this->redirect(array('action' => 'admin_index'));
		} else {
			$this->Session->setFlash(__('Sửa người dùng thất bại.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
		}
	} else {
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->request->data = $this->User->find('first', $options);
	}
	$groups = $this->User->Group->find('list');
	$this->set(compact('groups'));
}

/**
* delete method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function admin_delete($id = null) {
	$this->User->id = $id;
	if (!$this->User->exists()) {
		throw new NotFoundException(__('Invalid user'));
	}
	if ($this->User->delete()) {
		 $this->Session->setFlash(__('xóa người dùng thành công.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
	} else {
		 $this->Session->setFlash(__('xóa người dùng thất bại.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
	}
	return $this->redirect(array('action' => 'admin_index'));
}

}
