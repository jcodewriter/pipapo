<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller\Pipapoadmin;
use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function initialize(){
        parent::initialize();
        $this->loadModel('Content');
        $this->loadModel('Copyrights');
        $this->loadComponent('ImageUp');
    }
    public function display()
    {

    }
    public function teilnahmebedingungen()
    {
        $status=[];
    if($this->request->is('post'))
    {
        $teilnahmebedingungen=$this->Content->find('all')
        ->where(['name'=>'teilnahmebedingungen'])
        ->first();
        $update=$this->Content->patchEntity($teilnahmebedingungen,$this->request->getData());
        if($this->Content->save($update))
        {
            $status=['code'=>1,'message'=>'Successfully Updated','extra'=>[]];
        }else{
            // $status=['code'=>0,'message'=>'Successfully Updated','extra'=>[]];
            $staus['extra'][]='Something went wrong';
        }
    }
        $teilnahmebedingungen=$this->Content->find('all')
        ->where(['name'=>'teilnahmebedingungen'])
        ->first();
        $this->set(compact('teilnahmebedingungen'));
        $this->set(compact('status'));
    }
    
    public function datenschutz(){
        $status=[];
        if($this->request->is('post'))
        {
            $datenschutz=$this->Content->find('all')
            ->where(['name'=>'datenschutz'])
            ->first();
            $update=$this->Content->patchEntity($datenschutz,$this->request->getData());
            if($this->Content->save($update))
            {
                $status=['code'=>1,'message'=>'Successfully Updated','extra'=>[]];
            }else{
                // $status=['code'=>0,'message'=>'Successfully Updated','extra'=>[]];
                $staus['extra'][]='Something went wrong';
            }
        }
            $this->set(compact('status'));

            $datenschutz=$this->Content->find('all')
            ->where(['name'=>'datenschutz'])
            ->first();
            $this->set(compact('datenschutz'));
    }

    public function impressum(){
         $status=[];


        if($this->request->is('post'))
        {
            if(!empty($this->request->getData('content')))
            {
                $impressum=$this->Content->find('all')
                    ->where(['name'=>'impressum'])
                    ->first();
                $impressum=$this->Content->patchEntity($impressum,$this->request->getData());
                if($this->Content->save($impressum))
                {
                    $status=['code'=>1,'message'=>'Successfully Updated','extra'=>[]];
                }

            }
            if(!empty($this->request->getData('content2')))
            {
                $copyrights=$this->Content->find('all')
                ->where(['name'=>'Foto-Rechte'])
                ->first();
                $data2['content']=$this->request->getData('content2');
                $copyrights=$this->Content->patchEntity($copyrights,$data2);
                if($this->Content->save($copyrights))
                {
                    $status=['code'=>1,'message'=>'Successfully Updated','extra'=>[]];
                }
                
            }
        }
        $impressum=$this->Content->find('all')
        ->where(['name'=>'impressum'])
        ->first();
        $this->set(compact('impressum'));

        $copyrights=$this->Content->find('all')
        ->where(['name'=>'Foto-Rechte'])
        ->first();
        $this->set(compact('copyrights'));

        $this->set(compact('status'));

    }
    public function copyrights(){
        $Copyrights=$this->Copyrights->find('all');
        $this->set(compact('Copyrights'));
    }

    public function savecopyrights($id=null){
        $status=[];
        if($id==null || $id<1)
        {
            if($this->request->is('post'))
            {
                $new=$this->Copyrights->newEntity();
                $new=$this->Copyrights->patchEntity($new,$this->request->getData());
                if(!empty($_FILES['file']['name']) && ($_FILES['file']['type']=='image/png' || $_FILES['file']['type']=='image/jpeg')){
                    if (!is_dir(WWW_ROOT.'home/content/copyrights'))
                    {
                        mkdir(WWW_ROOT.'home/content/copyrights');
                    }
                    $new= $this->Copyrights->save($new);
                    $file_name=$this->ImageUp->resizeUpload($_FILES,WWW_ROOT.'home/content/copyrights/','image_'.$new->id,600,400);
                    $new->image='thump_'.$file_name;
                    if($this->Copyrights->save($new))
                    {
                        $status=['code'=>1,'message'=>'Successfully Updated','extra'=>[]];
                    }else{
                        $status=['code'=>1];
                        $status['extra'][]='Something went wrong';
                    }
                }else{

                }
            }
        }
        if($id>0)
        {
            $Copyrights=$this->Copyrights->get($id);
            // $this->set(compact('Copyrights'));
            if($this->request->is('post'))
            {
                // echo 1;

                // $new=$this->Copyrights->newEntity();
                $Copyrights=$this->Copyrights->patchEntity($Copyrights,$this->request->getData());
               if($Copyrights= $this->Copyrights->save($Copyrights))
               {
                $status=['code'=>1,'message'=>'Successfully Updated','extra'=>[]];
               }
                if(!empty($_FILES['file']['name']) && ($_FILES['file']['type']=='image/png' || $_FILES['file']['type']=='image/jpeg')){
                    if (!is_dir(WWW_ROOT.'home/content/copyrights'))
                    {
                        mkdir(WWW_ROOT.'home/content/copyrights');
                    }
                    $Copyrights= $this->Copyrights->save($Copyrights);
                     // pr($Copyrights);
                    $file_name=$this->ImageUp->resizeUpload($_FILES,WWW_ROOT.'home/content/copyrights/','image_'.$Copyrights->id,600,400);
                    $Copyrights->image='thump_'.$file_name;
                    if($this->Copyrights->save($Copyrights))
                    {

                        $status=['code'=>1,'message'=>'Successfully Updated','extra'=>[]];
                    }else{
                        $status=['code'=>1];
                        $status['extra'][]='Something went wrong';
                    }
                }else{
                     $status['extra'][]='Image not updated, ';
                }
                // die;
            }
            $Copyrights=$this->Copyrights->get($id);
            $this->set(compact('Copyrights'));
        }
        $this->set(compact('status'));
    }

    public function deletecopyrights($id=null)
    {
        $data=$this->Copyrights->find('all')
        ->where(['id'=>$id])
        ->first();

        if(isset($data->id) && !empty($data->id))
        {
            if($delte=$this->Copyrights->delete($data))
            {
                $this->redirect(['controller' => 'Pages', 'action' => 'copyrights']);
                if(file_exists(WWW_ROOT.'home/content/copyrights/'.$data->image))
                {
                    unlink(WWW_ROOT.'home/content/copyrights/'.$data->image);
                }
                if(file_exists(WWW_ROOT.'home/content/copyrights/'.str_replace('thump_','',$data->image)))
                {
                    unlink(WWW_ROOT.'home/content/copyrights/'.str_replace('thump_','',$data->image));
                }
            }else{
                $this->redirect(['controller' => 'Pages', 'action' => 'copyrights']);
            }
        }else{
            $this->redirect(['controller' => 'Pages', 'action' => 'copyrights']);
        }
        // $this->redirect(['controller' => 'Pages', 'action' => 'copyrights']);
        // die;
    }

}
