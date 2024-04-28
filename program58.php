<?php
$con = mysqli_connect("localhost","root","","mydb");
mysqli_query($con, "CREATE TABLE myplayers(ID INT, First_Name VARCHAR(255), Last_Name
VARCHAR(255), Place_Of_Birth VARCHAR(255), Country VARCHAR(255))");
print("Table Created.......\n");
mysqli_query($con, "INSERT INTO myplayers values(1, 'Sikhar', 'Dhawan', 'Delhi', 'India')");
mysqli_query($con, "INSERT INTO myplayers values(2, 'Jonathan', 'Trott', 'CapeTown',
'SouthAfrica')");
mysqli_query($con, "INSERT INTO myplayers values(3, 'Kumara', 'Sangakkara', 'Matale',
'Srilanka')");
print("Record Inserted...... <br>");
//Retrieving the contents of the table
$res = mysqli_query($con, "SELECT * FROM myplayers");
while ($row = mysqli_fetch_row($res)) {
print("ID: ".$row[0]."<br>");
print("First_Name: ".$row[1]."<br>");
print("Last_Name: ".$row[2]."<br>");
print("Place_Of_Birth: ".$row[3]."<br>");
print("Country: ".$row[4]."<br>");
}
//Closing the statement
mysqli_free_result($res);
//Closing the connection
mysqli_close($con);
?>