<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateNativeGatewayServiceSource请求参数结构体
 *
 * @method string getGatewayID() 获取网关实例ID
 * @method void setGatewayID(string $GatewayID) 设置网关实例ID
 * @method string getSourceType() 获取服务来源类型，参考值：
- TSE-Nacos 
- TSE-Consul 
- TSE-PolarisMesh
- Customer-Nacos
- Customer-Consul
- Customer-PolarisMesh
- TSF
- TKE
- EKS
- PrivateDNS
- Customer-DNS
 * @method void setSourceType(string $SourceType) 设置服务来源类型，参考值：
- TSE-Nacos 
- TSE-Consul 
- TSE-PolarisMesh
- Customer-Nacos
- Customer-Consul
- Customer-PolarisMesh
- TSF
- TKE
- EKS
- PrivateDNS
- Customer-DNS
 * @method string getSourceID() 获取服务来源实例ID，当SourceType的值不为PrivateDNS或Customer-DNS时，必填
 * @method void setSourceID(string $SourceID) 设置服务来源实例ID，当SourceType的值不为PrivateDNS或Customer-DNS时，必填
 * @method string getSourceName() 获取服务来源实例名称，当SourceType的值不为PrivateDNS时，必填
 * @method void setSourceName(string $SourceName) 设置服务来源实例名称，当SourceType的值不为PrivateDNS时，必填
 * @method SourceInfo getSourceInfo() 获取服务来源实例额外信息
 * @method void setSourceInfo(SourceInfo $SourceInfo) 设置服务来源实例额外信息
 */
class CreateNativeGatewayServiceSourceRequest extends AbstractModel
{
    /**
     * @var string 网关实例ID
     */
    public $GatewayID;

    /**
     * @var string 服务来源类型，参考值：
- TSE-Nacos 
- TSE-Consul 
- TSE-PolarisMesh
- Customer-Nacos
- Customer-Consul
- Customer-PolarisMesh
- TSF
- TKE
- EKS
- PrivateDNS
- Customer-DNS
     */
    public $SourceType;

    /**
     * @var string 服务来源实例ID，当SourceType的值不为PrivateDNS或Customer-DNS时，必填
     */
    public $SourceID;

    /**
     * @var string 服务来源实例名称，当SourceType的值不为PrivateDNS时，必填
     */
    public $SourceName;

    /**
     * @var SourceInfo 服务来源实例额外信息
     */
    public $SourceInfo;

    /**
     * @param string $GatewayID 网关实例ID
     * @param string $SourceType 服务来源类型，参考值：
- TSE-Nacos 
- TSE-Consul 
- TSE-PolarisMesh
- Customer-Nacos
- Customer-Consul
- Customer-PolarisMesh
- TSF
- TKE
- EKS
- PrivateDNS
- Customer-DNS
     * @param string $SourceID 服务来源实例ID，当SourceType的值不为PrivateDNS或Customer-DNS时，必填
     * @param string $SourceName 服务来源实例名称，当SourceType的值不为PrivateDNS时，必填
     * @param SourceInfo $SourceInfo 服务来源实例额外信息
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("GatewayID",$param) and $param["GatewayID"] !== null) {
            $this->GatewayID = $param["GatewayID"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceID",$param) and $param["SourceID"] !== null) {
            $this->SourceID = $param["SourceID"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("SourceInfo",$param) and $param["SourceInfo"] !== null) {
            $this->SourceInfo = new SourceInfo();
            $this->SourceInfo->deserialize($param["SourceInfo"]);
        }
    }
}
