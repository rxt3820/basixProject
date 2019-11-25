var result = document.getElementById('result');
var submit = document.getElementById('submit');

function getResult () {
  var answer1 = document.getElementById('q1').value;
  var answer2 = document.getElementById('q2').value;
  
if (answer1 == '0') {
  if (answer2 == '222') {
      result.innerHTML = '<p class="correct">You got the answer!</p>';
    } else {
      result.innerHTML = '<p class="wrong">Sorry try again!</p>';
    }
  } else {
    result.innerHTML = '<p class="wrong">Sorry try again!</p>';
  }
}

submit.addEventListener('click', getResult());


