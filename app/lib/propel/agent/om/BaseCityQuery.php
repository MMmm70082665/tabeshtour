<?php


/**
 * Base class that represents a query for the 'city' table.
 *
 * 
 *
 * @method CityQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CityQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method CityQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method CityQuery orderByDesc($order = Criteria::ASC) Order by the desc column
 * @method CityQuery orderByUsefulInfo($order = Criteria::ASC) Order by the useful_info column
 * @method CityQuery orderByPlace($order = Criteria::ASC) Order by the place column
 * @method CityQuery orderByHotel($order = Criteria::ASC) Order by the hotel column
 * @method CityQuery orderByRestoran($order = Criteria::ASC) Order by the restoran column
 * @method CityQuery orderByBuyCenter($order = Criteria::ASC) Order by the buy_center column
 *
 * @method CityQuery groupById() Group by the id column
 * @method CityQuery groupByCity() Group by the city column
 * @method CityQuery groupByCountry() Group by the country column
 * @method CityQuery groupByDesc() Group by the desc column
 * @method CityQuery groupByUsefulInfo() Group by the useful_info column
 * @method CityQuery groupByPlace() Group by the place column
 * @method CityQuery groupByHotel() Group by the hotel column
 * @method CityQuery groupByRestoran() Group by the restoran column
 * @method CityQuery groupByBuyCenter() Group by the buy_center column
 *
 * @method CityQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CityQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CityQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CityQuery leftJoinTour($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tour relation
 * @method CityQuery rightJoinTour($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tour relation
 * @method CityQuery innerJoinTour($relationAlias = null) Adds a INNER JOIN clause to the query using the Tour relation
 *
 * @method City findOne(PropelPDO $con = null) Return the first City matching the query
 * @method City findOneOrCreate(PropelPDO $con = null) Return the first City matching the query, or a new City object populated from the query conditions when no match is found
 *
 * @method City findOneByCity(string $city) Return the first City filtered by the city column
 * @method City findOneByCountry(string $country) Return the first City filtered by the country column
 * @method City findOneByDesc(string $desc) Return the first City filtered by the desc column
 * @method City findOneByUsefulInfo(string $useful_info) Return the first City filtered by the useful_info column
 * @method City findOneByPlace(string $place) Return the first City filtered by the place column
 * @method City findOneByHotel(string $hotel) Return the first City filtered by the hotel column
 * @method City findOneByRestoran(string $restoran) Return the first City filtered by the restoran column
 * @method City findOneByBuyCenter(string $buy_center) Return the first City filtered by the buy_center column
 *
 * @method array findById(int $id) Return City objects filtered by the id column
 * @method array findByCity(string $city) Return City objects filtered by the city column
 * @method array findByCountry(string $country) Return City objects filtered by the country column
 * @method array findByDesc(string $desc) Return City objects filtered by the desc column
 * @method array findByUsefulInfo(string $useful_info) Return City objects filtered by the useful_info column
 * @method array findByPlace(string $place) Return City objects filtered by the place column
 * @method array findByHotel(string $hotel) Return City objects filtered by the hotel column
 * @method array findByRestoran(string $restoran) Return City objects filtered by the restoran column
 * @method array findByBuyCenter(string $buy_center) Return City objects filtered by the buy_center column
 *
 * @package    propel.generator.agent.om
 */
