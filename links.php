<?php
// Read links and version from a text file
$file = fopen("links.MLCD", "r") or die("Unable to open file!");

$links = array();
$version = "";

while (!feof($file)) {
    $line = trim(fgets($file));
    if (strpos($line, "|") !== false) {
        $parts = explode("|", $line);
        $name = $parts[0];
        $link = $parts[1];
        // Remove "/link" prefix from the links
        $link = str_replace("/link", "", $link);
        $links[$name] = $link;
    } else {
        // Ensure version is not empty before assigning
        if (!empty($line)) {
            $version = $line;
        }
    }
}

fclose($file);

// Output links
foreach ($links as $name => $link) {
    echo $name . "|" . $link . "\n";
}

// Output version
if (!empty($version)) {
    echo $version;
}
?>
