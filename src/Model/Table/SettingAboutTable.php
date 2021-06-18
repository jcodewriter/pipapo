<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SettingAbout Model
 *
 * @method \App\Model\Entity\SettingAbout get($primaryKey, $options = [])
 * @method \App\Model\Entity\SettingAbout newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SettingAbout[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SettingAbout|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SettingAbout saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SettingAbout patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SettingAbout[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SettingAbout findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SettingAboutTable extends Table
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

        $this->setTable('setting_about');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('content')
            ->maxLength('content', 4294967295)
            ->requirePresence('content', 'create')
            ->notEmptyString('content');

        $validator
            ->scalar('content2')
            ->maxLength('content2', 4294967295)
            ->allowEmptyString('content2');

        $validator
            ->scalar('motto')
            ->maxLength('motto', 255)
            ->requirePresence('motto', 'create')
            ->notEmptyString('motto');

        $validator
            ->scalar('reservation_contact')
            ->maxLength('reservation_contact', 255)
            ->allowEmptyString('reservation_contact');

        return $validator;
    }
}
