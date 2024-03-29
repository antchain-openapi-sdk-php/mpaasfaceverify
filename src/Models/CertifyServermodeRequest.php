<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\MPAASFACEVERIFY\Models;

use AlibabaCloud\Tea\Model;

class CertifyServermodeRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 租户请求的唯一标志，该标识作为对账的关键信息，商户要保证其唯一性
    /**
     * @var string
     */
    public $bizId;

    // 预留扩展业务参数
    /**
     * @var string
     */
    public $externParam;

    // 用户身份信息
    /**
     * @var string
     */
    public $identityParam;

    // 计费规则码
    /**
     * @var string
     */
    public $chargeCode;

    // 待认证图片，默认base64格式
    /**
     * @var string
     */
    public $authImg;

    // 待认证图片类型，不传默认为base64后的图片，可以扩展Blob/video等类型
    /**
     * @var string
     */
    public $authImgType;

    // 操作类型，operation_type为custom时表示自定义模式，需要用户上传比对源图片
    /**
     * @var string
     */
    public $operationType;

    // 比对源图片
    /**
     * @var string
     */
    public $refImg;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'bizId'             => 'biz_id',
        'externParam'       => 'extern_param',
        'identityParam'     => 'identity_param',
        'chargeCode'        => 'charge_code',
        'authImg'           => 'auth_img',
        'authImgType'       => 'auth_img_type',
        'operationType'     => 'operation_type',
        'refImg'            => 'ref_img',
    ];

    public function validate()
    {
        Model::validateRequired('bizId', $this->bizId, true);
        Model::validateRequired('externParam', $this->externParam, true);
        Model::validateRequired('identityParam', $this->identityParam, true);
        Model::validateRequired('chargeCode', $this->chargeCode, true);
        Model::validateRequired('authImg', $this->authImg, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        if (null !== $this->externParam) {
            $res['extern_param'] = $this->externParam;
        }
        if (null !== $this->identityParam) {
            $res['identity_param'] = $this->identityParam;
        }
        if (null !== $this->chargeCode) {
            $res['charge_code'] = $this->chargeCode;
        }
        if (null !== $this->authImg) {
            $res['auth_img'] = $this->authImg;
        }
        if (null !== $this->authImgType) {
            $res['auth_img_type'] = $this->authImgType;
        }
        if (null !== $this->operationType) {
            $res['operation_type'] = $this->operationType;
        }
        if (null !== $this->refImg) {
            $res['ref_img'] = $this->refImg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CertifyServermodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['biz_id'])) {
            $model->bizId = $map['biz_id'];
        }
        if (isset($map['extern_param'])) {
            $model->externParam = $map['extern_param'];
        }
        if (isset($map['identity_param'])) {
            $model->identityParam = $map['identity_param'];
        }
        if (isset($map['charge_code'])) {
            $model->chargeCode = $map['charge_code'];
        }
        if (isset($map['auth_img'])) {
            $model->authImg = $map['auth_img'];
        }
        if (isset($map['auth_img_type'])) {
            $model->authImgType = $map['auth_img_type'];
        }
        if (isset($map['operation_type'])) {
            $model->operationType = $map['operation_type'];
        }
        if (isset($map['ref_img'])) {
            $model->refImg = $map['ref_img'];
        }

        return $model;
    }
}
