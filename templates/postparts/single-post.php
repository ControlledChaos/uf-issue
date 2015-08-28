<?php $templates = array(); ob_start();

//***** date
?><div class="updated">
    <p class="updated-text">Updated</p>
    <time datetime="%date_iso%">%date%</time>
</div><?php
$templates["date"] = ob_get_contents();
ob_clean();

//***** title
?><h1 class="post_title">%title%</h1><?php
$templates["title"] = ob_get_contents();
ob_clean();

//***** comments_count
?><div class="post_comments">
    <h4 class="post_comments_total">%comments_count% Comment(s)</h4>
</div><?php
$templates["comments_count"] = ob_get_contents();
ob_clean();

ob_end_clean();
return $templates;