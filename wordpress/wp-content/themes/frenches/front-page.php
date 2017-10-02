<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Le Vrai Interactive - Front Page</title>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700|Montserrat:300,400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/bower_components/css-hamburgers/dist/hamburgers.min.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/bower_components/animate.css/animate.css">
  <?php wp_head(); ?>
</head>
<body>
  <div class="wrapper">
    <main>
      <article class="container-fluid">
        <header class="banner" role="banner">
          <h1 class="banner__title-logo">
            <span class="image-container">
              <a href="/">
                <img class="logo-image image-container__image" src="<?php echo get_bloginfo("template_directory"); ?>/images/src/logo-v4-fat.png" alt="Le Vrai Interactive">
              </a>
            </span>
          </h1>
          <button class="menu-btn hamburger hamburger--squeeze" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
          <nav class="main-nav main-nav--hidden">
            <?php
      				wp_nav_menu( array(
      					'theme_location' => 'menu-1',
      					'menu_id'        => 'primary-menu'
      				) );
      			?>
          </nav>

          <h2 class="banner__title">We are an independent creative agency for you and we are based in London.</h2>

          <a class="banner__scroll-down-btn" href="#">Scroll down</a>
        </header>
        <section class="intro">
          <h3 class="intro__title">
            We specialise in <strong class="emphasise-text">website/app design &amp; build, branding and user-experience.</strong> <br />By partnering with you, we will help you provide a meaningful experience for your audience and increase conversion, with beautiful design.
          </h3>
        </section>

        <section class="approach">
          <h3 class="section-title">Approach</h3>
          <div class="row">
            <div class="col-xs-12 col-lg-4">
              <h4 class="approach__title">Discovery &amp; strategy</h4>
              <p class="approach__text">We want to know your story and your audience.</p>

              <div class="image-container-svg approach__icon">
                <svg id="headphone-icon" data-name="headphone icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 310"><defs><style>.cls-1{fill:#fff;}</style></defs><title>headphone</title><path class="cls-1" d="M154.41,71.36A107.92,107.92,0,0,1,262.34,179.29c0,1.66-.05,3.31-.13,5v37.38h17.95V184.24H280c.06-1.64.13-3.29.13-5a125.74,125.74,0,0,0-251.49,0c0,1.66.06,3.31.13,5h-.13v37.38H46.62V184.24c-.07-1.64-.13-3.29-.13-5A107.92,107.92,0,0,1,154.41,71.36Z"/><path class="cls-1" d="M218.85,190.18v49.49a18.29,18.29,0,1,0,36.58,0V190.18a18.29,18.29,0,1,0-36.58,0Z"/><path class="cls-1" d="M53.77,190.18v49.49a18.29,18.29,0,1,0,36.58,0V190.18a18.29,18.29,0,1,0-36.58,0Z"/></svg>
              </div>
            </div>
            <div class="col-xs-12 col-lg-4">
              <h4 class="approach__title">Design &amp; build</h4>
              <p class="approach__text">This is where things happen.</p>
              <div class="image-container-svg approach__icon">
                <svg id="gamepad-icon" data-name="gamepad icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 310"><defs><style>.cls-1{fill:#fff;}</style></defs><title>gamepad</title><g id="_Group_" data-name="&lt;Group&gt;"><g id="_Group_2" data-name="&lt;Group&gt;"><g id="_Group_3" data-name="&lt;Group&gt;"><rect id="_Path_" data-name="&lt;Path&gt;" class="cls-1" x="145.03" y="186.39" width="21.47" height="11"/></g><g id="_Group_4" data-name="&lt;Group&gt;"><path id="_Path_2" data-name="&lt;Path&gt;" class="cls-1" d="M42.08,254.19A35.56,35.56,0,0,1,7,212.87l13.4-80.43A46.19,46.19,0,0,1,66.1,93.72H243.9a46.19,46.19,0,0,1,45.71,38.72L303,212.87a35.68,35.68,0,0,1-24.09,39.58,35.3,35.3,0,0,1-41.36-15.6L212.44,194.7l9.45-5.63L247,231.22A24.35,24.35,0,0,0,275.54,242a24.61,24.61,0,0,0,16.62-27.31l-13.4-80.43a35.23,35.23,0,0,0-34.86-29.53H66.1a35.23,35.23,0,0,0-34.86,29.53l-13.4,80.43A24.61,24.61,0,0,0,34.46,242,24.35,24.35,0,0,0,63,231.22l25.11-42.15,9.45,5.63L72.45,236.85A35.28,35.28,0,0,1,42.08,254.19Z"/></g><g id="_Group_5" data-name="&lt;Group&gt;"><g id="_Group_6" data-name="&lt;Group&gt;"><path id="_Compound_Path_" data-name="&lt;Compound Path&gt;" class="cls-1" d="M117.7,217.39a34.17,34.17,0,1,1,34.17-34.17A34.21,34.21,0,0,1,117.7,217.39Zm0-57.33a23.17,23.17,0,1,0,23.17,23.17A23.19,23.19,0,0,0,117.7,160.05Z"/></g><g id="_Group_7" data-name="&lt;Group&gt;"><path id="_Compound_Path_2" data-name="&lt;Compound Path&gt;" class="cls-1" d="M192.3,217.39a34.17,34.17,0,1,1,34.17-34.17A34.21,34.21,0,0,1,192.3,217.39Zm0-57.33a23.17,23.17,0,1,0,23.17,23.17A23.19,23.19,0,0,0,192.3,160.05Z"/></g></g><g id="_Group_8" data-name="&lt;Group&gt;"><g id="_Group_9" data-name="&lt;Group&gt;"><rect id="_Path_3" data-name="&lt;Path&gt;" class="cls-1" x="57.68" y="124.32" width="15" height="42.38"/></g><g id="_Group_10" data-name="&lt;Group&gt;"><rect id="_Path_4" data-name="&lt;Path&gt;" class="cls-1" x="43.99" y="138.01" width="42.38" height="15"/></g></g><g id="_Group_11" data-name="&lt;Group&gt;"><g id="_Group_12" data-name="&lt;Group&gt;"><g id="_Group_13" data-name="&lt;Group&gt;"><circle class="cls-1" cx="243.5" cy="130.51" r="8.75"/></g><g id="_Group_14" data-name="&lt;Group&gt;"><circle class="cls-1" cx="243.5" cy="160.51" r="8.75"/></g></g><g id="_Group_15" data-name="&lt;Group&gt;"><g id="_Group_16" data-name="&lt;Group&gt;"><circle class="cls-1" cx="258.5" cy="145.51" r="8.75"/></g><g id="_Group_17" data-name="&lt;Group&gt;"><circle class="cls-1" cx="228.5" cy="145.51" r="8.75"/></g></g></g><g id="_Group_18" data-name="&lt;Group&gt;"><g id="_Group_19" data-name="&lt;Group&gt;"><path id="_Path_5" data-name="&lt;Path&gt;" class="cls-1" d="M117.63,99.22h-11V87.05A1.67,1.67,0,0,0,105,85.39H75a1.67,1.67,0,0,0-1.67,1.67V99.22h-11V87.05A12.68,12.68,0,0,1,75,74.39h30a12.68,12.68,0,0,1,12.67,12.67Z"/></g><g id="_Group_20" data-name="&lt;Group&gt;"><path id="_Path_6" data-name="&lt;Path&gt;" class="cls-1" d="M247.71,99.22h-11V87.05A1.67,1.67,0,0,0,235,85.39H205a1.67,1.67,0,0,0-1.67,1.67V99.22h-11V87.05A12.68,12.68,0,0,1,205,74.39h30a12.68,12.68,0,0,1,12.67,12.67Z"/></g></g><g id="_Group_21" data-name="&lt;Group&gt;"><path id="_Path_7" data-name="&lt;Path&gt;" class="cls-1" d="M159.47,98.47h-11V90.13a34.33,34.33,0,0,1,65.95-13.36l-10.13,4.29a23.33,23.33,0,0,0-44.82,9.08Z"/></g><g id="_Group_22" data-name="&lt;Group&gt;"><rect id="_Path_8" data-name="&lt;Path&gt;" class="cls-1" x="139.53" y="83.2" width="28.87" height="20.77"/></g></g><g id="_Group_23" data-name="&lt;Group&gt;"><g id="_Group_24" data-name="&lt;Group&gt;"><rect id="_Path_9" data-name="&lt;Path&gt;" class="cls-1" x="128.75" y="122.97" width="12" height="11"/></g><g id="_Group_25" data-name="&lt;Group&gt;"><rect id="_Path_10" data-name="&lt;Path&gt;" class="cls-1" x="169.25" y="122.97" width="12" height="11"/></g><g id="_Group_26" data-name="&lt;Group&gt;"><rect id="_Path_11" data-name="&lt;Path&gt;" class="cls-1" x="149.77" y="143.05" width="12" height="11"/></g></g></g></svg>
              </div>
            </div>
            <div class="col-xs-12 col-lg-4">
              <h4 class="approach__title">After launch</h4>
              <p class="approach__text">We celebrate and support you after</p>
              <div class="image-container-svg approach__icon">
                <svg id="rocket-icon" data-name="rocket icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 310"><defs><style>.cls-1{fill:#fff;stroke:#fff;stroke-width:6px;}</style></defs><title>rocket</title><path class="cls-1" d="M267.33,41.17a3.33,3.33,0,0,0-2.56-1c-43.24,2.58-91.13,22.66-127.48,59.32a157.65,157.65,0,0,0-23.59-2.21c-12.7,0-23,2.89-31.91,10.27s-16.4,18.71-25,35.45a3.34,3.34,0,0,0,3,4.85,3.38,3.38,0,0,0,.82-.1c7.95-2,14.42-4.48,20.29-6.35s11.1-3.16,16.8-3.16a40.22,40.22,0,0,1,9,1.06q-2.14,3.67-4.14,7.48a3.33,3.33,0,0,0,.6,3.91l54.59,54.59a3.34,3.34,0,0,0,3.91.6q3.76-2,7.38-4.09a40.13,40.13,0,0,1,1,8.81c0,5.71-1.29,10.93-3.16,16.81s-4.31,12.34-6.35,20.29a3.34,3.34,0,0,0,4.75,3.8c16.73-8.55,28.09-16,35.45-25s10.31-19.21,10.27-31.91a157.41,157.41,0,0,0-2.17-23.35C245.6,135,265.72,87,268.3,43.73A3.35,3.35,0,0,0,267.33,41.17ZM97.74,131.59c-6.74,0-12.73,1.54-18.83,3.48-4,1.28-8.06,2.73-12.5,4.12,6.88-12.58,13.08-21.08,19.63-26.45,7.68-6.28,15.86-8.71,27.67-8.75a134,134,0,0,1,18,1.44,197.66,197.66,0,0,0-21.3,27.92A48,48,0,0,0,97.74,131.59Zm97.89,90.73c-5.37,6.55-13.87,12.75-26.45,19.63,1.39-4.44,2.84-8.5,4.12-12.5,1.94-6.1,3.48-12.09,3.48-18.83a48,48,0,0,0-1.71-12.43A197.76,197.76,0,0,0,203,176.93a133.16,133.16,0,0,1,1.41,17.72C204.33,206.45,201.9,214.64,195.62,222.32ZM170.4,193.24l-.31.08a3.3,3.3,0,0,0-1.58,1.07q-3.81,2.3-7.75,4.44l-51.1-51.1q2.36-4.37,4.92-8.55a3.4,3.4,0,0,0,.2-.33c34.38-56.08,94-87.35,146.59-91.73C257,99.52,226,158.8,170.4,193.24Zm31.37-63.88h0a22.56,22.56,0,0,0,16-6.63l-2.36-2.36,2.36,2.36a22.64,22.64,0,1,0-16,6.63ZM190.49,95.44a16,16,0,1,1-4.68,11.26A15.89,15.89,0,0,1,190.49,95.44ZM128.32,142.7a3.34,3.34,0,1,0,2.36,1A3.36,3.36,0,0,0,128.32,142.7Zm34.07,40.91a3.34,3.34,0,1,0-2.36-1A3.36,3.36,0,0,0,162.39,183.61ZM143,165.55a3.34,3.34,0,1,0-1-2.36A3.36,3.36,0,0,0,143,165.55Zm-89.08,61,46.18-46.18a3.34,3.34,0,1,0-4.72-4.72L49.15,221.84a3.34,3.34,0,0,0,4.72,4.72Zm64.07-33a3.34,3.34,0,0,0-4.72,0L42.67,264.11a3.34,3.34,0,0,0,4.72,4.72l70.56-70.56A3.33,3.33,0,0,0,117.95,193.55Zm12.18,16.9L111,229.57a3.34,3.34,0,1,0,4.72,4.72l19.12-19.12a3.34,3.34,0,1,0-4.72-4.72Z"/></svg>
              </div>
            </div>
          </div>
          <a class="primary-btn discover-process-btn" href="#">Discover our process</a>
        </section>

        <section class="featured-work">
          <h3 class="section-title">Featured work</h3>
          <div class="row">
            <div class="featured-work__item col-xs-12 col-lg-6">
              <a href="#">
                <span class="featured-work__item-title">Meem Mobile</span>
              </a>
            </div>
            <div class="featured-work__item col-xs-12 col-lg-6">
              <a href="#">
                <span class="featured-work__item-title">Tribal Bottles &amp; Co.</span>
              </a>
            </div>
          </div>
        </section>
      </article>

      <?php get_footer(); ?>
    </main>
  </div>
</body>
</html>
