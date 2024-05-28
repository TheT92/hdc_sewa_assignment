<?php
include '../api/cms_index.php';
// get new classes and special offers
$newClasses = getNewClasses();
$excludeNewClasses = getExcludeNewClasses();
$specialOffers = getSpecialOffers();
$excludeSpecialClasses = getExcludeSpecialClasses();
?>
<section class="cms-template flex-1 p-4">
    <section class="d-flex">
        <div class="accordion-body flex-1 me-4">
            <h3 class="d-flex justify-content-between mb-3">
                New Classes
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNew">
                    Add New
                </button>
            </h3>
            <table class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Name</th>
                        <th scope="col">Introduction</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php while ($row = $newClasses->fetch(PDO::FETCH_ASSOC)): ?>
                        <tr>
                            <td class="align-middle"><?php echo $row['id']; ?></td>
                            <td>
                                <section class="class-cover-img">
                                    <span class="d-block class-cover-img"
                                        style='background-image:url(".<?php echo $row['class_cover_img']; ?>");'></span>
                                </section>
                            </td>
                            <td style="width:140px;">
                                <span class="class-name"><?php echo $row['class_name']; ?></span>
                            </td>
                            <td><span class="class-desc fs-6 overflow-hidden"><?php echo $row['class_intro']; ?></span>
                            </td>
                            <td class="align-middle">
                                <a class="btn btn-outline-danger btn-sm"
                                    href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?action=deleteNew&ids=' . getExcludeNewIds($row['id']); ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
            <?php if ($newClasses->rowCount() <= 0): ?>
                <section class="d-flex flex-column align-items-center justify-content-center bg-white p-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#ccc" class="bi bi-chat-left"
                        viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                    </svg>
                    <span class="text-secondary mt-2">No Content.</span>
                </section>
            <?php endif ?>
        </div>
        <div class="accordion-body flex-1">
            <h3 class="d-flex justify-content-between mb-3">
                Special Offers
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSpecial">
                    Add Special
                </button>
            </h3>
            <table class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Name</th>
                        <th scope="col">Introduction</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php while ($row = $specialOffers->fetch(PDO::FETCH_ASSOC)): ?>
                        <tr>
                            <td class="align-middle"><?php echo $row['id']; ?></td>
                            <td>
                                <section class="class-cover-img">
                                    <span class="d-block class-cover-img"
                                        style='background-image:url(".<?php echo $row['class_cover_img']; ?>");'></span>
                                </section>
                            </td>
                            <td style="width:140px;">
                                <span class="class-name"><?php echo $row['class_name']; ?></span>
                            </td>
                            <td><span class="class-desc fs-6 overflow-hidden"><?php echo $row['class_intro']; ?></span>
                            </td>
                            <td class="align-middle">
                                <a class="btn btn-outline-danger btn-sm"
                                    href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?action=deleteSpecial&ids=' . getExcludeSpecialIds($row['id']); ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
            <?php if ($specialOffers->rowCount() <= 0): ?>
                <section class="d-flex flex-column align-items-center justify-content-center bg-white p-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#ccc" class="bi bi-chat-left"
                        viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                    </svg>
                    <span class="text-secondary mt-2">No Content.</span>
                </section>
            <?php endif ?>
        </div>
    </section>
    <div class="modal fade" id="addNew" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Add New Class</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?action=addNew">
                    <div class="modal-body">
                        <input type="hidden" name="originIds" value="<?php echo $newIds; ?>" id="originIds">
                        <label for="newClassId" class="form-label"></label><br />
                        <?php while ($row = $excludeNewClasses->fetch(PDO::FETCH_ASSOC)): ?>
                            <div class="form-check d-inline-block me-4 mb-4">
                                <input class="form-check-input" type="radio" name="newClassId"
                                    value="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" required>
                                <label class="form-check-label d-flex flex-1" for="<?php echo $row['id']; ?>">
                                    <section class="class-cover-img me-4">
                                        <span class="d-block"
                                            style='background-image:url(".<?php echo $row['class_cover_img']; ?>");'></span>
                                    </section>
                                    <section class="flex-1">
                                        <span class="class-name"><?php echo $row['class_name']; ?></span>
                                        <span
                                            class="class-desc fs-6 overflow-hidden"><?php echo $row['class_intro']; ?></span>
                                    </section>
                                </label>
                            </div>
                        <?php endwhile ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="modal fade" id="addSpecial" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Add Special Offers</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?action=addSpecial">
                    <div class="modal-body">
                        <input type="hidden" name="originIds" value="<?php echo $specialIds; ?>" id="originIds">
                        <label for="newSpecialId" class="form-label"></label><br />
                        <?php while ($row = $excludeSpecialClasses->fetch(PDO::FETCH_ASSOC)): ?>
                            <div class="form-check d-inline-block me-4 mb-4">
                                <input class="form-check-input" type="radio" name="newSpecialId"
                                    value="<?php echo $row['id']; ?>" id="sprcial<?php echo $row['id']; ?>" required>
                                <label class="form-check-label d-flex flex-1" for="sprcial<?php echo $row['id']; ?>">
                                    <section class="class-cover-img me-4">
                                        <span class="d-block"
                                            style='background-image:url(".<?php echo $row['class_cover_img']; ?>");'></span>
                                    </section>
                                    <section class="flex-1">
                                        <span class="class-name"><?php echo $row['class_name']; ?></span>
                                        <span
                                            class="class-desc fs-6 overflow-hidden"><?php echo $row['class_intro']; ?></span>
                                    </section>
                                </label>
                            </div>
                        <?php endwhile ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>