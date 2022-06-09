<?php
include('gyconfig.php');
$json['latestversion']='1.0.1';  //当前最新版本
$json['isforceupdate']=false; //是否强制更新
$json['downurl']='';// 下载地址
$json['updatelog']='
切记下载完后先卸载旧版本在安装
本次更新后会出现两个APP，还请自行卸载老版本。
修复部分BUG
更新最新搜索内核。
.
';  //更新内容
$json['splashImageUrl']='https://cdn.nlark.com/yuque/0/2021/jpeg/21554617/1620362718065-16773dbb-476b-4900-8cd1-ae8496e2e83b.jpeg'; //启动图
$json['forceUpdateVersion']='195'; //最小版本号，低于这个就更新
$json['qun']='1085028304'; //QQ群
$json['isforceImprot'] = false; //是否强制更新书源
$json['gmail']='fengyuecanzhu@gmail.com';//邮箱
$json['rlDyys']='http://yunjuw.cn/'; //友情链接
$json['guanwang']='https://wwc.lanzouj.com/iKruv04p3m2h'; //官网地址
 $json['rlueurl']='https://shuyuan.miaogongzi.net/shuyuan/1653743731.json'; //书源规则
//$json['rlueurl']='https://alynpakzmb.cdn.bspapp.com/ALYNPAKZMB-8a8ac2b1-e7af-4495-b927-58fd6a5c372b/722f2f88-51a9-4d85-b75d-88ba065c0a0d.png'; //书源规则
$json['Notice']='fffffffffffff'; //公告内容
$json['NoticeTime'] = -1; //    -1，关闭公告  0，手动关闭公告 大于0 定时关闭公告
$json['isstartad'] = false; // true 开启启动广告 false 关闭启动广告
$json['backReloadTime'] = -1; //单位秒
$json['isShowHomeAd']=false; //是否显示首页广告
$json['isShowSearchAd']=false; //是否显示搜索页广告
$json['isShowDialog']=-1; //插屏广告展示间隔时间 间隔时间小于等于-1就关闭
$json['adContent']='为了维持服务器开销，不得已开启广告，本广告24小时内只需观看一次。'; //弹窗广告内容内容
$json['adSpaceTime']=81600; //弹窗展示间隔时间 间隔时间小于等于-1就关闭
$json['rlueurl2']=array(
    array(
        "title"=>'小说/2021-10-01（共38个源）',
        "value"=>'https://namofree.gitee.io/yuedu3/legado3_booksource_by_Namo.json'
        )
        ,
    array(
        "title"=>'默认书源',
        "value"=>'http://qiepian.huimaojia.com:33001/al/851.json?download'
        ),
    
    );
if ($_GET['v'] == '3.2.2'){
  $json['adSpaceTime']=-1; //弹窗展示间隔时间 间隔时间小于等于-1就关闭
}
// $json['rlueurl2'][]=array("title"=>'104个笔趣阁（共104个源）',"value"=>'https://gitee.com/z507525872/book-source/raw/master/104bqg.json');
// $json['rlueurl2'][]=["title"=>'2021-08-13更新小说书源（共52个源）',"value"=>'https://shuyuan.miaogongzi.net/shuyuan/1628926088.json'];
// $json['rlueurl2'][]=["title"=>'2021-08-27更新漫画源（共108个源）',"value"=>'https://haxc.coding.net/p/booksrc/d/booksrc/git/raw/master/Book3.0Source.json'];
//  require_once 'rca4.php';  
//     echo Encrypted("sm",json_encode($json,JSON_UNESCAPED_UNICODE));
 echo json_encode($json,JSON_UNESCAPED_UNICODE);
?>
