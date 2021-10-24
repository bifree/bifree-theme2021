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
   font-size:15px;
}
.nav-links{
   display:flex;
}
.pagination .page-numbers{
   display:inline-block;
   color:#0C2E5A;
   padding:10px;
}

.pagination .page-numbers:hover{
  background:#0C2E5A;
  color:#fff;
}

.pagination .current{
  background:#0C2E5A;
  color:#fff;
}

</style>