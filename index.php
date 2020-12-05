<?php
  include "header.php";
?>

<!-- connect to the database -->
<?php
    include "connection.php";
?>

    <!-- Body Section -->
    <section>
      <div class="resume-container">
        <?php
          for ($i=0; $i < 15; $i++) {
            echo '<div class="resume">
                        <img class="profile_image" src="images/person.jpg">
                        <h3 class="profile_name">Mohammad Alghafli</h3>
                        <p class="profile_category">Technical Resume</p>
                        <p class="profile_major">B.S Computer Science</p>
                  </div>';
          }
        ?>
      </div>
    </section>
<?php
  include "footer.php";
?>
