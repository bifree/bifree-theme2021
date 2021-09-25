<?php get_header(); ?>
<body>
	<div class="container">
	<section class="typeA">
	<input id="TAB-A01" type="radio" name="TAB-A" checked="checked">
	<label class="tabLabel" for="TAB-A01">不思議の国のアリス</label>
	<div class="content">
		<?php get_template_part('template/gaiyou');?>
	</div>
	<input id="TAB-A02" type="radio" name="TAB-A">
	<label class="tabLabel" for="TAB-A02">坊ちゃん</label>
	<div class="content">
		<p>【坊ちゃんの内容が見れます。】<br>
		親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。新築の二階から首を出していたら、同級生の一人が冗談に、いくら威張っても、そこから飛び降りる事は出来まい。弱虫やーい。と囃したからである。小使に負ぶさって帰って来た時、おやじが大きな眼をして二階ぐらいから飛び降りて腰を抜かす奴があるかと云ったから、この次は抜かさずに飛んで見せますと答えた。（青空文庫より）</p>
	</div>
	<input id="TAB-A03" type="radio" name="TAB-A">
	<label class="tabLabel" for="TAB-A03">徒然草</label>
	<div class="content">
		<p>【徒然草の内容が見れます。】<br>
		つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）</p>
	</div>
</section>
		
	</div>
</body>
<?php get_footer(); ?>