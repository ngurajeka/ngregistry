<?php
/**
 * Schema Interfaces
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


use Ng\Registry\Interfaces\Schema\Field;

/**
 * Schema Interfaces
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
interface Schema
{
    /**
     * Add Field to the Schema
     *
     * @param Field $field
     *
     * @return Schema
     */
    public function addField(Field $field);

    /**
     * Check if the schema has field
     *
     * @return bool
     */
    public function hasField();

    /**
     * Get All Fields
     *
     * @return Field[]
     */
    public function getFields();

    /**
     * Get All Fields as an array
     *
     * @return array
     */
    public function toArray();
}
