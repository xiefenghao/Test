<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"E:\xamp\htdocs\ht\public/../application/index\view\index\login.html";i:1569573010;}*/ ?>
﻿<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <link rel="dns-prefetch" href="//member-ssl.vipstatic.com">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit"/>
    <title>唯品会网站登录</title>
    <link href="Css/common-hash-f0cb94c0.css" type="text/css" rel="stylesheet" />
    <link href="Css/single-function-hash-f011981c.css" type="text/css" rel="stylesheet" />
    <script src="Scripts/jquery-1.10.2-hash-33c5c148.js" type="text/javascript"></script>
    <script src="Scripts/core3.1.0-hash-fb2b0f55.js" type="text/javascript"></script>
    <script type="text/javascript">
        var staticHost='https://user.vipstatic.com/passport';
        var domainHost='https://passport.vip.com';
        var imageHost='https://passport.vip.com/static';
        var ctx='';
        var abcType='';
    </script>
</head>
<body class="J-container">
<div class="c-header"
     passport_mars_sead_hover>
    <div class="c-header-inner">
        <div class="c-logo">
            <a class="c-logo-link"
               id="for-cascade-login-link"
               href="//www.vip.com">唯品会</a>
        </div>

        <div class="c-service"></div>
    </div>
</div>

    <div class="c-body  J-ads"
         data-adsid="ADSJ867S"
         data-bg="true">
        <div class="c-content  f-clearfix">
            <div class="c-login-panel  f-right">
                <div class="c-login-panel-body">
                    <div class="c-tab  c-login-tab     J-tab">
                        <div class="c-tab-nav">
                                <div class="c-tab-nav-item  c-tab-nav-item-qr  J-tab-nav-item  is-tab-nav-item-active"
                                     data-current-item="qr">扫码登录</div>
                            <div class="c-tab-nav-item  J-tab-nav-item  "
                                 data-current-item="form">账户登录</div>
                        </div>
                        <div class="c-tab-content">
                            <div class="c-tab-panel  J-tab-panel  ">
<div class="c-qr  J-qr">
    <div class="c-qr-group">
        <div class="c-qr-row  J-qr-row">
            <div class="c-qr-img-wrapper  J-qr-img-wrapper">
                <img src="Picture/blank-hash-669afadf.png"
                     class="J-qr-img"
                     width="150"
                     height="150"
                     alt="登录二维码">
                <div class="c-qr-mask">
                    <div class="c-qr-timeout-text">二维码已失效</div>
                    <a class="ui-btn-medium  ui-btn-primary  c-qr-timeout-button  J_fake_a  J-button-qr-retry"
                       role="button"
                       href="###">点击刷新</a>
                </div>
            </div><!--
                                         --><div class="c-qr-guide-img  J-qr-guide-img"></div>
        </div>
        <div class="c-qr-guide-text">
            <span class="c-icon  c-icon-scan"></span>打开<span class="u-text-highlight">唯品会APP-个人中心</span>，扫一扫登录
        </div>
    </div>

    <div class="c-qr-group  c-qr-group-success">
        <div class="c-icon  c-icon-qr-success"></div>
        <div class="c-qr-success-text">扫码成功！</div>
        <div class="c-qr-success-desc">请在手机上确认登录</div>
    </div>

    <div class="c-qr-group  c-qr-group-failure">
        <p class="c-qr-failure-text">
            <span class="vipFont  if-sigh">&#xe620;</span>出错了，请点击按钮重新获取二维码
        </p>
        <a class="ui-btn-medium  ui-btn-primary  c-qr-failure-button  J_fake_a  J-button-qr-retry"
           role="button"
           href="###">点击刷新</a>
    </div>
</div>
                            </div>
                            <div class="c-tab-panel  J-tab-panel  f-hide">
                                <div class="c-login-form  J-password-login-form  ">
