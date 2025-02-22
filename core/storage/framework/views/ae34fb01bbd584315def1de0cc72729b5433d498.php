
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php if(url()->current() == route('front.index')): ?>
<title><?php echo $__env->yieldContent('hometitle'); ?></title>
<?php else: ?>
<title><?php echo e($setting->title); ?> -<?php echo $__env->yieldContent('title'); ?></title>
<?php endif; ?>

<!-- SEO Meta Tags-->
<?php echo $__env->yieldContent('meta'); ?>
<meta name="author" content="<?php echo e($setting->title); ?>">
<meta name="distribution" content="web">
<!-- Mobile Specific Meta Tag-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicon Icons-->
<link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" sizes="167x167" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
<!--<link rel="stylesheet" media="screen" href="<?php echo e(asset('assets/front/css/plugins.min.css')); ?>">-->

<?php echo $__env->yieldContent('styleplugins'); ?>

<link id="mainStyles" rel="stylesheet" media="screen" href="<?php echo e(asset('assets/front/css/styles.min.css')); ?>">

<link id="mainStyles" rel="stylesheet" media="screen" href="<?php echo e(asset('assets/front/css/responsive.css')); ?>">
<!-- Color css -->
<link href="<?php echo e(asset('assets/front/css/color.php?primary_color=').str_replace('#','',$setting->primary_color)); ?>" rel="stylesheet">

<!-- Modernizr-->
<script src="<?php echo e(asset('assets/front/js/modernizr.min.js')); ?>"></script>

<?php if(DB::table('languages')->where('is_default',1)->first()->rtl == 1): ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/rtl.css')); ?>">
<?php endif; ?>
<style>
    <?php echo e($setting->custom_css); ?>

</style>

<?php if($setting->is_google_adsense == '1'): ?>
    <?php echo $setting->google_adsense; ?>

<?php endif; ?>



<?php if($setting->is_google_analytics == '1'): ?>
    <?php echo $setting->google_analytics; ?>

<?php endif; ?>



<?php if($setting->is_facebook_pixel == '1'): ?>
    <?php echo $setting->facebook_pixel; ?>

<?php endif; ?>


</head>
<!-- Body-->
<body class="
<?php if($setting->theme == 'theme1'): ?>
body_theme1
<?php elseif($setting->theme == 'theme2'): ?>
body_theme2
<?php elseif($setting->theme == 'theme3'): ?>
body_theme3
<?php elseif($setting->theme == 'theme4'): ?>
body_theme4
<?php endif; ?>
">

<!-- Preloader Start -->
<?php if($setting->is_loader == 1): ?>
<div id="preloader">
    <img src="<?php echo e(asset('assets/images/'.$setting->loader)); ?>" alt="<?php echo e(__('Loading...')); ?>">
</div>
<?php endif; ?>

<!-- Preloader endif -->


<!-- Header-->
<!--<header class="site-header navbar-sticky">-->
    <!--<div class="menu-top-area">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-4">-->
    <!--                <div class="t-m-s-a">-->
    <!--                    <a class="track-order-link" href="<?php echo e(route('front.order.track')); ?>"><i class="icon-map-pin"></i><?php echo e(__('Track Order')); ?></a>-->
    <!--                    <a class="track-order-link compare-mobile d-lg-none" href="<?php echo e(route('fornt.compare.index')); ?>"><?php echo e(__('Compare')); ?></a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-8">-->
    <!--                <div class="right-area">-->

    <!--                    <a class="track-order-link wishlist-mobile d-inline-block d-lg-none" href="<?php echo e(route('user.wishlist.index')); ?>"><i class="icon-heart"></i><?php echo e(__('Wishlist')); ?></a>-->
                        
    <!--                    <div class="t-h-dropdown ">-->
    <!--                        <a class="main-link" href="#"><?php echo e(__('Currency')); ?><i class="icon-chevron-down"></i></a>-->
    <!--                        <div class="t-h-dropdown-menu">-->
    <!--                            <?php $__currentLoopData = DB::table('currencies')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
    <!--                                <a class="<?php echo e(Session::get('currency') == $currency->id ? 'active' : ($currency->is_default == 1 && !Session::has('currency') ? 'active' : '')); ?>" href="<?php echo e(route('front.currency.setup',$currency->id)); ?>"><i class="icon-chevron-right pr-2"></i><?php echo e($currency->name); ?></a>-->
    <!--                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
    <!--                        </div>-->
    <!--                    </div>-->

    <!--                    <div class="login-register ">-->
    <!--                        <?php if(!Auth::user()): ?>-->
    <!--                        <a class="track-order-link mr-0" href="<?php echo e(route('user.login')); ?>">-->
    <!--                        <?php echo e(__('Login/Register')); ?>-->
    <!--                        </a>-->
    <!--                        <?php else: ?>-->
    <!--                        <div class="t-h-dropdown">-->
    <!--                            <div class="main-link">-->
    <!--                                <i class="icon-user pr-2"></i> <span class="text-label"><?php echo e(Auth::user()->first_name); ?></span>-->
    <!--                            </div>-->
    <!--                            <div class="t-h-dropdown-menu">-->
    <!--                                <a href="<?php echo e(route('user.dashboard')); ?>"><i class="icon-chevron-right pr-2"></i><?php echo e(__('Dashboard')); ?></a>-->
    <!--                                <a href="<?php echo e(route('user.logout')); ?>"><i class="icon-chevron-right pr-2"></i><?php echo e(__('Logout')); ?></a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <?php endif; ?>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
  <!-- Topbar-->
