<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;

class AppController extends Controller
{

	 public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler', ['enableBeforeRedirect' => false,]);
        $this->loadComponent('Flash');
       /* $this->loadComponent('Auth', [
        'loginRedirect' => ['controller' => 'Menu', 'action' => 'index'],
        'authError' => 'Należy się zalogować do systemu',
        'storage'=>'Session',
        'unauthorizedRedirect' => $this->referer(),
        'loginAction' => ['controller'=>'Users','action'=>'login'],
		'logoutRedirect' => ['controller' => 'Users','action' => 'login'],
        'authenticate' => [
           'Form' => [
             'userModel' => 'Users',
          ]],
           ]); */
    }

    public function beforeFilter(Event $event)
    {
      //ConnectionManager::get('bpod');

     //   $this->Auth->allow(['login','logout','index']);
    }
      //  if(!is_null($this->Auth->user('id'))){ $conn = ConnectionManager::get('bpod'); } 
      //  else { $conn = ConnectionManager::get('login'); }


}


