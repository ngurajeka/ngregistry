<?php
/**
 * Validation Detail Interfaces
 *
 * PHP Version 5.4.x
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
namespace Ng\Registry\Interfaces\Validation;


/**
 * Validation Detail Interfaces
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
     * Get Field of the Validation Detail
     *
     * @return string
     */
    public function getField();

    /**
     * Set Field of the Validation Detail
     *
     * @param string $field
     *
     * @return Detail
     */
    public function setField($field);

    /**
     * Get Type of the Validation Detail
     *
     * @return string
     */
    public function getType();

    /**
     * Set Type of the Validation Detail
     *
     * @param string $type
     *
     * @return Detail
     */
    public function setType($type);

    /**
     * Check if it's has option
     *
     * @return bool
     */
    public function hasOption();

    /**
     * Get Option of the Validation Detail
     *
     * @return Option
     */
    public function getOption();

    /**
     * Set Option of the Validation Detail
     *
     * @param Option $option
     *
     * @return Detail
     */
    public function setOption(Option $option);

    /**
     * Get All Available information about the Validation Detail as an array
     *
     * @return array
     */
    public function toArray();
}
