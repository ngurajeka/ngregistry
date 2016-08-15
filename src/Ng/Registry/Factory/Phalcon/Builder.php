<?php
/**
 * Builder
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


use Ng\Phalcon\Models\Abstracts\NgModel;
use Ng\Registry\Adapters\Registry;
use Ng\Registry\Adapters\Relation;
use Ng\Registry\Adapters\Schema;
use Ng\Registry\Adapters\Schema\Field;
use Ng\Registry\Adapters\Validation;
use Ng\Registry\Adapters\Validation\Detail;

use Phalcon\Db\Column;
use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\MetaDataInterface as MetaData;

/**
 * Builder
 *
 * @category Library
 * @package  Library
 * @author   Ady Rahmat MA <adyrahmatma@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/ngurajeka/php-registry
 */
class Builder implements \Ng\Registry\Interfaces\Builder
{
    const VAL_TYPE_BETWEEN  = "between";
    const VAL_TYPE_BIGGER   = "bigger";
    const VAL_TYPE_EMAIL    = "email";
    const VAL_TYPE_DATE     = "date";
    const VAL_TYPE_DATETIME = "dateTime";
    const VAL_TYPE_DIGIT    = "digit";
    const VAL_TYPE_NUMERIC  = "numeric";
    const VAL_TYPE_PRESENCE = "presenceOf";
    const VAL_TYPE_REGEX    = "regex";
    const VAL_TYPE_URL      = "url";

    const VAL_TYPE_CONFIRMATION = "confirmation";
    const VAL_TYPE_EXCLUSIONIN  = "exclusionIn";
    const VAL_TYPE_IDENTICAL    = "identical";
    const VAL_TYPE_INCLUSIONIN  = "inclusionIn";
    const VAL_TYPE_STRINGLENGTH = "stringLength";

    const OPT_ACCEPTED  = "accepted";
    const OPT_DOMAIN    = "domain";
    const OPT_FORMAT    = "format";
    const OPT_MAX       = "max";
    const OPT_MAXIMUM   = "maximum";
    const OPT_MESSAGE   = "message";
    const OPT_MIN       = "min";
    const OPT_MINIMUM   = "minimum";
    const OPT_PATTERN   = "pattern";
    const OPT_WITH      = "with";

    const OPT_MESSAGEMAXIMUM = "messageMaximum";
    const OPT_MESSAGEMINIMUM = "messageMinimum";

    /**
     * Build new Registry.
     *
     * @param string $key
     * @param array  $listPath
     *
     * @return Registry
     */
    public static function build($key, array $listPath)
    {
        if (!self::checkModel($key, $listPath)) {
            return null;
        }

        /** @type Model $model */
        $model      = new $listPath[$key];
        /** @type MetaData $metaData */
        $metaData   = $model->getModelsMetaData();
        /** @type Model\Manager $manager */
        $manager    = $model->getModelsManager();

        $attributes = $metaData->getDataTypes($model);
        $notNull    = $metaData->getNotNullAttributes($model);
        $except     = array();

        if ($model instanceof NgModel) {
            $except[] = $model::getPrimaryKey();
            $except[] = $model::getCreatedByField();
            $except[] = $model::getCreatedTimeField();
            $except[] = $model::getUpdatedTimeField();
            $except[] = $model::getDeletedField();
            $except[] = $model::getDeletedTimeField();
        }

        $schema     = self::buildSchema($attributes);
        $validation = self::buildValidation($attributes, $notNull, $except);
        $relation   = self::buildRelation($manager, $model);

        return new Registry($listPath[$key], $schema, $validation, $relation);
    }

    protected static function checkModel($key, array $listPath)
    {
        if (!array_key_exists($key, $listPath)) {
            return false;
        }

        $path = $listPath[$key];

        if (!class_exists($path)) {
            return false;
        }

        return true;
    }

