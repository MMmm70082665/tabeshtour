<?php


/**
 * Base class that represents a query for the 'tour_comment' table.
 *
 *
 *
 * @method TourCommentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method TourCommentQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method TourCommentQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method TourCommentQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method TourCommentQuery orderByDesc($order = Criteria::ASC) Order by the desc column
 * @method TourCommentQuery orderByAnswer($order = Criteria::ASC) Order by the answer column
 * @method TourCommentQuery orderByPublish($order = Criteria::ASC) Order by the publish column
 * @method TourCommentQuery orderByTourId($order = Criteria::ASC) Order by the tour_id column
 *
 * @method TourCommentQuery groupById() Group by the id column
 * @method TourCommentQuery groupByName() Group by the name column
 * @method TourCommentQuery groupByDate() Group by the date column
 * @method TourCommentQuery groupByEmail() Group by the email column
 * @method TourCommentQuery groupByDesc() Group by the desc column
 * @method TourCommentQuery groupByAnswer() Group by the answer column
 * @method TourCommentQuery groupByPublish() Group by the publish column
 * @method TourCommentQuery groupByTourId() Group by the tour_id column
 *
 * @method TourCommentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TourCommentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TourCommentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TourCommentQuery leftJoinTour($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tour relation
 * @method TourCommentQuery rightJoinTour($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tour relation
 * @method TourCommentQuery innerJoinTour($relationAlias = null) Adds a INNER JOIN clause to the query using the Tour relation
 *
 * @method TourComment findOne(PropelPDO $con = null) Return the first TourComment matching the query
 * @method TourComment findOneOrCreate(PropelPDO $con = null) Return the first TourComment matching the query, or a new TourComment object populated from the query conditions when no match is found
 *
 * @method TourComment findOneByName(string $name) Return the first TourComment filtered by the name column
 * @method TourComment findOneByDate(string $date) Return the first TourComment filtered by the date column
 * @method TourComment findOneByEmail(string $email) Return the first TourComment filtered by the email column
 * @method TourComment findOneByDesc(string $desc) Return the first TourComment filtered by the desc column
 * @method TourComment findOneByAnswer(string $answer) Return the first TourComment filtered by the answer column
 * @method TourComment findOneByPublish(boolean $publish) Return the first TourComment filtered by the publish column
 * @method TourComment findOneByTourId(int $tour_id) Return the first TourComment filtered by the tour_id column
 *
 * @method array findById(int $id) Return TourComment objects filtered by the id column
 * @method array findByName(string $name) Return TourComment objects filtered by the name column
 * @method array findByDate(string $date) Return TourComment objects filtered by the date column
 * @method array findByEmail(string $email) Return TourComment objects filtered by the email column
 * @method array findByDesc(string $desc) Return TourComment objects filtered by the desc column
 * @method array findByAnswer(string $answer) Return TourComment objects filtered by the answer column
 * @method array findByPublish(boolean $publish) Return TourComment objects filtered by the publish column
 * @method array findByTourId(int $tour_id) Return TourComment objects filtered by the tour_id column
 *
 * @package    propel.generator.agent.om
 */
abstract class BaseTourCommentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTourCommentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'travel', $modelName = 'TourComment', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TourCommentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     TourCommentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TourCommentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TourCommentQuery) {
            return $criteria;
        }
        $query = new TourCommentQuery();
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
     * @return   TourComment|TourComment[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TourCommentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TourCommentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   TourComment A model object, or null if the key is not found
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
     * @return   TourComment A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `name`, `date`, `email`, `desc`, `answer`, `publish`, `tour_id` FROM `tour_comment` WHERE `id` = :p0';
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
            $obj = new TourComment();
            $obj->hydrate($row);
            TourCommentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TourComment|TourComment[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TourComment[]|mixed the list of results, formatted by the current formatter
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
     * @return TourCommentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TourCommentPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TourCommentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TourCommentPeer::ID, $keys, Criteria::IN);
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
     * @return TourCommentQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(TourCommentPeer::ID, $id, $comparison);
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
     * @return TourCommentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TourCommentPeer::NAME, $name, $comparison);
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
     * @return TourCommentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TourCommentPeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TourCommentQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TourCommentPeer::EMAIL, $email, $comparison);
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
     * @return TourCommentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TourCommentPeer::DESC, $desc, $comparison);
    }

    /**
     * Filter the query on the answer column
     *
     * Example usage:
     * <code>
     * $query->filterByAnswer('fooValue');   // WHERE answer = 'fooValue'
     * $query->filterByAnswer('%fooValue%'); // WHERE answer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $answer The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TourCommentQuery The current query, for fluid interface
     */
    public function filterByAnswer($answer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($answer)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $answer)) {
                $answer = str_replace('*', '%', $answer);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TourCommentPeer::ANSWER, $answer, $comparison);
    }

    /**
     * Filter the query on the publish column
     *
     * Example usage:
     * <code>
     * $query->filterByPublish(true); // WHERE publish = true
     * $query->filterByPublish('yes'); // WHERE publish = true
     * </code>
     *
     * @param     boolean|string $publish The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TourCommentQuery The current query, for fluid interface
     */
    public function filterByPublish($publish = null, $comparison = null)
    {
        if (is_string($publish)) {
            $publish = in_array(strtolower($publish), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TourCommentPeer::PUBLISH, $publish, $comparison);
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
     * @return TourCommentQuery The current query, for fluid interface
     */
    public function filterByTourId($tourId = null, $comparison = null)
    {
        if (is_array($tourId)) {
            $useMinMax = false;
            if (isset($tourId['min'])) {
                $this->addUsingAlias(TourCommentPeer::TOUR_ID, $tourId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tourId['max'])) {
                $this->addUsingAlias(TourCommentPeer::TOUR_ID, $tourId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TourCommentPeer::TOUR_ID, $tourId, $comparison);
    }

    /**
     * Filter the query by a related Tour object
     *
     * @param   Tour|PropelObjectCollection $tour The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TourCommentQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTour($tour, $comparison = null)
    {
        if ($tour instanceof Tour) {
            return $this
                ->addUsingAlias(TourCommentPeer::TOUR_ID, $tour->getId(), $comparison);
        } elseif ($tour instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TourCommentPeer::TOUR_ID, $tour->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return TourCommentQuery The current query, for fluid interface
     */
    public function joinTour($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useTourQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTour($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Tour', 'TourQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   TourComment $tourComment Object to remove from the list of results
     *
     * @return TourCommentQuery The current query, for fluid interface
     */
    public function prune($tourComment = null)
    {
        if ($tourComment) {
            $this->addUsingAlias(TourCommentPeer::ID, $tourComment->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
