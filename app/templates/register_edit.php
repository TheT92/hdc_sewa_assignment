<?php
include '../api/cms_register_edit.php';
$register = getRegisterUser();
?>
<section class="cms-template flex-1 p-4">
    <h3 class="d-flex justify-content-between mb-3">
        Account List
    </h3>
    <section>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Create Time</th>
                    <th scope="col">Member Level</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php while ($row = $register->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td class="align-middle"><?php echo $row['id'] ?></td>
                        <td><?php echo $row['firstname'] ?></td>
                        <td><?php echo $row['surname'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['create_time'] ?></td>
                        <td><?php echo $row['member_level'] ?></td>
                        <td class="align-middle">
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