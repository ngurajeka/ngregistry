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
    /** @type Detail[] $validations */
    protected $validations = array();

    /**
     * Add New Validation
     *
     * @param Detail $detail
     *
     * @return Validation
     */
    public function addValidation(Detail $detail)
    {
        $this->validations[]   = $detail;
        return $this;
    }

    /**
     * Check If Validation was existed
     *
     * @param Detail $validation
     *
     * @return bool
     */
    public function isExist(Detail $validation)
    {
        if (!$this->hasValidation()) {
            return false;
        }

        $exist = false;
        foreach ($this->getValidation() as $v) {
            /** @type Detail $v */
            if ($v->getType() <> $validation->getType()) {
                continue;
            }

            if ($v->getField() == $validation->getField()) {
                $exist = true;
                break;
            }
        }

        return $exist;
    }

    /**
     * Get Validation by ActionType
     *
     * @return Detail[]|null
     */
    public function getValidation()
    {
        if (!$this->hasValidation()) {
            return array();
        }

        return $this->validations();
    }

    /**
     * Check if Container has Validation for spesific action
     *
     * @return bool
     */
    public function hasValidation()
    {
        return !is_null($this->validations) AND !empty($this->validations);
    }

    /**
     * Get All Available information about the Validation Detail as an array
     *
     * @return array
     */
    public function toArray()
    {
        $validations = array();

        foreach ($this->getValidation() as $v) {
            $validations[] = $v->toArray();
        }

        return $validations;
    }
}
