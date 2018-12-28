<?php
namespace App\Controller;

use App\Controller\AppController;

class EpoController extends AppController
{

    public function index()
    {
    $epo = $this->paginate($this->Epo->find('all', 
    ['order' => ['Epo.d_kreacji' => 'DESC']])
      ->where([
        'Epo.czyus'=>0,
        'OR' => [['Epo.stan_epo'=>0],['Epo.stan_epo'=>1],['Epo.stan_epo'=>null],['Epo.stan_epo'=>'']]]));
        $this->set(compact('epo'));
    }

    public function wycofajepo($id = null)
    {
        $epo = $this->Epo->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
        $epo->czyus=1;     
            if ($this->Epo->save($epo)) {
                $this->loadModel('Ksiazka');
                $this->Ksiazka->updateAll(
                   //array('czyus' => 1,'id_epo'=>null),
				   array('id_epo'=>null),
                   array('id_epo'=> $id));
                $this->Flash->success(__('EPO zostało pomyśnie wycofane. Ponownie otwórz książkę nadawczą'));
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error(__('Błąd wycofywania EPO.'));
        }
    }

}
