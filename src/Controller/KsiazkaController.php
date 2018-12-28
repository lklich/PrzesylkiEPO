<?php
namespace App\Controller;

use App\Controller\AppController;

class KsiazkaController extends AppController
{

    public function index()
    {

        if ($this->request->is('post')) { 
            $kod = trim($this->request->data['kod']);   
            $adresat = trim($this->request->data['adresat']);     
            $ksiazka = $this->paginate($this->Ksiazka->find('all', 
            ['order' => ['Ksiazka.d_wyslania' => 'DESC']])
            ->where(['AND' => ['Ksiazka.adresat LIKE'=>'%' . $adresat . '%', 'Ksiazka.kod LIKE'=>'%' . $kod . '%']]));
            } else {
                    $ksiazka = $this->paginate($this->Ksiazka->find('all', ['order' => ['Ksiazka.d_wyslania' => 'DESC']])
                    ->where(['AND' => ['Ksiazka.czyus'=>0,'Ksiazka.epo'=>1]]));
            }
        $this->set(compact('ksiazka'));
    }

    // $id = id_epo
    public function zawartosc($id = null)
    {
        $this->loadModel('Epo');
        $epo = $this->Epo->get($id);
        $ksiazka = $this->Ksiazka->find('all', 
        ['order' => ['Ksiazka.ident' => 'ASC']])
          ->where(['Ksiazka.id_epo'=>$id]);
        //$this->set('ksiazka', $ksiazka);
        $this->set(compact('ksiazka','epo'));
        //$this->set('_serialize', ['adresys']);
    }

}
