<!DOCTYPE html>
<html>
<head>
    <title>Hasil Kuis IPS</title>
    <link rel="stylesheet" href="css/quizhasil.css">
</head>
<body>
    <h2>Hasil Kuis Ilmu Pengetahuan Sosial</h2>
    <h3 style="text-align:center;">Terdapat pada bagian bawah.</h3>

    <?php
    require 'qzips.php';
    $score = 0;
    $totalQuestions = count($questions);

    for ($i = 1; $i <= $totalQuestions; $i++) {
        // Memeriksa jawaban yang dipilih oleh pengguna
        $selectedAnswer = $_POST['answer' . $i];
        $correctAnswer = $_POST['correct' . $i];

        // Membandingkan jawaban yang dipilih dengan jawaban yang benar
        if ($selectedAnswer === $correctAnswer) {
            $score++;
            $isCorrect = true;
        } else {
            $isCorrect = false;
        }

        // Menampilkan nomor pertanyaan, jawaban yang dipilih, dan jawaban yang benar
        echo '<p>Nomor Pertanyaan: ' . $i . '</p>';
        echo '<p>Jawaban yang Anda Pilih: ' . $selectedAnswer . '</p>';
        echo '<p>Jawaban yang Benar: ' . $correctAnswer . '</p>';

        if ($isCorrect) {
            echo '<p>Jawaban Anda Benar!</p>';
        } else {
            echo '<p>Jawaban Anda Salah!</p>';
        }

        echo '<hr>';
    }

    // Menampilkan skor
    echo '<p>Skor Anda: ' . $score . '/' . $totalQuestions . '</p>';
    echo '<h2>Kerja bagus! Semangat selalu dan tetap berjuang, ya!'
    ?>
</body>
</html>
