<!DOCTYPE html>
<html>
<head>
    <title>Kuis Programmer</title>
    <link rel="stylesheet" href="css/quizhasil.css">
</head>
<body>
    <h2>Kuis Programmer</h2>
    <center>
    <h3>Waktu Pengerjaan : </h3>
    <div id="timer">00:00</div>
</center>

    <form method="POST" action="hslprogrammer.php">
        <?php
$questions = array(
    array(
        'question' => 'Apa tag yang digunakan untuk membuat heading level 1 dalam HTML?',
        'choices' => array(
            'A' => 'h1',
            'B' => 'heading1',
            'C' => 'head',
            'D' => 'header'
        ),
        'answer' => 'A'
    ),
    array(
        'question' => 'Apa properti CSS yang digunakan untuk mengatur warna latar belakang?',
        'choices' => array(
            'A' => 'color',
            'B' => 'background-color',
            'C' => 'font-family',
            'D' => 'text-align'
        ),
        'answer' => 'B'
    ),
    array(
        'question' => 'Apa fungsi dari perintah "echo" dalam PHP?',
        'choices' => array(
            'A' => 'Untuk menampilkan teks di halaman web',
            'B' => 'Untuk membuat variabel baru',
            'C' => 'Untuk melakukan perulangan',
            'D' => 'Untuk menghapus data dari database'
        ),
        'answer' => 'A'
    ),
    array(
        'question' => 'Apa tag yang digunakan untuk membuat hyperlink dalam HTML?',
        'choices' => array(
            'A' => 'link',
            'B' => 'a',
            'C' => 'hyperlink',
            'D' => 'href'
        ),
        'answer' => 'B'
    ),
    array(
        'question' => 'Apa properti CSS yang digunakan untuk mengatur jarak antara huruf?',
        'choices' => array(
            'A' => 'padding',
            'B' => 'margin',
            'C' => 'letter-spacing',
            'D' => 'line-height'
        ),
        'answer' => 'C'
    ),
    array(
        'question' => 'Apa perintah PHP yang digunakan untuk memulai sesi?',
        'choices' => array(
            'A' => 'session_start()',
            'B' => 'start_session()',
            'C' => 'begin_session()',
            'D' => 'init_session()'
        ),
        'answer' => 'A'
    ),
    array(
        'question' => 'Apa tag yang digunakan untuk membuat paragraf dalam HTML?',
        'choices' => array(
            'A' => 'p',
            'B' => 'paragraph',
            'C' => 'para',
            'D' => 'text'
        ),
        'answer' => 'A'
    ),
    array(
        'question' => 'Apa properti CSS yang digunakan untuk mengatur tinggi suatu elemen?',
        'choices' => array(
            'A' => 'height',
            'B' => 'width',
            'C' => 'size',
            'D' => 'length'
        ),
        'answer' => 'A'
    ),
    array(
        'question' => 'Apa perintah PHP yang digunakan untuk mengambil data dari form?',
        'choices' => array(
            'A' => 'getFormValue()',
            'B' => 'fetchFormValue()',
            'C' => 'retrieveFormValue()',
            'D' => '$_POST'
        ),
        'answer' => 'D'
    ),
    array(
        'question' => 'Apa tag yang digunakan untuk membuat daftar tidak berurut dalam HTML?',
        'choices' => array(
            'A' => 'ol',
            'B' => 'list',
            'C' => 'ul',
            'D' => 'unordered-list'
        ),
        'answer' => 'C'
    ),
    array(
        'question' => 'Apa properti CSS yang digunakan untuk mengatur tebalnya garis tepi elemen?',
        'choices' => array(
            'A' => 'border-width',
            'B' => 'line-width',
            'C' => 'outline-width',
            'D' => 'stroke-width'
        ),
        'answer' => 'A'
    ),
    array(
        'question' => 'Apa perintah PHP yang digunakan untuk menampilkan tanggal dan waktu saat ini?',
        'choices' => array(
            'A' => 'current_time()',
            'B' => 'show_date_time()',
            'C' => 'display_current_time()',
            'D' => 'date()'
        ),
        'answer' => 'D'
    ),
    array(
        'question' => 'Apa tag yang digunakan untuk membuat judul dalam HTML?',
        'choices' => array(
            'A' => 'h',
            'B' => 'title',
            'C' => 'header',
            'D' => 'heading'
        ),
        'answer' => 'D'
    ),
    array(
        'question' => 'Apa properti CSS yang digunakan untuk mengatur jarak antara elemen-elemen?',
        'choices' => array(
            'A' => 'padding',
            'B' => 'margin',
            'C' => 'spacing',
            'D' => 'distance'
        ),
        'answer' => 'B'
    ),
    array(
        'question' => 'Apa tag yang digunakan untuk membuat garis horisontal dalam HTML?',
        'choices' => array(
            'A' => 'line',
            'B' => 'hr',
            'C' => 'horizontal',
            'D' => 'hline'
        ),
        'answer' => 'B'
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
var quizTime = 1200; // Contoh: 300 detik = 5 menit

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
