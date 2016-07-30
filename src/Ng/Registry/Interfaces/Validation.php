<?php
/**
 * Validation Interfaces
 *
 * PHP Version 5.4.x
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
namespace Ng\Registry\Interfaces;


use Ng\Registry\Interfaces\Validation\Detail;

/**
 * Validation Interfaces
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
interface Validation
{
    /**
     * Add New Validation
     *
     * @param Detail $detail
     *
     * @return Validation
     */
    public function addValidation(Detail $detail);

    /**
     * Check If Validation was existed
     *
     * @param Detail $validation
     *
     * @return bool
     */
    public function isExist(Detail $validation)

    /**
     * Get Validation by ActionType
     *
     * @return Detail[]|null
     */
    public function getValidation();

    /**
     * Check if Container has Validation for spesific action
     *
     * @return bool
     */
    public function hasValidation();

    /**
     * Get All Available information about the ValidationDetail as an array
     *
     * @return array
     */
    public function toArray();
}
