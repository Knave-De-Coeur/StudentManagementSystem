<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 09/09/2018
 * Time: 17:33
 */
?>

<h3>Student's Address's</h3>

<?php

$studentId = $studentModel->getId();

$query = "SELECT * FROM address where StudentId = {$studentId}";

$queryAddresesByStudentId = $connection->query($query);

if(!$queryAddresesByStudentId) {
    die("Query addressesbystudentId failed " . $connection->error);
}

$addressNumber = 0;

if ($queryAddresesByStudentId->num_rows > 0) {
    ?>
    <div class="address-list-wrapper">
    <?php
    while($row = $queryAddresesByStudentId->fetch_assoc()) {
            $addressNumber++;
            $address = new AddressItemModel($studentId, $row['Id'], $row['Address1'], $row['Address2'], $row['City'], $row['State'], $row['ZipPostalCode'], $row['DisplayOrder']);
            $displayOrder = $row['DisplayOrder'];
            ?>

            <div class="address-block">
                <h3>Address: <?php echo $addressNumber; ?></h3>
                <address>
                    <span><?php echo $address->getAddress1(); ?></span>
                    <span><?php echo $address->getAddress2(); ?></span>
                    <span><?php echo $address->getCity(); ?></span>
                    <span><?php echo $address->getState(); ?></span>
                    <span><?php echo $address->getZipPostalCode(); ?></span>
                </address>
                <div><strong>Display Order: </strong><?php echo $address->getDisplayOrder(); ?></div>
            </div>

            <?php
        }
        ?>
    </div>
        <?php
    }
?>