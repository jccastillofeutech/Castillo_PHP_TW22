<?php 
    $education = [
                "title" => "Education",
                "college" => "Bachelor of Science in Information Technology, Specialized in Web and Mobile Applications",
                "collegeLoc" => "FEU Institute of Technology - Manila, Philippines",
                "collegeDate" => "October 2025",

                "shs" => "Senior High School",
                "shsLoc" => "Pasig Catholic College - Pasig, Philippines",
                "shsDate" => "June 2025",

                "jhs" => "Junior High School",
                "oldSchoolLoc" => "La Immaculada Concepcion School - Pasig, Philippines",
                "jhsDate" => "May 2021",

                "middle" => "Middle School",
                "middleDate" => "May 2016",

                "elem" => "Elementary School",
                "elemDate" => "May 2013"
    ];
?>


<section class="section" id="education">
    <h2><?= $education['title']?></h2>
    <div class="entry">
        <h3><?= $education['college']?></h3>
        <p><?= $education['collegeLoc']?></p>
        <p><?= $education['collegeDate']?></p>
    </div>
    <div class="entry">
        <h3><?= $education['shs']?></h3>
        <p><?= $education['shsLoc']?></p>
        <p><?= $education['shsDate']?></p>
    </div>
    <div class="entry">
        <h3><?= $education['jhs']?></h3>
        <p><?= $education['oldSchoolLoc']?></p>
        <p><?= $education['jhsDate']?></p>
    </div>
    <div class="entry">
        <h3><?= $education['middle']?></h3>
        <p><?= $education['oldSchoolLoc']?></p>
        <p><?= $education['middleDate']?></p>
    </div>
    <div class="entry">
        <h3><?= $education['elem']?></h3>
        <p><?= $education['oldSchoolLoc']?></p>
        <p><?= $education['elemDate']?></p>
    </div>
</section>