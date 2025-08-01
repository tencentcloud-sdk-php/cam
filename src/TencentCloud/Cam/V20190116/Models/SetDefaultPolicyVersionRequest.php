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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetDefaultPolicyVersion请求参数结构体
 *
 * @method integer getPolicyId() 获取策略ID
 * @method void setPolicyId(integer $PolicyId) 设置策略ID
 * @method integer getVersionId() 获取策略版本号，可由ListPolicyVersions获取
 * @method void setVersionId(integer $VersionId) 设置策略版本号，可由ListPolicyVersions获取
 */
class SetDefaultPolicyVersionRequest extends AbstractModel
{
    /**
     * @var integer 策略ID
     */
    public $PolicyId;

    /**
     * @var integer 策略版本号，可由ListPolicyVersions获取
     */
    public $VersionId;

    /**
     * @param integer $PolicyId 策略ID
     * @param integer $VersionId 策略版本号，可由ListPolicyVersions获取
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }
    }
}
