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
            <div class="car-left">
                <div class="brand">
                    <div class="pub_l">
                        <div class="menu_item more" style="height: 33px">
                            <ul>
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ac94b9df527071fb544d655754279f42&action=category&catid=72&num=7&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'72','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'7',));}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <li <?php if($n==1) { ?> class="active" <?php } ?> style="width:105px;"><?php echo $r['catname'];?></li>
                                <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                            </ul>
                        </div>

                        <div class="detail">
                            <?php $index=1;?>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ac94b9df527071fb544d655754279f42&action=category&catid=72&num=7&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'72','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'7',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <div  <?php if($index==1) { ?> class="item active" <?php } else { ?> class="item" <?php } ?>>
                                <ul>

                                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1942690e09bb7de4aa366035b13e0147&action=lists&catid=%24r%5Bcatid%5D&num=14&siteid=%24siteid&order=updatetime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'updatetime desc','limit'=>'14',));}?>
                                        <?php $n=1;if(is_array($data)) foreach($data AS $r1) { ?>
                                    <li class="hashead">
                                        <div class="head">
                                            <a href="<?php echo $r1['url'];?>" style="display:inline;border:none;"><img src="<?php echo $r1['thumb'];?>" alt=""></a>
                                        </div>

                                    </li>
                                        <?php $n++;}unset($n); ?>
                                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                                </ul>

                            </div>
                            <?php $index++;?>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>




                        </div>
                    </div>


                </div>
                <div class="tj_car">
                    <div class="title">推荐车型</div>
                    <div class="content">
                        <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=79ad1b3a2e9da5a15ffac4ae9def5ba3&action=lists&catid=%24catid&num=6&siteid=%24siteid&order=updatetime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'updatetime desc','limit'=>'6',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li <?php if($n==3||$n==6) { ?>style="margin-right:0px;"<?php } ?>>
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
                    <div class="page" id="pages">
                        <?php echo $pages;?>
                    </div>
                </div>
            </div>
            <div class="car-right">
                <div class="brand_topbox hide_item">
                    <div class="letter_check_box">
                        <div class="letter_check_box_innerblock">
                            <a href="javascript:;" letter="A" class="letter_check_box_each letter_check_box_each_effect">A</a>
                            <a href="javascript:;" letter="B" class="letter_check_box_each">B</a>
                            <a href="javascript:;" letter="C" class="letter_check_box_each">C</a>
                            <a href="javascript:;" letter="D" class="letter_check_box_each">D</a>
                            <a href="javascript:;" letter="E" class="letter_check_box_each">E</a>
                            <a href="javascript:;" letter="F" class="letter_check_box_each">F</a>
                            <a href="javascript:;" letter="G" class="letter_check_box_each">G</a>
                            <a href="javascript:;" letter="H" class="letter_check_box_each">H</a>
                            <!--<a letter="I" class="letter_check_box_nonclick clear_right">I</a>-->
                            <a href="javascript:;" letter="I" class="letter_check_box_each">I</a>
                            <a href="javascript:;" letter="J" class="letter_check_box_each">J</a>
                            <a href="javascript:;" letter="K" class="letter_check_box_each">K</a>
                            <a href="javascript:;" letter="L" class="letter_check_box_each">L</a>
                            <a href="javascript:;" letter="M" class="letter_check_box_each">M</a>
                            <a href="javascript:;" letter="N" class="letter_check_box_each">N</a>
                            <a href="javascript:;" letter="O" class="letter_check_box_each">O</a>
                            <a href="javascript:;" letter="P" class="letter_check_box_each">P</a>
                            <a href="javascript:;" letter="Q" class="letter_check_box_each">Q</a>
                            <a href="javascript:;" letter="R" class="letter_check_box_each">R</a>
                            <a href="javascript:;" letter="S" class="letter_check_box_each">S</a>
                            <a href="javascript:;" letter="T" class="letter_check_box_each">T</a>
                            <a href="javascript:;" letter="U" class="letter_check_box_each">U</a>
                            <a href="javascript:;" letter="V" class="letter_check_box_each">V</a>
                            <a href="javascript:;" letter="W" class="letter_check_box_each">W</a>
                            <a href="javascript:;" letter="X" class="letter_check_box_each">X</a>
                            <a href="javascript:;" letter="Y" class="letter_check_box_each">Y</a>
                            <a href="javascript:;" letter="Z" class="letter_check_box_each">Z</a>
                        </div>
                    </div>

                    <div class="letter_check_box_scrollbox">

                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d93befca72e2f9c7829d43fec5d2d04c&sql=+SELECT+g.linkageid%2Ccount%28%2A%29+as+count+FROM+%28SELECT+a.arrchildid%2Ca.linkageid%2Cb.brand+FROM+newt_linkage+a%2Cnewt_car+b+WHERE+a.keyid+%3D+3360+AND+a.parentid+%3D+0+AND+FIND_IN_SET%28b.brand%2C+a.arrchildid%29%29+g+GROUP+BY+g.linkageid&return=data1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query(" SELECT g.linkageid,count(*) as count FROM (SELECT a.arrchildid,a.linkageid,b.brand FROM newt_linkage a,newt_car b WHERE a.keyid = 3360 AND a.parentid = 0 AND FIND_IN_SET(b.brand, a.arrchildid)) g GROUP BY g.linkageid LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data1 = $a;unset($a);?>

                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c47185196946209a6d960128fd3320da&sql=SELECT+%2A+from+newt_linkage+where+keyid+%3D3360+and+parentid+%3D0+order+by+description+asc+&num=500&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from newt_linkage where keyid =3360 and parentid =0 order by description asc  LIMIT 500");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>

                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <?php foreach($data1 as $k=>$v){ if($r[linkageid]==$v[linkageid]) {$r[count]=$data1[$k][count]; }}?>


                        <div class="letter_check_box_scrollbox_item">
                                    <ul>
                                        <li><a class="item_fir_large_sign">&gt;</a></li>
                                        <li><a class="<?php echo $r['description'];?> item_sec_item_sort"><?php echo $r['description'];?></a></li>
                                        <li class=""><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=cx_list&id=<?php echo $r['linkageid'];?>" target="_blank" class="item_third_item_name"><?php echo $r['name'];?>

                                            <span class="item_fourth_amount">

                                                        (<?php echo $r['count'];?>)

                                            </span>


                                        </a></li>
                                    </ul>
                                </div>

                            <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>






                    </div>
                </div>



            </div>

    </div>
</div>
<?php include template("content","footer"); ?>

    <script type="text/javascript" src="<?php echo APP_PATH;?>js/swiper.min.js"></script>
    <script type="text/javascript">
        new Swiper('.swiper-container', {
            //pagination: '.swiper-pagination',
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            spaceBetween: 30
        });
        var caverling = {
            init:function(){
                this.djlp();

            },
            djlp:function(){
                //独家辣评 车辆报告 经典回顾 行业动态的切换
                $(".brand .pub_l .menu_item li").on("click",function(){
                    var index = $(this).index();
                    $(".brand .pub_l .menu_item li").removeClass("active");
                    $(this).addClass("active");
                    $(".brand .pub_l .detail .item").removeClass("active");
                    $(".brand .pub_l .detail .item").eq(index).addClass("active");
                });
            }
        }
        caverling.init();

        //点击
        $(document).ready(function(){
            $(".letter_check_box_each").click(function(){
                $(this).addClass("letter_check_box_each_effect");
                $(this).siblings("a").removeClass("letter_check_box_each_effect");
            });


            $(".logistics_pagenum_defaultbtn").click(function(){
                $(this).addClass("logistics_pagenum_defaultbtn_effect");
                $(this).siblings("a").removeClass("logistics_pagenum_defaultbtn_effect");
            });

            $('.letter_check_box_scrollbox_item').mouseenter(function(){
                $(this).find('li:eq(2)').addClass('scrollitem_options');
                $(this).find('li:eq(2)>a').addClass('scrollitem_options_name');
            }).mouseleave(function(){
                $(this).find('li:eq(2)').removeClass('scrollitem_options');
                $(this).find('li:eq(2)>a').removeClass('scrollitem_options_name');
            }).click(function(){
                var $li_index = $(this).find('li:eq(2)')
                $li_index.addClass('scrollitem_options').siblings($li_index).removeClass('scrollitem_options');
            });


        });

        //滑动
        $(document).ready(function(){
            $(".letter_check_box_each").click(function(){
                var className = $(this).attr("letter");
                var letterTop = $("."+className).offset().top;
                var boxTop = $(".letter_check_box_scrollbox").offset().top;
                var top = $(".letter_check_box_scrollbox").scrollTop() + letterTop - boxTop;
                $(".letter_check_box_scrollbox").scrollTop(top);

            });
            $(".change_city_chooseByLetterItem").live("click",function(){
                var className = $(this).html();
                var letterTop = $(".p_"+className).offset().top;
                var boxTop = $(".change_direct_province_blockContent").offset().top;
                var top = $(".change_direct_province_blockContent").scrollTop() + letterTop - boxTop;
                $(".change_direct_province_blockContent").scrollTop(top);

            });
            /*移动端 全部品牌 点击右侧字母索引 匹配 列表项*/
            $('.choose_brand_letter_index_item').click(function(){
                $('.choose_brand_letter_index .choose_brand_letter_index_item').removeClass("add_letter_index_bg");
                $(this).addClass("add_letter_index_bg");
                var className = $(this).attr("letter_index");
                var letterTop = $("."+className).offset().top;
                var boxTop = $(".choose_brand_box_right").offset().top;
                var top = $(".choose_brand_box_right").scrollTop()+letterTop-boxTop;
                $(".choose_brand_box_right").scrollTop(top);
            })

            /*移动端 全部品牌 右侧字母索引*/
            var win_height = window.innerHeight;
            var head_height = $('.header_box').height();
            var main_height = win_height - head_height -26;
            var each_height = main_height / 26 + "px";
            $(".choose_brand_letter_index_item").css("height",each_height);
            $(".choose_brand_letter_index_item").css("line-height",each_height);

        });

    </script>