<div class="m-passport-from" id="J_login_form">
        <div class="ui-form-item-group  c-form-error  J_item_group">
        <div id="J_form_error"></div>
        <div class="u-input-tip J_form_tip"><span class="text"></span></div>
    </div>
    <div class="c-form-item  has-form-item-icon  J_item_group">
        <div class="ui-form-item-group">
            <input id="J_login_name"
                   class="ui-input  u-input"
                   type="text"
                   name="loginName"
                   placeholder="手机号/用户名/邮箱"
                   passport_mars_sead_hover
                   passport_mars_sead_input='loginName'>
            <span class="c-icon  c-icon-account  c-icon-form"></span>
            <span class="u-input-warning vipFont if-wrong">&#xe621;</span>
            <span class="u-input-success vipFont if-success">&#xe61e;</span>
        </div>
        <div class="u-input-tip J_form_tip"><span class="text"></span></div>
    </div>

    <div class="c-form-item  has-form-item-icon  J_item_group">
        <div class="ui-form-item-group">
            <input id="J_login_pwd"
                   class="ui-input  u-input"
                   type="password"
                   name="password"
                   maxlength="20"
                   placeholder="密码"
                   passport_mars_sead_hover
                   passport_mars_sead_input='password'>
            <div class="ui-tooltips ui-tooltips-info ui-tooltips-bottom-left-arrow u-capslock-tip" id="J_capslock_tip">
                <div class="ui-tooltips-arrow">
                    <i class="arrow arrow-out">&#9670;</i>
                    <i class="arrow">&#9670;</i>
                </div>
                <div class="ui-tooltips-content f-nowrap">
                    <p>请注意，键盘大写已开启</p>
                </div>
            </div>
            <span class="c-icon  c-icon-password  c-icon-form"></span>
            <span class="u-input-warning vipFont if-wrong">&#xe621;</span>
            <span class="u-input-success vipFont if-success">&#xe61e;</span>
        </div>
        <div class="u-input-tip J_form_tip"><span class="text"></span></div>
    </div>

    <div class="c-form-item c-captcha-container J_item_group J-captcha-code-container z-u-form-item-warning f-hidden">
        <div id="J-captcha-code" class="ui-form-item-group"></div>
        <div class="u-input-tip J_form_tip J-captcha-tip"><span class="text"></span></div>
    </div>

    <div class="c-form-item">
        <div class="ui-form-item-group  ui-form-item-group-with-gap">
            <div class="u-other-item">
                <div class="f-left">
                    <a href="javascript:;"
                       class="c-login-switch  J-switch-to-sms-login">短信验证登录</a>
                </div>
                <div class="u-cannot-login J-password-login-forget f-right">
                <a href="https://safe.vip.com/login/findPW/page"
                   class="i-forget-link"
                   target="_blank" rel="noopener"
                   seed-id="btnForgot">忘记密码</a>
                </div>
            </div>
        </div>
    </div>

    <div class="c-form-item  f-hidden  J_item_group  J_vpal_checkbox_model">
        <div class="ui-form-item-group  m_vpal_checkbox">
            <div class="ui-checkbox mr0 i-vpal-checkbox">
                <input type="checkbox" id="J_vpal_agree" name="agree" class="ui-checkbox-normal" value="1">
                <label for="J_vpal_agree" class="ui-checkbox-simulation"></label>
            </div>
            <div for="J_vpal_agree" class="u-provision-txt">
                我已阅读并接受以下条款：<a href="https://i.vpal.com/clause.html" class="u-link" target="_blank">《唯品支付用户服务协议》</a>
            </div>
        </div>
        <div class="u-input-tip J_form_tip"><span class="text"></span></div>
    </div>

    <div class="c-form-item-submit">
        <div class="u-form-submit">
            <button type="submit"
                    class="ui-btn-large ui-btn-primary ui-btn-loading u-submit-function"
                    id="J_login_submit"
                    passport_mars_sead_hover
                    seed-id="btnLogin">
                <span class="ui-btn-loading-before">登录</span>
                <span class="ui-btn-loading-after"><i class="ii-loading-gray-16x16"></i><span class="ui-btn-txt">处理中...</span></span>
            </button>
        </div>
    </div>
</div>
                                </div>
                                <div class="c-mobile-login-form  J-mobile-login-form  f-hide">
