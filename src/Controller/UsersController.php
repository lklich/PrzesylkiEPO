<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\Routing\Router;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;

class UsersController extends AppController
{

    public function index()
    {
      $users = $this->Users->find('all');
      $this->set('users', $this->paginate($users));
      $this->set('_serialize', ['users']);
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $exists = $this->Users->exists(['username'=>$this->request->data('username')]);
            if($exists) {
                $this->Flash->error(__('Taki użytkownik już istnieje. Podaj inny login i ponów próbę.'));
            } else {
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Operator został dodany poprawnie.'));
                return $this->redirect(['action' => 'index']);
              }
            $this->Flash->error(__('Błąd podczas dodawania operatora. Proszę poprawić dane i spróbować ponownie.'));
        } }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function edit($id = null)
    {
        $user = $this->Users->get($id, ['contain' => []]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Operator został zmodyfikowany poprawnie.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Błąd edycji danych operatora. Proszę poprawić błędy i spróbować ponownie.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Operator został usunięty z bazy danych.'));
        } else {
            $this->Flash->error(__('Błąd usuwania operatora.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        if ($this->request->is('post')) {
           // var_dump($this->request);die();
            $user = $this->Auth->identify();
            //debug($this->request->data['password']);
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Błędna nazwa użytkownika lub hasło!'));
        }
    }

    public function logout()
	{
        return $this->redirect($this->Auth->logout());
        $connection = ConnectionManager::get('login');
        $this->Flash->error(__('Zostałeś poprawnie wylogowany z systemu.'));

    }
}
