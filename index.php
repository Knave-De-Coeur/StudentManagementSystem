<?php include "includes/header.php"; ?>

<h1>Students</h1>
<p> Here you'll find a list overview of student details that can be managed: </p>

<div class="student-list-wrapper">
    <?php

    $query = "SELECT * FROM students;";

    $queryAllStudents = mysqli_query($connection, $query);

    if (!$queryAllStudents) {
        die("QUERY FAILED " . mysqli_error($connection));
    }

    $numOfStudents = mysqli_num_rows($queryAllStudents);

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

                    while ($row = mysqli_fetch_assoc($queryAllStudents)){
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
                            <td><a href="student.php">View <?php echo $name; ?>'s profile</a></td>
                            <td><a href="delete_student.php">Delete</a></td>
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

<div class="button-list-wrapper">
    <a href="add_student.php">Add New Student</a>
</div>



<?php include "includes/footer.php"; ?>