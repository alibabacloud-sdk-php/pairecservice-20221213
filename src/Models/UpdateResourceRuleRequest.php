<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class UpdateResourceRuleRequest extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $metricOperationType;
    /**
     * @var string
     */
    public $metricPullInfo;
    /**
     * @var string
     */
    public $metricPullPeriod;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $ruleComputingDefinition;
    protected $_name = [
        'description'             => 'Description',
        'instanceId'              => 'InstanceId',
        'metricOperationType'     => 'MetricOperationType',
        'metricPullInfo'          => 'MetricPullInfo',
        'metricPullPeriod'        => 'MetricPullPeriod',
        'name'                    => 'Name',
        'ruleComputingDefinition' => 'RuleComputingDefinition',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->metricOperationType) {
            $res['MetricOperationType'] = $this->metricOperationType;
        }

        if (null !== $this->metricPullInfo) {
            $res['MetricPullInfo'] = $this->metricPullInfo;
        }

        if (null !== $this->metricPullPeriod) {
            $res['MetricPullPeriod'] = $this->metricPullPeriod;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ruleComputingDefinition) {
            $res['RuleComputingDefinition'] = $this->ruleComputingDefinition;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MetricOperationType'])) {
            $model->metricOperationType = $map['MetricOperationType'];
        }

        if (isset($map['MetricPullInfo'])) {
            $model->metricPullInfo = $map['MetricPullInfo'];
        }

        if (isset($map['MetricPullPeriod'])) {
            $model->metricPullPeriod = $map['MetricPullPeriod'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RuleComputingDefinition'])) {
            $model->ruleComputingDefinition = $map['RuleComputingDefinition'];
        }

        return $model;
    }
}
