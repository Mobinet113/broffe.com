<?php
$portfolio = portfolio();
?>

<section id="portfolio">

  <div class="flourish d-none d-sm-block">
    <?php echo file_get_contents(get_stylesheet_directory_uri() . '/src/media/portfolio-band.svg'); ?>
  </div>

  <div class="container-fluid">

    <div class="row d-block d-sm-none">
      <div class="col">
        <h2>things I've worked on</h2>
      </div>
    </div>

    <div class="row pieces">

      <?php foreach ($portfolio as $item) : ?>
        <div class="col-xs-6 col-sm-4 col-lg-3 piece">
          <a href="<?php echo $item['url']; ?>" rel="noopener nofollow" target="_blank">
            <article>
              <figure>
                <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
              </figure>

              <footer>
                <h3><?php echo $item['title']; ?></h3>
              </footer>
            </article>
          </a>
        </div>
      <?php endforeach; ?>

    </div>

  </div>
</section>