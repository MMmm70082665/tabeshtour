<?php


/**
 * Base class that represents a query for the 'tour' table.
 *
 *
 *
 * @method TourQuery orderById($order = Criteria::ASC) Order by the id column
 * @method TourQuery orderByPackageCode($order = Criteria::ASC) Order by the package_code column
 * @method TourQuery orderByBeginDate($order = Criteria::ASC) Order by the begin_date column
 * @method TourQuery orderByEndDate($order = Criteria::ASC) Order by the end_date column
 * @method TourQuery orderByCost($order = Criteria::ASC) Order by the cost column
 * @method TourQuery orderByMabda($order = Criteria::ASC) Order by the mabda column
 * @method TourQuery orderByMadarek($order = Criteria::ASC) Order by the madarek column
 * @method TourQuery orderByKhadamat($order = Criteria::ASC) Order by the khadamat column
 * @method TourQuery orderByDesc($order = Criteria::ASC) Order by the desc column
 * @method TourQuery orderByKind($order = Criteria::ASC) Order by the kind column
 * @method TourQuery orderByTravel($order = Criteria::ASC) Order by the travel column
 * @method TourQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method TourQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method TourQuery orderByCityId($order = Criteria::ASC) Order by the city_id column
 *
 * @method TourQuery groupById() Group by the id column
 * @method TourQuery groupByPackageCode() Group by the package_code column
 * @method TourQuery groupByBeginDate() Group by the begin_date column
 * @method TourQuery groupByEndDate() Group by the end_date column
 * @method TourQuery groupByCost() Group by the cost column
 * @method TourQuery groupByMabda() Group by the mabda column
 * @method TourQuery groupByMadarek() Group by the madarek column
 * @method TourQuery groupByKhadamat() Group by the khadamat column
 * @method TourQuery groupByDesc() Group by the desc column
 * @method TourQuery groupByKind() Group by the kind column
 * @method TourQuery groupByTravel() Group by the travel column
 * @method TourQuery groupByType() Group by the type column
 * @method TourQuery groupByStatus() Group by the status column
 * @method TourQuery groupByCityId() Group by the city_id column
 *
 * @method TourQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TourQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TourQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TourQuery leftJoinCity($relationAlias = null) Adds a LEFT JOIN clause to the query using the City relation
 * @method TourQuery rightJoinCity($relationAlias = null) Adds a RIGHT JOIN clause to the query using the City relation
 * @method TourQuery innerJoinCity($relationAlias = null) Adds a INNER JOIN clause to the query using the City relation
 *
 * @method TourQuery leftJoinTourReserve($relationAlias = null) Adds a LEFT JOIN clause to the query using the TourReserve relation
 * @method TourQuery rightJoinTourReserve($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TourReserve relation
 * @method TourQuery innerJoinTourReserve($relationAlias = null) Adds a INNER JOIN clause to the query using the TourReserve relation
 *
 * @method TourQuery leftJoinTourComment($relationAlias = null) Adds a LEFT JOIN clause to the query using the TourComment relation
 * @method TourQuery rightJoinTourComment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TourComment relation
 * @method TourQuery innerJoinTourComment($relationAlias = null) Adds a INNER JOIN clause to the query using the TourComment relation
 *
 * @method Tour findOne(PropelPDO $con = null) Return the first Tour matching the query
 * @method Tour findOneOrCreate(PropelPDO $con = null) Return the first Tour matching the query, or a new Tour object populated from the query conditions when no match is found
 *
 * @method Tour findOneByPackageCode(string $package_code) Return the first Tour filtered by the package_code column
 * @method Tour findOneByBeginDate(string $begin_date) Return the first Tour filtered by the begin_date column
 * @method Tour findOneByEndDate(string $end_date) Return the first Tour filtered by the end_date column
 * @method Tour findOneByCost(string $cost) Return the first Tour filtered by the cost column
 * @method Tour findOneByMabda(string $mabda) Return the first Tour filtered by the mabda column
 * @method Tour findOneByMadarek(string $madarek) Return the first Tour filtered by the madarek column
 * @method Tour findOneByKhadamat(string $khadamat) Return the first Tour filtered by the khadamat column
 * @method Tour findOneByDesc(string $desc) Return the first Tour filtered by the desc column
 * @method Tour findOneByKind(string $kind) Return the first Tour filtered by the kind column
 * @method Tour findOneByTravel(string $travel) Return the first Tour filtered by the travel column
 * @method Tour findOneByType(string $type) Return the first Tour filtered by the type column
 * @method Tour findOneByStatus(boolean $status) Return the first Tour filtered by the status column
 * @method Tour findOneByCityId(int $city_id) Return the first Tour filtered by the city_id column
 *
 * @method array findById(int $id) Return Tour objects filtered by the id column
 * @method array findByPackageCode(string $package_code) Return Tour objects filtered by the package_code column
 * @method array findByBeginDate(string $begin_date) Return Tour objects filtered by the begin_date column
 * @method array findByEndDate(string $end_date) Return Tour objects filtered by the end_date column
 * @method array findByCost(string $cost) Return Tour objects filtered by the cost column
 * @method array findByMabda(string $mabda) Return Tour objects filtered by the mabda column
 * @method array findByMadarek(string $madarek) Return Tour objects filtered by the madarek column
 * @method array findByKhadamat(string $khadamat) Return Tour objects filtered by the khadamat column
 * @method array findByDesc(string $desc) Return Tour objects filtered by the desc column
 * @method array findByKind(string $kind) Return Tour objects filtered by the kind column
 * @method array findByTravel(string $travel) Return Tour objects filtered by the travel column
 * @method array findByType(string $type) Return Tour objects filtered by the type column
 * @method array findByStatus(boolean $status) Return Tour objects filtered by the status column
 * @method array findByCityId(int $city_id) Return Tour objects filtered by the city_id column
 *
 * @package    propel.generator.agent.om
 */
