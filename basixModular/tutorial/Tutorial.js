console.log("tutorial.js has loaded");

let result = document.getElementById("result");
let submit = document.getElementById("submit");

function getResult() {
  let answer1 = document.getElementById("q1").value;
  let answer2 = document.getElementById("q2").value;

  console.log("answer1", answer1, "answer2", answer2);

  if (answer1 == "0") {
    result.innerHTML = '<p class="correct">You got the answer!</p>';
  } else {
    result.innerHTML = '<p class="wrong">Sorry try again!</p>';
  }

  if (answer2 == "222") {
    result.innerHTML = '<p class="correct">You got the answer!</p>';
  } else {
    result.innerHTML = '<p class="wrong">Sorry try again!</p>';
  }
}

if (submit && submit.length) {
  submit.addEventListener("click", getResult());
}
