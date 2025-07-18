<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/shop.tail.php');
    return;
}

$admin = get_admin("super");

add_javascript('<script src="'.G5_THEME_JS_URL.'/Ublue-jQueryTabs-1.2.js"></script>', 10);

// 사용자 화면 우측과 하단을 담당하는 페이지입니다.
// 우측, 하단 화면을 꾸미려면 이 파일을 수정합니다.
?>
</div>
    </div>
    <!-- } 콘텐츠 끝 -->

<!-- 하단 시작 { -->
</div>
<!--
<div id="quick" class="tab_wr">
	

	<div class="qk_innr">
	    <ul class="qk_btn">
	    	<li>
	    		<button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
	    	</li>
	        <li class="tab_my tabsTab">
	            <a href="<?php echo G5_SHOP_URL; ?>/mypage.php"><i class="fa fa-user" aria-hidden="true"></i><span class="sound_only">마이페이지 열기</span></a>
	        </li>
	        <li class="tab_cart tabsTab">
	            <button type="button" class="cart_op_btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="sound_only">장바구니 열기</span></button>
	        </li>
	        <li class="tab_today tabsTab">
	            <button type="button" class="view_op_btn"><i class="fa fa-archive" aria-hidden="true"></i><span class="sound_only">오늘본상품 열기</span></button>
	        </li>
			<li class="tab_wish tabsTab">
				<button type="button" class="wish_op_btn"><i class="fa fa-heart" aria-hidden="true"></i><span class="sound_only">위시리스트 열기</span></button>
	        </li>
	    </ul>
    </div>

    

    <div class="tabs_con">
    	
        <div class="qk_con" id="qk_cart">
            <div class="qk_con_wr">
            	<h3><a href="<?php echo G5_SHOP_URL; ?>/cart.php">장바구니</a></h3>
	            <div class="hdqk_wr">
	                <div class="hdqk_wr" id="q_cart_wr"></div>
					<script>
		            $(function(){
		                $(".cart_op_btn").on("click", function() {
		                    var $this = $(this);
		
		                    $("#q_cart_wr").load(
		                        g5_theme_shop_url+"/ajax.cart.php",
		                        function() {
		                            $this.next(".hdqk_wr").show();
		                        }
		                    );
		                });
		            });
		            </script>
	            </div>
            	<button type="button" class="con_close"><i class="fas fa-times"></i><span class="sound_only">장바구니 닫기</span></button>
            </div>
        </div>
    
    </div>

    
</div>
-->
<script>
$(function() {
    $("#top_btn").on("click", function() {
        $("html, body").animate({scrollTop:0}, '500');
        return false;
    });
});
	
$(function (){
	$(".cart_op_btn").on("click", function(){
		$("#qk_cart").show();
    });
	$(".view_op_btn").on("click", function(){
		$("#qk_view").show();
    });
	$(".wish_op_btn").on("click", function(){
		$("#qk_wish").toggle();
    });
    $(".con_close").on("click", function(){
		$(".qk_con").hide();
	});
    $("#quick_open").on("click", function(){
		$("#quick").toggle();
    });
});
$(document).mouseup(function (e){
    var container = $(".qk_con");
    if( container.has(e.target).length === 0)
    container.hide();
});

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 10) {
        $("#quick").addClass("fix");
    } else {
        $("#quick").removeClass("fix");
    }
});
</script>

<div id="ft">
    <div id="ft_wr">
        <ul class="ft_ul">
            <!-- <li><a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a></li> -->
            <li><a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a></li>
            <li><a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a></li>
            <!-- <li><a href="<?php echo get_device_change_url(); ?>">모바일버전</a></li> -->
        	<li class="ft_call">고객센터 1234-5678</li>
        </ul>
	</div>

    <div class="ft_info">
	    <span><b>회사명</b> <?php echo $default['de_admin_company_name']; ?></span>
	    <span><b>주소</b> <?php echo $default['de_admin_company_addr']; ?></span><br>
	    <span><b>사업자 등록번호</b> <?php echo $default['de_admin_company_saupja_no']; ?></span>
	    <span><b>대표</b> <?php echo $default['de_admin_company_owner']; ?></span>
	    <span><b>전화</b> <?php echo $default['de_admin_company_tel']; ?></span>
	    <!-- <span><b>팩스</b> <?php echo $default['de_admin_company_fax']; ?></span><br> -->
	    <!-- <span><b>운영자</b> <?php echo $admin['mb_name']; ?></span> --><br>
	    <span><b>통신판매업신고번호</b> <?php echo $default['de_admin_tongsin_no']; ?></span>
	    <span><b>개인정보 보호책임자</b> <?php echo $default['de_admin_info_name']; ?></span><br>
		
		<?php if ($default['de_admin_buga_no']) echo '<span><b>부가통신사업신고번호</b> '.$default['de_admin_buga_no'].'</span>'; ?>
		<br><br>
        <p>Copyright &copy; 2025 <?php echo $default['de_admin_company_name']; ?>. All Rights Reserved.</p>
    	<ul class="ft_sns">
    		<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    		<li><a href=""><i class="fab fa-twitter"></i></a></li>
    		<li><a href=""><i class="fab fa-instagram"></i></a></li>
    	</ul>
	</div>
</div>

<?php
$sec = get_microtime() - $begin_time;
$file = $_SERVER['SCRIPT_NAME'];

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<script src="<?php echo G5_JS_URL; ?>/sns.js"></script>
<!-- } 하단 끝 -->

<?php
include_once(G5_THEME_PATH.'/tail.sub.php');
?>
