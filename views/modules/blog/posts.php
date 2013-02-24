<!-- posts list -->
<div id="posts-list">

    <h2 class="page-heading"><span>BLOG</span></h2> 

    {{ if posts }}

        {{ posts }}
            <article class="format-standard">
                <div class="entry-date"><div class="number">{{ helper:date timestamp=created_on format='d' }}</div> <div class="year">{{ helper:date timestamp=created_on format='M, Y' }}</div></div>
                <div class="feature-image">
                    <a href="img/slides/01.jpg" data-rel="prettyPhoto">{{ theme:image file="slides/01.jpg" alt="Alt text"}}</a>
                </div>
                <h2  class="post-heading"><a href="{{url}}">{{title}}</a></h2>
                <div class="excerpt">{{introduction}}</div>
                <a href="{{url}}" class="read-more">{{ helper:lang line="blog:read_more_label" }} &#8594;</a>
                <div class="meta">
                    <div class="categories">{{ helper:lang line="blog:category_label" }} 
                        <a href="blog/category/{{ category:slug }}">{{ category:title }}</a> 
                    </div>
                    <div class="comments"><a href="#">5 comments </a></div>
                    <div class="user">{{ helper:lang line="blog:written_by_label" }} <a href="user/{{ user:username user_id=created_by }}">{{ user:display_name user_id=created_by }}</a> </a></div>
                </div>
            </article>
        {{ /posts }}
    {{ endif }}
    
    <!-- page-navigation -->
    <div class="page-navigation clearfix">
        
        {{ pagination }}
        <!--<div class="nav-next">
            <a  href="#">&#8592; Older Entries </a>
        </div>

        <div class="nav-previous">
            <a href="#">Newer Entries &#8594;</a> 
        </div>-->
        <!--ENDS page-navigation -->
    
    </div>
    
    
</div>
<!-- ENDS posts list -->