<div class="m-passport-from" id="J_login_form">
        <div class="ui-form-item-group  c-form-error  J_item_group">
        <div id="J_sms_form_error"></div>
        <div class="u-input-tip J_form_tip"><span class="text"></span></div>
    </div>
    <div class="c-form-item  has-form-item-icon  J_item_group">
        <div class="ui-form-item-group">
            <input id="J_mobile_login_phone"
                   class="ui-input  u-input"
                   type="text"
                   name="loginName"
                   maxlength="13"
                   placeholder="请输入手机号"
                   passport_mars_sead_hover
                   passport_mars_sead_input='loginPhone'>
            <span class="c-icon  c-icon-mobile  c-icon-form"></span>
            <span class="u-input-success vipFont if-success">&#xe61e;</span>
        </div>
        <div class="u-input-tip J_form_tip"><span class="text"></span></div>
    </div>

    <div class="c-form-item c-captcha-container J_item_group J-mobile-secure-code-container z-u-form-item-warning f-hidden">
        <div id="J-mobile-secure-code" class="ui-form-item-group"></div>
        <div class="u-input-tip J_form_tip J-captcha-tip"><span class="text"></span></div>
    </div>

    <div class="c-form-item  has-form-item-icon  c-font-size-zero  J_item_group">
        <div class="ui-form-item-group  adjust-tip-icon">
            <input id="J_mobile_login_sms_input"
                   class="ui-input  c-mobile-login__sms-input"
                   type="text"
                   name="sms"
                   maxlength="6"
                   placeholder="请输入短信验证码"
                   passport_mars_sead_hover
                   passport_mars_sead_input='sms'>
            <a href="javascript:;"
               role="button"
               id="J_mobile_login_sms_send"
               class="ui-btn-medium ui-btn-disable btn-verify-code c-mobile-login__sms-send"
               passport_mars_sead_hover>获取验证码</a>
            <span class="c-icon  c-icon-captcha  c-icon-form"></span>
            <span class="u-input-success vipFont if-success">&#xe61e;</span>
        </div>
        <div class="u-input-tip J_form_tip"><span class="text"></span></div>
    </div>

    <div class="c-form-item">
        <div class="ui-form-item-group  ui-form-item-group-with-gap">
            <a href="javascript:;" class="c-login-switch  J-switch-to-password-login">密码验证登录</a>
        </div>
    </div>

    <div class="c-form-item  f-hidden  J_item_group  J_mobile_login_checkbox_model">
        <div class="ui-form-item-group  m_vpal_checkbox">
            <div class="ui-checkbox mr0 i-vpal-checkbox">
                <input type="checkbox" id="J_mobile_login_agree" name="agree" class="ui-checkbox-normal" value="1">
                <label for="J_mobile_login_agree" class="ui-checkbox-simulation"></label>
            </div>
            <div for="J_mobile_login_agree" class="u-provision-txt">
                我已阅读并接受以下条款：<a href="https://i.vpal.com/clause.html" class="u-link" target="_blank">《唯品支付用户服务协议》</a>
            </div>
        </div>
        <div class="u-input-tip J_form_tip"><span class="text"></span></div>
    </div>

    <div class="c-form-item-submit">
        <div class="u-form-submit">
            <button type="submit"
                    class="ui-btn-large ui-btn-primary ui-btn-loading u-submit-function"
                    id="J_mobile_login_submit"
                    passport_mars_sead_hover
                    seed-id="btnLogin">
                <span class="ui-btn-loading-before">登录</span>
                <span class="ui-btn-loading-after"><i class="ii-loading-gray-16x16"></i><span class="ui-btn-txt">处理中...</span></span>
            </button>
        </div>
    </div>