abstract class BaseTourQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTourQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'travel', $modelName = 'Tour', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TourQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     TourQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TourQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TourQuery) {
            return $criteria;
        }
        $query = new TourQuery();
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
     * @return   Tour|Tour[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TourPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TourPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Tour A model object, or null if the key is not found
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
     * @return   Tour A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `package_code`, `begin_date`, `end_date`, `cost`, `mabda`, `madarek`, `khadamat`, `desc`, `kind`, `travel`, `type`, `status`, `city_id` FROM `tour` WHERE `id` = :p0';
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
            $obj = new Tour();
            $obj->hydrate($row);
            TourPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Tour|Tour[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Tour[]|mixed the list of results, formatted by the current formatter
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
     * @return TourQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TourPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TourQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TourPeer::ID, $keys, Criteria::IN);
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
     * @return TourQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(TourPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the package_code column
     *
     * Example usage:
     * <code>
     * $query->filterByPackageCode('fooValue');   // WHERE package_code = 'fooValue'
     * $query->filterByPackageCode('%fooValue%'); // WHERE package_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $packageCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TourQuery The current query, for fluid interface
     */
    public function filterByPackageCode($packageCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($packageCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $packageCode)) {
                $packageCode = str_replace('*', '%', $packageCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TourPeer::PACKAGE_CODE, $packageCode, $comparison);
    }

    /**
     * Filter the query on the begin_date column
     *
     * Example usage:
     * <code>
     * $query->filterByBeginDate('fooValue');   // WHERE begin_date = 'fooValue'
     * $query->filterByBeginDate('%fooValue%'); // WHERE begin_date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $beginDate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TourQuery The current query, for fluid interface
     */
    public function filterByBeginDate($beginDate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($beginDate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $beginDate)) {
                $beginDate = str_replace('*', '%', $beginDate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TourPeer::BEGIN_DATE, $beginDate, $comparison);
    }

    /**
     * Filter the query on the end_date column
     *
     * Example usage:
     * <code>
     * $query->filterByEndDate('fooValue');   // WHERE end_date = 'fooValue'
     * $query->filterByEndDate('%fooValue%'); // WHERE end_date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $endDate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TourQuery The current query, for fluid interface
     */
    public function filterByEndDate($endDate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($endDate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $endDate)) {
                $endDate = str_replace('*', '%', $endDate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TourPeer::END_DATE, $endDate, $comparison);
    }

    /**
     * Filter the query on the cost column
     *
     * Example usage:
     * <code>
     * $query->filterByCost('fooValue');   // WHERE cost = 'fooValue'
     * $query->filterByCost('%fooValue%'); // WHERE cost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cost The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TourQuery The current query, for fluid interface
     */
    public function filterByCost($cost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cost)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cost)) {
                $cost = str_replace('*', '%', $cost);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TourPeer::COST, $cost, $comparison);
    }

    /**
     * Filter the query on the mabda column
     *
     * Example usage:
     * <code>
     * $query->filterByMabda('fooValue');   // WHERE mabda = 'fooValue'
     * $query->filterByMabda('%fooValue%'); // WHERE mabda LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mabda The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TourQuery The current query, for fluid interface
     */
    public function filterByMabda($mabda = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mabda)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mabda)) {
                $mabda = str_replace('*', '%', $mabda);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TourPeer::MABDA, $mabda, $comparison);
    }

    /**
     * Filter the query on the madarek column
     *
     * Example usage:
     * <code>
     * $query->filterByMadarek('fooValue');   // WHERE madarek = 'fooValue'
     * $query->filterByMadarek('%fooValue%'); // WHERE madarek LIKE '%fooValue%'
     * </code>
     *
     * @param     string $madarek The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TourQuery The current query, for fluid interface
     */
    public function filterByMadarek($madarek = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($madarek)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $madarek)) {
                $madarek = str_replace('*', '%', $madarek);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TourPeer::MADAREK, $madarek, $comparison);
    }

    /**
     * Filter the query on the khadamat column
     *
     * Example usage:
     * <code>
     * $query->filterByKhadamat('fooValue');   // WHERE khadamat = 'fooValue'
     * $query->filterByKhadamat('%fooValue%'); // WHERE khadamat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $khadamat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TourQuery The current query, for fluid interface
     */
    public function filterByKhadamat($khadamat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($khadamat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $khadamat)) {
                $khadamat = str_replace('*', '%', $khadamat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TourPeer::KHADAMAT, $khadamat, $comparison);
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
     * @return TourQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TourPeer::DESC, $desc, $comparison);
    }

    /**
     * Filter the query on the kind column
     *
     * Example usage:
     * <code>
     * $query->filterByKind('fooValue');   // WHERE kind = 'fooValue'
     * $query->filterByKind('%fooValue%'); // WHERE kind LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kind The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TourQuery The current query, for fluid interface
     */
    public function filterByKind($kind = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kind)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kind)) {
                $kind = str_replace('*', '%', $kind);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TourPeer::KIND, $kind, $comparison);
    }

    /**
     * Filter the query on the travel column
     *
     * Example usage:
     * <code>
     * $query->filterByTravel('fooValue');   // WHERE travel = 'fooValue'
     * $query->filterByTravel('%fooValue%'); // WHERE travel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $travel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TourQuery The current query, for fluid interface
     */
    public function filterByTravel($travel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($travel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $travel)) {
                $travel = str_replace('*', '%', $travel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TourPeer::TRAVEL, $travel, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TourQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TourPeer::TYPE, $type, $comparison);
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
     * @return TourQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (is_string($status)) {
            $status = in_array(strtolower($status), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TourPeer::STATUS, $status, $comparison);
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
     * @return TourQuery The current query, for fluid interface
     */
    public function filterByCityId($cityId = null, $comparison = null)
    {
        if (is_array($cityId)) {
            $useMinMax = false;
            if (isset($cityId['min'])) {
                $this->addUsingAlias(TourPeer::CITY_ID, $cityId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cityId['max'])) {
                $this->addUsingAlias(TourPeer::CITY_ID, $cityId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TourPeer::CITY_ID, $cityId, $comparison);
    }

    /**
     * Filter the query by a related City object
     *
     * @param   City|PropelObjectCollection $city The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TourQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByCity($city, $comparison = null)
    {
        if ($city instanceof City) {
            return $this
                ->addUsingAlias(TourPeer::CITY_ID, $city->getId(), $comparison);
        } elseif ($city instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TourPeer::CITY_ID, $city->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return TourQuery The current query, for fluid interface
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
     * Filter the query by a related TourReserve object
     *
     * @param   TourReserve|PropelObjectCollection $tourReserve  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TourQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTourReserve($tourReserve, $comparison = null)
    {
        if ($tourReserve instanceof TourReserve) {
            return $this
                ->addUsingAlias(TourPeer::ID, $tourReserve->getTourId(), $comparison);
        } elseif ($tourReserve instanceof PropelObjectCollection) {
            return $this
                ->useTourReserveQuery()
                ->filterByPrimaryKeys($tourReserve->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTourReserve() only accepts arguments of type TourReserve or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TourReserve relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TourQuery The current query, for fluid interface
     */
    public function joinTourReserve($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TourReserve');

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
            $this->addJoinObject($join, 'TourReserve');
        }

        return $this;
    }

    /**
     * Use the TourReserve relation TourReserve object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TourReserveQuery A secondary query class using the current class as primary query
     */
    public function useTourReserveQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTourReserve($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TourReserve', 'TourReserveQuery');
    }

    /**
     * Filter the query by a related TourComment object
     *
     * @param   TourComment|PropelObjectCollection $tourComment  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TourQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTourComment($tourComment, $comparison = null)
    {
        if ($tourComment instanceof TourComment) {
            return $this
                ->addUsingAlias(TourPeer::ID, $tourComment->getTourId(), $comparison);
        } elseif ($tourComment instanceof PropelObjectCollection) {
            return $this
                ->useTourCommentQuery()
                ->filterByPrimaryKeys($tourComment->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTourComment() only accepts arguments of type TourComment or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TourComment relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TourQuery The current query, for fluid interface
     */
    public function joinTourComment($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TourComment');

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
            $this->addJoinObject($join, 'TourComment');
        }

        return $this;
    }

    /**
     * Use the TourComment relation TourComment object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TourCommentQuery A secondary query class using the current class as primary query
     */
    public function useTourCommentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTourComment($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TourComment', 'TourCommentQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Tour $tour Object to remove from the list of results
     *
     * @return TourQuery The current query, for fluid interface
     */
    public function prune($tour = null)
    {
        if ($tour) {
            $this->addUsingAlias(TourPeer::ID, $tour->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
