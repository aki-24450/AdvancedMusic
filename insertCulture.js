function validateForm(){

/* Check title */
var title = document.getElementById("Culture_NameText").value;
if (title == "") {
  alert("Title must be filled out");
  return false;
}

}