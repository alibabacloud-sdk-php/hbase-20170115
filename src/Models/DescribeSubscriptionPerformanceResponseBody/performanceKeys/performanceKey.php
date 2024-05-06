<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\DescribeSubscriptionPerformanceResponseBody\performanceKeys;

use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeSubscriptionPerformanceResponseBody\performanceKeys\performanceKey\performanceValues;
use AlibabaCloud\Tea\Model;

class performanceKey extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var performanceValues
     */
    public $performanceValues;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $valueFormat;
    protected $_name = [
        'key'               => 'Key',
        'performanceValues' => 'PerformanceValues',
        'unit'              => 'Unit',
        'valueFormat'       => 'ValueFormat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->performanceValues) {
            $res['PerformanceValues'] = null !== $this->performanceValues ? $this->performanceValues->toMap() : null;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->valueFormat) {
            $res['ValueFormat'] = $this->valueFormat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performanceKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['PerformanceValues'])) {
            $model->performanceValues = performanceValues::fromMap($map['PerformanceValues']);
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['ValueFormat'])) {
            $model->valueFormat = $map['ValueFormat'];
        }

        return $model;
    }
}
