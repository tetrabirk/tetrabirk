<!--teeeeeeeeeeeeeeest-->

<?php
get_header();
?>
<?php while (have_posts()) :
    the_post();
    ?>

<!-- Start main-content -->
<div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider">
        <div class="container-fluid p-0">

            <!-- Slider Revolution Start -->
            <div class="rev_slider_wrapper">
                <div class="rev_slider" data-version="5.0">
                    <?php

                    $images = get_field('slides');

                    if( $images ): ?>
                        <ul>
                            <?php foreach( $images as $image ): ?>
                                <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo $image['sizes']['thumbnail']; ?>" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="<?php echo $image['url']; ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>




                </div><!-- end .rev_slider -->
            </div>
            <!-- end .rev_slider_wrapper -->
            <script>
                $(document).ready(function(e) {
                    var revapi = $(".rev_slider").revolution({
                        sliderType:"standard",
                        jsFileLocation: "js/revolution-slider/js/",
                        sliderLayout: "auto",
                        dottedOverlay: "none",
                        delay: 5000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                style: "gyges",
                                enable: true,
                                hide_onmobile: false,
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                tmp: '',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 0,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 0,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 800,
                                style: "hebe",
                                hide_onleave: false,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 30,
                                space: 5,
                                tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                            }
                        },
                        responsiveLevels: [1240, 1024, 778],
                        visibilityLevels: [1240, 1024, 778],
                        gridwidth: [1170, 1024, 778, 480],
                        gridheight: [720, 768, 960, 720],
                        lazyType: "none",
                        parallax:"mouse",
                        parallaxBgFreeze:"off",
                        parallaxLevels:[2,3,4,5,6,7,8,9,10,1],
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "on",
                        stopAfterLoops: 0,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        fullScreenAutoWidth: "off",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "0",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                });
            </script>
            <!-- Slider Revolution Ends -->
        </div>
    </section>

    <!-- Section: Blog -->
    <section id="blog" data-bg-img="images/pattern/p8.png">
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h2 class="title text-uppercase">News & <span class="text-black font-weight-300">blog</span></h2>
                        <p class="text-uppercase letter-space-4">Join our Health Zone and be healthy.</p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-4">
                        <article class="post clearfix">
                            <div class="entry-header">
                                <div class="post-thumb thumb"> <img class="img-responsive img-fullwidth" alt="" src="http://placehold.it/370x350"> </div>
                                <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <ul class="font-12">
                                                <li><a href="#" class="text-white"><i class="fa fa-thumbs-o-up"></i> <br>
                                                        30 Likes</a></li>
                                                <li class="mt-20"><a href="#" class="text-white"><i class="fa fa-comments-o"></i> <br>
                                                        72 Comments</a></li>
                                                <li class="mt-20"><a href="#" class="text-white"><i class="fa fa-share-square-o"></i> <br>
                                                        Share</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-content p-20">
                                <h4 class="entry-title text-white text-uppercase"><a href="#">Post title here</a></h4>
                                <ul class="entry-date list-inline mt-10 mb-10">
                                    <li><a href="#" class="text-theme-colored">Jan 13, 2015</a></li>
                                    <li><a href="#">Written by: <span class="text-theme-colored">Admin</span></a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi adipisci consequuntur tempore excepturi culpa perferendis! Quis voluptas consequuntur, quas magnam dolores ...</p>
                                <a href="#" class="btn-read-more btn-sm">Read More</a>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="post clearfix">
                            <div class="entry-header">
                                <div class="post-thumb thumb"> <img class="img-responsive img-fullwidth" alt="" src="http://placehold.it/370x350"> </div>
                                <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <ul class="font-12">
                                                <li><a href="#" class="text-white"><i class="fa fa-thumbs-o-up"></i> <br>
                                                        30 Likes</a></li>
                                                <li class="mt-20"><a href="#" class="text-white"><i class="fa fa-comments-o"></i> <br>
                                                        72 Comments</a></li>
                                                <li class="mt-20"><a href="#" class="text-white"><i class="fa fa-share-square-o"></i> <br>
                                                        Share</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-content p-20">
                                <h4 class="entry-title text-white text-uppercase"><a href="#">Post title here</a></h4>
                                <ul class="entry-date list-inline mt-10 mb-10">
                                    <li><a href="#" class="text-theme-colored">Jan 13, 2015</a></li>
                                    <li><a href="#">Written by: <span class="text-theme-colored">Admin</span></a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi adipisci consequuntur tempore excepturi culpa perferendis! Quis voluptas consequuntur, quas magnam dolores ...</p>
                                <a href="#" class="btn-read-more btn-sm">Read More</a>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="post clearfix">
                            <div class="entry-header">
                                <div class="post-thumb thumb"> <img class="img-responsive img-fullwidth" alt="" src="http://placehold.it/370x350"> </div>
                                <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <ul class="font-12">
                                                <li><a href="#" class="text-white"><i class="fa fa-thumbs-o-up"></i> <br>
                                                        30 Likes</a></li>
                                                <li class="mt-20"><a href="#" class="text-white"><i class="fa fa-comments-o"></i> <br>
                                                        72 Comments</a></li>
                                                <li class="mt-20"><a href="#" class="text-white"><i class="fa fa-share-square-o"></i> <br>
                                                        Share</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-content p-20">
                                <h4 class="entry-title text-white text-uppercase"><a href="#">Post title here</a></h4>
                                <ul class="entry-date list-inline mt-10 mb-10">
                                    <li><a href="#" class="text-theme-colored">Jan 13, 2015</a></li>
                                    <li><a href="#">Written by: <span class="text-theme-colored">Admin</span></a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi adipisci consequuntur tempore excepturi culpa perferendis! Quis voluptas consequuntur, quas magnam dolores ...</p>
                                <a href="#" class="btn-read-more btn-sm">Read More</a>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="divider bg-lighter">
        <div class="container pb-50">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="text-uppercase title">GET IN <span class="text-black font-weight-300"> TOUCH</span></h2>
                        <p class="text-uppercase letter-space-1">JOIN OUR TRAINING CLUB AND RISE TO A NEW CHALLENGE</p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="contact-wrapper">

                            <!-- Contact Form -->
                            <form id="contact_form" name="contact_form" class="form-transparent" action="includes/sendmail.php" method="post">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input  name="form_name" class="form-control" type="text" placeholder="Enter Name" required>
                                            </div>
                                            <div class="form-group">
                                                <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                                            </div>
                                            <div class="form-group">
                                                <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Enter Message" style="height: 165px;"></textarea>
                                            </div>
                                            <div class="form-group mt-20">
                                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                                                <button type="submit" class="btn btn-theme-colored mr-5" data-loading-text="Please wait...">Send your message</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <h3 class="mt-0 text-theme-colored font-weight-300">Contact info</h3>
                                        <p>Integer tincidunt  Cras dapibus Vivamus elementum semper nisi Aenean vulputate eleifend tellus.</p>

                                        <ul class="mt-30">
                                            <li><i class="fa fa-phone mb-20 text-theme-colored mr-5 font-20"></i> +262 695 2601</li>
                                            <li><i class="fa fa-map-marker mb-20 text-theme-colored mr-5 font-20"></i> 121 King Street, Australia</li>
                                            <li><i class="fa fa-envelope mb-20 text-theme-colored mr-5 font-20"></i> you@yourdomain.com</li>
                                            <li><i class="fa fa-globe mb-20 text-theme-colored mr-5 font-20"></i> www.yourWebside.com</li>

                                        </ul>
                                    </div>
                                </div>
                            </form>
                            <!-- Contact Form Validation-->
                            <script type="text/javascript">
                                $("#contact_form").validate({
                                    submitHandler: function(form) {
                                        var form_btn = $(form).find('button[type="submit"]');
                                        var form_result_div = '#form-result';
                                        $(form_result_div).remove();
                                        form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                        var form_btn_old_msg = form_btn.html();
                                        form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                        $(form).ajaxSubmit({
                                            dataType:  'json',
                                            success: function(data) {
                                                if( data.status == 'true' ) {
                                                    $(form).find('.form-control').val('');
                                                }
                                                form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                $(form_result_div).html(data.message).fadeIn('slow');
                                                setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                                            }
                                        });
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->

    <?php
endwhile; ?>

<?php
get_footer();
?>