    protected static function buildSchema(array $attributes)
    {
        $schema = new Schema();

        foreach ($attributes as $field => $type) {

            $name   = $field;
            $label  = ucfirst($field);
            $size   = 0;

            switch ($type) {
            case Column::TYPE_INTEGER:
                $type = Field::TYPE_INTEGER;
                break;
            case Column::TYPE_DATE:
                $type = Field::TYPE_DATE;
                break;
            case Column::TYPE_VARCHAR:
                $type = Field::TYPE_VARCHAR;
                break;
            case Column::TYPE_DECIMAL:
                $type = Field::TYPE_DECIMAL;
                break;
            case Column::TYPE_DATETIME:
                $type = Field::TYPE_DATETIME;
                break;
            case Column::TYPE_CHAR:
                $type = Field::TYPE_CHAR;
                break;
            case Column::TYPE_TEXT:
                $type = Field::TYPE_TEXT;
                break;
            case Column::TYPE_FLOAT:
                $type = Field::TYPE_FLOAT;
                break;
            case Column::TYPE_BOOLEAN:
                $type = Field::TYPE_BOOLEAN;
                break;
            case Column::TYPE_DOUBLE:
                $type = Field::TYPE_DOUBLE;
                break;
            case Column::TYPE_TINYBLOB:
                $type = Field::TYPE_TINYBLOB;
                break;
            case Column::TYPE_BLOB:
                $type = Field::TYPE_BLOB;
                break;
            case Column::TYPE_MEDIUMBLOB:
                $type = Field::TYPE_MEDIUMBLOB;
                break;
            case Column::TYPE_LONGBLOB:
                $type = Field::TYPE_LONGBLOB;
                break;
            case Column::TYPE_BIGINTEGER:
                $type = Field::TYPE_BIGINTEGER;
                break;
            case Column::TYPE_JSON:
                $type = Field::TYPE_JSON;
                break;
            case Column::TYPE_JSONB:
                $type = Field::TYPE_JSONB;
                break;
            case Column::TYPE_TIMESTAMP:
                $type = Field::TYPE_TIMESTAMP;
                break;
            default:
                $type = "";
                break;
            }

            $schema->addField(new Field($name, $label, $size, $type));
        }

        return $schema;
    }

    protected static function buildValidation(
        array $attributes, array $notNull, array $except
    ) {
        $validation = new Validation();

        foreach ($attributes as $field => $type) {
            if (in_array($field, $except)) {
                continue;
            }

            if (in_array($field, $notNull)) {
                $option = new Validation\Option();
                $option->set(self::OPT_MESSAGE, "Field is Required");
                $v  = new Detail($field, self::VAL_TYPE_PRESENCE, $option);
                $validation->addValidation($v);
                unset($option);
            }

            if ($type == Column::TYPE_DATE) {
                $option = new Validation\Option();
                $option->set(self::OPT_MESSAGE, "Field Should Be Date Format");
                $v  = new Detail($field, self::VAL_TYPE_DATE, $option);
                $validation->addValidation($v);
                unset($option);
            }

            if ($type == Column::TYPE_DATETIME) {
                $option = new Validation\Option();
                $option->set(self::OPT_MESSAGE, "Field Should Be Date Time Format");
                $v  = new Detail($field, self::VAL_TYPE_DATETIME, $option);
                $validation->addValidation($v);
                unset($option);
            }
        }

        return $validation;
    }

    protected static function buildRelation(Model\Manager $manager, Model $model)
    {
        $relation   = new Relation();

        foreach ($manager->getRelations(get_class($model)) as $_relation) {

            /** @type Model\Relation $_relation */
            $field  = $_relation->getFields();
            $ref    = $_relation->getReferencedFields();
            $model  = $_relation->getReferencedModel();
            $option = $_relation->getOptions();
            $type   = "";
            switch ($_relation->getType()) {
                case Model\Relation::BELONGS_TO:
                    $type = Relation::TYPE_BELONGSTO;
                    break;
                case Model\Relation::HAS_ONE:
                    $type = Relation::TYPE_HASONE;
                    break;
                case Model\Relation::HAS_MANY:
                    $type = Relation::TYPE_HASMANY;
                    break;
            }

            $opt    = new Relation\Option();
            if (isset($option["alias"])) {
                $opt->setAlias($option["alias"]);
            }

            $relation->addDetail(
                new Relation\Detail($field, $type, $model, $ref, $opt)
            );
        }

        return $relation;
    }
}
