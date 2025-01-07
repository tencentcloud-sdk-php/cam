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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserSAMLConfig返回参数结构体
 *
 * @method string getSAMLMetadata() 获取SAML元数据文档
 * @method void setSAMLMetadata(string $SAMLMetadata) 设置SAML元数据文档
 * @method integer getStatus() 获取状态：0:未设置，11:已开启，2:已禁用
 * @method void setStatus(integer $Status) 设置状态：0:未设置，11:已开启，2:已禁用
 * @method string getAuxiliaryDomain() 获取辅助域名
 * @method void setAuxiliaryDomain(string $AuxiliaryDomain) 设置辅助域名
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUserSAMLConfigResponse extends AbstractModel
{
    /**
     * @var string SAML元数据文档
     */
    public $SAMLMetadata;

    /**
     * @var integer 状态：0:未设置，11:已开启，2:已禁用
     */
    public $Status;

    /**
     * @var string 辅助域名
     */
    public $AuxiliaryDomain;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SAMLMetadata SAML元数据文档
     * @param integer $Status 状态：0:未设置，11:已开启，2:已禁用
     * @param string $AuxiliaryDomain 辅助域名
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SAMLMetadata",$param) and $param["SAMLMetadata"] !== null) {
            $this->SAMLMetadata = $param["SAMLMetadata"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AuxiliaryDomain",$param) and $param["AuxiliaryDomain"] !== null) {
            $this->AuxiliaryDomain = $param["AuxiliaryDomain"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
