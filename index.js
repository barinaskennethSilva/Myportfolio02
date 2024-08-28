

function linkChat(){
  window.open('Chatbot.html');
}
function backPoint(){
  window.open('index.html');
}

window.addEventListener('scroll', (event) => {
  console.log('Scrolled', window.pageYOffset); 

  if (window.pageYOffset >= 10) {
    document.getElementById('set1').style.display = "none";
  }
});


