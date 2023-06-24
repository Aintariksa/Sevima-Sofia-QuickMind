<!DOCTYPE html>
<html>
<head>
    <title>Kuis Ilmu Pengetahuan Sosial</title>
    <link rel="stylesheet" href="css/quizhasil.css">
</head>
<body>
    <h2>Kuis Ilmu Pengetahuan Sosial</h2>
<center>
    <h3>Waktu Pengerjaan : </h3>
    <div id="timer">00:00</div>
</center>

    <form id="quizForm" method="POST" action="hslips.php">
        <?php
$questions = array(
    array(
        'question' => 'Negara-negara berikut merupakan anggota ASEAN kecuali:',
        'choices' => array(
            'A' => 'Indonesia',
            'B' => 'Laos',
            'C' => 'Brunei Darussalam',
            'D' => 'India'
        ),
        'answer' => 'D'
    ),
    array(
        'question' => 'ASEAN merupakan singkatan dari:',
        'choices' => array(
            'A' => 'Association of Southeast Asian Nations',
            'B' => 'Asian Southeast Association Nations',
            'C' => 'Alliance of Southeast Asia Nations',
            'D' => 'Asian Southeast Asian Nations'
        ),
        'answer' => 'A'
    ),
    array(
        'question' => 'ASEAN didirikan pada tahun berapa?',
        'choices' => array(
            'A' => '1967',
            'B' => '1972',
            'C' => '1980',
            'D' => '1995'
        ),
        'answer' => 'A'
    ),
    array(
        'question' => 'Penjajahan Jepang di Indonesia terjadi selama periode berikut:',
        'choices' => array(
            'A' => '1939-1945',
            'B' => '1945-1949',
            'C' => '1942-1945',
            'D' => '1949-1955'
        ),
        'answer' => 'C'
    ),
    array(
        'question' => 'Tokoh pemimpin Indonesia yang memproklamirkan kemerdekaan Indonesia pada masa penjajahan Jepang adalah:',
        'choices' => array(
            'A' => 'Sutan Sjahrir',
            'B' => 'Mohammad Hatta',
            'C' => 'Soekarno',
            'D' => 'Mohammad Yamin'
        ),
        'answer' => 'C'
    ),
    array(
        'question' => 'Pasca-Proklamasi, Belanda kembali melakukan penjajahan di Indonesia pada tahun berapa?',
        'choices' => array(
            'A' => '1945',
            'B' => '1949',
            'C' => '1950',
            'D' => '1963'
        ),
        'answer' => 'B'
    ),
    array(
        'question' => 'Perjanjian yang mengakui kemerdekaan Indonesia dan mengakhiri penjajahan Belanda adalah:',
        'choices' => array(
            'A' => 'Perjanjian Renville',
            'B' => 'Perjanjian Roem-Royen',
            'C' => 'Perjanjian Linggarjati',
            'D' => 'Perjanjian Meja Bundar'
        ),
        'answer' => 'D'
    ),
    array(
        'question' => 'Pada tanggal berapa Jepang menyerah kepada Sekutu dan mengakhiri penjajahannya di Indonesia?',
        'choices' => array(
            'A' => '9 Agustus 1945',
            'B' => '15 Agustus 1945',
            'C' => '17 Agustus 1945',
            'D' => '2 September 1945'
        ),
        'answer' => 'D'
    ),
    array(
        'question' => 'Jepang menjajah Indonesia sebagai bagian dari ekspansinya di wilayah Asia dan disebut dengan sebutan:',
        'choices' => array(
            'A' => 'Kemakmuran Kekaisaran',
            'B' => 'Kokumin Seiji',
            'C' => 'Hakko Ichiu',
            'D' => 'Kokusai Seijika'
        ),
        'answer' => 'C'
    ),
    array(
        'question' => 'Kepemimpinan Jepang di Indonesia saat penjajahan dikenal dengan sebutan:',
        'choices' => array(
            'A' => 'Dai Nippon Teikoku',
            'B' => 'Tenno Heika',
            'C' => 'Shogun',
            'D' => 'Gunseikanbu'
        ),
        'answer' => 'A'
    ),
    array(
        'question' => 'Upaya Indonesia dalam merebut kemerdekaan dari penjajahan Belanda dikenal dengan sebutan:',
        'choices' => array(
            'A' => 'Agresi Militer Belanda I',
            'B' => 'Agresi Militer Belanda II',
            'C' => 'Revolusi Nasional Indonesia',
            'D' => 'Operasi Kraai'
        ),
        'answer' => 'C'
    ),
    array(
        'question' => 'Pada tanggal berapa Indonesia memproklamirkan kemerdekaannya?',
        'choices' => array(
            'A' => '17 Agustus 1945',
            'B' => '15 Agustus 1945',
            'C' => '9 Agustus 1945',
            'D' => '2 September 1945'
        ),
        'answer' => 'A'
    ),
    array(
        'question' => 'Bentuk pemerintahan di Indonesia setelah proklamasi kemerdekaan adalah:',
        'choices' => array(
            'A' => 'Republik Indonesia Serikat',
            'B' => 'Republik Indonesia',
            'C' => 'Negara Indonesia Timur',
            'D' => 'Pemerintah Darurat Republik Indonesia'
        ),
        'answer' => 'A'
    ),
    array(
        'question' => 'Jepang menduduki wilayah Indonesia selama berapa tahun?',
        'choices' => array(
            'A' => '3 tahun',
            'B' => '4 tahun',
            'C' => '5 tahun',
            'D' => '6 tahun'
        ),
        'answer' => 'B'
    ),
    array(
        'question' => 'Belanda kembali mengakui kemerdekaan Indonesia setelah penjajahan selama periode berikut:',
        'choices' => array(
            'A' => '1945-1949',
            'B' => '1949-1955',
            'C' => '1950-1956',
            'D' => '1942-1945'
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
        <input type="submit" value="Selesai" id="submitBtn">
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
