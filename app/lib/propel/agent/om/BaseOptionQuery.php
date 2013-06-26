<?php


/**
 * Base class that represents a query for the 'option' table.
 *
 *
 *
 * @method OptionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method OptionQuery orderByRecordId($order = Criteria::ASC) Order by the record_id column
 *
 * @method OptionQuery groupById() Group by the id column
 * @method OptionQuery groupByRecordId() Group by the record_id column
 *
 * @method OptionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OptionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OptionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OptionQuery leftJoinRecordCity($relationAlias = null) Adds a LEFT JOIN clause to the query using the RecordCity relation
 * @method OptionQuery rightJoinRecordCity($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RecordCity relation
 * @method OptionQuery innerJoinRecordCity($relationAlias = null) Adds a INNER JOIN clause to the query using the RecordCity relation
 *
 * @method Option findOne(PropelPDO $con = null) Return the first Option matching the query
 * @method Option findOneOrCreate(PropelPDO $con = null) Return the first Option matching the query, or a new Option object populated from the query conditions when no match is found
 *
 * @method Option findOneByRecordId(int $record_id) Return the first Option filtered by the record_id column
 *
 * @method array findById(int $id) Return Option objects filtered by the id column
 * @method array findByRecordId(int $record_id) Return Option objects filtered by the record_id column
 *
 * @package    propel.generator.agent.om
 */
abstract class BaseOptionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOptionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'travel', $modelName = 'Option', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OptionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     OptionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OptionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OptionQuery) {
            return $criteria;
        }
        $query = new OptionQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Option|Option[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OptionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OptionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   Option A model object, or null if the key is not found
     * @throws   PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   Option A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `record_id` FROM `option` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Option();
            $obj->hydrate($row);
            OptionPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Option|Option[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Option[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return OptionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OptionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OptionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OptionPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OptionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(OptionPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the record_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRecordId(1234); // WHERE record_id = 1234
     * $query->filterByRecordId(array(12, 34)); // WHERE record_id IN (12, 34)
     * $query->filterByRecordId(array('min' => 12)); // WHERE record_id > 12
     * </code>
     *
     * @see       filterByRecordCity()
     *
     * @param     mixed $recordId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OptionQuery The current query, for fluid interface
     */
    public function filterByRecordId($recordId = null, $comparison = null)
    {
        if (is_array($recordId)) {
            $useMinMax = false;
            if (isset($recordId['min'])) {
                $this->addUsingAlias(OptionPeer::RECORD_ID, $recordId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($recordId['max'])) {
                $this->addUsingAlias(OptionPeer::RECORD_ID, $recordId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OptionPeer::RECORD_ID, $recordId, $comparison);
    }

    /**
     * Filter the query by a related RecordCity object
     *
     * @param   RecordCity|PropelObjectCollection $recordCity The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   OptionQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByRecordCity($recordCity, $comparison = null)
    {
        if ($recordCity instanceof RecordCity) {
            return $this
                ->addUsingAlias(OptionPeer::RECORD_ID, $recordCity->getId(), $comparison);
        } elseif ($recordCity instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OptionPeer::RECORD_ID, $recordCity->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByRecordCity() only accepts arguments of type RecordCity or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RecordCity relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OptionQuery The current query, for fluid interface
     */
    public function joinRecordCity($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RecordCity');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'RecordCity');
        }

        return $this;
    }

    /**
     * Use the RecordCity relation RecordCity object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RecordCityQuery A secondary query class using the current class as primary query
     */
    public function useRecordCityQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRecordCity($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RecordCity', 'RecordCityQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Option $option Object to remove from the list of results
     *
     * @return OptionQuery The current query, for fluid interface
     */
    public function prune($option = null)
    {
        if ($option) {
            $this->addUsingAlias(OptionPeer::ID, $option->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
