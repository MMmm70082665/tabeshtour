<?php


/**
 * Base class that represents a query for the 'tour_reserve' table.
 *
 * 
 *
 * @method TourReserveQuery orderById($order = Criteria::ASC) Order by the id column
 * @method TourReserveQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method TourReserveQuery orderByFamily($order = Criteria::ASC) Order by the family column
 * @method TourReserveQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method TourReserveQuery orderByTelphone($order = Criteria::ASC) Order by the telphone column
 * @method TourReserveQuery orderByMobile($order = Criteria::ASC) Order by the mobile column
 * @method TourReserveQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method TourReserveQuery orderByTourId($order = Criteria::ASC) Order by the tour_id column
 *
 * @method TourReserveQuery groupById() Group by the id column
 * @method TourReserveQuery groupByName() Group by the name column
 * @method TourReserveQuery groupByFamily() Group by the family column
 * @method TourReserveQuery groupByAddress() Group by the address column
 * @method TourReserveQuery groupByTelphone() Group by the telphone column
 * @method TourReserveQuery groupByMobile() Group by the mobile column
 * @method TourReserveQuery groupByDate() Group by the date column
 * @method TourReserveQuery groupByTourId() Group by the tour_id column
 *
 * @method TourReserveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TourReserveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TourReserveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TourReserveQuery leftJoinTour($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tour relation
 * @method TourReserveQuery rightJoinTour($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tour relation
 * @method TourReserveQuery innerJoinTour($relationAlias = null) Adds a INNER JOIN clause to the query using the Tour relation
 *
 * @method TourReserve findOne(PropelPDO $con = null) Return the first TourReserve matching the query
 * @method TourReserve findOneOrCreate(PropelPDO $con = null) Return the first TourReserve matching the query, or a new TourReserve object populated from the query conditions when no match is found
 *
 * @method TourReserve findOneByName(string $name) Return the first TourReserve filtered by the name column
 * @method TourReserve findOneByFamily(string $family) Return the first TourReserve filtered by the family column
 * @method TourReserve findOneByAddress(string $address) Return the first TourReserve filtered by the address column
 * @method TourReserve findOneByTelphone(string $telphone) Return the first TourReserve filtered by the telphone column
 * @method TourReserve findOneByMobile(string $mobile) Return the first TourReserve filtered by the mobile column
 * @method TourReserve findOneByDate(string $date) Return the first TourReserve filtered by the date column
 * @method TourReserve findOneByTourId(int $tour_id) Return the first TourReserve filtered by the tour_id column
 *
 * @method array findById(int $id) Return TourReserve objects filtered by the id column
 * @method array findByName(string $name) Return TourReserve objects filtered by the name column
 * @method array findByFamily(string $family) Return TourReserve objects filtered by the family column
 * @method array findByAddress(string $address) Return TourReserve objects filtered by the address column
 * @method array findByTelphone(string $telphone) Return TourReserve objects filtered by the telphone column
 * @method array findByMobile(string $mobile) Return TourReserve objects filtered by the mobile column
 * @method array findByDate(string $date) Return TourReserve objects filtered by the date column
 * @method array findByTourId(int $tour_id) Return TourReserve objects filtered by the tour_id column
 *
 * @package    propel.generator.agent.om
 */
abstract class BaseTourReserveQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTourReserveQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'travel', $modelName = 'TourReserve', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TourReserveQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     TourReserveQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TourReserveQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TourReserveQuery) {
            return $criteria;
        }
        $query = new TourReserveQuery();
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
     * @return   TourReserve|TourReserve[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TourReservePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TourReservePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   TourReserve A model object, or null if the key is not found
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
     * @return   TourReserve A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `name`, `family`, `address`, `telphone`, `mobile`, `date`, `tour_id` FROM `tour_reserve` WHERE `id` = :p0';
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
            $obj = new TourReserve();
            $obj->hydrate($row);
            TourReservePeer::addInstanceToPool($obj, (string) $key);
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
     * @return TourReserve|TourReserve[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TourReserve[]|mixed the list of results, formatted by the current formatter
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
     * @return TourReserveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TourReservePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TourReserveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TourReservePeer::ID, $keys, Criteria::IN);
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
     * @return TourReserveQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(TourReservePeer::ID, $id, $comparison);
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
     * @return TourReserveQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TourReservePeer::NAME, $name, $comparison);
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
     * @return TourReserveQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TourReservePeer::FAMILY, $family, $comparison);
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
     * @return TourReserveQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TourReservePeer::ADDRESS, $address, $comparison);
    }

    /**
     * Filter the query on the telphone column
     *
     * Example usage:
     * <code>
     * $query->filterByTelphone('fooValue');   // WHERE telphone = 'fooValue'
     * $query->filterByTelphone('%fooValue%'); // WHERE telphone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telphone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TourReserveQuery The current query, for fluid interface
     */
    public function filterByTelphone($telphone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telphone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telphone)) {
                $telphone = str_replace('*', '%', $telphone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TourReservePeer::TELPHONE, $telphone, $comparison);
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
     * @return TourReserveQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TourReservePeer::MOBILE, $mobile, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('fooValue');   // WHERE date = 'fooValue'
     * $query->filterByDate('%fooValue%'); // WHERE date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $date The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TourReserveQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($date)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $date)) {
                $date = str_replace('*', '%', $date);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TourReservePeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the tour_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTourId(1234); // WHERE tour_id = 1234
     * $query->filterByTourId(array(12, 34)); // WHERE tour_id IN (12, 34)
     * $query->filterByTourId(array('min' => 12)); // WHERE tour_id > 12
     * </code>
     *
     * @see       filterByTour()
     *
     * @param     mixed $tourId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TourReserveQuery The current query, for fluid interface
     */
    public function filterByTourId($tourId = null, $comparison = null)
    {
        if (is_array($tourId)) {
            $useMinMax = false;
            if (isset($tourId['min'])) {
                $this->addUsingAlias(TourReservePeer::TOUR_ID, $tourId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tourId['max'])) {
                $this->addUsingAlias(TourReservePeer::TOUR_ID, $tourId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TourReservePeer::TOUR_ID, $tourId, $comparison);
    }

    /**
     * Filter the query by a related Tour object
     *
     * @param   Tour|PropelObjectCollection $tour The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TourReserveQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTour($tour, $comparison = null)
    {
        if ($tour instanceof Tour) {
            return $this
                ->addUsingAlias(TourReservePeer::TOUR_ID, $tour->getId(), $comparison);
        } elseif ($tour instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TourReservePeer::TOUR_ID, $tour->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByTour() only accepts arguments of type Tour or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Tour relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TourReserveQuery The current query, for fluid interface
     */
    public function joinTour($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Tour');

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
            $this->addJoinObject($join, 'Tour');
        }

        return $this;
    }

    /**
     * Use the Tour relation Tour object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TourQuery A secondary query class using the current class as primary query
     */
    public function useTourQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTour($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Tour', 'TourQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   TourReserve $tourReserve Object to remove from the list of results
     *
     * @return TourReserveQuery The current query, for fluid interface
     */
    public function prune($tourReserve = null)
    {
        if ($tourReserve) {
            $this->addUsingAlias(TourReservePeer::ID, $tourReserve->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
