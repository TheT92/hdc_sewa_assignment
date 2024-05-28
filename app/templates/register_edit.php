<?php
include '../api/cms_register_edit.php';
$register = getRegisterUser();
?>
<section class="cms-template flex-1 p-4">
    <section>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Create Time</th>
                    <th scope="col">Member Level</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php while ($row = $register->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td><?php echo $row['firstname'] ?></td>
                        <td><?php echo $row['surname'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['password'] ?></td>
                        <td><?php echo $row['create_time'] ?></td>
                        <td><?php echo $row['member_level'] ?></td>
                        <td style="width:160px;">
                            <?php if ($row['del_flag'] == 0): ?>
                                <a href="register_edit.php?action=changeState&id=<?php echo $row['id'] ?>&val=1"
                                    class="btn btn-danger btn-sm">Hide User</a>
                            <?php else: ?>
                                <a href="register_edit.php?action=changeState&id=<?php echo $row['id'] ?>&val=0"
                                    class="btn btn-success btn-sm">Show User</a>
                            <?php endif ?>
                        </td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </section>
</section>