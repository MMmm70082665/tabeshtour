<?php



/**
 * This class defines the structure of the 'post' table.
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
class PostTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'agent.map.PostTableMap';

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
        $this->setName('post');
        $this->setPhpName('Post');
        $this->setClassname('Post');
        $this->setPackage('agent');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('subject', 'Subject', 'VARCHAR', true, 255, null);
        $this->addColumn('long_desc', 'LongDesc', 'LONGVARCHAR', true, null, null);
        $this->addColumn('short_desc', 'ShortDesc', 'LONGVARCHAR', false, null, null);
        $this->addColumn('publisher', 'Publisher', 'BOOLEAN', true, 1, null);
        $this->addColumn('date', 'Date', 'VARCHAR', true, 255, null);
        $this->addColumn('tag', 'Tag', 'LONGVARCHAR', false, null, null);
        $this->addColumn('order', 'Order', 'INTEGER', true, null, null);
        $this->addColumn('view', 'View', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PostTableMap
