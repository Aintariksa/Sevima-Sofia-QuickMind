<!DOCTYPE html>
<html>
<head>
  <title>Quiz Selection</title>
  <link rel="stylesheet" href="css/quizselection.css">
  <script src="quizselection.js"></script>
</head>
<body>
   <div class="container">
      <h2>Pilih Kuis</h2>
      <!-- <center> -->
   <ul>
      <li>
      <strong>Bahasa Inggris</strong> (Durasi: 15 menit)
      <form action="qzinggris.php" method="post">
        <input type="hidden" name="duration" value="900">
        <button type="submit">Mulai</button>
      </form>
    </li>

    <li>
      <strong>Bahasa Indonesia</strong> (Durasi: 15 menit)
      <form action="qzindonesia.php" method="post">
        <input type="hidden" name="duration" value="900">
        <button type="submit">Mulai</button>
      </form>
    </li>

    <li>
      <strong>Matematika</strong> (Durasi: 25 menit)
      <form action="qzmatematika.php" method="post">
        <input type="hidden" name="duration" value="1500">
        <button type="submit">Mulai</button>
      </form>
    </li>

    <li>
       <strong>IPS</strong> (Durasi: 15 menit)
      <form action="qzips.php" method="post">
         <input type="hidden" name="duration" value="900">
        <button type="submit">Mulai</button>
      </form>
   </li>
   
   <li>
      <strong>Programmer</strong> (Durasi: 20 menit)
      <form action="qzprogrammer.php" method="post">
        <input type="hidden" name="duration" value="1200">
        <button type="submit">Mulai</button>
      </form>
    </li>
  </ul>
  <!-- </center> -->
</div>

</body>
</html>
