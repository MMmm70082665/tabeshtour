<?php


/**
 * Base class that represents a query for the 'contact_us' table.
 *
 *
 *
 * @method ContactUsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ContactUsQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method ContactUsQuery orderByExplaine($order = Criteria::ASC) Order by the explaine column
 * @method ContactUsQuery orderByMobile($order = Criteria::ASC) Order by the mobile column
 *
 * @method ContactUsQuery groupById() Group by the id column
 * @method ContactUsQuery groupByEmail() Group by the email column
 * @method ContactUsQuery groupByExplaine() Group by the explaine column
 * @method ContactUsQuery groupByMobile() Group by the mobile column
 *
 * @method ContactUsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ContactUsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ContactUsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ContactUs findOne(PropelPDO $con = null) Return the first ContactUs matching the query
 * @method ContactUs findOneOrCreate(PropelPDO $con = null) Return the first ContactUs matching the query, or a new ContactUs object populated from the query conditions when no match is found
 *
 * @method ContactUs findOneByEmail(string $email) Return the first ContactUs filtered by the email column
 * @method ContactUs findOneByExplaine(string $explaine) Return the first ContactUs filtered by the explaine column
 * @method ContactUs findOneByMobile(string $mobile) Return the first ContactUs filtered by the mobile column
 *
 * @method array findById(int $id) Return ContactUs objects filtered by the id column
 * @method array findByEmail(string $email) Return ContactUs objects filtered by the email column
 * @method array findByExplaine(string $explaine) Return ContactUs objects filtered by the explaine column
 * @method array findByMobile(string $mobile) Return ContactUs objects filtered by the mobile column
 *
 * @package    propel.generator.agent.om
 */
abstract class BaseContactUsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseContactUsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'travel', $modelName = 'ContactUs', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ContactUsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     ContactUsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ContactUsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ContactUsQuery) {
            return $criteria;
        }
        $query = new ContactUsQuery();
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
     * @return   ContactUs|ContactUs[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ContactUsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ContactUsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   ContactUs A model object, or null if the key is not found
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
     * @return   ContactUs A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `email`, `explaine`, `mobile` FROM `contact_us` WHERE `id` = :p0';
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
            $obj = new ContactUs();
            $obj->hydrate($row);
            ContactUsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ContactUs|ContactUs[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ContactUs[]|mixed the list of results, formatted by the current formatter
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
     * @return ContactUsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ContactUsPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ContactUsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ContactUsPeer::ID, $keys, Criteria::IN);
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
     * @return ContactUsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ContactUsPeer::ID, $id, $comparison);
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
     * @return ContactUsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ContactUsPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the explaine column
     *
     * Example usage:
     * <code>
     * $query->filterByExplaine('fooValue');   // WHERE explaine = 'fooValue'
     * $query->filterByExplaine('%fooValue%'); // WHERE explaine LIKE '%fooValue%'
     * </code>
     *
     * @param     string $explaine The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContactUsQuery The current query, for fluid interface
     */
    public function filterByExplaine($explaine = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($explaine)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $explaine)) {
                $explaine = str_replace('*', '%', $explaine);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContactUsPeer::EXPLAINE, $explaine, $comparison);
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
     * @return ContactUsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ContactUsPeer::MOBILE, $mobile, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ContactUs $contactUs Object to remove from the list of results
     *
     * @return ContactUsQuery The current query, for fluid interface
     */
    public function prune($contactUs = null)
    {
        if ($contactUs) {
            $this->addUsingAlias(ContactUsPeer::ID, $contactUs->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
