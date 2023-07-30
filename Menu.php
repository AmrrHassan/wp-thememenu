<?php /* Template Name: Menu Page Template */ ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ladro Cafe | Our Menu</title>
    <link rel="icon" type="image/png" href="https://ladrocaffe.ae/wp-content/uploads/2022/09/favicon-32x32-1.png">

    <link rel="stylesheet" href="/wp-content/themes/storefront/menu-scripts.css">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZV1YWQH74K"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-ZV1YWQH74K');
    </script>
    <style>
        .menu_button {
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            padding-right: 2%;
        }
        
        .menu_button.menu-active {
            color: black;
            font-weight: 700;
            font-size: 18px;
        }
        
        .menu_active {
            color: black;
            font-weight: 700!important;
            background-color: rgb(0, 0, 0, 0)!important;
        }
        
        html * {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif!important;
            outline: none;
        }
        
        div {
            scroll-margin-top: 185px;
        }
        
        .button_menu {
            display: block;
            background: rgb(155, 155, 155, 0.3);
            padding: 10px;
            border-radius: 7px;
            text-align: center;
            border-radius: 7px;
            color: black;
            font-weight: bold;
            line-height: 25px;
        }
        
        .modal-backdrop {
            position: unset;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1040;
            background-color: #000;
        }
        
        .modal-header {
            padding: 0px;
            border-bottom: 1px solid #e5e5e5;
            background-size: cover;
        }
        
        .font-modal {
            font-weight: 700;
            text-align: center;
        }
        
        .section_title {
            margin-top: 0px !important;
        }
        
        a:focus,
        a:hover {
            color: black;
            text-decoration: none;
        }
        
        .btn-default {
            border: 1px solid rgb(155, 155, 155);
            background-color: rgb(155, 155, 155);
            border-top-left-radius: 6px;
            border-top-right-radius: 6px;
            border-bottom-right-radius: 6px;
            border-bottom-left-radius: 6px;
            height: 25px;
            margin: 10px 5px;
            min-width: 95px;
            padding: 8px;
        }
        
        .btn {
            display: inline-block;
            margin-bottom: 0;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 0.5;
            border-radius: 4px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        .sticky {
            position: sticky;
            top: 0;
            z-index: 1000;
            background-image: url('https://ladrocaffe.ae/wp-content/uploads/2022/09/bg8.jpg');
            background-size: 100%;
        }
        
        .r-1wfhzrg {
            height: 120px;
        }
        
        .r-y3rmyz {
            width: 120px;
        }
        
        @media only screen and (min-width: 900px) {
            .r-18u37iz {
                justify-content: center;
            }
            .r-1mdsvnl {
                width: 50%;
            }
            .modal-lg {
                width: 500px;
            }
        }
        
        .modal-footer {
            padding: 0px;
            border-top: 0px;
        }
        
        .btn-default {
            border: 1px solid rgb(155, 155, 155);
            background-color: rgb(253, 245, 230, 0.4);
            border-top-left-radius: 6px;
            border-top-right-radius: 6px;
            border-bottom-right-radius: 6px;
            border-bottom-left-radius: 6px;
            height: 25px;
            margin: 10px 5px;
            min-width: 95px;
            padding: 8px;
        }
        
        #align-box {
            position: relative;
            display: inline-block;
            width: 100%;
        }
        
        #align-img {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            width: 100px;
        }
        
        .loading {
            background: transparent url('https://ladrocaffe.ae/wp-content/uploads/2022/10/load2ladro.gif') center no-repeat;
            background-size: 100px auto;
        }
    </style>
</head>

