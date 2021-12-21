// Показать модальное окно
const showModal = () => {
  const modal = document.querySelector('.modal')
  modal.style.display = 'flex'
}

// Закрыть модальное окно
const closeModal = () => {
  const modal = document.querySelector('.modal')
  modal.style.display = 'none'
}

// Переключить на авторизацию
const switchToAuth = () => {
  const authBlock = document.querySelector('#auth')
  const regBlock = document.querySelector('#reg')

  authBlock.style.display = 'block'
  regBlock.style.display = 'none'
}

// Переключить на регистрацию
const switchToReg = () => {
  const authBlock = document.querySelector('#auth')
  const regBlock = document.querySelector('#reg')

  authBlock.style.display = 'none'
  regBlock.style.display = 'block'
}

// Авторизировать пользователя
const login = () => {
  const login = document.querySelector('#auth_login').value
  const password = document.querySelector('#auth_password').value

  console.log('Данные с формы АВТОРИЗАЦИИ', { login, password })
}

// Зарегистрировать пользователя
const register = () => {
  const name = document.querySelector('#name').value
  const email = document.querySelector('#email').value
  const phone = document.querySelector('#phone').value
  const password = document.querySelector('#password').value
  const confirmPassword = document.querySelector('#conf_password').value
  const consent = document.querySelector('#consent').value

  if (confirmPassword !== password) {
    document.querySelector('#conf_password').setCustomValidity('Пароли должны совпадать')
  } else {
    console.log('Данные с формы РЕГИСТРАЦИИ', {
      name,
      email,
      phone,
      password,
      confirmPassword,
      consent
    })
  }
}
