<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateLayerResponseBody extends Model
{
    /**
     * @example 3
     *
     * @var string
     */
    public $layerId;

    /**
     * @description Id of the request
     *
     * @example 59CE7EC6-F268-5D71-9215-32922CC50D72
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'layerId'   => 'LayerId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->layerId) {
            $res['LayerId'] = $this->layerId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLayerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LayerId'])) {
            $model->layerId = $map['LayerId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
