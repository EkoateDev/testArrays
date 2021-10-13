<html>

<body>
    <?php

    $house = [
        'kitchen' => 'spoon',
        'gym' => [
            'runningzone' => 'bicycle',
            'liftingroom' => 'dumbbell'
        ],
        'chillingarea' => 'swimmingpool',
        'bedrooms' => 'masterroom'
    ];

    echo $listing = $house['gym']['liftingroom'];


    ?>

</body>

</html>
<?php
