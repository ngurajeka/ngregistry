<?php
/**
 * Validation
 *
 * PHP Version 5.4.x
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
namespace Ng\Registry\Adapters;


use Ng\Registry\Interfaces\Validation\Detail;

/**
 * Validation
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
class Validation implements \Ng\Registry\Interfaces\Validation
{
    protected $validations = array();

    /**
     * Add New Validation
     *
     * @param string $actionType
     * @param Detail $detail
     *
     * @return Validation
     */
    public function addValidation(
        $actionType=self::ACTION_CREATE, Detail $detail
    ) {
        if (is_null($this->getValidationByActionType($actionType))) {
            $this->validations[$actionType] = array();
        }

        $this->validations[$actionType][]   = $detail;
        return $this;
    }

    /**
     * Get Validation by ActionType
     *
     * @param string $actionType
     *
     * @return Detail[]|null
     */
    public function getValidationByActionType($actionType)
    {
        if (!in_array($actionType, array_keys($this->validations))) {
            return null;
        }

        return $this->validations[$actionType];
    }

    /**
     * Check if Container has Validation for spesific action
     *
     * @param string $actionType
     *
     * @return bool
     */
    public function hasValidation($actionType)
    {
        return !is_null($this->getValidationByActionType($actionType));
    }

    /**
     * Get All Available information about the Validation Detail as an array
     *
     * @return array
     */
    public function toArray()
    {
        $validation = array();

        foreach (array_keys($this->validations) as $actionType) {
            if (!$this->hasValidation($actionType)) {
                continue;
            }
            $validations[$actionType][]     = array();
            foreach ($this->getValidationByActionType($actionType) as $v) {
                $validations[$actionType][] = $v->toArray();
            }
        }

        return $validation;
    }
}
