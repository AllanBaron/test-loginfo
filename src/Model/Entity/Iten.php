<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Iten Entity
 *
 * @property int $id
 * @property string $name
 * @property string $unit_measurement
 * @property int|null $qtd
 * @property float $price
 * @property bool $perishable_product
 * @property \Cake\I18n\FrozenDate $expiry_date
 * @property \Cake\I18n\FrozenDate $date_manufacture
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Iten extends Entity
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
        'unit_measurement' => true,
        'qtd' => true,
        'price' => true,
        'perishable_product' => true,
        'expiry_date' => true,
        'date_manufacture' => true,
        'created' => true,
        'modified' => true
    ];
}
