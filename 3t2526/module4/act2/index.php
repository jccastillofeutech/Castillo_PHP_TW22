<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formative 4 - Lab Activity Part 2</title>
</head>
<body>
    <?php 

        $name = ["Garry Hodge", "Samuel Carter", "Thomas Bryan", "Miranda MacKey", "Mabel Johnson", "Felix Washburn",
                 "Roland Rodgers", "Chris Mayer", "Misty Gemma", "Bonita Harris", "Joann Dale", "Jerome Jacobson",
                 "Clayton Malone", "Robbie Flacko", "Lana Travis", "Brett Leblanc", "Joey Washington", "Tim Hamilton",
                 "Ramon Mays", "Kathleen Perkins"];  
        function nameproc($name) {
            return [
                "original" => $name,
                "namelength" => strlen($name),
                "firstchar" => ucfirst($name),
                "specreplace" => str_replace(['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'], '@', $name),
                "position" => strpos(strtolower($name), 'a'),
                "reverse" => strrev($name)
            ];
        }
    ?>

    <table>
        <tr>
            <td colspan="6">List of Names</td>
        </tr>
        <tr>
            <th>Name</th>
            <th>Number of Characters</th>
            <th>Uppercase first character</th>
            <th>Replace vowels with @</th>
            <th>Check position of character "a"</th>
            <th>Reverse Name</th>
        </tr>
        <?php foreach($name as $n):
            $values = nameproc($n);
            ?>
        <tr>
            <td><?=  $values["original"] ?></td>
            <td><?=  $values["namelength"] ?></td>
            <td><?=  $values["firstchar"] ?></td>
            <td><?=  $values["specreplace"] ?></td>
            <td><?=  $values["position"] ?></td>
            <td><?=  $values["reverse"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>