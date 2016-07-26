<?php
/**
 * Field
 *
 * PHP Version 5.4.x
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
namespace Ng\Registry\Adapters\Schema;


/**
 * Field
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
class Field implements \Ng\Registry\Interfaces\Schema\Field
{
    protected $name;
    protected $label;
    protected $size;
    protected $type;

    public function __construct($name, $label, $size, $type)
    {
        $this->setName($name);
        $this->setLabel($label);
        $this->setSize($size);
        $this->setType($type);
    }

    /**
     * Get Name of the Field
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name of the Field
     *
     * @param string $name
     *
     * @return Field
     */
    public function setName($name)
    {
        $this->name     = $name;
    }

    /**
     * Get Label of the Field
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set Label of the Field
     *
     * @param string $label
     *
     * @return Field
     */
    public function setLabel($label)
    {
        $this->label    = $label;
        return $this;
    }

    /**
     * Get Size of the Field
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set size of the Field
     *
     * @param int $size
     *
     * @return Field
     */
    public function setSize($size)
    {
        $this->size     = $size;
        return $this;
    }

    /**
     * Get Type of the Field
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Type of the Field
     *
     * @param string $type
     *
     * @return Field
     */
    public function setType($type)
    {
        $this->type     = $type;
        return $this;
    }

    /**
     * Get All Available information about the field as an array
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            "name"  => $this->getName(),
            "label" => $this->getLabel(),
            "size"  => $this->getSize(),
            "type"  => $this->getType(),
        );
    }
}

