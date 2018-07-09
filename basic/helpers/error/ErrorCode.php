<?php

/**
 * 用于定义错误代码,以及对应的错误信息,如果错误代码对应的错误信息不确定,可以不设置
 * 错误代码共七位 前两位为模块代码,中间两位为动作代码,后三位为具体错误代码
 * 如 `'01010001'` 01_ 为用户模块 __01_ 为注册动作 ____001 为输入校验失败
 *
 * @author tomas
 */

namespace app\helpers\error;

class ErrorCode {
    /********************系统级别错误************************/
    const ERROR_PARAMS_ERR = '-9000000';



    /*     * ************************** 00 微信端的系统级错误 *************************** */

    /**
     * 请用微信访问系统
     */
    const ERROR_FRONTEND_MUST_WX = '0001001';

    /**
     * 哎呀，服务器出错了！ (网络异常,请稍后再试!)
     */
    const ERROR_FRONTEND_SYS_EXCEPTION = '0001002';

    /**
     * 请先关注公众号
     */
    const ERROR_FRONTEND_MUST_SUBSCRIBE = '0001003';

    /**
     * 哎呀，找不到网页！
     */
    const ERROR_FRONTEND_PAGE_NOTFOUND = '0001004';

    /**
     * 请求地址无效
     */
    const ERROR_FRONTEND_INVALID_URL = '0001005';

    /**
     * 非法请求
     */
    const ERROR_FRONTEND_INVALID_REQUEST = '0001006';

    /**
     * 系统正在维护
     */
    const ERROR_FRONTEND_ON_REPAIR = '0001007';

    /**
     * 没有相关内容
     */
    const ERROR_FRONTEND_NONE_DATA = '0001008';

    /**
     * 该项目还没有秒杀活动，敬请期待！
     */
    const ERROR_FRONTEND_NO_SECKILL = '0001009';

    /*     * ****************************** 01 用户相关 ******************************* */

    /**
     * 用户注册校验失败
     */
    const ERROR_SIGNUP_INPUT_VERIFY = '0101001';

    /**
     * 保存用户失败
     */
    const ERROR_SIGNUP_SAVE_USER = '0101002';

    /**
     * 登陆时账号或密码错误
     * @var string
     */
    const ERROR_LOGIN_WRONG_USER = '0101004';

    /**
     * 登陆时企业代码错误
     * @var string
     */
    const ERROR_LOGIN_WRONG_ORG = '0101005';

    /**
     * 登陆时表单校验失败，比如没有填写必填、录入字符超长。
     * @var string
     */
    const ERROR_LOGIN_FORM_VALIFY = '0101006';

    /**
     * 登陆时设置上下文信息失败
     * @var string
     */
    const ERROR_LOGIN_CONTEXT = '0101007';

    /**
     * 退出登陆失败
     * @var string
     */
    const ERROR_LOGOUT = '0101008';

    /**
     * 登陆用户没有基本权限
     * @var string
     */
    const ERROR_LOGIN_BASE_AUTHOR = '0101009';

    /**
     * 登陆异常
     * @var string
     */
    const ERROR_LOGIN_EXCEPTION = '0101010';

    /**
     * 收藏失败
     */
    const ERROR_FAVORITE = '0102001';

    /**
     * 取消收藏失败
     */
    const ERROR_FAVORITE_CACEL = '0102002';

    /**
     * 中台云客用户代码为空
     */
    const ERROR_MIDDLEND_YUNKE_USER_CODE_EMPTY = '0103001';

    /**
     * 中台云客用户代码格式错误
     */
    const ERROR_MIDDLEND_YUNKE_USER_CODE_FROMAT = '0103002';

    /**
     * 中台云客获取用户信息出错
     */
    const ERROR_MIDDLEND_YUNKE_GET_USER_INFO = '0103003';
    
    /**
     * 中台云客用户没有公众号权限
     */
    const ERROR_MIDDLEND_YUNKE_USER_HAVENOT_PUBLICNO_AUTH = '0103004';
    /**
     * 中台云客用户对应的开发商ID没有绑定
     */
    const ERROR_MIDDLEND_YUNKE_USER_ORG_NOT_BINDED = '0103005';
    /**
     * 云客公众号没有掌上售楼的权限
     */
    const ERROR_MIDDLEND_YUNKE_PUBLICNO_HAVENOT_PALM_SALES_AUTH = '0103006';
    /**
     * 移动销售用户获取有权限的楼盘列表错误
     */
    const ERROR_FRONTEND_YUNKE_SALESMAN_AUTHORIZED_BUILDING = '0103007';
    /**
     * 只能编辑本商家的数据
     */
    const ERROR_MIDDLEND_EDIT_OTHER_ORG_DATA = '0103008';
    /**
     * 只能查看本商家的数据
     */
    const ERROR_MIDDLEND_QUERY_OTHER_ORG_DATA = '0103009';

    /*     * ****************************** 02 户型 ******************************* */

    /**
     * 户型数据有效性校验失败
     * @var string
     */
    const ERROR_BUILDING_HOUSETYPE_INOUT_VERIRY = '0201001';

    /**
     * 保存户型失败
     * @var string
     */
    const ERROR_BUILDING_HOUSETYPE_SAVE = '0201002';

    /**
     * 删除户型数据有效性校验失败
     * @var string
     */
    const ERROR_BUILDING_HOUSETYPE_DELETE_VERIRY = '0202001';

    /**
     * 删除户型失败
     * @var string
     */
    const ERROR_BUILDING_HOUSETYPE_DELETE = '0202003';

    /**
     * 关联户型失败
     * @var string
     */
    const ERROR_BUILDING_HOUSETYPE_BIND_ROOM = '0202004';

    /**
     * 保存户型图片失败
     * @var string
     */
    const ERROR_BUILDING_HOUSETYPE_PIC_SAVE = '0203001';

    /**
     * 删除户型图片失败
     * @var string
     */
    const ERROR_BUILDING_HOUSETYPE_PIC_DELETE = '0204001';

    /**
     * 房源数据有效性校验失败
     * @var string
     */
    const ERROR_BUILDING_ROOM_INOUT_VERIRY = '0205001';

    /**
     * 保存房源失败
     * @var string
     */
    const ERROR_BUILDING_ROOM_SAVE = '0205002';

    /**
     * 保存房源失败 房源已售出
     * @var string
     */
    const ERROR_BUILDING_ROOM_SOLD = '0205003';

    /**
     * 保存房源失败 房源在活动中已上架
     * @var string
     */
    const ERROR_BUILDING_ROOM_ON_SHELF = '0205004';

    /**
     * 请先下架房源，才能置为线下已售
     * @var string
     */
    const ERROR_BUILDING_ROOM_SOLF_ONSHELF = '0205005';
    /**
     * 导入房源错误
     * @var string
     */
    const ERROR_BUILDING_ROOM_IMPORT = '0205006';

    /**
     * 删除房源有效性校验失败
     * @var string
     */
    const ERROR_BUILDING_ROOM_DELETE_VERIRY = '0206001';

    /**
     * 删除房源失败
     * @var string
     */
    const ERROR_BUILDING_ROOM_DELETE = '0206002';

    /**
     * 已售房源不能删除
     * @var string
     */
    const ERROR_BUILDING_ROOM_DELETE_SOLD = '0206003';

    /**
     * 锁定云客房源出错
     */
    const ERROR_BUILDING_ROOM_LOCK_YK_ROOM = '0206004';

    /**
     * 只能查看本商家的房源
     * @var string
     */
    const ERROR_BUILDING_ROOM_AUTHORITY = '0207001';

    /**
     * 房源被选择参与活动时失败
     * @var string
     */
    const ERROR_ACTIVITY_SELECT_ROOM_ERROR = '0208001';

    /**
     * 房源被选择参与活动时失败
     * @var string
     */
    const ERROR_ACTIVITY_ON_SHELF_ROOM_ERROR = '0208002';


    /*     * ****************************** 03 楼盘模块 ******************************* */

    /**
     * 增加楼盘失败
     * @var string
     */
    const ERROR_BUILDING_ADD = '0301001';

    /**
     * 删除楼盘失败
     * @var string
     */
    const ERROR_BUILDING_DELETE = '0301002';

    /**
     * 楼盘信息不存在
     * @var string
     */
    const ERROR_BUILDING_NOEXIST = '0301003';

    /**
     * 楼盘已存在
     * @var string
     */
    const ERROR_BUILDING_EXIST = '0301004';

    /**
     * 更新楼盘失败
     * @var string
     */
    const ERROR_BUILDING_UPDATE = '0301005';

    /**
     * 楼盘重名
     * @var string
     */
    const ERROR_BUILDING_EXIST_NAME = '0301006';

    /**
     * 该楼盘存在房源
     * @var string
     */
    const ERROR_BUILDING_CHILD_HOUSE_EXIST = '0304005';

