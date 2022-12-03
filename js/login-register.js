const showModal = document.querySelector('.show-modal');
const showModalRegister = document.querySelector('.show-modal-register');
const closeModalLogin = document.querySelector('.close-modal-login');
const closeModalRegister = document.querySelector('.close-modal-register');
const overlay = document.querySelector('.overlay');

const openModal = function (modalClassName) {
  const modal = document.querySelector(modalClassName);
  modal.classList.remove('hidden');
  overlay.classList.remove('hidden');
};

const closeModalIcon = function (modalClassName) {
  const modal = document.querySelector(modalClassName);
  modal.classList.add('hidden');
  overlay.classList.add('hidden');
};

document.querySelectorAll('.show-modal').forEach(item => {
  item.addEventListener('click', event => {
    openModal('.modal-login');
  })
})



document.querySelectorAll('.show-modal-register').forEach(item => {
  item.addEventListener('click', event => {
    openModal('.modal-register');
  })
})

closeModalLogin.addEventListener('click', () => closeModalIcon('.modal-login'));
closeModalRegister.addEventListener('click', () => closeModalIcon('.modal-register'));

document.addEventListener('keydown', function (event) {
  if (event.key === 'Escape') {
    closeModalIcon('.modal-login');
    closeModalIcon('.modal-register')
  }
});


