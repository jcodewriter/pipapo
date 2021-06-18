<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SettingBusines Entity
 *
 * @property int $id
 * @property string $name
 * @property string $address_line_1
 * @property string $address_line_2
 * @property string $address_line_3
 * @property string $phone
 * @property string $email
 * @property string $start_d
 * @property string $end_d
 * @property string $open_hour
 * @property \Cake\I18n\FrozenTime $modified
 */
class SettingBusines extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'address_line_1' => true,
        'address_line_2' => true,
        'address_line_3' => true,
        'phone' => true,
        'email' => true,
		'uid_nr' => true, 
		'register_no' => true, 
		'jurisdiction' => true,
        'start_d' => true,
        'end_d' => true,
        'open_hour' => true,
        'modified' => true
    ];
}
