<!-- Specify the name of the page -->
<?php $page_name = "Office hour" ?>

<!-- import the header -->
<?php
	include "../include/header.php";
?>

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
            <td rowspan ="1" colspan= "1">Sulaiman Al-Thagafi</td>
            <td rowspan ="1" colspan= "1"><a href="mailto:Salthagafi0029@stu.kau.edu.sa">Salthagafi0029@stu.kau.edu.sa</a></td>
			<td rowspan ="1" colspan= "1">+996 50 478 5286</td>
            <td rowspan ="3" colspan= "1">Sunday – Thursday</td>
			<td rowspan ="3" colspan= "1">8:00 AM - 4:00 PM</td>
        </tr>
        <tr>
            <td rowspan ="1" colspan= "1">Mohammad Al-Ghafli</td>
            <td rowspan ="1" colspan= "1"><a href="mailto:Malghafli@stu.kau.edu.sa">Malghafli@stu.kau.edu.sa</a></td>
			<td rowspan ="1" colspan= "1">+996 54 067 3055</td>
        </tr>
        
    </table>


</div>
<?php
	include "../include/footer.php";
?>