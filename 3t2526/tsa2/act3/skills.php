<?php
    $skills = [
                "title" => "Skills",
                "programming" => "Java, Python, C++, JavaScript, PHP",
                "webTech" => "HTML, CSS, React",
                "databases" => "SQL, MongoDB",
                "tools" => "Git, VS Code, Microsoft Office Suite",
                "languages" => "English, Filipino",
                "soft-skills" => "Teamwork, Communication, Problem-Solving, Time Management"
    ];
?>

<section class="section" id="skills">
    <h2><?= $skills['title']?></h2>
    <ul class="skills-list">
        <li>Programming: <?= $skills['programming']?></li>
        <li>Web Technologies: <?= $skills['webTech']?></li>
        <li>Databases: <?= $skills['databases']?></li>
        <li>Tools: <?= $skills['tools']?></li>
        <li>Languages: <?= $skills['languages']?></li>
        <li>Soft-skills: <?= $skills['soft-skills']?></li>
    </ul>
</section>