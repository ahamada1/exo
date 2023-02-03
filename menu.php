<doctype html>
<header>
    <meta charset="UTF-8">
    <html lang="en">
</header>
<?php

$menu = [
    ['label' => 'home', 'href' => 'home.php'],
    ['label' => 'accée', 'href' => 'accée.php'],
    ['label' => 'déconnexion', 'href' => 'déconnexion.php'],
    ['label' => 'forume', 'href' => 'forume.php']
];

foreach($menu as $link){ 

?>
<a href='<?= $link['href']?>'><?= $link['label']?></a>
<?php
}
?>


