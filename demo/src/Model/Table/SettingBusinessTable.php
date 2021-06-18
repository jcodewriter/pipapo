<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SettingBusiness Model
 *
 * @method \App\Model\Entity\SettingBusines get($primaryKey, $options = [])
 * @method \App\Model\Entity\SettingBusines newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SettingBusines[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SettingBusines|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SettingBusines saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SettingBusines patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SettingBusines[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SettingBusines findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SettingBusinessTable extends Table
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

        $this->setTable('setting_business');
        $this->setDisplayField('name');
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('address_line_1')
            ->maxLength('address_line_1', 255)
            ->requirePresence('address_line_1', 'create')
            ->notEmptyString('address_line_1');

        $validator
            ->scalar('address_line_2')
            ->maxLength('address_line_2', 255)
            ->requirePresence('address_line_2', 'create')
            ->notEmptyString('address_line_2');

        $validator
            ->scalar('address_line_3')
            ->maxLength('address_line_3', 255)
            ->requirePresence('address_line_3', 'create')
            ->notEmptyString('address_line_3');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 255)
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('uid_nr')
            ->maxLength('uid_nr', 255)
            ->requirePresence('uid_nr', 'create')
            ->notEmptyString('uid_nr');

        $validator
            ->scalar('register_no')
            ->maxLength('register_no', 255)
            ->requirePresence('register_no', 'create')
            ->notEmptyString('register_no');

        $validator
            ->scalar('jurisdiction')
            ->maxLength('jurisdiction', 255)
            ->requirePresence('jurisdiction', 'create')
            ->notEmptyString('jurisdiction');

        $validator
            ->scalar('start_d')
            ->maxLength('start_d', 255)
            ->requirePresence('start_d', 'create')
            ->notEmptyString('start_d');

        $validator
            ->scalar('end_d')
            ->maxLength('end_d', 255)
            ->requirePresence('end_d', 'create')
            ->notEmptyString('end_d');

        $validator
            ->scalar('open_hour')
            ->maxLength('open_hour', 255)
            ->requirePresence('open_hour', 'create')
            ->notEmptyString('open_hour');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
