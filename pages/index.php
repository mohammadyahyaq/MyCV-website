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
        // // We could check if the connection established correctly or not
        // if (mysqli_connect_errno()) {
        //   echo "<h1>The connection established</h1>";
        // } else {
        //   echo "<h1>connection not established</h1>";
        // }
        //
        // //check the avalable tables
        // $result = mysqli_query("SHOW TABLES FROM mycvmwks_MYCVDB");
        // while ($row = mysqli_fetch_row($result)) {
        //   echo $row[0];
        // }
        $result = mysqli_query($conn, "SELECT * FROM resumes");
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            // To fetch any value use the following syntax
            // $row['column_name']

            echo '<div class="resume">
                        <img class="profile_image" src="../images/person.jpg" alt="image not found">
                        <h3 class="profile_name">' . $row["first_name"] . ' '. $row["last_name"] .'</h3>
                        <p class="profile_category">'. $row["category"] .'</p>
                        <p class="profile_major">B.S '. $row["major"] .'</p>
                        <div class="resume_button"><a href="resume.php">Resume</a></div>
                  </div>';
          }
        }
        ?>
      </div>
    </section>
<?php
  include "../include/footer.php";
?>
