<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>webdev</title>
</head>
<body>

<div class="cointainer-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 mt-5 back">
            <form action="output.php"method="post" >

            <div class="text-center mt-3"><h1><b>Registration Form</b></h1></div>
                    <h5><p>Fill up the form correctly.</p></h5>
                    <hr class="mb-4">

                    <label for="Firstname"><b>First Name :</b></label>
                    <input class="form-control" placeholder="First Name" type="text" name="Firstname" required><p></p>

                    <label for="Lastname"><b>Last Name :</b></label>
                    <input class="form-control" placeholder="Last Name" type="text" name="Lastname" required><p></p>

                    <label for="Middlename"><b>Middle Name :</b></label>
                    <input class="form-control" placeholder="Middle Name" type="text" name="Middlename" required><p></p>

                    <label for="Address"><b>Address :</b></label>
                    <input class="form-control" placeholder="Address" type="text" name="Address" required><p></p>

                    <label for="Dateofbirth"><b>Date of Birth :</b></label>
                    <input class="form-control" placeholder="Date of Birth" type="date" name="Dateofbirth" required><p></p>
    
                    <label for="Placeofbirth"><b>Place of Birth :</b></label>
                    <input class="form-control" placeholder="Place of Birth" type="text" name="Placeofbirth" required><p></p>

                    <label for="Gender"><b>Gender :</b></label><p></p>
                    <label for="Male"><b>Male</b></label>
                    <input type="radio" name="Gender" value="Male" checked>
                    <label for="Female"><b>Female</b></label>
                    <input type="radio" name="Gender" value="Female"><p></p>

                    <label for="Guardian"><b>Guardian :</b></label>
                    <input class="form-control" placeholder="Guardian" type="text" name="Guardian" required><p></p>

                    <label for="Contactnumber"><b>Contact Number :</b></label>
                    <input class="form-control" placeholder="e.g +63.........." type="text" name="contactnumber" required><p></p>

                    <label for="Civilstatus"><b>Civil Status :</b></label>
                    <input class="form-control" placeholder="Civil Status" type="text" name="Civilstatus" required><p></p>

                    <label for="Yearlevel"><b>Year Level :</b></label>
                    <select name="Yearlevel">
                        <option value="First Year">First Year</option>
                        <option value="Second Year">Second Year</option>
                        <option value="Third Year">Third Year</option>
                        <option value="Fourth Year">Fourth Year</option>
                        <option value="Fifth Year">Fifth Year</option>
                    </select><p></p>

                    <label for="Course"><b>Course :</b></label>
                    <select name=Course>
                        <option value="Information Technology">Information Technology (BS-IT)</option>
                        <option value="Technology Communication Management">Technology Communication Management (BS-TCM)</option>
                        <option value="Computer Engineering ">Computer Engineering (BS-CPE)</option>
                    </select><p></p>

                    <label for="Schoolyear"><b>School Year :</b></label>
                    <input class="form-control" placeholder="2019-2020" type="text" name="Schoolyear" required><p></p>

                    <label for="Email"><b>Email :</b></label>
                    <input class="form-control"placeholder="@gmail.com" type="email" name="Email" required><p></p>
                    <hr class="mb-4">
                    <input class="btn btn-primary" type="submit" name="create" value="SUBMIT">
                    <b></b><p></p>

            </form>
        
        </div>
        <div class="col-md-3"></div>
</div>  
</body>


</html>
