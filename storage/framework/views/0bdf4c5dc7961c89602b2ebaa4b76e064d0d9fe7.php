
<div class="col-lg-3 blog_cat">
    <div class="blog_sidebar">
        
            
        
        
            
                
                    
                        
                        
                        
                    
                
            
        
        <?php
        $blog_popular_is_enable = SM::smGetThemeOption( "blog_popular_is_enable", 1 );
        $blog_show_category = SM::smGetThemeOption( "blog_show_category", 1 );
        $blog_show_tag = SM::smGetThemeOption( "blog_show_tag", 1 );
        $blog_sidebar_add = SM::smGetThemeOption( "blog_sidebar_add", 1 );
        ?>
        <?php if($blog_popular_is_enable==1): ?>
            <?php
            $blog_popular_posts_per_page = SM::smGetThemeOption( "blog_popular_posts_per_page", 5 );
            $popularPosts = SM::getPopularBlog( $blog_popular_posts_per_page );
            ?>
            <?php if(count($popularPosts)>0): ?>
                <div class="blog_side_title">
                    <h6>POPULAR POSTS</h6>
                </div>
                    <?php $__currentLoopData = $popularPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="recent_post">
                            <a href="<?php echo e(url( "blog/$blog->slug" )); ?>">
                                <div class="r_post">
                                    <div class="r_post_img">
                                        <img src="<?php echo SM::sm_get_the_src( $blog->image , 112, 112); ?>" class="" alt="<?php echo e($blog->title); ?>">
                                    </div>
                                    <div class="text">
                                        <p><?php echo e($blog->title); ?></p>
                                        <p class="date"><?php echo e(date("d, F Y", strtotime($blog->created_at))); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endif; ?>

        <?php if($blog_show_category==1): ?>
            <?php
            $getCategories = SM::getCategories(0);
            ?>
            <?php if(count($getCategories)>0): ?>
                    <div class="blog_side_title">
                        <h6>CATEGORIES</h6>
                    </div>
                    <div class="blog_category">
                        <?php $__currentLoopData = $getCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo url("blog/category/".$cat->slug); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo e($cat->title); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
        <?php endif; ?>

        <?php if($blog_show_tag==1): ?>
            <?php
            $getTags = SM::getTags();
            ?>
            <?php if(count($getTags)>0): ?>
                <div class="blog_side_title">
                    <h6>BLOG TAGS</h6>
                </div>

                <div class="recent_post">
                    <div class="r_post">
                        <div class="text">
                            <?php $__currentLoopData = $getTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($tag->title == ! ''): ?>
                                    <a href="<?php echo url("blog/tag/".$tag->slug); ?>" class="btn btn-default btn_style">
                                        <?php echo e($tag->title); ?>

                                    </a>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php
        $blog_sidebar_ad_link = SM::smGetThemeOption( "blog_sidebar_ad_link", "#" );
        $blog_sidebar_ad = SM::smGetThemeOption( "blog_sidebar_ad" );
        ?>
        <?php if(empty(!$blog_sidebar_ad)): ?>
            <aside class="widget-Add" >
                <div class="adspace">
                    <a href="<?php echo $blog_sidebar_ad_link; ?>">
                        <img src="<?php echo SM::sm_get_the_src( $blog_sidebar_ad); ?>" alt="sidebar" class="widget-Add-img">
                    </a>
                </div>
            </aside>
        <?php endif; ?>
    </div>

    <style>
        .btn_style{
            border: 1px solid #ededed;
            margin: 4px 2px;
        }
        .widget-Add-img{
            width: 100%;
        }
        .input-style {
            height: 36px;
            border: 1px solid #d6c6c6;
            padding: 18px;
        }
    </style>
</div>

