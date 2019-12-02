(function(window, document) {
  window.onload = init;
  function getResult() {
    var answer1 = document.getElementById("q1").value;
    var answer2 = document.getElementById("q2").value;
    var result1 = document.getElementById("result1");
    var result2 = document.getElementById("result2");

    if (answer1.length) {
      if (answer1 == "0") {
        result1.innerHTML = '<p class="correct">You got the answer!</p>';
      } else {
        result1.innerHTML = '<p class="wrong">Sorry try again!</p>';
      }
    } else {
      result1.innerHTML = '<p class="wrong">This field is required.</p>';
    }
    if (answer2.length) {
      if (answer2 == "222") {
        result2.innerHTML = '<p class="correct">You got the answer!</p>';
      } else {
        result2.innerHTML = '<p class="wrong">Sorry try again!</p>';
      }
    } else {
      result2.innerHTML = '<p class="wrong">This field is required.</p>';
    }
  }
  function init() {
    var submit = document.getElementById("submit");

    submit.addEventListener("click", getResult);
  }
})(window, document);
