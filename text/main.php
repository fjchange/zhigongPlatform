<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/text2/index.css" type="text/css"/>
    <link rel="stylesheet" href="/text2/basic.css" type="text/css"/>
    <link rel="shortcut icon" type="/image/x-icon" href="http://www.ido.ac.cn/images/favicon.ico" data-reactid="10"/>
    <link rel="stylesheet" href="/text2/index_login.css" type="text/css"/>
    <script type="/text/javascript"
            src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="/text/javascript"
            src="http://www.ido.ac.cn/login/js/common/jquery.form.js"></script>
    <script type="/text/javascript" src="http://www.ido.ac.cn/login/js/common/zoom.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js">
    </script>


    <title>OVO直供平台 </title>
</head>
<body>
    <div class="toper">
        <div class="toper_login">
            "您好，欢迎来到OVO直供网！"
            <a href="/index.php/login " data-toggle="login" class="a"><?php echo $str;?></a>
            <a href="/index.php/register" target='_blank'>[现在注册]</a>
        </div>
        <div class="toper_link">
            <div class="toper_cart">
                <a href="/index.php/custom/shopcar" target='_blank'>购物车</a>
                <a href="/index.php/login/information" target='_blank'>个人中心</a>
                <a href="/index.php/login/login_out">注销</a>
            </div>
        </div>
    </div>
    <!-- 顶栏结束-->

    <div class="header">
        <div class="header-left">
            <img src="http://www.ido.ac.cn/images/ovo.png" class="header-logo"/>
            <a href="/index.html" class="header-title">OVO</a>
            <p class="header-title-motto">移动终端一站采购平台</p>
        </div>
        <div class="header-middle">
        	<form action="/index.php/main/search_product" method="post">
            <input class="search_Box" type="text"  placeholder="请输入商品进行搜索" name="keyword" id="keyword">
            <input type="submit" class="search_Btn" value="搜索" name="search">
            </form>
        </div>
        <div class="header-right">
            <img class="header-contract" src="https://img10.360buyimg.com/n1/s180x180_jfs/t8161/224/1169699991/177635/eb2192c2/59b64641N088dd6ad.jpg">
        </div>
    </div>
    <!-- 快捷栏 -->
    <div class="navg nav">
        <div class="nav_cate" id="nav_cate" >
            <button type="button" class="btn nav_category_title dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown">所有产品分类</button>
            <ul class="dropdown-menu nav_categ" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation" class="dropdown-header">热销手机</li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="">iPhoneX</a>
                    <a role="menuitem" tabindex="-1" href="">MIX 2</a>
                    <a role="menuitem" tabindex="-1" href="">iPhone8</a>
                    <a role="menuitem" tabindex="-1" href="">HUAWEI MATE 9</a>
                    <a role="menuitem" tabindex="-1" href="">OPPO R11s</a>
                </li>
                <li class="divider" role="presentation"></li>
                <li role="presentation" class="dropdown-header">
                    手机品牌
                </li>
                <li role="presentation" >
                    <a role="menuitem" tabindex="-1" href="">苹果</a>
                    <a role="menuitem" tabindex="-1" href="">华为</a>
                    <a role="menuitem" tabindex="-1" href="">小米</a>
                    <a role="menuitem" tabindex="-1" href="">OPPO</a>
                    <a role="menuitem" tabindex="-1" href="">VIVO</a>
                    <a role="menuitem" tabindex="-1" href="">联想</a>
                    <a role="menuitem" tabindex="-1" href="">魅族</a>
                    <a role="menuitem" tabindex="-1" href="">三星</a>
                    <a role="menuitem" tabindex="-1" href="">LG</a>
                    <a role="menuitem" tabindex="-1" href="">索尼</a>
                    <a role="menuitem" tabindex="-1" href="">一加</a>
                </li>
                <li class="divider" role="presentation"></li>
                <li role="presentation" class="dropdown-header">
                    价格预算
                </li>
                <li>
                    <a role="menuitem" tabindex="-1" href="">5000元以上</a>
                    <a role="menuitem" tabindex="-1" href="">3000-5000元</a>
                    <a role="menuitem" tabindex="-1" href="">2000-3000元</a>
                    <a role="menuitem" tabindex="-1" href="">2000元以内</a>
                </li>
                <li class="divider" role="presentation"></li>
                <li role="presentation" class="dropdown-header">网络制式</li>
                <li>
                    <a role="menuitem" tabindex="-1" href="">移动4G  </a>
                    <a role="menuitem" tabindex="-1"  href="">联通4G</a>
                    <a role="menuitem" tabindex="-1" href="">电信4G  </a>
                    <a role="menuitem" tabindex="-1" href="">全网通  </a>
                </li>
            </ul>
        </div>
        <div class="nav_section">
            <ul>
                <li >
                    <a class="active" href="/index.html">首页</a>
                </li>
                <li>
                    <a href="">热门机型</a>
                </li>

                <li>
                    <a href="">苹果专区</a>
                </li>
                <li>
                    <a href="">安卓专区</a>
                </li>
                <li>
                    <a href="">我的直供</a>
                </li>
            </ul>
        </div>

    </div>

    <div class="main">
        <div class="nav_category">
            <h2 class="category_title">
                手机分类
            </h2>
            <div class="hot_sales">
                <h3>
                    热销手机
                </h3>
                <ul>
                    <li><a href="">iPhoneX</a></li>
                    <li><a href="">MIX 2</a></li>
                    <li><a href="">iPhone8</a></li>
                    <li><a href="">HUAWEI MATE 9</a></li>
                    <li><a href="">OPPO R11s</a></li>
                </ul>
            </div>
            <div class="brand">
                <h3>
                    手机品牌
                </h3>
                <ul>
                    <li><a href="">苹果</a></li>
                    <li><a href="">华为</a></li>
                    <li><a href="">小米</a></li>
                    <li><a href="">OPPO</a></li>
                    <li><a href="">VIVO</a></li>
                    <li><a href="">联想</a></li>
                    <li><a href="">魅族</a></li>
                    <li><a href="">三星</a></li>
                    <li><a href="">LG</a></li>
                    <li><a href="">索尼</a></li>
                    <li><a href="">一加</a></li>
                </ul>
            </div>
            <div class="price">
                <h3>
                    价格预算
                </h3>
                <ul>
                    <li><a href="">5000元以上</a></li>
                    <li><a href="">3000-5000元</a></li>
                    <li><a href="">2000-3000元</a></li>
                    <li><a href="">2000元以内</a></li>
                </ul>
            </div>
            <div class="network">
                <h3>网络制式</h3>
                <ul>
                    <li><a href="">移动4G  </a></li>
                    <li><a href="">联通4G</a></li>
                    <li><a href="">电信4G  </a></li>
                    <li><a href="">全网通  </a></li>
                </ul>
            </div>


        </div>
        <div class="banner" style="position: relative;overflow: hidden;width: 975px;">
            <ul id="slider" class="slider">
                <li >
                    <a href="">
                        <a href=""><img src="/images/slider_1.jpg" style="max-width:100%;" alt="">
                    </a>
                </li>
                <li>
                    <a>
                        <a href=""><img src="/images/slider_2.jpg" style="max-width:100%;" alt="">
                    </a>
                </li>
                <li>
                    <a href=""><img src="/images/slider_3.jpg" style="max-width:100%;" alt=""></a>
                </li>
            </ul>
            <div class="con"></div>
            <div class="bx left">
                <img src="/images/left.png">
            </div>
            <div class="bx right">
                <img src="/images/right.png">
            </div>
            <div class="bx-pager">
            </div>

        </div>
        <div class="more mb30">
            <div class="new">
                <a href=""><img src="/images/222.jpg" style="max-width:100%;" alt=""></a>
            </div>
            <div>
                <a href=""><img src="/images/333.png" style="max-width:100%;" alt=""></a>
            </div>
            <div>
                <!--<button  type="button" class="btn" data-toggle="collapse" data-target="#notice"   style="background-color: red">-->
                <img src="/images/555.png" style="max-width:100%;" alt="">
            </div>
        </div>
        <div class="panel-collapse collapse" id="notice">
            <div class="notice_title">
                <ul>
                    <li>
                        <a href="" class="RDZX">热点资讯</a>
                    </li>
                    <li>
                        <a href="" class="CXZX">促销资讯</a>
                    </li>
                    <li>
                        <a href="" class="JLZX">奖励资讯</a>
                    </li>
                </ul>
            </div>
            <div class="notice_list">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                </ul>
            </div>
        </div>
        <div class="product_list" >
            <div class="index_title title_o">
                <h2>
                    热销手机
                </h2>
            </div>
            <div class="index_product mb30" id="hot_sale">
                <ul class="index_product_list">
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59f085c324a69.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">iphone8 金色（4.7英寸）</a>
                                    <h3>零售价：￥5999</h3>
                                </h2>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59f088cd5442a.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">iphone6s 玫瑰金（4.7英寸）</a>
                                    <h3>零售价：￥3999</h3>
                                </h2>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59f0894cd403c.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">华为青春版 白色（5英寸）</a>
                                    <h3>零售价：￥1099</h3>
                                </h2>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59f0899aa5ba7.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">小米note4 香槟金（5英寸）</a>
                                    <h3>零售价：￥1099</h3>
                                </h2>
                            </dd>

                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59f08ade087f7.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">小米6 亮黑色（5.5英寸）</a>
                                    <h3>零售价：￥899</h3>
                                </h2>
                            </dd>

                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59f08a1f7ec8e.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">三星note 金色（5英寸）</a>
                                    <h3>零售价：￥1299</h3>
                                </h2>
                            </dd>

                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59f0894cd403c.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">华为mate8</a>
                                    <h3>零售价：￥1599</h3>
                                </h2>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59fe882e53132.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">华为畅享6s</a>
                                    <h3>零售价：￥1299</h3>
                                </h2>
                            </dd>
                        </dl>
                    </li>
                </ul>
                <div class="index_product_ad"><a href=""><img src="http://www.189zg.cn/attachments/adv/415/129/%E7%95%85%E4%BA%AB7p.jpg" alt=""></a></div>
            </div>
            <div class="index_title title_b">
                <h2>新品上市</h2>
            </div>
            <div class="index_product mb30" id="new_arrive">
                <ul class="index_product_list">
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59f085c324a69.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">iphone8 金色（4.7英寸）</a>
                                    <h3>零售价：￥5999</h3>
                                </h2>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59f088cd5442a.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">iphone6s 玫瑰金（4.7英寸）</a>
                                    <h3>零售价：￥3999</h3>
                                </h2>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59f0894cd403c.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">华为青春版 白色（5英寸）</a>
                                    <h3>零售价：￥1099</h3>
                                </h2>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59f0899aa5ba7.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">小米note4 香槟金（5英寸）</a>
                                    <h3>零售价：￥1099</h3>
                                </h2>
                            </dd>

                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59f08ade087f7.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">小米6 亮黑色（5.5英寸）</a>
                                    <h3>零售价：￥899</h3>
                                </h2>
                            </dd>

                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59f08a1f7ec8e.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">三星note 金色（5英寸）</a>
                                    <h3>零售价：￥1299</h3>
                                </h2>
                            </dd>

                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59fe882e53132.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">华为mate8</a>
                                    <h3>零售价：￥1599</h3>
                                </h2>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59fe882e53132.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">华为畅享6s</a>
                                    <h3>零售价：￥1299</h3>
                                </h2>
                            </dd>
                        </dl>
                    </li>
                </ul>
               <div class="index_product_ad"><a href=""><img src="http://www.189zg.cn/attachments/adv/415/129/%E7%95%85%E4%BA%AB7p.jpg" alt=""></a></div>

            </div>
            <div class="index_title title_g">
                <h2>特别推荐</h2>
            </div>
            <div class="index_product mb30" id="special_choice">
                <ul class="index_product_list">
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59f085c324a69.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">iphone8 金色（4.7英寸）</a>
                                    <h3>零售价：￥5999</h3>
                                </h2>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59f088cd5442a.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">iphone6s 玫瑰金（4.7英寸）</a>
                                    <h3>零售价：￥3999</h3>
                                </h2>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59f0894cd403c.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">华为青春版 白色（5英寸）</a>
                                    <h3>零售价：￥1099</h3>
                                </h2>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59f0899aa5ba7.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">小米note4 香槟金（5英寸）</a>
                                    <h3>零售价：￥1099</h3>
                                </h2>
                            </dd>

                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59f08ade087f7.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">小米6 亮黑色（5.5英寸）</a>
                                    <h3>零售价：￥899</h3>
                                </h2>
                            </dd>

                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59f08a1f7ec8e.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">三星note 金色（5英寸）</a>
                                    <h3>零售价：￥1299</h3>
                                </h2>
                            </dd>

                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59fe882e53132.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">华为mate8</a>
                                    <h3>零售价：￥1599</h3>
                                </h2>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="" class="img_tj"><img src="/image/59fe882e53132.jpg" alt=""></a></dt>
                            <dd class="index_val">
                                <h2><a href="">华为畅享6s</a>
                                    <h3>零售价：￥1299</h3>
                                </h2>
                            </dd>
                        </dl>
                    </li>
                </ul>
               <div class="index_product_ad"><a href=""><img src="http://www.189zg.cn/attachments/adv/415/129/%E7%95%85%E4%BA%AB7p.jpg" alt=""></a></div>

            </div>
        </div>
    </div>


    <div class="footer">

    </div>
    <div class="copyright">

    </div>
