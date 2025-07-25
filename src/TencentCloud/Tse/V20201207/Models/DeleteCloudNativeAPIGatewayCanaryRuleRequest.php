<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * DeleteCloudNativeAPIGatewayCanaryRule请求参数结构体
 *
 * @method string getGatewayId() 获取网关 ID
 * @method void setGatewayId(string $GatewayId) 设置网关 ID
 * @method string getServiceId() 获取服务 ID
 * @method void setServiceId(string $ServiceId) 设置服务 ID
 * @method integer getPriority() 获取优先级
 * @method void setPriority(integer $Priority) 设置优先级
 * @method array getPriorityList() 获取优先级列表，如果配置了此参数，将以此参数为准，忽略Priority参数
 * @method void setPriorityList(array $PriorityList) 设置优先级列表，如果配置了此参数，将以此参数为准，忽略Priority参数
 */
class DeleteCloudNativeAPIGatewayCanaryRuleRequest extends AbstractModel
{
    /**
     * @var string 网关 ID
     */
    public $GatewayId;

    /**
     * @var string 服务 ID
     */
    public $ServiceId;

    /**
     * @var integer 优先级
     */
    public $Priority;

    /**
     * @var array 优先级列表，如果配置了此参数，将以此参数为准，忽略Priority参数
     */
    public $PriorityList;

    /**
     * @param string $GatewayId 网关 ID
     * @param string $ServiceId 服务 ID
     * @param integer $Priority 优先级
     * @param array $PriorityList 优先级列表，如果配置了此参数，将以此参数为准，忽略Priority参数
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("PriorityList",$param) and $param["PriorityList"] !== null) {
            $this->PriorityList = $param["PriorityList"];
        }
    }
}
