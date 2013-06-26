<?php


/**
 * Base class that represents a row from the 'record_city' table.
 *
 *
 *
 * @package    propel.generator.agent.om
 */
abstract class BaseRecordCity extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RecordCityPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RecordCityPeer
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
     * The value for the day_counter field.
     * @var        int
     */
    protected $day_counter;

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
     * @var        PropelObjectCollection|Option[] Collection to store aggregation of Option objects.
     */
    protected $collOptions;
    protected $collOptionsPartial;

    /**
     * @var        PropelObjectCollection|AirplaneInfo[] Collection to store aggregation of AirplaneInfo objects.
     */
    protected $collAirplaneInfos;
    protected $collAirplaneInfosPartial;

    /**
     * @var        PropelObjectCollection|Reserve[] Collection to store aggregation of Reserve objects.
     */
    protected $collReserves;
    protected $collReservesPartial;

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
    protected $optionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $airplaneInfosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $reservesScheduledForDeletion = null;

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
     * Get the [day_counter] column value.
     *
     * @return int
     */
    public function getDayCounter()
    {
        return $this->day_counter;
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
     * @return RecordCity The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = RecordCityPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [day_counter] column.
     *
     * @param int $v new value
     * @return RecordCity The current object (for fluent API support)
     */
    public function setDayCounter($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->day_counter !== $v) {
            $this->day_counter = $v;
            $this->modifiedColumns[] = RecordCityPeer::DAY_COUNTER;
        }


        return $this;
    } // setDayCounter()

    /**
     * Sets the value of the [status] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return RecordCity The current object (for fluent API support)
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
            $this->modifiedColumns[] = RecordCityPeer::STATUS;
        }


        return $this;
    } // setStatus()

    /**
     * Set the value of [city_id] column.
     *
     * @param int $v new value
     * @return RecordCity The current object (for fluent API support)
     */
    public function setCityId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->city_id !== $v) {
            $this->city_id = $v;
            $this->modifiedColumns[] = RecordCityPeer::CITY_ID;
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
            $this->day_counter = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->status = ($row[$startcol + 2] !== null) ? (boolean) $row[$startcol + 2] : null;
            $this->city_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 4; // 4 = RecordCityPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating RecordCity object", $e);
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
            $con = Propel::getConnection(RecordCityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RecordCityPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCity = null;
            $this->collOptions = null;

            $this->collAirplaneInfos = null;

            $this->collReserves = null;

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
            $con = Propel::getConnection(RecordCityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RecordCityQuery::create()
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
            $con = Propel::getConnection(RecordCityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                RecordCityPeer::addInstanceToPool($this);
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

            if ($this->optionsScheduledForDeletion !== null) {
                if (!$this->optionsScheduledForDeletion->isEmpty()) {
                    foreach ($this->optionsScheduledForDeletion as $option) {
                        // need to save related object because we set the relation to null
                        $option->save($con);
                    }
                    $this->optionsScheduledForDeletion = null;
                }
            }

            if ($this->collOptions !== null) {
                foreach ($this->collOptions as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->airplaneInfosScheduledForDeletion !== null) {
                if (!$this->airplaneInfosScheduledForDeletion->isEmpty()) {
                    foreach ($this->airplaneInfosScheduledForDeletion as $airplaneInfo) {
                        // need to save related object because we set the relation to null
                        $airplaneInfo->save($con);
                    }
                    $this->airplaneInfosScheduledForDeletion = null;
                }
            }

            if ($this->collAirplaneInfos !== null) {
                foreach ($this->collAirplaneInfos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->reservesScheduledForDeletion !== null) {
                if (!$this->reservesScheduledForDeletion->isEmpty()) {
                    foreach ($this->reservesScheduledForDeletion as $reserve) {
                        // need to save related object because we set the relation to null
                        $reserve->save($con);
                    }
                    $this->reservesScheduledForDeletion = null;
                }
            }

            if ($this->collReserves !== null) {
                foreach ($this->collReserves as $referrerFK) {
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

        $this->modifiedColumns[] = RecordCityPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . RecordCityPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RecordCityPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(RecordCityPeer::DAY_COUNTER)) {
            $modifiedColumns[':p' . $index++]  = '`day_counter`';
        }
        if ($this->isColumnModified(RecordCityPeer::STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`status`';
        }
        if ($this->isColumnModified(RecordCityPeer::CITY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`city_id`';
        }

        $sql = sprintf(
            'INSERT INTO `record_city` (%s) VALUES (%s)',
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
                    case '`day_counter`':
                        $stmt->bindValue($identifier, $this->day_counter, PDO::PARAM_INT);
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


            if (($retval = RecordCityPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collOptions !== null) {
                    foreach ($this->collOptions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collAirplaneInfos !== null) {
                    foreach ($this->collAirplaneInfos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collReserves !== null) {
                    foreach ($this->collReserves as $referrerFK) {
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
        $pos = RecordCityPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getDayCounter();
                break;
            case 2:
                return $this->getStatus();
                break;
            case 3:
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
        if (isset($alreadyDumpedObjects['RecordCity'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['RecordCity'][$this->getPrimaryKey()] = true;
        $keys = RecordCityPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getDayCounter(),
            $keys[2] => $this->getStatus(),
            $keys[3] => $this->getCityId(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCity) {
                $result['City'] = $this->aCity->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collOptions) {
                $result['Options'] = $this->collOptions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collAirplaneInfos) {
                $result['AirplaneInfos'] = $this->collAirplaneInfos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collReserves) {
                $result['Reserves'] = $this->collReserves->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = RecordCityPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setDayCounter($value);
                break;
            case 2:
                $this->setStatus($value);
                break;
            case 3:
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
        $keys = RecordCityPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setDayCounter($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setStatus($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCityId($arr[$keys[3]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RecordCityPeer::DATABASE_NAME);

        if ($this->isColumnModified(RecordCityPeer::ID)) $criteria->add(RecordCityPeer::ID, $this->id);
        if ($this->isColumnModified(RecordCityPeer::DAY_COUNTER)) $criteria->add(RecordCityPeer::DAY_COUNTER, $this->day_counter);
        if ($this->isColumnModified(RecordCityPeer::STATUS)) $criteria->add(RecordCityPeer::STATUS, $this->status);
        if ($this->isColumnModified(RecordCityPeer::CITY_ID)) $criteria->add(RecordCityPeer::CITY_ID, $this->city_id);

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
        $criteria = new Criteria(RecordCityPeer::DATABASE_NAME);
        $criteria->add(RecordCityPeer::ID, $this->id);

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
     * @param object $copyObj An object of RecordCity (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setDayCounter($this->getDayCounter());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setCityId($this->getCityId());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getOptions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOption($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getAirplaneInfos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAirplaneInfo($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getReserves() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addReserve($relObj->copy($deepCopy));
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
     * @return RecordCity Clone of current object.
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
     * @return RecordCityPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RecordCityPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a City object.
     *
     * @param             City $v
     * @return RecordCity The current object (for fluent API support)
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
            $v->addRecordCity($this);
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
                $this->aCity->addRecordCitys($this);
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
        if ('Option' == $relationName) {
            $this->initOptions();
        }
        if ('AirplaneInfo' == $relationName) {
            $this->initAirplaneInfos();
        }
        if ('Reserve' == $relationName) {
            $this->initReserves();
        }
    }

    /**
     * Clears out the collOptions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RecordCity The current object (for fluent API support)
     * @see        addOptions()
     */
    public function clearOptions()
    {
        $this->collOptions = null; // important to set this to null since that means it is uninitialized
        $this->collOptionsPartial = null;

        return $this;
    }

    /**
     * reset is the collOptions collection loaded partially
     *
     * @return void
     */
    public function resetPartialOptions($v = true)
    {
        $this->collOptionsPartial = $v;
    }

    /**
     * Initializes the collOptions collection.
     *
     * By default this just sets the collOptions collection to an empty array (like clearcollOptions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOptions($overrideExisting = true)
    {
        if (null !== $this->collOptions && !$overrideExisting) {
            return;
        }
        $this->collOptions = new PropelObjectCollection();
        $this->collOptions->setModel('Option');
    }

    /**
     * Gets an array of Option objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RecordCity is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Option[] List of Option objects
     * @throws PropelException
     */
    public function getOptions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOptionsPartial && !$this->isNew();
        if (null === $this->collOptions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOptions) {
                // return empty collection
                $this->initOptions();
            } else {
                $collOptions = OptionQuery::create(null, $criteria)
                    ->filterByRecordCity($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOptionsPartial && count($collOptions)) {
                      $this->initOptions(false);

                      foreach($collOptions as $obj) {
                        if (false == $this->collOptions->contains($obj)) {
                          $this->collOptions->append($obj);
                        }
                      }

                      $this->collOptionsPartial = true;
                    }

                    return $collOptions;
                }

                if($partial && $this->collOptions) {
                    foreach($this->collOptions as $obj) {
                        if($obj->isNew()) {
                            $collOptions[] = $obj;
                        }
                    }
                }

                $this->collOptions = $collOptions;
                $this->collOptionsPartial = false;
            }
        }

        return $this->collOptions;
    }

    /**
     * Sets a collection of Option objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $options A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RecordCity The current object (for fluent API support)
     */
    public function setOptions(PropelCollection $options, PropelPDO $con = null)
    {
        $optionsToDelete = $this->getOptions(new Criteria(), $con)->diff($options);

        $this->optionsScheduledForDeletion = unserialize(serialize($optionsToDelete));

        foreach ($optionsToDelete as $optionRemoved) {
            $optionRemoved->setRecordCity(null);
        }

        $this->collOptions = null;
        foreach ($options as $option) {
            $this->addOption($option);
        }

        $this->collOptions = $options;
        $this->collOptionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Option objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Option objects.
     * @throws PropelException
     */
    public function countOptions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOptionsPartial && !$this->isNew();
        if (null === $this->collOptions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOptions) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getOptions());
            }
            $query = OptionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRecordCity($this)
                ->count($con);
        }

        return count($this->collOptions);
    }

    /**
     * Method called to associate a Option object to this object
     * through the Option foreign key attribute.
     *
     * @param    Option $l Option
     * @return RecordCity The current object (for fluent API support)
     */
    public function addOption(Option $l)
    {
        if ($this->collOptions === null) {
            $this->initOptions();
            $this->collOptionsPartial = true;
        }
        if (!in_array($l, $this->collOptions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOption($l);
        }

        return $this;
    }

    /**
     * @param	Option $option The option object to add.
     */
    protected function doAddOption($option)
    {
        $this->collOptions[]= $option;
        $option->setRecordCity($this);
    }

    /**
     * @param	Option $option The option object to remove.
     * @return RecordCity The current object (for fluent API support)
     */
    public function removeOption($option)
    {
        if ($this->getOptions()->contains($option)) {
            $this->collOptions->remove($this->collOptions->search($option));
            if (null === $this->optionsScheduledForDeletion) {
                $this->optionsScheduledForDeletion = clone $this->collOptions;
                $this->optionsScheduledForDeletion->clear();
            }
            $this->optionsScheduledForDeletion[]= $option;
            $option->setRecordCity(null);
        }

        return $this;
    }

    /**
     * Clears out the collAirplaneInfos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RecordCity The current object (for fluent API support)
     * @see        addAirplaneInfos()
     */
    public function clearAirplaneInfos()
    {
        $this->collAirplaneInfos = null; // important to set this to null since that means it is uninitialized
        $this->collAirplaneInfosPartial = null;

        return $this;
    }

    /**
     * reset is the collAirplaneInfos collection loaded partially
     *
     * @return void
     */
    public function resetPartialAirplaneInfos($v = true)
    {
        $this->collAirplaneInfosPartial = $v;
    }

    /**
     * Initializes the collAirplaneInfos collection.
     *
     * By default this just sets the collAirplaneInfos collection to an empty array (like clearcollAirplaneInfos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAirplaneInfos($overrideExisting = true)
    {
        if (null !== $this->collAirplaneInfos && !$overrideExisting) {
            return;
        }
        $this->collAirplaneInfos = new PropelObjectCollection();
        $this->collAirplaneInfos->setModel('AirplaneInfo');
    }

    /**
     * Gets an array of AirplaneInfo objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RecordCity is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|AirplaneInfo[] List of AirplaneInfo objects
     * @throws PropelException
     */
    public function getAirplaneInfos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collAirplaneInfosPartial && !$this->isNew();
        if (null === $this->collAirplaneInfos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collAirplaneInfos) {
                // return empty collection
                $this->initAirplaneInfos();
            } else {
                $collAirplaneInfos = AirplaneInfoQuery::create(null, $criteria)
                    ->filterByRecordCity($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collAirplaneInfosPartial && count($collAirplaneInfos)) {
                      $this->initAirplaneInfos(false);

                      foreach($collAirplaneInfos as $obj) {
                        if (false == $this->collAirplaneInfos->contains($obj)) {
                          $this->collAirplaneInfos->append($obj);
                        }
                      }

                      $this->collAirplaneInfosPartial = true;
                    }

                    return $collAirplaneInfos;
                }

                if($partial && $this->collAirplaneInfos) {
                    foreach($this->collAirplaneInfos as $obj) {
                        if($obj->isNew()) {
                            $collAirplaneInfos[] = $obj;
                        }
                    }
                }

                $this->collAirplaneInfos = $collAirplaneInfos;
                $this->collAirplaneInfosPartial = false;
            }
        }

        return $this->collAirplaneInfos;
    }

    /**
     * Sets a collection of AirplaneInfo objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $airplaneInfos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RecordCity The current object (for fluent API support)
     */
    public function setAirplaneInfos(PropelCollection $airplaneInfos, PropelPDO $con = null)
    {
        $airplaneInfosToDelete = $this->getAirplaneInfos(new Criteria(), $con)->diff($airplaneInfos);

        $this->airplaneInfosScheduledForDeletion = unserialize(serialize($airplaneInfosToDelete));

        foreach ($airplaneInfosToDelete as $airplaneInfoRemoved) {
            $airplaneInfoRemoved->setRecordCity(null);
        }

        $this->collAirplaneInfos = null;
        foreach ($airplaneInfos as $airplaneInfo) {
            $this->addAirplaneInfo($airplaneInfo);
        }

        $this->collAirplaneInfos = $airplaneInfos;
        $this->collAirplaneInfosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related AirplaneInfo objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related AirplaneInfo objects.
     * @throws PropelException
     */
    public function countAirplaneInfos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collAirplaneInfosPartial && !$this->isNew();
        if (null === $this->collAirplaneInfos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collAirplaneInfos) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getAirplaneInfos());
            }
            $query = AirplaneInfoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRecordCity($this)
                ->count($con);
        }

        return count($this->collAirplaneInfos);
    }

    /**
     * Method called to associate a AirplaneInfo object to this object
     * through the AirplaneInfo foreign key attribute.
     *
     * @param    AirplaneInfo $l AirplaneInfo
     * @return RecordCity The current object (for fluent API support)
     */
    public function addAirplaneInfo(AirplaneInfo $l)
    {
        if ($this->collAirplaneInfos === null) {
            $this->initAirplaneInfos();
            $this->collAirplaneInfosPartial = true;
        }
        if (!in_array($l, $this->collAirplaneInfos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddAirplaneInfo($l);
        }

        return $this;
    }

    /**
     * @param	AirplaneInfo $airplaneInfo The airplaneInfo object to add.
     */
    protected function doAddAirplaneInfo($airplaneInfo)
    {
        $this->collAirplaneInfos[]= $airplaneInfo;
        $airplaneInfo->setRecordCity($this);
    }

    /**
     * @param	AirplaneInfo $airplaneInfo The airplaneInfo object to remove.
     * @return RecordCity The current object (for fluent API support)
     */
    public function removeAirplaneInfo($airplaneInfo)
    {
        if ($this->getAirplaneInfos()->contains($airplaneInfo)) {
            $this->collAirplaneInfos->remove($this->collAirplaneInfos->search($airplaneInfo));
            if (null === $this->airplaneInfosScheduledForDeletion) {
                $this->airplaneInfosScheduledForDeletion = clone $this->collAirplaneInfos;
                $this->airplaneInfosScheduledForDeletion->clear();
            }
            $this->airplaneInfosScheduledForDeletion[]= $airplaneInfo;
            $airplaneInfo->setRecordCity(null);
        }

        return $this;
    }

    /**
     * Clears out the collReserves collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RecordCity The current object (for fluent API support)
     * @see        addReserves()
     */
    public function clearReserves()
    {
        $this->collReserves = null; // important to set this to null since that means it is uninitialized
        $this->collReservesPartial = null;

        return $this;
    }

    /**
     * reset is the collReserves collection loaded partially
     *
     * @return void
     */
    public function resetPartialReserves($v = true)
    {
        $this->collReservesPartial = $v;
    }

    /**
     * Initializes the collReserves collection.
     *
     * By default this just sets the collReserves collection to an empty array (like clearcollReserves());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initReserves($overrideExisting = true)
    {
        if (null !== $this->collReserves && !$overrideExisting) {
            return;
        }
        $this->collReserves = new PropelObjectCollection();
        $this->collReserves->setModel('Reserve');
    }

    /**
     * Gets an array of Reserve objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RecordCity is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Reserve[] List of Reserve objects
     * @throws PropelException
     */
    public function getReserves($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collReservesPartial && !$this->isNew();
        if (null === $this->collReserves || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collReserves) {
                // return empty collection
                $this->initReserves();
            } else {
                $collReserves = ReserveQuery::create(null, $criteria)
                    ->filterByRecordCity($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collReservesPartial && count($collReserves)) {
                      $this->initReserves(false);

                      foreach($collReserves as $obj) {
                        if (false == $this->collReserves->contains($obj)) {
                          $this->collReserves->append($obj);
                        }
                      }

                      $this->collReservesPartial = true;
                    }

                    return $collReserves;
                }

                if($partial && $this->collReserves) {
                    foreach($this->collReserves as $obj) {
                        if($obj->isNew()) {
                            $collReserves[] = $obj;
                        }
                    }
                }

                $this->collReserves = $collReserves;
                $this->collReservesPartial = false;
            }
        }

        return $this->collReserves;
    }

    /**
     * Sets a collection of Reserve objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $reserves A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RecordCity The current object (for fluent API support)
     */
    public function setReserves(PropelCollection $reserves, PropelPDO $con = null)
    {
        $reservesToDelete = $this->getReserves(new Criteria(), $con)->diff($reserves);

        $this->reservesScheduledForDeletion = unserialize(serialize($reservesToDelete));

        foreach ($reservesToDelete as $reserveRemoved) {
            $reserveRemoved->setRecordCity(null);
        }

        $this->collReserves = null;
        foreach ($reserves as $reserve) {
            $this->addReserve($reserve);
        }

        $this->collReserves = $reserves;
        $this->collReservesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Reserve objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Reserve objects.
     * @throws PropelException
     */
    public function countReserves(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collReservesPartial && !$this->isNew();
        if (null === $this->collReserves || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collReserves) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getReserves());
            }
            $query = ReserveQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRecordCity($this)
                ->count($con);
        }

        return count($this->collReserves);
    }

    /**
     * Method called to associate a Reserve object to this object
     * through the Reserve foreign key attribute.
     *
     * @param    Reserve $l Reserve
     * @return RecordCity The current object (for fluent API support)
     */
    public function addReserve(Reserve $l)
    {
        if ($this->collReserves === null) {
            $this->initReserves();
            $this->collReservesPartial = true;
        }
        if (!in_array($l, $this->collReserves->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddReserve($l);
        }

        return $this;
    }

    /**
     * @param	Reserve $reserve The reserve object to add.
     */
    protected function doAddReserve($reserve)
    {
        $this->collReserves[]= $reserve;
        $reserve->setRecordCity($this);
    }

    /**
     * @param	Reserve $reserve The reserve object to remove.
     * @return RecordCity The current object (for fluent API support)
     */
    public function removeReserve($reserve)
    {
        if ($this->getReserves()->contains($reserve)) {
            $this->collReserves->remove($this->collReserves->search($reserve));
            if (null === $this->reservesScheduledForDeletion) {
                $this->reservesScheduledForDeletion = clone $this->collReserves;
                $this->reservesScheduledForDeletion->clear();
            }
            $this->reservesScheduledForDeletion[]= $reserve;
            $reserve->setRecordCity(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->day_counter = null;
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
            if ($this->collOptions) {
                foreach ($this->collOptions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collAirplaneInfos) {
                foreach ($this->collAirplaneInfos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collReserves) {
                foreach ($this->collReserves as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collOptions instanceof PropelCollection) {
            $this->collOptions->clearIterator();
        }
        $this->collOptions = null;
        if ($this->collAirplaneInfos instanceof PropelCollection) {
            $this->collAirplaneInfos->clearIterator();
        }
        $this->collAirplaneInfos = null;
        if ($this->collReserves instanceof PropelCollection) {
            $this->collReserves->clearIterator();
        }
        $this->collReserves = null;
        $this->aCity = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RecordCityPeer::DEFAULT_STRING_FORMAT);
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
