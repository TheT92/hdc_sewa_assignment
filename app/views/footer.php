<!-- common footer -->
<footer class="w-100 mt-4 text-center p-4 bg-body">
    <h2 class="fw-bold text-center lh-1 fst-italic mb-3 logo"><span class="text-color-primary">O</span>utdoor
        </br> Club</h2>
    <p class="mb-3">A work of Griffith College students</p>
    <p class="mb-3">Ordered by firstname:</p>
    <!-- developer images -->
    <section class="avatar-list d-flex align-items-center justify-content-center">
        <section class="ps-4 pe-4">
            <section class="avatar" style="background-image: url('./images/tian.jpg');"></section>
            <p>Tian Chen&copy;</p>
        </section>
        <section class="ps-4 pe-4">
            <section class="avatar" style="background-image: url('./images/xin.jpg');"></section>
            <p>Xin Xie&copy;</p>
        </section>
        <section class="ps-4 pe-4">
            <section class="avatar" style="background-image: url('./images/yixin.jpg');"></section>
            <p>Yixin Luo&copy;</p>
        </section>
    </section>
    <!-- hide contact button in contact page -->
    <?php
        if (!str_ends_with($route, '/contact.php')) {
            echo '<a href="contact.php"><span class="badge fw-medium rounded-pill bg-color-primary fs-5 mt-4 mb-3 p-3 pt-2 pb-2">Contact Us</span></a>';
        }
    ?>
    <p><a href="cms/index_edit.php">CMS</a></p>
</footer>