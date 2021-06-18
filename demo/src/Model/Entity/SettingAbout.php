<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SettingAbout Entity
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string|null $content2
 * @property string $motto
 * @property string|null $reservation_contact
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class SettingAbout extends Entity
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
        'content' => true,
        'content2' => true,
        'motto' => true,
        'reservation_contact' => true,
        'modified' => true
    ];
}
