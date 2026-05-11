<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Student Registration Form</title>
</head>
<body>
    <?php 
        $idnum = 202410413;
        $firstname = "Jade Carlos";
        $middle = "Arban";
        $lastname = "Castillo";
        $day = 30;
        $month = 01;
        $year = 2006;
        $gender = "Male";

        $callcode = 63;
        $connum = "912-345-6789";
        $email = "jadecarlos@email.com";
        
        $housenum = 123;
        $street = "Juan Dela Cruz St.";
        $barangay = "Brgy. Mabuhay";
        $city = "Manila City";

        $elem = "Manggahan Elementary School";
        $elemyear = 2013;
        $elemlevel = "Grade 1 to 6";
        $highschool = "Pasig Science High School";
        $hsyear = 2022;
        $hslevel = "Grade 7 to 10";
        $shs = "Pasig Catholic College";
        $strand = "TVL-ICT";
        $shsyear = 2024;
        $location = "Pasig";

        $course = "Bachelor of Science in Information Technology";
        $spec = "Web and Mobile Applications";
        $campus = "FEU Institute of Technology";
        $camloc = "Sampaloc, Manila";
        $section = "TW02";
    ?>
    <div class="container">
        <div class="header">STUDENT REGISTRATION FORM</div>
        <section class="person-info">
            <div class="section-title">STUDENT PERSONAL INFORMATION</div>
            <div class="content">
                <label>ID No.</label>
                <input type="text" value="<?php echo $idnum; ?>">
                <label>Last Name</label>
                <input type="text" value="<?php echo $lastname; ?>">
                <label>First Name</label>
                <input type="text" value="<?php echo $firstname; ?>">
                <label>Middle Name</label>
                <input type="text" value="<?php echo $middle; ?>">
                <label>Date of Birth</label>
                <input type="text" value="<?php echo "$month-$day-$year"; ?>">
                <label>Gender</label>
                <input type="text" value="<?php echo $gender; ?>">
            </div>
        </section>

        <section class="contact-info">
            <div class="section-title">CONTACT AND ADDRESS</div>
            <div class="content">
                <label>Contact No.</label>
                <input type="text" value="<?php echo "(+$callcode) $connum"; ?>">
                <label>Email</label>
                <input type="text" value="<?php echo $email; ?>">

                <span class="label">Home Address:</span>
                <table class="address">
                    <tr>
                        <td><span class="label">House No.</span></td>
                        <td><?php echo $housenum; ?></td>
                        <td><span class="label">Street</span></td>
                        <td><?php echo $street; ?></td>
                    </tr>

                    <tr>
                        <td><span class="label">Barangay</span></td>
                        <td><?php echo $barangay; ?></td>
                        <td><span class="label">City</span></td>
                        <td><?php echo $city; ?></td>
                    </tr>
                </table>
            </div>
        </section>

        <section class="educ-bg">
            <div class="section-title">EDUCATIONAL BACKGROUND</div>
            <div class="content">
                <table class="educ-table">
                    <tr>
                        <th>School Level</th>
                        <th>School Name</th>
                        <th>Location</th>
                        <th>Grade Level</th>
                        <th>Year Graduated</th>
                    </tr>

                    <tr>
                        <td><span class="label">Elementary</span></td>
                        <td><?php echo $elem; ?></td>
                        <td><?php echo $location; ?></td>
                        <td><?php echo $elemlevel; ?></td>
                        <td><?php echo $elemyear; ?></td>
                    </tr>

                    <tr>
                        <td><span class="label">High School</span></td>
                        <td><?php echo $highschool; ?></td>
                        <td><?php echo $location; ?></td>
                        <td><?php echo $hslevel; ?></td>
                        <td><?php echo $hsyear; ?></td>
                    </tr>

                    <tr>
                        <td><span class="label">Senior High School</span></td>
                        <td><?php echo $shs; ?></td>
                        <td><?php echo $location; ?></td>
                        <td><?php echo $strand; ?></td>
                        <td><?php echo $shsyear; ?></td>
                    </tr>
                </table>
            </div>
        </section>

        <section class="coursereg">
            <div class="section-title">COURSE REGISTRATION</div>
            <div class="content">
                <label>Course</label>
                <input type="text" value="<?php echo $course; ?>">
                <label>Specialization</label>
                <input type="text" value="<?php echo $spec; ?>">
                <label>Campus</label>
                <input type="text" value="<?php echo $campus; ?>">
                <label>Location</label>
                <input type="text" value="<?php echo $camloc; ?>">
                <label>Section</label>
                <input type="text" value="<?php echo $section; ?>">
            </div>
        </section>
    </div>
</body>
</html>