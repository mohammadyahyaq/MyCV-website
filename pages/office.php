<!-- Specify the name of the page -->
<?php $page_name = "Office hour" ?>

<!-- import the header -->
<?php
	include "../include/header.php";
?>

<script type="text/javascript" src="../include/emailSpam.js"></script>
<div class = "Heading">
    <h1>Office hours</h1>
    <hr/>
</div>

<div class="Office">
  <h3>You can contact us by following the table below:</h3>
  <table>
    <tr>
      <th>Owner name</th>
      <th>E-mail</th>
      <th>Phone #</th>
      <th>Working Days</th>
      <th>Respone Time</th>
    </tr>
    <tr>
      <td rowspan="1" colspan="1">Sulaiman Al-Thagafi</td>
      <td rowspan="1" colspan="1">
        <script type="text/javascript">
          document.write(getEmail("9200ifagahtlaS", "as.ude.uak.uts"));
        </script>
      </td>
      <td rowspan="1" colspan="1">+996 50 478 5286</td>
      <td rowspan="2" colspan="1">Sunday – Thursday</td>
      <td rowspan="2" colspan="1">8:00 AM - 4:00 PM</td>
    </tr>
    <tr>
      <td rowspan="1" colspan="1">Mohammad Al-Ghafli</td>
      <td rowspan="1" colspan="1">
        <script type="text/javascript">
          document.write(getEmail("ilfahglaM", "as.ude.uak.uts"));
        </script>
      </td>
      <td rowspan="1" colspan="1">+996 54 067 3055</td>
    </tr>

  </table>
</div>
<?php
	include "../include/footer.php";
?>
