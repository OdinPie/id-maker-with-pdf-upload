<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Course Registration</title>
</head>
<body>
    
    <div class="former">
    <div class="container">
        <h2>Registration Form</h2>
        <p>Fill out the form carefully for registration</p>
        <hr >
        <form action="generation.php" method="POST" enctype="multipart/form-data">
        <div class="section">
            <div>
                <label for="">Student Name</label><br>  
                <input type="text" name="name" placeholder="Enter Name" id=""><br>
            </div>
            <div>
                <label for="">Student Email</label><br>  
                <input type="email" name="email" placeholder="Enter Email" id=""><br>
            </div>
        
        </div>
        <div class="section">
            <div>
                <label for="dob">Date of Birth: </label><br>
                <input type="date" name="dob" id="">
            </div>
            <div>
                <label for="">Select Course</label><br>
                <select name="course" id="">
                    <option value="" selected disabled>Select Course</option>
                    <option value="Introduction to Linux">Introduction to Linux</option>
                    <option value="English 101">English 101</option>
                    <option value="Discrete Math">Discrete Math</option>
                    <option value="Calculus I">Calculus I</option>
                    <option value="Introduction to Python">Introduction to Python</option>
                    <option value="Software Engineering & Requirement">Software Engineering & Requirement</option>
                    <option value="Microprocessor and Interfacing">Microprocessor and Interfacing</option>
                </select>
            </div>
        </div>
        <div class="section">
            <label for="">Select ID Photo</label>
            <input type="file" name="img" id="">
        </div>
        <div class="section">
            <label for="">Select CV</label>
            <input type="file" name="cv" id="">
        </div>
        <div class="section">
        <button type="submit" name="submit">Submit</button>
        </div>
        </form>
    </div>
    </div>

</body>
</html>