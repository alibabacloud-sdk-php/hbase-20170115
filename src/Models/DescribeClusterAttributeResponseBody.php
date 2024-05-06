<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models;

use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterAttributeResponseBody\connectionInfo;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterAttributeResponseBody\netInfo;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterAttributeResponseBody\nodeList;
use AlibabaCloud\Tea\Model;

class DescribeClusterAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $coldStorageStatus;

    /**
     * @var connectionInfo
     */
    public $connectionInfo;

    /**
     * @var int
     */
    public $coreDiskQuantity;

    /**
     * @var string
     */
    public $coreDiskSize;

    /**
     * @var string
     */
    public $coreDiskType;

    /**
     * @var int
     */
    public $coreInstanceQuantity;

    /**
     * @var string
     */
    public $coreInstanceType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $haType;

    /**
     * @var string
     */
    public $hasUser;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $mainVersion;

    /**
     * @var int
     */
    public $masterDiskSize;

    /**
     * @var string
     */
    public $masterDiskType;

    /**
     * @var string
     */
    public $masterInstanceType;

    /**
     * @var string
     */
    public $minorVersion;

    /**
     * @var netInfo
     */
    public $netInfo;

    /**
     * @var nodeList
     */
    public $nodeList;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateStatus;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenew'            => 'AutoRenew',
        'clusterId'            => 'ClusterId',
        'clusterName'          => 'ClusterName',
        'clusterType'          => 'ClusterType',
        'coldStorageStatus'    => 'ColdStorageStatus',
        'connectionInfo'       => 'ConnectionInfo',
        'coreDiskQuantity'     => 'CoreDiskQuantity',
        'coreDiskSize'         => 'CoreDiskSize',
        'coreDiskType'         => 'CoreDiskType',
        'coreInstanceQuantity' => 'CoreInstanceQuantity',
        'coreInstanceType'     => 'CoreInstanceType',
        'createTime'           => 'CreateTime',
        'expireTime'           => 'ExpireTime',
        'haType'               => 'HaType',
        'hasUser'              => 'HasUser',
        'lockMode'             => 'LockMode',
        'mainVersion'          => 'MainVersion',
        'masterDiskSize'       => 'MasterDiskSize',
        'masterDiskType'       => 'MasterDiskType',
        'masterInstanceType'   => 'MasterInstanceType',
        'minorVersion'         => 'MinorVersion',
        'netInfo'              => 'NetInfo',
        'nodeList'             => 'NodeList',
        'payType'              => 'PayType',
        'regionId'             => 'RegionId',
        'requestId'            => 'RequestId',
        'status'               => 'Status',
        'updateStatus'         => 'UpdateStatus',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->coldStorageStatus) {
            $res['ColdStorageStatus'] = $this->coldStorageStatus;
        }
        if (null !== $this->connectionInfo) {
            $res['ConnectionInfo'] = null !== $this->connectionInfo ? $this->connectionInfo->toMap() : null;
        }
        if (null !== $this->coreDiskQuantity) {
            $res['CoreDiskQuantity'] = $this->coreDiskQuantity;
        }
        if (null !== $this->coreDiskSize) {
            $res['CoreDiskSize'] = $this->coreDiskSize;
        }
        if (null !== $this->coreDiskType) {
            $res['CoreDiskType'] = $this->coreDiskType;
        }
        if (null !== $this->coreInstanceQuantity) {
            $res['CoreInstanceQuantity'] = $this->coreInstanceQuantity;
        }
        if (null !== $this->coreInstanceType) {
            $res['CoreInstanceType'] = $this->coreInstanceType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->haType) {
            $res['HaType'] = $this->haType;
        }
        if (null !== $this->hasUser) {
            $res['HasUser'] = $this->hasUser;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->mainVersion) {
            $res['MainVersion'] = $this->mainVersion;
        }
        if (null !== $this->masterDiskSize) {
            $res['MasterDiskSize'] = $this->masterDiskSize;
        }
        if (null !== $this->masterDiskType) {
            $res['MasterDiskType'] = $this->masterDiskType;
        }
        if (null !== $this->masterInstanceType) {
            $res['MasterInstanceType'] = $this->masterInstanceType;
        }
        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }
        if (null !== $this->netInfo) {
            $res['NetInfo'] = null !== $this->netInfo ? $this->netInfo->toMap() : null;
        }
        if (null !== $this->nodeList) {
            $res['NodeList'] = null !== $this->nodeList ? $this->nodeList->toMap() : null;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateStatus) {
            $res['UpdateStatus'] = $this->updateStatus;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ColdStorageStatus'])) {
            $model->coldStorageStatus = $map['ColdStorageStatus'];
        }
        if (isset($map['ConnectionInfo'])) {
            $model->connectionInfo = connectionInfo::fromMap($map['ConnectionInfo']);
        }
        if (isset($map['CoreDiskQuantity'])) {
            $model->coreDiskQuantity = $map['CoreDiskQuantity'];
        }
        if (isset($map['CoreDiskSize'])) {
            $model->coreDiskSize = $map['CoreDiskSize'];
        }
        if (isset($map['CoreDiskType'])) {
            $model->coreDiskType = $map['CoreDiskType'];
        }
        if (isset($map['CoreInstanceQuantity'])) {
            $model->coreInstanceQuantity = $map['CoreInstanceQuantity'];
        }
        if (isset($map['CoreInstanceType'])) {
            $model->coreInstanceType = $map['CoreInstanceType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['HaType'])) {
            $model->haType = $map['HaType'];
        }
        if (isset($map['HasUser'])) {
            $model->hasUser = $map['HasUser'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['MainVersion'])) {
            $model->mainVersion = $map['MainVersion'];
        }
        if (isset($map['MasterDiskSize'])) {
            $model->masterDiskSize = $map['MasterDiskSize'];
        }
        if (isset($map['MasterDiskType'])) {
            $model->masterDiskType = $map['MasterDiskType'];
        }
        if (isset($map['MasterInstanceType'])) {
            $model->masterInstanceType = $map['MasterInstanceType'];
        }
        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }
        if (isset($map['NetInfo'])) {
            $model->netInfo = netInfo::fromMap($map['NetInfo']);
        }
        if (isset($map['NodeList'])) {
            $model->nodeList = nodeList::fromMap($map['NodeList']);
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateStatus'])) {
            $model->updateStatus = $map['UpdateStatus'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
