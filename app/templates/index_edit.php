<?php
include '../api/index.php';
// get new classes and special offers
$newClasses = getNewClasses();
$specialOffers = getSpecialOffers();
?>
<section class="cms-template flex-1 p-4">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    New Classes
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <h3 class="d-flex justify-content-end mb-3">
                        <button type="button" class="btn bg-color-primary text-white">Add Class</button>
                    </h3>
                    <?php while ($row = $newClasses->fetch(PDO::FETCH_ASSOC)): ?>
                        <section class="d-flex mb-3 pb-3 border-bottom">
                            <section class="class-cover-img">
                                <span class="d-block class-cover-img"
                                    style='background-image:url(".<?php echo $row['class_cover_img']; ?>");'></span>
                            </section>
                            <section class="flex-1 ps-4">
                                <p class="class-name lh-1 mb-2 mt-0 fs-4"><?php echo $row['class_name']; ?></p>
                                <span class="class-desc fs-6 overflow-hidden"><?php echo $row['class_intro']; ?></span>
                            </section>
                        </section>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Special Offers
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <h3 class="d-flex justify-content-between mb-3">
                        Special Offers
                        <button type="button" class="btn bg-color-primary text-white">Add Class</button>
                    </h3>
                    <?php while ($row = $specialOffers->fetch(PDO::FETCH_ASSOC)): ?>
                        <section class="d-flex mb-3 pb-3 border-bottom">
                            <section class="class-cover-img">
                                <span class="d-block"
                                    style='background-image:url(".<?php echo $row['class_cover_img']; ?>");'></span>
                            </section>
                            <section class="flex-1 ps-4">
                                <p class="class-name lh-1 mb-2 mt-0 fs-4"><?php echo $row['class_name']; ?></p>
                                <span class="class-desc fs-6 overflow-hidden"><?php echo $row['class_intro']; ?></span>
                            </section>
                        </section>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
    </div>
</section>