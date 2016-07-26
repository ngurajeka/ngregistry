<?php
/**
 * Relation Interfaces
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
interface Relation
{
    const TYPE_BELONGSTO        = "belongsTo";
    const TYPE_HASMANY          = "hasMany";
    const TYPE_HASONE           = "hasOne";
    const TYPE_HASMANYTOMANY    = "hasManyToMany";

    /**
     * Add New Relation Detail
     *
     * @param Detail $detail
     *
     * @return Relation
     */
    public function addDetail(Detail $detail);

    /**
     * Check if it has Relations data
     *
     * @return bool
     */
    public function hasDetail();

    /**
     * Get Relation By Type
     *
     * @param string $type
     *
     * @return Detail[]|null
     */
    public function getByType($type);

    /**
     * Get All Available information about the Relation as an array
     *
     * @return array
     */
    public function toArray();
}