<body>

    <!-- HOME -->
    <section class="home section" id="home" style="padding:0px; background-image: url('https://ladrocaffe.ae/wp-content/uploads/2022/09/bg8.jpg'); background-size: 100%;">
        <div id="align-box">
            <a href="https://ladrocaffe.ae"><img style="margin:5px" src="https://ladrocaffe.ae/wp-content/uploads/2022/09/340.png" width="30" height="30" alt="back"></a>
            <a href="https://ladrocaffe.ae/contact/"><img style="margin:5px" src="https://ladrocaffe.ae/wp-content/uploads/2022/09/phone-1.png" width="40" height="40" alt="phone"></a>
            <img id="align-img" src="https://ladrocaffe.ae/wp-content/uploads/2022/09/cropped-logo-transp-120.png" alt="logo">

        </div>

        <!-- menu -->
        <section class="menu section sticky" style="overflow-y: hidden;">
            <div class="menu_container container">
                <div class="menu_tabs" id="home" style="margin-bottom: 0px;">
                    <div class="menu_button button--flex menu_active menu-active">
                        <a class="btn btn-default menu_active menu-active" data-target="#food" role="button" style="color: black;" style="z-index: 100;" href="#starters">Food Menu</a>
                    </div>

                    <div class="menu_button button--flex">
                        <a class="btn btn-default" role="button" data-target="#beverage" style="color: black;" style="z-index: 100;" href="#coffee">Beverage Menu</a>
                    </div>


                </div>
            </div>

            <div class="menu_sections">
                <div class="menu_content menu_active" data-content id="food">
                    <div class="css-1dbjc4n" style="height: 130px; margin-bottom: 5px;">
                        <div class="css-1dbjc4n r-18u37iz">
                            <div class="css-1dbjc4n r-150rngu r-18u37iz r-16y2uox r-1wbh5a2 r-lltvgl r-buy8e9 r-2eszeu r-1sncvnh">
                                <div class="css-1dbjc4n r-18u37iz scroll_fix">



                                    <?php
                        $cat_terms = get_terms(
                                        array('food_category'),
                                        array(
                                                'hide_empty'    => false,
                                                'order'         => 'ASC',
                                                'number'        => 20
                                            )
                                    );
                        
                        if( $cat_terms ) :
                        
                            foreach( $cat_terms as $term ) :
                                $image_id = get_field('image', $term, false); 
                                $image = wp_get_attachment_image_src($image_id); ?>
                                        <?php

                            $args = array( 'post_type' => 'food', 'post_status' => 'publish', 'posts_per_page' => -1, 'tax_query' => array( array( 'taxonomy' => 'food_category', 'field' => 'slug', 'terms' =>$term->slug, ), ), ); 
                            $the_query = new WP_Query( $args ); ?>

                                            <?php $flag_var = 1 ; ?>

                                            <?php if ( $the_query->have_posts() ) : ?>


                                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                                            <?php if ( $flag_var == $term->slug ) { continue; } ?>
                                            <?php $flag_var = $term->slug ; ?>



                                            <div class="css-1dbjc4n r-18u37iz">
                                                <div data-focusable="true" tabindex="0" class="css-1dbjc4n r-1awozwy r-1px6drs r-1loqt21 r-1wfhzrg r-n370w6 r-1otgn73 r-eafdt9 r-1i6wzkk r-lrvibr r-y3rmyz">
                                                    <div class="css-1dbjc4n r-1px6drs r-1mlwlqe r-1udh08x r-13qz1uu r-417010" style="height: 80px; justify-content: flex-end; -webkit-box-pack: end;">
                                                        <div class="css-1dbjc4n r-1niwhzg r-vvn4in r-u6sd8q r-4gszlv r-1p0dtai r-1pi2tsx r-1d2f490 r-u8s1d r-zchlnj r-ipm5af r-13qz1uu r-1wyyakw" style="background-image: url(
                                                '<?php echo $image[0]; ?>'); "></div>
                                                        <a href="#<?php echo  $term->slug ; ?>"><img alt=" " draggable="false " src="<?php echo $image[0]; ?>" class="css-9pa8cd "></a>
                                                    </div>
                                                    <div class="css-1dbjc4n r-1777fci r-13qz1uu " style="height: 50px; ">
                                                        <div dir="auto " class="css-901oao css-cens5h r-cqee49 " style="-webkit-line-clamp: 2; font-family: PrimaryFont; font-size: 12px; margin-right: 10px; margin-left: 10px; text-align: center; ">
                                                            <?php echo  $term->name ; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php 
                                endwhile;
                                endif;
                                wp_reset_postdata();
                        
                            endforeach;
                        
                        endif; 
                        ?>


                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="menu_sections">


                <div class="menu_content" data-content id="beverage">
                    <div class="css-1dbjc4n" style="height: 130px; margin-bottom: 5px;">
                        <div class="css-1dbjc4n r-18u37iz">
                            <div class="css-1dbjc4n r-150rngu r-18u37iz r-16y2uox r-1wbh5a2 r-lltvgl r-buy8e9 r-2eszeu r-1sncvnh">
                                <div class="css-1dbjc4n r-18u37iz scroll_fixs">

                                    <?php
                                    $cat_terms = get_terms(
                                                    array('beverage_category'),
                                                    array(
                                                            'hide_empty'    => false,
                                                            'order'         => 'ASC',
                                                            'number'        => 20
                                                        )
                                                );
                                    
                                    if( $cat_terms ) :
                                    
                                        foreach( $cat_terms as $term ) :
                                            $image_id = get_field('image', $term, false); 
                                            $image = wp_get_attachment_image_src($image_id); ?>
                                        <?php
            
                                        $args = array( 'post_type' => 'beverage', 'post_status' => 'publish', 'posts_per_page' => -1, 'tax_query' => array( array( 'taxonomy' => 'beverage_category', 'field' => 'slug', 'terms' =>$term->slug, ), ), ); 
                                        $the_query = new WP_Query( $args ); ?>

                                            <?php $flag_var = 1 ; ?>

                                            <?php if ( $the_query->have_posts() ) : ?>


                                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                                            <?php if ( $flag_var == $term->slug ) { continue; } ?>
                                            <?php $flag_var = $term->slug ; ?>


                                            <div class="css-1dbjc4n r-18u37iz">
                                                <div data-focusable="true" tabindex="0" class="css-1dbjc4n r-1awozwy r-1px6drs r-1loqt21 r-1wfhzrg r-n370w6 r-1otgn73 r-eafdt9 r-1i6wzkk r-lrvibr r-y3rmyz">
                                                    <div class="css-1dbjc4n r-1px6drs r-1mlwlqe r-1udh08x r-13qz1uu r-417010" style="height: 80px; justify-content: flex-end; -webkit-box-pack: end;">
                                                        <div class="css-1dbjc4n r-1niwhzg r-vvn4in r-u6sd8q r-4gszlv r-1p0dtai r-1pi2tsx r-1d2f490 r-u8s1d r-zchlnj r-ipm5af r-13qz1uu r-1wyyakw" style="background-image: url(
                                                            '<?php echo $image[0]; ?>'); "></div>
                                                        <a href="#<?php echo  $term->slug ; ?>"><img alt=" " draggable="false " src="<?php echo $image[0]; ?>" class="css-9pa8cd "></a>
                                                    </div>
                                                    <div class="css-1dbjc4n r-1777fci r-13qz1uu " style="height: 50px; ">
                                                        <div dir="auto " class="css-901oao css-cens5h r-cqee49 " style="-webkit-line-clamp: 2; font-family: PrimaryFont; font-size: 12px; margin-right: 10px; margin-left: 10px; text-align: center; ">
                                                            <?php echo  $term->name ; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php 
                                            endwhile;
                                            endif;
                                            wp_reset_postdata();
                                    
                                        endforeach;
                                    
                                    endif; 
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <?php
$cat_terms = get_terms(
                array('food_category'),
                array(
                        'hide_empty'    => false,
                        'orderby'       => 'name',
                        'order'         => 'ASC',
                        'number'        => 20
                    )
            );

