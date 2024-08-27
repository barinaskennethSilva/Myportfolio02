

/*window.onload = function(){
  document.getElementById('set1').style.animation = "skillsAnimation 5s infinite";
}*/


window.addEventListener('scroll', (event) => {
  console.log('Scrolled', window.pageYOffset); 

  if (window.pageYOffset >= 10) {
    document.getElementById('set1').style.display = "none";
  }
});


