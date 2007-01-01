<?php


/**
 * Base class that represents a query for the 'slider' table.
 *
 * 
 *
 * @method SliderQuery orderById($order = Criteria::ASC) Order by the id column
 * @method SliderQuery orderByContent($order = Criteria::ASC) Order by the content column
 * @method SliderQuery orderByShenase($order = Criteria::ASC) Order by the shenase column
 * @method SliderQuery orderByXpos($order = Criteria::ASC) Order by the xpos column
 * @method SliderQuery orderByYpos($order = Criteria::ASC) Order by the ypos column
 * @method SliderQuery orderByEffect($order = Criteria::ASC) Order by the effect column
 *
 * @method SliderQuery groupById() Group by the id column
 * @method SliderQuery groupByContent() Group by the content column
 * @method SliderQuery groupByShenase() Group by the shenase column
 * @method SliderQuery groupByXpos() Group by the xpos column
 * @method SliderQuery groupByYpos() Group by the ypos column
 * @method SliderQuery groupByEffect() Group by the effect column
 *
 * @method SliderQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SliderQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SliderQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Slider findOne(PropelPDO $con = null) Return the first Slider matching the query
 * @method Slider findOneOrCreate(PropelPDO $con = null) Return the first Slider matching the query, or a new Slider object populated from the query conditions when no match is found
 *
 * @method Slider findOneByContent(string $content) Return the first Slider filtered by the content column
 * @method Slider findOneByShenase(string $shenase) Return the first Slider filtered by the shenase column
 * @method Slider findOneByXpos(int $xpos) Return the first Slider filtered by the xpos column
 * @method Slider findOneByYpos(int $ypos) Return the first Slider filtered by the ypos column
 * @method Slider findOneByEffect(string $effect) Return the first Slider filtered by the effect column
 *
 * @method array findById(int $id) Return Slider objects filtered by the id column
 * @method array findByContent(string $content) Return Slider objects filtered by the content column
 * @method array findByShenase(string $shenase) Return Slider objects filtered by the shenase column
 * @method array findByXpos(int $xpos) Return Slider objects filtered by the xpos column
 * @method array findByYpos(int $ypos) Return Slider objects filtered by the ypos column
 * @method array findByEffect(string $effect) Return Slider objects filtered by the effect column
 *
 * @package    propel.generator.agent.om
 */
abstract class BaseSliderQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSliderQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'tabesh', $modelName = 'Slider', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SliderQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     SliderQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SliderQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SliderQuery) {
            return $criteria;
        }
        $query = new SliderQuery();
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
     * @return   Slider|Slider[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SliderPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SliderPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Slider A model object, or null if the key is not found
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
     * @return   Slider A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `content`, `shenase`, `xpos`, `ypos`, `effect` FROM `slider` WHERE `id` = :p0';
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
            $obj = new Slider();
            $obj->hydrate($row);
            SliderPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Slider|Slider[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Slider[]|mixed the list of results, formatted by the current formatter
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
     * @return SliderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SliderPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SliderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SliderPeer::ID, $keys, Criteria::IN);
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
     * @return SliderQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(SliderPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the content column
     *
     * Example usage:
     * <code>
     * $query->filterByContent('fooValue');   // WHERE content = 'fooValue'
     * $query->filterByContent('%fooValue%'); // WHERE content LIKE '%fooValue%'
     * </code>
     *
     * @param     string $content The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SliderQuery The current query, for fluid interface
     */
    public function filterByContent($content = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($content)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $content)) {
                $content = str_replace('*', '%', $content);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SliderPeer::CONTENT, $content, $comparison);
    }

    /**
     * Filter the query on the shenase column
     *
     * Example usage:
     * <code>
     * $query->filterByShenase('fooValue');   // WHERE shenase = 'fooValue'
     * $query->filterByShenase('%fooValue%'); // WHERE shenase LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shenase The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SliderQuery The current query, for fluid interface
     */
    public function filterByShenase($shenase = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shenase)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $shenase)) {
                $shenase = str_replace('*', '%', $shenase);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SliderPeer::SHENASE, $shenase, $comparison);
    }

    /**
     * Filter the query on the xpos column
     *
     * Example usage:
     * <code>
     * $query->filterByXpos(1234); // WHERE xpos = 1234
     * $query->filterByXpos(array(12, 34)); // WHERE xpos IN (12, 34)
     * $query->filterByXpos(array('min' => 12)); // WHERE xpos > 12
     * </code>
     *
     * @param     mixed $xpos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SliderQuery The current query, for fluid interface
     */
    public function filterByXpos($xpos = null, $comparison = null)
    {
        if (is_array($xpos)) {
            $useMinMax = false;
            if (isset($xpos['min'])) {
                $this->addUsingAlias(SliderPeer::XPOS, $xpos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($xpos['max'])) {
                $this->addUsingAlias(SliderPeer::XPOS, $xpos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SliderPeer::XPOS, $xpos, $comparison);
    }

    /**
     * Filter the query on the ypos column
     *
     * Example usage:
     * <code>
     * $query->filterByYpos(1234); // WHERE ypos = 1234
     * $query->filterByYpos(array(12, 34)); // WHERE ypos IN (12, 34)
     * $query->filterByYpos(array('min' => 12)); // WHERE ypos > 12
     * </code>
     *
     * @param     mixed $ypos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SliderQuery The current query, for fluid interface
     */
    public function filterByYpos($ypos = null, $comparison = null)
    {
        if (is_array($ypos)) {
            $useMinMax = false;
            if (isset($ypos['min'])) {
                $this->addUsingAlias(SliderPeer::YPOS, $ypos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ypos['max'])) {
                $this->addUsingAlias(SliderPeer::YPOS, $ypos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SliderPeer::YPOS, $ypos, $comparison);
    }

    /**
     * Filter the query on the effect column
     *
     * Example usage:
     * <code>
     * $query->filterByEffect('fooValue');   // WHERE effect = 'fooValue'
     * $query->filterByEffect('%fooValue%'); // WHERE effect LIKE '%fooValue%'
     * </code>
     *
     * @param     string $effect The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SliderQuery The current query, for fluid interface
     */
    public function filterByEffect($effect = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($effect)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $effect)) {
                $effect = str_replace('*', '%', $effect);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SliderPeer::EFFECT, $effect, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Slider $slider Object to remove from the list of results
     *
     * @return SliderQuery The current query, for fluid interface
     */
    public function prune($slider = null)
    {
        if ($slider) {
            $this->addUsingAlias(SliderPeer::ID, $slider->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
