<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SettingSocial Entity
 *
 * @property int $id
 * @property string|null $facebook
 * @property string|null $youtube
 * @property string|null $twitter
 * @property string|null $instagram
 */
class SettingSocial extends Entity
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
        'facebook' => true,
        'youtube' => true,
        'twitter' => true,
        'instagram' => true
    ];
}
