<?php
/**
 * Container
 *
 * PHP Version 5.4.x
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
namespace Ng\Registry\Factory\Phalcon;


use Ng\Registry\Interfaces\Registry;

/**
 * Container
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
class Container implements \Ng\Registry\Interfaces\Container
{
    protected $list     = array();
    protected $listPath = array();

    public function __construct(array $listPath)
    {
        $this->listPath = $listPath;
    }

    /**
     * Get Registry
     *
     * @param string $key
     *
     * @return Registry
     */
    public function get($key)
    {
        if (!array_key_exists($key, $this->list)) {
            $registry = Builder::build($key, $this->listPath);
            if ($registry instanceOf Registry) {
                $this->set($key, $registry);
            }
        }

        if (!$this->list[$key] instanceOf Registry) {
            return null;
        }

        return $this->list[$key];
    }

    /**
     * Set Registry
     *
     * @param string   $key
     * @param Registry $value
     *
     * @return Container
     */
    public function set($key, Registry $value)
    {
        $this->list[$key] = $value;
        return $this;
    }
}
