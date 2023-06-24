// Script JavaScript jika diperlukan
// ...

// Contoh script JavaScript untuk menampilkan pesan setelah tombol diklik
document.addEventListener('DOMContentLoaded', function() {
    var buttons = document.getElementsByTagName('button');
    for (var i = 0; i < buttons.length; i++) {
      buttons[i].addEventListener('click', function() {
        alert('Kuis telah dimulai!');
      });
    }
  });
  