    /**
     * 该楼盘存在活动
     * @var string
     */
    const ERROR_BUILDING_PROMOTION_EXIST = '0304006';
    /**
     * 该楼盘存在房源或者户型不能删除
     * @var string
     */
    const ERROR_BUILDING_ROOM_OR_HOUSE_TYPE_EXIST_DELETE = '0304007';
    /**
     * 已发布楼盘不能删除
     * @var string
     */
    const ERROR_BUILDING_PUBLISHED_DELETE = '0304008';
    /**
     * 楼盘参数有误
     * @var string
     */
    const ERROR_BUILDING_INPUT_VERIFY = '0305001';

    /**
     * 删除楼盘图片失败
     * @var string
     */
    const ERROR_BUILDING_PIC_DELETE = '0306001';

    /**
     * 保存楼盘图片失败
     * @var string
     */
    const ERROR_BUILDING_PIC_SAVE = '0306002';

    /**
     * 楼盘权限认证
     * @var string
     */
    const ERROR_BUILDING_AUTHORITY = "0307001";

    /**
     * 更新楼盘页面访问次数（感兴趣）
     * @var string
     */
    const ERROR_BUILDING_PAGE_ACCESS_INCREASE = '0308001';
    /**
     * 楼盘相册不能为空
     * @var string
     */
    const ERROR_BUILDING_PICS_EMPTY = '0309001';

    /**
     * 打包楼盘所有房间失败
     * @var string
     */
    const ERROR_BUILDING_PACKAGE_QR_IMAGES = '0301001';
    
    /*     * ****************************** 04 开发商相关 ******************************* */

    /**
     * 查询开发商失败
     * @var string
     */
    const ERROR_ORG_FIND = '0501001';

    /**
     * 保存开发商失败
     * @var string
     */
    const ERROR_ORG_SAVE = '0501002';

    /**
     * 保存开发商时名称重复
     * @var string
     */
    const ERROR_ORG_NAME_DUPLICATED = '0501003';

    /**
     * 保存开发商时代码重复
     * @var string
     */
    const ERROR_ORG_CODE_DUPLICATED = '0501004';

    /**
     * 删除开发商失败
     * @var string
     */
    const ERROR_ORG_DELETE = '0501006';

    /**
     * 供应商不存在
     * @var string
     */
    const ERROR_ORG_NOT_EXISTS = '0501009';

    /**
     * 查询开发商用户失败
     * @var string
     */
    const ERROR_ORG_USER_FIND = '0501011';

    /**
     * 保存开发商用户失败
     * @var string
     */
    const ERROR_ORG_USER_SAVE = '0501012';

    /**
     * 保存开发商用户时代码重复
     * @var string
     */
    const ERROR_ORG_USER_CODE_DUPLICATED = '0501013';

    /**
     * 保存开发商用户时手机重复
     * @var string
     */
    const ERROR_ORG_USER_MOBILE_DUPLICATED = '0501014';


    /**
     * 查询明源用户失败
     * @var string
     */
    const ERROR_MY_USER_FIND = '0502001';

    /**
     * 保存明源用户失败
     * @var string
     */
    const ERROR_MY_USER_SAVE = '0502002';

    /**
     * 保存明源用户时代码重复
     * @var string
     */
    const ERROR_MY_USER_CODE_DUPLICATED = '0502003';


    /**
     * 客户查询失败
     * @var string
     */
    const ERROR_CUSTOMER_FIND = '0503001';

    /**
     * 更新客户信息失败
     * @var string
     */
    const ERROR_CUSTOMER_UPDATE = '0503002';
    /**
     * 保存客户信息失败
     * @var string
     */
    const ERROR_CUSTOMER_SAVE = '0503003';
    /**
     * 该客户不存在
     * @var string
     */
    const ERROR_CUSTOMER_NOT_EXISTS = '0503004';
    /**
     * 客户信息中不存在云客公众号openId，不能支付到云客公众号openId
     * @var string
     */
    const ERROR_CUSTOMER_ORGANIZATION_OPEN_ID_EMPTY = '0503005';
    /**
     * 同步客户信息失败，请稍后再试
     * @var string
     */
    const ERROR_CUSTOMER_SYNC_WX_USER_INFO = '0503006';

    /*     * ****************************** 06 秒杀活动 ******************************* */

    /**
     * 秒杀活动数据有效性校验失败
     * @var string
     */
    const ERROR_BUILDING_SECKILL_INOUT_VERIRY = '0601001';

    /**
     * 保存秒杀活动失败
     * @var string
     */
    const ERROR_BUILDING_SECKILL_SAVE = '0601002';

    /**
     * 其他秒杀已使用了相关房源
     * @var string
     */
    const ERROR_BUILDING_SECKILL_USE_ROOM = '0601003';

    /**
     * 微信秒杀支付失败
     * @var string
     */
    const ERROR_BUILDING_SECKILL_PAY_FAULT = '0601004';

    /**
     * 秒杀订单状态错误
     * @var string
     */
    const ERROR_BUILDING_SECKILL_STATUS_ERROR = '0601005';

    /**
     * 秒杀订单重复了
     * @var string
     */
    const ERROR_BUILDING_SECKILL_REPEAT_ERROR = '0601006';

    /**
     * 订单不存在
     * @var string
     */
    const ERROR_BUILDING_SECKILL_NO_EXIT = '0601007';

    /**
     * 订单已过期
     * @var string
     */
    const ERROR_BUILDING_SECKILL_VALIDITY_ERROR = '0601008';

    /**
     * 删除秒杀活动有效性校验失败
     * @var string
     */
    const ERROR_BUILDING_SECKILL_DELETE_VERIRY = '0602001';

    /**
     * 删除秒杀活动失败
     * @var string
     */
    const ERROR_BUILDING_SECKILL_DELETE = '0602002';

    /**
     * 活动已发布，不能编辑
     * @var string
     */
    const ERROR_BUILDING_SECKILL_UPDATE_VERIRY = '0602003';
    /**
     * 活动已发布，不能编辑
     * @var string
     */
    const ERROR_BUILDING_SECKILL_CUSTOMIZE_PROTOCOL_SAVE = '0602004';

    /**
     * 只能查看本商家秒杀
     * @var string
     */
    const ERROR_BUILDING_SECKILL_AUTHORITY = '0603001';

    /**
     * 秒杀不存在
     * @var string
     */
    const ERROR_BUILDING_SECKILL_NOEXIST = '0603002';

    /**
     * 插入秒杀活动房间有误
     * @var string
     */
    const ERROR_BUILDING_SECKILL_ADD_ROOM = '0603003';

    /**
     * 保存秒杀活动房间失败
     * @var string
     */
    const ERROR_BUILDING_SECKILL_ROOM_SAVE = '0604001';

    /**
     * 发布秒杀活动失败
     * @var string
     */
    const ERROR_BUILDING_SECKILL_RELEASE_SAVE = '0604002';

    /**
     * 取消发布秒杀活动失败
     * @var string
     */
    const ERROR_BUILDING_SECKILL_CANCEL_SAVE = '0604003';

    /**
     * 秒杀活动已有人参与，不能取消
     * @var string
     */
    const ERROR_BUILDING_SECKILL_EXIST_ORDER = '0604004';

    /**
     * 生成订单号失败
     * @var string
     */
    const ERROR_ORDER_CODE_GENERATE = '0604009';

    /**
     * 添加秒杀数据库锁失败
     */
    const ERROR_BUILDING_SECKILL_ADD_DBLOCK = '0604014';

    /**
     * 更新秒杀数据库锁数据
     */
    const ERROR_BUILDING_SECKILL_SAVE_DBLOCK_INFO = '0604015';

    /**
     * 存在
     */
    const ERROR_BUILDING_SECKILL_DELETE_ROOM_EXIST_ORDER = '0604016';
    /**
     * 发布楼盘失败
     */
    const ERROR_BUILDING_PUBLISH = '0604017';
    /**
     * 楼盘下存在上架活动（秒杀或日常展示房源），不能取消发布楼盘
     */
    const ERROR_BUILDING_HAS_SHELF_ROOM_CANNOT_UNPUBLISH = '0604018';
    /**
     * 取消发布楼盘失败
     */
    const ERROR_BUILDING_UNPUBLISH = '0604019';
    /**
     * 楼盘未完成编辑，不能发布楼盘
     */
    const ERROR_BUILDING_UNCOMPLETED_PUBLISH = '0604020';

    /**
     * 秒杀订单查询失败
     * @var string
     */
    const ERROR_SECKILL_ORDER_FIND = '0605001';

    /**
     * 秒杀订单录入认购结果失败
     * @var string
     */
    const ERROR_SECKILL_ORDER_CONFIRM = '0605002';

    /**
     * 秒杀单退款失败
     * @var string
     */
    const ERROR_SECKILL_ORDER_REFUND = '0605004';

