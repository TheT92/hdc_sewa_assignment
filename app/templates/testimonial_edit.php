<?php
include '../api/cms_testimonial_edit.php';
$comments = getCommentList();
?>
<section id="indexEdit" class="cms-template flex-1 p-4">
    <section>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Content</th>
                    <th scope="col">Create Time</th>
                    <th scope="col">Visibility</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php while ($row = $comments->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td><?php echo $row['firstname'] ?>     <?php echo $row['surname'] ?></td>
                        <td><?php echo $row['class_name'] ?></td>
                        <td><?php echo $row['content'] ?></td>
                        <td><?php echo $row['create_time'] ?></td>
                        <td><?php echo ($row['del_flag'] == 0 ? 'Shown' : 'Hidden') ?></td>
                        <td style="width:160px;">
                            <?php if ($row['del_flag'] == 0): ?>
                                <a href="testimonial_edit.php?action=changeState&id=<?php echo $row['id'] ?>&val=1"
                                    class="btn btn-danger btn-sm">Hide Testimonial</a>
                            <?php else: ?>
                                <a href="testimonial_edit.php?action=changeState&id=<?php echo $row['id'] ?>&val=0"
                                    class="btn btn-success btn-sm">Show Testimonial</a>
                            <?php endif ?>
                        </td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </section>
</section>