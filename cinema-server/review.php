<?php
  require_once './connection.php';

  $sth = $dbh->prepare("SELECT * FROM `posts` WHERE `id` = ?");
  $sth->execute(array($_GET['id']));
  $review = $sth->fetch(PDO::FETCH_ASSOC);
?>

<?php include_once 'header.php' ?>

<div class="container flex review_header">
  <h2><?= $review['title'] ?></h2>
  <span>от <?= $review['created'] ?></span>
</div>

<section class="container review_section">
  <img src="./images/posters/<?= $review['id'] ?>.jpg" alt="Изображение постера фильма">
  <p><?= $review['text'] ?></p>
</section>

<?php include_once 'footer.php' ?>

<?php include_once 'modal.php' ?>
</body>