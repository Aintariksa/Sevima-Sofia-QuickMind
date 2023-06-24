// Daftar pertanyaan dan jawaban
var questions = [
    {
      question: "Apa ibu kota Indonesia?",
      choices: ["Jakarta", "Bandung", "Surabaya", "Medan"],
      correctAnswer: 0
    },
    {
      question: "Berapa jumlah provinsi di Indonesia?",
      choices: ["27", "28", "29", "30"],
      correctAnswer: 1
    },
    {
      question: "Siapakah presiden pertama Indonesia?",
      choices: ["Soekarno", "Soeharto", "Habibie", "Megawati"],
      correctAnswer: 0
    }
  ];
  
  var currentQuestion = 0;
  var score = 0;
  
  var questionElement = document.getElementById("question");
  var choicesElement = document.getElementById("choices");
  var submitButton = document.getElementById("submit");
  var resultElement = document.getElementById("result");
  
  function showQuestion() {
    var question = questions[currentQuestion];
    questionElement.textContent = question.question;
  
    choicesElement.innerHTML = "";
  
    for (var i = 0; i < question.choices.length; i++) {
      var choice = question.choices[i];
      var li = document.createElement("li");
      li.textContent = choice;
      choicesElement.appendChild(li);
      li.addEventListener("click", checkAnswer);
    }
  }
  
  function checkAnswer(event) {
    var selectedChoice = event.target;
    var answer = questions[currentQuestion].correctAnswer;
  
    if (selectedChoice.textContent === questions[currentQuestion].choices[answer]) {
      score++;
    }
  
    currentQuestion++;
  
    if (currentQuestion < questions.length) {
      showQuestion();
    } else {
      showResult();
    }
  }
  
  function showResult() {
    quiz.style.display = "none";
    resultElement.textContent = "Skor Anda: " + score + " dari " +
    questions.length;
}

submitButton.addEventListener("click", showQuestion);

showQuestion();  