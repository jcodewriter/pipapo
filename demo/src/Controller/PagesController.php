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
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Event\Event;
// use Cake\Http\Exception\NotFoundException;
// use Cake\View\Exception\MissingTemplateException;

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
        $this->loadModel('Gallery');
        $this->loadModel('Content');
        $this->loadModel('Copyrights');
    }
    public function beforeFilter(Event $event){
        $SettingBusiness=$this->SettingBusiness->find('all')->first();
         $this->set(compact('SettingBusiness'));

         $SettingSocial=$this->SettingSocial->find('all')->first();
         $this->set(compact('SettingSocial'));

         $SettingTitle=$this->SettingTitle->find('all')->first();
         $this->set(compact('SettingTitle'));

         $SettingContact=$this->SettingContact->find('all')->first();
         $this->set(compact('SettingContact'));
    }
    
    public function display()
    { 
         // $this->viewBuilder()->setLayout(false);

         $SettingTitle=$this->SettingTitle->find('all')->first();
         $this->set(compact('SettingTitle'));

         $SettingHome=$this->SettingHome->find('all')->first();
         $this->set(compact('SettingHome'));

         $SettingMenu=$this->SettingMenu->find('all')->first();
         $this->set(compact('SettingMenu'));

         $SettingAbout=$this->SettingAbout->find('all')->first();
         $this->set(compact('SettingAbout'));

         $SettingGallery=$this->SettingGallery->find('all')->first();
         $this->set(compact('SettingGallery'));

         $SettingContact=$this->SettingContact->find('all')->first();
         $this->set(compact('SettingContact'));

         $SettingBusiness=$this->SettingBusiness->find('all')->first();
         $this->set(compact('SettingBusiness'));

         $SettingSocial=$this->SettingSocial->find('all')->first();
         $this->set(compact('SettingSocial'));

         $Gallery=$this->Gallery->find('all');
         $this->set(compact('Gallery'));
        // exit;
    }
    public function teilnahmebedingungen()
    {
        $teilnahmebedingungen=$this->Content->find('all')
        ->where(['name'=>'teilnahmebedingungen'])
        ->first();
        $this->set(compact('teilnahmebedingungen'));
    }
    public function datenschutz(){
        $datenschutz=$this->Content->find('all')
        ->where(['name'=>'datenschutz'])
        ->first();
        $this->set(compact('datenschutz'));
    }
    public function impressum(){
        $impressum=$this->Content->find('all')
        ->where(['name'=>'impressum'])
        ->first();
        $this->set(compact('impressum'));

        $copyrights=$this->Copyrights->find('all');
        // ->where(['name'=>'Foto-Rechte']);
        // ->first();
        $this->set(compact('copyrights'));
    }
}
