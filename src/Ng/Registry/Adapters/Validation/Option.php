<?php
/**
 * Validation Detail Option
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


use Ng\Registry\Interfaces\Validation\Option as NgOption;

/**
 * Validation Detail Option
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
class Option implements NgOption
{
    protected $options = array();

    /**
     * Get Message of the Validation Detail Option
     *
     * @param string $key
     *
     * @return mixed|null
     */
    public function get($key)
    {
        if (!$this->has($key)) {
            return null;
        }

        return $this->options[$key];
    }

    /**
     * Set Message of the Validation Detail Option
     *
     * @param string $key
     * @param mixed  $value
     *
     * @return Option
     */
    public function set($key, $value)
    {
        $this->options[$key] = $value;
        return $this;
    }

    /**
     * Check if options key is exist
     *
     * @param string $key
     *
     * @return bool
     */
    public function has($key)
    {
        return isset($this->options[$key]);
    }

    /**
     * Get All Available information about the Validation Detail Option as an array
     *
     * @return array
     */
    public function toArray()
    {
        if (!is_array($this->options)) {
            return array();
        }

        return $this->options;
    }
}
