<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Le Vrai Interactive - Front Page</title>
  <?php wp_head(); ?>
</head>
<body>
  <div class="wrapper">
    <main>
      <article>
        <header role="banner">
          <h1>Le Vrai Interactive</h1>
          <button class="menu-btn">Menu</button>
          <nav>
            <?php
      				wp_nav_menu( array(
      					'theme_location' => 'menu-1',
      					'menu_id'        => 'primary-menu',
      				) );
      			?>
          </nav>

          <h2>We are an independent creative agency for you and we are based in London.</h2>

          <a href="#">Scroll down</a>
        </header>
        <section>
          <h3>
            We specialise in <strong>website/app design &amp; build, branding and user-experience.</strong> By partnering with you, we will help you provide a meaningful experience for your audience and increase conversion, with beautiful design.
          </h3>
        </section>

        <section>
          <h3>Approach</h3>
          <div class="">
            <h4>Discovery &amp; strategy</h4>
            <p>We want to know your story and your audience.</p>
            <img src="" alt="">
          </div>
          <div class="">
            <h4>Design &amp; build</h4>
            <p>This is where things happen.</p>
            <img src="" alt="">
          </div>
          <div class="">
            <h4>After launch</h4>
            <p>We celebrate and support you after</p>
            <img src="" alt="">
          </div>
          <a href="#">Discover our process</a>
        </section>

        <section>
          <h3>Featured work</h3>
          <div class="">
            <div class="">
              <a href="#">
                <span>Meem Mobile</span>
              </a>
            </div>
            <div class="">
              <a href="#">
                <span>Tribal Bottles &amp; Co.</span>
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