</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-login-panel-footer">
<div class="c-login-third  f-clearfix  J-login-third">
                <div class="c-login-third-special">
                    <div class="c-login-third-wechat-wrapper  ">
                        <a class="c-login-third-wechat  "
                           href="//passport.vip.com/login/weixin"
                           target="_blank" rel="noopener"
                           mars_sead="passport_bottom_weixin_button"
                           >
                            <span class="c-login-third-wechat-icon"></span>
                            <span class="c-login-third-wechat-text">微信</span>
                        </a>
                    </div>
                </div>

    <div class="f-right">
        <a class="c-register-link J-password-login-register"
           target="_blank" rel="noopener"
           href="https://passport.vip.com/register">免费注册</a>
    </div>

    <div class="c-login-third-content" passport_mars_sead_hover>
        <div class="c-login-third-main">
            <ul class="c-login-third-main-list">
                    <li class="c-login-third-main-item  is-login-third-item-disabled">
                        <a class="c-login-third-link  J-third-item-disabled"
                           href="javascript:;"
                           target="_blank" rel="noopener"
                           mars_sead="passport_bottom_weibo_button"
                           title="新浪微博登录方式正在升级，暂不可用，请选择其他方式登录">新浪微博</a>
                    </li>
                    <li class="c-login-third-main-item  ">
                        <a class="c-login-third-link  "
                           href="//passport.vip.com/login/qq"
                           target="_blank" rel="noopener"
                           mars_sead="passport_bottom_qq_button"
                           >QQ</a>
                    </li>
                    <li class="c-login-third-main-item  ">
                        <a class="c-login-third-link  "
                           href="//passport.vip.com/login/alipay"
                           target="_blank" rel="noopener"
                           mars_sead="passport_bottom_alipay_button"
                           >支付宝</a>
                    </li>
            </ul><!--
         --><a href="###" role="button"
               class="c-login-third-more-button  J-button-login-more  J_fake_a"
               mars_sead="passport_bottom_more_button">
                <span class="c-login-third-more-expand">更多<span class="vipFont  i-arrow-down">&#xe616;</span></span>
                <span class="c-login-third-more-collapse">收起<span class="vipFont  i-arrow-up">&#xe615;</span></span>
            </a>
        </div>

        <div class="c-login-third-more">
            <ul class="c-login-third-other-list">
                    <li class="c-login-third-other-item  ">
                        <a href="//passport.vip.com/login/netease"
                           target="_blank" rel="noopener"
                           class="c-login-third-link  "
                           mars_sead="passport_bottom_netease_button"
                           >网  易</a>
                    </li>
                    <li class="c-login-third-other-item  ">
                        <a href="//passport.vip.com/login/renren"
                           target="_blank" rel="noopener"
                           class="c-login-third-link  "
                           mars_sead="passport_bottom_renren_button"
                           > 人人网 </a>
                    </li>
                    <li class="c-login-third-other-item  ">
                        <a href="//passport.vip.com/login/kaixin001"
                           target="_blank" rel="noopener"
                           class="c-login-third-link  "
                           mars_sead="passport_bottom_happy_button"
                           >开心网</a>
                    </li>
                    <li class="c-login-third-other-item  ">
                        <a href="//passport.vip.com/login/bestpay"
                           target="_blank" rel="noopener"
                           class="c-login-third-link  "
                           mars_sead="bottom_yizhifu_button"
                           >翼支付</a>
                    </li>
            </ul>
            <p class="J-login-third-offline-notice  c-login-third-offline-notice" mars_sead="PC_login_page_offline_notice_click">
                <a href="https://passport.vip.com/login/third_bottom_tips" target="_blank" rel="noopener">关于建行、中国移动登录失效通知，请查看</a>
            </p>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>

<script type="text/html" id="J-tmpl-account">
    <div class="c-account  J-account">
        <div class="ui-form-item-group  c-account-error-notice  f-hidden  J_item_group  J_hidden">
            <div id="J_username_error"></div>
            <div class="u-input-tip J_form_tip"><span class="text"></span></div>
        </div>
        <p class="c-account-title">登录后请尽快修改登录密码</p>
        <div class="c-account-scroll-wrapper">
            <div class="c-account-scroll">
                <ul class="c-account-list  J-account-list">
                    {{each extend.selectAccounts as value i}}
                    <li class="c-account-item  J-account-item">
                        <div class="c-account-item-inner">
                            <span class="ui-radio">
                                <input type="radio"
                                       name="username"
                                       class="ui-radio-normal"
                                       value="{{value.selectId}}"
                                       data-username={{value.userName}}>
                                <label class="ui-radio-simulation"></label>
                            </span><!--
                         --><label class="ui-label">{{value.userName}}</label>
                        </div>
                    </li>
                    {{/each}}
                </ul>
            </div>
        </div>
        <a href="javascript:;"
           mars_sead="383|2|4|18"
           role="button"
           class="ui-btn-large  ui-btn-primary  c-account-submit-button  J-username-submit"
           id="J_login_submit">
            <span class="ui-btn-loading-before">确定</span>
            <span class="ui-btn-loading-after"><i class="ii-loading-gray-16x16"></i><span class="ui-btn-txt">处理中...</span></span>
        </a>
    </div>