    /**
     * 更新秒杀单状态失败
     * @var string
     */
    const ERROR_SECKILL_ORDER_UPDATE_STATUS = '0605005';

    /**
     * 当前秒杀单不是待退款状态，无法执行退款。
     * @var string
     */
    const ERROR_SECKILL_ORDER_CANNOT_REFUND_WHEN_NOT_WAIT_REFUND = '0605006';

    /**
     * 当前秒杀单不是待挞定状态，无法执行挞定。
     * @var string
     */
    const ERROR_SECKILL_ORDER_CANNOT_TADING_WHEN_NOT_WAIT_TADING = '0605008';

    /**
     * 添加秒杀订单失败
     */
    const ERROR_SECKILL_ORDER_ADD = '0605009';

    /**
     * 秒杀订单已超时
     */
    const ERROR_SECKILL_ORDER_TIMEOUT = '0605010';

    /**
     * 秒杀单不存在
     */
    const ERROR_BUILDING_SECKILL_ORDER_NOTEXIST = '0605011';

    /**
     * 接口返回的秒杀支付结果错误
     */
    const ERROR_SECKILL_ORDER_PAYMENT_RESULT_PARAMS = '0605012';

    /**
     * 查询秒杀支付结果失败
     */
    const ERROR_SECKILL_ORDER_PAYMENT_QUERY = '0605013';

    /**
     * 订单已取消
     */
    const ERROR_SECKILL_ORDER_CANCELED = '0605014';

    /**
     * 订单已支付
     */
    const ERROR_SECKILL_ORDER_HAS_PAID = '0605015';

    /**
     * 未知的订单号状态
     */
    const ERROR_SECKILL_ORDER_UNKONWN_STATUS = '0605016';

    /**
     * 存在已付款的定单，不允许上架
     */
    const ERROR_BUILDING_SECKILL_ROOM_EXIST_ORDER = '0605017';

    /**
     * 删除秒杀单出错
     */
    const ERROR_SECKILL_ORDER_DEL = '0605018';

    /**
     * 该状态的秒杀单不能删除
     */
    const ERROR_SECKILL_ORDER_CANNOT_DEL_STATUS = '0605019';

    /**
     * 秒杀的房间已置为线下已售
     */
    const ERROR_SECKILL_ROOM_OFFLINE_SOLD = '0605020';
    
    /**
     * 秒杀房源秒杀总价为空
     */
    const ERROR_SECKILL_ROOM_SECKILL_AMOUNT_EMPTY = '0605021';
    
    /**
     * 秒杀房源户型为空
     */
    const ERROR_SECKILL_ROOM_HOSETYPE_EMPTY = '0605022';
    /**
     * 转为日常展示房源失败
     */
    const ERROR_SECKILL_ROOM_TO_DAILY_ROOM = '0605023';
    /**
     * 支付到云客公众号商户的订单不支持退款操作
     */
    const ERROR_SECKILL_ORDER_YUNKE_CANNOT_REFUND = '0605024';

    /** 秒杀订单号不能为空 */
    const ERROR_SECKILL_ORDER_CODE_CANNOT_EMPTY = '0606001';

    /** 同步秒杀单退款状态失败 */
    const ERROR_SYNC_SECKILL_ORDER_REFUND_STATUS = '0606002';

    /*     * ****************************** 07 角色相关 ******************************* */

    /**
     * 新增角色失败
     * @var string
     */
    const ERROR_AUTH_ROLE_ADD = '0701001';

    /**
     * 新增角色名称重复
     * @var string
     */
    const ERROR_AUTH_ROLE_NAME_EXIST = '0701002';

    /**
     * 删除角色失败
     * @var string
     */
    const ERROR_AUTH_ROLE_DELETE = '0701003';

    /**
     * 角色不存在
     * @var string
     */
    const ERROR_AUTH_ROLE_NOT_EXIST = '0701004';

    /**
     * 编辑角色失败
     * @var string
     */
    const ERROR_AUTH_ROLE_EDIT = '0701005';

    /**
     * 保存角色用户失败
     * @var string
     */
    const ERROR_AUTH_ROLE_ADD_USER = '0701006';

    /*     * ****************************** 08 授权相关 ******************************* */

    /**
     * 授权认证失败
     */
    const ERROR_AUTH_FORBIDDEN = '0801001';

    /*     * ****************************** 09 分享相关 ******************************* */

    /**
     * 记录分享日志失败
     */
    const ERROR_SHARE_ADD = '0901001';

    /**
     * 记录访问分享日志失败
     */
    const ERROR_VISIT_SHARE_ADD = '0901002';

    /**
     * 记录分享交易红包失败
     */
    const ERROR_SHARE_TRADE_PACKET_ADD = '0901003';

    /**
     * 记录访问分享交易红包失败
     */
    const ERROR_VISIT_TRADE_PACKET_ADD = '0901004';

    /**
     * 记录分享H5失败
     */
    const ERROR_SHARE_H5_ADD = '0901005';

    /**
     * 记录访问分享H5失败
     */
    const ERROR_VISIT_H5_ADD = '0901006';

    /*     * ****************************** 10 摇一摇 ******************************* */

    /**
     * 新增奖项明细失败
     */
    const ERROR_SHAKE_AWARD_ADD = '1001001';

    /**
     * 保存奖项实例失败
     */
    const ERROR_SHAKE_AWARD_UNIFY_SAVE = '1001002';

    /**
     * 生成奖券号失败
     */
    const ERROR_SHAKE_GENERATE_CODE = '1001003';

    /**
     * 保存中奖纪录失败
     */
    const ERROR_SHAKE_AWARD_RECORD_ADD = '1001004';

    /**
     * 更新奖券数量失败
     */
    const ERROR_SHAKE_AWARD_UPDATE_QUANTITY = '1001005';

    /**
     * 新增摇一摇活动失败
     */
    const ERROR_SHAKE_ADD = '1002001';

    /**
     * 编辑摇一摇活动失败
     */
    const ERROR_SHAKE_EDIT = '1002002';

    /**
     * 摇一摇活动不存在
     */
    const ERROR_SHAKE_NOEXIST = '1002003';

    /**
     * 摇一摇活动名称重名
     */
    const ERROR_SHAKE_NAME_EXIST = '1002004';

    /**
     * 摇一摇活动数据检验失败
     */
    const ERROR_SHAKE_INOUT_VERIRY = '1002005';


    /**
     * 优惠券已使用
     */
    const ERROR_AWARD_HAS_USED = '1002007';

    /**
     * 摇一摇活动已被商家使用，不能取消
     */
    const ERROR_SHAKE_ORGANIZATION_USE = '1002008';

    /**
     * 已存在发布的活动
     */
    const ERROR_SHAKE_VALID_EXIST = '1002009';

    /**
     * 摇一摇明源奖项不存在
     */
    const ERROR_SHAKE_AWARD_TEMPLATE_NOEXIST = '1002010';

    /**
     * 销券失败
     */
    const ERROR_AWARD_SET_USED = '1002011';

    /**
     * 更新中奖纪录失败
     */
    const ERROR_AWARD_RECORD_UPDATE = '1002012';

    /*     * ****************************** 11 广告相关 ******************************* */

    /**
     * 保存广告失败
     */
    const ERROR_ADVERTISEMENT_SAVE = '1101001';

    /**
     * 删除广告失败
     */
    const ERROR_ADVERTISEMENT_DELETE = '1101002';

    /**
     * 超出启用数错误
     */
    const ERROR_ADVERTISEMENT_ACTIVE = '1101003';

    /**
     * 登录超时或无访问权限
     */
    const ERROR_OAM_AUTHORIZE = '1101004';

    /*     * ****************************** 12 报表相关 ******************************* */

    /**
     * 导出excel失败
     */
    const ERROR_REPORT_EXPORT_EXCEL = '1200001';

    /**
     * 过滤区间内无数据导出无效
     */
    const ERROR_REPORT_EXPORT_EMPTY_DATA = '1200002';

    /*     * ****************************** 13 推荐房源 ******************************* */

    /**
     * 新增推荐房源失败
     */
    const ERROR_RECOMMEND_ROOM_ADD = '1300001';

    /**
     * 取消推荐房源失败
     */
    const ERROR_RECOMMEND_ROOM_DELETE = '1300002';

    /**
     * 有效推荐房源不能超过两个
     */
    const ERROR_RECOMMEND_ROOM_COUNT_LIMIT = '1300003';

    /*     * ****************************** 14 分享模板 ******************************* */

    /**
     * 保存分享模板失败
     * @var string
     */
    const ERROR_SHARE_TEMPLATE_SAVE = '1400001';

    /*     * ****************************** 15 优惠券 ******************************* */

    /**
     * 领取优惠券失败
     */
    const ERROR_COUPON_SAVE = '1500001';

    /**
     * 领取优惠券号生成失败
     */
    const ERROR_COUPON_CODE_GENERATE = '1500002';

