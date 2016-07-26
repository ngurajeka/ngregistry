<?php
/**
 * Field Interfaces
 *
 * PHP Version 5.4.x
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
namespace Ng\Registry\Interfaces\Schema;


/**
 * Field Interfaces
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
interface Field
{
    const TYPE_INTEGER  = "integer";
    const TYPE_DATE     = "date";
    const TYPE_VARCHAR  = "string";
    const TYPE_DECIMAL  = "decimal";
    const TYPE_DATETIME = "datetime";
    const TYPE_CHAR     = "char";
    const TYPE_TEXT     = "text";
    const TYPE_FLOAT    = "float";
    const TYPE_BOOLEAN  = "boolean";
    const TYPE_DOUBLE   = "double";
    const TYPE_TINYBLOB = "tinyblob";
    const TYPE_BLOB     = "blob";
    const TYPE_LONGBLOB = "longblob";
    const TYPE_JSON     = "json";
    const TYPE_JSONB    = "jsonb";

    const TYPE_MEDIUMBLOB   = "mediumblob";
    const TYPE_BIGINTEGER   = "biginteger";
    const TYPE_TIMESTAMP    = "timestamp";

    /**
     * Get Name of the Field
     *
     * @return string
     */
    public function getName();

    /**
     * Set Nme of the Field
     *
     * @param string $name
     *
     * @return Field
     */
    public function setName($name);

    /**
     * Get Label of the Field
     *
     * @return string
     */
    public function getLabel();

    /**
     * Set Label of the Field
     *
     * @param string $label
     *
     * @return Field
     */
    public function setLabel($label);

    /**
     * Get Size of the Field
     *
     * @return int
     */
    public function getSize();

    /**
     * Set Size of the Field
     *
     * @param int $size
     *
     * @return Field
     */
    public function setSize($size);

    /**
     * Get Type of the Field
     *
     * @return string
     */
    public function getType();

    /**
     * Set Type of the Field
     *
     * @param string $type
     *
     * @return Field
     */
    public function setType($type);

    /**
     * Get All Available information about the field as an array
     *
     * @return array
     */
    public function toArray();
}

