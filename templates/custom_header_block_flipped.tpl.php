<?php
/**
 * @file
 * Display logo to right of site name
 *
 * Available variables:
 *
 * - $base_path: The base URL path of the Backdrop installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $front_page: The URL of the front page. Use this instead of $base_path, when
 *   linking to the front page. This includes the language domain or prefix.
 * - $site_name: The name of the site, empty when display has been disabled.
 * - $site_slogan: The site slogan, empty when display has been disabled.
 */
?>
<?php if ($site_slogan && !$slogan_bottom): ?>
  <div class="site-slogan slogan-top"><?php print $site_slogan; ?></div>
<?php endif; ?>

<?php if ($site_name || $logo): ?>
  <div class="logo-and-name custom-flipped">
    <?php if ($site_name): ?>
      <?php if (!$is_front): ?>
        <div class="site-name"><strong>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
        </strong></div>
      <?php else: /* Use h1 when the content title is empty */ ?>
        <h1 class="site-name">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
        </h1>
      <?php endif; ?>
    <?php endif; ?>
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
  </div> <!-- /#logo-and-name -->
<?php endif; ?>

<?php if ($site_slogan && $slogan_bottom): ?>
  <div class="site-slogan slogan-bottom"><?php print $site_slogan; ?></div>
<?php endif; ?>
