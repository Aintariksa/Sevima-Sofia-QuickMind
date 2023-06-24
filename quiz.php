<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Quiz Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        .question {
            margin-bottom: 10px;
        }

        .options {
            margin-bottom: 20px;
        }

        .result {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Aplikasi Quiz Sederhana</h1>
    <div id="quiz">
        <div class="question">Pertanyaan 1: Apa ibukota Indonesia?</div>
        <div class="options">
            <label><input type="radio" name="q1" value="a"> a) Jakarta</label><br>
            <label><input type="radio" name="q1" value="b"> b) Surabaya</label><br>
            <label><input type="radio" name="q1" value="c"> c) Bandung</label><br>
        </div>

        <div class="question">Pertanyaan 2: Berapakah hasil dari 2 + 2?</div>
        <div class="options">
            <label><input type="radio" name="q2" value="a"> a) 2</label><br>
            <label><input type="radio" name="q2" value="b"> b) 3</label><br>
            <label><input type="radio" name="q2" value="c"> c) 4</label><br>
        </div>

        <button onclick="submitQuiz()">Submit</button>
        <div id="result" class="result"></div>
    </div>

    <script>
        function submitQuiz() {
            var quizContainer = document.getElementById("quiz");
            var radios = quizContainer.querySelectorAll("input[type='radio']:checked");
            var score = 0;

            for (var i = 0; i < radios.length; i++) {
                if (radios[i].value === "a") {
                    score++;
                }
            }

            var resultContainer = document.getElementById("result");
            resultContainer.innerHTML = "Skor Anda: " + score + "/" + radios.length;
        }
    </script>
</body>
</html>
