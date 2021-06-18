<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SettingMenu Entity
 *
 * @property int $id
 * @property string $title
 * @property string $subtitle
 * @property string $download_button_title
 * @property string|null $menu_file
 * @property string|null $background_content
 */
class SettingMenu extends Entity
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
        'download_button_title' => true,
        'menu_file' => true,
        'background_content' => true
    ];
}
