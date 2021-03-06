<?php



/**
 * This class defines the structure of the 'tour_reserve' table.
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
class TourReserveTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'agent.map.TourReserveTableMap';

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
        $this->setName('tour_reserve');
        $this->setPhpName('TourReserve');
        $this->setClassname('TourReserve');
        $this->setPackage('agent');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 45, null);
        $this->addColumn('family', 'Family', 'VARCHAR', true, 45, null);
        $this->addColumn('address', 'Address', 'LONGVARCHAR', true, null, null);
        $this->addColumn('telphone', 'Telphone', 'VARCHAR', false, 11, null);
        $this->addColumn('mobile', 'Mobile', 'VARCHAR', true, 11, null);
        $this->addColumn('date', 'Date', 'VARCHAR', true, 255, null);
        $this->addForeignKey('tour_id', 'TourId', 'INTEGER', 'tour', 'id', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Tour', 'Tour', RelationMap::MANY_TO_ONE, array('tour_id' => 'id', ), null, null);
    } // buildRelations()

} // TourReserveTableMap
