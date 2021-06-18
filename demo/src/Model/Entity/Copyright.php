<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Copyright Entity
 *
 * @property int $id
 * @property string|null $image
 * @property string $title
 * @property string|null $line1
 * @property string|null $line2
 * @property string|null $link
 * @property string|null $url
 * @property \Cake\I18n\FrozenTime $modified
 */
class Copyright extends Entity
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
        'image' => true,
        'title' => true,
        'line1' => true,
        'line2' => true,
        'link' => true,
        'url' => true,
        'modified' => true
    ];
}
