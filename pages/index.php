<!-- Specify the name of the page -->
<?php $page_name = "My CV" ?>

<!-- import the header -->
<?php
  include "../include/header.php";
?>

<!-- connect to the database -->
<?php
    include "../include/connection.php";
?>

    <!-- Body Section -->
    <section>
      <div class="resume-container">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM users;");
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            // To fetch any value use the following syntax
            // $row['column_name']

            echo '<div class="resume">
                        <img class="profile_image" src="images/person.jpg">
                        <h3 class="profile_name">Mohammad Alghafli</h3>
                        <p class="profile_category">Technical Resume</p>
                        <p class="profile_major">B.S Computer Science</p>
                  </div>';
          }
        }
        ?>
      </div>
    </section>
<?php
  include "../include/footer.php";
?>
