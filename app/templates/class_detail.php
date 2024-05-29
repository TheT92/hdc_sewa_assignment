<?php
include '../api/cms_class_detail.php';
include ("../api/getMemberLevels.php");
?>
<section class="cms-template flex-1 p-4">
    <h3 class="mb-4">
        <?php echo (empty($id) ? 'New Class' : 'Edit Class') ?>
    </h3>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id=<?php echo $id; ?>">
        <section class="mb-4 d-flex">
            <label for="class_cover_img" class="form-label text-end pe-2">Cover Image</label>
            <section class="flex-1 overflow-hidden">
                <?php for ($i = 0; $i < count($images); $i++): ?>
                    <section class="form-check d-inline-block me-2 mb-2">
                        <input <?php echo ((!empty($class_cover_img) ? $class_cover_img == $images[$i] : $i == 0) ? 'checked' : '') ?> class="form-check-input border-radio" type="radio" value="<?php echo $images[$i]; ?>"
                            name="class_cover_img" id="<?php echo $i; ?>">
                        <label class="form-check-label" for="<?php echo $i; ?>">
                            <span class="cover-item d-inline-block"
                                style='background-image:url(".<?php echo $images[$i]; ?>");'></span>
                        </label>

                    </section>
                <?php endfor ?>
            </section>
        </section>
        <section class="mb-4 d-flex">
            <label for="class_name" class="form-label text-end pe-2">Class Name</label>
            <section class="flex-1 overflow-hidden">
                <input type="text" id="class_name" name="class_name" class="form-control"
                    value="<?php echo $class_name ?>" required />
                <span class="error text-danger"><?php echo $nameErr; ?></span>
            </section>
        </section>
        <section class="mb-4 d-flex">
            <label for="member_level" class="form-label text-end pe-2">Member Level</label>
            <section class="flex-1 overflow-hidden">
                <?php while ($row = $memberLevelList->fetch(PDO::FETCH_ASSOC)): ?>
                    <section class="form-check d-inline-block me-2 mb-2">
                        <input <?php echo ((!empty($member_level) ? $member_level == $row['id'] : true) ? 'checked' : '') ?> class="form-check-input border-radio" type="radio" value="<?php echo $row['id']; ?>"
                            name="member_level" id="<?php echo $row['id']; ?>">
                        <label class="form-check-label" for="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></label>

                    </section>
                <?php endwhile ?>
            </section>
        </section>
        <section class="mb-2 d-flex">
            <label for="class_intro" class="form-label text-end pe-2">Introduction</label>
            <section class="flex-1 overflow-hidden">
                <textarea id="class_intro" name="class_intro" class="form-control"
                    required><?php echo $class_intro ?></textarea>
                <span class="error text-danger"><?php echo $introErr; ?></span>
            </section>
        </section>
        <section class="mb-2 d-flex">
            <label for="description" class="form-label text-end pe-2">Description</label>
            <section class="flex-1 overflow-hidden">
                <textarea id="description" name="description" class="form-control"
                    required><?php echo $description ?></textarea>
                <span class="error text-danger"><?php echo $desErr; ?></span>
            </section>
        </section>
        <section class="mb-2 d-flex">
            <label for="class_detail" class="form-label text-end pe-2">Class Detail</label>
            <section class="flex-1 overflow-hidden">
                <textarea id="class_detail" name="class_detail" class="form-control"
                    required><?php echo $class_detail ?></textarea>
                <span class="error text-danger"><?php echo $detailErr; ?></span>
            </section>
        </section>
        <p class="error text-danger text-center"><?php echo $submitErr; ?></p>
        <button type="submit" class="btn btn-primary mb-2 bg-color-primary">SUBMIT</button>
    </form>
</section>