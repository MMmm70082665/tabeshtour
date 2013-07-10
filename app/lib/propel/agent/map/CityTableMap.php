<?php



/**
 * This class defines the structure of the 'city' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.agent.map
 */
class CityTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'agent.map.CityTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('city');
        $this->setPhpName('City');
        $this->setClassname('City');
        $this->setPackage('agent');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 45, null);
        $this->addForeignKey('country_id', 'CountryId', 'INTEGER', 'country', 'id', false, null, null);
        $this->addColumn('publish', 'Publish', 'BOOLEAN', true, 1, null);
        $this->addColumn('date', 'Date', 'DATE', true, null, null);
        $this->addColumn('desc', 'Desc', 'BLOB', false, null, null);
        $this->addColumn('useful_info', 'UsefulInfo', 'BLOB', false, null, null);
        $this->addColumn('place', 'Place', 'BLOB', false, null, null);
        $this->addColumn('hotel', 'Hotel', 'BLOB', false, null, null);
        $this->addColumn('restoran', 'Restoran', 'BLOB', false, null, null);
        $this->addColumn('buy_center', 'BuyCenter', 'BLOB', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Country', 'Country', RelationMap::MANY_TO_ONE, array('country_id' => 'id', ), null, null);
        $this->addRelation('RecordCity', 'RecordCity', RelationMap::ONE_TO_MANY, array('id' => 'city_id', ), null, null, 'RecordCitys');
    } // buildRelations()

} // CityTableMap
