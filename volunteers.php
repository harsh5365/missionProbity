<?php
session_start();
include 'inheader.php';
?>
<link rel="stylesheet" href="cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<style>
.tbl{
    margin : 6em auto auto auto;
}
th,td{
    padding: 0 15px;
}
</style>
<div class="pt-5">
    <h2 class="text-center my-5 pt-5">Your Volunteers</h2>
<table id="vol" class="display tbl text-center mb-5">
    <thead>
        <tr>
            <th>Delete Volunteer</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>State</th>
            <th>City</th>
            <th>Address</th>
            <th>Occupation</th>
            <th>BirthDay</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php
                                                        $q = $d->select("vol_details AS v INNER JOIN cities AS c", "v.city=c.city_id AND status='acc'");
                                                        $i = 0;
                                                        while ($result = mysqli_fetch_array($q)) {
                                                            $i++;
                                                            ?>
                                                            <td><a href="deletevol.php?id=<?php echo $result['sr']; ?>"></a></td>
                                                            <td class="sorting_1"><?php echo $result['name']; ?></td>
                                                            <td><?php echo $result['email']; ?></td>
                                                            <td><?php echo $result['mobile']; ?></td>
                                                            <td><?php echo $result['sex']; ?></td>
                                                            <td><?php echo $result['state_name']; ?></td>
                                                            <td><?php echo $result['city_name']; ?></td>
                                                            <td><?php echo $result['address']; ?></td>
                                                            <td><?php echo $result['occupation']; ?></td>
                                                            <td><?php echo $result['bday']; ?></td>
                                                        </tr>
        <tr>
        <?php
                                                    }
                                                    ?>
        </tr>
    </tbody>
</table>
</div>

<script src="cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#vol').DataTable();
} );
</script>
<?php
include 'footer.php';
?>