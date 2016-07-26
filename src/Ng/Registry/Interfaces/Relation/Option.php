<?php
/**
 * Relation Option Interfaces
 *
 * PHP Version 5.4.x
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
namespace Ng\Registry\Interfaces\Relation;


/**
 * Relation Option Interfaces
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
interface Option
{
    /**
     * Get Alias of the Relation Option
     *
     * @return string
     */
    public function getAlias();

    /**
     * Set Alias of the Relation Option
     *
     * @param string $alias
     *
     * @return Option
     */
    public function setAlias($alias);

    /**
     * Get All Available information about the Relations Option as an array
     *
     * @return array
     */
    public function toArray();
}