<!--    <div class="container">

        <div class="login hide fade" id="login">
            <h2 class="login_title">用户登陆</h2>
            <div class="login_detail">
                <img class="label" alt="账号" src="http://www.ido.ac.cn/login/images/account.png">
                <input type="text" class="account" id="account" value placeholder="账号">
                <img src="http://www.ido.ac.cn/login/images/key.png" alt="密码" class="label">
                <input type="password" class="password" id="password"  value placeholder="密码">
                <input type="text" class="valcode" id="valcode" value placeholder="验证码">
                <img id="valpic" class="valpic" width="100px" height="32px" onclick="this.src='checkcode.php?nocache='+Math.random();" src="checkcode.php" alt="验证码">
            </div>
            <div class="login_submit">
                <input type="button" class="logon" value="登陆">
                <input type="button" class="signup" value="注册">
            </div>
            <div class="login_more">
                <a href="" >忘记密码</a>
            </div>
        </div>
    </div>
    -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;"><div style="display:table; width:100%; height:100%;"><div style="vertical-align:middle; display:table-cell;"><div class="modal-dialog modal-sm" style="width:540px;">
        <div class="modal-content" style="border: none;">
            <div class="col-left"></div>
            <div class="col-right">
                <div class="modal-header">
                    <button type="button" id="login_close" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="loginModalLabel" style="font-size: 18px;">登录</h4>
                </div>
                <div class="modal-body">
                    <section class="box-login v5-input-txt" id="box-login">
                        <form id="login_form" action="" method="post" autocomplete="off">

                            <ul>
                                <li class="form-group"><input class="form-control" id="id_account_l" maxlength="50" name="account_l" placeholder="请输入邮箱账号/手机号" type="text"></li>
                                <li class="form-group"><input class="form-control" id="id_password_l" name="password_l" placeholder="请输入密码" type="password"></li>

                            </ul>
                        </form>
                        <p class="good-tips marginB10"><a id="btnForgetpsw" class="fr">忘记密码？</a>还没有账号？<a href="javascript:;" target="_blank" id="btnRegister">立即注册</a></p>
                        <div class="login-box marginB10">
                            <button id="login_btn" type="button" class="btn btn-micv5 btn-block globalLogin">登录</button>
                            <div id="login-form-tips" class="tips-error bg-danger" style="display: none;">错误提示</div>
                        </div>


                        <div class="threeLogin"><span>其他方式登录</span><a class="nqq" href="javascript:;"></a><a class="nwx" href="javascript:;"></a><!--<a class="nwb"></a>--></div>

                    </section>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="http://www.ido.ac.cn/login/js/common/Slider.js"></script>
    <script src="http://www.runoob.com/try/bootstrap/twitter-bootstrap-v2/docs/assets/js/jquery.js"></script>
    <script src="http://www.runoob.com/try/bootstrap/twitter-bootstrap-v2/js/bootstrap-modal.js"></script>
</body>
</html>