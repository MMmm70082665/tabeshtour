<?php



/**
 * This class defines the structure of the 'tour_comment' table.
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
class TourCommentTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'agent.map.TourCommentTableMap';

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
        $this->setName('tour_comment');
        $this->setPhpName('TourComment');
        $this->setClassname('TourComment');
        $this->setPackage('agent');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 50, null);
        $this->addColumn('date', 'Date', 'VARCHAR', true, 255, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 255, null);
        $this->addColumn('desc', 'Desc', 'LONGVARCHAR', true, null, null);
        $this->addColumn('answer', 'Answer', 'LONGVARCHAR', false, null, null);
        $this->addColumn('publish', 'Publish', 'BOOLEAN', true, 1, null);
        $this->addForeignKey('tour_id', 'TourId', 'INTEGER', 'tour', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Tour', 'Tour', RelationMap::MANY_TO_ONE, array('tour_id' => 'id', ), null, null);
    } // buildRelations()

} // TourCommentTableMap
