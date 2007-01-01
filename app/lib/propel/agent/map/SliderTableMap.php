<?php



/**
 * This class defines the structure of the 'slider' table.
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
class SliderTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'agent.map.SliderTableMap';

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
        $this->setName('slider');
        $this->setPhpName('Slider');
        $this->setClassname('Slider');
        $this->setPackage('agent');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('content', 'Content', 'VARCHAR', true, 255, null);
        $this->addColumn('shenase', 'Shenase', 'VARCHAR', true, 255, null);
        $this->addColumn('xpos', 'Xpos', 'INTEGER', true, null, null);
        $this->addColumn('ypos', 'Ypos', 'INTEGER', true, null, null);
        $this->addColumn('effect', 'Effect', 'VARCHAR', true, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // SliderTableMap
