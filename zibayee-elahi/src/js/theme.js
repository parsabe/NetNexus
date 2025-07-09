const moonIcon = document.getElementById('moonIcon');
const sunIcon = document.getElementById('sunIcon');
const offcanvasNavbarDark = document.getElementById('offcanvasNavbarDark');
const navbar = document.querySelector('.navbar');

moonIcon.addEventListener('click', function () {
  document.documentElement.setAttribute('data-theme', 'dark');
  document.body.classList.add('dark-mode');
  offcanvasNavbarDark.classList.add('offcanvas-dark');
  navbar.style.backgroundColor = 'black';
  navbar.style.color = 'white'; // Change background to black
  moonIcon.style.display = 'none'; // Hide moon icon
  sunIcon.style.display = 'block'; // Show sun icon
});

sunIcon.addEventListener('click', function () {
  document.documentElement.setAttribute('data-theme', 'light');
  document.body.classList.remove('dark-mode');
  offcanvasNavbarDark.classList.remove('offcanvas-dark');
  navbar.style.backgroundColor = 'white';
  navbar.style.color = 'black'; // Change background to white
  sunIcon.style.display = 'none'; // Hide sun icon
  moonIcon.style.display = 'block'; // Show moon icon
});
