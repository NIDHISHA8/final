function validate() {
var p = document.getElementById("password").value;
var cp = document.getElementById("cpassword").value;
  if(p!=cp)
  {
    alert("Passwords do not match. Be carefull");
    return false;
  }
  return true;
}