abstract class BaseCityQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCityQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tabesh', $modelName = 'City', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CityQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     CityQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CityQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CityQuery) {
            return $criteria;
        }
        $query = new CityQuery();
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
     * @return   City|City[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CityPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   City A model object, or null if the key is not found
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
     * @return   City A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `city`, `country`, `desc`, `useful_info`, `place`, `hotel`, `restoran`, `buy_center` FROM `city` WHERE `id` = :p0';
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
            $obj = new City();
            $obj->hydrate($row);
            CityPeer::addInstanceToPool($obj, (string) $key);
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
     * @return City|City[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|City[]|mixed the list of results, formatted by the current formatter
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
     * @return CityQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CityPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CityQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CityPeer::ID, $keys, Criteria::IN);
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
     * @return CityQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(CityPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the city column
     *
     * Example usage:
     * <code>
     * $query->filterByCity('fooValue');   // WHERE city = 'fooValue'
     * $query->filterByCity('%fooValue%'); // WHERE city LIKE '%fooValue%'
     * </code>
     *
     * @param     string $city The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CityQuery The current query, for fluid interface
     */
    public function filterByCity($city = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($city)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $city)) {
                $city = str_replace('*', '%', $city);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CityPeer::CITY, $city, $comparison);
    }

    /**
     * Filter the query on the country column
     *
     * Example usage:
     * <code>
     * $query->filterByCountry('fooValue');   // WHERE country = 'fooValue'
     * $query->filterByCountry('%fooValue%'); // WHERE country LIKE '%fooValue%'
     * </code>
     *
     * @param     string $country The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CityQuery The current query, for fluid interface
     */
    public function filterByCountry($country = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($country)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $country)) {
                $country = str_replace('*', '%', $country);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CityPeer::COUNTRY, $country, $comparison);
    }

    /**
     * Filter the query on the desc column
     *
     * Example usage:
     * <code>
     * $query->filterByDesc('fooValue');   // WHERE desc = 'fooValue'
     * $query->filterByDesc('%fooValue%'); // WHERE desc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $desc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CityQuery The current query, for fluid interface
     */
    public function filterByDesc($desc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($desc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $desc)) {
                $desc = str_replace('*', '%', $desc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CityPeer::DESC, $desc, $comparison);
    }

    /**
     * Filter the query on the useful_info column
     *
     * Example usage:
     * <code>
     * $query->filterByUsefulInfo('fooValue');   // WHERE useful_info = 'fooValue'
     * $query->filterByUsefulInfo('%fooValue%'); // WHERE useful_info LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usefulInfo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CityQuery The current query, for fluid interface
     */
    public function filterByUsefulInfo($usefulInfo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usefulInfo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usefulInfo)) {
                $usefulInfo = str_replace('*', '%', $usefulInfo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CityPeer::USEFUL_INFO, $usefulInfo, $comparison);
    }

    /**
     * Filter the query on the place column
     *
     * Example usage:
     * <code>
     * $query->filterByPlace('fooValue');   // WHERE place = 'fooValue'
     * $query->filterByPlace('%fooValue%'); // WHERE place LIKE '%fooValue%'
     * </code>
     *
     * @param     string $place The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CityQuery The current query, for fluid interface
     */
    public function filterByPlace($place = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($place)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $place)) {
                $place = str_replace('*', '%', $place);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CityPeer::PLACE, $place, $comparison);
    }

    /**
     * Filter the query on the hotel column
     *
     * Example usage:
     * <code>
     * $query->filterByHotel('fooValue');   // WHERE hotel = 'fooValue'
     * $query->filterByHotel('%fooValue%'); // WHERE hotel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hotel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CityQuery The current query, for fluid interface
     */
    public function filterByHotel($hotel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hotel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hotel)) {
                $hotel = str_replace('*', '%', $hotel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CityPeer::HOTEL, $hotel, $comparison);
    }

    /**
     * Filter the query on the restoran column
     *
     * Example usage:
     * <code>
     * $query->filterByRestoran('fooValue');   // WHERE restoran = 'fooValue'
     * $query->filterByRestoran('%fooValue%'); // WHERE restoran LIKE '%fooValue%'
     * </code>
     *
     * @param     string $restoran The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CityQuery The current query, for fluid interface
     */
    public function filterByRestoran($restoran = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($restoran)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $restoran)) {
                $restoran = str_replace('*', '%', $restoran);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CityPeer::RESTORAN, $restoran, $comparison);
    }

    /**
     * Filter the query on the buy_center column
     *
     * Example usage:
     * <code>
     * $query->filterByBuyCenter('fooValue');   // WHERE buy_center = 'fooValue'
     * $query->filterByBuyCenter('%fooValue%'); // WHERE buy_center LIKE '%fooValue%'
     * </code>
     *
     * @param     string $buyCenter The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CityQuery The current query, for fluid interface
     */
    public function filterByBuyCenter($buyCenter = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($buyCenter)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $buyCenter)) {
                $buyCenter = str_replace('*', '%', $buyCenter);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CityPeer::BUY_CENTER, $buyCenter, $comparison);
    }

    /**
     * Filter the query by a related Tour object
     *
     * @param   Tour|PropelObjectCollection $tour  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   CityQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTour($tour, $comparison = null)
    {
        if ($tour instanceof Tour) {
            return $this
                ->addUsingAlias(CityPeer::ID, $tour->getCityId(), $comparison);
        } elseif ($tour instanceof PropelObjectCollection) {
            return $this
                ->useTourQuery()
                ->filterByPrimaryKeys($tour->getPrimaryKeys())
                ->endUse();
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
     * @return CityQuery The current query, for fluid interface
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
     * @param   City $city Object to remove from the list of results
     *
     * @return CityQuery The current query, for fluid interface
     */
    public function prune($city = null)
    {
        if ($city) {
            $this->addUsingAlias(CityPeer::ID, $city->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
