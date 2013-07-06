<?php


/**
 * Base class that represents a row from the 'city' table.
 *
 *
 *
 * @package    propel.generator.agent.om
 */
abstract class BaseCity extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CityPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CityPeer
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
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the country_id field.
     * @var        int
     */
    protected $country_id;

    /**
     * The value for the publish field.
     * @var        boolean
     */
    protected $publish;

    /**
     * The value for the date field.
     * @var        string
     */
    protected $date;

    /**
     * The value for the desc field.
     * @var        string
     */
    protected $desc;

    /**
     * The value for the useful_info field.
     * @var        string
     */
    protected $useful_info;

    /**
     * The value for the place field.
     * @var        string
     */
    protected $place;

    /**
     * The value for the hotel field.
     * @var        string
     */
    protected $hotel;

    /**
     * The value for the restoran field.
     * @var        string
     */
    protected $restoran;

    /**
     * The value for the buy_center field.
     * @var        string
     */
    protected $buy_center;

    /**
     * @var        Country
     */
    protected $aCountry;

    /**
     * @var        PropelObjectCollection|RecordCity[] Collection to store aggregation of RecordCity objects.
     */
    protected $collRecordCitys;
    protected $collRecordCitysPartial;

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
    protected $recordCitysScheduledForDeletion = null;

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
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the [country_id] column value.
     *
     * @return int
     */
    public function getCountryId()
    {
        return $this->country_id;
    }

    /**
     * Get the [publish] column value.
     *
     * @return boolean
     */
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * Get the [optionally formatted] temporal [date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDate($format = '%x')
    {
        if ($this->date === null) {
            return null;
        }

        if ($this->date === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

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
     * Get the [useful_info] column value.
     *
     * @return string
     */
    public function getUsefulInfo()
    {
        return $this->useful_info;
    }

    /**
     * Get the [place] column value.
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Get the [hotel] column value.
     *
     * @return string
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * Get the [restoran] column value.
     *
     * @return string
     */
    public function getRestoran()
    {
        return $this->restoran;
    }

    /**
     * Get the [buy_center] column value.
     *
     * @return string
     */
    public function getBuyCenter()
    {
        return $this->buy_center;
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return City The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CityPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [name] column.
     *
     * @param string $v new value
     * @return City The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = CityPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [country_id] column.
     *
     * @param int $v new value
     * @return City The current object (for fluent API support)
     */
    public function setCountryId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->country_id !== $v) {
            $this->country_id = $v;
            $this->modifiedColumns[] = CityPeer::COUNTRY_ID;
        }

        if ($this->aCountry !== null && $this->aCountry->getId() !== $v) {
            $this->aCountry = null;
        }


        return $this;
    } // setCountryId()

    /**
     * Sets the value of the [publish] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return City The current object (for fluent API support)
     */
    public function setPublish($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->publish !== $v) {
            $this->publish = $v;
            $this->modifiedColumns[] = CityPeer::PUBLISH;
        }


        return $this;
    } // setPublish()

    /**
     * Sets the value of [date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return City The current object (for fluent API support)
     */
    public function setDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date !== null || $dt !== null) {
            $currentDateAsString = ($this->date !== null && $tmpDt = new DateTime($this->date)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date = $newDateAsString;
                $this->modifiedColumns[] = CityPeer::DATE;
            }
        } // if either are not null


        return $this;
    } // setDate()

    /**
     * Set the value of [desc] column.
     *
     * @param string $v new value
     * @return City The current object (for fluent API support)
     */
    public function setDesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->desc !== $v) {
            $this->desc = $v;
            $this->modifiedColumns[] = CityPeer::DESC;
        }


        return $this;
    } // setDesc()

    /**
     * Set the value of [useful_info] column.
     *
     * @param string $v new value
     * @return City The current object (for fluent API support)
     */
    public function setUsefulInfo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->useful_info !== $v) {
            $this->useful_info = $v;
            $this->modifiedColumns[] = CityPeer::USEFUL_INFO;
        }


        return $this;
    } // setUsefulInfo()

    /**
     * Set the value of [place] column.
     *
     * @param string $v new value
     * @return City The current object (for fluent API support)
     */
    public function setPlace($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->place !== $v) {
            $this->place = $v;
            $this->modifiedColumns[] = CityPeer::PLACE;
        }


        return $this;
    } // setPlace()

    /**
     * Set the value of [hotel] column.
     *
     * @param string $v new value
     * @return City The current object (for fluent API support)
     */
    public function setHotel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hotel !== $v) {
            $this->hotel = $v;
            $this->modifiedColumns[] = CityPeer::HOTEL;
        }


        return $this;
    } // setHotel()

    /**
     * Set the value of [restoran] column.
     *
     * @param string $v new value
     * @return City The current object (for fluent API support)
     */
    public function setRestoran($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->restoran !== $v) {
            $this->restoran = $v;
            $this->modifiedColumns[] = CityPeer::RESTORAN;
        }


        return $this;
    } // setRestoran()

    /**
     * Set the value of [buy_center] column.
     *
     * @param string $v new value
     * @return City The current object (for fluent API support)
     */
    public function setBuyCenter($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->buy_center !== $v) {
            $this->buy_center = $v;
            $this->modifiedColumns[] = CityPeer::BUY_CENTER;
        }


        return $this;
    } // setBuyCenter()

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
            $this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->country_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->publish = ($row[$startcol + 3] !== null) ? (boolean) $row[$startcol + 3] : null;
            $this->date = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->desc = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->useful_info = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->place = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->hotel = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->restoran = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->buy_center = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 11; // 11 = CityPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating City object", $e);
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

        if ($this->aCountry !== null && $this->country_id !== $this->aCountry->getId()) {
            $this->aCountry = null;
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
            $con = Propel::getConnection(CityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CityPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCountry = null;
            $this->collRecordCitys = null;

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
            $con = Propel::getConnection(CityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CityQuery::create()
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
            $con = Propel::getConnection(CityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CityPeer::addInstanceToPool($this);
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

            if ($this->aCountry !== null) {
                if ($this->aCountry->isModified() || $this->aCountry->isNew()) {
                    $affectedRows += $this->aCountry->save($con);
                }
                $this->setCountry($this->aCountry);
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

            if ($this->recordCitysScheduledForDeletion !== null) {
                if (!$this->recordCitysScheduledForDeletion->isEmpty()) {
                    foreach ($this->recordCitysScheduledForDeletion as $recordCity) {
                        // need to save related object because we set the relation to null
                        $recordCity->save($con);
                    }
                    $this->recordCitysScheduledForDeletion = null;
                }
            }

            if ($this->collRecordCitys !== null) {
                foreach ($this->collRecordCitys as $referrerFK) {
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

        $this->modifiedColumns[] = CityPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CityPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CityPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CityPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(CityPeer::COUNTRY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`country_id`';
        }
        if ($this->isColumnModified(CityPeer::PUBLISH)) {
            $modifiedColumns[':p' . $index++]  = '`publish`';
        }
        if ($this->isColumnModified(CityPeer::DATE)) {
            $modifiedColumns[':p' . $index++]  = '`date`';
        }
        if ($this->isColumnModified(CityPeer::DESC)) {
            $modifiedColumns[':p' . $index++]  = '`desc`';
        }
        if ($this->isColumnModified(CityPeer::USEFUL_INFO)) {
            $modifiedColumns[':p' . $index++]  = '`useful_info`';
        }
        if ($this->isColumnModified(CityPeer::PLACE)) {
            $modifiedColumns[':p' . $index++]  = '`place`';
        }
        if ($this->isColumnModified(CityPeer::HOTEL)) {
            $modifiedColumns[':p' . $index++]  = '`hotel`';
        }
        if ($this->isColumnModified(CityPeer::RESTORAN)) {
            $modifiedColumns[':p' . $index++]  = '`restoran`';
        }
        if ($this->isColumnModified(CityPeer::BUY_CENTER)) {
            $modifiedColumns[':p' . $index++]  = '`buy_center`';
        }

        $sql = sprintf(
            'INSERT INTO `city` (%s) VALUES (%s)',
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
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`country_id`':
                        $stmt->bindValue($identifier, $this->country_id, PDO::PARAM_INT);
                        break;
                    case '`publish`':
                        $stmt->bindValue($identifier, (int) $this->publish, PDO::PARAM_INT);
                        break;
                    case '`date`':
                        $stmt->bindValue($identifier, $this->date, PDO::PARAM_STR);
                        break;
                    case '`desc`':
                        $stmt->bindValue($identifier, $this->desc, PDO::PARAM_STR);
                        break;
                    case '`useful_info`':
                        $stmt->bindValue($identifier, $this->useful_info, PDO::PARAM_STR);
                        break;
                    case '`place`':
                        $stmt->bindValue($identifier, $this->place, PDO::PARAM_STR);
                        break;
                    case '`hotel`':
                        $stmt->bindValue($identifier, $this->hotel, PDO::PARAM_STR);
                        break;
                    case '`restoran`':
                        $stmt->bindValue($identifier, $this->restoran, PDO::PARAM_STR);
                        break;
                    case '`buy_center`':
                        $stmt->bindValue($identifier, $this->buy_center, PDO::PARAM_STR);
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

            if ($this->aCountry !== null) {
                if (!$this->aCountry->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCountry->getValidationFailures());
                }
            }


            if (($retval = CityPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collRecordCitys !== null) {
                    foreach ($this->collRecordCitys as $referrerFK) {
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
        $pos = CityPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getName();
                break;
            case 2:
                return $this->getCountryId();
                break;
            case 3:
                return $this->getPublish();
                break;
            case 4:
                return $this->getDate();
                break;
            case 5:
                return $this->getDesc();
                break;
            case 6:
                return $this->getUsefulInfo();
                break;
            case 7:
                return $this->getPlace();
                break;
            case 8:
                return $this->getHotel();
                break;
            case 9:
                return $this->getRestoran();
                break;
            case 10:
                return $this->getBuyCenter();
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
        if (isset($alreadyDumpedObjects['City'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['City'][$this->getPrimaryKey()] = true;
        $keys = CityPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getCountryId(),
            $keys[3] => $this->getPublish(),
            $keys[4] => $this->getDate(),
            $keys[5] => $this->getDesc(),
            $keys[6] => $this->getUsefulInfo(),
            $keys[7] => $this->getPlace(),
            $keys[8] => $this->getHotel(),
            $keys[9] => $this->getRestoran(),
            $keys[10] => $this->getBuyCenter(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCountry) {
                $result['Country'] = $this->aCountry->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collRecordCitys) {
                $result['RecordCitys'] = $this->collRecordCitys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CityPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setName($value);
                break;
            case 2:
                $this->setCountryId($value);
                break;
            case 3:
                $this->setPublish($value);
                break;
            case 4:
                $this->setDate($value);
                break;
            case 5:
                $this->setDesc($value);
                break;
            case 6:
                $this->setUsefulInfo($value);
                break;
            case 7:
                $this->setPlace($value);
                break;
            case 8:
                $this->setHotel($value);
                break;
            case 9:
                $this->setRestoran($value);
                break;
            case 10:
                $this->setBuyCenter($value);
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
        $keys = CityPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCountryId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPublish($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDate($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDesc($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setUsefulInfo($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPlace($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setHotel($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setRestoran($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setBuyCenter($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CityPeer::DATABASE_NAME);

        if ($this->isColumnModified(CityPeer::ID)) $criteria->add(CityPeer::ID, $this->id);
        if ($this->isColumnModified(CityPeer::NAME)) $criteria->add(CityPeer::NAME, $this->name);
        if ($this->isColumnModified(CityPeer::COUNTRY_ID)) $criteria->add(CityPeer::COUNTRY_ID, $this->country_id);
        if ($this->isColumnModified(CityPeer::PUBLISH)) $criteria->add(CityPeer::PUBLISH, $this->publish);
        if ($this->isColumnModified(CityPeer::DATE)) $criteria->add(CityPeer::DATE, $this->date);
        if ($this->isColumnModified(CityPeer::DESC)) $criteria->add(CityPeer::DESC, $this->desc);
        if ($this->isColumnModified(CityPeer::USEFUL_INFO)) $criteria->add(CityPeer::USEFUL_INFO, $this->useful_info);
        if ($this->isColumnModified(CityPeer::PLACE)) $criteria->add(CityPeer::PLACE, $this->place);
        if ($this->isColumnModified(CityPeer::HOTEL)) $criteria->add(CityPeer::HOTEL, $this->hotel);
        if ($this->isColumnModified(CityPeer::RESTORAN)) $criteria->add(CityPeer::RESTORAN, $this->restoran);
        if ($this->isColumnModified(CityPeer::BUY_CENTER)) $criteria->add(CityPeer::BUY_CENTER, $this->buy_center);

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
        $criteria = new Criteria(CityPeer::DATABASE_NAME);
        $criteria->add(CityPeer::ID, $this->id);

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
     * @param object $copyObj An object of City (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setCountryId($this->getCountryId());
        $copyObj->setPublish($this->getPublish());
        $copyObj->setDate($this->getDate());
        $copyObj->setDesc($this->getDesc());
        $copyObj->setUsefulInfo($this->getUsefulInfo());
        $copyObj->setPlace($this->getPlace());
        $copyObj->setHotel($this->getHotel());
        $copyObj->setRestoran($this->getRestoran());
        $copyObj->setBuyCenter($this->getBuyCenter());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getRecordCitys() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRecordCity($relObj->copy($deepCopy));
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
     * @return City Clone of current object.
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
     * @return CityPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CityPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Country object.
     *
     * @param             Country $v
     * @return City The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCountry(Country $v = null)
    {
        if ($v === null) {
            $this->setCountryId(NULL);
        } else {
            $this->setCountryId($v->getId());
        }

        $this->aCountry = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Country object, it will not be re-added.
        if ($v !== null) {
            $v->addCity($this);
        }


        return $this;
    }


    /**
     * Get the associated Country object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Country The associated Country object.
     * @throws PropelException
     */
    public function getCountry(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCountry === null && ($this->country_id !== null) && $doQuery) {
            $this->aCountry = CountryQuery::create()->findPk($this->country_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCountry->addCitys($this);
             */
        }

        return $this->aCountry;
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
        if ('RecordCity' == $relationName) {
            $this->initRecordCitys();
        }
    }

    /**
     * Clears out the collRecordCitys collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return City The current object (for fluent API support)
     * @see        addRecordCitys()
     */
    public function clearRecordCitys()
    {
        $this->collRecordCitys = null; // important to set this to null since that means it is uninitialized
        $this->collRecordCitysPartial = null;

        return $this;
    }

    /**
     * reset is the collRecordCitys collection loaded partially
     *
     * @return void
     */
    public function resetPartialRecordCitys($v = true)
    {
        $this->collRecordCitysPartial = $v;
    }

    /**
     * Initializes the collRecordCitys collection.
     *
     * By default this just sets the collRecordCitys collection to an empty array (like clearcollRecordCitys());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRecordCitys($overrideExisting = true)
    {
        if (null !== $this->collRecordCitys && !$overrideExisting) {
            return;
        }
        $this->collRecordCitys = new PropelObjectCollection();
        $this->collRecordCitys->setModel('RecordCity');
    }

    /**
     * Gets an array of RecordCity objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this City is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|RecordCity[] List of RecordCity objects
     * @throws PropelException
     */
    public function getRecordCitys($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRecordCitysPartial && !$this->isNew();
        if (null === $this->collRecordCitys || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRecordCitys) {
                // return empty collection
                $this->initRecordCitys();
            } else {
                $collRecordCitys = RecordCityQuery::create(null, $criteria)
                    ->filterByCity($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRecordCitysPartial && count($collRecordCitys)) {
                      $this->initRecordCitys(false);

                      foreach($collRecordCitys as $obj) {
                        if (false == $this->collRecordCitys->contains($obj)) {
                          $this->collRecordCitys->append($obj);
                        }
                      }

                      $this->collRecordCitysPartial = true;
                    }

                    return $collRecordCitys;
                }

                if($partial && $this->collRecordCitys) {
                    foreach($this->collRecordCitys as $obj) {
                        if($obj->isNew()) {
                            $collRecordCitys[] = $obj;
                        }
                    }
                }

                $this->collRecordCitys = $collRecordCitys;
                $this->collRecordCitysPartial = false;
            }
        }

        return $this->collRecordCitys;
    }

    /**
     * Sets a collection of RecordCity objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $recordCitys A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return City The current object (for fluent API support)
     */
    public function setRecordCitys(PropelCollection $recordCitys, PropelPDO $con = null)
    {
        $recordCitysToDelete = $this->getRecordCitys(new Criteria(), $con)->diff($recordCitys);

        $this->recordCitysScheduledForDeletion = unserialize(serialize($recordCitysToDelete));

        foreach ($recordCitysToDelete as $recordCityRemoved) {
            $recordCityRemoved->setCity(null);
        }

        $this->collRecordCitys = null;
        foreach ($recordCitys as $recordCity) {
            $this->addRecordCity($recordCity);
        }

        $this->collRecordCitys = $recordCitys;
        $this->collRecordCitysPartial = false;

        return $this;
    }

    /**
     * Returns the number of related RecordCity objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related RecordCity objects.
     * @throws PropelException
     */
    public function countRecordCitys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRecordCitysPartial && !$this->isNew();
        if (null === $this->collRecordCitys || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRecordCitys) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getRecordCitys());
            }
            $query = RecordCityQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCity($this)
                ->count($con);
        }

        return count($this->collRecordCitys);
    }

    /**
     * Method called to associate a RecordCity object to this object
     * through the RecordCity foreign key attribute.
     *
     * @param    RecordCity $l RecordCity
     * @return City The current object (for fluent API support)
     */
    public function addRecordCity(RecordCity $l)
    {
        if ($this->collRecordCitys === null) {
            $this->initRecordCitys();
            $this->collRecordCitysPartial = true;
        }
        if (!in_array($l, $this->collRecordCitys->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRecordCity($l);
        }

        return $this;
    }

    /**
     * @param	RecordCity $recordCity The recordCity object to add.
     */
    protected function doAddRecordCity($recordCity)
    {
        $this->collRecordCitys[]= $recordCity;
        $recordCity->setCity($this);
    }

    /**
     * @param	RecordCity $recordCity The recordCity object to remove.
     * @return City The current object (for fluent API support)
     */
    public function removeRecordCity($recordCity)
    {
        if ($this->getRecordCitys()->contains($recordCity)) {
            $this->collRecordCitys->remove($this->collRecordCitys->search($recordCity));
            if (null === $this->recordCitysScheduledForDeletion) {
                $this->recordCitysScheduledForDeletion = clone $this->collRecordCitys;
                $this->recordCitysScheduledForDeletion->clear();
            }
            $this->recordCitysScheduledForDeletion[]= $recordCity;
            $recordCity->setCity(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->name = null;
        $this->country_id = null;
        $this->publish = null;
        $this->date = null;
        $this->desc = null;
        $this->useful_info = null;
        $this->place = null;
        $this->hotel = null;
        $this->restoran = null;
        $this->buy_center = null;
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
            if ($this->collRecordCitys) {
                foreach ($this->collRecordCitys as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collRecordCitys instanceof PropelCollection) {
            $this->collRecordCitys->clearIterator();
        }
        $this->collRecordCitys = null;
        $this->aCountry = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CityPeer::DEFAULT_STRING_FORMAT);
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
