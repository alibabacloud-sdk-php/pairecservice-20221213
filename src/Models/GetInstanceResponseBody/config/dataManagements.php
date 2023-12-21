<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetInstanceResponseBody\config;

use AlibabaCloud\Tea\Model;

class dataManagements extends Model
{
    /**
     * @example storage
     *
     * @var string
     */
    public $componentCode;

    /**
     * @var mixed[]
     */
    public $meta;

    /**
     * @example OSS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'componentCode' => 'ComponentCode',
        'meta'          => 'Meta',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentCode) {
            $res['ComponentCode'] = $this->componentCode;
        }
        if (null !== $this->meta) {
            $res['Meta'] = $this->meta;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataManagements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentCode'])) {
            $model->componentCode = $map['ComponentCode'];
        }
        if (isset($map['Meta'])) {
            $model->meta = $map['Meta'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
