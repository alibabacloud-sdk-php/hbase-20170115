<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\DescribeSubscriptionPerformanceResponseBody\performanceKeys\performanceKey;

use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeSubscriptionPerformanceResponseBody\performanceKeys\performanceKey\performanceValues\performanceValue;
use AlibabaCloud\Tea\Model;

class performanceValues extends Model
{
    /**
     * @var performanceValue[]
     */
    public $performanceValue;
    protected $_name = [
        'performanceValue' => 'PerformanceValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->performanceValue) {
            $res['PerformanceValue'] = [];
            if (null !== $this->performanceValue && \is_array($this->performanceValue)) {
                $n = 0;
                foreach ($this->performanceValue as $item) {
                    $res['PerformanceValue'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performanceValues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PerformanceValue'])) {
            if (!empty($map['PerformanceValue'])) {
                $model->performanceValue = [];
                $n                       = 0;
                foreach ($map['PerformanceValue'] as $item) {
                    $model->performanceValue[$n++] = null !== $item ? performanceValue::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
