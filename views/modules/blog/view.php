{{ post }}
<!-- posts list -->
<div id="posts-list" class="single-post">
	
	<h2 class="page-heading"><span>BLOG</span></h2>	
	
	<article class="format-standard">
		<div class="entry-date"><div class="number">23</div> <div class="year">Sep, 2011</div></div>
		<div class="feature-image">
			<a href="img/slides/01.jpg" data-rel="prettyPhoto">{{ theme:image file="slides/01.jpg" alt="Alt text" }}</a>
		</div>
		<h2  class="post-heading"><a href="single.html">{{ title }}</a></h2>
        <div class="post-content">
            {{ body }}
        </div>
        <div class="meta">
            <div class="categories">{{ helper:lang line="blog:category_label" }} <a href="blog/category/{{ category:slug }}">{{ category:title }}</a></div>
            <div class="comments"><a href="#"><?= $this->comments->count(); ?> comments  </a></div>
            <div class="user"><a href="#">By admin</a></div>
        </div>

    <?php if (Settings::get('enable_comments')): ?>

<div id="comments">

    <div id="existing-comments">
        <?php echo $this->comments->display() ?>
    </div>

    <?php if ($form_display): ?>
        <?php echo $this->comments->form() ?>
    <?php else: ?>
    <?php echo sprintf(lang('blog:disabled_after'), strtolower(lang('global:duration:'.str_replace(' ', '-', $post[0]['comments_enabled'])))) ?>
    <?php endif ?>
</div>

<?php endif ?>
    
    
 
        
        
       

        </article>
        
    </div>
    <!-- ENDS posts list -->


{{ /post }}