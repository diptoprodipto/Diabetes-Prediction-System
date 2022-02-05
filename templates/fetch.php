<?php
//fetch.php
include 'conn.php';

$output = '';

$sql = "SELECT * FROM doctors WHERE area LIKE '%".$_POST["search"]."%'";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
    ?><table class="table table-bordered table-striped table-hover">
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Image</th>
        <th class="text-center">Name</th>
        <th class="text-center">Hospital</th>
        <th class="text-center">Area</th>
        <th class="text-center">Contact</th>
    </tr><?php
    while($row = mysqli_fetch_array($result))
    {
        $id = $row['id'];
        $image = $row['image'];
        $name = $row['name'];
        $hospital = $row['hospital'];
        $area = $row['area'];
        $contact = $row['contact'];

        echo "

        <tr>
        <td class='text-center'>$id</td>
        <td class='text-center'><img src='images/$image' style='width:50px; height:50px;'></td>
        <td class='text-center'>$name</td>
        <td class='text-center'>$hospital</td>
        <td class='text-center'>$area</td>
        <td class='text-center'>$contact</td>

        </tr>


";
}

?>



</table>
<?php
}
else
{
 echo 'Data Not Found';
}
