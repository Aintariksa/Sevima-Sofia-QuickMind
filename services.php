<?php
// Ambil data dari API Trivia
$url = 'https://opentdb.com/api.php?amount=20&category=19&difficulty=easy&type=boolean';
$response = file_get_contents($url);

// Memeriksa apakah permintaan berhasil
if ($response === false) {
    // Error dalam permintaan
    die('Error saat mengambil data dari API Trivia');
}

// Mendekode respons JSON
$data = json_decode($response, true);

// Memeriksa apakah ada error dalam respons
if ($data['response_code'] !== 0) {
    // Error dalam respons
    die('Error dalam respons API Trivia: ' . $data['response_code']);
}

// Data trivia tersedia dalam $data['results']
$results = $data['results'];

// Inisialisasi skor awal
$score = 0;

// Menampilkan pertanyaan dan menerima jawaban dari pengguna
foreach ($results as $index => $result) {
    $question = $result['question'];
    $correctAnswer = $result['correct_answer'];

    // Menampilkan pertanyaan dan pilihan jawaban
    echo 'Pertanyaan ' . ($index + 1) . ': ' . $question . '<br>';
    echo 'Jawaban (True/False): <br>';
    echo '<form method="post" action="quiz.php">';
    echo '<input type="hidden" name="index" value="' . $index . '">';
    echo '<input type="hidden" name="correctAnswer" value="' . $correctAnswer . '">';
    echo '<input type="radio" name="answer" value="True"> True<br>';
    echo '<input type="radio" name="answer" value="False"> False<br>';
    echo '<input type="submit" value="Submit">';
    echo '</form>';
    echo '<br>';

    // Memeriksa jawaban yang dikirim oleh pengguna
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userAnswer = $_POST['answer'];

        if ($userAnswer === $correctAnswer) {
            // Jawaban benar
            echo 'Jawaban Anda: ' . $userAnswer . ' (Benar)<br><br>';
            $score++;
        } else {
            // Jawaban salah
            echo 'Jawaban Anda: ' . $userAnswer . ' (Salah)<br>';
            echo 'Jawaban yang benar: ' . $correctAnswer . '<br><br>';
        }
    }
}

// Menampilkan skor akhir
echo 'Skor Akhir: ' . $score . '/' . count($results);
?>
