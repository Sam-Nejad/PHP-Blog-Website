<?php
    require "loginform.php";
?>
    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <?php
                    if (isset($_SESSION['userId'])) {
                        header('Refresh: 0, url = admin\addPost.php');
                    }
                ?>
            </section>
        </div>
    </main>