</script>
<div class="c-footer">
    <p class="c-copyright">Copyright 2008-2019 vip.com，All Rights Reserved ICP证：粤 B2-20080329</p>
</div>
<script  type="text/html" id="J_risktips_tpl">
<div class="ui-dialog ui-dialog-task ui-dialog-medium z-ui-dialog-in u-risk-dialog " style="left:100px;top:100px;" id="J_risktips" >
    <p class="ui-dialog-title u-dialog-title"> 你好，<span class="u-dialog-username"><span class="J_risk_username u-dialog-username"></span>，</span>系统检测到您的账号有异常，请修改登录密码!</p>
    <div class="ui-dialog-inner">
        <a href="javascript:;" role="button" class="J_risktips_close f-hidden ui-dialog-close vipFont">&#xe609;</a>
        <div class="ui-dialog-content" id="J_risktips_content">
            <div class="m-input-box">
                <label for="J_risk_pwd1" class="ui-label">设置新密码</label>
                <!-- z-ui-form-item-warning z-ui-tooltips-in  -->
                <!-- z-ui-tooltips-note-in -->
                <div id="J_show_warn1" class="ui-form-item-group">
                    <div class="ui-tooltips ui-tooltips-warning ui-tooltips-bottom-left-arrow u-tooltips-warming">
                        <div class="ui-tooltips-arrow">
                            <i class="arrow arrow-out">&#9670;</i>
                            <i class="arrow">&#9670;</i>
                        </div>
                        <div class="ui-tooltips-content">
                            <p class="ui-tooltips-msg"><i class="vipFont if-sigh">&#xe603;</i><span id="J_err_msg1" class="J_err_msg">请输入字母、数字、符号至少两种以上组合密码</span></p>
                        </div>
                    </div>
                    <div class="ui-tooltips ui-tooltips-info ui-tooltips-bottom-left-arrow u-tooltips-note">
                        <div class="ui-tooltips-arrow">
                            <i class="arrow arrow-out">&#9670;</i>
                            <i class="arrow">&#9670;</i>
                        </div>
                        <div class="ui-tooltips-content">
                            <p id="J_warn_msg1" class="J_warn_msg ui-tooltips-msg u-tooltips-info">密码不能少于6位</p>
                        </div>
                    </div>
                    <input type="password" id="J_risk_pwd1" name="J_risk_pwd1" class="J_risk_pwd ui-input" data-placeholder="请输入新登录密码" maxlength="20" placeholder="请输入新登录密码">
                </div>
            </div>
            <div class="m-passport-box">
                <div  id="J_degree" class="f-hidden m-passport-line z-step-0">
                    <span class="step step-1"></span>
                    <span class="step step-2"></span>
                    <span class="step step-3"></span>
                    <span class="u-progess-text">弱</span>
                </div>
            </div>
            <div class="m-input-box">
                <label for="J_risk_pwd2" class="ui-label">确认新密码</label>
                <div id="J_show_warn2" class="ui-form-item-group">
                    <div class="ui-tooltips ui-tooltips-warning ui-tooltips-bottom-left-arrow u-tooltips-warming">
                        <div class="ui-tooltips-arrow">
                            <i class="arrow arrow-out">&#9670;</i>
                            <i class="arrow">&#9670;</i>
                        </div>
                        <div class="ui-tooltips-content">
                            <p class="ui-tooltips-msg"><i class="vipFont if-sigh">&#xe603;</i><span id="J_err_msg2" class="J_err_msg">请输入字母、数字、符号至少两种以上组合密码</span></p>
                        </div>
                    </div>
                    <div class="ui-tooltips ui-tooltips-info ui-tooltips-bottom-left-arrow u-tooltips-note">
                        <div class="ui-tooltips-arrow">
                            <i class="arrow arrow-out">&#9670;</i>
                            <i class="arrow">&#9670;</i>
                        </div>
                        <div class="ui-tooltips-content">
                            <p id="J_warn_msg2" class="J_warn_msg ui-tooltips-msg u-tooltips-info">密码不能少于6位</p>
                        </div>
                    </div>
                    <input type="password" id="J_risk_pwd2" name="J_risk_pwd2" class="J_risk_pwd ui-input" data-placeholder="请重复上面的密码" placeholder="请重复上面的密码" maxlength="20">
                </div>
            </div>
            <!-- ui-btn-disable  z-ui-btn-loading -->
            <div class="ui-dialog-command">
                <a href="javascript:;" role="button" id="J_submit_editorpwd" class="ui-btn-medium ui-btn-primary ui-btn-loading ui-btn-disable u-risk-submit">
                    <span class="ui-btn-loading-before">提交</span>
                    <span class="ui-btn-loading-after">提交中...</span>
                </a>
            </div>
        </div>
        <div class="ui-dialog-content f-hidden" id="J_risk_succ">
            <h3 class="ui-dialog-tips f-text-center"><span class="text"><i class="vipFont if-success if-size-32">&#xe602;</i>恭喜，修改密码成功！</span></h3>
            <div class="ui-dialog-command"><a id="J_risk_iknow" href="javascript:;" role="button" class="ui-btn-medium ui-btn-primary">我知道了</a></div>
            <p class="u-dialog-time"><i class="J_risk_second u-dialog-second">3</i>秒后自动关闭</p>
        </div>
        <div class="ui-dialog-content f-hidden" id="J_risk_fail">
            <h3 class="ui-dialog-tips f-text-center"><span class="text"><i class="vipFont if-sigh if-size-32">&#xe603;</i>更新密码失败，系统出了点小问题</span></h3>
            <div class="ui-dialog-command"><a id="J_risk_again" href="javascript:;" role="button" class="ui-btn-medium ui-btn-primary">再试一次</a></div>
            <p class="u-dialog-time"><i class="J_risk_second u-dialog-second">3</i>秒后自动关闭</p>
        </div>
    </div>
