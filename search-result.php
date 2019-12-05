<?php

 include 'header.php'
  ?>
<style type="text/css" media="screen">
   .space{
    padding-top: 160px;
   }    
   .page-title h1 {
                margin: 0;
                padding: 5px 0 5px 20px;
                color: #fff;
                font-size: 20px;
                line-height: 20px;
            }

            .page-title {
                font-size: 34px;
                color:#F8B864;
                font-weight: 700;
                margin-bottom: 0;
            }

            .page-title 
            { 
                background:#F8B864 ;
                background: -moz-linear-gradient(left, #F8B864 0%, #feffff 80%);
                background: -webkit-linear-gradient(left, #F8B864 0%, #feffff 80%);
                background: linear-gradient(to right, #F8B864 0%, #feffff 80%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#F8B864', endColorstr='#feffff', GradientType=1);
             }

              .header-height .page-title
              {
                padding-top: 30px;
               }
                  .breadcrumbs
                  {
                    padding-top: 9px;
                    padding-bottom: 4px;  
                  }
                  .table-striped tbody>tr:nth-child(odd)>td, .table-striped tbody>tr:nth-child(odd)>th {
    background-color: #9990;

</style>
<body>
    <div class="space">
    <div class="container">
         <div class="page-title">
               <h1><strong>State-wise NGO</strong> Directory</h1>
           </div>

            <div class="breadcrumbs">
                           <ul>
                             <li>
                                 <a href="" class="ver10pxblack"><i class="fa fa-home"></i> Home</a>/<class="active">State-wise NGO Directory
                              </li>
                           </ul>
                     </div>
        <table class="table table-bordered table-striped">
            <thead class="">
                 <th>Sr.No</th>
                <th>Name</th>
                <th>Reg id</th>
               <!--  <th>Email</th> -->
                <th>Mobile</th>
                
                <th>Address</th>
                <th>State</th>
                <th>City</th>
                <th>Sectors</th>
                <th>Ngo type</th>
            </thead>
            <tbody>
                                                <?php
                                                $sid = $_GET['sid'];
                                                    require 'lib/dao.php';
                                                    require 'lib/model.php';
                                                    $d = new dao();
                                                    $q = $d->select("ngo", "$sid=state");
                                                    $i = 0;
                                                while ($result=mysqli_fetch_array($q)) 
                                                {
                                                        $i++;
                                                    
                                                    ?>
                                                    
                                                  <tr>
                                                    <td><?php echo $i;?></td>
                                                    <td><a href="profile.php?id=<?php echo $result['id'] ?>&email=<?php echo $result['email']; ?>"><?php echo $result['name'];?></a></td>
                                                     <td><?php echo $result['reg_id'];?></td>
                                                     <!-- <td><?php echo $result['email'];?></td> -->
                                                     <td><?php echo $result['mobile'];?></td>
                                                     <td><?php echo $result['address'];?></td>
                                                     <td><?php echo $result['city'];?></td>
                                                     <td><?php echo $result['state'];?></td>
                                                     <td><?php echo $result['sectors'];?></td>
                                                     
                                                     <td><?php echo $result['ngo_type'];?></td>
                                                   </tr>
                                                <?php
                                            }
                                                    ?>
                                                    </tr>
                                                </tbody>
        </table>
    </div>
     </div>
<?php   include 'footer.php';
?>