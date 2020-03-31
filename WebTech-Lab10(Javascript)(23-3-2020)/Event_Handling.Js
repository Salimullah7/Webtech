var link1 = document.getElementById("link1");
var link2 = document.getElementById("link2");
var link3 = document.getElementById("link3");
var form1 = document.getElementById("form1");

link1.onclick = clickAlert;
link2.onmouseover = mouseoverAlert;
link3.onmouseout = mouseoutAlert;
form1.onsubmit = validateField;

function clickAlert() {
  alert("You clicked me!");
}

function mouseoverAlert() {
  alert("You moused over me!");
}

function mouseoutAlert() {
  alert("You moused away from me!");
}

function validateField() {
  var fieldValue = document.getElementById("email").value;
  if (fieldValue.length === 0) {
    alert("Field is empty. Please try again.");
    return false;
  }
}