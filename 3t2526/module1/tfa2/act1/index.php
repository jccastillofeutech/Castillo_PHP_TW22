<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formative 2 - Act 1 - Measure Conversion Chart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <div class="header">
            <span>Name</span>
            <span class="date">Date</span>
        </div>

        <h1>MEASURE CONVERSION CHART - LENGTHS (UK)</h1>

            <?php
                $cm = 1;
                $dm = 1;
                $m = 1;
                $km = 1;
                $ft = 1;
                $yd = 1;
                $ch = 1;
                $fur = 1;
                $mi = 1;
                $mm = 1;
                $inch = 1;

                $cm_to_mm = $cm * 10;
                $dm_to_cm = $dm * 10;
                $m_to_cm = $m * 100;
                $km_to_m = $km * 1000;

                $ft_to_in = $ft * 12;
                $yd_to_ft = $yd * 3;
                $ch_to_yd = $ch * 22;
                $fur_to_yd = $fur * 220;
                $mi_to_yd = $mi * 1760;

                $mm_to_in = $mm * 0.03937;
                $cm_to_in = $cm * 0.39370;
                $m_to_in = $m * 39.37008;
                $m_to_ft = $m * 3.28084;
                $m_to_yd = $m * 1.09361;
                $km_to_yd = $km * 1093.6133;
                $km_to_mi = $km * 0.62137;

                $in_to_cm = $inch * 2.54;
                $ft_to_cm = $ft * 30.48;
                $yd_to_cm = $yd * 91.44;
                $yd_to_m = $yd * 0.9144;
                $mi_to_m = $mi * 1609.344;
                $mi_to_km = $mi * 1.609344;
            ?>

        <table>
        <tr class="title"><th colspan="5">METRIC CONVERSIONS</th></tr>
        <tr><td>1 centimetre</td><td>=</td><td><?php echo $cm_to_mm; ?> millimetres</td><td>1 cm</td><td>= 10 mm</td></tr>
        <tr><td>1 decimetre</td><td>=</td><td><?php echo $dm_to_cm; ?> centimetres</td><td>1 dm</td><td>= 10 cm</td></tr>
        <tr><td>1 metre</td><td>=</td><td><?php echo $m_to_cm; ?> centimetres</td><td>1 m</td><td>= 100 cm</td></tr>
        <tr><td>1 kilometre</td><td>=</td><td><?php echo $km_to_m; ?> metres</td><td>1 km</td><td>= 1000 m</td></tr>
        </table>

        <table>
            <tr class="title"><th colspan="5">IMPERIAL CONVERSIONS</th></tr>
                <tr><td>1 foot</td><td>=</td><td><?php echo $ft_to_in; ?> inches</td><td>1 ft</td><td>= 12 in</td></tr>
                <tr><td>1 yard</td><td>=</td><td><?php echo $yd_to_ft; ?> feet</td><td>1 yd</td><td>= 3 ft</td></tr>
                <tr><td>1 chain</td><td>=</td><td><?php echo $ch_to_yd; ?> yards</td><td>1 ch</td><td>= 22 yd</td></tr>
                <tr><td>1 furlong</td><td>=</td><td><?php echo $fur_to_yd; ?> yards</td><td>1 fur</td><td>= 220 yd</td></tr>
                <tr><td>1 mile</td><td>=</td><td><?php echo $mi_to_yd; ?> yards</td><td>1 mi</td><td>= 1760 yd</td></tr>
        </table>

        <table>
            <tr class="title"><th colspan="5">METRIC -> IMPERIAL CONVERSIONS</th></tr>
                <tr><td>1 millimetre</td><td>=</td><td><?php echo $mm_to_in; ?> inches</td><td>1 mm</td><td>= 0.03937 in</td></tr>
                <tr><td>1 centimetre</td><td>=</td><td><?php echo $cm_to_in; ?> inches</td><td>1 cm</td><td>= 0.39370 in</td></tr>
                <tr><td>1 metre</td><td>=</td><td><?php echo $m_to_in; ?> inches</td><td>1 m</td><td>= 39.37008 in</td></tr>
                <tr><td>1 metre</td><td>=</td><td><?php echo $m_to_ft; ?> feet</td><td>1 m</td><td>= 3.28084 ft</td></tr>
                <tr><td>1 metre</td><td>=</td><td><?php echo $m_to_yd; ?> yards</td><td>1 m</td><td>= 1.09361 yd</td></tr>
                <tr><td>1 kilometre</td><td>=</td><td><?php echo $km_to_yd; ?> yards</td><td>1 km</td><td>= 1093.6133 yd</td></tr>
                <tr><td>1 kilometre</td><td>=</td><td><?php echo $km_to_mi; ?> miles</td><td>1 km</td><td>= 0.62137 mi</td></tr>
        </table>

        <table>
            <tr class="title"><th colspan="5">IMPERIAL -> METRIC CONVERSIONS</th></tr>
                <tr><td>1 inch</td><td>=</td><td><?php echo $in_to_cm; ?> centimetres</td><td>1 in</td><td>= 2.54 cm</td></tr>
                <tr><td>1 foot</td><td>=</td><td><?php echo $ft_to_cm; ?> centimetres</td><td>1 ft</td><td>= 30.48 cm</td></tr>
                <tr><td>1 yard</td><td>=</td><td><?php echo $yd_to_cm; ?> centimetres</td><td>1 yd</td><td>= 91.44 cm</td></tr>
                <tr><td>1 yard</td><td>=</td><td><?php echo $yd_to_m; ?> metres</td><td>1 yd</td><td>= 0.9144 m</td></tr>
                <tr><td>1 mile</td><td>=</td><td><?php echo $mi_to_m; ?> metres</td><td>1 mi</td><td>= 1609.344 m</td></tr>
                <tr><td>1 mile</td><td>=</td><td><?php echo $mi_to_km; ?> kilometres</td><td>1 mi</td><td>= 1.609344 km</td></tr>
        </table>
    </div>
</body>
</html>