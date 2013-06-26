<?php



/**
 * This class defines the structure of the 'airplane_info' table.
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
class AirplaneInfoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'agent.map.AirplaneInfoTableMap';

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
        $this->setName('airplane_info');
        $this->setPhpName('AirplaneInfo');
        $this->setClassname('AirplaneInfo');
        $this->setPackage('agent');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('office_name', 'OfficeName', 'VARCHAR', true, 45, null);
        $this->addColumn('address', 'Address', 'LONGVARCHAR', true, null, null);
        $this->addColumn('website', 'Website', 'VARCHAR', false, 60, null);
        $this->addColumn('explaine', 'Explaine', 'LONGVARCHAR', true, null, null);
        $this->addForeignKey('record_id', 'RecordId', 'INTEGER', 'record_city', 'id', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('RecordCity', 'RecordCity', RelationMap::MANY_TO_ONE, array('record_id' => 'id', ), null, null);
    } // buildRelations()

} // AirplaneInfoTableMap
