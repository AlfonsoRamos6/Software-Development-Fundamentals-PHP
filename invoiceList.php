<?php include "template.php" ?>
    <title>Invoice</title>
    <body>

<?php
// Read the contents of the file
$currentRow = 1;
if (($handle = fopen("orders.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $numberOfRowsOfData = count($data);
        $currentRow++; //Add one to the current row

        // Customer Details
        $cusNameFirst = $data[0];
        $cusNameSecond = $data[1];
        echo $cusNameFirst$cusNameSecond"<./p"
    }
    fclose($handle);    //Closes the File
}

?>

<a href