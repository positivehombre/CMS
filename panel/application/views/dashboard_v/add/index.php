<!DOCTYPE html>
<html lang="tr">
<head>
	<?php $this->load->view('includes/head') ?>
</head>

<body class="menubar-left menubar-unfold menubar-light theme-primary">
  <!--============= start main area -->

  <!-- APP NAVBAR ==========-->
  <?php $this->load->view('includes/navbar.php') ?>
  <!--========== END app navbar -->

  <!-- APP ASIDE ==========-->
  <?php $this->load->view('includes/aside.php') ?>
  <!--========== END app aside -->

  <!-- navbar search -->
  <?php $this->load->view('includes/navbar-search.php') ?>

  <!-- APP MAIN ==========-->
  <main id="app-main" class="app-main">
    <div class="wrap">
     <section class="app-content">
      <?php $this->load->view($viewFolder.'/'.$subViewFolder.'/content'); ?>
     </section>
     <!-- #dash-content -->
   </div><!-- .wrap -->
   <!-- APP FOOTER -->
   <!-- NO NEED FOOTER
  <?php $this->load->view('includes/footer') ?>
-->
<!-- /#app-footer -->
</main>
<!--========== END app main -->

<!-- SIDE PANEL -->

<?php $this->load->view('includes/include_script.php') ?>
</body>
</html>