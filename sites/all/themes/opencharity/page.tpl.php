<body class="clearfix">

 <div id="navigation" class="clearfix">
        <div class="container-fluid">
            <div class="row">
              <div class="wrapper">
                <div id="logo">
                       <?php if ($logo): ?>
                           <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"  class="home-logo">

                           </a>
                       <?php endif; ?>
                </div>
                 <nav>
                 <?php print render($page['navigation']); ?>
                 </nav>
              </div>
           
            </div>
        </div>
    </div>

<div id="main-content" class="clearfix">
     <div class="container-fluid">
            <div class="row">
            <div class="wrapper clearfix">
                <div id="content" class="clearfix">
                      <?php  if(drupal_is_front_page())
                    {
                        unset($page['content']['system_main']['default_message']);
                    }
                    ?>
                    <?php print $messages; ?>
                    <?php if ($title): ?>
                        <h1 class="title" id="page-title"><?php print $title; ?></h1>
                    <?php endif; ?>
                    <?php print render($title_suffix); ?>
                    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                    <?php print render($page['help']); ?>
                    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                <?php print render($page['content']); ?>
                </div>
        </div>
        </div>
    </div>
    </div>

    <div id="footer" class="clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="wrapper clearfix">
                <?php print render($page['footer']); ?>
                </div>
            </div>

        </div>
    </div>


    <div id="sub-footer" class="clearfix">
        <div class="container-fluid">
            <div class="row">
               <div class="wrapper clearfix">
                <?php print render($page['sub-footer']); ?>
                </div>
            </div>

        </div>
    </div>
  
</body>