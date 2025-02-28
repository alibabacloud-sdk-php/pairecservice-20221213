<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTableMetaResponseBody;

use AlibabaCloud\Dara\Model;

class fields extends Model
{
    /**
     * @var bool
     */
    public $isDimensionField;
    /**
     * @var string
     */
    public $meaning;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'isDimensionField' => 'IsDimensionField',
        'meaning'          => 'Meaning',
        'name'             => 'Name',
        'type'             => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isDimensionField) {
            $res['IsDimensionField'] = $this->isDimensionField;
        }

        if (null !== $this->meaning) {
            $res['Meaning'] = $this->meaning;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsDimensionField'])) {
            $model->isDimensionField = $map['IsDimensionField'];
        }

        if (isset($map['Meaning'])) {
            $model->meaning = $map['Meaning'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
