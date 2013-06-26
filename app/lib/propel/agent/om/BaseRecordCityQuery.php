<?php


/**
 * Base class that represents a query for the 'record_city' table.
 *
 *
 *
 * @method RecordCityQuery orderById($order = Criteria::ASC) Order by the id column
 * @method RecordCityQuery orderByDayCounter($order = Criteria::ASC) Order by the day_counter column
 * @method RecordCityQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method RecordCityQuery orderByCityId($order = Criteria::ASC) Order by the city_id column
 *
 * @method RecordCityQuery groupById() Group by the id column
 * @method RecordCityQuery groupByDayCounter() Group by the day_counter column
 * @method RecordCityQuery groupByStatus() Group by the status column
 * @method RecordCityQuery groupByCityId() Group by the city_id column
 *
 * @method RecordCityQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RecordCityQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RecordCityQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RecordCityQuery leftJoinCity($relationAlias = null) Adds a LEFT JOIN clause to the query using the City relation
 * @method RecordCityQuery rightJoinCity($relationAlias = null) Adds a RIGHT JOIN clause to the query using the City relation
 * @method RecordCityQuery innerJoinCity($relationAlias = null) Adds a INNER JOIN clause to the query using the City relation
 *
 * @method RecordCityQuery leftJoinOption($relationAlias = null) Adds a LEFT JOIN clause to the query using the Option relation
 * @method RecordCityQuery rightJoinOption($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Option relation
 * @method RecordCityQuery innerJoinOption($relationAlias = null) Adds a INNER JOIN clause to the query using the Option relation
 *
 * @method RecordCityQuery leftJoinAirplaneInfo($relationAlias = null) Adds a LEFT JOIN clause to the query using the AirplaneInfo relation
 * @method RecordCityQuery rightJoinAirplaneInfo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AirplaneInfo relation
 * @method RecordCityQuery innerJoinAirplaneInfo($relationAlias = null) Adds a INNER JOIN clause to the query using the AirplaneInfo relation
 *
 * @method RecordCityQuery leftJoinReserve($relationAlias = null) Adds a LEFT JOIN clause to the query using the Reserve relation
 * @method RecordCityQuery rightJoinReserve($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Reserve relation
 * @method RecordCityQuery innerJoinReserve($relationAlias = null) Adds a INNER JOIN clause to the query using the Reserve relation
 *
 * @method RecordCity findOne(PropelPDO $con = null) Return the first RecordCity matching the query
 * @method RecordCity findOneOrCreate(PropelPDO $con = null) Return the first RecordCity matching the query, or a new RecordCity object populated from the query conditions when no match is found
 *
 * @method RecordCity findOneByDayCounter(int $day_counter) Return the first RecordCity filtered by the day_counter column
 * @method RecordCity findOneByStatus(boolean $status) Return the first RecordCity filtered by the status column
 * @method RecordCity findOneByCityId(int $city_id) Return the first RecordCity filtered by the city_id column
 *
 * @method array findById(int $id) Return RecordCity objects filtered by the id column
 * @method array findByDayCounter(int $day_counter) Return RecordCity objects filtered by the day_counter column
 * @method array findByStatus(boolean $status) Return RecordCity objects filtered by the status column
 * @method array findByCityId(int $city_id) Return RecordCity objects filtered by the city_id column
 *
 * @package    propel.generator.agent.om
 */
