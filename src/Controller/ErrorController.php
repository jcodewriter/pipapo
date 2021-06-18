<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         3.3.4
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Event\Event;

/**
 * Error Handling Controller
 *
 * Controller used by ExceptionRenderer to render error responses.
 */
class ErrorController extends AppController
{
    /**
     * Initialization hook method.
     *
     * @return void
     */
    public function initialize()
    {
        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadModel('SettingBusiness');
        $this->loadModel('SettingSocial');
    }

    /**
     * beforeFilter callback.
     *
     * @param \Cake\Event\Event $event Event.
     * @return \Cake\Http\Response|null|void
     */
    public function beforeFilter(Event $events){
        $SettingBusiness=$this->SettingBusiness->find('all')->first();
         $this->set(compact('SettingBusiness'));
         $SettingSocial=$this->SettingSocial->find('all')->first();
         $this->set(compact('SettingSocial'));
    }

    /**
     * beforeRender callback.
     *
     * @param \Cake\Event\Event $event Event.
     * @return \Cake\Http\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        if ( null!=$this->request->getParam('prefix') && $this->request->getParam('prefix') == 'pipapoadmin')
        {
            $this->viewBuilder()->setLayout('pipapoadminerror');
            $this->viewBuilder()->setTemplatePath('Pipapoadmin/Error');
            // $this->viewBuilder()->setLayout('false');
        }else{
            $this->viewBuilder()->setTemplatePath('Error');
        }
    }

    /**
     * afterFilter callback.
     *
     * @param \Cake\Event\Event $event Event.
     * @return \Cake\Http\Response|null|void
     */
    public function afterFilter(Event $event)
    {
    }
}
