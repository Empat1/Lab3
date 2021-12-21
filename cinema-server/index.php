<?php
  require_once './connection.php';
  // $reviews = $dbh->query('SELECT * from posts');
?>

  <?php include_once 'header.php' ?>

  <!-- Тело сайта ===================== -->
  <main class="container">
    <div class="container flex review_header">
      <h2>Обзоры на фильмы</h2>
    </div>

    <section class="reviews">
      <?php if (isset($reviews)) {
        foreach ($reviews as $review) { ?>
        <div id="<?= $review['id'] ?>" class="flex review">
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
      <?php }; }; ?>
    </section>

    <div class="container flex">
      <button class="pointer show_more" onclick="load();">
        Показать еще
      </button>
    </div>
  </main>

  <?php include_once 'footer.php' ?>

  <?php include_once 'modal.php' ?>

  <script>
    let page = 0
    const load = () => {
      let objXMLHttpRequest = new XMLHttpRequest()
      let data = 'page=' + page
      objXMLHttpRequest.open('GET', 'pagination.php' + "?" + data, true)
      objXMLHttpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
      objXMLHttpRequest.onreadystatechange = () => {
        if (objXMLHttpRequest.readyState === 4) {
          if (objXMLHttpRequest.status === 200) {
            // alert(objXMLHttpRequest.responseText)
            document.querySelector('section.reviews').insertAdjacentHTML("beforeEnd", objXMLHttpRequest.responseText)
          } else {
            alert('Error code: ' + objXMLHttpRequest.status)
            alert('Error message: ' + objXMLHttpRequest.statusText)
          }
        }
      }
      objXMLHttpRequest.send(null)
      page++
    }
    load()
  </script>
</body>
</html>