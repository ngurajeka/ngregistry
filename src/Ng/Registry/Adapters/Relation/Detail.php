<?php
/**
 * Relation Detail
 *
 * PHP Version 5.4.x
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
namespace Ng\Registry\Adapters\Relation;


use Ng\Registry\Interfaces\Relation\Detail as NgDetail;
use Ng\Registry\Interfaces\Relation\Option;

/**
 * Relation Detail
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
class Detail implements NgDetail
{
    protected $field;
    protected $type;
    protected $model;
    protected $referencedField;
    protected $option;

    public function __construct(
        $field, $type, $model, $referencedField, Option $option=null
    ) {
        $this->setField($field);
        $this->setType($type);
        $this->setModel($model);
        $this->setReferencedField($referencedField);
        $this->setOption($option);
    }

    /**
     * Get Field of the Relation Detail
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set Field of the Relation Detail
     *
     * @param string $field
     *
     * @return Detail
     */
    public function setField($field)
    {
        $this->field        = $field;
        return $this;
    }

    /**
     * Get Type of the Relation Detail
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Type of the Relation Detail
     *
     * @param string $type
     *
     * @return Detail
     */
    public function setType($type)
    {
        $this->type         = $type;
        return $this;
    }

    /**
     * Get Model Path of the Relation Detail
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set Model Path of the Relation Detail
     *
     * @param string $model
     *
     * @return Detail
     */
    public function setModel($model)
    {
        $this->model        = $model;
        return $this;
    }

    /**
     * Get Referenced Field of the Relation Detail
     *
     * @return string
     */
    public function getReferencedField()
    {
        return $this->referencedField;
    }

    /**
     * Set Referenced Field of the Relation Detail
     *
     * @param string $referencedField
     *
     * @return Detail
     */
    public function setReferencedField($referencedField)
    {
        $this->field        = $referencedField;
        return $this;
    }

    /**
     * Check if Relatin has Option
     *
     * @return bool
     */
    public function hasOption()
    {
        return !empty($this->option);
    }

    /**
     * Get Option of The Relation Detail
     *
     * @return Option
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * Set Option of The Relation Detail
     *
     * @param Option $option
     *
     * @return Detail
     */
    public function setOption(Option $option)
    {
        $this->option       = $option;
        return $this;
    }

    /**
     * Get All Available information about the Relation Detail as an array
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            "field"             => $this->getField(),
            "type"              => $this->getType(),
            "model"             => $this->getModel(),
            "referencedField"   => $this->getReferencedField(),
            "option"            => $this->getOption(),
        );
    }
}
