<?php
    $args = array(
        'mid_size' => 2,
        'prev_text' => 'PREV',
        'next_text' => 'NEXT',
        'screen_reader_text' => ' ',
    );
    the_posts_pagination($args);
    ?>


<style>
.pagination{
   margin:0 auto 100px;
   text-align:center;
}
.nav-links{
   display:flex;
}
.pagination .page-numbers{
   display:inline-block;
   margin-right:20px;
   color:#333;
   padding-bottom:10px
}

.pagination .page-numbers:hover{
  border-bottom:solid 1px #0C2E5A
}

.pagination .current{
    padding-bottom:10px;
    border-bottom:solid 1px #0C2E5A;
    color:#0C2E5A;
}
.pagination .prev:hover,
.pagination .next:hover{
  padding-bottom:10px;
}
.pagination .prev:hover,
.pagination .next:hover{
  border-bottom:solid 1px #0C2E5A;
}
.pagination .dots{

}
</style>