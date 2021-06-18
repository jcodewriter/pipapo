<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SettingContact Entity
 *
 * @property int $id
 * @property string $title
 * @property string $map
 * @property string|null $contact
 * @property string|null $email
 * @property string|null $address
 * @property \Cake\I18n\FrozenTime $modified
 */
class SettingContact extends Entity
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
        'title' => true,
        'map' => true,
        'contact' => true,
        'email' => true,
        'address' => true,
        'modified' => true
    ];
}
