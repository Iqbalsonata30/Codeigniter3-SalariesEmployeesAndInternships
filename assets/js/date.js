function currentTime() {
  var date = new Date();
  var hour = date.getHours();
  var min = date.getMinutes();
  var sec = date.getSeconds();
  hour = updateTime(hour);
  min = updateTime(min);
  sec = updateTime(sec);
  document.getElementById("Jamsekarang").innerText = hour + " : " + min + " : " + sec;

  var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
  var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

  var curWeekDay = days[date.getDay()];
  var curDay = date.getDate();
  var curMonth = months[date.getMonth()];
  var curYear = date.getFullYear();
  let Tanggal = curWeekDay + ", " + curDay + " " + curMonth + " " + curYear;
  document.getElementById("Tanggalsekarang").innerHTML = Tanggal;
  var t = setTimeout(function () {
    currentTime()
  }, 1000);
}

function updateTime(k) {
  if (k < 10) {
    return "0" + k;
  } else {
    return k;
  }
}

if (document.getElementById("Jamsekarang")) {
  currentTime();
}
var Year = new Date();
tahun = Year.getFullYear();
document.getElementById("tahun").innerText = "Copyright © " + tahun + " Iqbal Sonata ";

const Session = document.getElementById('RegisterSession');
Session.addEventListener('mousein', function () {
  Session.style.display = 'none';
  Session.style.transition = 'all 0.3 ease-in-out'
});