<?php
/* Template Name: Wpisy*/
get_header();?>




<style>
header {
    height: 280px;
    background-color: #EBEBEB;
    display: flex;
    align-items: center;
    margin-bottom: 86px;
}
.col-md-8 h1 {
    margin-bottom: 42px;
    font-family: 'Prosto One';
font-style: normal;
font-weight: 400;
font-size: 60px;
margin-top: 0px;
}
.singleTilesPost {
    width: 33%!important;
    padding: 30px;
    padding-left: 0px;
}
.gridPosts{
    display: flex;
    flex-wrap: wrap;
}
section.cta a {
    display: flex;
    align-items: center;
}
.showMore {
    font-weight: 600;
    color: #8b8b8b;
    line-height: 24px;
    font-size: 14px;
}
.singleTilesPost a {
    color: #8b8b8b;
    font-weight: 300;
    font-size: 14px;
    line-height: 24px;
}
.titlePost {
    color: #000;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 600;
    font-size: 22px;
    margin: 15px 0;
    line-height: 26px;
}
.singleTilesPost__image {
    width: 100%;
    display: flex;
    justify-content: center;
    background: #ebebeb;
    border-radius: 5px;
    height: 192px;
    align-items: center;
}
.singleTilesPost__image img {
    height: 64px;
}
</style>
<header>
        <div class="container">
            <div class="row">
            <div class="col-md-8">
            <p>PODTYTUŁ</p>
            <h1> <?php $my_title = get_the_title(); if ( '' != $my_title ) {}echo $my_title;?></h1>
            <?php
	                if ( function_exists('yoast_breadcrumb') ) {
	                  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
	                }
	            ?>
        </div>
        <div class="col-md-4">
            <img src="/rekrutacja/wp-content/uploads/2022/12/slider_image.png" alt="">
        </div>
            </div>
        </div>
</header>


<div class="container lorem">
    <div class="row">
        <div class="col-md-12 gridPosts">
<?php
//loop through category
$cat_args=array(
    'orderby' => 'name',
    'order' => 'ASC'
);
$categories=get_categories($cat_args);
foreach($categories as $category) { 
    //loop through posts of category
    $args=array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'category__in' => array($category->term_id)
    );
    $posts=get_posts($args);
    if ($posts) {
       
        foreach($posts as $post) {
            setup_postdata($post);
            // if only featured image set
            if ( has_post_thumbnail() ) {
            ?>

        <div class="singleTilesPost">
                <a href="<?php the_permalink() ?>">

                <div class="singleTilesPost__image">
                    <img src="<?php the_post_thumbnail_url('full'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" /><br />
                </div>
                <div class="titlePost">
                    <?php $my_title = get_the_title();
                     if ( '' != $my_title ) {}
                     echo $my_title;?><br />
                </div>

                <?php $my_excerpt = get_the_excerpt();
                 if ( '' != $my_excerpt ) {}
                 echo $my_excerpt;?><br><br>
                 <div class="showMore">
                    zobacz więcej
                    <img src="/rekrutacja/wp-content/uploads/2022/12/arrow.png" alt="">
                 </div>
            </div>

            <?php
            }
            
        }
    }
}

?>
        </div>
    </div>
</div>
</div>

<?php
get_footer();

?>