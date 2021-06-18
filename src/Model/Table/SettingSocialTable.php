<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SettingSocial Model
 *
 * @method \App\Model\Entity\SettingSocial get($primaryKey, $options = [])
 * @method \App\Model\Entity\SettingSocial newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SettingSocial[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SettingSocial|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SettingSocial saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SettingSocial patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SettingSocial[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SettingSocial findOrCreate($search, callable $callback = null, $options = [])
 */
class SettingSocialTable extends Table
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

        $this->setTable('setting_social');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('facebook')
            ->maxLength('facebook', 255)
            ->allowEmptyString('facebook');

        $validator
            ->scalar('youtube')
            ->maxLength('youtube', 255)
            ->allowEmptyString('youtube');

        $validator
            ->scalar('twitter')
            ->maxLength('twitter', 255)
            ->allowEmptyString('twitter');

        $validator
            ->scalar('instagram')
            ->maxLength('instagram', 255)
            ->allowEmptyString('instagram');

        return $validator;
    }
}
