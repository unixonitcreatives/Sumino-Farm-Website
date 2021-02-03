<?php include 'template/header.php';?>

<?php 
$staticBannerTitle = "Article Title";
?>

<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">News & Events</h1>
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="news-event.php"> News & Event</a></li>
                <li class="active"><?php echo $staticBannerTitle; ?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- section -->
<div class="section padding_layout_1 blog_grid">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right">
        <div class="full">
          <div class="blog_section margin_bottom_0">
            <div class="blog_feature_img"> <img class="img-responsive" src="images/it_service/post-05.jpg" alt="#"> </div>
            <div class="blog_feature_cantant">
              <p class="blog_head">Article Title</p>
              <div class="post_info">
                <ul>
                  <li><i class="fa fa-user" aria-hidden="true"></i> PSIS</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> Oct. 12, 2020</li>
                </ul>
              </div>
              <p>Consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, 
                asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
            <div class="full testimonial_simple_say margin_bottom_30_all" style="margin-top:0;">
              <div class="qoute_testimonial"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
              <p class="margin_bottom_0"><i>Adipisicing elit lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i></p>
              <p class="large_2 theme_color">John Barber</p>
            </div>
            <p>Sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua. 
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate. <br>
              <br>
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>


          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- end section -->

<?php include 'template/footer.php';?>