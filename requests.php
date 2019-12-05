<?php
session_start();

$ngo = $_SESSION['id'];
include 'inheader.php';
?>
<div class="pt-5 pb-5"></div>
<div class="container pt-5">
    <table class="table table-borderless table-responsive pt-5">
    <thead class="bg-light">
    <?php
            $s = 0;
                                                    $q = $d->select("vol_details", "rel_ngo = '$ngo' AND status='$s'");
                                                    $i = 0;
                                                while ($result=mysqli_fetch_array($q)) 
                                                {
                                                        $i++;
                                                    
                                                    ?>
            <td>Name</td>
            <td>Response</td>
            </thead>
            <tbody>
            

            <tr>
                <td><?php echo $result['name'];?></td>
                <td><a href="accept.php?id=<?php echo $result['sr']; ?>" class="btn btn-success">Accept</a>&nbsp;<a href="reject.php?id=<?php echo $result['sr']; ?>" class="btn btn-danger">Reject</a></td>
                </tr>
                <tr>
                <?php
                                                }
                                                ?>
</tr>
</tbody>
    </table>
</div>
<?php
include 'footer.php';
// }
// else{
//     header('Location: login.php');
// }
?>