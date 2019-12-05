<?php
session_start();
$id=$_SESSION["id"];
if(isset($_SESSION['pan']))
	{
		// echo "Hello!".$_SESSION['id']."<br>";
	?>
<?php include 'inheader.php';?>
<script>
 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
<style>
	.main{
		outline-width: 10px;
		outline-style: solid;
		outline-color: white;
		width: 50%;
		margin: auto;
		padding: 3px;
		background-color: white;
		margin-bottom: 10px;
		margin-top: 12px;
	}
	.margin{
		height: 30px;
	}
	label{
    padding: 10px;
    background: #f4b15f; 
    display: table;
    color: #fff;
    margin: auto;
    width: 30%;
    border-radius: 5px;
    }
	#blah{
	height: 380px;
	/* width: 380px; */ */
	margin: auto;
	border-radius: 20px;
	}
	input[type="file"] {
    display: none;
	}
	#form-head{
		color: #f4b15f;
		margin-bottom: 10px;
		margin-left: 25%;
	}
	input[type=button] {
		width: 50%;
		background: #f4b15f;
		color: white;
		border-color: #f4b15f;
		border-radius: 10px;
	}
	input[type=button]:hover{
		width: 50%;
		background: #e88b19;
		color: white;
	}
	.space{
		height: 380px;
		width: 380px;
		border-style: dashed;
		border-color: #f4b15f;
		border-radius: 20px;
		margin: auto;
		margin-top: 8px; 
	}
	input[type=text]{
		margin-top: 15px;
		margin-left: 37%;
		height: 34px;
		text-align: center;
	}
	.images{
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        .icon{
            bottom: 0;
            right: 5%;
        }
</style>
<div class="p-4"></div>
<div class="main pt-5 mt-5">
<form action="controller.php" method="POST" enctype="multipart/form-data">
	<h2 id="form-head" style="margin-top: 19px;">Upload Photo To Your Wall</h2><br>
	<div>
		 <label id="#bb"> Enter Your File
    <input type="file" id="File" onchange="readURL(this);" size="60" style="margin-top: 19px;" name="imgFile" required>
    </label> 
	</div>
    <div class="space"><img id="blah" src="#" alt="your image will preview here" /></div>
    <input type="text" name="description" placeholder="Enter Description">
    <?php
			if(isset($_SESSION['errorFile'])){
			echo "<b style='color:red'>".$_SESSION['errorFile']."</b><br>";
			unset($_SESSION['errorFile']);
		}else
		{
			echo "";
		}
		?>
	<div class="text-center">
		<input type="submit" name="Uploadimg" id="btn" class="btn btn-warning" value="Upload image" style="margin: 10px;">
	</div>
</form>
 </div>
<div class="container">
        <div class="row">
    <?php
        $q = $d->select("doc_upload", "ngo_id='$id'");
        $i = 0;
        while ($result = mysqli_fetch_array($q)) {
          $i++;
          ?>
          <div class="images d-inline-block position-relative col-md-4">
            <a href="uploadimg/<?php echo $result['docFile']; ?>" data-toggle="lightbox">
                <img src="uploadimg/<?php echo $result['docFile']; ?>" alt="" style="height: 200px;width: 100%;object-fit: cover;">                
            </a>
            <a href="deleteimage.php?id=<?php echo $result['doc_id']; ?>" class="position-absolute icon"><i class="fa fa-2x text-danger fa-trash" aria-hidden="true"></i>
</a>
            </div>
            <?php

      }
      ?>
    </div>
    </div>
<div class="margin"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
<script>
        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
<?php include 'footer.php';?>
<?php
	}else
	{
		header('Location:login.php');
	}
?>