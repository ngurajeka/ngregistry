<?php
/**
 * Relation Option
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


/**
 * Relation Option
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
class Option implements \Ng\Registry\Interfaces\Relation\Option
{
    protected $alias;

    /**
     * Get Alias of the Relation Option
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set Alias of the Relation Option
     *
     * @param string $alias
     *
     * @return Option
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * Get All Available information about the Relation Option as an array
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            "alias" => $this->getAlias(),
        );
    }
}
