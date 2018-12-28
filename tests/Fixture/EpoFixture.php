<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EpoFixture
 *
 */
class EpoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'epo';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ident' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'nazwa' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'numer' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'd_epo' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null],
        'opis' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'liczba_przesylek' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'czyus' => ['type' => 'smallinteger', 'length' => 5, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'kreator' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'modyfikator' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'd_kreacji' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null],
        'd_modyfikacji' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null],
        'guid' => ['type' => 'uuid', 'null' => true, 'default' => 'newid', 'length' => null, 'precision' => null, 'comment' => null],
        'stan_epo' => ['type' => 'smallinteger', 'length' => 5, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'ekn_xml' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'SQL_Polish_CP1250_CI_AS', 'precision' => null, 'comment' => null],
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
                'nazwa' => 'Lorem ipsum dolor sit amet',
                'numer' => 1,
                'd_epo' => 1537528270,
                'opis' => 'Lorem ipsum dolor sit amet',
                'liczba_przesylek' => 1,
                'czyus' => 1,
                'kreator' => 1,
                'modyfikator' => 1,
                'd_kreacji' => 1537528270,
                'd_modyfikacji' => 1537528270,
                'guid' => '53ea45f9-4f89-467d-acd7-d1d912d6cc76',
                'stan_epo' => 1,
                'ekn_xml' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
            ],
        ];
        parent::init();
    }
}
