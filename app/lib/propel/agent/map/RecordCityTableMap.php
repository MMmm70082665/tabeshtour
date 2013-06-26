<?php



/**
 * This class defines the structure of the 'record_city' table.
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
class RecordCityTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'agent.map.RecordCityTableMap';

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
        $this->setName('record_city');
        $this->setPhpName('RecordCity');
        $this->setClassname('RecordCity');
        $this->setPackage('agent');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('day_counter', 'DayCounter', 'INTEGER', true, null, null);
        $this->addColumn('status', 'Status', 'BOOLEAN', true, 1, null);
        $this->addForeignKey('city_id', 'CityId', 'INTEGER', 'city', 'id', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('City', 'City', RelationMap::MANY_TO_ONE, array('city_id' => 'id', ), null, null);
        $this->addRelation('Option', 'Option', RelationMap::ONE_TO_MANY, array('id' => 'record_id', ), null, null, 'Options');
        $this->addRelation('AirplaneInfo', 'AirplaneInfo', RelationMap::ONE_TO_MANY, array('id' => 'record_id', ), null, null, 'AirplaneInfos');
        $this->addRelation('Reserve', 'Reserve', RelationMap::ONE_TO_MANY, array('id' => 'record_id', ), null, null, 'Reserves');
    } // buildRelations()

} // RecordCityTableMap