</div>
</script>
<script type="text/html" id="J_loginChallenge_tpl">
    <div class="u-login-challenge-dialog">
        <h2 class="ui-dialog-title">提示</h2>
        <div class="ui-dialog-inner">
            <div class="ui-dialog-content">
                <p>您的账号存在安全隐患，需要您先验证身份！</p>
                <p><span class="u-left-time">3</span>秒后身份验证</p>
            </div>
            <div class="ui-dialog-command"><a href="javascript:;" role="button" class="ui-btn-medium ui-btn-primary u-loginChallenge-btn">确定</a></div>
        </div>
    </div>
</script>

    <script>
        $(function () {
            $.Loader.advScript({
                name: 'phone',
                url: '//member-ssl.vipstatic.com/js/public/safe/1/bind-phone-component-hash-180b022e.js'
            }, {
                name: 'login',
                url: '//member-ssl.vipstatic.com/js/public/passport/1/login-hash-85962b7b.js',
                requires: ['phone']
            }, {
                name: 'mars',
                url: '//3rd.vipstatic.com/mars/mars.js'
            }, {
                name: 'captcha',
                url: '//captcha.vip.com/getbootstrap'
            }, {
                name: 'captchaInit',
                def: function () {
                    if (window.VipSecureCode) {
                        var initOpt = {
                            parseJSON: $.parseJSON,
                            stringifyJSON: $.stringifyJSON
                        };
                        /*global VipSecureCode*/
                        VipSecureCode.init(initOpt);
                    }
                },
                requires: ['captcha']
            });
        });
    </script>

    <script type="text/javascript">
        $.Var.set('isShowQr', true);
        $.Var.set('isShowQrFirst', true);
        $.Var.set('qrScanTime', 2000);

        window.VTM = {
            sessionUser: {
                id: $.Cookie.get('VipRUID'),
                name: $.Cookie.get('VipRNAME')
            },
            pageId: 101
        };

        (function () {
            var _script = document.createElement("script");
            _script.src = "https://ms.vipstatic.com/vtm/vtm_config_res/prod/vtm.js" +
                (window.location.href.indexOf("preview=1") != -1 ? "?preview=1" : "");
            document.body.appendChild(_script);
        })();
    </script>
</body>
</html>
