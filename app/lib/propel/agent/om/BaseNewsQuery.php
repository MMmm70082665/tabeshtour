<?php


/**
 * Base class that represents a query for the 'news' table.
 *
 * 
 *
 * @method NewsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method NewsQuery orderBySubject($order = Criteria::ASC) Order by the subject column
 * @method NewsQuery orderByLongDesc($order = Criteria::ASC) Order by the long_desc column
 * @method NewsQuery orderByShortDesc($order = Criteria::ASC) Order by the short_desc column
 * @method NewsQuery orderByPublish($order = Criteria::ASC) Order by the publish column
 * @method NewsQuery orderByDate($order = Criteria::ASC) Order by the date column
 *
 * @method NewsQuery groupById() Group by the id column
 * @method NewsQuery groupBySubject() Group by the subject column
 * @method NewsQuery groupByLongDesc() Group by the long_desc column
 * @method NewsQuery groupByShortDesc() Group by the short_desc column
 * @method NewsQuery groupByPublish() Group by the publish column
 * @method NewsQuery groupByDate() Group by the date column
 *
 * @method NewsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method NewsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method NewsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method News findOne(PropelPDO $con = null) Return the first News matching the query
 * @method News findOneOrCreate(PropelPDO $con = null) Return the first News matching the query, or a new News object populated from the query conditions when no match is found
 *
 * @method News findOneBySubject(string $subject) Return the first News filtered by the subject column
 * @method News findOneByLongDesc(string $long_desc) Return the first News filtered by the long_desc column
 * @method News findOneByShortDesc(string $short_desc) Return the first News filtered by the short_desc column
 * @method News findOneByPublish(boolean $publish) Return the first News filtered by the publish column
 * @method News findOneByDate(string $date) Return the first News filtered by the date column
 *
 * @method array findById(int $id) Return News objects filtered by the id column
 * @method array findBySubject(string $subject) Return News objects filtered by the subject column
 * @method array findByLongDesc(string $long_desc) Return News objects filtered by the long_desc column
 * @method array findByShortDesc(string $short_desc) Return News objects filtered by the short_desc column
 * @method array findByPublish(boolean $publish) Return News objects filtered by the publish column
 * @method array findByDate(string $date) Return News objects filtered by the date column
 *
 * @package    propel.generator.agent.om
 */
abstract class BaseNewsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseNewsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tabesh', $modelName = 'News', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new NewsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     NewsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return NewsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof NewsQuery) {
            return $criteria;
        }
        $query = new NewsQuery();
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
     * @return   News|News[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = NewsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(NewsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   News A model object, or null if the key is not found
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
     * @return   News A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `subject`, `long_desc`, `short_desc`, `publish`, `date` FROM `news` WHERE `id` = :p0';
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
            $obj = new News();
            $obj->hydrate($row);
            NewsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return News|News[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|News[]|mixed the list of results, formatted by the current formatter
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
     * @return NewsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(NewsPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return NewsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(NewsPeer::ID, $keys, Criteria::IN);
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
     * @return NewsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(NewsPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the subject column
     *
     * Example usage:
     * <code>
     * $query->filterBySubject('fooValue');   // WHERE subject = 'fooValue'
     * $query->filterBySubject('%fooValue%'); // WHERE subject LIKE '%fooValue%'
     * </code>
     *
     * @param     string $subject The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NewsQuery The current query, for fluid interface
     */
    public function filterBySubject($subject = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($subject)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $subject)) {
                $subject = str_replace('*', '%', $subject);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(NewsPeer::SUBJECT, $subject, $comparison);
    }

    /**
     * Filter the query on the long_desc column
     *
     * Example usage:
     * <code>
     * $query->filterByLongDesc('fooValue');   // WHERE long_desc = 'fooValue'
     * $query->filterByLongDesc('%fooValue%'); // WHERE long_desc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $longDesc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NewsQuery The current query, for fluid interface
     */
    public function filterByLongDesc($longDesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($longDesc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $longDesc)) {
                $longDesc = str_replace('*', '%', $longDesc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(NewsPeer::LONG_DESC, $longDesc, $comparison);
    }

    /**
     * Filter the query on the short_desc column
     *
     * Example usage:
     * <code>
     * $query->filterByShortDesc('fooValue');   // WHERE short_desc = 'fooValue'
     * $query->filterByShortDesc('%fooValue%'); // WHERE short_desc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shortDesc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NewsQuery The current query, for fluid interface
     */
    public function filterByShortDesc($shortDesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shortDesc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $shortDesc)) {
                $shortDesc = str_replace('*', '%', $shortDesc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(NewsPeer::SHORT_DESC, $shortDesc, $comparison);
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
     * @return NewsQuery The current query, for fluid interface
     */
    public function filterByPublish($publish = null, $comparison = null)
    {
        if (is_string($publish)) {
            $publish = in_array(strtolower($publish), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(NewsPeer::PUBLISH, $publish, $comparison);
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
     * @return NewsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(NewsPeer::DATE, $date, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   News $news Object to remove from the list of results
     *
     * @return NewsQuery The current query, for fluid interface
     */
    public function prune($news = null)
    {
        if ($news) {
            $this->addUsingAlias(NewsPeer::ID, $news->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
