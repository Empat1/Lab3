<!-- Модальное окно ================= -->
<div class="modal">
  <!-- Блок АВТОРИЗАЦИИ ============= -->
  <div id="auth" class="modal_window" onsubmit="return login()">
    <h3>Авторизация</h3>
    <!-- Форма ====================== -->
    <form class="flex">
      <!-- Логин ====================== -->
      <div class="flex field">
        <label for="auth_login">Логин</label>
        <input required autocomplete placeholder="Введите логин"  id="auth_login" type="text">
      </div>
      <!-- Пароль ====================== -->
      <div class="flex field">
        <label for="auth_password">Пароль</label>
        <input required autocomplete placeholder="Введите пароль" type="password" id="auth_password">
      </div>
      <button class="pointer" type="submit">Войти</button>
    </form>
    <button onclick="switchToReg()" class="pointer additional">Регистрация</button>
  </div>

  <!-- Блок РЕГИСТРАЦИИ =============== -->
  <div id="reg" class="modal_window" onsubmit="register()">
    <h3>Регистрация</h3>
    <!-- Форма ======================== -->
    <form class="flex">
      <!-- Имя ======================== -->
      <div class="flex field">
        <label for="name">Имя</label>
        <input required autocomplete placeholder="Евгений" value="Евгений" pattern="[а-яА-я0-9- ]+" id="name" type="text">
      </div>
      <!-- Email ====================== -->
      <div class="flex field">
        <label for="email">Email</label>
        <input required autocomplete placeholder="пример-почты@mail.ru" value="q@mail.ru" id="email" type="email">
      </div>
      <!-- Телефон ==================== -->
      <div class="flex field">
        <label for="phone">Телефон</label>
        <input required autocomplete placeholder="8 (000) 000 00 00" pattern="8\s[(][0-9]{3}[)]\s[0-9]{3}\s[0-9]{2}\s[0-9]{2}" value="8 (000) 000 00 00" id="phone" type="tel">
      </div>
      <!-- Пароль ===================== -->
      <div class="flex field">
        <label for="password">Пароль</label>
        <input required autocomplete minlength="6" pattern="^\d+$" placeholder="Введите пароль" type="password" id="password">
      </div>
      <!-- Повтор пароля ============== -->
      <div class="flex field">
        <label for="conf_password">Повторите пароль</label>
        <input required autocomplete placeholder="Повторите пароль" type="password" id="conf_password">
      </div>
      <!-- Согласие на обработку ... = -->
      <div class="flex checkbox">
        <input required type="checkbox" id="consent">
        <label for="consent">Даю согласие на обработку персональных данных</label>
      </div>
      <button class="pointer" type="submit">Зарегистрироваться</button>
    </form>
    <button onclick="switchToAuth()" class="pointer additional">Уже есть аккаунт</button>
  </div>

  <!-- Крестик ЗАКРЫТЬ =============== -->
  <img onclick="closeModal()" class="pointer" src="./images/close.png" alt="">
</div>