abstract class BaseRecordCityQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRecordCityQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'travel', $modelName = 'RecordCity', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RecordCityQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     RecordCityQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RecordCityQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RecordCityQuery) {
            return $criteria;
        }
        $query = new RecordCityQuery();
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
     * @return   RecordCity|RecordCity[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RecordCityPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RecordCityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   RecordCity A model object, or null if the key is not found
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
     * @return   RecordCity A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `day_counter`, `status`, `city_id` FROM `record_city` WHERE `id` = :p0';
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
            $obj = new RecordCity();
            $obj->hydrate($row);
            RecordCityPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RecordCity|RecordCity[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RecordCity[]|mixed the list of results, formatted by the current formatter
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
     * @return RecordCityQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RecordCityPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RecordCityQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RecordCityPeer::ID, $keys, Criteria::IN);
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
     * @return RecordCityQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(RecordCityPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the day_counter column
     *
     * Example usage:
     * <code>
     * $query->filterByDayCounter(1234); // WHERE day_counter = 1234
     * $query->filterByDayCounter(array(12, 34)); // WHERE day_counter IN (12, 34)
     * $query->filterByDayCounter(array('min' => 12)); // WHERE day_counter > 12
     * </code>
     *
     * @param     mixed $dayCounter The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RecordCityQuery The current query, for fluid interface
     */
    public function filterByDayCounter($dayCounter = null, $comparison = null)
    {
        if (is_array($dayCounter)) {
            $useMinMax = false;
            if (isset($dayCounter['min'])) {
                $this->addUsingAlias(RecordCityPeer::DAY_COUNTER, $dayCounter['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dayCounter['max'])) {
                $this->addUsingAlias(RecordCityPeer::DAY_COUNTER, $dayCounter['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RecordCityPeer::DAY_COUNTER, $dayCounter, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus(true); // WHERE status = true
     * $query->filterByStatus('yes'); // WHERE status = true
     * </code>
     *
     * @param     boolean|string $status The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RecordCityQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (is_string($status)) {
            $status = in_array(strtolower($status), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RecordCityPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the city_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCityId(1234); // WHERE city_id = 1234
     * $query->filterByCityId(array(12, 34)); // WHERE city_id IN (12, 34)
     * $query->filterByCityId(array('min' => 12)); // WHERE city_id > 12
     * </code>
     *
     * @see       filterByCity()
     *
     * @param     mixed $cityId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RecordCityQuery The current query, for fluid interface
     */
    public function filterByCityId($cityId = null, $comparison = null)
    {
        if (is_array($cityId)) {
            $useMinMax = false;
            if (isset($cityId['min'])) {
                $this->addUsingAlias(RecordCityPeer::CITY_ID, $cityId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cityId['max'])) {
                $this->addUsingAlias(RecordCityPeer::CITY_ID, $cityId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RecordCityPeer::CITY_ID, $cityId, $comparison);
    }

    /**
     * Filter the query by a related City object
     *
     * @param   City|PropelObjectCollection $city The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   RecordCityQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByCity($city, $comparison = null)
    {
        if ($city instanceof City) {
            return $this
                ->addUsingAlias(RecordCityPeer::CITY_ID, $city->getId(), $comparison);
        } elseif ($city instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RecordCityPeer::CITY_ID, $city->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCity() only accepts arguments of type City or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the City relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RecordCityQuery The current query, for fluid interface
     */
    public function joinCity($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('City');

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
            $this->addJoinObject($join, 'City');
        }

        return $this;
    }

    /**
     * Use the City relation City object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CityQuery A secondary query class using the current class as primary query
     */
    public function useCityQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCity($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'City', 'CityQuery');
    }

    /**
     * Filter the query by a related Option object
     *
     * @param   Option|PropelObjectCollection $option  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   RecordCityQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByOption($option, $comparison = null)
    {
        if ($option instanceof Option) {
            return $this
                ->addUsingAlias(RecordCityPeer::ID, $option->getRecordId(), $comparison);
        } elseif ($option instanceof PropelObjectCollection) {
            return $this
                ->useOptionQuery()
                ->filterByPrimaryKeys($option->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOption() only accepts arguments of type Option or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Option relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RecordCityQuery The current query, for fluid interface
     */
    public function joinOption($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Option');

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
            $this->addJoinObject($join, 'Option');
        }

        return $this;
    }

    /**
     * Use the Option relation Option object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OptionQuery A secondary query class using the current class as primary query
     */
    public function useOptionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOption($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Option', 'OptionQuery');
    }

    /**
     * Filter the query by a related AirplaneInfo object
     *
     * @param   AirplaneInfo|PropelObjectCollection $airplaneInfo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   RecordCityQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAirplaneInfo($airplaneInfo, $comparison = null)
    {
        if ($airplaneInfo instanceof AirplaneInfo) {
            return $this
                ->addUsingAlias(RecordCityPeer::ID, $airplaneInfo->getRecordId(), $comparison);
        } elseif ($airplaneInfo instanceof PropelObjectCollection) {
            return $this
                ->useAirplaneInfoQuery()
                ->filterByPrimaryKeys($airplaneInfo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAirplaneInfo() only accepts arguments of type AirplaneInfo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AirplaneInfo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RecordCityQuery The current query, for fluid interface
     */
    public function joinAirplaneInfo($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AirplaneInfo');

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
            $this->addJoinObject($join, 'AirplaneInfo');
        }

        return $this;
    }

    /**
     * Use the AirplaneInfo relation AirplaneInfo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AirplaneInfoQuery A secondary query class using the current class as primary query
     */
    public function useAirplaneInfoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAirplaneInfo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AirplaneInfo', 'AirplaneInfoQuery');
    }

    /**
     * Filter the query by a related Reserve object
     *
     * @param   Reserve|PropelObjectCollection $reserve  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   RecordCityQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByReserve($reserve, $comparison = null)
    {
        if ($reserve instanceof Reserve) {
            return $this
                ->addUsingAlias(RecordCityPeer::ID, $reserve->getRecordId(), $comparison);
        } elseif ($reserve instanceof PropelObjectCollection) {
            return $this
                ->useReserveQuery()
                ->filterByPrimaryKeys($reserve->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByReserve() only accepts arguments of type Reserve or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Reserve relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RecordCityQuery The current query, for fluid interface
     */
    public function joinReserve($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Reserve');

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
            $this->addJoinObject($join, 'Reserve');
        }

        return $this;
    }

    /**
     * Use the Reserve relation Reserve object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ReserveQuery A secondary query class using the current class as primary query
     */
    public function useReserveQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinReserve($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Reserve', 'ReserveQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RecordCity $recordCity Object to remove from the list of results
     *
     * @return RecordCityQuery The current query, for fluid interface
     */
    public function prune($recordCity = null)
    {
        if ($recordCity) {
            $this->addUsingAlias(RecordCityPeer::ID, $recordCity->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
