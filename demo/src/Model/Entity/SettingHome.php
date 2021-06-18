<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SettingHome Entity
 *
 * @property int $id
 * @property string $title
 * @property string $subtitle
 * @property string $button1
 * @property string $button2
 * @property string|null $background_image
 * @property \Cake\I18n\FrozenTime $modified
 */
class SettingHome extends Entity
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
        'subtitle' => true,
        'button1' => true,
        'button2' => true,
        'background_image' => true,
        'modified' => true
    ];
}
