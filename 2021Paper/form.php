<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
</head>
<body>
    <form action="form.php" method="post">
    <table style="border-style: solid;">
        <th><h1>Student Registration Form</h1></th>
        <tr>
            <td>Student First Name</td>
            <td><input type="text" name="sname" id="sname"></td>
        </tr>
        <tr>
            <td>Student Last Name</td>
            <td><input type="text" name="lname" id="lname"></td>
        </tr>
        <tr>
            <td>NIC Number</td>
            <td><input type="text" name="nic" id="nic"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" id="address"></td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td>Date : 
                                    <select name="date" id="date">
                                        <?php echo printDate(); ?>
                                    </select>
                                Month :
                                    <select name="month" id="">
                                        <?php echo printMonth(); ?>
                                    </select>
                                Year :
                                    <select name="year" id="year">
                                        <?php echo printYear(); ?>
                                    </select>
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>Male <input type="radio" name="gender" id="male" value="Male"> Female <input type="radio" name="gender" id="female" value="Female"></td>
        </tr>
        <tr>
            <td>Contact Number</td>
            <td><input type="text" name="pnumber" id="pnumber"></td>
        </tr>
        <tr>
            <td>Gradians Name </td>
            <td><input type="text" name="gname" id="gname"></td>
        </tr>
        <tr>
            <td>Gradians Contact Number </td>
            <td><input type="text" name="gpnumber" id="gpnumber"></td>
        </tr>
        <tr>
            <td>Education Qulification </td>
            <td>O/L <input type="radio" name="qulification" id="ol" value="O/L"> A/L <input type="radio" name="qulification" id="al"></td>
        </tr>
        <tr>
            <td>If A/L Select the Stream</td>
            <td><select name="alstream" id="alstream">
                                        <option value="tec">Technology</option>
                                        <option value="maths">Maths</option>
                                        <option value="bio">Biology</option>
                                        <option value="arts">Arts</option>
                                    </select>
            </td>
        </tr>
        <tr>
            <td>Course Name</td>
            <td><select name="alstream" id="alstream">
                            <option value="tec">ICT Diploma</option>
                            <option value="maths">QS</option>
                            <option value="bio">Learth</option>
                            <option value="arts">Automobile</option>
                        </select>
            </td>
        </tr>
        <tr>
            <td>Registration Fee</td>
            <td>Paid <input type="radio" name="fee" id="male" value="Paid"> Pending <input type="radio" name="fee" id="pending" value="Panding"></td>
        </tr>
        <tr>
            <td>Student Number</td>
            <td><input type="text" name="snumber" id="snumber"></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit" name="submit" id="submit"></td>
            <td><input type="submit" value="Reset" name="Reset" id="reset"></td>
        </tr>
    </table>
    </form>
<!--  
    <form action="form.php" method="post">
        
        <ul>
            Student First Name<input type="text" name="sname" id="sname">
        </ul>
        <ul>
            Student Last Name <input type="text" name="lname" id="lname">
        </ul>
        <ul>
            NIC Number        <input type="text" name="nic" id="nic">
        </ul>
        <ul>
            Address            <input type="text" name="address" id="address">
        </ul>
        <ul>
            Date of Birth       Date : 
                                    <select name="date" id="date">
                                        <?php echo printDate(); ?>
                                    </select>
                                Month :
                                    <select name="month" id="">
                                        <?php echo printMonth(); ?>
                                    </select>
                                Year :
                                    <select name="year" id="year">
                                        <?php echo printYear(); ?>
                                    </select>
        </ul>
        <ul>
            Gender              Male <input type="radio" name="gender" id="male" value="Male"> Female <input type="radio" name="gender" id="female" value="Female">
        </ul>
        <ul>
            Contact Number <input type="text" name="pnumber" id="pnumber">
        </ul>
        <ul>
            Gradians Name <input type="text" name="gname" id="gname">
        </ul>
        <ul>
            Gradians Contact Number <input type="text" name="gpnumber" id="gpnumber"> 
        </ul>
        <ul>
            Education Qulification O/L <input type="radio" name="qulification" id="ol" value="O/L"> A/L <input type="radio" name="qulification" id="al">
        </ul>
        <ul>
            If A/L Select the Stream <select name="alstream" id="alstream">
                                        <option value="tec">Technology</option>
                                        <option value="maths">Maths</option>
                                        <option value="bio">Biology</option>
                                        <option value="arts">Arts</option>
                                    </select>
        </ul>
        <ul>
            Course Name <select name="alstream" id="alstream">
                            <option value="tec">ICT Diploma</option>
                            <option value="maths">QS</option>
                            <option value="bio">Learth</option>
                            <option value="arts">Automobile</option>
                        </select>
        </ul>
        <ul>
            Registration Fee  Paid <input type="radio" name="fee" id="male" value="Paid"> Pending <input type="radio" name="fee" id="pending" value="Panding">
        </ul>
        <ul>
            Student Number <input type="text" name="snumber" id="snumber">
        </ul>
        <ul>
            <input type="submit" value="submit" name="submit" id="submit">
            <input type="submit" value="Reset" name="Reset" id="reset">
        </ul>
    </form>
-->
</body>
</html>


<?php
//date print
function printDate(){
    for( $i=1; $i<=30; $i++ )
        {
        echo "<option>";
        echo $i;
        echo "</option>";
        //echo "<br>";
        }
    }
//month print
function printMonth(){
    $month=array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    $lenth=count($month);
    for($j=0; $j<$lenth; $j++)
    {
        echo "<option>";
        echo $month[$j];
        //echo implode($month);
        echo "</option>";
    }
//year print
function printYear(){
    $year=array(2023,2024,2025,2026,2027,2028,2029,2030,2031);
    $len=count($year);
    for($k=0; $k<$len; $k++)
    {
        echo "<option>";
        echo $year[$k];
        //echo implode($month);
        echo "</option>";
    }
}
}
?>

htjgggghghghxdgggggff