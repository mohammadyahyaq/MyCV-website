<?php
    include "../include/header.php";
    session_start();
?>

<div class="feedback_container">
  <div class="thanks_message_box">
    <img id="thanks_image" src="../images/Success.png">
    <h2><span class="green_message">The feedback submitted Successfully</span><br>
    Thanks <?php echo $_SESSION["first_name"]; ?> for sending your feedback<br><br></h2>
    <form action="feedback.php" method="post">
      <button class="back_button" type="submit" name="button">Back to Feedback</button>
    </form>
  </div>
</div>

<?php
    include "../include/footer.php";
?>
