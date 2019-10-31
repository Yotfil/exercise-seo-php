<?php
$title = 'Title2';
$description = 'Description';
$keywords = 'keywords, divided, by, commas';

require './pages/base/head.php';
require './pages/lib/nav.php';
?>

<main>
    <section>
        <?php
        require './pages/lib/slider.php';
        ?>
        <input type="text" placeholder="askfajsjkla">
        <div class="square">
            <div class="square__content">asdasdasd</div>
        </div>
    </section>
</main>

<?php
require './pages/lib/footer.php';
?>
