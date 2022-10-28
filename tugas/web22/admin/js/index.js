{
  /* <button onclick="inputDate()">Select Tanggal</button>; */
}

function inputDate() {
  var x = document.createElement("INPUT");
  x.setAttribute("type", "datetime-local");
  document.body.appendChild(x);
}
