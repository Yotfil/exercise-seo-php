<?php
// REPLACE-ME
$title = 'Oops! You are not connected to internet';
$description = 'Well what can I say, this is an Offline Version for the site you are visiting, please, if this message is not enough for the information you are looking for try to connect to internet and check again';
$keywords = 'offline';

require './pages/base/head.php';
require './pages/lib/nav.php';
?>

<section>
    <article>
        <h1>you are offline now! congrats</h1>
        <img src="/static/img/offline.jpg" alt="">
    </article>
</section>

<?php
require './pages/lib/footer.php';
?>
