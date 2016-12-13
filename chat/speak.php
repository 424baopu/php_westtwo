<html>
<head>
简单的php+mysql聊天室--发言页
</head>
<body>
<form action="spcheck.php"  method="post">
<br>
<td><input type="text" name="words"></td>
</br>
<br>
<td><input type="submit" value="发言"></td>
</br>
</form>
</body>
</html>

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("chat", $con);

$result = mysql_query("SELECT * FROM talk");

echo "<table border='1'>
<tr>
<th>username</th>
<th>words</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['words'] . "</td>";
  echo "<td>" . "<a href='delete.php?word1={$row['words']}'>删除</a>" . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>