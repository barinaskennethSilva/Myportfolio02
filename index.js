document.addEventListener("DOMContentLoaded", function() {
  const dashclose = document.querySelector('#dashclose');
  const dashboard = document.querySelector('#dashboard');
const opendash = document.querySelector('.opendash');

  dashclose.addEventListener('click', function(event) {
    dashboard.style.width = "0%";
    dashclose.style.width = "0%";
  });
  opendash.addEventListener('click', function(event) {
    dashboard.style.width = "60%";
    dashclose.style.width = "40%";
  });
});
window.addEventListener('scroll', (event) => {
  if (window.pageYOffset >= 5) {
    dashboard.style.width = "0%";
    dashclose.style.width = "0%";
  }
});