    /**
     * 你已经领取过该优惠券
     */
    const ERROR_COUPON_FETCHED = '1500003';

    /**
     * 订单支付超时，不能领取优惠券
     */
    const ERROR_COUPON_INVALID_ORDER = '1500004';

    /*     * ****************************** 16 用户行为日志 ******************************* */

    /**
     * 添加秒杀刷选日志
     */
    const ERROR_RECORD_LOG = '1600001';

    /*     * ****************************** 17 特价房 ******************************* */

    /**
     * 一个楼盘下特价房源不能超过两个
     */
    const ERROR_BARGAIN_ROOM_EXCESS = '1700001';

    /**
     * 保存标识特价房源失败
     */
    const ERROR_BARGAIN_ROOM_SAVE = '1700002';

    /*     * ****************************** 18 红包活动 ******************************* */

    /**
     * 保存红包活动失败
     */
    const ERROR_PACKET_ACTIVITY_SAVE = '1800001';

    /**
     * 更新红包活动失败
     */
    const ERROR_PACKET_ACTIVITY_UPDATE = '1800002';

    /**
     * 保存普通红包活动失败 当前只有H5普通红包
     */
    const ERROR_PACKET_COMMON_SAVE = '1800003';

    /**
     * 删除普通红包活动失败 当前只有H5普通红包
     */
    const ERROR_PACKET_COMMON_DELETE = '1800004';

    /**
     * 保存交易红包失败
     */
    const ERROR_PACKET_TRADE_SAVE = '1800005';

    /**
     * 更新交易红包失败
     */
    const ERROR_PACKET_TRADE_UPDATE = '1800006';

    /*     * ****************************** 19 购房百科 ******************************* */

    /**
     * 保存红包活动失败
     */
    const ERROR_PEDIA_ARTICLE_SAVE = '1900001';


    /*     * ****************************** 20 均价走势 ******************************* */

    /**
     * 保存均价走势失败
     */
    const ERROR_AVG_PRICE_SAVE = '2000001';
    /*     * ****************************** 21 上传图片 ******************************* */

    /**
     * 上传图片失败
     */
    const ERROR_UPLOAD_FILE = '2100001';
    /*     * ****************************** 22 同步云客接口 ******************************* */

    /**
     * 绑定失败，绑定的开发商不存在
     */
    const ERROR_BUNDLING_UNEXISTS_ORG = '2200001';

    /**
     * 绑定失败，绑定的项目不存在
     */
    const ERROR_BUNDLING_UNEXISTS_BUILDING = '2200002';

    /**
     * 保存绑定关联信息失败
     */
    const ERROR_BUNDLING_SAVE = '2200003';
    /*     * ****************************** 23 直通车提供给其他应用的接口 ******************************* */

    /**
     * 接口超时
     */
    const ERROR_ZTCAPI_REQUEST_TIMEOUT = '2300001';

    /**
     * 非法的签名
     */
    const ERROR_ZTCAPI_INVALID_SIGN = '2300002';

    /**
     * AppId无效
     */
    const ERROR_ZTCAPI_INVALID_APPID = '2300003';

    /*     * ****************************** 24 程序日志 ******************************* */

    /**
     * 保存程序日志失败
     */
    const ERROR_APP_LOG_SAVE = '2400001';
    /*     * ****************************** 25 已删除实体 ******************************* */

    /**
     * 保存日常展示房源失败
     */
    const ERROR_DELETED_ENTITY_SAVE = '2500001';
    /*     * ****************************** 26 日常展示房源 ******************************* */

    /**
     * 保存日常展示房源失败
     */
    const ERROR_DAILY_ROOM_SAVE = '2600001';
    /**
     * 上架日常展示房源不能删除
     */
    const ERROR_DAILY_ROOM_SHELF_DELETE = '2600002';
    /**
     * 删除日常展示房源失败
     */
    const ERROR_DAILY_ROOM_DELETE = '2600003';
    /**
     * 上架日常展示房源失败
     */
    const ERROR_DAILY_ROOM_SHELF = '2600004';
    /**
     * 下架日常展示房源失败
     */
    const ERROR_DAILY_ROOM_OFF_SHELF = '2600005';
    /**
     * 移动日常展示房源位置失败
     */
    const ERROR_DAILY_ROOM_MOVE_POSITION = '2600006';
    /**
     * 该日常展示房源不存在
     */
    const ERROR_DAILY_ROOM_NOT_EXISTS = '2600007';
    /**
     * 参加秒杀失败
     */
    const ERROR_DAILY_ROOM_TO_SECKILL_ROOM = '2600008';


    /**
     * 保存日常展示房源猜价信息失败
     */
    const ERROR_DAILY_ROOM_GUESS_PRICE_ADD = '2602001';
    /**
     * 重复保存日常展示房源猜价信息
     */
    const ERROR_DAILY_ROOM_GUESS_PRICE_DUPLICATE = '2602002';

    /*     * ****************************** 27 在线开盘 ******************************* */

    /**
     * 在线开盘活动参数有误
     * @var string
     */
    const ERROR_CHOOSE_ROOM_ACTIVITY_INPUT_VERIFY = '2700001';
    /**
     * 保存在线开盘活动失败
     */
    const ERROR_CHOOSE_ROOM_ACTIVITY_SAVE = '2700002';
    /**
     * 在线开盘活动不存在
     */
    const ERROR_CHOOSE_ROOM_ACTIVITY_NOT_EXIST = '2700003';

    /**
     * 发布在线开盘活动失败
     */
    const ERROR_CHOOSE_ROOM_ACTIVITY_PUBLISH = '2700004';

    /**
     * 取消在线开盘活动失败
     */
    const ERROR_CHOOSE_ROOM_ACTIVITY_UNPUBLISH  = '2700005';
    /**
     * 删除在线开盘活动失败
     */
    const ERROR_CHOOSE_ROOM_ACTIVITY_DELETE  = '2700006';
    /**
     * 打包下载所有已上架的车位的二维码图片失败
     */
    const ERROR_CHOOSE_ROOM_ACTIVITY_PACKAGE_QR_IMAGES='2700007';
    /**
     * 微信端在线开盘活动已取消/未发布
     */
    const ERROR_CHOOSE_ROOM_ACTIVITY_NOT_PUBLISH = '2700008';

    /**
     * 微信端在线开盘活动未开始
     */
    const ERROR_CHOOSE_ROOM_ACTIVITY_NOT_BEGIN = '2700009';

    /**
     * 保存折扣失败
     */
    const ERROR_CHOOSE_ROOM_ACTIVITY_DISCOUNT_SAVE = '2700010';

    /**
     * 保存分批选房批次失败
     */
    const ERROR_CHOOSE_ROOM_BATCH_SAVE = '2700011';

    /**
     * 删除分批选房批次失败
     */
    const ERROR_CHOOSE_ROOM_BATCH_DELETE = '2700012';

    /**
     * 分批选房批次不存在
     */
    const ERROR_CHOOSE_ROOM_BATCH_NOT_EXIST = '2700013';

    /**
     * 开启分批选房失败
     */
    const ERROR_CHOOSE_ROOM_OPEN_BATCH = '2700014';

    /**
     * 开启分批选房失败
     */
    const ERROR_CHOOSE_ROOM_CLOSE_BATCH = '2700015';
    
    /**
     * 分批选房添加人员失败
     */
    const ERROR_CHOOSE_ROOM_USE_JOIN_BATCH = '2700016';

    /**
     * 删除车位/房间失败
     */
    const ERROR_CHOOSE_ROOM_DELETE='2701001';
    /**
     * 保存车位/房间失败
     */
    const ERROR_CHOOSE_ROOM_SAVE='2701002';
    /**
     * 上架车位/房间失败
     */
    const ERROR_CHOOSE_ROOM_SHELF='2701003';
    /**
     * 下架车位/房间失败
     */
    const ERROR_CHOOSE_ROOM_UNSHELF='2701004';
    /**
     * 车位/房间不存在
     */
    const ERROR_CHOOSE_ROOM_NOT_EXISTS='2701005';
    /**
     * 批量上架车位/房间失败
     */
    const ERROR_CHOOSE_ROOM_BATCH_SHELF='2701006';
    /**
     * 批量下架车位/房间失败
     */
    const ERROR_CHOOSE_ROOM_BATCH_UNSHELF='2701007';
    /**
     * 批量锁定车位/房间失败
     */
    const ERROR_CHOOSE_ROOM_BATCH_LOCK_ROOM='2701008';
    /**
     * 保存批量锁定车位/房间失败原因失败
     */
    const ERROR_CHOOSE_ROOM_BATCH_SHELF_FAIL_REASON_SAVE='2701009';

    /**
     * 微信端访问车位/房间已下架
     */
    const ERROR_CHOOSE_ROOM_OFF_SHELF='2701010';

    /**
     * 不能查看已售房源
     */
    const ERROR_CHOOSE_ROOM_SOLD_NOT_SHOW='2701011';

