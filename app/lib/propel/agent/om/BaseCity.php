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
     * The value for the country field.
     * @var        string
     */
    protected $country;

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
     * @var        PropelObjectCollection|Tour[] Collection to store aggregation of Tour objects.
     */
    protected $collTours;
    protected $collToursPartial;

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
    protected $toursScheduledForDeletion = null;

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
     * Get the [country] column value.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
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
     * Set the value of [country] column.
     *
     * @param string $v new value
     * @return City The current object (for fluent API support)
     */
    public function setCountry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->country !== $v) {
            $this->country = $v;
            $this->modifiedColumns[] = CityPeer::COUNTRY;
        }


        return $this;
    } // setCountry()

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
            $this->country = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->desc = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->useful_info = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->place = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->hotel = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->restoran = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->buy_center = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 9; // 9 = CityPeer::NUM_HYDRATE_COLUMNS.

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

            $this->collTours = null;

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

            if ($this->toursScheduledForDeletion !== null) {
                if (!$this->toursScheduledForDeletion->isEmpty()) {
                    foreach ($this->toursScheduledForDeletion as $tour) {
                        // need to save related object because we set the relation to null
                        $tour->save($con);
                    }
                    $this->toursScheduledForDeletion = null;
                }
            }

            if ($this->collTours !== null) {
                foreach ($this->collTours as $referrerFK) {
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
        if ($this->isColumnModified(CityPeer::COUNTRY)) {
            $modifiedColumns[':p' . $index++]  = '`country`';
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
                    case '`country`':
                        $stmt->bindValue($identifier, $this->country, PDO::PARAM_STR);
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


            if (($retval = CityPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collTours !== null) {
                    foreach ($this->collTours as $referrerFK) {
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
                return $this->getCountry();
                break;
            case 3:
                return $this->getDesc();
                break;
            case 4:
                return $this->getUsefulInfo();
                break;
            case 5:
                return $this->getPlace();
                break;
            case 6:
                return $this->getHotel();
                break;
            case 7:
                return $this->getRestoran();
                break;
            case 8:
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
            $keys[2] => $this->getCountry(),
            $keys[3] => $this->getDesc(),
            $keys[4] => $this->getUsefulInfo(),
            $keys[5] => $this->getPlace(),
            $keys[6] => $this->getHotel(),
            $keys[7] => $this->getRestoran(),
            $keys[8] => $this->getBuyCenter(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collTours) {
                $result['Tours'] = $this->collTours->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
                $this->setCountry($value);
                break;
            case 3:
                $this->setDesc($value);
                break;
            case 4:
                $this->setUsefulInfo($value);
                break;
            case 5:
                $this->setPlace($value);
                break;
            case 6:
                $this->setHotel($value);
                break;
            case 7:
                $this->setRestoran($value);
                break;
            case 8:
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
        if (array_key_exists($keys[2], $arr)) $this->setCountry($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDesc($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setUsefulInfo($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPlace($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setHotel($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setRestoran($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setBuyCenter($arr[$keys[8]]);
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
        if ($this->isColumnModified(CityPeer::COUNTRY)) $criteria->add(CityPeer::COUNTRY, $this->country);
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
        $copyObj->setCountry($this->getCountry());
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

            foreach ($this->getTours() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTour($relObj->copy($deepCopy));
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
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Tour' == $relationName) {
            $this->initTours();
        }
    }

    /**
     * Clears out the collTours collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return City The current object (for fluent API support)
     * @see        addTours()
     */
    public function clearTours()
    {
        $this->collTours = null; // important to set this to null since that means it is uninitialized
        $this->collToursPartial = null;

        return $this;
    }

    /**
     * reset is the collTours collection loaded partially
     *
     * @return void
     */
    public function resetPartialTours($v = true)
    {
        $this->collToursPartial = $v;
    }

    /**
     * Initializes the collTours collection.
     *
     * By default this just sets the collTours collection to an empty array (like clearcollTours());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTours($overrideExisting = true)
    {
        if (null !== $this->collTours && !$overrideExisting) {
            return;
        }
        $this->collTours = new PropelObjectCollection();
        $this->collTours->setModel('Tour');
    }

    /**
     * Gets an array of Tour objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this City is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Tour[] List of Tour objects
     * @throws PropelException
     */
    public function getTours($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collToursPartial && !$this->isNew();
        if (null === $this->collTours || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTours) {
                // return empty collection
                $this->initTours();
            } else {
                $collTours = TourQuery::create(null, $criteria)
                    ->filterByCity($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collToursPartial && count($collTours)) {
                      $this->initTours(false);

                      foreach($collTours as $obj) {
                        if (false == $this->collTours->contains($obj)) {
                          $this->collTours->append($obj);
                        }
                      }

                      $this->collToursPartial = true;
                    }

                    return $collTours;
                }

                if($partial && $this->collTours) {
                    foreach($this->collTours as $obj) {
                        if($obj->isNew()) {
                            $collTours[] = $obj;
                        }
                    }
                }

                $this->collTours = $collTours;
                $this->collToursPartial = false;
            }
        }

        return $this->collTours;
    }

    /**
     * Sets a collection of Tour objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $tours A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return City The current object (for fluent API support)
     */
    public function setTours(PropelCollection $tours, PropelPDO $con = null)
    {
        $toursToDelete = $this->getTours(new Criteria(), $con)->diff($tours);

        $this->toursScheduledForDeletion = unserialize(serialize($toursToDelete));

        foreach ($toursToDelete as $tourRemoved) {
            $tourRemoved->setCity(null);
        }

        $this->collTours = null;
        foreach ($tours as $tour) {
            $this->addTour($tour);
        }

        $this->collTours = $tours;
        $this->collToursPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Tour objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Tour objects.
     * @throws PropelException
     */
    public function countTours(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collToursPartial && !$this->isNew();
        if (null === $this->collTours || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTours) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getTours());
            }
            $query = TourQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCity($this)
                ->count($con);
        }

        return count($this->collTours);
    }

    /**
     * Method called to associate a Tour object to this object
     * through the Tour foreign key attribute.
     *
     * @param    Tour $l Tour
     * @return City The current object (for fluent API support)
     */
    public function addTour(Tour $l)
    {
        if ($this->collTours === null) {
            $this->initTours();
            $this->collToursPartial = true;
        }
        if (!in_array($l, $this->collTours->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTour($l);
        }

        return $this;
    }

    /**
     * @param	Tour $tour The tour object to add.
     */
    protected function doAddTour($tour)
    {
        $this->collTours[]= $tour;
        $tour->setCity($this);
    }

    /**
     * @param	Tour $tour The tour object to remove.
     * @return City The current object (for fluent API support)
     */
    public function removeTour($tour)
    {
        if ($this->getTours()->contains($tour)) {
            $this->collTours->remove($this->collTours->search($tour));
            if (null === $this->toursScheduledForDeletion) {
                $this->toursScheduledForDeletion = clone $this->collTours;
                $this->toursScheduledForDeletion->clear();
            }
            $this->toursScheduledForDeletion[]= $tour;
            $tour->setCity(null);
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
        $this->country = null;
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
            if ($this->collTours) {
                foreach ($this->collTours as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collTours instanceof PropelCollection) {
            $this->collTours->clearIterator();
        }
        $this->collTours = null;
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
