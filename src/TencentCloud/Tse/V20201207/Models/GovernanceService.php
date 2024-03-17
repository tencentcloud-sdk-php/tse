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
 * 治理中心服务信息。
 *
 * @method string getName() 获取服务名称。
 * @method void setName(string $Name) 设置服务名称。
 * @method string getNamespace() 获取命名空间名称。
 * @method void setNamespace(string $Namespace) 设置命名空间名称。
 * @method array getMetadatas() 获取元数据信息数组。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetadatas(array $Metadatas) 设置元数据信息数组。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取描述信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置描述信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取修改时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置修改时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDepartment() 获取服务所属部门。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDepartment(string $Department) 设置服务所属部门。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusiness() 获取服务所属业务。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusiness(string $Business) 设置服务所属业务。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHealthyInstanceCount() 获取健康服务实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthyInstanceCount(integer $HealthyInstanceCount) 设置健康服务实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalInstanceCount() 获取服务实例总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalInstanceCount(integer $TotalInstanceCount) 设置服务实例总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEditable() 获取是否可以编辑
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEditable(boolean $Editable) 设置是否可以编辑
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserIds() 获取可以编辑该资源的用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserIds(array $UserIds) 设置可以编辑该资源的用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGroupIds() 获取可以编辑该资源的用户组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupIds(array $GroupIds) 设置可以编辑该资源的用户组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRemoveUserIds() 获取移除可以编辑该资源的用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoveUserIds(array $RemoveUserIds) 设置移除可以编辑该资源的用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRemoveGroupIds() 获取移除可以编辑该资源的用户组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoveGroupIds(array $RemoveGroupIds) 设置移除可以编辑该资源的用户组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExportTo() 获取该服务对哪些命名空间可见	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExportTo(array $ExportTo) 设置该服务对哪些命名空间可见	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRevision() 获取该服务信息摘要签名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRevision(string $Revision) 设置该服务信息摘要签名
注意：此字段可能返回 null，表示取不到有效值。
 */
class GovernanceService extends AbstractModel
{
    /**
     * @var string 服务名称。
     */
    public $Name;

    /**
     * @var string 命名空间名称。
     */
    public $Namespace;

    /**
     * @var array 元数据信息数组。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metadatas;

    /**
     * @var string 描述信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var string 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 修改时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string 服务所属部门。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Department;

    /**
     * @var string 服务所属业务。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Business;

    /**
     * @var integer 健康服务实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthyInstanceCount;

    /**
     * @var integer 服务实例总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalInstanceCount;

    /**
     * @var string 服务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var boolean 是否可以编辑
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Editable;

    /**
     * @var array 可以编辑该资源的用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserIds;

    /**
     * @var array 可以编辑该资源的用户组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupIds;

    /**
     * @var array 移除可以编辑该资源的用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoveUserIds;

    /**
     * @var array 移除可以编辑该资源的用户组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoveGroupIds;

    /**
     * @var array 该服务对哪些命名空间可见	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExportTo;

    /**
     * @var string 该服务信息摘要签名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Revision;

    /**
     * @param string $Name 服务名称。
     * @param string $Namespace 命名空间名称。
     * @param array $Metadatas 元数据信息数组。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment 描述信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 修改时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Department 服务所属部门。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Business 服务所属业务。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HealthyInstanceCount 健康服务实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalInstanceCount 服务实例总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id 服务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Editable 是否可以编辑
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserIds 可以编辑该资源的用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GroupIds 可以编辑该资源的用户组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RemoveUserIds 移除可以编辑该资源的用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RemoveGroupIds 移除可以编辑该资源的用户组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExportTo 该服务对哪些命名空间可见	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Revision 该服务信息摘要签名
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Metadatas",$param) and $param["Metadatas"] !== null) {
            $this->Metadatas = [];
            foreach ($param["Metadatas"] as $key => $value){
                $obj = new Metadata();
                $obj->deserialize($value);
                array_push($this->Metadatas, $obj);
            }
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Department",$param) and $param["Department"] !== null) {
            $this->Department = $param["Department"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("HealthyInstanceCount",$param) and $param["HealthyInstanceCount"] !== null) {
            $this->HealthyInstanceCount = $param["HealthyInstanceCount"];
        }

        if (array_key_exists("TotalInstanceCount",$param) and $param["TotalInstanceCount"] !== null) {
            $this->TotalInstanceCount = $param["TotalInstanceCount"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Editable",$param) and $param["Editable"] !== null) {
            $this->Editable = $param["Editable"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("RemoveUserIds",$param) and $param["RemoveUserIds"] !== null) {
            $this->RemoveUserIds = $param["RemoveUserIds"];
        }

        if (array_key_exists("RemoveGroupIds",$param) and $param["RemoveGroupIds"] !== null) {
            $this->RemoveGroupIds = $param["RemoveGroupIds"];
        }

        if (array_key_exists("ExportTo",$param) and $param["ExportTo"] !== null) {
            $this->ExportTo = $param["ExportTo"];
        }

        if (array_key_exists("Revision",$param) and $param["Revision"] !== null) {
            $this->Revision = $param["Revision"];
        }
    }
}
