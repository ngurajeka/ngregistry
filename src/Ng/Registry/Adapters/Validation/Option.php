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


/**
 * Validation Detail Option
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
class Option implements \Ng\Registry\Interfaces\Validation\Option
{
    protected $message;

    /**
     * Get Message of the Validation Detail Option
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set Message of the Validation Detail Option
     *
     * @param string $message
     *
     * @return Option
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Get All Available information about the Validation Detail Option as an array
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            "message" => $this->getMessage(),
        );
    }
}