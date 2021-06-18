<?php 


namespace App\Controller\Pipapoadmin;
use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

    class GalleryController extends AppController
    {
    	public function initialize()
    	{
    		parent::initialize();
    		$this->loadModel('Gallery');
            $this->loadComponent('ImageUp');
    	}
        public function index()
        {
            $gallery=$this->Gallery->find('all');
            $this->set(compact('gallery'));
            if($this->request->is('post'))
            {
                if (!is_dir(WWW_ROOT.'Gallery'))
                {
                    mkdir(WWW_ROOT.'Gallery');
                }
                $new_data=$this->Gallery->newEntity();
                $data=['title'=>date('Y-M-D')];
                $new_data=$this->Gallery->patchEntity($new_data,$data);
                if($save=$this->Gallery->save($new_data))
                {
                   // $file_new_url=WWW_ROOT.'Gallery/image_'.$save->id.'.jpg';
                    $file_name=$this->ImageUp->resizeUpload($_FILES,WWW_ROOT.'Gallery/','image_'.$save->id,330,222);
                    $data=$this->Gallery->get($save->id);
                    $data->image=$file_name;
                    $data->thumb='thump_'.$file_name;
                    $save=$this->Gallery->save($data);
                    // pr($data);
                }

                die;
            }

        }
        public function delete(){
            $this->request->allowMethod(['post']);
            $status=['code'=>2,'message'=>'Invalid Request'];
            $data=$this->Gallery->get($this->request->getData('id'));
            // pr($data);

            if($this->Gallery->delete($data))
            {
                $status=['code'=>1,'message'=>'Success'];
                // echo WWW_ROOT.'Gallery/'.$data->image;
                if(file_exists(WWW_ROOT.'Gallery/'.$data->image))
                {
                    unlink(WWW_ROOT.'Gallery/'.$data->image);
                    // echo 1;
                }
                if(file_exists(WWW_ROOT.'Gallery/'.$data->thumb))
                {
                    unlink(WWW_ROOT.'Gallery/'.$data->thumb);
                    // echo 2;
                }
            }else{
                $status=['code'=>2,'message'=>'Something went wrong'];
            }
            
            echo json_encode($status);
            die;
        }
        public function ajax(){
            $gallery=$this->Gallery->find('all');
            $data=['count'=>$gallery->count(),'data'=>$gallery];
            echo json_encode($data);
            die;
        }

        // public function add()
    }