    /*
     * 导入认筹名单失败(接收数据失败)
     */
    const ERROR_CHOOSE_ROOM_USER_IMPORT_ERROR = '2702000';
    /*
     * 导入认筹名单 - 保存认筹名单失败
     */
    const ERROR_CHOOSE_ROOM_USER_SAVE = '2702001';
    /*
     * 导入认筹名单 - 删除认筹名单失败
     */
    const ERROR_CHOOSE_ROOM_USER_DELETE = '2702002';
    /**
     * 导入认筹名单 - EXCEL文件错误
     */
    const ERROR_CHOOSE_ROOM_USER_IMPORT_EXCEL_ERROR = '2702003';
    /**
     * 导入认筹名单 - EXCEL文件无数据
     */
    const ERROR_CHOOSE_ROOM_USER_IMPORT_NO_DATA_ERROR = '2702004';
    /**
     * 导入认筹名单 - 导出错误列表 - 数据不存在
     */
    const ERROR_CHOOSE_ROOM_USER_EXPORT_ERROR = '2702005';
    /**
     * 认筹用户登录认证失败
     */
    const ERROR_CHOOSE_ROOM_USER_FAIL_LOGIN = '2702006';

    /**
     * 资格失效,请速于开发商联系
     */
    const ERROR_CHOOSE_ROOM_USER_INVALID = '2702007';

    /**
     * 保存认筹用户登录信息失败
     */
    const ERROR_CHOOSE_ROOM_USER_LOGIN_SAVE = '2702008';

    /**
     * 认筹用户登录超过限制数量
     */
    const ERROR_CHOOSE_ROOM_USER_LOGIN_EXCEED_OPENID_LIMIT = '2702009';

    /**
     * 认筹用户登录重置
     */
    const ERROR_CHOOSE_ROOM_USER_LOGIN_RESET = '2702010';

    /**
     * 删除开盘订单失败
     */
    const ERROR_CHOOSE_ROOM_ORDER_DELETE='2703001';

    /**
     * 保存开盘订单失败
     */
    const ERROR_CHOOSE_ROOM_ORDER_SAVE  = '2703002';
    /**
     * 取消开盘订单失败
     */
    const ERROR_CHOOSE_ROOM_ORDER_CANCEL  = '2703003';

    /**
     * 开盘订单不存在
     */
    const ERROR_CHOOSE_ROOM_ORDER_NOT_EXIST  = '2703004';

    /**
     * 添加车位数据库锁失败
     */
    const ERROR_CHOOSE_ROOM_ADD_DBLOCK = '2703005';

    /**
     * 已选购过车位/房间
     */
    const ERROR_CHOOSE_ROOM_COUNT_LIMIT = '2703006';
    /**
     * 预留操作失败
     */
    const ERROR_CHOOSE_ROOM_BOOK='2703007';
    /**
     * 取消预留操作失败
     */
    const ERROR_CHOOSE_ROOM_UNBOOK='2703008';
    /**
     * 保存协议失败（选房协议）
     */
    const ERROR_CHOOSE_ROOM_PROTOCOL_SAVE='2703009';
    /**
     * 批量生成选房订单失败
     */
    const ERROR_CHOOSE_ROOM_ORDER_BATCH_SAVE='2703010';

    /**
     * 保存短信验证码失败
     */
    const ERROR_CHOOSE_ROOM_VERIFY_CODE_SAVE='2703011';
    /**
     * 个人收藏数超过限制
     */
    const ERROR_CHOOSE_ROOM_FAVORITE_OVER_LIMIT='2703012';
    /**
     * 清除公测订单失败
     */
    const ERROR_CHOOSE_ROOM_ORDER_BETA_CLEAR='2703030';
    /**
     * 设置认筹用户可选套数失败
     */
    const ERROR_CHOOSE_ROOM_USER_CAN_CHOOSE_COUNT_SAVE='2703031';
    /**
     * 正式订单【确认收款】操作失败
     */
    const ERROR_CHOOSE_ROOM_ORDER_CONFIRM_PAY='2703032';
    /**
     * 在线开盘签到岗登陆失败
     */
    const ERROR_CHOOSE_ROOM_SIGN_LOGIN='2703033';
    /**
     * 在线开盘确认签到操作失败
     */
    const ERROR_CHOOSE_ROOM_SIGN_SUBMIT='2703034';
    /**
     * 在线开盘未签到提示
     */
    const ERROR_CHOOSE_ROOM_FORCE_SIGN='2703035';
    /**
     * 在线开盘微信端接口频率限制
     */
    const ERROR_CHOOSE_ROOM_RATE_LIMIT='2703036';
    /**
     * 认筹用户未登录
     */
    const ERROR_CHOOSE_ROOM_USER_NEED_LOGIN = '2703037';
    /**
     * 签到岗未登录
     */
    const ERROR_CHOOSE_ROOM_SIGN_NEED_LOGIN='2703038';
    /**
     * 无效签到二维码
     */
    const ERROR_CHOOSE_ROOM_SIGN_QR_INVALID='2703039';

    /**
     * 订单同步到erp
     */
    const ERROR_CHOOSE_ROOM_ORDER_SYNC_TO_ERP  = '2703040';

    /**
     * 保存电视墙分屏失败
     */
    const ERROR_CHOOSE_ROOM_SCREEN_SAVE='2704001';
    /**
     * 保存电视墙分屏楼栋失败
     */
    const ERROR_CHOOSE_ROOM_SCREEN_BLOCK_SAVE='2704002';

    /**
     * 保存电视墙分屏楼栋排序失败
     */
    const ERROR_CHOOSE_ROOM_SCREEN_BLOCK_SORT='2704003';
    /**
     * 保存电视墙分屏设置失败
     */
    const ERROR_CHOOSE_ROOM_SCREEN_SETTING_SAVE='270404';
    /**
     * 获取预约单详情失败
     */
    const ERROR_GET_ERP_BOOKING_DETAIL = '2705001';
    /**
     * 获取预约单列表失败
     */
    const ERROR_GET_ERP_BOOKING_LIST = '2705002';
    /**
     * ERP预约单正在同步中
     */
    const ERROR_ERP_BOOKING_IN_SYNC = '2705005';
    /**
     * 保存ERP预约单同步状态失败
     */
    const ERROR_SAVE_ERP_BOOKING_SYNC_STATUS = '2705004';

    /**
     * 保存预约单锁失败
     */
    const ERROR_ERP_BOOKING_LOCK_SAVE='2705003';
    /**
     * 获取ERP预约单同步时间失败
     */
    const ERROR_GET_LATEST_SYNC_ERP_BOOKING_TIME = '2705006';


    /**
     * 在线开盘-移动报表-未登录
     */
    const ERROR_CHOOSE_ROOM_REPORT_NO_LOGIN = '2705005';

    /**
     * 在线开盘-移动报表-没有权限
     */
    const ERROR_CHOOSE_ROOM_REPORT_NO_PERMISSION = '2705006';

    /***************************************支付到开发商商户号28*************************************************/
    /**
     * 开发商微信商户号信息不存在
     */
    const ERROR_ORGANIZATION_SELLER_NOT_EXISTS='2800001';

    /**
     * 收款方式参数有误
     */
    const ERROR_PAY_MODE_INPUT_VERIFY = '2800002';

    /**
     * 还有尚未结清的订单，不能转换收款方式
     */
    const ERROR_PAY_MODE_UNSETTLED_ORDER = '2800003';

    /**
     * 保存收款方式失败
     */
    const ERROR_PAY_MODE_SAVE = '2800004';

    /*************************************在线开盘 安全验证模块***********************************************/
    /**
     * 删除安全验证问题失败
     */
    const ERROR_CHOOSE_ROOM_QUESTION_DELETE='2900001';
    /**
     * 创建安全验证问题失败
     */
    const ERROR_CHOOSE_ROOM_QUESTION_CREATE='2900002';
    /**
     * 编辑安全验证问题失败
     */
    const ERROR_CHOOSE_ROOM_QUESTION_EDIT='2900003';
    /**
     * 安全验证问题不存在
     */
    const ERROR_CHOOSE_ROOM_QUESTION_NOT_EXISTS='2900004';

