<?php
/**
 * Registry Interfaces
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


/**
 * Registry Interfaces
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
interface Registry
{
    /**
     * Get Model Path
     *
     * @return string
     */
    public function getPath();
    /**
     * Get Schema
     *
     * @return Schema
     */
    public function getSchema();

    /**
     * Get Validation
     *
     * @return Validation
     */
    public function getValidation();

    /**
     * Get Relation
     *
     * @return Relation
     */
    public function getRelation();
}
