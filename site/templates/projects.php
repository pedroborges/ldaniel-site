<?php snippet('header') ?>

  <main>

    <?php if (count($page->text()->kirbytext()) > 1) : ?>

      <section class="nopadding u-relative" style="border-bottom: 1px solid #ddd">

        <div class="row row-nopadding row-full u-abs-full">
          <?php // snippet('featured', array('page' => $page )); ?>
        </div>

          <?= count($page->text()->kirbytext()) ?>
          <p class="text"><?php echo $page->text()->kirbytext() ?></p>

        </div>

      </section>

    <?php endif ?>

    <section id="projects">

      <div class="row">
        <div class="col-xs-12">

          <h3 class="u-mb20 u-ml10">
            projects

            <span class="filter-container">
              —
              <select id="project_filter" data-base-url="<?php echo $page->url(); ?>">
                <?php
                // build a list of existing tags in subpages
                $tag_list = $page->children()->visible()->pluck('tags', ',', true);
                array_unshift($tag_list, 'all');
                foreach($tag_list as $tag):
                  $selected = ($tag == urldecode(param('tag'))) ? ' selected' : '';
                  echo '<option' . $selected . '>' . $tag . '</option>';
                endforeach;
                ?>
              </select>
            </span>
            <script>
              $('#project_filter').change(function() {
                $urlpath = ($(this).val() === 'all') ? '' : '/tag:' + $(this).val();
                window.location.href = $(this).attr('data-base-url') + $urlpath + '#projects';
              });
            </script>

            <?php if($tag = param('tag')) : ?>
            <a href="<?php echo $page->url() . '#projects' ?>" class="u-ml10">
              <i class="ion ion-android-close"></i>
            </a>
            <?php endif; ?>

          </h3>


        </div>
      </div>

      <?php echo js('https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.0/isotope.pkgd.min.js'); ?>

      <div class="row row-nopadding project-container">
        <?php 
        $projects = $page->children()->visible()->sortBy('year', 'desc');
        if($tag = param('tag')) {
          $projects = $projects->filterBy('tags', urldecode($tag), ',');
        }
        foreach($projects as $project): ?>
        <div class="col-xs-12 col-sm-6 project">
          <a href="<?php echo $project->url() ?>" title="<?php echo $project->title()->html() ?>" class="u-inlineblock">

            <div class="row row-internalpadding">
              <div class="col-xs-5">
                <?php if ($img = $project->featuredimage()): ?>
                  <?php
                  $style = 'background-image: url(\'';
                  $style .= thumb($project->image($img), array('width' => 600, 'quality' => 80))->url();
                  $style .= '\');';
                  // $style .= (strlen($project->featuredcolour()) > 0) ? ' background-color: #' . $project->featuredcolour() . ';' : '';
                  ?>
                  <div class="project-teaser" style="<?php echo $style ?>"></div>
                <?php endif ?>
              </div>
              <div class="col-xs-7 u-pv10">

                <h4 class="project__title u-mb10"><?php echo $project->title()->html() ?></h4>
                <p class="project__description meta"><?php echo $project->description() ?></p>

                <object><p class="meta project__tags">
                  <small><?php snippet('project_tags', array('page' => $project) ) ?></small>
                </p></object>

              </div>
            </div>
            <div class="btn btn-tertiary project__btn">view project</div>
          </a>
        </div>
        <?php endforeach; ?>
      </div>

    </section>

    <?php if($page->slug() == 'work'): ?>
    <a href="<?php echo u('/architecture') ?>" class="u-block u-pv50 bg-white">
      <div class="row">
        <div class="col-md-6">

          <big><em>
            My background is in architecture and urban design. <i class="ion ion-chevron-right u-ml20"></i>
          </em></big>
          
        </div>
      </div>
    </a>
    <?php endif; ?>

  </main>

<?php snippet('footer') ?>