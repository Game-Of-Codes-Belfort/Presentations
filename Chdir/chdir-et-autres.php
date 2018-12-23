<?php
// chdir (directory)

// dossier courant
echo getcwd() . "<br>";

// chdir = change de dossier
// chdir () change le dossier courant de PHP en directory
chdir('logo');

// dossier courant
echo getcwd() . "<br>";

?>

```

readdir:

```
<?php
if ($handle = opendir('/xampp/htdocs/fonction-dossier_PHP')) {
    echo "Gestionnaire du dossier : $handle<br>";
    echo "Entrées :<br>";

    /* Ceci est la façon correcte de traverser un dossier. */
    while (false !== ($en = readdir($handle))) {
        echo "$en<br>";
    }

    /* Ceci est la MAUVAISE façon de traverser un dossier. */
    while ($entry = readdir($handle)) {
        echo "$entry<br>";
    }

    closedir($handle);
}
?>

```

scandir:

```
<?php
$dir    = '/xampp/htdocs/fonction-dossier_PHP';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);
print_r($files2);
?>