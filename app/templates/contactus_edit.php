<?php
include '../api/cms_contactus_edit.php';
$contact = getContactList();
?>
<section class="cms-template flex-1 p-4">
    <section>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Message</th>
                    <th scope="col">Create Time</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php while ($row = $contact->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td><?php echo $row['firstname'] ?></td>
                        <td><?php echo $row['surname'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['phoneno'] ?></td>
                        <td><?php echo $row['message'] ?></td>
                        <td><?php echo $row['create_time'] ?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </section>
</section>