<?php
include '../api/cms_class_list.php';
$classes = getClassList();
?>
<section class="cms-template flex-1 p-4">
    <h3 class="d-flex justify-content-between mb-4">
        Class List
        <a href="class_detail.php" class="btn btn-success btn-sm">Add Class</a>
    </h3>
    <section>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Cover</th>
                    <th scope="col">Name</th>
                    <th scope="col">Introduction</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php while ($row = $classes->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td>
                            <section class="class-cover-img">
                                <span class="d-block class-cover-img"
                                    style='background-image:url(".<?php echo $row['class_cover_img']; ?>");'></span>
                            </section>
                        </td>
                        <td style="width:200px;">
                            <span class="class-name"><?php echo $row['class_name']; ?></span>
                        </td>
                        <td><span class="class-desc fs-6 overflow-hidden"><?php echo $row['class_intro']; ?></span></td>
                        <td style="width:130px;">
                            <a class="btn btn-outline-primary btn-sm" href="class_detail.php?id=<?php echo $row['id']?>">Edit</a>
                            <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </section>
</section>