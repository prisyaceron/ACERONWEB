<?php
    include_once ("functions.php");
    
    $Lastname = $_POST['Lastname'];
    echo "Last Name: ",$Lastname, "<br>";
    $Firstname = $_POST['Firstname'];
    echo "First Name: ", $Firstname, "<br>";
    $Middlename = $_POST['Middlename'];
    echo "Middle Name: ",$Middlename, "<br>";
    $Address = $_POST['Address'];
    echo "Address: ",$Address, "<br>";
    $Dateofbirth = $_POST['Dateofbirth']; // your date variable in  '2015-10-10 ' formate
    echo "Date of Birth: ",date('m-d-Y',strtotime($Dateofbirth)), "<br>"; // return 10-10-2015
    $Placeofbirth = $_POST['Placeofbirth'];
    echo "Place of Birth: ",$Placeofbirth, "<br>";
    $Gender = $_POST['Gender'];
    echo "Gender: ",$Gender, "<br>";
    $Guardian = $_POST['Guardian'];
    echo "Guardian: ",$Guardian, "<br>";
    $contactnumber = $_POST['contactnumber'];
    echo "Contact Number: ", $contactnumber, "<br>";
    $Civilstatus = $_POST['Civilstatus'];
    echo "Civil Status: ",$Civilstatus, "<br>";
    $Yearlevel = $_POST['Yearlevel'];
    echo "Year Level: ",$Yearlevel, "<br>";
    $Course = $_POST['Course'];
    echo "Course: ",$Course, "<br>";
    $Schoolyear = $_POST['Schoolyear'];
    echo "School Year: ",$Schoolyear, "<br>";
    $Email = $_POST['Email'];
    echo "Email: ", $Email, "<br><br>";
    /* 1 */
    if (notEmp($Firstname) && notEmp($Lastname) && notEmp($Middlename) && notEmp($Address) && notEmp($Placeofbirth) && notEmp($Guardian) && notEmp($Civilstatus) && notEmp($Schoolyear) && notEmp($Email)){
        echo "Correct Output", "<br>";
    }
    else{
        echo "Error", "<br>";
    }
    
    /* 2 */
    if (shouldnotNum($Firstname) && shouldnotNum($Lastname) && shouldnotNum($Middlename) &&shouldnotNum($Address) && shouldnotNum($Placeofbirth) && shouldnotNum($Guardian) && shouldnotNum($Civilstatus) && shouldnotNum($Email)){
        echo "Doesn't have a number", "<br>";
    }
    else{
        echo "It has a number", "<br>";
    }
    /* 3 */
    if (notSpecialChar($Firstname) && notSpecialChar($Lastname) && notSpecialChar($Middlename) && notSpecialChar($Address) && notSpecialChar($Placeofbirth) && notSpecialChar($Guardian) && notSpecialChar($Civilstatus) && notSpecialChar($Schoolyear) && notSpecialChar($Email)){
        echo "No special Character", "<br>";
    }
    else{
        echo "Have Spcecial Character", "<br>";
    }
    /* 4 */
    if (moreThan2($Lastname) && moreThan2($Firstname)){
        echo "More Than 2 letters", "<br>";
    }
    else{
        echo "Less than 2 letters", "<br>";
    }
    /* 5 */
    if (notags($Lastname) && notags($Firstname) && notags($Middlename) && notags($Address) && notags($Placeofbirth) && notags($Guardian) && notags($Civilstatus) && notags($Schoolyear) && notags($Email)){
       echo "No html tags", "<br>";
    }
    else{
        echo "Has html tags", "<br>"; 
    }
    /* 6 */
    if (emailFormat($Email)){
        echo "Correct Email", "<br>";
    }
    else{
        echo "Incorrect Email", "<br>";
    }
    /* 7 */
    if (philpreffix($contactnumber)){
        echo "Valid Contact Number";
    }
    else{
        echo "Invalid Contact Number";
    }
    
?>