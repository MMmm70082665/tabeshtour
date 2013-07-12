<?php



/**
 * This class defines the structure of the 'partners' table.
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
class PartnersTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'agent.map.PartnersTableMap';

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
        $this->setName('partners');
        $this->setPhpName('Partners');
        $this->setClassname('Partners');
        $this->setPackage('agent');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('address', 'Address', 'LONGVARCHAR', true, null, null);
        $this->addColumn('website', 'Website', 'VARCHAR', false, 60, null);
        $this->addColumn('phone', 'Phone', 'VARCHAR', true, 60, null);
        $this->addColumn('fax', 'Fax', 'VARCHAR', false, 60, null);
        $this->addColumn('desc', 'Desc', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PartnersTableMap
