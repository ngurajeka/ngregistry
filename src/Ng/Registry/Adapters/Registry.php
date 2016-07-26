<?php
/**
 * Registry
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


/**
 * Registry
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
class Registry implements \Ng\Registry\Interfaces\Registry
{
    /** @type Schema $schema */
    protected $schema;
    /** @type Validation $validation */
    protected $validation;
    /** @type Relation $relation */
    protected $relation;

    public function __construct(
        Schema $schema, Validation $validation, Relation $relation
    ) {
        $this->setSchema($schema);
        $this->setValidation($validation);
        $this->setRelation($relation);
    }

    /**
     * Get Schema
     *
     * @return Schema
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * Set Schema
     *
     * @param Schema $schema
     *
     * @return Registry
     */
    public function setSchema(Schema $schema)
    {
        $this->schema       = $schema;
        return $this;
    }

    /**
     * Get Validation
     *
     * @return Validation
     */
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * Set Validation
     *
     * @param Validation $validation
     *
     * @return Registry
     */
    public function setValidation(Validation $validation)
    {
        $this->validation   = $validation;
        return $this;
    }

    /**
     * Get Relation
     *
     * @return Relation
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * Set Relation
     *
     * @param Relation $relation
     *
     * @return Registry
     */
    public function setRelation(Relation $relation)
    {
        $this->relation     = $relation;
        return $this;
    }
}
