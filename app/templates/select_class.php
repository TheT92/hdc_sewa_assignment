<?php
include '../api/cms_class_list.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ids = isset($_POST['ids']) ? $_POST['ids'] : "";
    echo $ids;
}
$classes = getClassList();
?>
<section class="cms-template flex-1 p-4">
    <h3 class=" mb-4">Select Classes</h3>
    <section>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <section class="mb-4">
                <label for="ids" class="form-label text-end p-0"></label>
                <?php while ($row = $classes->fetch(PDO::FETCH_ASSOC)): ?>
                    <section class="form-check d-flex mb-4">
                        <input class="form-check-input me-4" type="checkbox" style="border: 2px solid #0d6efd;" value="<?php echo $row['id']; ?>"
                            id="<?php echo $row['id']; ?>" name="ids" id="<?php echo $i; ?>">
                        <label class="form-check-label d-flex flex-1" for="<?php echo $row['id']; ?>">
                            <section class="class-cover-img me-4">
                                <span class="d-block" style='background-image:url(".<?php echo $row['class_cover_img']; ?>");'></span>
                            </section>
                            <section class="flex-1">
                                <span class="class-name"><?php echo $row['class_name']; ?></span>
                                <span class="class-name"><?php echo $row['class_intro']; ?></span>
                            </section>
                        </label>
                    </section>
                <?php endwhile ?>
            </section>
            <button type="submit" class="btn btn-primary w-100 mb-2 bg-color-primary">SUBMIT</button>
        </form>
    </section>
</section>