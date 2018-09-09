<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 09/09/2018
 * Time: 15:36
 */
?>

<div class="student-list-wrapper">
    <?php

    $query = "SELECT * FROM students;";

    $queryAllStudents = $connection->query($query);

    if (!$queryAllStudents) {
        die("QUERY FAILED " . $connection->error);
    }

    $numOfStudents = $queryAllStudents->num_rows ;

    if ($numOfStudents == 0) {
        echo "<h2>There are currently no students as of yet.</h2>";
    } else {
        ?>
        <table>
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Level</th>
                <th>Class</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php

            while ($row  = $queryAllStudents->fetch_assoc()){
                $id = $row['Id'];
                $name = $row['Name'];
                $surname = $row['Surname'];
                $level = $row['Level'];
//                        $class = $row['class'];

                ?>

                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $surname; ?></td>
                    <td><?php echo $level; ?></td>
                    <td><?php echo "Class name"; ?></td>
                    <td><a href="student.php?student=<?php echo $id ?>">View <?php echo $name; ?>'s profile</a></td>
                    <td><a href="delete_student.php?delete_student=<?php echo $id ?>">Delete</a></td>
                </tr>

                <?php
            }

            ?>
            </tbody>
        </table>
        <?php
    }
    ?>
</div>
