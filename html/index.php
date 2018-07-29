<!DOCTYPE html>
<html lang="vi" xmlns:fb="//www.facebook.com/2008/fbml" class="no-js">
<head>
    <meta charset="utf-8"/>
    <title>B.W. Black Wallet</title>
    <?php
    $base_url = "http://localhost/black_wallet/html/";
    $base_uri = "/black_wallet/html/";
    ?>
    <link href="<?= $base_uri ?>favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="<?= $base_uri ?>css/app.css"/>
    <script>
        const BASE_URL = "<?=$base_url?>",
            BASE_URI = "<?=$base_uri?>",
            SITE_DIR = "<?=$base_uri?>",
            LANG = "vn";
    </script>
    <meta name="robots" content="noindex, nofollow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <script src="<?= $base_uri ?>js/lib/library.min.js"></script>
</head>
<body class="body" data-ip="0.0.0.0">
<div class="main-wrapper">
<header>
    <div class="main-header on-top">
        <div class="row expanded align-justify align-middle">
            <div class="logo shrink column">
                <h1 class="is-hidden">B.W. Black Wallet</h1>
                <a title="B.W. Black Wallet" href="#"><img src="http://blackwallet.top/wp-content/uploads/2018/03/retina2.png" alt=""></a>
            </div>
            <div class="column shrink">
                <div class="main-nav">
                    <div class="title-bar" data-responsive-toggle="toogle-nav" data-hide-for="large">
                        <button class="menu-icon" type="button" data-toggle="toogle-nav"></button>
                        <div class="title-bar-title">Menu</div>
                    </div>
                    <div class="top-bar" id="toogle-nav" data-animate="fade-in fade-out">
                        <div class="top-bar-left">
                            <ul class="parent_nav nav menu" data-responsive-menu="accordion large-dropdown">
                                <li><a class="active" title="" href="/">Trang chủ</a></li>
                                <li><a title="" href="#">Blog</a></li>
                                <li>
                                    <a title="" href="#">Dịch vụ</a>
                                    <ul class="vertical menu nested">
                                        <li><a href="#">Cryptocurrency Trading Training</a></li>
                                        <li><a href="#">Cryptocurrency Trading</a></li>
                                        <li><a href="#">Bitcoin Mining</a></li>
                                    </ul>
                                </li>
                                <li><a title="" href="#">Khóa học</a></li>
                                <li><a title="Liên hệ" href="#">Liên hệ</a></li>
                                <li class="nav-bg"><a href="#">Mua sách</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-bar">&nbsp;</div>
