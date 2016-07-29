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
    const ACTION_CREATE = "create";
    const ACTION_UPDATE = "update";

    /**
     * Add New Validation
     *
     * @param string $actionType
     * @param Detail $detail
     *
     * @return Validation
     */
    public function addValidation(
        $actionType=Validation::ACTION_CREATE, Detail $detail
    );

    /**
     * Check If Validation was existed
     *
     * @param string $actionType
     * @param string $validationType
     *
     * @return bool
     */
    public function isExist($actionType, $validationType);

    /**
     * Get Validation by ActionType
     *
     * @param string $actionType
     *
     * @return Detail[]|null
     */
    public function getValidationByActionType($actionType);

    /**
     * Check if Container has Validation for spesific action
     *
     * @param string $actionType
     *
     * @return bool
     */
    public function hasValidation($actionType);

    /**
     * Get All Available information about the ValidationDetail as an array
     *
     * @return array
     */
    public function toArray();
}
