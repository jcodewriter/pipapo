<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SettingMenu Model
 *
 * @method \App\Model\Entity\SettingMenu get($primaryKey, $options = [])
 * @method \App\Model\Entity\SettingMenu newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SettingMenu[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SettingMenu|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SettingMenu saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SettingMenu patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SettingMenu[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SettingMenu findOrCreate($search, callable $callback = null, $options = [])
 */
class SettingMenuTable extends Table
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

        $this->setTable('setting_menu');
        $this->setDisplayField('title');
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
            ->scalar('download_button_title')
            ->maxLength('download_button_title', 255)
            ->requirePresence('download_button_title', 'create')
            ->notEmptyString('download_button_title');

        $validator
            ->scalar('menu_file')
            ->maxLength('menu_file', 255)
            ->allowEmptyFile('menu_file');

        $validator
            ->scalar('background_content')
            ->maxLength('background_content', 255)
            ->allowEmptyString('background_content');

        return $validator;
    }
}
