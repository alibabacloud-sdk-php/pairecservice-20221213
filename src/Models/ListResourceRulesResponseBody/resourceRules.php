<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListResourceRulesResponseBody;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListResourceRulesResponseBody\resourceRules\ruleItems;
use AlibabaCloud\Tea\Model;

class resourceRules extends Model
{
    /**
     * @var string
     */
    public $description;

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
    public $resourceRuleId;

    /**
     * @var string
     */
    public $ruleComputingDefinition;

    /**
     * @var ruleItems[]
     */
    public $ruleItems;
    protected $_name = [
        'description'             => 'Description',
        'metricOperationType'     => 'MetricOperationType',
        'metricPullInfo'          => 'MetricPullInfo',
        'metricPullPeriod'        => 'MetricPullPeriod',
        'name'                    => 'Name',
        'resourceRuleId'          => 'ResourceRuleId',
        'ruleComputingDefinition' => 'RuleComputingDefinition',
        'ruleItems'               => 'RuleItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->resourceRuleId) {
            $res['ResourceRuleId'] = $this->resourceRuleId;
        }
        if (null !== $this->ruleComputingDefinition) {
            $res['RuleComputingDefinition'] = $this->ruleComputingDefinition;
        }
        if (null !== $this->ruleItems) {
            $res['RuleItems'] = [];
            if (null !== $this->ruleItems && \is_array($this->ruleItems)) {
                $n = 0;
                foreach ($this->ruleItems as $item) {
                    $res['RuleItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['ResourceRuleId'])) {
            $model->resourceRuleId = $map['ResourceRuleId'];
        }
        if (isset($map['RuleComputingDefinition'])) {
            $model->ruleComputingDefinition = $map['RuleComputingDefinition'];
        }
        if (isset($map['RuleItems'])) {
            if (!empty($map['RuleItems'])) {
                $model->ruleItems = [];
                $n                = 0;
                foreach ($map['RuleItems'] as $item) {
                    $model->ruleItems[$n++] = null !== $item ? ruleItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
