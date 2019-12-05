<?php
session_start();
if (isset($_SESSION['name'])) {
    include_once 'master.php';
    ?>

    <head>
        <meta charset="UTF-8">
        <title>Data Tables | Admire</title>
        <!--IE Compatibility modes-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Mobile first-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/logo1.ico" />

        <!-- global styles-->
        <link rel="stylesheet" href="css/components.css" />
        <link rel="stylesheet" href="css/custom.css" />
        <!--end of global styles-->
        <!--plugin styles-->
        <link rel="stylesheet" href="vendors/select2/css/select2.min.css" />
        <link rel="stylesheet" href="vendors/datatables/css/scroller.bootstrap.min.css" />
        <link rel="stylesheet" href="vendors/datatables/css/colReorder.bootstrap.min.css" />
        <link rel="stylesheet" href="vendors/datatables/css/dataTables.bootstrap.css" />
        <link rel="stylesheet" href="css/pages/dataTables.bootstrap.css" />
        <link rel="stylesheet" href="css/plugincss/responsive.dataTables.min.css" />
        <!-- end of plugin styles -->
        <!--Page level styles-->
        <link rel="stylesheet" href="css/pages/tables.css" />
        <link rel="stylesheet" href="#" id="skin_change" />
        <!--End of page level styles-->
    </head>

    <body>
        <div id="content" class="bg-container">
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col-12 data_tables">
                            <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
                            <div class="card">
                                <div class="card-header bg-white">
                                    <i class="fa fa-table"></i> Donation Details
                                </div>
                                <div class="card-body p-t-25">
                                    <div class="">
                                        <div class="pull-sm-right">
                                            <div class="tools pull-sm-right"></div>
                                        </div>
                                    </div>
                                    <div id="donation_wrapper" class="dataTables_wrapper dt-bootstrap no-footer">
                                        <div class="dt-buttons btn-group"> <button class="btn buttons-copy buttons-html5 btn-light" tabindex="0" aria-controls="donation"><span>Copy</span></button> <button class="btn buttons-csv buttons-html5 btn-light" tabindex="0" aria-controls="donation"><span>CSV</span></button> <button class="btn buttons-print btn-light" tabindex="0" aria-controls="donation"><span>Print</span></button> </div>
                                        <div id="donation_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="donation"></label></div>
                                        <div class="dataTables_length" id="donation_length"><label>Show <select name="donation_length" aria-controls="donation" class="form-control input-sm select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 75px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-donation_length-2a-container"><span class="select2-selection__rendered" id="select2-donation_length-2a-container" title="10">10</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> entries</label></div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="donation" role="grid" aria-describedby="donation_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="donation" rowspan="1" colspan="1" style="width: 134.183px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                                                        <th class="sorting" tabindex="0" aria-controls="donation" rowspan="1" colspan="1" style="width: 131.55px;" aria-label="Amount: activate to sort column ascending">Amount</th>
                                                        <th class="sorting" tabindex="0" aria-controls="donation" rowspan="1" colspan="1" style="width: 149.883px;" aria-label="Email: activate to sort column ascending">Email</th>
                                                        <th class="sorting" tabindex="0" aria-controls="donation" rowspan="1" colspan="1" style="width: 91.7667px;" aria-label="Address: activate to sort column ascending">Address</th>
                                                        <th class="sorting" tabindex="0" aria-controls="donation" rowspan="1" colspan="1" style="width: 294.117px;" aria-label="Transaction ID: activate to sort column ascending">Transaction ID</th>
                                                        <th class="sorting" tabindex="0" aria-controls="donation" rowspan="1" colspan="1" style="width: 294.117px;" aria-label="Transaction Date: activate to sort column ascending">Transaction Date</th>
                                                        <th class="sorting" tabindex="0" aria-controls="donation" rowspan="1" colspan="1" style="width: 294.117px;" aria-label="NGO Name: activate to sort column ascending">NGO Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <?php
                                                        include 'lib/dao.php';
                                                        $d = new dao();
                                                        $q = $d->select("transaction_history");
                                                        $i = 0;
                                                        while ($result = mysqli_fetch_array($q)) {
                                                            $i++;
                                                            ?>
                                                            <td class="sorting_1"><?php echo $result['donor_name']; ?></td>
                                                            <td><?php echo $result['amount']; ?></td>
                                                            <td><?php echo $result['email']; ?></td>
                                                            <td><?php echo $result['address']; ?></td>
                                                            <td><?php echo $result['transaction_id']; ?></td>
                                                            <td><?php echo $result['transaction_date']; ?></td>
                                                            <td><?php echo $result['ngo_name']; ?></td>
                                                        </tr>
                                                        <tr>
                                                        <?php
                                                    }
                                                    ?>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5 col-12">
                                                <div class="dataTables_info" id="donation_info" role="status" aria-live="polite">Showing 1 to 10 of 40 entries</div>
                                            </div>
                                            <div class="col-md-7 col-12">
                                                <div class="dataTables_paginate paging_simple_numbers" id="donation_paginate">
                                                    <ul class="pagination float-right">
                                                        <li class="paginate_button previous disabled" id="donation_previous"><a href="#" aria-controls="donation" data-dt-idx="0" tabindex="0">Previous</a></li>
                                                        <li class="paginate_button active"><a href="#" aria-controls="donation" data-dt-idx="1" tabindex="0">1</a></li>
                                                        <li class="paginate_button "><a href="#" aria-controls="donation" data-dt-idx="2" tabindex="0">2</a></li>
                                                        <li class="paginate_button "><a href="#" aria-controls="donation" data-dt-idx="3" tabindex="0">3</a></li>
                                                        <li class="paginate_button "><a href="#" aria-controls="donation" data-dt-idx="4" tabindex="0">4</a></li>
                                                        <li class="paginate_button next" id="donation_next"><a href="#" aria-controls="donation" data-dt-idx="5" tabindex="0">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END EXAMPLE1 TABLE PORTLET-->
                            <!-- BEGIN EXAMPLE2 TABLE PORTLET-->

                        </div>
                    </div>
                    <!-- # right side -->
                </div>
                <!-- /#wrap -->
                <!-- global scripts-->

                <!-- end of global scripts-->
    </body>
<?php
} else {
    header('Location: index.php');
}
?>