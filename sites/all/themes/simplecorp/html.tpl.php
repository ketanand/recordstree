<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
    <head<?php print $rdf->profile; ?>>
        <?php print $head; ?>
        <title><?php print $head_title; ?></title>
        <?php print $styles; ?>
<?php //Google Analytics code starts ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46468584-1', 'recordstree.com');
  ga('send', 'pageview');

</script>
<?php //Google Analytics code ends ?>

        <?php if (theme_get_setting('responsive_respond','simplecorp')): global $base_path; global $base_root; ?>
        <!--[if lt IE 9]>
        <script src="<?php print $base_root . $base_path . path_to_theme() ?>/js/respond.min.js"></script>
        <![endif]-->
        <?php endif; ?>

        <?php print $scripts; ?>
    </head>
    <body class="<?php print $classes; ?> custom-background" <?php print $attributes;?>>
        <div id="skip-link">
          <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
        </div>
        <?php print $page_top; ?>
        <?php print $page; ?>
        <?php print $page_bottom; ?>
    </body>
</html>
