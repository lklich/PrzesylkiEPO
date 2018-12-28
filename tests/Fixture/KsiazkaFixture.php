<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * KsiazkaFixture
 *
 */
class KsiazkaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ksiazka';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ident' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'numer_ks' => ['type' => 'smallinteger', 'length' => 5, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'sygnatura' => ['type' => 'string', 'fixed' => true, 'length' => 120, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null],
        'adresat' => ['type' => 'string', 'length' => 230, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'adres' => ['type' => 'string', 'length' => 230, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'rnumer' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'd_wyslania' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null],
        's_numer' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'masa' => ['type' => 'decimal', 'length' => 10, 'precision' => 3, 'null' => true, 'default' => null, 'comment' => null, 'unsigned' => null],
        'oplata' => ['type' => 'decimal', 'length' => 10, 'precision' => 2, 'null' => true, 'default' => null, 'comment' => null, 'unsigned' => null],
        'kod' => ['type' => 'string', 'length' => 13, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'czyus' => ['type' => 'smallinteger', 'length' => 5, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'kreator' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'd_kreacji' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null],
        'd_modyfikacji' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null],
        'modyfikator' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'uwagi' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'czypolecony' => ['type' => 'smallinteger', 'length' => 5, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'czyzpo' => ['type' => 'smallinteger', 'length' => 5, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'czypriorytet' => ['type' => 'smallinteger', 'length' => 5, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'czyzagraniczna' => ['type' => 'smallinteger', 'length' => 5, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'id_epo' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'nazwa_adresata' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'nazwa_adresata2' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'ulica' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'dom' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'lokal' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'miejscowosc' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'adr_kod' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'kraj' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'nazwa_pisma' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'guid' => ['type' => 'uuid', 'null' => true, 'default' => 'newid', 'length' => null, 'precision' => null, 'comment' => null],
        'gabaryt' => ['type' => 'smallinteger', 'length' => 5, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'epo' => ['type' => 'smallinteger', 'length' => 5, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'status_epo' => ['type' => 'smallinteger', 'length' => 5, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'EpoGuid' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'sposob_doreczenia' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'do_rak' => ['type' => 'smallinteger', 'length' => 5, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'czykarna' => ['type' => 'smallinteger', 'length' => 5, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'tytul' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'id_kontynent' => ['type' => 'smallinteger', 'length' => 5, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'paczka' => ['type' => 'smallinteger', 'length' => 5, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'kod_kraju' => ['type' => 'string', 'length' => 2, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ident'], 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'ident' => 1,
                'numer_ks' => 1,
                'sygnatura' => 'Lorem ipsum dolor sit amet',
                'adresat' => 'Lorem ipsum dolor sit amet',
                'adres' => 'Lorem ipsum dolor sit amet',
                'rnumer' => 'Lorem ipsum dolor sit amet',
                'd_wyslania' => 1537524790,
                's_numer' => 1,
                'masa' => 1.5,
                'oplata' => 1.5,
                'kod' => 'Lorem ipsum',
                'czyus' => 1,
                'kreator' => 1,
                'd_kreacji' => 1537524790,
                'd_modyfikacji' => 1537524790,
                'modyfikator' => 1,
                'uwagi' => 'Lorem ipsum dolor sit amet',
                'czypolecony' => 1,
                'czyzpo' => 1,
                'czypriorytet' => 1,
                'czyzagraniczna' => 1,
                'id_epo' => 1,
                'nazwa_adresata' => 'Lorem ipsum dolor sit amet',
                'nazwa_adresata2' => 'Lorem ipsum dolor sit amet',
                'ulica' => 'Lorem ipsum dolor sit amet',
                'dom' => 'Lorem ipsum dolor sit amet',
                'lokal' => 'Lorem ipsum dolor sit amet',
                'miejscowosc' => 'Lorem ipsum dolor sit amet',
                'adr_kod' => 'Lorem ip',
                'kraj' => 'Lorem ipsum dolor sit amet',
                'nazwa_pisma' => 'Lorem ipsum dolor sit amet',
                'guid' => '98ad344b-8d18-4278-81e1-9326b53ae33b',
                'gabaryt' => 1,
                'epo' => 1,
                'status_epo' => 1,
                'EpoGuid' => 'Lorem ipsum dolor sit amet',
                'sposob_doreczenia' => 1,
                'do_rak' => 1,
                'czykarna' => 1,
                'tytul' => 'Lorem ipsum dolor ',
                'id_kontynent' => 1,
                'paczka' => 1,
                'kod_kraju' => ''
            ],
        ];
        parent::init();
    }
}
