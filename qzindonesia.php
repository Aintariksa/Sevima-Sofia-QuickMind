<!DOCTYPE html>
<html>
<head>
    <title>Kuis Bahasa Indonesia</title>
    <link rel="stylesheet" href="css/quizhasil.css">
</head>
<body>
    <h2>Kuis Bahasa Indonesia</h2>
    <center>
    <h3>Waktu Pengerjaan : </h3>
    <div id="timer">00:00</div>
</center>

    <form method="POST" action="hslindonesia.php">
        <?php
        $questions = array(
            array(
                'question' => 'Siapakah penulis buku "Laskar Pelangi"?',
                'choices' => array(
                    'A' => 'Andrea Hirata',
                    'B' => 'Tere Liye',
                    'C' => 'Dewi Lestari',
                    'D' => 'Ahmad Tohari'
                ),
                'answer' => 'A'
            ),
            array(
                'question' => 'Apa sinonim dari kata "marah"?',
                'choices' => array(
                    'A' => 'Senang',
                    'B' => 'Gembira',
                    'C' => 'Murka',
                    'D' => 'Malu'
                ),
                'answer' => 'C'
            ),
                array(
                    'question' => 'Siapakah penulis buku "Laskar Pelangi"?',
                    'choices' => array(
                        'A' => 'Andrea Hirata',
                        'B' => 'Tere Liye',
                        'C' => 'Dewi Lestari',
                        'D' => 'Ahmad Tohari'
                    ),
                    'answer' => 'A'
                ),
                array(
                    'question' => 'Apa sinonim dari kata "marah"?',
                    'choices' => array(
                        'A' => 'Senang',
                        'B' => 'Gembira',
                        'C' => 'Murka',
                        'D' => 'Malu'
                    ),
                    'answer' => 'C'
                ),
                array(
                    'question' => 'Apa lawan kata dari kata "gelap"?',
                    'choices' => array(
                        'A' => 'Terang',
                        'B' => 'Hidup',
                        'C' => 'Lelah',
                        'D' => 'Kecil'
                    ),
                    'answer' => 'A'
                ),
                array(
                    'question' => 'Siapakah pengarang drama "Romeo dan Juliet"?',
                    'choices' => array(
                        'A' => 'William Shakespeare',
                        'B' => 'Mark Twain',
                        'C' => 'J.K. Rowling',
                        'D' => 'F. Scott Fitzgerald'
                    ),
                    'answer' => 'A'
                ),
                array(
                    'question' => 'Apa sinonim dari kata "cerdas"?',
                    'choices' => array(
                        'A' => 'Bodoh',
                        'B' => 'Pintar',
                        'C' => 'Marah',
                        'D' => 'Lelah'
                    ),
                    'answer' => 'B'
                ),
                array(
                    'question' => 'Apa sinonim dari kata "kecil"?',
                    'choices' => array(
                        'A' => 'Besar',
                        'B' => 'Terang',
                        'C' => 'Gelap',
                        'D' => 'Sedih'
                    ),
                    'answer' => 'A'
                ),
                array(
                    'question' => 'Siapakah penulis novel "Harry Potter"?',
                    'choices' => array(
                        'A' => 'J.R.R. Tolkien',
                        'B' => 'J.K. Rowling',
                        'C' => 'Stephen King',
                        'D' => 'George Orwell'
                    ),
                    'answer' => 'B'
                ),
                array(
                    'question' => 'Apa lawan kata dari kata "senang"?',
                    'choices' => array(
                        'A' => 'Lelah',
                        'B' => 'Marah',
                        'C' => 'Gembira',
                        'D' => 'Bodoh'
                    ),
                    'answer' => 'B'
                ),
                array(
                    'question' => 'Apa arti dari kata "konservatif"?',
                    'choices' => array(
                        'A' => 'Konsentrasi',
                        'B' => 'Inovatif',
                        'C' => 'Tradisional',
                        'D' => 'Revolutioner'
                    ),
                    'answer' => 'C'
                ),
                array(
                    'question' => 'Apa sinonim dari kata "membosankan"?',
                    'choices' => array(
                        'A' => 'Menyenangkan',
                        'B' => 'Menghibur',
                        'C' => 'Seru',
                        'D' => 'Monoton'
                    ),
                    'answer' => 'D'
                ),
                array(
                    'question' => 'Apa yang dimaksud dengan "baris" dalam puisi?',
                    'choices' => array(
                        'A' => 'Kumpulan kata dalam satu kelompok',
                        'B' => 'Satu kesatuan puisi yang terdiri dari beberapa bait',
                        'C' => 'Sebuah cerita dalam puisi',
                        'D' => 'Garis tebal yang memisahkan setiap bait'
                    ),
                    'answer' => 'A'
                ),
                array(
                    'question' => 'Apa yang dimaksud dengan "rima" dalam puisi?',
                    'choices' => array(
                        'A' => 'Irama dan irama dalam puisi',
                        'B' => 'Kata yang memiliki arti berbeda',
                        'C' => 'Hubungan antara kata-kata dalam puisi',
                        'D' => 'Kesamaan bunyi akhir antara kata-kata'
                    ),
                    'answer' => 'D'
                ),
                array(
                    'question' => 'Apa yang dimaksud dengan "metafora" dalam puisi?',
                    'choices' => array(
                        'A' => 'Irama dan irama dalam puisi',
                        'B' => 'Kata yang memiliki arti berbeda',
                        'C' => 'Hubungan antara kata-kata dalam puisi',
                        'D' => 'Penggunaan kata-kata secara kiasan'
                    ),
                    'answer' => 'D'
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
