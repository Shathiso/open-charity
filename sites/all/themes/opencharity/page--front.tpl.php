<body>
 <div id="header" class="clearfix">
       <div class="container-fluid">
         <div class="row">
            <div class="wrapper clearfix">
                <?php print render($page['header']); ?>
            </div>
         </div>
       </div>
 </div>
       
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

    <div id="carousel" class="clearfix">
       <div class="container-fluid">
         <div class="row">
            <div class="wrapper clearfix">
                <?php print render($page['carousel']); ?>
            </div>
         </div>
       </div>
    </div>
    
    <div id="events" class="clearfix">
      <div class="container-fluid">
        <div class="row">
            <div class="wrapper clearfix">
                <?php print render($page['events']); ?>
            </div>
        </div>
       </div>
    </div>


     <div id="get-involved" class="clearfix">
          <div class="container-fluid">
            <div class="row">
                 <div class="wrapper clearfix">
                  <?php print render($page['get-involved']); ?>
                </div>
            </div>
         </div>
      </div>

  <div id="mission" class="clearfix">
        <div class="container-fluid">
            <div class="row">


          <div class="wrapper clearfix">

                <?php print render($page['mission']); ?>
                </div>

            </div>
        </div>
  </div>



      <div id="members" class="clearfix">
        <div class="container-fluid">
            <div class="row">
                 <div class="wrapper clearfix">
                <?php print render($page['members']); ?>

                 </div>

            </div>

        </div>
    </div>

     <div id="blog" class="clearfix">
        <div class="container-fluid">
            <div class="row">
              <div class="wrapper clearfix">
                <?php print render($page['blog']); ?>

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