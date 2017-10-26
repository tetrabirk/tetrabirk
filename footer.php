
<!-- Footer -->

<footer id="footer" class="footer bg-black-222">
    <div class="container pb-50">
        <div class="row border-bottom-black">
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <img class="mt-10 mb-20" alt="" src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-wide-white.png">
                    <p>203, Envato Labs, Behind Alis Steet, Melbourne, Australia.</p>
                    <ul class="list-inline mt-5">
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li>
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">contact@yourdomain.com</a> </li>
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#">www.yourdomain.com</a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Latest News</h5>
                    <div class="latest-posts">
                        <article class="post media-post clearfix pb-0 mb-10">
                            <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-5"><a href="#">Sustainable Construction</a></h5>
                                <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                        </article>
                        <article class="post media-post clearfix pb-0 mb-10">
                            <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
                                <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                        </article>
                        <article class="post media-post clearfix pb-0 mb-10">
                            <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-5"><a href="#">Storefront Installations</a></h5>
                                <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Useful Links</h5>
                    <ul class="list angle-double-right list-border">
                        <li><a href="#">Body Building</a></li>
                        <li><a href="#">Fitness Classes</a></li>
                        <li><a href="#">Your Service Title</a></li>
                        <li><a href="#">Yoga Courses</a></li>
                        <li><a href="#">Training</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Opening Hours</h5>
                    <div class="opening-hours">
                        <ul class="list-border">
                            <li class="clearfix"> <span> Mon - Tues :  </span>
                                <div class="value pull-right"> 6.00 am - 10.00 pm </div>
                            </li>
                            <li class="clearfix"> <span> Wednes - Thurs :</span>
                                <div class="value pull-right"> 8.00 am - 6.00 pm </div>
                            </li>
                            <li class="clearfix"> <span> Fri : </span>
                                <div class="value pull-right"> 3.00 pm - 8.00 pm </div>
                            </li>
                            <li class="clearfix"> <span> Sun : </span>
                                <div class="value pull-right"> Closed </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-10">
            <div class="col-md-5">
                <h4 class="text-white">Subscribe Us</h4>
                <form id="mailchimp-subscription-form-footer" class="newsletter-form mt-20">
                    <div class="input-group">
                        <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer" style="height: 45px;">
                        <span class="input-group-btn">
                <button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14" type="submit">Subscribe</button>
              </span>
                    </div>
                </form>
                <!-- Mailchimp Subscription Form Validation-->
                <script type="text/javascript">
                    $('#mailchimp-subscription-form-footer').ajaxChimp({
                        callback: mailChimpCallBack,
                        url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                    });

                    function mailChimpCallBack(resp) {
                        // Hide any previous response text
                        var $mailchimpform = $('#mailchimp-subscription-form-footer'),
                            $response = '';
                        $mailchimpform.children(".alert").remove();
                        console.log(resp);
                        if (resp.result === 'success') {
                            $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                        } else if (resp.result === 'error') {
                            $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                        }
                        $mailchimpform.prepend($response);
                    }
                </script>
            </div>
            <div class="col-md-4 col-md-offset-3 mt-20">
                <div class="pull-right">
                    <ul class="styled-icons icon-bordered small square list-inline mt-10">
                        <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype text-white"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube text-white"></i></a></li>
                    </ul>
                </div>
                <div class="pull-left">
                    <h5 class="text-white">Call Us Now</h5>
                    <h4 class="text-gray">00144-636894</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copy-right p-20 bg-black-333">
        <div class="row text-center">
            <div class="col-md-12">
                <p class="font-11 text-black-777 m-0">Copyright &copy;2015 ThemeMascot. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->
<?php wp_footer()?>

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/custom.js"></script>

</body>
</html>