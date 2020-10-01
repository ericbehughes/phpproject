<?php
session_start();
// This is used to display the error messages
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../../includes/autoloaderController.inc.php';



// if (strlen($price) = 3) {
//     # code...
// } elseif (strlen($price) = 4) {

// }

<?php foreach ($propertyPhotos as $photo) { ?>
    <div class="single-property-thumb">
        <div class="item"><img src="<?php echo $photo['photos']; ?>" alt=""></div>
    </div>
<?php } ?>


<div class="image mb-30">
                                        <div class="single-property-gallery">
                                            <div class="item"><img id="" src="<?php echo $propertyPhotos[2]['photos']; ?>" alt=""></div>

                                        </div>

                                        <div class="single-property-thumb">
                                            <?php for ($i = 0; $i < sizeof($propertyPhotos); $i++) { ?>

                                                <div class="item"><img id="" src="<?php echo $propertyPhotos[$i]['photos']; ?>" alt="" onclick="expandPhoto(this);"></div>

                                            <?php } ?>
                                        </div>

                                    </div>
