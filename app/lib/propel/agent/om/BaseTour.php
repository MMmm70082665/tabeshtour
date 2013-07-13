<?php


/**
 * Base class that represents a row from the 'tour' table.
 *
 *
 *
 * @package    propel.generator.agent.om
 */
abstract class BaseTour extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TourPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TourPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the package_code field.
     * @var        string
     */
    protected $package_code;

    /**
     * The value for the begin_date field.
     * @var        string
     */
    protected $begin_date;

    /**
     * The value for the end_date field.
     * @var        string
     */
    protected $end_date;

    /**
     * The value for the cost field.
     * @var        string
     */
    protected $cost;

    /**
     * The value for the mabda field.
     * @var        string
     */
    protected $mabda;

    /**
     * The value for the madarek field.
     * @var        string
     */
    protected $madarek;

    /**
     * The value for the khadamat field.
     * @var        string
     */
    protected $khadamat;

    /**
     * The value for the desc field.
     * @var        string
     */
    protected $desc;

    /**
     * The value for the kind field.
     * @var        string
     */
    protected $kind;

    /**
     * The value for the travel field.
     * @var        string
     */
    protected $travel;

    /**
     * The value for the type field.
     * @var        string
     */
    protected $type;

    /**
     * The value for the status field.
     * @var        boolean
     */
    protected $status;

    /**
     * The value for the city_id field.
     * @var        int
     */
    protected $city_id;

    /**
     * @var        City
     */
    protected $aCity;

    /**
     * @var        PropelObjectCollection|TourReserve[] Collection to store aggregation of TourReserve objects.
     */
    protected $collTourReserves;
    protected $collTourReservesPartial;

    /**
     * @var        PropelObjectCollection|TourComment[] Collection to store aggregation of TourComment objects.
     */
    protected $collTourComments;
    protected $collTourCommentsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $tourReservesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $tourCommentsScheduledForDeletion = null;

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the [package_code] column value.
     *
     * @return string
     */
    public function getPackageCode()
    {
        return $this->package_code;
    }

    /**
     * Get the [begin_date] column value.
     *
     * @return string
     */
    public function getBeginDate()
    {
        return $this->begin_date;
    }

    /**
     * Get the [end_date] column value.
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Get the [cost] column value.
     *
     * @return string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Get the [mabda] column value.
     *
     * @return string
     */
    public function getMabda()
    {
        return $this->mabda;
    }

    /**
     * Get the [madarek] column value.
     *
     * @return string
     */
    public function getMadarek()
    {
        return $this->madarek;
    }

    /**
     * Get the [khadamat] column value.
     *
     * @return string
     */
    public function getKhadamat()
    {
        return $this->khadamat;
    }

    /**
     * Get the [desc] column value.
     *
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Get the [kind] column value.
     *
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Get the [travel] column value.
     *
     * @return string
     */
    public function getTravel()
    {
        return $this->travel;
    }

    /**
     * Get the [type] column value.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the [status] column value.
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get the [city_id] column value.
     *
     * @return int
     */
    public function getCityId()
    {
        return $this->city_id;
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return Tour The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = TourPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [package_code] column.
     *
     * @param string $v new value
     * @return Tour The current object (for fluent API support)
     */
    public function setPackageCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->package_code !== $v) {
            $this->package_code = $v;
            $this->modifiedColumns[] = TourPeer::PACKAGE_CODE;
        }


        return $this;
    } // setPackageCode()

    /**
     * Set the value of [begin_date] column.
     *
     * @param string $v new value
     * @return Tour The current object (for fluent API support)
     */
    public function setBeginDate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->begin_date !== $v) {
            $this->begin_date = $v;
            $this->modifiedColumns[] = TourPeer::BEGIN_DATE;
        }


        return $this;
    } // setBeginDate()

    /**
     * Set the value of [end_date] column.
     *
     * @param string $v new value
     * @return Tour The current object (for fluent API support)
     */
    public function setEndDate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->end_date !== $v) {
            $this->end_date = $v;
            $this->modifiedColumns[] = TourPeer::END_DATE;
        }


        return $this;
    } // setEndDate()

    /**
     * Set the value of [cost] column.
     *
     * @param string $v new value
     * @return Tour The current object (for fluent API support)
     */
    public function setCost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cost !== $v) {
            $this->cost = $v;
            $this->modifiedColumns[] = TourPeer::COST;
        }


        return $this;
    } // setCost()

    /**
     * Set the value of [mabda] column.
     *
     * @param string $v new value
     * @return Tour The current object (for fluent API support)
     */
    public function setMabda($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mabda !== $v) {
            $this->mabda = $v;
            $this->modifiedColumns[] = TourPeer::MABDA;
        }


        return $this;
    } // setMabda()

    /**
     * Set the value of [madarek] column.
     *
     * @param string $v new value
     * @return Tour The current object (for fluent API support)
     */
    public function setMadarek($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->madarek !== $v) {
            $this->madarek = $v;
            $this->modifiedColumns[] = TourPeer::MADAREK;
        }


        return $this;
    } // setMadarek()

    /**
     * Set the value of [khadamat] column.
     *
     * @param string $v new value
     * @return Tour The current object (for fluent API support)
     */
    public function setKhadamat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->khadamat !== $v) {
            $this->khadamat = $v;
            $this->modifiedColumns[] = TourPeer::KHADAMAT;
        }


        return $this;
    } // setKhadamat()

    /**
     * Set the value of [desc] column.
     *
     * @param string $v new value
     * @return Tour The current object (for fluent API support)
     */
    public function setDesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->desc !== $v) {
            $this->desc = $v;
            $this->modifiedColumns[] = TourPeer::DESC;
        }


        return $this;
    } // setDesc()

    /**
     * Set the value of [kind] column.
     *
     * @param string $v new value
     * @return Tour The current object (for fluent API support)
     */
    public function setKind($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->kind !== $v) {
            $this->kind = $v;
            $this->modifiedColumns[] = TourPeer::KIND;
        }


        return $this;
    } // setKind()

    /**
     * Set the value of [travel] column.
     *
     * @param string $v new value
     * @return Tour The current object (for fluent API support)
     */
    public function setTravel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->travel !== $v) {
            $this->travel = $v;
            $this->modifiedColumns[] = TourPeer::TRAVEL;
        }


        return $this;
    } // setTravel()

    /**
     * Set the value of [type] column.
     *
     * @param string $v new value
     * @return Tour The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[] = TourPeer::TYPE;
        }


        return $this;
    } // setType()

    /**
     * Sets the value of the [status] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tour The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[] = TourPeer::STATUS;
        }


        return $this;
    } // setStatus()

    /**
     * Set the value of [city_id] column.
     *
     * @param int $v new value
     * @return Tour The current object (for fluent API support)
     */
    public function setCityId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->city_id !== $v) {
            $this->city_id = $v;
            $this->modifiedColumns[] = TourPeer::CITY_ID;
        }

        if ($this->aCity !== null && $this->aCity->getId() !== $v) {
            $this->aCity = null;
        }


        return $this;
    } // setCityId()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->package_code = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->begin_date = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->end_date = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->cost = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->mabda = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->madarek = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->khadamat = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->desc = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->kind = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->travel = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->type = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->status = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
            $this->city_id = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 14; // 14 = TourPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Tour object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aCity !== null && $this->city_id !== $this->aCity->getId()) {
            $this->aCity = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(TourPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TourPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCity = null;
            $this->collTourReserves = null;

            $this->collTourComments = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(TourPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TourQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(TourPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                TourPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCity !== null) {
                if ($this->aCity->isModified() || $this->aCity->isNew()) {
                    $affectedRows += $this->aCity->save($con);
                }
                $this->setCity($this->aCity);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->tourReservesScheduledForDeletion !== null) {
                if (!$this->tourReservesScheduledForDeletion->isEmpty()) {
                    foreach ($this->tourReservesScheduledForDeletion as $tourReserve) {
                        // need to save related object because we set the relation to null
                        $tourReserve->save($con);
                    }
                    $this->tourReservesScheduledForDeletion = null;
                }
            }

            if ($this->collTourReserves !== null) {
                foreach ($this->collTourReserves as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->tourCommentsScheduledForDeletion !== null) {
                if (!$this->tourCommentsScheduledForDeletion->isEmpty()) {
                    TourCommentQuery::create()
                        ->filterByPrimaryKeys($this->tourCommentsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->tourCommentsScheduledForDeletion = null;
                }
            }

            if ($this->collTourComments !== null) {
                foreach ($this->collTourComments as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = TourPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TourPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TourPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(TourPeer::PACKAGE_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`package_code`';
        }
        if ($this->isColumnModified(TourPeer::BEGIN_DATE)) {
            $modifiedColumns[':p' . $index++]  = '`begin_date`';
        }
        if ($this->isColumnModified(TourPeer::END_DATE)) {
            $modifiedColumns[':p' . $index++]  = '`end_date`';
        }
        if ($this->isColumnModified(TourPeer::COST)) {
            $modifiedColumns[':p' . $index++]  = '`cost`';
        }
        if ($this->isColumnModified(TourPeer::MABDA)) {
            $modifiedColumns[':p' . $index++]  = '`mabda`';
        }
        if ($this->isColumnModified(TourPeer::MADAREK)) {
            $modifiedColumns[':p' . $index++]  = '`madarek`';
        }
        if ($this->isColumnModified(TourPeer::KHADAMAT)) {
            $modifiedColumns[':p' . $index++]  = '`khadamat`';
        }
        if ($this->isColumnModified(TourPeer::DESC)) {
            $modifiedColumns[':p' . $index++]  = '`desc`';
        }
        if ($this->isColumnModified(TourPeer::KIND)) {
            $modifiedColumns[':p' . $index++]  = '`kind`';
        }
        if ($this->isColumnModified(TourPeer::TRAVEL)) {
            $modifiedColumns[':p' . $index++]  = '`travel`';
        }
        if ($this->isColumnModified(TourPeer::TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`type`';
        }
        if ($this->isColumnModified(TourPeer::STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`status`';
        }
        if ($this->isColumnModified(TourPeer::CITY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`city_id`';
        }

        $sql = sprintf(
            'INSERT INTO `tour` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`package_code`':
                        $stmt->bindValue($identifier, $this->package_code, PDO::PARAM_STR);
                        break;
                    case '`begin_date`':
                        $stmt->bindValue($identifier, $this->begin_date, PDO::PARAM_STR);
                        break;
                    case '`end_date`':
                        $stmt->bindValue($identifier, $this->end_date, PDO::PARAM_STR);
                        break;
                    case '`cost`':
                        $stmt->bindValue($identifier, $this->cost, PDO::PARAM_STR);
                        break;
                    case '`mabda`':
                        $stmt->bindValue($identifier, $this->mabda, PDO::PARAM_STR);
                        break;
                    case '`madarek`':
                        $stmt->bindValue($identifier, $this->madarek, PDO::PARAM_STR);
                        break;
                    case '`khadamat`':
                        $stmt->bindValue($identifier, $this->khadamat, PDO::PARAM_STR);
                        break;
                    case '`desc`':
                        $stmt->bindValue($identifier, $this->desc, PDO::PARAM_STR);
                        break;
                    case '`kind`':
                        $stmt->bindValue($identifier, $this->kind, PDO::PARAM_STR);
                        break;
                    case '`travel`':
                        $stmt->bindValue($identifier, $this->travel, PDO::PARAM_STR);
                        break;
                    case '`type`':
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_STR);
                        break;
                    case '`status`':
                        $stmt->bindValue($identifier, (int) $this->status, PDO::PARAM_INT);
                        break;
                    case '`city_id`':
                        $stmt->bindValue($identifier, $this->city_id, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCity !== null) {
                if (!$this->aCity->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCity->getValidationFailures());
                }
            }


            if (($retval = TourPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collTourReserves !== null) {
                    foreach ($this->collTourReserves as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTourComments !== null) {
                    foreach ($this->collTourComments as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = TourPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getPackageCode();
                break;
            case 2:
                return $this->getBeginDate();
                break;
            case 3:
                return $this->getEndDate();
                break;
            case 4:
                return $this->getCost();
                break;
            case 5:
                return $this->getMabda();
                break;
            case 6:
                return $this->getMadarek();
                break;
            case 7:
                return $this->getKhadamat();
                break;
            case 8:
                return $this->getDesc();
                break;
            case 9:
                return $this->getKind();
                break;
            case 10:
                return $this->getTravel();
                break;
            case 11:
                return $this->getType();
                break;
            case 12:
                return $this->getStatus();
                break;
            case 13:
                return $this->getCityId();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Tour'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Tour'][$this->getPrimaryKey()] = true;
        $keys = TourPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getPackageCode(),
            $keys[2] => $this->getBeginDate(),
            $keys[3] => $this->getEndDate(),
            $keys[4] => $this->getCost(),
            $keys[5] => $this->getMabda(),
            $keys[6] => $this->getMadarek(),
            $keys[7] => $this->getKhadamat(),
            $keys[8] => $this->getDesc(),
            $keys[9] => $this->getKind(),
            $keys[10] => $this->getTravel(),
            $keys[11] => $this->getType(),
            $keys[12] => $this->getStatus(),
            $keys[13] => $this->getCityId(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCity) {
                $result['City'] = $this->aCity->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collTourReserves) {
                $result['TourReserves'] = $this->collTourReserves->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTourComments) {
                $result['TourComments'] = $this->collTourComments->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = TourPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setPackageCode($value);
                break;
            case 2:
                $this->setBeginDate($value);
                break;
            case 3:
                $this->setEndDate($value);
                break;
            case 4:
                $this->setCost($value);
                break;
            case 5:
                $this->setMabda($value);
                break;
            case 6:
                $this->setMadarek($value);
                break;
            case 7:
                $this->setKhadamat($value);
                break;
            case 8:
                $this->setDesc($value);
                break;
            case 9:
                $this->setKind($value);
                break;
            case 10:
                $this->setTravel($value);
                break;
            case 11:
                $this->setType($value);
                break;
            case 12:
                $this->setStatus($value);
                break;
            case 13:
                $this->setCityId($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = TourPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setPackageCode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setBeginDate($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEndDate($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCost($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMabda($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMadarek($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setKhadamat($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDesc($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setKind($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTravel($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setType($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setStatus($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCityId($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TourPeer::DATABASE_NAME);

        if ($this->isColumnModified(TourPeer::ID)) $criteria->add(TourPeer::ID, $this->id);
        if ($this->isColumnModified(TourPeer::PACKAGE_CODE)) $criteria->add(TourPeer::PACKAGE_CODE, $this->package_code);
        if ($this->isColumnModified(TourPeer::BEGIN_DATE)) $criteria->add(TourPeer::BEGIN_DATE, $this->begin_date);
        if ($this->isColumnModified(TourPeer::END_DATE)) $criteria->add(TourPeer::END_DATE, $this->end_date);
        if ($this->isColumnModified(TourPeer::COST)) $criteria->add(TourPeer::COST, $this->cost);
        if ($this->isColumnModified(TourPeer::MABDA)) $criteria->add(TourPeer::MABDA, $this->mabda);
        if ($this->isColumnModified(TourPeer::MADAREK)) $criteria->add(TourPeer::MADAREK, $this->madarek);
        if ($this->isColumnModified(TourPeer::KHADAMAT)) $criteria->add(TourPeer::KHADAMAT, $this->khadamat);
        if ($this->isColumnModified(TourPeer::DESC)) $criteria->add(TourPeer::DESC, $this->desc);
        if ($this->isColumnModified(TourPeer::KIND)) $criteria->add(TourPeer::KIND, $this->kind);
        if ($this->isColumnModified(TourPeer::TRAVEL)) $criteria->add(TourPeer::TRAVEL, $this->travel);
        if ($this->isColumnModified(TourPeer::TYPE)) $criteria->add(TourPeer::TYPE, $this->type);
        if ($this->isColumnModified(TourPeer::STATUS)) $criteria->add(TourPeer::STATUS, $this->status);
        if ($this->isColumnModified(TourPeer::CITY_ID)) $criteria->add(TourPeer::CITY_ID, $this->city_id);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(TourPeer::DATABASE_NAME);
        $criteria->add(TourPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Tour (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPackageCode($this->getPackageCode());
        $copyObj->setBeginDate($this->getBeginDate());
        $copyObj->setEndDate($this->getEndDate());
        $copyObj->setCost($this->getCost());
        $copyObj->setMabda($this->getMabda());
        $copyObj->setMadarek($this->getMadarek());
        $copyObj->setKhadamat($this->getKhadamat());
        $copyObj->setDesc($this->getDesc());
        $copyObj->setKind($this->getKind());
        $copyObj->setTravel($this->getTravel());
        $copyObj->setType($this->getType());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setCityId($this->getCityId());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getTourReserves() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTourReserve($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTourComments() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTourComment($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Tour Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return TourPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TourPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a City object.
     *
     * @param             City $v
     * @return Tour The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCity(City $v = null)
    {
        if ($v === null) {
            $this->setCityId(NULL);
        } else {
            $this->setCityId($v->getId());
        }

        $this->aCity = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the City object, it will not be re-added.
        if ($v !== null) {
            $v->addTour($this);
        }


        return $this;
    }


    /**
     * Get the associated City object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return City The associated City object.
     * @throws PropelException
     */
    public function getCity(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCity === null && ($this->city_id !== null) && $doQuery) {
            $this->aCity = CityQuery::create()->findPk($this->city_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCity->addTours($this);
             */
        }

        return $this->aCity;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('TourReserve' == $relationName) {
            $this->initTourReserves();
        }
        if ('TourComment' == $relationName) {
            $this->initTourComments();
        }
    }

    /**
     * Clears out the collTourReserves collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Tour The current object (for fluent API support)
     * @see        addTourReserves()
     */
    public function clearTourReserves()
    {
        $this->collTourReserves = null; // important to set this to null since that means it is uninitialized
        $this->collTourReservesPartial = null;

        return $this;
    }

    /**
     * reset is the collTourReserves collection loaded partially
     *
     * @return void
     */
    public function resetPartialTourReserves($v = true)
    {
        $this->collTourReservesPartial = $v;
    }

    /**
     * Initializes the collTourReserves collection.
     *
     * By default this just sets the collTourReserves collection to an empty array (like clearcollTourReserves());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTourReserves($overrideExisting = true)
    {
        if (null !== $this->collTourReserves && !$overrideExisting) {
            return;
        }
        $this->collTourReserves = new PropelObjectCollection();
        $this->collTourReserves->setModel('TourReserve');
    }

    /**
     * Gets an array of TourReserve objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Tour is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|TourReserve[] List of TourReserve objects
     * @throws PropelException
     */
    public function getTourReserves($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTourReservesPartial && !$this->isNew();
        if (null === $this->collTourReserves || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTourReserves) {
                // return empty collection
                $this->initTourReserves();
            } else {
                $collTourReserves = TourReserveQuery::create(null, $criteria)
                    ->filterByTour($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTourReservesPartial && count($collTourReserves)) {
                      $this->initTourReserves(false);

                      foreach($collTourReserves as $obj) {
                        if (false == $this->collTourReserves->contains($obj)) {
                          $this->collTourReserves->append($obj);
                        }
                      }

                      $this->collTourReservesPartial = true;
                    }

                    return $collTourReserves;
                }

                if($partial && $this->collTourReserves) {
                    foreach($this->collTourReserves as $obj) {
                        if($obj->isNew()) {
                            $collTourReserves[] = $obj;
                        }
                    }
                }

                $this->collTourReserves = $collTourReserves;
                $this->collTourReservesPartial = false;
            }
        }

        return $this->collTourReserves;
    }

    /**
     * Sets a collection of TourReserve objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $tourReserves A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Tour The current object (for fluent API support)
     */
    public function setTourReserves(PropelCollection $tourReserves, PropelPDO $con = null)
    {
        $tourReservesToDelete = $this->getTourReserves(new Criteria(), $con)->diff($tourReserves);

        $this->tourReservesScheduledForDeletion = unserialize(serialize($tourReservesToDelete));

        foreach ($tourReservesToDelete as $tourReserveRemoved) {
            $tourReserveRemoved->setTour(null);
        }

        $this->collTourReserves = null;
        foreach ($tourReserves as $tourReserve) {
            $this->addTourReserve($tourReserve);
        }

        $this->collTourReserves = $tourReserves;
        $this->collTourReservesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related TourReserve objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related TourReserve objects.
     * @throws PropelException
     */
    public function countTourReserves(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTourReservesPartial && !$this->isNew();
        if (null === $this->collTourReserves || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTourReserves) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getTourReserves());
            }
            $query = TourReserveQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByTour($this)
                ->count($con);
        }

        return count($this->collTourReserves);
    }

    /**
     * Method called to associate a TourReserve object to this object
     * through the TourReserve foreign key attribute.
     *
     * @param    TourReserve $l TourReserve
     * @return Tour The current object (for fluent API support)
     */
    public function addTourReserve(TourReserve $l)
    {
        if ($this->collTourReserves === null) {
            $this->initTourReserves();
            $this->collTourReservesPartial = true;
        }
        if (!in_array($l, $this->collTourReserves->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTourReserve($l);
        }

        return $this;
    }

    /**
     * @param	TourReserve $tourReserve The tourReserve object to add.
     */
    protected function doAddTourReserve($tourReserve)
    {
        $this->collTourReserves[]= $tourReserve;
        $tourReserve->setTour($this);
    }

    /**
     * @param	TourReserve $tourReserve The tourReserve object to remove.
     * @return Tour The current object (for fluent API support)
     */
    public function removeTourReserve($tourReserve)
    {
        if ($this->getTourReserves()->contains($tourReserve)) {
            $this->collTourReserves->remove($this->collTourReserves->search($tourReserve));
            if (null === $this->tourReservesScheduledForDeletion) {
                $this->tourReservesScheduledForDeletion = clone $this->collTourReserves;
                $this->tourReservesScheduledForDeletion->clear();
            }
            $this->tourReservesScheduledForDeletion[]= $tourReserve;
            $tourReserve->setTour(null);
        }

        return $this;
    }

    /**
     * Clears out the collTourComments collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Tour The current object (for fluent API support)
     * @see        addTourComments()
     */
    public function clearTourComments()
    {
        $this->collTourComments = null; // important to set this to null since that means it is uninitialized
        $this->collTourCommentsPartial = null;

        return $this;
    }

    /**
     * reset is the collTourComments collection loaded partially
     *
     * @return void
     */
    public function resetPartialTourComments($v = true)
    {
        $this->collTourCommentsPartial = $v;
    }

    /**
     * Initializes the collTourComments collection.
     *
     * By default this just sets the collTourComments collection to an empty array (like clearcollTourComments());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTourComments($overrideExisting = true)
    {
        if (null !== $this->collTourComments && !$overrideExisting) {
            return;
        }
        $this->collTourComments = new PropelObjectCollection();
        $this->collTourComments->setModel('TourComment');
    }

    /**
     * Gets an array of TourComment objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Tour is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|TourComment[] List of TourComment objects
     * @throws PropelException
     */
    public function getTourComments($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTourCommentsPartial && !$this->isNew();
        if (null === $this->collTourComments || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTourComments) {
                // return empty collection
                $this->initTourComments();
            } else {
                $collTourComments = TourCommentQuery::create(null, $criteria)
                    ->filterByTour($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTourCommentsPartial && count($collTourComments)) {
                      $this->initTourComments(false);

                      foreach($collTourComments as $obj) {
                        if (false == $this->collTourComments->contains($obj)) {
                          $this->collTourComments->append($obj);
                        }
                      }

                      $this->collTourCommentsPartial = true;
                    }

                    return $collTourComments;
                }

                if($partial && $this->collTourComments) {
                    foreach($this->collTourComments as $obj) {
                        if($obj->isNew()) {
                            $collTourComments[] = $obj;
                        }
                    }
                }

                $this->collTourComments = $collTourComments;
                $this->collTourCommentsPartial = false;
            }
        }

        return $this->collTourComments;
    }

    /**
     * Sets a collection of TourComment objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $tourComments A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Tour The current object (for fluent API support)
     */
    public function setTourComments(PropelCollection $tourComments, PropelPDO $con = null)
    {
        $tourCommentsToDelete = $this->getTourComments(new Criteria(), $con)->diff($tourComments);

        $this->tourCommentsScheduledForDeletion = unserialize(serialize($tourCommentsToDelete));

        foreach ($tourCommentsToDelete as $tourCommentRemoved) {
            $tourCommentRemoved->setTour(null);
        }

        $this->collTourComments = null;
        foreach ($tourComments as $tourComment) {
            $this->addTourComment($tourComment);
        }

        $this->collTourComments = $tourComments;
        $this->collTourCommentsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related TourComment objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related TourComment objects.
     * @throws PropelException
     */
    public function countTourComments(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTourCommentsPartial && !$this->isNew();
        if (null === $this->collTourComments || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTourComments) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getTourComments());
            }
            $query = TourCommentQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByTour($this)
                ->count($con);
        }

        return count($this->collTourComments);
    }

    /**
     * Method called to associate a TourComment object to this object
     * through the TourComment foreign key attribute.
     *
     * @param    TourComment $l TourComment
     * @return Tour The current object (for fluent API support)
     */
    public function addTourComment(TourComment $l)
    {
        if ($this->collTourComments === null) {
            $this->initTourComments();
            $this->collTourCommentsPartial = true;
        }
        if (!in_array($l, $this->collTourComments->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTourComment($l);
        }

        return $this;
    }

    /**
     * @param	TourComment $tourComment The tourComment object to add.
     */
    protected function doAddTourComment($tourComment)
    {
        $this->collTourComments[]= $tourComment;
        $tourComment->setTour($this);
    }

    /**
     * @param	TourComment $tourComment The tourComment object to remove.
     * @return Tour The current object (for fluent API support)
     */
    public function removeTourComment($tourComment)
    {
        if ($this->getTourComments()->contains($tourComment)) {
            $this->collTourComments->remove($this->collTourComments->search($tourComment));
            if (null === $this->tourCommentsScheduledForDeletion) {
                $this->tourCommentsScheduledForDeletion = clone $this->collTourComments;
                $this->tourCommentsScheduledForDeletion->clear();
            }
            $this->tourCommentsScheduledForDeletion[]= clone $tourComment;
            $tourComment->setTour(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->package_code = null;
        $this->begin_date = null;
        $this->end_date = null;
        $this->cost = null;
        $this->mabda = null;
        $this->madarek = null;
        $this->khadamat = null;
        $this->desc = null;
        $this->kind = null;
        $this->travel = null;
        $this->type = null;
        $this->status = null;
        $this->city_id = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
            if ($this->collTourReserves) {
                foreach ($this->collTourReserves as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTourComments) {
                foreach ($this->collTourComments as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collTourReserves instanceof PropelCollection) {
            $this->collTourReserves->clearIterator();
        }
        $this->collTourReserves = null;
        if ($this->collTourComments instanceof PropelCollection) {
            $this->collTourComments->clearIterator();
        }
        $this->collTourComments = null;
        $this->aCity = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TourPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
