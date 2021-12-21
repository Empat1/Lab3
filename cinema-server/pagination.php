<?php
  require_once './connection.php';

  $posts_number = 3;
  $params = &$_GET;
  $page = $params['page'] * $posts_number;

  $reviews = $dbh->query('SELECT * from posts LIMIT ' . $page . ', ' . $posts_number);
?>

<?php foreach ($reviews as $review): ?>
  <div class="flex review">
    <!-- Постер =================== -->
    <img src="./images/posters/<?= $review['id'] ?>.jpg" alt="Изображение постера фильма">
    <div class="review_info">
      <!-- Название =============== -->
      <a class="pointer review_title" href="/review.php?id=<?= $review['id'] ?>">
        <p>
          <?= $review['title'] ?>
        </p>
      </a>
      <!-- Дата публикации ======== -->
      <span class="review_date"><?= $review['created'] ?></span>
      <!-- Кнопка (ссылка) на пост  -->
      <a class="pointer" href="/review.php?id=<?= $review['id'] ?>">
        <button class="pointer">
          Читать
        </button>
      </a>
    </div>
  </div>
<?php endforeach; ?>