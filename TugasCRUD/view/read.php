<!-- Footer -->
<?php include "../db.php" ?>
<?php include "../header.php" ?>

<h1 class="text-center mt-4">DETAIL SURVEI</h1>
<div class="container mt-4">
    <table class="table table-striped table-bordered table-hover">
    <thead class="table-dark">
    <tr>
        <th scope="col">ID Survei</th>
        <th scope="col" colspan="1"class="text-center">Icon</th>
        <th scope="col">Judul</th>
        <th scope="col">Link</th>
        </tr>
</thead>
<tbody>
    <tr>
           <?php
            $query = "SELECT * FROM survei";//SQL query to fecth all  table daa
            $view_survei = mysqli_query($conn, $query); //sending the query to the database

            //displaying all the data retrieved from the database using while lop
            while ($row = mysqli_fetch_assoc($view_survei)){
                $id = $row ['id'];
                $icon = $row ['icon'];
                $judul = $row['judul'];
                $link = $row['link'];
                
                echo "<tr>";
                echo "<th scope='row' > {$id}</th>";
                echo "<td ><img src='images/".$icon."' width='100' height='100'> </td>";
                echo "<td > {$judul}</td>";
                echo "<td > {$link}</td>";
            }
            ?>
    </tr>
</tbody>
</table>
</div>

<!-- a BACK Button to go to pervious page -->
<div class="container text-center mt-5">
<a href="home.php" class="btn btn-warning mt-5"> Back 
</a>
<div>
<!-- Footer -->
<?php include "../footer.php" ?>
