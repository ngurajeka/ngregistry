<?php
/**
 * Relation Detail Interfaces
 *
 * PHP Version 5.4.x
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
namespace Ng\Registry\Interfaces\Relation;


/**
 * Relation Detail Interfaces
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
interface Detail
{
    /**
     * Get Field of the Relation Detail
     *
     * @return string
     */
    public function getField();

    /**
     * Set Field of the Relation Detail
     *
     * @param string $field
     *
     * @return Detail
     */
    public function setField($field);

    /**
     * Get Type of the Relation Detail
     *
     * @return string
     */
    public function getType();

    /**
     * Set Type of the Relation Detail
     *
     * @param string $type
     *
     * @return Detail
     */
    public function setType($type);

    /**
     * Get Model Path of the Relation Detail
     *
     * @return string
     */
    public function getModel();

    /**
     * Set Model Path of the Relation Detail
     *
     * @param string $model
     *
     * @return Detail
     */
    public function setModel($model);

    /**
     * Get Referenced Field of the Relation Detail
     *
     * @return string
     */
    public function getReferencedField();

    /**
     * Set Referenced Field of the Relation Detail
     *
     * @param string $referencedField
     *
     * @return Detail
     */
    public function setReferencedField($referencedField);

    /**
     * Check if Relatin has Option
     *
     * @return bool
     */
    public function hasOption();

    /**
     * Get Option of The Relation Detail
     *
     * @return Option
     */
    public function getOption();

    /**
     * Set Option of the Relation
     *
     * @param Option $option
     *
     * @return Detail
     */
    public function setOption(Option $option);

    /**
     * Get All Available information about the Relation Detail as an array
     *
     * @return array
     */
    public function toArray();
}
