const Jumbotron = document.getElementById('Jumbotron');
const text1 = document.getElementById('text1');
const text2 = document.getElementById('text2');
const text3 = document.getElementById('text3');
const text4 = document.getElementById('text4');
const textJumbotron = document.getElementById('textJumbo');
const Card = document.getElementById('Card1');
const Card2 = document.getElementById('card2');
const Detail = document.getElementById('data');


text1.style.fontFamily = 'Tinos', 'serif';
text2.style.fontFamily = 'Tinos', 'serif';
text3.style.fontFamily = 'Tinos', 'serif';
text4.style.fontFamily = 'Tinos', 'serif';
Jumbotron.addEventListener('mouseover', function () {
  Jumbotron.style.background = '#141e30';
  Jumbotron.style.background = '-webkit-linear-gradient(to right, #141e30, #243b55)';
  Jumbotron.style.background = ' linear-gradient(to right, #141e30, #243b55)';
  Jumbotron.style.boxShadow = '10px 10px 5px #141e30';
  Jumbotron.style.transform = 'scale(110%)';
  Jumbotron.style.borderRadius = '20px';
  Jumbotron.style.transition = 'cubic-bezier(0.215, 0.61, 0.0, 0.355,1) ease-in';
  textJumbotron.classList.add('text-white');
});
Jumbotron.addEventListener('mouseout', function () {
  Jumbotron.style.background = ' #F0FFFF';
  Jumbotron.style.boxShadow = '15px 15px 5px #DEB887';
  Jumbotron.style.transform = 'scale(100%)';
  Jumbotron.style.borderRadius = '20px';
  Jumbotron.style.transition = 'cubic-bezier(0.215, 0.61, 0.0, 0.355,1) ease-in-out';
  textJumbotron.classList.remove('text-white');

});

Card.addEventListener('mouseover', function () {
  Card.style.backgroundColor = ' #141e30';
  Card.style.background = '-webkit-linear-gradient(to right, #141e30, #243b55)';
  Card.style.background = ' linear-gradient(to right, #141e30, #243b55)';
  Card.style.boxShadow = '10px 10px 5px #141e30';
  Card.style.transform = 'scale(110%)';
  Card.style.transition = 'cubic-bezier(0.215, 0.61, 0.0, 0.355,1) ease-in-out';
  text1.classList.add('text-white');
  text2.classList.add('text-white');
});
Card2.addEventListener('mouseout', function () {
  Card2.style.backgroundColor = '#F0FFFF';
  Card2.style.background = '-webkit-linear-gradient(to right, #F0FFFF, #F0FFFF, #F0FFFF)';
  Card2.style.background = 'linear-gradient(to right, #F0FFFF, #F0FFFF, #F0FFFF)';
  Card2.style.transform = 'scale(100%)';
  Card2.style.boxShadow = '15px 15px 5px #DEB887';
  Card2.style.transition = ' cubic-bezier(0.215, 0.61, 0.0, 0.355,1) ease-in-out';
  text3.classList.remove('text-white');
  text4.classList.remove('text-white');
})
Card2.addEventListener('mouseover', function () {
  Card2.style.backgroundColor = ' #141e30';
  Card2.style.background = '-webkit-linear-gradient(to right, #141e30, #243b55)';
  Card2.style.background = ' linear-gradient(to right, #141e30, #243b55)';
  Card2.style.transform = 'scale(110%)';
  Card2.style.boxShadow = '10px 10px 5px #141e30';
  Card2.style.transition = 'cubic-bezier(0.215, 0.61, 0.0, 0.355,1) ease-in-out';
  text3.classList.add('text-white');
  text4.classList.add('text-white');
});
Card.addEventListener('mouseout', function () {
  Card.style.backgroundColor = '#F0FFFF';
  Card.style.background = '-webkit-linear-gradient(to right, #F0FFFF, #F0FFFF, #F0FFFF)';
  Card.style.background = 'linear-gradient(to right, #F0FFFF, #F0FFFF, #F0FFFF)';
  Card.style.transform = 'scale(100%)';
  Card.style.boxShadow = '15px 15px 5px #DEB887';
  Card.style.transition = ' cubic-bezier(0.215, 0.61, 0.0, 0.355,1) ease-in-out';
  text1.classList.remove('text-white');
  text2.classList.remove('text-white');
})

