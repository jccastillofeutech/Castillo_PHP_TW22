<?php
    $affiliation = [
                "title" => "Affiliation",
                "treasurer" => "Treasurer - Class Section Organization",
                "treasurerDate" => "August 2020 - May 2021",
                "treasurerDesc" => "Organized and managed funds for important events that are scheduled by the school's official student committee",

                "pres" => "President - Class Section Organization",
                "presDate" => "August 2024 - May 2025",
                "presDesc" => "Managed all the events that are shared by the commitee and maintained peace and order within the classroom",

                "member" => "Member - Alliance of Information Technology Students of FEU Tech",
                "memberDate" => "September 2025 - present",
                "memberDesc" => "Participated in events for academic incentives"
    ];
?>

<section class="section" id="affiliation">
    <h2><?= $affiliation['title']?></h2>
    <div class="entry">
        <h3><?= $affiliation['treasurer']?></h3>
        <p class="date"><?= $affiliation['treasurerDate']?></p>
        <ul>
            <li><?= $affiliation['treasurerDesc']?></li>
        </ul>
    </div>
    <div class="entry">
        <h3><?= $affiliation['pres']?></h3>
        <p class="date"><?= $affiliation['presDate']?></p>
        <ul>
            <li><?= $affiliation['presDesc']?></li>
        </ul>
    </div>
    <div class="entry">
        <h3><?= $affiliation['member']?></h3>
        <p class="date"><?= $affiliation['memberDate']?></p>
        <ul>
            <li><?= $affiliation['memberDesc']?></li>
        </ul>
    </div>
</section>