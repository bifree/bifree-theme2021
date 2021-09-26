<?php get_header(); ?>
<body>
	<div class="container page--top">
	<section class="typeA">
	<input id="TAB-A01" type="radio" name="TAB-A" checked="checked">
	<label class="tabLabel" for="TAB-A01">Bifreeについて</label>
	<div class="content">
		<?php get_template_part('template/about-bifree');?>
	</div>
	<input id="TAB-A02" type="radio" name="TAB-A">
	<label class="tabLabel" for="TAB-A02">組織概要図</label>
	<div class="content">
		<?php get_template_part('template/gaiyou');?>
	</div>
</section>
		
	</div>
</body>
<?php get_footer(); ?>