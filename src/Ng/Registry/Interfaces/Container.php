<?php
/**
 * Container Interfaces
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
 * Container Interfaces
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
interface Container
{
    /**
     * Get Registry
     *
     * @param string $key
     *
     * @return Registry|null
     */
    public function get($key);

    /**
     * Set Registry
     *
     * @param string   $key
     * @param Registry $value
     *
     * @return Container
     */
    public function set($key, Registry $value);
}
