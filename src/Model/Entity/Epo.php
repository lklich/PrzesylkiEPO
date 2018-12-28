<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Epo Entity
 *
 * @property int $ident
 * @property string $nazwa
 * @property int $numer
 * @property \Cake\I18n\FrozenTime $d_epo
 * @property string $opis
 * @property int $liczba_przesylek
 * @property int $czyus
 * @property int $kreator
 * @property int $modyfikator
 * @property \Cake\I18n\FrozenTime $d_kreacji
 * @property \Cake\I18n\FrozenTime $d_modyfikacji
 * @property string $guid
 * @property int $stan_epo
 * @property string $ekn_xml
 */
class Epo extends Entity
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
        'nazwa' => true,
        'numer' => true,
        'd_epo' => true,
        'opis' => true,
        'liczba_przesylek' => true,
        'czyus' => true,
        'kreator' => true,
        'modyfikator' => true,
        'd_kreacji' => true,
        'd_modyfikacji' => true,
        'guid' => true,
        'stan_epo' => true,
        'ekn_xml' => true
    ];
}
