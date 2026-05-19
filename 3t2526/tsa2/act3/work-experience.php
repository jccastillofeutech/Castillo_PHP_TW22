<?php 
    $experience = [
                "title" => "Experience",
                "desc" => "Student Intern - IBM Philippines",
                "date" => "May 2028 - present",
                "ex1" => "Created short projects for API development and data analysis",
                "ex2" => "Assisted senior developers with front-end tasks using HTML, CSS, and JavaScript.",
                "ex3" => "Collaborated with a team of 5 to organize a fundraising event, exceeding goals by 20%.",
    ];
?>

<section class="section" id="experience">
    <h2><?= $experience['title']?></h2>
    <div class="entry"><?= $experience['desc']?></div>
    <p class="date"><?= $experience['date']?></p>
    <ul>
        <li><?= $experience['ex1']?></li>
        <li><?= $experience['ex2']?></li>
        <li><?= $experience['ex3']?></li>
    </ul>
</section>

