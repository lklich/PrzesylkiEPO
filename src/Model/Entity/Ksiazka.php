<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ksiazka Entity
 *
 * @property int $ident
 * @property int $numer_ks
 * @property string $sygnatura
 * @property string $adresat
 * @property string $adres
 * @property string $rnumer
 * @property \Cake\I18n\FrozenTime $d_wyslania
 * @property int $s_numer
 * @property float $masa
 * @property float $oplata
 * @property string $kod
 * @property int $czyus
 * @property int $kreator
 * @property \Cake\I18n\FrozenTime $d_kreacji
 * @property \Cake\I18n\FrozenTime $d_modyfikacji
 * @property int $modyfikator
 * @property string $uwagi
 * @property int $czypolecony
 * @property int $czyzpo
 * @property int $czypriorytet
 * @property int $czyzagraniczna
 * @property int $id_epo
 * @property string $nazwa_adresata
 * @property string $nazwa_adresata2
 * @property string $ulica
 * @property string $dom
 * @property string $lokal
 * @property string $miejscowosc
 * @property string $adr_kod
 * @property string $kraj
 * @property string $nazwa_pisma
 * @property string $guid
 * @property int $gabaryt
 * @property int $epo
 * @property int $status_epo
 * @property string $EpoGuid
 * @property int $sposob_doreczenia
 * @property int $do_rak
 * @property int $czykarna
 * @property string $tytul
 * @property int $id_kontynent
 * @property int $paczka
 * @property string $kod_kraju
 */
class Ksiazka extends Entity
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
        'numer_ks' => true,
        'sygnatura' => true,
        'adresat' => true,
        'adres' => true,
        'rnumer' => true,
        'd_wyslania' => true,
        's_numer' => true,
        'masa' => true,
        'oplata' => true,
        'kod' => true,
        'czyus' => true,
        'kreator' => true,
        'd_kreacji' => true,
        'd_modyfikacji' => true,
        'modyfikator' => true,
        'uwagi' => true,
        'czypolecony' => true,
        'czyzpo' => true,
        'czypriorytet' => true,
        'czyzagraniczna' => true,
        'id_epo' => true,
        'nazwa_adresata' => true,
        'nazwa_adresata2' => true,
        'ulica' => true,
        'dom' => true,
        'lokal' => true,
        'miejscowosc' => true,
        'adr_kod' => true,
        'kraj' => true,
        'nazwa_pisma' => true,
        'guid' => true,
        'gabaryt' => true,
        'epo' => true,
        'status_epo' => true,
        'EpoGuid' => true,
        'sposob_doreczenia' => true,
        'do_rak' => true,
        'czykarna' => true,
        'tytul' => true,
        'id_kontynent' => true,
        'paczka' => true,
        'kod_kraju' => true
    ];
}
