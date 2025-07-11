<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class SplitTrafficControlTargetRequest extends Model
{
    /**
     * @var string
     */
    public $environment;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int[]
     */
    public $setPoints;

    /**
     * @var int[]
     */
    public $setValues;

    /**
     * @var int[]
     */
    public $timePoints;
    protected $_name = [
        'environment' => 'Environment',
        'instanceId' => 'InstanceId',
        'setPoints' => 'SetPoints',
        'setValues' => 'SetValues',
        'timePoints' => 'TimePoints',
    ];

    public function validate()
    {
        if (\is_array($this->setPoints)) {
            Model::validateArray($this->setPoints);
        }
        if (\is_array($this->setValues)) {
            Model::validateArray($this->setValues);
        }
        if (\is_array($this->timePoints)) {
            Model::validateArray($this->timePoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->setPoints) {
            if (\is_array($this->setPoints)) {
                $res['SetPoints'] = [];
                $n1 = 0;
                foreach ($this->setPoints as $item1) {
                    $res['SetPoints'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->setValues) {
            if (\is_array($this->setValues)) {
                $res['SetValues'] = [];
                $n1 = 0;
                foreach ($this->setValues as $item1) {
                    $res['SetValues'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timePoints) {
            if (\is_array($this->timePoints)) {
                $res['TimePoints'] = [];
                $n1 = 0;
                foreach ($this->timePoints as $item1) {
                    $res['TimePoints'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['SetPoints'])) {
            if (!empty($map['SetPoints'])) {
                $model->setPoints = [];
                $n1 = 0;
                foreach ($map['SetPoints'] as $item1) {
                    $model->setPoints[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SetValues'])) {
            if (!empty($map['SetValues'])) {
                $model->setValues = [];
                $n1 = 0;
                foreach ($map['SetValues'] as $item1) {
                    $model->setValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TimePoints'])) {
            if (!empty($map['TimePoints'])) {
                $model->timePoints = [];
                $n1 = 0;
                foreach ($map['TimePoints'] as $item1) {
                    $model->timePoints[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
