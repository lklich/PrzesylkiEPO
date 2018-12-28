<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class KsiazkaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('ksiazka');
        $this->setDisplayField('ident');
        $this->setPrimaryKey('ident');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('ident')
            ->allowEmpty('ident', 'create');

        $validator
            ->allowEmpty('numer_ks');

        $validator
            ->scalar('sygnatura')
            ->maxLength('sygnatura', 120)
            ->allowEmpty('sygnatura');

        $validator
            ->scalar('adresat')
            ->maxLength('adresat', 230)
            ->allowEmpty('adresat');

        $validator
            ->scalar('adres')
            ->maxLength('adres', 230)
            ->allowEmpty('adres');

        $validator
            ->scalar('rnumer')
            ->maxLength('rnumer', 30)
            ->allowEmpty('rnumer');

        $validator
            ->dateTime('d_wyslania')
            ->allowEmpty('d_wyslania');

        $validator
            ->integer('s_numer')
            ->allowEmpty('s_numer');

        $validator
            ->decimal('masa')
            ->allowEmpty('masa');

        $validator
            ->decimal('oplata')
            ->allowEmpty('oplata');

        $validator
            ->scalar('kod')
            ->maxLength('kod', 13)
            ->allowEmpty('kod');

        $validator
            ->allowEmpty('czyus');

        $validator
            ->integer('kreator')
            ->allowEmpty('kreator');

        $validator
            ->dateTime('d_kreacji')
            ->allowEmpty('d_kreacji');

        $validator
            ->dateTime('d_modyfikacji')
            ->allowEmpty('d_modyfikacji');

        $validator
            ->integer('modyfikator')
            ->allowEmpty('modyfikator');

        $validator
            ->scalar('uwagi')
            ->maxLength('uwagi', 50)
            ->allowEmpty('uwagi');

        $validator
            ->allowEmpty('czypolecony');

        $validator
            ->allowEmpty('czyzpo');

        $validator
            ->allowEmpty('czypriorytet');

        $validator
            ->allowEmpty('czyzagraniczna');

        $validator
            ->integer('id_epo')
            ->allowEmpty('id_epo');

        $validator
            ->scalar('nazwa_adresata')
            ->maxLength('nazwa_adresata', 200)
            ->allowEmpty('nazwa_adresata');

        $validator
            ->scalar('nazwa_adresata2')
            ->maxLength('nazwa_adresata2', 255)
            ->allowEmpty('nazwa_adresata2');

        $validator
            ->scalar('ulica')
            ->maxLength('ulica', 60)
            ->allowEmpty('ulica');

        $validator
            ->scalar('dom')
            ->maxLength('dom', 30)
            ->allowEmpty('dom');

        $validator
            ->scalar('lokal')
            ->maxLength('lokal', 30)
            ->allowEmpty('lokal');

        $validator
            ->scalar('miejscowosc')
            ->maxLength('miejscowosc', 60)
            ->allowEmpty('miejscowosc');

        $validator
            ->scalar('adr_kod')
            ->maxLength('adr_kod', 10)
            ->allowEmpty('adr_kod');

        $validator
            ->scalar('kraj')
            ->maxLength('kraj', 100)
            ->allowEmpty('kraj');

        $validator
            ->scalar('nazwa_pisma')
            ->maxLength('nazwa_pisma', 255)
            ->allowEmpty('nazwa_pisma');

        $validator
            ->uuid('guid')
            ->allowEmpty('guid');

        $validator
            ->allowEmpty('gabaryt');

        $validator
            ->allowEmpty('epo');

        $validator
            ->allowEmpty('status_epo');

        $validator
            ->scalar('EpoGuid')
            ->maxLength('EpoGuid', 40)
            ->allowEmpty('EpoGuid');

        $validator
            ->integer('sposob_doreczenia')
            ->allowEmpty('sposob_doreczenia');

        $validator
            ->allowEmpty('do_rak');

        $validator
            ->allowEmpty('czykarna');

        $validator
            ->scalar('tytul')
            ->maxLength('tytul', 20)
            ->allowEmpty('tytul');

        $validator
            ->allowEmpty('id_kontynent');

        $validator
            ->allowEmpty('paczka');

        $validator
            ->scalar('kod_kraju')
            ->maxLength('kod_kraju', 2)
            ->allowEmpty('kod_kraju');

        return $validator;
    }
}