    //错误信息
    public static $errorMessage = [
        self::ERROR_PARAMS_ERR => '参数错误',
        self::ERROR_FRONTEND_MUST_WX => '请用微信访问系统',
        self::ERROR_FRONTEND_MUST_SUBSCRIBE => '请先关注公众号',
        self::ERROR_FRONTEND_SYS_EXCEPTION => '网络异常,请稍后再试!',
        self::ERROR_FRONTEND_PAGE_NOTFOUND => '哎呀，找不到网页！',
        self::ERROR_FRONTEND_INVALID_URL => '请求地址无效',
        self::ERROR_FRONTEND_INVALID_REQUEST => '非法请求',
        self::ERROR_FRONTEND_NONE_DATA => '没有相关内容',
        self::ERROR_FRONTEND_NO_SECKILL=> '该项目还没有秒杀活动，敬请期待！',
        self::ERROR_FRONTEND_ON_REPAIR => '系统维护中',
        self::ERROR_SIGNUP_SAVE_USER => '保存用户失败',
        self::ERROR_BUILDING_ADD => '增加楼盘失败',
        self::ERROR_BUILDING_DELETE => '删除楼盘失败',
        self::ERROR_BUILDING_NOEXIST => '楼盘信息不存在',
        self::ERROR_BUILDING_EXIST_NAME => '楼盘名称已存在',
        self::ERROR_BUILDING_EXIST => '楼盘已存在',
        self::ERROR_BUILDING_CHILD_HOUSE_EXIST => '该楼盘存在房源',
        self::ERROR_BUILDING_PROMOTION_EXIST => '该楼盘存在活动',
        self::ERROR_BUILDING_UPDATE => '更新楼盘失败',
        self::ERROR_BUILDING_INPUT_VERIFY => '楼盘参数有误',
        self::ERROR_BUILDING_PIC_DELETE => '删除楼盘图片失败',
        self::ERROR_BUILDING_PIC_SAVE => '保存楼盘图片失败',
        self::ERROR_BUILDING_AUTHORITY => '没有相应权限',
        self::ERROR_BUILDING_HOUSETYPE_DELETE => '删除户型失败',
        self::ERROR_BUILDING_HOUSETYPE_BIND_ROOM=>'关联户型失败',
        self::ERROR_BUILDING_HOUSETYPE_DELETE_VERIRY => '该户型已被使用，不允许删除',
        self::ERROR_BUILDING_HOUSETYPE_INOUT_VERIRY => '户型数据录入无效',
        self::ERROR_BUILDING_HOUSETYPE_SAVE => '保存户型失败',
        self::ERROR_BUILDING_HOUSETYPE_PIC_DELETE => '删除户型图片失败',
        self::ERROR_BUILDING_HOUSETYPE_PIC_SAVE => '保存户型图片失败',
        self::ERROR_BUILDING_ROOM_INOUT_VERIRY => '房源数据录入无效',
        self::ERROR_BUILDING_ROOM_SAVE => '保存房源数据失败',
        self::ERROR_BUILDING_ROOM_SOLD => '已售房源不能编辑',
        self::ERROR_BUILDING_ROOM_ON_SHELF => '已上架房源不能编辑',
        self::ERROR_BUILDING_ROOM_DELETE_VERIRY => '该房源已被使用，不允许删除',
        self::ERROR_BUILDING_ROOM_DELETE => '删除房源失败',
        self::ERROR_BUILDING_ROOM_AUTHORITY => '只能查看本商家的房源',
        self::ERROR_BUILDING_PACKAGE_QR_IMAGES=>'打包楼盘房间二维码失败',
        self::ERROR_LOGIN_WRONG_USER => '用户账户或密码错误',
        self::ERROR_LOGIN_WRONG_ORG => '企业代码不存在或已禁用',
        self::ERROR_LOGIN_FORM_VALIFY => '登陆信息填写错误',
        self::ERROR_LOGIN_CONTEXT => '登陆时设置上下文信息失败',
        self::ERROR_LOGIN_BASE_AUTHOR => '登陆用户没有权限',
        self::ERROR_LOGOUT => '退出登陆失败',
        self::ERROR_LOGIN_EXCEPTION => '登陆异常，请与管理员联系',
        self::ERROR_ORG_FIND => '查询开发商失败',
        self::ERROR_ORG_SAVE => '保存开发商失败',
        self::ERROR_ORG_NAME_DUPLICATED => '开发商名称已存在',
        self::ERROR_ORG_CODE_DUPLICATED => '开发商代码已存在',
        self::ERROR_ORG_DELETE => '删除开发商失败',
        self::ERROR_ORG_USER_FIND => '查找用户失败',
        self::ERROR_ORG_USER_SAVE => '保存用户失败',
        self::ERROR_ORG_USER_CODE_DUPLICATED => '用户代码已存在',
        self::ERROR_ORG_USER_MOBILE_DUPLICATED => '用户手机号已存在',
        self::ERROR_BUILDING_SECKILL_INOUT_VERIRY => '秒杀活动数据录入无效',
        self::ERROR_BUILDING_SECKILL_SAVE => '保存秒杀活动失败',
        self::ERROR_BUILDING_SECKILL_RELEASE_SAVE => '发布秒杀活动失败',
        self::ERROR_BUILDING_SECKILL_USE_ROOM => '其他秒杀活动已使用了相关房源',
        self::ERROR_BUILDING_SECKILL_CANCEL_SAVE => '取消发布秒杀活动失败',
        self::ERROR_BUILDING_SECKILL_ROOM_SAVE => '保存秒杀活动房间失败',
        self::ERROR_BUILDING_SECKILL_DELETE_VERIRY => '该秒杀活动已发布，不允许删除',
        self::ERROR_BUILDING_SECKILL_UPDATE_VERIRY => '该秒杀活动已发布，不允许编辑',
        self::ERROR_BUILDING_SECKILL_DELETE => '删除秒杀活动失败',
        self::ERROR_BUILDING_SECKILL_AUTHORITY => '只能查看本商家的秒杀活动',
        self::ERROR_BUILDING_SECKILL_NOEXIST => '秒杀活动不存在',
        self::ERROR_BUILDING_SECKILL_EXIST_ORDER => '秒杀活动已有人参与，不能取消',
        self::ERROR_BUILDING_SECKILL_DELETE_ROOM_EXIST_ORDER => '存在已交易的秒杀单,不能删除',
        self::ERROR_BUILDING_SECKILL_ADD_ROOM => '插入秒杀活动房间有误',
        self::ERROR_ORG_NOT_EXISTS => '供应商不存在',
        self::ERROR_ADVERTISEMENT_SAVE => '保存Banner失败',
        self::ERROR_ADVERTISEMENT_DELETE => '删除Banner失败',
        self::ERROR_ADVERTISEMENT_ACTIVE => '启用的Banner数不能超出6个的限制',
        self::ERROR_SECKILL_ORDER_FIND => '秒杀订单查询失败',
        self::ERROR_CUSTOMER_FIND => '客户查询失败',
        self::ERROR_CUSTOMER_UPDATE => '更新客户信息失败',
        self::ERROR_SECKILL_ORDER_CONFIRM => '秒杀单录入认购结果失败',
        self::ERROR_SECKILL_ORDER_REFUND => '秒杀单退款失败',
        self::ERROR_BUILDING_SECKILL_PAY_FAULT => '微信秒杀支付失败',
        self::ERROR_BUILDING_SECKILL_STATUS_ERROR => '秒杀订单状态错误',
        self::ERROR_BUILDING_SECKILL_REPEAT_ERROR => '秒杀订单重复了',
        self::ERROR_BUILDING_SECKILL_NO_EXIT => '查询订单失败',
        self::ERROR_BUILDING_SECKILL_VALIDITY_ERROR => '订单已过期',
        self::ERROR_SECKILL_ORDER_CANNOT_REFUND_WHEN_NOT_WAIT_REFUND => '当前秒杀单不是待退款状态，无法执行退款',
        self::ERROR_SECKILL_ORDER_CANNOT_TADING_WHEN_NOT_WAIT_TADING => '当前秒杀单不是待挞定状态，无法执行挞定',
        self::ERROR_SECKILL_ORDER_UPDATE_STATUS => '更新秒杀单状态失败',
        self::ERROR_SECKILL_ORDER_ADD => '添加秒杀订单失败',
        self::ERROR_SECKILL_ORDER_TIMEOUT => '订单已超时',
        self::ERROR_BUILDING_SECKILL_ROOM_EXIST_ORDER => '存在有效的定单,不允许上架',
        self::ERROR_ORDER_CODE_GENERATE => '生成订单号失败',
        self::ERROR_BUILDING_SECKILL_ORDER_NOTEXIST => '秒杀单不存在',
        self::ERROR_SECKILL_ORDER_PAYMENT_RESULT_PARAMS => '接口返回的秒杀支付结果错误',
        self::ERROR_SECKILL_ORDER_PAYMENT_QUERY => '查询秒杀支付结果失败',
        self::ERROR_AUTH_ROLE_ADD => '新增角色失败',
        self::ERROR_AUTH_ROLE_NAME_EXIST => '新增角色名称重复',
        self::ERROR_AUTH_ROLE_DELETE => '删除角色失败',
        self::ERROR_AUTH_ROLE_EDIT => '编辑角色失败',
        self::ERROR_AUTH_ROLE_NOT_EXIST => '角色不存在',
        self::ERROR_SECKILL_ORDER_CANCELED => '订单已取消',
        self::ERROR_SECKILL_ORDER_HAS_PAID => '订单已支付',
        self::ERROR_SECKILL_ORDER_UNKONWN_STATUS => '订单状态错误',
        self::ERROR_AUTH_ROLE_ADD_USER => '保存角色用户失败',
        self::ERROR_AUTH_FORBIDDEN => '当前用户没有此功能授权',
        self::ERROR_SHARE_ADD => '记录分享失败',
        self::ERROR_VISIT_SHARE_ADD => '记录访问分享失败',
        self::ERROR_SHARE_TRADE_PACKET_ADD => '记录分享交易红包失败',
        self::ERROR_VISIT_TRADE_PACKET_ADD => '记录访问分享交易红包失败',
        self::ERROR_SHARE_H5_ADD => '记录分享H5失败',
        self::ERROR_VISIT_H5_ADD => '记录访问分享H5失败',
        self::ERROR_SHAKE_AWARD_ADD => '新增奖项明细失败',
        self::ERROR_SHAKE_AWARD_UNIFY_SAVE => '保存奖项实例失败',
        self::ERROR_SHAKE_ADD => '新增摇一摇活动失败',
        self::ERROR_SHAKE_EDIT => '编辑摇一摇活动失败',
        self::ERROR_SHAKE_GENERATE_CODE => '生成奖券号失败',
        self::ERROR_SHAKE_AWARD_RECORD_ADD => '保存中奖纪录失败',
        self::ERROR_SHAKE_AWARD_UPDATE_QUANTITY => '更新奖券数量失败',
        self::ERROR_SHAKE_NOEXIST => '摇一摇活动不存在',
        self::ERROR_SHAKE_NAME_EXIST => '摇一摇活动名称已被使用',
        self::ERROR_SHAKE_INOUT_VERIRY => '摇一摇活动数据检验失败',
        self::ERROR_AWARD_HAS_USED => '优惠券已使用',
        self::ERROR_SHAKE_ORGANIZATION_USE => '摇一摇活动已被商家使用，不能取消',
        self::ERROR_SHAKE_VALID_EXIST => '已存在发布的活动',
        self::ERROR_SHAKE_AWARD_TEMPLATE_NOEXIST => '摇一摇活动明源奖项模板不存在',
        self::ERROR_REPORT_EXPORT_EXCEL => '导出excel文件失败',
        self::ERROR_OAM_AUTHORIZE => '登录超时或无访问权限',
        self::ERROR_REPORT_EXPORT_EMPTY_DATA => '过滤区间内无数据导出excel无效',
        self::ERROR_BUILDING_PAGE_ACCESS_INCREASE => '更新楼盘页面访问次数失败',
        self::ERROR_RECOMMEND_ROOM_ADD => '推荐房源失败',
        self::ERROR_RECOMMEND_ROOM_DELETE => '取消推荐房源失败',
        self::ERROR_RECOMMEND_ROOM_COUNT_LIMIT => '有效推荐楼盘数据不能超过两个',
        self::ERROR_SHARE_TEMPLATE_SAVE => '保存分享模板失败',
        self::ERROR_COUPON_SAVE => '领取优惠券失败',
        self::ERROR_COUPON_CODE_GENERATE => '领取优惠券号生成失败',
        self::ERROR_COUPON_FETCHED => '你已经领取过该优惠券',
        self::ERROR_COUPON_INVALID_ORDER => '订单支付超时，不能领取优惠券',
        self::ERROR_RECORD_LOG => '记录日志失败',
        self::ERROR_BUILDING_ROOM_SOLF_ONSHELF => '请先将房源下架',
        self::ERROR_BARGAIN_ROOM_EXCESS => '一个楼盘下的特价房源不能超过两个',
        self::ERROR_BARGAIN_ROOM_SAVE => '保存标识特价房源失败',
        self::ERROR_PACKET_ACTIVITY_SAVE => '保存红包活动失败',
        self::ERROR_PACKET_ACTIVITY_UPDATE => '更新红包活动失败',
        self::ERROR_PACKET_COMMON_SAVE => '保存普通红包活动失败',
        self::ERROR_PACKET_COMMON_DELETE => '删除普通红包活动失败',
        self::ERROR_PACKET_TRADE_SAVE => '保存交易红包失败',
        self::ERROR_PACKET_TRADE_UPDATE => '更新交易红包失败',
        self::ERROR_AWARD_SET_USED => '销券失败',
        self::ERROR_AWARD_RECORD_UPDATE => '更新中奖纪录失败',
        self::ERROR_FAVORITE => '收藏失败',
        self::ERROR_FAVORITE_CACEL => '取消收藏失败',
        self::ERROR_BUILDING_ROOM_DELETE_SOLD => '已售房源不能删除',
        self::ERROR_PEDIA_ARTICLE_SAVE => '保存文章失败',
        self::ERROR_SECKILL_ORDER_CODE_CANNOT_EMPTY => '秒杀订单号不能为空',
        self::ERROR_SYNC_SECKILL_ORDER_REFUND_STATUS => '同步秒杀单退款状态失败',
        self::ERROR_AVG_PRICE_SAVE => '保存均价失败',
        self::ERROR_UPLOAD_FILE => '上传图片失败',
        self::ERROR_BUNDLING_UNEXISTS_ORG => '绑定失败，绑定的开发商不存在',
        self::ERROR_BUNDLING_UNEXISTS_BUILDING => '绑定失败，绑定的项目不存在',
        self::ERROR_BUNDLING_SAVE => '保存绑定关联信息失败',
        self::ERROR_ZTCAPI_REQUEST_TIMEOUT => '接口超时',
        self::ERROR_ZTCAPI_INVALID_SIGN => '非法的签名',
        self::ERROR_ZTCAPI_INVALID_APPID => '无效的APPID',
        self::ERROR_SECKILL_ROOM_SECKILL_AMOUNT_EMPTY => '秒杀价不能为空',
        self::ERROR_SECKILL_ROOM_HOSETYPE_EMPTY => '秒杀户型不能为空',
        self::ERROR_BUILDING_PICS_EMPTY=>'楼盘相册不能为空',
        self::ERROR_BUILDING_PICS_EMPTY=>'楼盘相册不能为空',
        self::ERROR_APP_LOG_SAVE=>'保存程序日志失败',
        self::ERROR_BUILDING_PUBLISH=>'发布楼盘失败',
        self::ERROR_BUILDING_HAS_SHELF_ROOM_CANNOT_UNPUBLISH=>'楼盘下存在上架的秒杀房源或日常展示房源，不能取消发布',
        self::ERROR_BUILDING_UNPUBLISH=>'取消发布楼盘失败',
        self::ERROR_BUILDING_UNCOMPLETED_PUBLISH=>'楼盘未完成编辑，不能发布楼盘',
        self::ERROR_DELETED_ENTITY_SAVE => '保存已删除的实体数据失败',
        self::ERROR_BUILDING_ROOM_OR_HOUSE_TYPE_EXIST_DELETE=>'该楼盘存在房源或者户型，不能删除',
        self::ERROR_BUILDING_PUBLISHED_DELETE=>'已发布楼盘不能删除',
        self::ERROR_DAILY_ROOM_SAVE=>'保存日常展示房源失败',
        self::ERROR_DAILY_ROOM_SHELF_DELETE => '上架日常展示房源不能删除',
        self::ERROR_DAILY_ROOM_DELETE => '删除日常展示房源失败',
        self::ERROR_DAILY_ROOM_SHELF => '上架日常展示房源失败',
        self::ERROR_DAILY_ROOM_OFF_SHELF => '下架日常展示房源失败',
        self::ERROR_DAILY_ROOM_MOVE_POSITION => '移动日常展示房源位置失败',
        self::ERROR_DAILY_ROOM_NOT_EXISTS => '该日常展示房源不存在',
        self::ERROR_DAILY_ROOM_GUESS_PRICE_ADD => '保存猜价信息失败',
        self::ERROR_DAILY_ROOM_GUESS_PRICE_DUPLICATE => '不能重复保存，每个用户每套房源只能猜价一次',
        self::ERROR_DAILY_ROOM_TO_SECKILL_ROOM=>'参加秒杀失败',
        self::ERROR_SECKILL_ROOM_TO_DAILY_ROOM=>'转为日常展示房源失败',

        self::ERROR_CHOOSE_ROOM_DELETE=>'删除车位/房间失败',
        self::ERROR_CHOOSE_ROOM_SAVE=>'保存车位/房间失败',
        self::ERROR_CHOOSE_ROOM_SHELF=>'上架车位/房间失败',
        self::ERROR_CHOOSE_ROOM_UNSHELF=>'下架车位/房间失败',
        self::ERROR_CHOOSE_ROOM_ACTIVITY_PACKAGE_QR_IMAGES=>'打包下载所有已上架的车位/房间二维码图片失败',
        self::ERROR_CHOOSE_ROOM_NOT_EXISTS=>'车位/房间不存在',

        self::ERROR_CHOOSE_ROOM_BATCH_SHELF=>'批量上架车位/房间失败',
        self::ERROR_CHOOSE_ROOM_BATCH_UNSHELF=>'批量下架车位/房间失败',
        self::ERROR_CHOOSE_ROOM_ACTIVITY_INPUT_VERIFY => '在线开盘活动参数有误',
        self::ERROR_CHOOSE_ROOM_ACTIVITY_SAVE=> '保存在线开盘活动失败',
        self::ERROR_CHOOSE_ROOM_ACTIVITY_NOT_EXIST => '在线开盘活动不存在',
        self::ERROR_CHOOSE_ROOM_ACTIVITY_PUBLISH => '发布在线开盘活动失败',
        self::ERROR_CHOOSE_ROOM_ACTIVITY_UNPUBLISH  =>'取消在线开盘活动失败',
        self::ERROR_CHOOSE_ROOM_ACTIVITY_DELETE  => '删除在线开盘活动失败',
        self::ERROR_CHOOSE_ROOM_BATCH_SAVE  => '保存分批选房批次失败',
        self::ERROR_CHOOSE_ROOM_BATCH_DELETE  => '删除分批选房批次失败',
        self::ERROR_CHOOSE_ROOM_BATCH_NOT_EXIST  => '分批选房批次不存在',
        self::ERROR_CHOOSE_ROOM_OPEN_BATCH  => '开启分批选房失败',
        self::ERROR_CHOOSE_ROOM_CLOSE_BATCH  => '关闭分批选房失败',
        self::ERROR_CHOOSE_ROOM_USE_JOIN_BATCH  => '分批选房添加人员失败',

        self::ERROR_CHOOSE_ROOM_USER_IMPORT_ERROR => '导入认筹名单失败',
        self::ERROR_CHOOSE_ROOM_USER_SAVE => '保存认筹名单失败',
        self::ERROR_CHOOSE_ROOM_USER_DELETE => '删除认筹名单失败',
        self::ERROR_CHOOSE_ROOM_USER_IMPORT_EXCEL_ERROR => '不是有效的Execl文件或Execl文件格式不正确',
        self::ERROR_CHOOSE_ROOM_USER_IMPORT_NO_DATA_ERROR => 'Execl中无导入数据',
        self::ERROR_CHOOSE_ROOM_USER_EXPORT_ERROR => '数据不存在或已过期，请重新导入！',

        self::ERROR_CHOOSE_ROOM_ORDER_DELETE=>'删除开盘订单失败',
        self::ERROR_CHOOSE_ROOM_ORDER_SAVE => '保存开盘订单失败',
        self::ERROR_CHOOSE_ROOM_ORDER_CANCEL => '取消开盘订单失败',
        self::ERROR_CHOOSE_ROOM_ORDER_NOT_EXIST =>'开盘订单不存在',
        self::ERROR_CHOOSE_ROOM_USER_FAIL_LOGIN=>'认证失败，请输入正确的手机号和证件号码',
        self::ERROR_CHOOSE_ROOM_USER_INVALID=>'资格失效,请速与开发商联系',
        self::ERROR_CHOOSE_ROOM_USER_LOGIN_SAVE=>'保存认筹资格登录信息失败',
        self::ERROR_CHOOSE_ROOM_USER_LOGIN_EXCEED_OPENID_LIMIT=>'用户登录超过限制数量',
        self::ERROR_CHOOSE_ROOM_BATCH_LOCK_ROOM=>'批量锁定车位/房间失败',
        self::ERROR_CHOOSE_ROOM_BATCH_SHELF_FAIL_REASON_SAVE=>'保存批量上架车位/房间失败原因失败',
        self::ERROR_CHOOSE_ROOM_ADD_DBLOCK=>'添加车位/房间数据库锁失败',
        self::ERROR_CHOOSE_ROOM_COUNT_LIMIT=>'您已有选中车位/房间，如属误操作请联系开发商',
        self::ERROR_CHOOSE_ROOM_BOOK=>'预留失败',
        self::ERROR_CHOOSE_ROOM_UNBOOK=>'取消预留失败',
        self::ERROR_CHOOSE_ROOM_PROTOCOL_SAVE=>'保存协议失败',
        self::ERROR_CHOOSE_ROOM_ORDER_BATCH_SAVE=>'批量生成选房订单失败',
        self::ERROR_CHOOSE_ROOM_OFF_SHELF=>'该{type}已下架，请重新选择其他{type}',
        self::ERROR_CHOOSE_ROOM_SOLD_NOT_SHOW=>'不能查看已售房间/车位',
        self::ERROR_CHOOSE_ROOM_ACTIVITY_NOT_PUBLISH=>'活动暂未开始，敬请期待',
        self::ERROR_CHOOSE_ROOM_FAVORITE_OVER_LIMIT=>'收藏数超过限制',
        self::ERROR_CHOOSE_ROOM_ORDER_BETA_CLEAR=>'清除公测订单失败',
        self::ERROR_CHOOSE_ROOM_USER_CAN_CHOOSE_COUNT_SAVE=>'设置认筹用户可选套数失败',
        self::ERROR_CHOOSE_ROOM_ORDER_CONFIRM_PAY=>'确认收款操作失败',
        self::ERROR_CHOOSE_ROOM_SIGN_LOGIN=>'登陆失败',
        self::ERROR_CHOOSE_ROOM_SIGN_SUBMIT=>'确认签到失败',
        self::ERROR_CHOOSE_ROOM_FORCE_SIGN=>'请到签到岗进行签到',
        self::ERROR_CHOOSE_ROOM_RATE_LIMIT=>'同一用户统一时刻只能处理一次该操作',
        self::ERROR_CHOOSE_ROOM_USER_NEED_LOGIN=>'请进行活动登录',
        self::ERROR_CHOOSE_ROOM_SIGN_NEED_LOGIN=>'请进行签到岗登录',
        self::ERROR_CHOOSE_ROOM_SIGN_QR_INVALID=>'无效签到二维码',
        self::ERROR_CHOOSE_ROOM_ORDER_SYNC_TO_ERP=>'选房单同步到Erp失败',
        self::ERROR_CHOOSE_ROOM_SCREEN_SAVE=>'保存电视墙分屏失败',
        self::ERROR_CHOOSE_ROOM_SCREEN_BLOCK_SAVE=>'保存电视墙分屏楼栋失败',
        self::ERROR_CHOOSE_ROOM_SCREEN_BLOCK_SORT=>'楼栋排序失败',
        self::ERROR_CHOOSE_ROOM_SCREEN_SETTING_SAVE=>'保存电视墙分屏设置失败',
        self::ERROR_MIDDLEND_EDIT_OTHER_ORG_DATA=>'只能编辑本商家的数据',
        self::ERROR_MIDDLEND_QUERY_OTHER_ORG_DATA=>'只能查看本商家的数据',
        self::ERROR_CHOOSE_ROOM_ACTIVITY_NOT_BEGIN=>'在线开盘未开始',
        self::ERROR_CHOOSE_ROOM_ACTIVITY_DISCOUNT_SAVE=>'保存折扣失败',

        self::ERROR_GET_ERP_BOOKING_DETAIL=>'获取预约单详情失败',
        self::ERROR_GET_ERP_BOOKING_LIST=>'获取预约单列表失败',
        self::ERROR_ERP_BOOKING_LOCK_SAVE=>'保存预约单锁失败',

        self::ERROR_ORGANIZATION_SELLER_NOT_EXISTS=>'开发商微信商户号信息不存在',
        self::ERROR_CUSTOMER_SAVE=>'保存客户信息失败',
        self::ERROR_CUSTOMER_NOT_EXISTS=>'该客户不存在',
        self::ERROR_CUSTOMER_ORGANIZATION_OPEN_ID_EMPTY=>'客户信息中不存在云客公众号openId，不能支付到云客公众号openId',
        self::ERROR_CUSTOMER_SYNC_WX_USER_INFO=>'同步客户信息失败,请稍后再试',
        self::ERROR_SECKILL_ORDER_YUNKE_CANNOT_REFUND=>'支付到云客公众号商户的订单不支持退款操作',
		self::ERROR_PAY_MODE_INPUT_VERIFY=>'收款方式参数有误',
        self::ERROR_PAY_MODE_UNSETTLED_ORDER=>'还有尚未结清的订单，不能转换收款方式',
        self::ERROR_PAY_MODE_SAVE=>'保存收款方式失败',
        self::ERROR_CHOOSE_ROOM_QUESTION_CREATE=>'创建问题失败',
        self::ERROR_CHOOSE_ROOM_QUESTION_DELETE=>'编辑问题失败',
        self::ERROR_CHOOSE_ROOM_QUESTION_EDIT=>'编辑问题失败',
        self::ERROR_CHOOSE_ROOM_QUESTION_NOT_EXISTS=>'该验证问题不存在',
    ];

}
