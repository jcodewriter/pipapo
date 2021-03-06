<?php 


namespace App\Controller\Pipapoadmin;
use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

    class SettingsController extends AppController
    {
    	public function initialize()
    	{
    		parent::initialize();
    		$this->loadModel('SettingTitle');
    		$this->loadModel('SettingHome');
    		$this->loadModel('SettingMenu');
    		$this->loadModel('SettingAbout');
    		$this->loadModel('SettingGallery');
    		$this->loadModel('SettingContact');
    		$this->loadModel('SettingBusiness');
    		$this->loadModel('SettingSocial');
    	}
    	public function beforeFilter(Event $events){
	        $SettingBusiness=$this->SettingBusiness->find('all')->first();
	        $this->set(compact('SettingBusiness'));
    	}
    	public function index()
	    {
	    	
	    }
	    public function titleAndIcon()
	    {
	    	$save=0;
	    	$status=[];
	    	if($this->request->is('post'))
	    	{
	    		$site=$this->SettingTitle->find('all')->first();
	    		if($site)
	    		{
	    			$site->title=$this->request->getData('title');
	    			if($this->SettingTitle->save($site))
	    			{
	    				$save=1;
	    				$status=['code'=>1,'message'=>'Successfully Updated','extra'=>[]];
	    			}
	    		}else{
	    			$create_new=$this->SettingTitle->newEntity();
	    			$data=[
	    				'title'=>$this->request->getData('title'),
	    				'favicon'=>'favicon.ico',
	    				'logo'=>'logo.png',
	    			];
	    			$create_new = $this->SettingTitle->patchEntity($create_new, $data);
	    			if($this->SettingTitle->save($create_new))
	    			{
	    				$save=1;
	    				$status=['code'=>1,'message'=>'Successfully updated','extra'=>[],];
	    			}
	    		}
	    		if($save==1)
	    		{
	    			$site=$this->SettingTitle->find('all')->first();
	    			if (!is_dir(WWW_ROOT.'home/content'))
	                {
	                    mkdir(WWW_ROOT.'home/content');
	                }
	    			// pr($_POST);
	    			// pr($_FILES);

	    			if(!empty($_FILES['favicon']['name']) && ($_FILES['favicon']['type']=='image/png' || $_FILES['favicon']['type']=='image/x-icon'))
	    			{
			            if (file_exists(WWW_ROOT.'home/content/favicon.ico'))
			            {
			            	unlink(WWW_ROOT.'home/content/favicon.ico');
			            }
			            if(file_exists(WWW_ROOT.'home/content/favicon.png'))
			            {
			            	unlink(WWW_ROOT.'home/content/favicon.png');
			            }
			            if($_FILES['favicon']['type']=='image/png'){
			            	move_uploaded_file($_FILES['favicon']['tmp_name'], WWW_ROOT.'home/content/favicon.png');
			            	$site->favicon='favicon.png';  //save favicon.png
			            }
			            if($_FILES['favicon']['type']=='image/x-icon'){
			            	move_uploaded_file($_FILES['favicon']['tmp_name'], WWW_ROOT.'home/content/favicon.ico');
			            	$site->favicon='favicon.ico'; //save favicon.ico
			            }
	    			}else if(!empty($_FILES['favicon']['name'])){
	    				$status['extra'][]='Invalid favicon icon, only .ico and .png supported';
	    			}


	    			if(!empty($_FILES['logo']['name']) && ($_FILES['logo']['type']=='image/png'))
	    			{
	    				if(file_exists(WWW_ROOT.'home/content/logo.png'))
			            {
			            	unlink(WWW_ROOT.'home/content/logo.png');
			            }
			            move_uploaded_file($_FILES['logo']['tmp_name'], WWW_ROOT.'home/content/logo.png');
			            	$site->logo='logo.png';  //save favicon.png
	    			}else if(!empty($_FILES['logo']['name'])){
	    				$status['extra'][]='Invalid logo, only .png supported';
	    			}
	    			if($this->SettingTitle->save($site)){

	    			}
	    		}
	    		// pr($status);
	    		// exit;
	    	}
	    	$settingTitle=$this->SettingTitle->find('all')->first();
	    	$this->set(compact('settingTitle'));
	    	$this->set(compact('status'));
	    }

	    public function home()
	    {
	    	$save=0;
	    	$status=[];
	    	if($this->request->is('post'))
	    	{
	    		$site=$this->SettingHome->find('all')->first();
	    		if($site)
	    		{
	    			$site->title=$this->request->getData('title');
	    			$site->subtitle=$this->request->getData('subtitle');
	    			$site->button1=$this->request->getData('button1');
	    			$site->button2=$this->request->getData('button2');
	    			if($this->SettingHome->save($site))
	    			{
	    				$save=1;
	    				$status=['code'=>1,'message'=>'Successfully Updated','extra'=>[]];
	    			}
	    		}else{
	    			$create_new=$this->SettingHome->newEntity();
	    			$data=[
	    				'title'=>$this->request->getData('title'),
	    				'subtitle'=>$this->request->getData('subtitle'),
		    			'button1'=>$this->request->getData('button1'),
		    			'button2'=>$this->request->getData('button2'),
	    			];
	    			$create_new = $this->SettingHome->patchEntity($create_new, $data);
	    			if($this->SettingHome->save($create_new))
	    			{
	    				$save=1;
	    				$status=['code'=>1,'message'=>'Successfully updated','extra'=>[],];
	    			}
	    		}
	    		if($save==1)
	    		{

	    			// pr($_FILES);
	    			// exit;
	    			$site=$this->SettingHome->find('all')->first();
	    			if (!is_dir(WWW_ROOT.'home/content'))
	                {
	                    mkdir(WWW_ROOT.'home/content');
	                }
	    			// // pr($_POST);
	    			// // pr($_FILES);
	    			if(!empty($_FILES['background_image']['name']) && ($_FILES['background_image']['type']=='image/png' || $_FILES['background_image']['type']=='image/jpeg'))
	    			{
	    				if(file_exists(WWW_ROOT.'home/content/home.png'))
			            {
			            	unlink(WWW_ROOT.'home/content/home.png');
			            }
			            if(file_exists(WWW_ROOT.'home/content/home.jpg'))
			            {
			            	unlink(WWW_ROOT.'home/content/home.jpg');
			            }
			            // die;
			            if($_FILES['background_image']['type']=='image/jpeg')
			            {
			            	move_uploaded_file($_FILES['background_image']['tmp_name'], WWW_ROOT.'home/content/home.jpg');
			            	$site->background_image='home.jpg';
			            }
			            if($_FILES['background_image']['type']=='image/png')
			            {
			            	move_uploaded_file($_FILES['background_image']['tmp_name'], WWW_ROOT.'home/content/home.png');
			            	$site->background_image='home.png';
			            }
			           
	    			}else if(!empty($_FILES['background_image']['name'])){
	    				$status['extra'][]='Invalid background image, .jpg and .png supported';
	    			}
	    			if($this->SettingHome->save($site)){

	    			}
	    		}
	    		// pr($status);
	    		// exit;
	    	}
	    	$settingHome=$this->SettingHome->find('all')->first();
	    	$this->set(compact('settingHome'));
	    	$this->set(compact('status'));
	    }
    public function menu()
    {
	    	$save=0;
	    	$status=[];
	    	if($this->request->is('post'))
	    	{
	    		$site=$this->SettingMenu->find('all')->first();
	    		if($site)
	    		{
	    			$site->title=$this->request->getData('title');
	    			$site->subtitle=$this->request->getData('subtitle');
	    			$site->download_button_title=$this->request->getData('download_button_title');

	    			if($this->SettingMenu->save($site))
	    			{
	    				$save=1;
	    				$status=['code'=>1,'message'=>'Successfully Updated','extra'=>[]];
	    			}
	    		}else{
	    			$create_new=$this->SettingMenu->newEntity();
	    			$data=[
	    				'title'=>$this->request->getData('title'),
	    				'subtitle'=>$this->request->getData('subtitle'),
		    			'download_button_title'=>$this->request->getData('download_button_title'),
		    			// 'button2'=>$this->request->getData('button2'),
	    			];
	    			$create_new = $this->SettingMenu->patchEntity($create_new, $data);
	    			if($this->SettingMenu->save($create_new))
	    			{
	    				$save=1;
	    				$status=['code'=>1,'message'=>'Successfully updated','extra'=>[],];
	    			}
	    		}
	    		if($save==1)
	    		{
	    			// pr($_FILES);
	    			// die;
	    			$site=$this->SettingMenu->find('all')->first();
	    			if (!is_dir(WWW_ROOT.'home/content'))
	                {
	                    mkdir(WWW_ROOT.'home/content');
	                }
	    			// // pr($_POST);
	    			// // pr($_FILES);
	    			if(!empty($_FILES['menu_file']['name']) && $_FILES['menu_file']['type']=='application/pdf' )
	    			{
	    				if(file_exists(WWW_ROOT.'home/content/speisekarte_'.date('y-m-d').'.pdf'))
			            {
			            	unlink(WWW_ROOT.'home/content/speisekarte_'.date('y-m-d').'.pdf');
			            }
			            move_uploaded_file($_FILES['menu_file']['tmp_name'], WWW_ROOT.'home/content/speisekarte_'.date('y-m-d').'.pdf');
			            $site->menu_file='speisekarte_'.date('y-m-d').'.pdf';
			           
	    			}else if(!empty($_FILES['menu_file']['name'])){
	    				$status['extra'][]='Invalid Menu file, .pdf supported';
	    			}


	    			if(!empty($_FILES['background_content']['name']) && $_FILES['background_content']['type']=='video/mp4' )
	    			{
	    				if(file_exists(WWW_ROOT.'home/content/video.mp4'))
			            {
			            	unlink(WWW_ROOT.'home/content/video.mp4');
			            }
			            move_uploaded_file($_FILES['background_content']['tmp_name'], WWW_ROOT.'home/content/video.mp4');
			            $site->background_content='video.mp4';
			           
	    			}else if(!empty($_FILES['background_content']['name'])){
	    				$status['extra'][]='Invalid Background Video, only .mp4 supported';
	    			}
	    			if($this->SettingMenu->save($site)){
	    			}
	    		}
	    		// pr($status);
	    		// exit;
	    	}
	    	$settingMenu=$this->SettingMenu->find('all')->first();
	    	$this->set(compact('settingMenu'));
	    	$this->set(compact('status'));
    }
    public function about()
    {
    	$status=[];
    	if($this->request->is('post'))
    	{
    		// pr($_POST);
    		$site=$this->SettingAbout->find('all')->first();
    		if($site)
			{
				// echo 1;
				$site->title=$this->request->getData('title');
				$site->content=$this->request->getData('content');
				$site->content2=$this->request->getData('content2');
				$site->motto=$this->request->getData('motto');
				$site->reservation_contact=$this->request->getData('reservation_contact');
				if($this->SettingAbout->save($site))
				{
					$save=1;
					$status=['code'=>1,'message'=>'Successfully Updated','extra'=>[]];
				}
			}else{
				$create_new=$this->SettingAbout->newEntity();
				$data=[
					'title'=>$this->request->getData('title'),
					'content'=>$this->request->getData('content'),
	    			'motto'=>$this->request->getData('motto'),
	    			// 'button2'=>$this->request->getData('button2'),
				];
				$create_new = $this->SettingAbout->patchEntity($create_new, $data);
				if($this->SettingAbout->save($create_new))
				{
					$save=1;
					$status=['code'=>1,'message'=>'Successfully updated','extra'=>[],];
				}
			}
			// die;
    	}
		$settingAbout=$this->SettingAbout->find('all')->first();
		$this->set(compact('settingAbout'));
		$this->set(compact('status'));
    }
    public function gallery()
    {
    	$status=[];
    	if($this->request->is('post'))
    	{
    		// pr($_POST);
    		$site=$this->SettingGallery->find('all')->first();
    		if($site)
			{
				// echo 1;
				$site->title=$this->request->getData('title');
				$site->subtitle=$this->request->getData('subtitle');
				$site->number_of_images=$this->request->getData('number_of_images');

				if($this->SettingGallery->save($site))
				{
					$save=1;
					$status=['code'=>1,'message'=>'Successfully Updated','extra'=>[]];
				}
			}else{
				// echo 2;
				$no_of_image=9;
				if(is_numeric($this->request->getData('number_of_images')))
				{
					$no_of_image=$this->request->getData('number_of_images');
				}else{
					$status['extra'][]="Number of image should be numeric (Default 9)";
				}
				$create_new=$this->SettingGallery->newEntity();
				$data=[
					'title'=>$this->request->getData('title'),
					'subtitle'=>$this->request->getData('subtitle'),
	    			'number_of_images'=>$no_of_image,
	    			// 'button2'=>$this->request->getData('button2'),
				];
				$create_new = $this->SettingGallery->patchEntity($create_new, $data);
				// pr($create_new);
				if($this->SettingGallery->save($create_new))
				{
					$save=1;
					$status=['code'=>1,'message'=>'Successfully updated','extra'=>[],];
				}
			}
			// die;
    	}
		$SettingGallery=$this->SettingGallery->find('all')->first();
		$this->set(compact('SettingGallery'));
		$this->set(compact('status'));
    }

    public function kontakt()
    {
    	$status=[];
    	if($this->request->is('post'))
    	{
    		// pr($_POST);
    		$site=$this->SettingContact->find('all')->first();
    		if($site)
			{
				// echo 1;
				$site->title=$this->request->getData('title');
				$site->map=$this->request->getData('map');
				// $site->number_of_images=$this->request->getData('number_of_images');
				$site->address=$this->request->getData('address');
				$site->contact=$this->request->getData('contact');
				$site->email=$this->request->getData('email');
				
				if($this->SettingContact->save($site))
				{
					$save=1;
					$status=['code'=>1,'message'=>'Successfully Updated','extra'=>[]];
				}
			}else{
				// echo 2;
				$create_new=$this->SettingContact->newEntity();
				$data=[
					'title'=>$this->request->getData('title'),
					'map'=>$this->request->getData('map'),
	    			// 'number_of_images'=>$no_of_image,
	    			// 'button2'=>$this->request->getData('button2'),
				];
				$create_new = $this->SettingContact->patchEntity($create_new, $data);
				// pr($create_new);
				if($this->SettingContact->save($create_new))
				{
					$save=1;
					$status=['code'=>1,'message'=>'Successfully updated','extra'=>[],];
				}
			}
			// die;
    	}
		$SettingContact=$this->SettingContact->find('all')->first();
		$this->set(compact('SettingContact'));
		$this->set(compact('status'));
    }
 	public function businessSetting()
    {
    	$status=[];
    	if($this->request->is('post'))
    	{
    		// pr($_POST);
    		// die;
    		$site=$this->SettingBusiness->find('all')->first();
    		if($site)
			{
				//print_r($this->request->data);
				//echo $this->request->data['uid_nr'];
				//print_r($site);
				//echo $this->SettingBusiness->data['uid_nr'];
				$site=$this->SettingBusiness->patchEntity($site, $this->request->getData());
				//debug($site);
				if($this->SettingBusiness->save($site))
				{
					$save=1;
					//exit;
					$status=['code'=>1,'message'=>'Successfully Updated','extra'=>[]];
				}
			}else{
				$create_new=$this->SettingBusiness->newEntity();
				$create_new = $this->SettingBusiness->patchEntity($create_new, $this->request->getData());
				// pr($create_new);
				if($this->SettingBusiness->save($create_new))
				{
					$save=1;
					$status=['code'=>1,'message'=>'Successfully updated','extra'=>[],];
				}
			}
			// die;
    	}
		$SettingBusiness=$this->SettingBusiness->find('all')->first();
		$this->set(compact('SettingBusiness'));
		$this->set(compact('status'));
    }
    public function socialicon()
    {
    	$status=[];
    	if($this->request->is('post'))
    	{
    		$site=$this->SettingSocial->find('all')->first();
    		if($site)
			{
				$site=$this->SettingSocial->patchEntity($site, $this->request->getData());
				if($this->SettingSocial->save($site))
				{
					$save=1;
					$status=['code'=>1,'message'=>'Successfully Updated','extra'=>[]];
				}
			}else{
				$create_new=$this->SettingSocial->newEntity();
				$create_new = $this->SettingSocial->patchEntity($create_new, $this->request->getData());
				// pr($create_new);
				if($this->SettingSocial->save($create_new))
				{
					$save=1;
					$status=['code'=>1,'message'=>'Successfully updated','extra'=>[],];
				}
			}
			// die;
    	}
		$SettingSocial=$this->SettingSocial->find('all')->first();
		$this->set(compact('SettingSocial'));
		$this->set(compact('status'));
    }
    }