</header>
<main>
    <div class="home-slides">
        <div id="jslides_1" class="slides-box jslides-wrapper">
            <!-- Loading Screen -->
            <div data-u="loading" class="jl-005-circles jloading">
                <img src="<?=$base_uri?>img/circles.svg" />
            </div>
            <!-- content list -->
            <div data-u="slides" class="jslides">
                <div data-p="225">
                    <img data-u="image" src="<?=$base_uri?>img/tmp/001.jpg" />
                    <div data-u="caption" data-t="0" style="position:absolute;top:120px;left:75px;width:470px;height:220px;">
                        <img style="position:absolute;top:0px;left:0px;width:470px;height:220px;" src="<?=$base_uri?>img/tmp/c-phone-horizontal.png" />
                        <div style="position:absolute;top:4px;left:45px;width:379px;height:213px;overflow:hidden;">
                            <img data-u="caption" data-t="1" style="position:absolute;top:0px;left:0px;width:379px;height:213px;" src="<?=$base_uri?>img/tmp/c-slide-1.jpg" />
                            <img data-u="caption" data-t="2" style="position:absolute;top:0px;left:379px;width:379px;height:213px;" src="<?=$base_uri?>img/tmp/c-slide-3.jpg" />
                        </div>
                        <img style="position:absolute;top:4px;left:45px;width:379px;height:213px;" src="<?=$base_uri?>img/hinh/c-navigator-horizontal.png" />
                        <img data-u="caption" data-t="3" style="position:absolute;top:476px;left:454px;width:63px;height:77px;" src="<?=$base_uri?>img/hand.png" />
                    </div>
                </div>
                <div data-p="225">
                    <img data-u="image" src="<?=$base_uri?>img/tmp/002.jpg" />
                </div>
                <div data-p="225">
                    <img data-u="image" src="<?=$base_uri?>img/tmp/003.jpg" />
                    <div style="position:absolute;top:30px;left:30px;width:480px;height:130px;font-family:'Roboto Condensed',sans-serif;font-size:40px;color:#000000;line-height:1.5;padding:5px 5px 5px 5px;box-sizing:border-box;background-color:rgba(255,188,5,0.8);background-clip:padding-box;">TOUCH SWIPE
                        <br />
                        RESPONSIVE SLIDER
                    </div>
                    <div style="position:absolute;top:300px;left:30px;width:480px;height:130px;font-family:'Roboto Condensed',sans-serif;font-size:30px;color:#000000;line-height:1.27;padding:5px 5px 5px 5px;box-sizing:border-box;background-color:rgba(255,188,5,0.8);background-clip:padding-box;">Build your slider with anything, includes image, svg, text, html, photo, picture content</div>
                </div>
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jb032 jnavigator" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i jprototype">
                    <svg viewbox="0 0 16000 16000">
                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="ja051 jarrow jarrow-left" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewbox="0 0 16000 16000">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="ja051 jarrow jarrow-right" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewbox="0 0 16000 16000">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
        </div>
    </div>
    <div class="consulting-package">
        <div class="row columns">
            <h3>Chúng tôi có 4 gói tư vấn đầu tư chính dành cho quý khách hàng</h3>
        </div>
        <div class="row align-spaced small-up-1 medium-up-2 large-up-4">
            <div class="column">
                <div class="item">
                    <span class="res res-custom strict-h"><img src="https://kolyoum.bdaia.com/kolyoum-times/wp-content/uploads/sites/9/2018/04/119-616x482.jpeg" alt=""></span>
                    <a class="cover-trigger" href="#" title="" tabindex="0"></a>
                    <div class="cover-overlay">
                        <div class="cover-overlay-content">
                            <h4><a href="#" title="" tabindex="0">This Man Has Flown More Than Anyone Else in the World</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="item">
                    <span class="res res-custom strict-h"><img src="https://kolyoum.bdaia.com/kolyoum-times/wp-content/uploads/sites/9/2018/04/101-616x482.jpeg" alt=""></span>
                    <a class="cover-trigger" href="#" title="" tabindex="0"></a>
                    <div class="cover-overlay">
                        <div class="cover-overlay-content">
                            <h4><a href="#" title="" tabindex="0">U.S. consumer confidence rebounds; new home sales rise</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="item">
                    <span class="res res-custom strict-h"><img src="https://kolyoum.bdaia.com/kolyoum-times/wp-content/uploads/sites/9/2018/04/102-616x482.jpeg" alt=""></span>
                    <a class="cover-trigger" href="#" title="" tabindex="0"></a>
                    <div class="cover-overlay">
                        <div class="cover-overlay-content">
                            <h4><a href="#" title="" tabindex="0">Very good chance of a U.S.-China trade deal: Trump</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="item">
                    <span class="res res-custom strict-h"><img src="https://kolyoum.bdaia.com/kolyoum-times/wp-content/uploads/sites/9/2018/04/128-616x482.jpg" alt=""></span>
                    <a class="cover-trigger" href="#" title="" tabindex="0"></a>
                    <div class="cover-overlay">
                        <div class="cover-overlay-content">
                            <h4><a href="#" title="" tabindex="0">Southwest Has Summer Flights on Sale Starting at $44</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-col-wrapper col-wrapper">
        <div class="row">
            <div class="column l">
                <div class="home-articles-box articles-box">
                    <h3><span>Latest News</span></h3>
                    <div class="row small-up-1 medium-up-2 large-up-3">
                        <div class="column">
                            <div class="item">
                                <div class="cat"><a title="U.S." href="#">U.S.</a></div>
                                <a href="#" class="res res-16by9"><img src="https://kolyoum.bdaia.com/kolyoum-times/wp-content/uploads/sites/9/2018/04/128-406x233.jpg" alt=""></a>
                                <h5 class="title"><a href="#" title="">Southwest Has Summer Flights on Sale Starting at $44</a></h5>
                                <div class="meta">
                                    <div>
                                        <span class="author">
                                            <a href="#" title="Amr Sadek"><i class="fa fa-user-o" aria-hidden="true"></i> Amr Sadek</a>
                                        </span>
                                        <span class="date">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span>April 24, 2018</span>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="comment">
                                            <a href="#" title=""><i class="fa fa-comments" aria-hidden="true"></i> 0</a>
                                        </span>
                                        <span class="view">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            <span>7</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="item">
                                <div class="cat"><a title="World" href="#">World</a></div>
                                <a href="#" class="res res-16by9"><img src="https://kolyoum.bdaia.com/kolyoum-times/wp-content/uploads/sites/9/2018/04/dunkin-donuts-DONUTFRIES0418-406x233.jpg" alt=""></a>
                                <h5 class="title"><a href="#" title="">‘Donut Fries’ Are the Dunkin’ Donuts Snack We’ve All Been Waiting</a></h5>
                                <div class="meta">
                                    <div>
                                        <span class="author">
                                            <a href="#" title="Amr Sadek"><i class="fa fa-user-o" aria-hidden="true"></i> Amr Sadek</a>
                                        </span>
                                        <span class="date">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span>April 24, 2018</span>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="comment">
                                            <a href="#" title=""><i class="fa fa-comments" aria-hidden="true"></i> 0</a>
                                        </span>
                                        <span class="view">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            <span>7</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="item">
                                <div class="cat"><a title="Magazine" href="#">Magazine</a></div>
                                <a href="#" class="res res-16by9"><img src="https://kolyoum.bdaia.com/kolyoum-times/wp-content/uploads/sites/9/2018/04/126-406x233.jpeg" alt=""></a>
                                <h5 class="title"><a href="#" title="">Unseasonable Snow in April Could Mess Up Your Travel Plans This</a></h5>
                                <div class="meta">
                                    <div>
                                        <span class="author">
                                            <a href="#" title="Amr Sadek"><i class="fa fa-user-o" aria-hidden="true"></i> Amr Sadek</a>
                                        </span>
                                        <span class="date">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span>April 24, 2018</span>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="comment">
                                            <a href="#" title=""><i class="fa fa-comments" aria-hidden="true"></i> 0</a>
                                        </span>
                                        <span class="view">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            <span>7</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="item">
                                <div class="cat"><a title="Travel" href="#">Travel</a></div>
                                <a href="#" class="res res-16by9"><img src="https://kolyoum.bdaia.com/kolyoum-times/wp-content/uploads/sites/9/2018/04/125-406x233.jpeg" alt=""></a>
                                <h5 class="title"><a href="#" title="">U.K. Cracks Down on Drunk Passengers With Proposal to Put</a></h5>
                                <div class="meta">
                                    <div>
                                        <span class="author">
                                            <a href="#" title="Amr Sadek"><i class="fa fa-user-o" aria-hidden="true"></i> Amr Sadek</a>
                                        </span>
                                        <span class="date">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span>April 24, 2018</span>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="comment">
                                            <a href="#" title=""><i class="fa fa-comments" aria-hidden="true"></i> 0</a>
                                        </span>
                                        <span class="view">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            <span>7</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="item">
                                <div class="cat"><a title="Travel" href="#">Travel</a></div>
                                <a href="#" class="res res-16by9"><img src="https://kolyoum.bdaia.com/kolyoum-times/wp-content/uploads/sites/9/2018/04/124-406x233.jpeg" alt=""></a>
                                <h5 class="title"><a href="#" title="">A Snowstorm Is Coming for the U.S. Tomorrow. Again</a></h5>
                                <div class="meta">
                                    <div>
                                        <span class="author">
                                            <a href="#" title="Amr Sadek"><i class="fa fa-user-o" aria-hidden="true"></i> Amr Sadek</a>
                                        </span>
                                        <span class="date">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span>April 24, 2018</span>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="comment">
                                            <a href="#" title=""><i class="fa fa-comments" aria-hidden="true"></i> 0</a>
                                        </span>
                                        <span class="view">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            <span>7</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="item">
                                <div class="cat"><a title="Travel" href="#">Travel</a></div>
                                <a href="#" class="res res-16by9"><img src="https://kolyoum.bdaia.com/kolyoum-times/wp-content/uploads/sites/9/2018/04/pexels-photo-347141-406x233.jpeg" alt=""></a>
                                <h5 class="title"><a href="#" title="">Found Footage Offers a New Glimpse at 1906 San Francisco</a></h5>
                                <div class="meta">
                                    <div>
                                        <span class="author">
                                            <a href="#" title="Amr Sadek"><i class="fa fa-user-o" aria-hidden="true"></i> Amr Sadek</a>
                                        </span>
                                        <span class="date">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span>April 24, 2018</span>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="comment">
                                            <a href="#" title=""><i class="fa fa-comments" aria-hidden="true"></i> 0</a>
                                        </span>
                                        <span class="view">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            <span>7</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popular-box items-box">
                    <h3><span>Most Popular</span></h3>
                    <div class="row small-up-1 medium-up-2 large-up-3">
                        <div class="column">
                            <h4>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>Hướng dẫn mua bán BITCOIN</span>
                            </h4>
                            <ul class="items-list">
                                <li class="first">
                                    <div class="item">
                                        <span class="count">1</span>
                                        <div class="featured"><a href="#" class="res res-4by3"><img src="http://demo.dawnthemes.com/viem/v3/wp-content/uploads/sites/3/2017/12/43280237_l-360x235.jpg" alt=""></a></div>
                                        <div class="content">
                                            <div class="cat"><a title="" href="#" rel="tag">TV Show</a></div>
                                            <h5><a href="#" title="Smit’s Family">Smit’s Family</a></h5>
                                        </div>
                                        <div class="views">
                                            <span class="counter">
                                                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                <span>1.629K</span>
                                            </span>
                                            <span class="duration">7:28</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <span class="count">2</span>
                                        <div class="featured"><a href="#" class="res res-4by3"><img src="http://demo.dawnthemes.com/viem/v3/wp-content/uploads/sites/3/2018/03/fashion-men-vintage-colorful-360x235.jpg" alt=""></a></div>
                                        <div class="views">
                                            <span class="duration">7:28</span>
                                        </div>
                                        <div class="content">
                                            <h6><a href="#" title="">Fall-Winter 2017-18 Men’s Fashion Show</a></h6>
                                        </div>
                                        <div class="meta">
                                            <span class="view"><i class="fa fa-eye" aria-hidden="true"></i>768</span>
                                            <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>4</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <span class="count">3</span>
                                        <div class="featured"><a href="#" class="res res-4by3"><img src="http://demo.dawnthemes.com/viem/v3/wp-content/uploads/sites/3/2018/03/hirsch-wild-antler-nature-forest-meadow-lighting-360x235.jpg" alt=""></a></div>
                                        <div class="views">
                                            <span class="duration">7:28</span>
                                        </div>
                                        <div class="content">
                                            <h6><a href="#" title="">Turpis Consectetuer Socio</a></h6>
                                        </div>
                                        <div class="meta">
                                            <span class="view"><i class="fa fa-eye" aria-hidden="true"></i>768</span>
                                            <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>4</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <span class="count">4</span>
                                        <div class="featured"><a href="#" class="res res-4by3"><img src="http://demo.dawnthemes.com/viem/v3/wp-content/uploads/sites/3/2017/12/Red-door-LinkedIn-Industry-Categories-360x235.jpg" alt=""></a></div>
                                        <div class="views">
                                            <span class="duration">7:28</span>
                                        </div>
                                        <div class="content">
                                            <h6><a href="#" title="">World’s Greatest Drag Race 4</a></h6>
                                        </div>
                                        <div class="meta">
                                            <span class="view"><i class="fa fa-eye" aria-hidden="true"></i>768</span>
                                            <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>4</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="column">
                            <h4>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>Hướng dẫn nhìn Chart</span>
                            </h4>
                            <ul class="items-list">
                                <li class="first">
                                    <div class="item">
                                        <span class="count">1</span>
                                        <div class="featured"><a href="#" class="res res-4by3"><img src="http://demo.dawnthemes.com/viem/v3/wp-content/uploads/sites/3/2017/12/43280237_l-360x235.jpg" alt=""></a></div>
                                        <div class="content">
                                            <div class="cat"><a title="" href="#" rel="tag">TV Show</a></div>
                                            <h5><a href="#" title="Smit’s Family">Smit’s Family</a></h5>
                                        </div>
                                        <div class="views">
                                            <span class="counter">
                                                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                <span>1.629K</span>
                                            </span>
                                            <span class="duration">7:28</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <span class="count">2</span>
                                        <div class="featured"><a href="#" class="res res-4by3"><img src="http://demo.dawnthemes.com/viem/v3/wp-content/uploads/sites/3/2018/03/fashion-men-vintage-colorful-360x235.jpg" alt=""></a></div>
                                        <div class="views">
                                            <span class="duration">7:28</span>
                                        </div>
                                        <div class="content">
                                            <h6><a href="#" title="">Fall-Winter 2017-18 Men’s Fashion Show</a></h6>
                                        </div>
                                        <div class="meta">
                                            <span class="view"><i class="fa fa-eye" aria-hidden="true"></i>768</span>
                                            <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>4</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <span class="count">3</span>
                                        <div class="featured"><a href="#" class="res res-4by3"><img src="http://demo.dawnthemes.com/viem/v3/wp-content/uploads/sites/3/2018/03/hirsch-wild-antler-nature-forest-meadow-lighting-360x235.jpg" alt=""></a></div>
                                        <div class="views">
                                            <span class="duration">7:28</span>
                                        </div>
                                        <div class="content">
                                            <h6><a href="#" title="">Turpis Consectetuer Socio</a></h6>
                                        </div>
                                        <div class="meta">
                                            <span class="view"><i class="fa fa-eye" aria-hidden="true"></i>768</span>
                                            <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>4</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <span class="count">4</span>
                                        <div class="featured"><a href="#" class="res res-4by3"><img src="http://demo.dawnthemes.com/viem/v3/wp-content/uploads/sites/3/2017/12/Red-door-LinkedIn-Industry-Categories-360x235.jpg" alt=""></a></div>
                                        <div class="views">
                                            <span class="duration">7:28</span>
                                        </div>
                                        <div class="content">
                                            <h6><a href="#" title="">World’s Greatest Drag Race 4</a></h6>
                                        </div>
                                        <div class="meta">
                                            <span class="view"><i class="fa fa-eye" aria-hidden="true"></i>768</span>
                                            <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>4</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="column">
                            <h4>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>Hướng dẫn setup máy đào</span>
                            </h4>
                            <ul class="items-list">
                                <li class="first">
                                    <div class="item">
                                        <span class="count">1</span>
                                        <div class="featured"><a href="#" class="res res-4by3"><img src="http://demo.dawnthemes.com/viem/v3/wp-content/uploads/sites/3/2017/12/43280237_l-360x235.jpg" alt=""></a></div>
                                        <div class="content">
                                            <div class="cat"><a title="" href="#" rel="tag">TV Show</a></div>
                                            <h5><a href="#" title="Smit’s Family">Smit’s Family</a></h5>
                                        </div>
                                        <div class="views">
                                            <span class="counter">
                                                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                <span>1.629K</span>
                                            </span>
                                            <span class="duration">7:28</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <span class="count">2</span>
                                        <div class="featured"><a href="#" class="res res-4by3"><img src="http://demo.dawnthemes.com/viem/v3/wp-content/uploads/sites/3/2018/03/fashion-men-vintage-colorful-360x235.jpg" alt=""></a></div>
                                        <div class="views">
                                            <span class="duration">7:28</span>
                                        </div>
                                        <div class="content">
                                            <h6><a href="#" title="">Fall-Winter 2017-18 Men’s Fashion Show</a></h6>
                                        </div>
                                        <div class="meta">
                                            <span class="view"><i class="fa fa-eye" aria-hidden="true"></i>768</span>
                                            <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>4</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <span class="count">3</span>
                                        <div class="featured"><a href="#" class="res res-4by3"><img src="http://demo.dawnthemes.com/viem/v3/wp-content/uploads/sites/3/2018/03/hirsch-wild-antler-nature-forest-meadow-lighting-360x235.jpg" alt=""></a></div>
                                        <div class="views">
                                            <span class="duration">7:28</span>
                                        </div>
                                        <div class="content">
                                            <h6><a href="#" title="">Turpis Consectetuer Socio</a></h6>
                                        </div>
                                        <div class="meta">
                                            <span class="view"><i class="fa fa-eye" aria-hidden="true"></i>768</span>
                                            <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>4</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <span class="count">4</span>
                                        <div class="featured"><a href="#" class="res res-4by3"><img src="http://demo.dawnthemes.com/viem/v3/wp-content/uploads/sites/3/2017/12/Red-door-LinkedIn-Industry-Categories-360x235.jpg" alt=""></a></div>
                                        <div class="views">
                                            <span class="duration">7:28</span>
                                        </div>
                                        <div class="content">
                                            <h6><a href="#" title="">World’s Greatest Drag Race 4</a></h6>
                                        </div>
                                        <div class="meta">
                                            <span class="view"><i class="fa fa-eye" aria-hidden="true"></i>768</span>
                                            <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>4</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column r">
                <aside class="market-analysis">
                    <h3><span>Phân tích thị trường</span></h3>
                    <div class="analysis-links">
                        <a href="#" title="Online Stores for Sale">
                            <h6>Online Stores for Sale</h6>
                            <p>The marketplace to buy and sell online stores</p>
                        </a>
                        <a href="#" title="Business Ideas">
                            <h6>Business Ideas</h6>
                            <p>Find a product or business idea and get started</p>
                        </a>
                        <a href="#" title="How to Start a Business">
                            <h6>How to Start a Business</h6>
                            <p>Resources and tips for getting started</p>
                        </a>
                        <a href="#" title="How to Sell Online">
                            <h6>How to Sell Online</h6>
                            <p>Start generating more traffic and sales today</p>
                        </a>
                        <a href="#" title="Ecommerce Trends">
                            <h6>Ecommerce Trends</h6>
                            <p>Industry trends and news that matters</p>
                        </a>
                        <a href="#" title="Ecommerce Inspiration">
                            <h6>Ecommerce Inspiration</h6>
                            <p>Ideas and examples for improving your business</p>
                        </a>
                        <a href="#" title="Business Encyclopedia">
                            <h6>Business Encyclopedia</h6>
                            <p>Learn everything about running a business</p>
                        </a>
                        <a href="#" title="Popular Articles">
                            <h6>Popular Articles</h6>
                            <p>Explore popular blog articles</p>
                        </a>
                    </div>
                </aside>
                <aside class="coins-shop">
                    <h3><span>Shop tiền điện tử</span></h3>
                    <div>
                        <a href="#" title="">
                            <img src="<?=$base_uri?>img/tmp/aothun.jpg" alt="">
                            <h6>Crypto ADA Cardano Shirt</h6>
                        </a>
                        <span class="badge">%</span>
                        <div class="info">
                            <div class="price">
                                <span class="old">550.000 VNĐ</span>
                                <span class="new">350.000 VNĐ</span>
                            </div>
                            <span class="seller">Lacoste</span>
                        </div>
                        <span class="btn btn-ship"><i class="fa fa-truck" aria-hidden="true"></i> Free ship</span>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <div class="bitcoin-charts">
        <div class="row columns">
            <h3><span>Bitcoin Core Charts</span></h3>
            <div class="short">The Bitcoin Core (BTC) ecosystem at a glance</div>
        </div>
        <div class="row small-up-1 medium-up-2 large-up-3">
            <div class="column charts price-col">
                <a class="_blank" href="https://charts.bitcoin.com/"><h2 class="chart-headers" id="price">$7,967<i class="fa fa-caret-down down" aria-hidden="true"></i></h2></a>
                <p>BTC Price</p>
                <div class="embed-graph">
                    <iframe width="100%" height="300px" scrolling="no" allowtransparency="true" allowfullscreen="allowfullscreen" frameborder="0" src="https://charts.bitcoin.com/embed/price#5mo3"></iframe>
                </div>
            </div>
            <div class="column charts mkt-cap-col">
                <a class="_blank" href="https://charts.bitcoin.com/"><h2 class="chart-headers" id="market-cap">$136.9B<i class="fa fa-caret-up up" aria-hidden="true"></i></h2></a>
                <p>Market Cap</p>
                <div class="embed-graph">
                    <iframe width="100%" height="300px" scrolling="no" allowtransparency="true" allowfullscreen="allowfullscreen" frameborder="0" src="https://charts.bitcoin.com/embed/market-cap#5mo3"></iframe>
                </div>
            </div>
            <div class="column charts transactions-col">
                <a class="_blank" href="https://charts.bitcoin.com/"><h2 class="chart-headers" id="daily-transactions">249K<i class="fa fa-caret-down down" aria-hidden="true"></i></h2></a>
                <p>Daily Transactions</p>
                <div class="embed-graph">
                    <iframe width="100%" height="300px" scrolling="no" allowtransparency="true" allowfullscreen="allowfullscreen" frameborder="0" src="https://charts.bitcoin.com/embed/daily-transactions#5mo3"></iframe>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <div class="row">
        <div class="column small-12 large-4 seo-f">
            <a href="#" title=""><img src="<?= $base_uri ?>img/logo-footer.png" alt=""></a>
            <div class="clearfix">
                LoyaltyCoin makes loyalty points exchangeable between customers using blockchain technology
                (peer-to-peer; decentralized), offering design, roll-out &amp; running of digital loyalty programs
                for partners with unique value-add for users able to collect loyalty points everywhere, exchange
                them anytime and use rewards whenever and wherever they like, simply on their phone.
            </div>
            <div class="addr">
                <address>
                    <strong>Headquarters:</strong><br/>
                    Gotthardstrasse 26<br/>
                    6300, Zug<br/>
                    Switzerland<br/>
                </address>
                <abbr title="Phone Number"><strong>Phone:</strong></abbr>
                <a title=" +41 79 544 51 30" href="tel:+41795445130"> +41 79 544 51 30</a>
            </div>
        </div>
        <div class="column small-12 medium-6 large-4 social-f">
            <h4>Social Networks</h4>
            <div class="callout">
                <h5>Facebook</h5>
                <p>Join our Facebook channel and interact directly with the founding team</p>
            </div>
            <div class="social-follow clearfix">
                <span class="lbl">Follow me: </span>
                <a class="fb _blank" title="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                <a class="yt _blank" title="youtube" href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a>
                <a class="gp _blank" title="google plus" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a>
                <a class="tt _blank" title="twitter" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                <a class="pi _blank" title="pinterest" href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                <a class="le _blank" title="linkedin" href="https://linkedin.com/"><i class="fa fa-linkedin"></i></a>
                <a class="tu _blank" title="tumblr" href="https://www.tumblr.com/"><i class="fa fa-tumblr"></i></a>
            </div>
        </div>
        <div class="column small-12 medium-6 large-4 contact-f">
            <h4>Liên hệ chúng tôi</h4>
            <form method="post" class="frm-contact" id="frm-contact" accept-charset="UTF-8" data-abide novalidate>
                <div>
                    <label for="fullname"><i class="fa fa-user" aria-hidden="true"></i></label>
                    <input required pattern="^(.*\S+.*)$" id="fullname" type="text" name="fullname" placeholder="Full Name *">
                </div>
                <div>
                    <label for="email"><i class="fa fa-envelope" aria-hidden="true"></i></label>
                    <input required id="email" type="email" name="email" placeholder="E-mail *">
                </div>
                <div>
                    <label for="phone"><i class="fa fa-mobile" aria-hidden="true"></i></label>
                    <input required id="phone" type="tel" name="phone" pattern="^(\d{8,})$" maxlength="15" placeholder="Phone *">
                </div>
                <div>
                    <label for="subject"><i class="fa fa-sticky-note" aria-hidden="true"></i></label>
                    <input required pattern="^(.*\S+.*)$" id="subject" type="text" name="subject" placeholder="Subject *">
                </div>
                <div>
                    <textarea pattern="^(.*\S+.*)$" name="message-txt" id="message-txt" rows="4" placeholder="Message"></textarea>
                </div>
                <div class="btn btn-group">
                    <button type="submit"><span>Send E-mail</span></button>
                    <cite><span>(*)</span> Required Field.</cite>
                </div>
                <div data-abide-error class="alert callout form-box-alert" data-closable>
                    <p class="error-txt"><i class="fa fa-exclamation-triangle"></i> Vui lòng điền đầy đủ thông tin</p>
                    <button class="close-button" type="button" data-close><span aria-hidden="true">&times;</span></button>
                </div>
            </form>
        </div>
    </div>
</footer></div>
<noscript>
    <div class="noscript"><p>Sorry, JavaScript must be enabled.<br/>Change your browser options, then <a href="/">try again</a>.</p></div>
</noscript>
<script src="<?= $base_uri ?>js/app.js"></script>
</body>
</html>