if( $cat_terms ) :

    foreach( $cat_terms as $term ) :
     $flag = 1;

                
        $args = array(
            'post_type' => 'food',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'tax_query' => array(
array(
    'taxonomy' => 'food_category',
    'field'    => 'slug',
    'terms' =>$term->slug,

),
),
            
        );
        $the_query = new WP_Query( $args ); ?>

            <?php if ( $the_query->have_posts() ) : ?>


            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


            <?php
                       $image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    ?>
                <?php
if( get_field('price') ){
	$price = get_field('price');
    $sale = 'a';
if( get_field('price') ){
	$sale = get_field('sale_price');
}
} 
?>


                    <?php if ($flag == 1) { ?>

                    <div class="menu_container container">
                        <div class="menu_tabs">

                            <div class="menu_button button--flex menu-active" id="<?php echo $term->slug; ?>">
                                <?php echo  $term->name ; ?>
                                <?php $flag = 0 ?>
                            </div>




                        </div>
                    </div>

                    <?php  
        } ?>

                    <div class="css-1dbjc4n r-1awozwy r-13qz1uu">
                        <div class="css-1dbjc4n r-kdyh1x r-1oriduh r-1quu1zo r-1wfhzrg r-dr54s0 r-u8s1d r-1mdsvnl"></div>
                        <div class="css-1dbjc4n r-kdyh1x r-1oriduh r-1quu1zo r-1wfhzrg r-dr54s0 r-1mdsvnl" style="background-color: rgba(155, 155, 155, 0.05);">
                            <div class="css-1dbjc4n r-18u37iz r-1pi2tsx">
                                <div data-focusable="true" tabindex="0" class="css-1dbjc4n r-1wh2hl7 r-o8yidv r-1loqt21 r-1wfhzrg r-1otgn73 r-1xce0ei">
                                    <div class="css-1dbjc4n r-1wh2hl7 r-o8yidv r-1mlwlqe r-1pi2tsx r-1udh08x r-13qz1uu r-417010">
                                        <div data-toggle="modal" data-target="#<?php the_ID(); ?>" class="css-1dbjc4n r-1niwhzg r-vvn4in r-u6sd8q r-4gszlv r-1p0dtai r-1pi2tsx r-1d2f490 r-u8s1d r-zchlnj r-ipm5af r-13qz1uu r-1wyyakw" style="background-image: url(<?php echo $image_url; ?>);"></div><img loading="lazy" width="200" height="200" data-toggle="modal" data-target="#<?php the_ID(); ?>" alt="" draggable="false" src="<?php echo $image_url; ?>);" class="css-9pa8cd" style="opacity: 1; object-fit: cover; border-top-left-radius: 7px;
                                        border-bottom-left-radius: 7px;"></div>

                                    <div class="css-1dbjc4n"></div>
                                </div>
                                <div class="css-1dbjc4n" style="width: 70%;">
                                    <div class="css-1dbjc4n r-13qz1uu">
                                        <div class="css-1dbjc4n r-150rngu r-18u37iz r-16y2uox r-1wbh5a2 r-lltvgl r-buy8e9 r-mfh4gg r-2eszeu r-1sncvnh">
                                            <div class="css-1dbjc4n r-18u37iz">
                                                <div class="css-1dbjc4n r-cpa5s6">
                                                    <div class="css-1dbjc4n r-18u37iz" style="min-width: 340px; width: 96%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-focusable="true" tabindex="0" class="css-1dbjc4n r-1loqt21 r-1otgn73 r-eafdt9 r-1i6wzkk r-lrvibr">
                                            <div data-toggle="modal" data-target="#<?php the_ID(); ?>" dir="auto" class="css-901oao css-bfa6kz r-cqee49 r-6qercj r-16s3yzv" style="margin-left: 9px; margin-top: 9px;">
                                                <?php the_title(); ?>


                                            </div>
                                        </div>
                                        <div dir="auto" class="css-901oao css-cens5h r-cqee49 r-6qercj r-1g7fiml" style="-webkit-line-clamp: 2; font-size: 9px; margin-left: 10px; margin-top: 2px; text-align: left;">
                                            <div class="css-1dbjc4n r-xoduu5"><span dir="auto" class="css-901oao css-16my406 r-cqee49 r-10x49cs r-1un5n4g r-bnwqim"><span dir="auto" class="css-901oao css-16my406 r-cqee49 r-10x49cs r-1un5n4g r-bnwqim"><?php the_content(); ?>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div dir="auto" class="css-901oao r-1d0vh0v r-cqee49 r-6qercj r-16s3yzv r-u8s1d" style="left: 9px;">
                                        <?php 
                                        if( is_numeric($sale) ){
                                            echo '<span style="text-decoration: line-through;">' . $price . '</span>';
                                            echo '<span>&nbsp; ' . $sale . '</span>';

                                        }
                                        else{
                                            echo $price; 
                                         }

                                         ?>



                                    </div>
                                </div>
                                <div class="css-1dbjc4n r-u8s1d" style="bottom: 7px; right: 9px;"></div>

                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="<?php the_ID(); ?>" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content modal-lg">
                                <div class="modal-header">
                                    <img class="loading" loading="lazy" width="200" height="200" style="width:100%; height:100%;" alt="" draggable="false" src="<?php echo $image_url; ?>);">
                                </div>
                                <div class="modal-body font-modal">

                                    <h2>
                                        <?php the_title(); ?> </h2>
                                    <h4>
                                        <?php the_content(); ?> </h4>
                                    <p>
                                        <?php 
                                        if( is_numeric($sale) ){
                                            echo '<span style="text-decoration: line-through;">' . $price . '</span>';
                                            echo '<span>&nbsp; ' . $sale . '</span>';

                                        }
                                        else{
                                            echo $price; 
                                         }

                                         ?>
                                    </p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: rgb(155, 155, 155,0.1);!important">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <?php 
            endwhile;
            endif;
            wp_reset_postdata();
    
        endforeach;
    
    endif; 
    ?>

                    <?php
    $cat_terms = get_terms(
                    array('beverage_category'),
                    array(
                            'hide_empty'    => false,
                            'orderby'       => 'name',
                            'order'         => 'ASC',
                            'number'        => 20
                        )
                );
    
    if( $cat_terms ) :
    
        foreach( $cat_terms as $term ) :
         $flag = 1;
    
                    
            $args = array(
                'post_type' => 'beverage',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'tax_query' => array(
    array(
        'taxonomy' => 'beverage_category',
        'field'    => 'slug',
        'terms' =>$term->slug,
    
    ),
    ),
                
            );
            $the_query = new WP_Query( $args ); ?>

                        <?php if ( $the_query->have_posts() ) : ?>


                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


                        <?php
                           $image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        ?>
                            <?php
                        if( get_field('price') ){
                            $price = get_field('price');
                            $sale = 'a';
                        if( get_field('price') ){
                            $sale = get_field('sale_price');
                        }
                        } 
                        ?>


                                <?php if ($flag == 1) { ?>

                                <div class="menu_container container">
                                    <div class="menu_tabs">

                                        <div class="menu_button button--flex menu-active" id="<?php echo $term->slug; ?>">
                                            <?php echo  $term->name ; ?>
                                            <?php $flag = 0 ?>
                                        </div>




                                    </div>
                                </div>

                                <?php  
            } ?>

                                <div class="css-1dbjc4n r-1awozwy r-13qz1uu">
                                    <div class="css-1dbjc4n r-kdyh1x r-1oriduh r-1quu1zo r-1wfhzrg r-dr54s0 r-u8s1d r-1mdsvnl"></div>
                                    <div class="css-1dbjc4n r-kdyh1x r-1oriduh r-1quu1zo r-1wfhzrg r-dr54s0 r-1mdsvnl" style="background-color: rgba(155, 155, 155, 0.05);">
                                        <div class="css-1dbjc4n r-18u37iz r-1pi2tsx">
                                            <div data-focusable="true" tabindex="0" class="css-1dbjc4n r-1wh2hl7 r-o8yidv r-1loqt21 r-1wfhzrg r-1otgn73 r-1xce0ei">
                                                <div class="css-1dbjc4n r-1wh2hl7 r-o8yidv r-1mlwlqe r-1pi2tsx r-1udh08x r-13qz1uu r-417010">
                                                    <div data-toggle="modal" data-target="#<?php the_ID(); ?>" class="css-1dbjc4n r-1niwhzg r-vvn4in r-u6sd8q r-4gszlv r-1p0dtai r-1pi2tsx r-1d2f490 r-u8s1d r-zchlnj r-ipm5af r-13qz1uu r-1wyyakw" style="background-image: url(<?php echo $image_url; ?>);"></div><img loading="lazy" width="200" height="200" data-toggle="modal" data-target="#<?php the_ID(); ?>" alt="" draggable="false" src="<?php echo $image_url; ?>);" class="css-9pa8cd" style="opacity: 1; object-fit: cover; border-top-left-radius: 7px;
                                                    border-bottom-left-radius: 7px;"></div>

                                                <div class="css-1dbjc4n"></div>
                                            </div>
                                            <div class="css-1dbjc4n" style="width: 70%;">
                                                <div class="css-1dbjc4n r-13qz1uu">
                                                    <div class="css-1dbjc4n r-150rngu r-18u37iz r-16y2uox r-1wbh5a2 r-lltvgl r-buy8e9 r-mfh4gg r-2eszeu r-1sncvnh">
                                                        <div class="css-1dbjc4n r-18u37iz">
                                                            <div class="css-1dbjc4n r-cpa5s6">
                                                                <div class="css-1dbjc4n r-18u37iz" style="min-width: 340px; width: 96%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-focusable="true" tabindex="0" class="css-1dbjc4n r-1loqt21 r-1otgn73 r-eafdt9 r-1i6wzkk r-lrvibr">
                                                        <div data-toggle="modal" data-target="#<?php the_ID(); ?>" dir="auto" class="css-901oao css-bfa6kz r-cqee49 r-6qercj r-16s3yzv" style="margin-left: 9px; margin-top: 9px;">
                                                            <?php the_title(); ?>


                                                        </div>
                                                    </div>
                                                    <div dir="auto" class="css-901oao css-cens5h r-cqee49 r-6qercj r-1g7fiml" style="-webkit-line-clamp: 2; font-size: 9px; margin-left: 10px; margin-top: 2px; text-align: left;">
                                                        <div class="css-1dbjc4n r-xoduu5"><span dir="auto" class="css-901oao css-16my406 r-cqee49 r-10x49cs r-1un5n4g r-bnwqim"><span dir="auto" class="css-901oao css-16my406 r-cqee49 r-10x49cs r-1un5n4g r-bnwqim"><?php the_content(); ?></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div dir="auto" class="css-901oao r-1d0vh0v r-cqee49 r-6qercj r-16s3yzv r-u8s1d" style="left: 9px;">
                                                    <?php 
                                        if( is_numeric($sale) ){
                                            echo '<span style="text-decoration: line-through;">' . $price . '</span>';
                                            echo '<span>&nbsp; ' . $sale . '</span>';

                                        }
                                        else{
                                            echo $price; 
                                         }

                                         ?>



                                                </div>
                                            </div>
                                            <div class="css-1dbjc4n r-u8s1d" style="bottom: 7px; right: 9px;"></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="<?php the_ID(); ?>" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content modal-lg">
                                            <div class="modal-header">
                                                <img class="loading" loading="lazy" width="200" height="200" style="width:100%; height:100%;" alt="" draggable="false" src="<?php echo $image_url; ?>);">
                                            </div>
                                            <div class="modal-body font-modal">

                                                <h2>
                                                    <?php the_title(); ?> </h2>
                                                <h4>
                                                    <?php the_content(); ?> </h4>
                                                <p>
                                                    <?php 
                                        if( is_numeric($sale) ){
                                            echo '<span style="text-decoration: line-through;">' . $price . '</span>';
                                            echo '<span>&nbsp; ' . $sale . '</span>';

                                        }
                                        else{
                                            echo $price; 
                                         }

                                         ?>
                                                </p>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: rgb(155, 155, 155,0.1);!important">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <?php 
                endwhile;
                endif;
                wp_reset_postdata();
        
            endforeach;
        
        endif; 
        ?>

    </section>



</body>

<!-- MAIN JS -->
<script src="/wp-content/themes/storefront/main-script.js "></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
    let anchorSelector = 'a[href^="#"]';

    let anchorList =
        document.querySelectorAll(anchorSelector);

    anchorList.forEach(link => {
        link.onclick = function(e) {

            e.preventDefault();

            let destination =
                document.querySelector(this.hash);

            destination.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
</script>

</html>