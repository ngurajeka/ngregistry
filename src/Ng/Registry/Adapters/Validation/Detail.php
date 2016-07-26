<?php
/**
 * Validation Detail
 *
 * PHP Version 5.4.x
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
namespace Ng\Registry\Adapters\Validation;


use Ng\Registry\Interfaces\Validation\Option;

/**
 * Validation Detail
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
class Detail implements \Ng\Registry\Interfaces\Validation\Detail
{
    protected $field;
    /** @tyep Option $option */
    protected $option;
    protected $type;

    public function __construct($field, $type, Option $option)
    {
        $this->setField($field);
        $this->setType($type);
        $this->setOption($option);
    }

    /**
     * Get Field of the Validation Detail
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set Field of the Validation Detail
     *
     * @param string $field
     *
     * @return Detail
     */
    public function setField($field)
    {
        $this->field    = $field;
        return $this;
    }

    /**
     * Get Type of the Validation Detail
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Type of the Validation Detail
     *
     * @param string $type
     *
     * @return Detail
     */
    public function setType($type)
    {
        $this->type     = $type;
        return $this;
    }

    /**
     * Check if it's has option
     *
     * @return bool
     */
    public function hasOption()
    {
        return !is_null($this->option);
    }

    /**
     * Get Options of the Validation Detail
     *
     * @return Option
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * Set Option of the Validation Detail
     *
     * @param Option $option
     *
     * @return Detail
     */
    public function setOption(Option $option)
    {
        $this->option   = $option;
        return $this;
    }

    /**
     * Get All Available information about the Validation Detail as an array
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            "field" => $this->getField(),
            "type"  => $this->getType(),
        );
    }
}
