<?php


/**
 * Base class that represents a query for the 'post' table.
 *
 *
 *
 * @method PostQuery orderById($order = Criteria::ASC) Order by the id column
 * @method PostQuery orderBySubject($order = Criteria::ASC) Order by the subject column
 * @method PostQuery orderByLongDesc($order = Criteria::ASC) Order by the long_desc column
 * @method PostQuery orderByShortDesc($order = Criteria::ASC) Order by the short_desc column
 * @method PostQuery orderByPublisher($order = Criteria::ASC) Order by the publisher column
 * @method PostQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method PostQuery orderByTag($order = Criteria::ASC) Order by the tag column
 * @method PostQuery orderByOrder($order = Criteria::ASC) Order by the order column
 * @method PostQuery orderByView($order = Criteria::ASC) Order by the view column
 *
 * @method PostQuery groupById() Group by the id column
 * @method PostQuery groupBySubject() Group by the subject column
 * @method PostQuery groupByLongDesc() Group by the long_desc column
 * @method PostQuery groupByShortDesc() Group by the short_desc column
 * @method PostQuery groupByPublisher() Group by the publisher column
 * @method PostQuery groupByDate() Group by the date column
 * @method PostQuery groupByTag() Group by the tag column
 * @method PostQuery groupByOrder() Group by the order column
 * @method PostQuery groupByView() Group by the view column
 *
 * @method PostQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PostQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PostQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Post findOne(PropelPDO $con = null) Return the first Post matching the query
 * @method Post findOneOrCreate(PropelPDO $con = null) Return the first Post matching the query, or a new Post object populated from the query conditions when no match is found
 *
 * @method Post findOneBySubject(string $subject) Return the first Post filtered by the subject column
 * @method Post findOneByLongDesc(string $long_desc) Return the first Post filtered by the long_desc column
 * @method Post findOneByShortDesc(string $short_desc) Return the first Post filtered by the short_desc column
 * @method Post findOneByPublisher(boolean $publisher) Return the first Post filtered by the publisher column
 * @method Post findOneByDate(string $date) Return the first Post filtered by the date column
 * @method Post findOneByTag(string $tag) Return the first Post filtered by the tag column
 * @method Post findOneByOrder(int $order) Return the first Post filtered by the order column
 * @method Post findOneByView(int $view) Return the first Post filtered by the view column
 *
 * @method array findById(int $id) Return Post objects filtered by the id column
 * @method array findBySubject(string $subject) Return Post objects filtered by the subject column
 * @method array findByLongDesc(string $long_desc) Return Post objects filtered by the long_desc column
 * @method array findByShortDesc(string $short_desc) Return Post objects filtered by the short_desc column
 * @method array findByPublisher(boolean $publisher) Return Post objects filtered by the publisher column
 * @method array findByDate(string $date) Return Post objects filtered by the date column
 * @method array findByTag(string $tag) Return Post objects filtered by the tag column
 * @method array findByOrder(int $order) Return Post objects filtered by the order column
 * @method array findByView(int $view) Return Post objects filtered by the view column
 *
 * @package    propel.generator.agent.om
 */
abstract class BasePostQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePostQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'travel', $modelName = 'Post', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PostQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     PostQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PostQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PostQuery) {
            return $criteria;
        }
        $query = new PostQuery();
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
     * @return   Post|Post[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PostPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Post A model object, or null if the key is not found
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
     * @return   Post A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `subject`, `long_desc`, `short_desc`, `publisher`, `date`, `tag`, `order`, `view` FROM `post` WHERE `id` = :p0';
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
            $obj = new Post();
            $obj->hydrate($row);
            PostPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Post|Post[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Post[]|mixed the list of results, formatted by the current formatter
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
     * @return PostQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PostPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PostQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PostPeer::ID, $keys, Criteria::IN);
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
     * @return PostQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(PostPeer::ID, $id, $comparison);
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
     * @return PostQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PostPeer::SUBJECT, $subject, $comparison);
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
     * @return PostQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PostPeer::LONG_DESC, $longDesc, $comparison);
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
     * @return PostQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PostPeer::SHORT_DESC, $shortDesc, $comparison);
    }

    /**
     * Filter the query on the publisher column
     *
     * Example usage:
     * <code>
     * $query->filterByPublisher(true); // WHERE publisher = true
     * $query->filterByPublisher('yes'); // WHERE publisher = true
     * </code>
     *
     * @param     boolean|string $publisher The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostQuery The current query, for fluid interface
     */
    public function filterByPublisher($publisher = null, $comparison = null)
    {
        if (is_string($publisher)) {
            $publisher = in_array(strtolower($publisher), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PostPeer::PUBLISHER, $publisher, $comparison);
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
     * @return PostQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PostPeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the tag column
     *
     * Example usage:
     * <code>
     * $query->filterByTag('fooValue');   // WHERE tag = 'fooValue'
     * $query->filterByTag('%fooValue%'); // WHERE tag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tag The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostQuery The current query, for fluid interface
     */
    public function filterByTag($tag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tag)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tag)) {
                $tag = str_replace('*', '%', $tag);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PostPeer::TAG, $tag, $comparison);
    }

    /**
     * Filter the query on the order column
     *
     * Example usage:
     * <code>
     * $query->filterByOrder(1234); // WHERE order = 1234
     * $query->filterByOrder(array(12, 34)); // WHERE order IN (12, 34)
     * $query->filterByOrder(array('min' => 12)); // WHERE order > 12
     * </code>
     *
     * @param     mixed $order The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostQuery The current query, for fluid interface
     */
    public function filterByOrder($order = null, $comparison = null)
    {
        if (is_array($order)) {
            $useMinMax = false;
            if (isset($order['min'])) {
                $this->addUsingAlias(PostPeer::ORDER, $order['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($order['max'])) {
                $this->addUsingAlias(PostPeer::ORDER, $order['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PostPeer::ORDER, $order, $comparison);
    }

    /**
     * Filter the query on the view column
     *
     * Example usage:
     * <code>
     * $query->filterByView(1234); // WHERE view = 1234
     * $query->filterByView(array(12, 34)); // WHERE view IN (12, 34)
     * $query->filterByView(array('min' => 12)); // WHERE view > 12
     * </code>
     *
     * @param     mixed $view The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PostQuery The current query, for fluid interface
     */
    public function filterByView($view = null, $comparison = null)
    {
        if (is_array($view)) {
            $useMinMax = false;
            if (isset($view['min'])) {
                $this->addUsingAlias(PostPeer::VIEW, $view['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($view['max'])) {
                $this->addUsingAlias(PostPeer::VIEW, $view['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PostPeer::VIEW, $view, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Post $post Object to remove from the list of results
     *
     * @return PostQuery The current query, for fluid interface
     */
    public function prune($post = null)
    {
        if ($post) {
            $this->addUsingAlias(PostPeer::ID, $post->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
