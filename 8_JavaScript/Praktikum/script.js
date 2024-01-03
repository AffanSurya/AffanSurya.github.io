function tambah() {
  val1 = parseFloat(document.kirim.val1.value);
  val2 = parseFloat(document.kirim.val2.value);
  result = val1 + val2;

  document.kirim.result.value = result;
}

function kurang() {
  val1 = parseFloat(document.kirim.val1.value);
  val2 = parseFloat(document.kirim.val2.value);
  result = val1 - val2;

  document.kirim.result.value = result;
}

function kali() {
  val1 = parseFloat(document.kirim.val1.value);
  val2 = parseFloat(document.kirim.val2.value);
  result = val1 * val2;

  document.kirim.result.value = result;
}

function bagi() {
  val1 = parseFloat(document.kirim.val1.value);
  val2 = parseFloat(document.kirim.val2.value);
  result = val1 / val2;

  document.kirim.result.value = result;
}
