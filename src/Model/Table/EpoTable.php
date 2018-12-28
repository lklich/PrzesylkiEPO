<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Epo Model
 *
 * @method \App\Model\Entity\Epo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Epo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Epo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Epo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Epo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Epo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Epo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Epo findOrCreate($search, callable $callback = null, $options = [])
 */
class EpoTable extends Table
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

        $this->setTable('epo');
        $this->setDisplayField('ident');
        $this->setPrimaryKey('ident');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('ident')
            ->allowEmpty('ident', 'create');

        $validator
            ->scalar('nazwa')
            ->maxLength('nazwa', 200)
            ->allowEmpty('nazwa');

        $validator
            ->integer('numer')
            ->allowEmpty('numer');

        $validator
            ->dateTime('d_epo')
            ->allowEmpty('d_epo');

        $validator
            ->scalar('opis')
            ->maxLength('opis', 200)
            ->allowEmpty('opis');

        $validator
            ->integer('liczba_przesylek')
            ->allowEmpty('liczba_przesylek');

        $validator
            ->allowEmpty('czyus');

        $validator
            ->integer('kreator')
            ->allowEmpty('kreator');

        $validator
            ->integer('modyfikator')
            ->allowEmpty('modyfikator');

        $validator
            ->dateTime('d_kreacji')
            ->allowEmpty('d_kreacji');

        $validator
            ->dateTime('d_modyfikacji')
            ->allowEmpty('d_modyfikacji');

        $validator
            ->uuid('guid')
            ->allowEmpty('guid');

        $validator
            ->allowEmpty('stan_epo');

        $validator
            ->scalar('ekn_xml')
            ->allowEmpty('ekn_xml');

        return $validator;
    }
}