<!--    <div class="topbar">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-12">-->
<!--                    <div class="d-flex justify-content-between">-->
                        <!-- Logo-->
<!--                        <div class="site-branding">-->
<!--                            <a class="site-logo align-self-center" href="<?php echo e(route('front.index')); ?>">-->
<!--                            <img src="<?php echo e(asset('assets/images/'.$setting->logo)); ?>" alt="<?php echo e($setting->title); ?>"></a>-->
                            
                            
<!--                            </div>-->
                        <!-- Search / Categories-->
<!--                        <div class="search-box-wrap d-none d-lg-block d-flex">-->
<!--                        <div class="search-box-inner align-self-center">-->
<!--                            <div class="search-box d-flex">-->
         <!--                       <select name="category" id="category_select" class="categoris">-->
									<!--<option value=""><?php echo e(__('All')); ?></option>-->
         <!--                           <?php $__currentLoopData = DB::table('categories')->whereStatus(1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
         <!--                           <option value="<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></option>-->
         <!--                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
									<!--</select>-->
<!--                                <form class="input-group" id="header_search_form" action="<?php echo e(route('front.catalog')); ?>" method="get">-->
<!--                                    <input type="hidden" name="category" value="" id="search__category">-->
<!--                                    <span class="input-group-btn">-->
<!--                                    <button type="submit"><i class="icon-search"></i></button>-->
<!--                                    </span>-->
<!--                                    <input class="form-control" type="text" data-target="<?php echo e(route('front.search.suggest')); ?>" id="__product__search" name="search" placeholder="<?php echo e(__('ادخل كلمة البحث')); ?>">-->
<!--                                    <div class="serch-result d-none">-->
<!--                                       -->
<!--                                    </div>-->
<!--                                </form>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                            <span class="d-block d-lg-none close-m-serch"><i class="icon-x"></i></span>-->
<!--                        </div>-->
                        <!-- Toolbar-->
<!--                        <div class="toolbar d-flex">-->

<!--                        <div class="toolbar-item close-m-serch visible-on-mobile"><a href="#">-->
<!--                            <div>-->
<!--                                <i class="icon-search"></i>-->
<!--                            </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="toolbar-item visible-on-mobile mobile-menu-toggle"><a href="#">-->
<!--                            <div><i class="icon-menu"></i><span class="text-label">الأقسام</span></div>-->
<!--                            </a>-->
<!--                        </div>-->

                        <!--<div class="toolbar-item hidden-on-mobile"><a href="<?php echo e(route('fornt.compare.index')); ?>">-->
                        <!--    <div><span class="compare-icon"><i class="icon-repeat"></i><span class="count-label compare_count"><?php echo e(Session::has('compare') ? count(Session::get('compare')) : '0'); ?></span></span><span class="text-label"><?php echo e(__('Compare')); ?></span></div>-->
                        <!--    </a>-->
                        <!--</div>-->
                        <!--<?php if(Auth::check()): ?>-->
                        <!--<div class="toolbar-item hidden-on-mobile"><a href="<?php echo e(route('user.wishlist.index')); ?>">-->
                        <!--    <div><span class="compare-icon"><i class="icon-heart"></i><span class="count-label wishlist_count"><?php echo e(Auth::user()->wishlists->count()); ?></span></span><span class="text-label"><?php echo e(__('Wishlist')); ?></span></div>-->
                        <!--    </a>-->
                        <!--</div>-->
                        <!--<?php else: ?>-->
                      <!--  <div class="toolbar-item hidden-on-mobile"><a href="<?php echo e(route('user.wishlist.index')); ?>">-->
                      <!--    <div><span class="compare-icon"><i class="icon-heart"></i></span><span class="text-label"><?php echo e(__('Wishlist')); ?></span></div>-->
                      <!--    </a>-->
                      <!--</div>-->
                        <!--<?php endif; ?>-->
<!--                        <div class="toolbar-item"><a href="<?php echo e(route('front.cart')); ?>">-->
<!--                            <div><span class="cart-icon"><i class="icon-shopping-cart"></i><span class="count-label cart_count"><?php echo e(Session::has('cart') ? count(Session::get('cart')) : '0'); ?> </span></span><span class="text-label">سلة المشتريات</span></div>-->
<!--                            </a>-->
                            <!--<div class="toolbar-dropdown cart-dropdown widget-cart  cart_view_header" id="header_cart_load" data-target="<?php echo e(route('front.header.cart')); ?>">-->
                            <!--<?php echo $__env->make('includes.header_cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
                            <!--</div>-->
<!--                        </div>-->
<!--                        </div>-->

                        <!-- Mobile Menu-->
<!--                        <div class="mobile-menu">-->
                            <!-- Slideable (Mobile) Menu-->
<!--                            <div class="mm-heading-area">-->
<!--                                <h4>أقسام متجرنا</h4>-->
<!--                                <div class="toolbar-item visible-on-mobile mobile-menu-toggle mm-t-two">-->
<!--                                    <a href="#">-->
<!--                                        <div> <i class="icon-x"></i></div>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <ul class="nav nav-tabs" role="tablist">-->
                            
<!--                                <li class="nav-item" role="presentation99">-->
<!--                                  <span class="" id="mcat-tab" data-bs-toggle="tab" data-bs-target="#mcat"  role="tab" aria-controls="mcat" aria-selected="false">الأقسام</span>-->
<!--                                </li>-->

<!--                              </ul>-->
<!--                              <div class="tab-content p-0" >-->
<!--                                <div class="tab-pane fade show active" id="mmenu" role="tabpanel" aria-labelledby="mmenu-tab">-->
<!--                                    <nav class="slideable-menu">-->
<!--                                                                          <?php echo $__env->make('includes.mobile-category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->

<!--                                    </nav>-->
<!--                                </div>-->
<!--                                <div class="tab-pane fade" id="mcat" role="tabpanel" aria-labelledby="mcat-tab">-->
<!--                                    <nav class="slideable-menu">-->
<!--                                        <?php echo $__env->make('includes.mobile-category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->

<!--                                    </nav>-->
<!--                                </div>-->
<!--                              </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
  <!-- Navbar-->
<!-- <div class="navbar">-->
<!--        <div class="container">-->
<!--            <div class="row g-3 w-100">-->
                <!--<div class="col-lg-3">-->
                <!--    <?php echo $__env->make('includes.categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
                <!--</div>-->
<!--                <div class="col-lg-12 d-flex justify-content-center ">-->
<!--                    <div class="nav-inner">-->
<!--                        <nav class="site-menu">-->
<!--                            <ul>-->
<!--                             <?php $__currentLoopData = DB::table('categories')->whereStatus(1)->take(6)->OrderBy('id','asc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
<!--                                <li class="<?php echo e(request()->routeIs('front.catalog*')  ? 'active' : ''); ?>"><a href="<?php echo e(route('front.catalog').'?category='.$category->slug); ?>" style="font-family: system-ui;-->
<!--    font-weight: 500;"><?php echo e($category->name); ?></a></li>-->
<!--                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->

        
                          
<!--                            </ul>-->
<!--                        </nav>-->
                        

<!--                    </div>-->
                 
<!--                </div>-->
<!--                    <div class="col-lg-12 d-flex justify-content-center mt-0">-->
<!--                    <div class="nav-inner">-->
<!--                        <nav class="site-menu">-->
<!--                            <ul>-->
<!--                             <?php $__currentLoopData = DB::table('categories')->whereStatus(1)->OrderBy('id','desc')->take(4)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
<!--                                <li class="<?php echo e(request()->routeIs('front.catalog*')  ? 'active' : ''); ?>"><a href="<?php echo e(route('front.catalog')); ?>" style="font-family: system-ui;-->
<!--    font-weight: 500;;"><?php echo e($category->name); ?></a></li>-->
<!--                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->

        
<!--                              <li class="">-->
<!--                            <a class="childcategory" href="https://moci.gov.kw.mulfat.com/jobs?type=4" style="    font-weight: 500; font-family: system-ui;"> طلب توظيف</a>-->
<!--                              </li> -->
                          
<!--                            </ul>-->
<!--                        </nav>-->
                        

<!--                    </div>-->
                 
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</header>-->
<!-- Page Content-->
<?php echo $__env->yieldContent('content'); ?>

<!--    announcement banner section start   -->
<!--    announcement banner section end   -->

<!-- Site Footer-->
<!--<footer class="site-footer">-->
<!--    <div class="container">-->
<!--      <div class="row">-->
<!--        <div class="col-6">-->
          <!-- Contact Info-->
<!--          <section class="widget widget-light-skin">-->
<!--            <h3 class="widget-title">تواصل معنا</h3>-->
<!--            <p class="mb-1"><strong>رقم الجوال </strong> ⁦0000000000+⁩</p>-->
<!--            <p class="mb-3"><strong>البريد الالكتروني </strong> mulfat@gmail.com</p>-->
 
<!--          </section>-->
<!--        </div>-->
<!--        <div class="col-6">-->
<!--             شعار المتجر-->
<!--            <section class="widget">-->


<!--              <div class="pt-3">-->
<!--                   <a class="site-logo align-self-center" href="<?php echo e(route('front.index')); ?>">-->
<!--                            <img src="<?php echo e(asset('assets/images/'.$setting->logo)); ?>" alt="<?php echo e($setting->title); ?>" style="width:25%"></a>-->
<!--                  </div>-->

<!--            </section>-->

<!--          </div>-->
<!--                                                      <img class="d-block gateway_image" src="<?php echo e($setting->footer_gateway_img ? asset('assets/images/'.$setting->footer_gateway_img) : asset('system/resources/assets/images/placeholder.png')); ?>">-->

<!--      </div>-->
      <!-- Copyright-->
<!--    </div>-->
<!--  </footer>-->
<!-- Back To Top Button-->
<a class="scroll-to-top-btn" href="#">
    <i class="icon-chevron-up"></i>
</a>
<!-- Backdrop-->
<div class="site-backdrop"></div>

<!-- Cookie alert dialog  -->
<?php if($setting->is_cookie == 1): ?>
<?php echo $__env->make('cookieConsent::index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<!-- Cookie alert dialog  -->


<?php
    $mainbs = [];
    $mainbs['is_announcement'] = $setting->is_announcement;
    $mainbs['announcement_delay'] = $setting->announcement_delay;
    $mainbs['overlay'] = $setting->overlay;
    $mainbs = json_encode($mainbs);
?>

<script>
    var mainbs = <?php echo $mainbs; ?>;
    var decimal_separator = '<?php echo $setting->decimal_separator; ?>';
    var thousand_separator = '<?php echo $setting->thousand_separator; ?>';
</script>

<script>
    let language = {
        Days : '<?php echo e(__('Days')); ?>',
        Hrs : '<?php echo e(__('Hrs')); ?>',
        Min : '<?php echo e(__('Min')); ?>',
        Sec : '<?php echo e(__('Sec')); ?>',
    }

</script>



<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<script type="text/javascript" src="<?php echo e(asset('assets/front/js/plugins.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/back/js/plugin/bootstrap-notify/bootstrap-notify.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/front/js/scripts.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/front/js/lazy.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/front/js/lazy.plugin.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/front/js/myscript.js')); ?>"></script>
<?php echo $__env->yieldContent('script'); ?>

<?php if($setting->is_facebook_messenger	== '1'): ?>
 <?php echo $setting->facebook_messenger; ?>

<?php endif; ?>



<script type="text/javascript">
    let mainurl = '<?php echo e(route('front.index')); ?>';

    let view_extra_index = 0;
      // Notifications
      function SuccessNotification(title){
            $.notify({
                title: ` <strong>${title}</strong>`,
                message: '',
                icon: 'fas fa-check-circle'
                },{
                element: 'body',
                position: null,
                type: "success",
                allow_dismiss: true,
                newest_on_top: false,
                showProgressbar: false,
                placement: {
                    from: "top",
                    align: "right"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 5000,
                timer: 1000,
                url_target: '_blank',
                mouse_over: null,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                },
                onShow: null,
                onShown: null,
                onClose: null,
                onClosed: null,
                icon_type: 'class'
            });
        }

        function DangerNotification(title){
            $.notify({
                // options
                title: ` <strong>${title}</strong>`,
                message: '',
                icon: 'fas fa-exclamation-triangle'
                },{
                // settings
                element: 'body',
                position: null,
                type: "danger",
                allow_dismiss: true,
                newest_on_top: false,
                showProgressbar: false,
                placement: {
                    from: "top",
                    align: "right"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 5000,
                timer: 1000,
                url_target: '_blank',
                mouse_over: null,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                },
                onShow: null,
                onShown: null,
                onClose: null,
                onClosed: null,
                icon_type: 'class'
            });
        }
        // Notifications Ends
    </script>

    <?php if(Session::has('error')): ?>
    <script>
      $(document).ready(function(){
        DangerNotification('<?php echo e(Session::get('error')); ?>')
      })

    </script>
    <?php endif; ?>
    <?php if(Session::has('success')): ?>
    <script>
      $(document).ready(function(){
        SuccessNotification('<?php echo e(Session::get('success')); ?>');
      })

    </script>
    <?php endif; ?>

</body>
</html>
<?php /**PATH /home/u292165191/domains/webook.icu/public_html/core/resources/views/master/front.blade.php ENDPATH**/ ?>