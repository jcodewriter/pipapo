<?php 


namespace App\Controller\Pipapoadmin;
use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;

    class AdminController extends AppController
    {
    	public function initialize(){
    		parent::initialize();
    		$this->loadModel('Admin');
    		$this->Auth->allow('login');
    	}
        public function index()
        {
            $this->redirect('/pipapoadmin');
        }
    	public function login()
    	{
            $status=[];
    		$this->viewBuilder()->setLayout(false);
    		// $hasher = new DefaultPasswordHasher();
    		// $data=array(
    		// 	'username'	=>'admin',
    		// 	'password'	=>$hasher->hash(123456),
    		// 	'name'		=>'Admin',
    		// 	'email'		=>'info@pipapo.at',
    		// );
    		// $new=$this->Admin->newEntity();
    		// $new=$this->Admin->patchEntity($new,$data);
    		// $this->Admin->save($new);
    		// die;
    		if($this->request->is('post'))
    		{
    			$user=$this->Auth->identify();

	    		if(!empty($user) && !empty($user['id'])){
	    			$this->Auth->setUser($user);
	    			 return $this->redirect($this->Auth->redirectUrl());
	    		}else{
                    $status['code']=0;
                    $status['extra'][]='Invalid Username/Password';
                }
    		}
            $this->set(compact('status'));
    	}

        public function settings(){
            $admin=$this->Admin->find('all')->first();
            $this->set(compact('admin'));
            $status=[];
            if($this->request->is('post'))
            {
                $hasher = new DefaultPasswordHasher();
                if($hasher->check($this->request->getData('oldpassword'), $admin->password))
                {
                    if($this->request->getData('repassword') == $this->request->getData('password'))
                    {
                        $admin=$this->Admin->patchEntity($admin,$this->request->getData());
                        $admin->password=$hasher->hash($admin->password);
                        if($this->Admin->save($admin))
                        {
                            $status['code']=1;
                            $status['message']='Password successfully changed';
                        }else{
                            $status['code']=0;
                            $status['extra'][]='Something went Wrong';
                        }
                    }else{
                        $status['code']=0;
                        $status['extra'][]='Confirm Password did not match!';
                    }
                }else{
                    $status['code']=0;
                    $status['extra'][]='Invalid old Password';
                }
            }
            $this->set(compact('status'));
        }
    	public function logout()
    	{
    		$this->redirect($this->Auth->logout());
    	}

    }