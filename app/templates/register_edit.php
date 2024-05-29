<?php
include '../api/cms_register_edit.php';
$register = getRegisterUser();
?>
<section class="cms-template flex-1 p-4">
    <h3 class="d-flex justify-content-between mb-3">
        Account List
    </h3>
    <section>
        <table class="table table-striped mb-0">
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
        <?php if ($register->rowCount() <= 0): ?>
            <section class="d-flex flex-column align-items-center justify-content-center bg-white p-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#ccc" class="bi bi-chat-left"
                    viewBox="0 0 16 16">
                    <path
                        d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                </svg>
                <span class="text-secondary mt-2">No Users</span>
            </section>
        <?php endif ?>
    </section>
</section>