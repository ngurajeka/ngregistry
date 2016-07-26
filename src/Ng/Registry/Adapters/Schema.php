<?php
/**
 * Schema
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


use Ng\Registry\Interfaces\Schema\Field;

/**
 * Schema
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
class Schema implements \Ng\Registry\Interfaces\Schema
{
    /** @type Field[] $fields */
    protected $fields = array();

    /**
     * Add Field to the Schema
     *
     * @param Field $field
     *
     * @return Schema
     */
    public function addField(Field $field)
    {
        $this->fields[] = $field;
        return $this;
    }

    /**
     * Check if the schema has field
     *
     * @return bool
     */
    public function hasField()
    {
        return !empty($this->fields);
    }

    /**
     * Get All Fields
     *
     * @return Field[]
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Get All Fields as an array
     *
     * @return array
     */
    public function toArray()
    {
        $fields = array();
        foreach ($this->getFields() as $field) {
            /** @type Field $field */
            $fields[] = $field->toArray();
        }

        return $fields;
    }
}
