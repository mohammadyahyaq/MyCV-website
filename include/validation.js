// This Javascript code will validate the all the required fields to be filled

document.getElementById("feedback_form").addEventListener("submit", function (e) {
  const emailRegix = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/; // This regular will validate the email
  const phoneRegix = /05\d{8}/;

  // alert("worked");
  var errorCounter = 0;

  // We make a query for all the required fields
  var requiredFields = document.querySelectorAll(".required"); // this will return an array of all the required fields
  for (var i = 0; i < requiredFields.length; i++) {
    if (requiredFields[i].value === "" || requiredFields[i].value == null) {
      errorCounter++;
      document.querySelector("#"+requiredFields[i].getAttribute("id") + "_error").innerHTML = "This field is required!";
    } else if (requiredFields[i].getAttribute("id") === "email" && !emailRegix.test(requiredFields[i].value)) {
      // In this case the email not formated properly
      errorCounter++;
      document.querySelector("#"+requiredFields[i].getAttribute("id") + "_error").innerHTML = "The email should be on this format example@email";
    } else if (requiredFields[i].getAttribute("id") === "phone" && !phoneRegix.test(requiredFields[i].value)) {
      // In this case the phone not formated properly
      errorCounter++;
      document.querySelector("#"+requiredFields[i].getAttribute("id") + "_error").innerHTML = "The phone number should be on this format 05********";
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
