<!DOCTYPE html>
<html>
<head>
    <title>Kuis Bahasa Inggris</title>
    <link rel="stylesheet" href="css/quizhasil.css">
</head>
<body>
    <h2>Kuis Bahasa Inggris</h2>
    <center>
    <h3>Waktu Pengerjaan : </h3>
    <div id="timer">00:00</div>
</center>

    <form method="POST" action="hslinggris.php">
        <?php
$questions = array(
    array(
        'question' => 'She ___ a book yesterday.',
        'choices' => array(
            'A' => 'read',
            'B' => 'reads',
            'C' => 'reading',
            'D' => 'to read'
        ),
        'answer' => 'A'
    ),
    array(
        'question' => 'I ___ my homework tomorrow.',
        'choices' => array(
            'A' => 'finish',
            'B' => 'finishes',
            'C' => 'finished',
            'D' => 'to finish'
        ),
        'answer' => 'C'
    ),
    array(
        'question' => 'They ___ soccer every Sunday.',
        'choices' => array(
            'A' => 'plays',
            'B' => 'played',
            'C' => 'play',
            'D' => 'to play'
        ),
        'answer' => 'C'
    ),
    array(
        'question' => 'He ___ to the beach next weekend.',
        'choices' => array(
            'A' => 'go',
            'B' => 'goes',
            'C' => 'went',
            'D' => 'to go'
        ),
        'answer' => 'B'
    ),
    array(
        'question' => 'I ___ English for two years.',
        'choices' => array(
            'A' => 'study',
            'B' => 'studies',
            'C' => 'studied',
            'D' => 'to study'
        ),
        'answer' => 'A'
    ),
    array(
        'question' => 'She ___ her sister yesterday.',
        'choices' => array(
            'A' => 'visits',
            'B' => 'visited',
            'C' => 'visit',
            'D' => 'to visit'
        ),
        'answer' => 'B'
    ),
    array(
        'question' => 'We ___ to the park every weekend.',
        'choices' => array(
            'A' => 'goes',
            'B' => 'went',
            'C' => 'go',
            'D' => 'to go'
        ),
        'answer' => 'C'
    ),
    array(
        'question' => 'She ___ a good singer.',
        'choices' => array(
            'A' => 'is',
            'B' => 'are',
            'C' => 'am',
            'D' => 'be'
        ),
        'answer' => 'A'
    ),
    array(
        'question' => 'They ___ a new car last week.',
        'choices' => array(
            'A' => 'buys',
            'B' => 'bought',
            'C' => 'buy',
            'D' => 'to buy'
        ),
        'answer' => 'B'
    ),
    array(
        'question' => 'She ___ to the party last night.',
        'choices' => array(
            'A' => 'comes',
            'B' => 'came',
            'C' => 'come',
            'D' => 'to come'
        ),
        'answer' => 'B'
    ),
    array(
        'question' => 'He ___ to the movies with his friends tomorrow.',
        'choices' => array(
            'A' => 'goes',
            'B' => 'went',
            'C' => 'go',
            'D' => 'to go'
        ),
        'answer' => 'A'
    ),
    array(
        'question' => 'They ___ a nice dinner at the restaurant last night.',
        'choices' => array(
            'A' => 'have',
            'B' => 'had',
            'C' => 'has',
            'D' => 'to have'
        ),
        'answer' => 'B'
    ),
    array(
        'question' => 'I ___ my keys this morning.',
        'choices' => array(
            'A' => 'lose',
            'B' => 'lost',
            'C' => 'loses',
            'D' => 'to lose'
        ),
        'answer' => 'B'
    ),
    array(
        'question' => 'She ___ a cake for her birthday party.',
        'choices' => array(
            'A' => 'bake',
            'B' => 'bakes',
            'C' => 'baked',
            'D' => 'to bake'
        ),
        'answer' => 'C'
    ),
    array(
        'question' => 'We ___ in the park last Sunday.',
        'choices' => array(
            'A' => 'play',
            'B' => 'plays',
            'C' => 'played',
            'D' => 'to play'
        ),
        'answer' => 'C'
    )
);





        // Mengacak urutan soal
        // shuffle($questions);

        // Nomor soal
        $questionNum = 1;

        foreach ($questions as $question) {
            echo '<h3>' . $questionNum . '. ' . $question['question'] . '</h3>';

            // Mengacak urutan pilihan jawaban
            $choices = $question['choices'];
            // shuffle($choices);

            foreach ($choices as $key => $choice) {
                echo '<label><input type="radio" name="answer' . $questionNum . '" value="' . $key . '"> ' . $choice . '</label><br>';
            }

            // Menambahkan input tersembunyi untuk menyimpan jawaban yang benar
            echo '<input type="hidden" name="correct' . $questionNum . '" value="' . $question['answer'] . '">';

            $questionNum++;
        }
        ?>

        <br>
        <input type="submit" value="Selesai">
    </form>
</body>

<script>
    // Menentukan waktu (dalam detik) untuk quiz
var quizTime = 900; // Contoh: 300 detik = 5 menit

// Mendapatkan elemen timer
var timerElement = document.getElementById("timer");

// Mendapatkan elemen form dan tombol submit
var quizForm = document.getElementById("quizForm");
var submitBtn = document.getElementById("submitBtn");

// Mengubah detik menjadi format menit:detik
function formatTime(seconds) {
  var minutes = Math.floor(seconds / 60);
  var remainingSeconds = seconds % 60;

  var formattedTime = minutes.toString().padStart(2, "0") + ":" + remainingSeconds.toString().padStart(2, "0");
  return formattedTime;
}

// Mengupdate timer setiap detik
function updateTimer() {
  quizTime--;
  timerElement.textContent = formatTime(quizTime);

  if (quizTime <= 0) {
    // Menonaktifkan tombol submit
    submitBtn.disabled = true;
    // Mengirim form ketika waktu habis
    quizForm.submit();
  } else {
    // Memanggil fungsi updateTimer setiap detik
    setTimeout(updateTimer, 1000);
  }
}

// Memulai timer
updateTimer();
</script>

</html>
