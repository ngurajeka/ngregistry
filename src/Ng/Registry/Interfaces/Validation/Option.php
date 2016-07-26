<?php
/**
 * Validation Detail Option Interfaces
 *
 * PHP Version 5.4.x
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
namespace Ng\Registry\Interfaces\Validation;


/**
 * Validation Detail Option Interfaces
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
     * Get Message of the Validation Detail Option
     *
     * @return string
     */
    public function getMessage();

    /**
     * Set Message of the Validation Detail Option
     *
     * @param string $message
     *
     * @return Option
     */
    public function setMessage($message);

    /**
     * Get All Available information about the Validation Detail Option as an array
     *
     * @return array
     */
    public function toArray();
}
