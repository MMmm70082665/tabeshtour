<?php



/**
 * This class defines the structure of the 'tour' table.
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
class TourTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'agent.map.TourTableMap';

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
        $this->setName('tour');
        $this->setPhpName('Tour');
        $this->setClassname('Tour');
        $this->setPackage('agent');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('package_code', 'PackageCode', 'VARCHAR', true, 255, null);
        $this->addColumn('begin_date', 'BeginDate', 'VARCHAR', true, 255, null);
        $this->addColumn('end_date', 'EndDate', 'VARCHAR', true, 255, null);
        $this->addColumn('cost', 'Cost', 'VARCHAR', true, 15, null);
        $this->addColumn('mabda', 'Mabda', 'VARCHAR', true, 15, null);
        $this->addColumn('madarek', 'Madarek', 'LONGVARCHAR', true, null, null);
        $this->addColumn('khadamat', 'Khadamat', 'LONGVARCHAR', true, null, null);
        $this->addColumn('desc', 'Desc', 'LONGVARCHAR', true, null, null);
        $this->addColumn('kind', 'Kind', 'VARCHAR', true, 255, null);
        $this->addColumn('travel', 'Travel', 'VARCHAR', true, 255, null);
        $this->addColumn('type', 'Type', 'VARCHAR', true, 255, null);
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
        $this->addRelation('TourReserve', 'TourReserve', RelationMap::ONE_TO_MANY, array('id' => 'tour_id', ), null, null, 'TourReserves');
        $this->addRelation('TourComment', 'TourComment', RelationMap::ONE_TO_MANY, array('id' => 'tour_id', ), null, null, 'TourComments');
    } // buildRelations()

} // TourTableMap
