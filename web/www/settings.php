<?php
  session_start();
  session_regenerate_id();
  if( !isset($_SESSION['token']) )
  {
    header("Location: /login");
  }
?>
<?php include(__DIR__ .  '/html/header.html') ?>
<body>
  <section class="body-section">
    <?php include(__DIR__ . '/html/sidebar.html') ?>
    <div class="main">
      <?php include(__DIR__ . '/html/topbar.html') ?>
      <div id="app" class="app">
          <div id="appScreen" class="app-screen">
          <?php include(__DIR__ . '/html/settings.html') ?>
          </div>
      </div>
    </div>
    <?php include(__DIR__ . '/html/modal-popup.html') ?>
    <?php include(__DIR__ . '/html/popup-message.html') ?>
  </section>

  <script src="assets/js/settings.js" type="module" ></script>
</body>
<?php include(__DIR__ . '/html/footer.html') ?>