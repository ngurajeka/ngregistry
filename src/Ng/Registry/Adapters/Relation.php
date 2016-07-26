<?php
/**
 * Relation Adapters
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


use Ng\Registry\Interfaces\Relation\Detail;

/**
 * Relation Interfaces
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
class Relation implements \Ng\Registry\Interfaces\Relation
{
    /** @type Detail[] $relations */
    protected $relations = array();

    /**
     * Add New Relation Detail
     *
     * @param Detail $detail
     *
     * @return Relation
     */
    public function addDetail(Detail $detail)
    {
        $this->relations[] = $detail;
        return $this;
    }

    /**
     * Check if it has Relations data
     *
     * @return bool
     */
    public function hasDetail()
    {
        return !empty($this->relations);
    }

    /**
     * Get Relation By Type
     *
     * @param string $type
     *
     * @return Detail[]|null
     */
    public function getByType($type)
    {
        $details = array();

        foreach ($this->relations as $detail) {
            /** @type Detail $detail */
            if ($detail->getType() == $type) {
                $details[] = $detail;
                continue;
            }
        }

        if (empty($details)) {
            return null;
        }

        return $details;
    }

    /**
     * Get All Available information about the Relation as an array
     *
     * @return array
     */
    public function toArray()
    {
        $details = array();
        foreach ($this->relations as $detail) {
            /** @type Detail $detail */
            $details[] = $detail->toArray();
        }

        return $details;
    }
}
