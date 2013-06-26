<?php


/**
 * Base class that represents a query for the 'reserve' table.
 *
 *
 *
 * @method ReserveQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ReserveQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method ReserveQuery orderByFamily($order = Criteria::ASC) Order by the family column
 * @method ReserveQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method ReserveQuery orderByMobile($order = Criteria::ASC) Order by the mobile column
 * @method ReserveQuery orderByRecordId($order = Criteria::ASC) Order by the record_id column
 *
 * @method ReserveQuery groupById() Group by the id column
 * @method ReserveQuery groupByName() Group by the name column
 * @method ReserveQuery groupByFamily() Group by the family column
 * @method ReserveQuery groupByAddress() Group by the address column
 * @method ReserveQuery groupByMobile() Group by the mobile column
 * @method ReserveQuery groupByRecordId() Group by the record_id column
 *
 * @method ReserveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ReserveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ReserveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ReserveQuery leftJoinRecordCity($relationAlias = null) Adds a LEFT JOIN clause to the query using the RecordCity relation
 * @method ReserveQuery rightJoinRecordCity($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RecordCity relation
 * @method ReserveQuery innerJoinRecordCity($relationAlias = null) Adds a INNER JOIN clause to the query using the RecordCity relation
 *
 * @method Reserve findOne(PropelPDO $con = null) Return the first Reserve matching the query
 * @method Reserve findOneOrCreate(PropelPDO $con = null) Return the first Reserve matching the query, or a new Reserve object populated from the query conditions when no match is found
 *
 * @method Reserve findOneByName(string $name) Return the first Reserve filtered by the name column
 * @method Reserve findOneByFamily(string $family) Return the first Reserve filtered by the family column
 * @method Reserve findOneByAddress(string $address) Return the first Reserve filtered by the address column
 * @method Reserve findOneByMobile(string $mobile) Return the first Reserve filtered by the mobile column
 * @method Reserve findOneByRecordId(int $record_id) Return the first Reserve filtered by the record_id column
 *
 * @method array findById(int $id) Return Reserve objects filtered by the id column
 * @method array findByName(string $name) Return Reserve objects filtered by the name column
 * @method array findByFamily(string $family) Return Reserve objects filtered by the family column
 * @method array findByAddress(string $address) Return Reserve objects filtered by the address column
 * @method array findByMobile(string $mobile) Return Reserve objects filtered by the mobile column
 * @method array findByRecordId(int $record_id) Return Reserve objects filtered by the record_id column
 *
 * @package    propel.generator.agent.om
 */
abstract class BaseReserveQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseReserveQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'travel', $modelName = 'Reserve', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ReserveQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     ReserveQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ReserveQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ReserveQuery) {
            return $criteria;
        }
        $query = new ReserveQuery();
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
     * @return   Reserve|Reserve[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ReservePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ReservePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Reserve A model object, or null if the key is not found
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
     * @return   Reserve A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `name`, `family`, `address`, `mobile`, `record_id` FROM `reserve` WHERE `id` = :p0';
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
            $obj = new Reserve();
            $obj->hydrate($row);
            ReservePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Reserve|Reserve[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Reserve[]|mixed the list of results, formatted by the current formatter
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
     * @return ReserveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ReservePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ReserveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ReservePeer::ID, $keys, Criteria::IN);
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
     * @return ReserveQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ReservePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReserveQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReservePeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the family column
     *
     * Example usage:
     * <code>
     * $query->filterByFamily('fooValue');   // WHERE family = 'fooValue'
     * $query->filterByFamily('%fooValue%'); // WHERE family LIKE '%fooValue%'
     * </code>
     *
     * @param     string $family The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReserveQuery The current query, for fluid interface
     */
    public function filterByFamily($family = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($family)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $family)) {
                $family = str_replace('*', '%', $family);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReservePeer::FAMILY, $family, $comparison);
    }

    /**
     * Filter the query on the address column
     *
     * Example usage:
     * <code>
     * $query->filterByAddress('fooValue');   // WHERE address = 'fooValue'
     * $query->filterByAddress('%fooValue%'); // WHERE address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $address The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReserveQuery The current query, for fluid interface
     */
    public function filterByAddress($address = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($address)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $address)) {
                $address = str_replace('*', '%', $address);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReservePeer::ADDRESS, $address, $comparison);
    }

    /**
     * Filter the query on the mobile column
     *
     * Example usage:
     * <code>
     * $query->filterByMobile('fooValue');   // WHERE mobile = 'fooValue'
     * $query->filterByMobile('%fooValue%'); // WHERE mobile LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mobile The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReserveQuery The current query, for fluid interface
     */
    public function filterByMobile($mobile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mobile)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mobile)) {
                $mobile = str_replace('*', '%', $mobile);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReservePeer::MOBILE, $mobile, $comparison);
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
     * @return ReserveQuery The current query, for fluid interface
     */
    public function filterByRecordId($recordId = null, $comparison = null)
    {
        if (is_array($recordId)) {
            $useMinMax = false;
            if (isset($recordId['min'])) {
                $this->addUsingAlias(ReservePeer::RECORD_ID, $recordId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($recordId['max'])) {
                $this->addUsingAlias(ReservePeer::RECORD_ID, $recordId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReservePeer::RECORD_ID, $recordId, $comparison);
    }

    /**
     * Filter the query by a related RecordCity object
     *
     * @param   RecordCity|PropelObjectCollection $recordCity The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   ReserveQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByRecordCity($recordCity, $comparison = null)
    {
        if ($recordCity instanceof RecordCity) {
            return $this
                ->addUsingAlias(ReservePeer::RECORD_ID, $recordCity->getId(), $comparison);
        } elseif ($recordCity instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ReservePeer::RECORD_ID, $recordCity->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return ReserveQuery The current query, for fluid interface
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
     * @param   Reserve $reserve Object to remove from the list of results
     *
     * @return ReserveQuery The current query, for fluid interface
     */
    public function prune($reserve = null)
    {
        if ($reserve) {
            $this->addUsingAlias(ReservePeer::ID, $reserve->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
