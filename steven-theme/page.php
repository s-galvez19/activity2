
<?php

get_header();
$namePage = get_the_title();
$descAbout1 = 'We are...';
$descAbout2 = 'We are working ....';
$descServices1 = 'Our Services';
$descServices2= 'These are the services that we offer ....';

$description1 = 'Maintenance';
$description2 = 'We are in mantenance...';

$pic = '';
//$p = get_the_title();

if ($namePage==='Services'){
    $pic='extra_styles/images/services2.jpeg';
    $description1=$descServices1;
    $description2=$descServices2; } 
else {
    $pic='extra_styles/images/b3.jpeg';
    $description1=$descAbout1;
    $description2=$descAbout2;}
?>
<div class="page-banner">
<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri($pic);?>)"></div>
  <div class="page-banner__content container t-center c-white">
    <h1 class="headline headline--large"><?php echo $namePage; ?></h1>
    <h2 class="headline headline--medium"><?php echo $description1; ?></h2>
    <h3 class="headline headline--small"><?php echo $description2; ?></h3>
   
  </div>
</div>


<?php

while(have_posts()) {

    
    the_post();
    pageBanner();
    ?>
       <div class="container">
       <?php the_content();?>
       </div>
    <?php
}

get_footer();
?>



