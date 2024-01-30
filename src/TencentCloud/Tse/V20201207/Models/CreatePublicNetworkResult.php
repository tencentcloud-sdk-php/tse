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
 * 创建kong客户端公网结果
 *
 * @method string getGatewayId() 获取网关实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayId(string $GatewayId) 设置网关实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupId() 获取分组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置分组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNetworkId() 获取客户端公网网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkId(string $NetworkId) 设置客户端公网网络ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class CreatePublicNetworkResult extends AbstractModel
{
    /**
     * @var string 网关实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayId;

    /**
     * @var string 分组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 客户端公网网络ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkId;

    /**
     * @param string $GatewayId 网关实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupId 分组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NetworkId 客户端公网网络ID
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("NetworkId",$param) and $param["NetworkId"] !== null) {
            $this->NetworkId = $param["NetworkId"];
        }
    }
}
