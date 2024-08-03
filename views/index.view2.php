
  <?php 
  require ('Partial/header.php');
  require('Partial/nav.php') ?>


<?php require('Partial/banner.php');?>
<main>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p>Hello, <?= $_SESSION['user']['email'] ?? 'Guest'?> </p>
    </div>
  </main>
  <?php require('Partial/footer.php');
 ?>