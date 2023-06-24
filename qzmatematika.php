<!DOCTYPE html>
<html>
<head>
    <title>Kuis Matematika</title>
    <link rel="stylesheet" href="css/quizhasil.css">
</head>
<body>
    <h2>Kuis Matematika</h2>
    <center>
    <h3>Waktu Pengerjaan : </h3>
    <div id="timer">00:00</div>
</center>

    <form method="POST" action="hslmatematika.php">
        <?php
$questions = array(
    array(
        'question' => 'Berapakah hasil dari akar kuadrat dari 64?',
        'choices' => array(
            'A' => '4',
            'B' => '6',
            'C' => '8',
            'D' => '10'
        ),
        'answer' => 'C'
    ),
    array(
        'question' => 'Hitunglah hasil dari 5 x 7',
        'choices' => array(
            'A' => '30',
            'B' => '35',
            'C' => '40',
            'D' => '42'
        ),
        'answer' => 'D'
    ),
    array(
        'question' => 'Jika x = 3 dan y = 2, berapakah nilai dari x^2 - y^2?',
        'choices' => array(
            'A' => '1',
            'B' => '2',
            'C' => '5',
            'D' => '9'
        ),
        'answer' => 'D'
    ),
    array(
        'question' => 'Berapakah hasil dari akar kuadrat dari 144?',
        'choices' => array(
            'A' => '9',
            'B' => '12',
            'C' => '14',
            'D' => '16'
        ),
        'answer' => 'B'
    ),
    array(
        'question' => 'Hitunglah hasil dari 8 x 9',
        'choices' => array(
            'A' => '62',
            'B' => '64',
            'C' => '66',
            'D' => '72'
        ),
        'answer' => 'D'
    ),
    array(
        'question' => 'Jika x = 5 dan y = 3, berapakah nilai dari x^2 - y^2?',
        'choices' => array(
            'A' => '10',
            'B' => '16',
            'C' => '22',
            'D' => '28'
        ),
        'answer' => 'B'
    ),
    array(
        'question' => 'Berapakah hasil dari akar kuadrat dari 169?',
        'choices' => array(
            'A' => '10',
            'B' => '11',
            'C' => '12',
            'D' => '13'
        ),
        'answer' => 'D'
    ),
    array(
        'question' => 'Hitunglah hasil dari 6 x 8',
        'choices' => array(
            'A' => '42',
            'B' => '46',
            'C' => '48',
            'D' => '52'
        ),
        'answer' => 'C'
    ),
    array(
        'question' => 'Jika x = 4 dan y = 2, berapakah nilai dari x^2 - y^2?',
        'choices' => array(
            'A' => '10',
            'B' => '12',
            'C' => '14',
            'D' => '16'
        ),
        'answer' => 'D'
    ),
    array(
        'question' => 'Berapakah hasil dari akar kuadrat dari 25?',
        'choices' => array(
            'A' => '4',
            'B' => '5',
            'C' => '6',
            'D' => '7'
        ),
        'answer' => 'B'
    ),
    array(
        'question' => 'Hitunglah hasil dari 9 x 9',
        'choices' => array(
            'A' => '73',
            'B' => '79',
            'C' => '81',
            'D' => '87'
        ),
        'answer' => 'C'
    ),
    array(
        'question' => 'Berapakah hasil dari akar kuadrat dari 196?',
        'choices' => array(
            'A' => '10',
            'B' => '12',
            'C' => '14',
            'D' => '16'
        ),
        'answer' => 'D'
    ),
    array(
        'question' => 'Hitunglah hasil dari 7 x 7',
        'choices' => array(
            'A' => '42',
            'B' => '45',
            'C' => '48',
            'D' => '49'
        ),
        'answer' => 'D'
    ),
    array(
        'question' => 'Jika x = 2 dan y = 3, berapakah nilai dari x^2 - y^2?',
        'choices' => array(
            'A' => '-1',
            'B' => '1',
            'C' => '4',
            'D' => '5'
        ),
        'answer' => 'A'
    ),
    array(
        'question' => 'Berapakah hasil dari akar kuadrat dari 81?',
        'choices' => array(
            'A' => '6',
            'B' => '8',
            'C' => '9',
            'D' => '10'
        ),
        'answer' => 'C'
    )
);


        // Mengacak urutan soal
        shuffle($questions);

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
var quizTime = 1500; // Contoh: 300 detik = 5 menit

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
