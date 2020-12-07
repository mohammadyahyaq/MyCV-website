// This Javascript code will validate the all the required fields to be filled

document.getElementById("feedback_form").addEventListener("submit", function (e) {
  // alert("worked");
  var errorCounter = 0;

  // We make a query for all the required fields
  var requiredFields = document.querySelectorAll(".required"); // this will return an array of all the required fields
  for (var i = 0; i < requiredFields.length; i++) {
    if (requiredFields[i].value === "" || requiredFields[i].value == null) {
      errorCounter++;
      document.querySelector("#"+requiredFields[i].getAttribute("id") + "_error").innerHTML = "This field is required!";
    } else {
      document.querySelector("#"+requiredFields[i].getAttribute("id") + "_error").innerHTML = "";
    }
  }
  // alert(errorCounter);

  // Now, we should check if any of the system recognized any error or not
  if (errorCounter > 0) {
    e.preventDefault();
  }
});
