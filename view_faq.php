<?php session_start(); ?>

<?php
if(!isset($_SESSION['user_id'])) {
    header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("db.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($connection, "SELECT * FROM faq  ORDER BY id_faq DESC");
?>

<html>
<head>
    <title>Homepage</title>
</head>

<body>
<a href="home_log.php">Home</a> | <a href="logout.php">Logout</a>
<br/><br/>

<table width='80%' border=0>
    <tr bgcolor='#CCCCCC'>
        <td>Domanda</td>
        <td>Risposta</td>
    </tr>
    <?php
    while($res = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$res['domanda']."</td>";
        echo "<td>".$res['risposta']."</td>";
        echo "<td><a href=\"edit_faq.php?id=$res[id_faq]\">Edit</a></td>";
    }
    ?>
</table>
</body>
</html>
