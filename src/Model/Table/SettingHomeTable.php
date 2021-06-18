<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SettingHome Model
 *
 * @method \App\Model\Entity\SettingHome get($primaryKey, $options = [])
 * @method \App\Model\Entity\SettingHome newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SettingHome[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SettingHome|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SettingHome saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SettingHome patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SettingHome[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SettingHome findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SettingHomeTable extends Table
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

        $this->setTable('setting_home');
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
            ->scalar('subtitle')
            ->maxLength('subtitle', 255)
            ->requirePresence('subtitle', 'create')
            ->notEmptyString('subtitle');

        $validator
            ->scalar('button1')
            ->maxLength('button1', 255)
            ->requirePresence('button1', 'create')
            ->notEmptyString('button1');

        $validator
            ->scalar('button2')
            ->maxLength('button2', 255)
            ->requirePresence('button2', 'create')
            ->notEmptyString('button2');

        $validator
            ->scalar('background_image')
            ->maxLength('background_image', 255)
            ->allowEmptyFile('background_image');

        return $validator;
    }
}
