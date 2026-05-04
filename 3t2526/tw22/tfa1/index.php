<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resume</title>
</head>
<body>
    <?php
        $profile = [
            "name"    => "Jade Carlos Castillo",
            "image"   => "https://paraverse.feutech.edu.ph/briefcase/assets/images/avatars/T2024/MD-T202410413.jpg",
            "githubUser"  => "CodexJade",
            "githubURL" => "https://github.com/CodexJade",
            "email"   => "jadecarlosc@gmail.com",
            "phone"   => "(+63) 921-479-1858"
        ];
    ?>
    <div class="container">
        <header class="header">
            <div class="profile-image">
                <img src="<?= $profile['image']?>" alt="Profile Picture">
            </div>
            <div class="contact-name">
                <h1><?= $profile['name'] ?></h1>
                <div class="contact-info">
                    <p>Email: <a href="mailto:<?= $profile['email'] ?>"><?= $profile['email'] ?></a> | Phone: <?= $profile['phone'] ?></p>
                    <p>Github: <a href="<?= $profile['githubURL'] ?>" target="_blank"><?= $profile['githubUser'] ?></a></p>
                </div>
            </div>
        </header>


        <?php
           $objectives = [
                "title" => "Objectives",
                "text" => "Optimistic and intelligent IT student that aims to achieve better knowledge and pursue certifications
                for better professions. Honing such talents like coding and engineering, it ensures reliability among
                other employees who require better workforce to develop more innovations in the selected company."
           ];
        ?>
        <section class="section" id="objective">
            <h2><?= $objectives['title']?></h2>
            <p><?= $objectives['text']?></p>
        </section>

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


        <?php
            $experience = [
                "title" => "Experience",
                "desc" => "Student Intern - IBM Philippines",
                "date" => "May 2028 - present",
                "ex1" => "Created short projects for API development and data analysis",
                "ex2" => "Assisted senior developers with front-end tasks using HTML, CSS, and JavaScript.",
                "ex3" => "Collaborated with a team of 5 to organize a fundraising event, exceeding goals by 20%."
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

        <?php
            $projects = [
                "title" => "Projects",
                "desc" => "Better Assist - Web and Mobile App Project",
                "date" => "April 2024",
                "text" => "Developed a mobile application for better assistance for persons with disability and elders using API's and Machine Learning tools
                    as part of a team for Web and Mobile App Capstone. Responsible for capstone creation and development."
            ];
        ?>

        <section class="section" id="projects">
            <h2><?= $projects['title']?></h2>
            <div class="entry">
                <h3><?= $projects['desc']?></h3>
                <p class="date">Completed: <?= $projects['date']?></p>
                <p>
                    <?= $projects['text']?>
                </p>
            </div>
        </section>

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

        <?php
            $activities = [
                "title" => "Activities & Leadership",
                "treasurer" => "Treasurer - Class Section Organization",
                "treasurerDate" => "August 2020 - May 2021",
                "treasurerDesc" => "Organized and managed funds for important events that are scheduled by the school's official student committee",

                "pres" => "President - Class Section Organization",
                "presDate" => "August 2024 - May 2025",
                "presDesc" => "Managed all the events that are shared by the commitee and maintained peace and order within the classroom"
            ];
        ?>

        <section class="section" id="activities">
            <h2><?= $activities['title']?></h2>
            <div class="entry">
                <h3><?= $activities['treasurer']?></h3>
                <p class="date"><?= $activities['treasurerDate']?></p>
                <ul>
                    <li><?= $activities['treasurerDesc']?></li>
                </ul>
            </div>
            <div class="entry">
                <h3><?= $activities['pres']?></h3>
                <p class="date"><?= $activities['presDate']?></p>
                <ul>
                    <li><?= $activities['presDesc']?></li>
                </ul>
            </div>
        </section>


        <?php
            $references = [
                "title" => "Character References",
                "name1" => "Crisostomo A. Castillo",
                "desc1" => "Senior Support Specialist at Wells Fargo",
                "email1" => "ccrisostomo687@gmail.com",
                "phone1" => "(+63) 234-567-8910",
                "relation1" => "IT Mentor",

                "name2" => "Gerard M. Capulong",
                "desc2" => "Junior Support Specialist at ITP Industries",
                "email2" => "gcapulong@gmail.com",
                "phone2" => "(+63) 234-567-8910",
                "relation2" => "Professional Work Advisor"
            ];
        ?>
        <section class="section" id="references">
            <h2><?= $references['title'] ?></h2>
            <div class="entry">
                <h3><?= $references['name1'] ?></h3>
                <p class="subheading"><?= $references['desc1'] ?></p>
                <p class="contact">Email : <?= $references['email1'] ?> | Phone: <?= $references['phone1'] ?></p>
                <p><i>Relationship: <?= $references['relation1'] ?></i></p>
            </div>
            <div class="entry">
                <h3><?= $references['name2'] ?></h3>
                <p class="subheading"><?= $references['desc2'] ?></p>
                <p class="contact">Email : <?= $references['email2'] ?> | Phone: <?= $references['phone2'] ?></p>
                <p><i>Relationship: <?= $references['relation2'] ?></i></p>
            </div>
        </section>
        
    </div>
</body>
</html>