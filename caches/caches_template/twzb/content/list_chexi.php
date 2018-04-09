<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><script type="text/javascript">
    // borwserRedirect
    (function browserRedirect() {
        var sUserAgent = navigator.userAgent.toLowerCase();
        var bIsIpad = sUserAgent.match(/ipad/i) == 'ipad';
        var bIsIphone = sUserAgent.match(/iphone os/i) == 'iphone os';
        var bIsMidp = sUserAgent.match(/midp/i) == 'midp';
        var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == 'rv:1.2.3.4';
        var bIsUc = sUserAgent.match(/ucweb/i) == 'web';
        var bIsCE = sUserAgent.match(/windows ce/i) == 'windows ce';
        var bIsWM = sUserAgent.match(/windows mobile/i) == 'windows mobile';
        var bIsAndroid = sUserAgent.match(/android/i) == 'android';

        if (bIsIpad || bIsIphone || bIsMidp || bIsUc7 || bIsUc || bIsCE || bIsWM || bIsAndroid) {
            window.location.href = '<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=<?php echo $catid;?>';
        }
    })();
</script>
<?php include template("content","header"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo APP_PATH;?>css/gouche.css">


<div id="news_list">
    <div class="section">
        <div class="container news_list_cont">
            <div class="title_position">
                <a href="<?php echo siteurl($siteid);?>">首页</a> <a href="">购车</a> <a > <?php echo $brand['name'];?></a>

            </div>

            <div class="car-left">

                <div class="tj_car">
                    <div class="title">所有车型</div>
                    <div class="content">
                        <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=16797e9518e5d0cb639ee99e1b54773c&sql=SELECT+g.linkageid%2Cg.arrchildid%2Cg.brand%2Cg.title%2Cg.thumb%2Cg.price%2Cg.url+FROM%0D%0A++++++++++++++++++++++++++++%28SELECT%0D%0A++++++++++++++++++++++++++++a.arrchildid%2C%0D%0A++++++++++++++++++++++++++++a.%60name%60%2C%0D%0A++++++++++++++++++++++++++++a.linkageid%2C%0D%0A++++++++++++++++++++++++++++a.description%2C%0D%0A++++++++++++++++++++++++++++b.title%2C%0D%0A++++++++++++++++++++++++++++b.brand%2C%0D%0A++++++++++++++++++++++++++++b.thumb%2C%0D%0A++++++++++++++++++++++++++++b.price%2C%0D%0A++++++++++++++++++++++++++++b.url%0D%0A++++++++++++++++++++++++++++FROM%0D%0A++++++++++++++++++++++++++++newt_linkage+a%2C%0D%0A++++++++++++++++++++++++++++newt_car+b%0D%0A++++++++++++++++++++++++++++WHERE%0D%0A++++++++++++++++++++++++++++a.keyid+%3D+3360%0D%0A++++++++++++++++++++++++++++AND+a.parentid+%3D+0%0D%0A++++++++++++++++++++++++++++AND+FIND_IN_SET%28b.brand%2C+a.arrchildid%29%29+g+WHERE+g.arrchildid+%3D%24brand_id+or+g.brand+%3D%24brand_id%0D%0A++++++++++++++++++++++++++++&page=%24page&return=data2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$pagesize = 20;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$r = $get_db->sql_query("SELECT COUNT(*) as count FROM (SELECT g.linkageid,g.arrchildid,g.brand,g.title,g.thumb,g.price,g.url FROM
                            (SELECT
                            a.arrchildid,
                            a.`name`,
                            a.linkageid,
                            a.description,
                            b.title,
                            b.brand,
                            b.thumb,
                            b.price,
                            b.url
                            FROM
                            newt_linkage a,
                            newt_car b
                            WHERE
                            a.keyid = 3360
                            AND a.parentid = 0
                            AND FIND_IN_SET(b.brand, a.arrchildid)) g WHERE g.arrchildid =$brand_id or g.brand =$brand_id
                            ) T");$s = $get_db->fetch_next();$pages=pages($s['count'], $page, $pagesize, $urlrule);$r = $get_db->sql_query("SELECT g.linkageid,g.arrchildid,g.brand,g.title,g.thumb,g.price,g.url FROM
                            (SELECT
                            a.arrchildid,
                            a.`name`,
                            a.linkageid,
                            a.description,
                            b.title,
                            b.brand,
                            b.thumb,
                            b.price,
                            b.url
                            FROM
                            newt_linkage a,
                            newt_car b
                            WHERE
                            a.keyid = 3360
                            AND a.parentid = 0
                            AND FIND_IN_SET(b.brand, a.arrchildid)) g WHERE g.arrchildid =$brand_id or g.brand =$brand_id
                             LIMIT $offset,$pagesize");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data2 = $a;unset($a);?>
                            <?php $n=1;if(is_array($data2)) foreach($data2 AS $r) { ?>
                            <li>
                                <a href="<?php echo $r['url'];?>">
                                    <img src="<?php echo $r['thumb'];?>" />
                                    <span class="tit"><?php echo $r['title'];?></span>
                                    <span class="price">参考价：<?php if($r[price]) { ?>￥<?php echo $r['price'];?><?php } else { ?>暂无报价<?php } ?></span>
                                </a>
                            </li>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>


                        </ul>

                    </div>
                    <div style="clear: both;"></div>
                    <div class="page" id="pages">
                        <?php echo $pages;?>
                    </div>
                </div>
            </div>
            <div class="car-right" style="margin-top: 20px;min-height:300px;border: none">
                <div class="truck_range_block">
                    <div class="hot_model_title_bg">
                        <ul>

                            <li class="hot_model_menu hot_model_menu_tab hot_model_menu_show">
                                <a href="javascript:;" class="hot_model_menu_name hot_model_menu_name_show">按车系查找</a>
                            </li>
                        </ul>
                    </div>
                    <div class="hot_model_cnt_block hot_model_range">

                        <div class="truck_range_cnt_range truck_range_cnt" style="display: block;">

                            <div class="truck_range_search_list">
                                <div class="truck_range_cnt_list_name_area">
                                    <?php $n=1;if(is_array($cx)) foreach($cx AS $r) { ?>
                                    <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=cx_list&id=<?php echo $r['linkageid'];?>"  title="<?php echo $r['name'];?>" class="truck_range_cnt_list_name"><?php echo $r['name'];?></a>
                                    <?php $n++;}unset($n); ?>

                                </div>



                            </div>


                        </div>
                    </div>

                </div>



            </div>

    </div>
</div>
<?php include template("content","footer"); ?>
