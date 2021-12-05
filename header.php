<header>
    <a href="index.php"><img src="assets/php-logo.png" alt="Php logo"></a>
    <?php

    $menu = array(
        array(
            'title' => 'Home',
            'anchor' => 'index.php'
        ),
        array(
            'title' => 'List',
            'anchor' => 'first.php'
        ),
        array(
            'title' => 'Form',
            'anchor' => 'second.php'
        ),
        array(
            'title' => 'Array',
            'anchor' => 'third.php'
        ),
        array(
            'title' => 'Object',
            'anchor' => 'fourth.php'
        )
    );
    
    echo "<nav>";
        echo "<ul>";

        foreach($menu as $menuItem) {
            $menuTitle = $menuItem['title'];
            $menuAnchor = $menuItem['anchor'];
            echo "<li><a href=".$menuAnchor.">".$menuTitle."</a></li>";
        }
        echo "</ul>";
    echo "</nav>";

    ?>
</header>