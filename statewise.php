
<?php
include 'header.php';
?>
<head>
	

<style type="text/css">
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


              .rectangle-list a
             {
                  position: relative;
                  display: block;
                  padding: .6em .6em .6em .2.5em;
                  padding: .4em;
                  margin: .5em 0 .5em 2.5em;
                  background: #ddd;
                  color: #444;
                  text-decoration: none;
                  transition: all .3s ease-out;  
                  width: 45%;
                  float: left;
                  margin-left: 4.5%;
                  
               }

              .rectangle-list a:hover{
                       background: #eee;
                 }   

                .rectangle-list a:before{
                          content: counter(li);
                          counter-increment: li;
                           position: absolute; 
                           left: -2.5em;
                           top: 50%;
                           margin-top: -1em;
                           background: #F8B864;
                           height: 2em;
                           width: 2em;
                           line-height: 2em;
                           text-align: center;
                           font-weight: bold;
                          }

                  .rectangle-list a:after
                  {
                         position: absolute; 
                         content: '';
                         border: .5em solid transparent;
                         left: -1em;
                         top: 50%;
                         margin-top: -.5em;
                         transition: all .3s ease-out;               
                        }

                   .rectangle-list a:hover:after
                   {
                      left: -.5em;
                      border-left-color: #F8B864;             
                      }   


                     ol 
                     {
                        counter-reset: li; /* Initiate a counter */
                        list-style: none; /* Remove default numbering */
                        *list-style: decimal; /* Keep using default numbering for IE6/7 */
                        font: 15px 'trebuchet MS', 'lucida sans';
                         padding: 0;
                        margin-bottom: 4em;
                        text-shadow: 0 1px 0 rgba(255,255,255,.5);
                        margin-left: 0px;
                     }

                  ol ol {
                      margin: 0 0 0 2em; /* Add some left margin for inner lists */
                      }


                  .breadcrumbs
                  {
                    padding-top: 9px;
                    padding-bottom: 4px;  
                  }
        
        </style>
</head>

<div class="section-space" style="padding-top:140px;"></div>
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
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="100%" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FfFfFf">
<tr>
<td><table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FfFfFf">
<tr>
<td><table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0">

<tr>
<td width="100%" valign="top" bgcolor="#FfFfFf"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top"><form  method="post" name="frm_griev" id="frm_griev">
<input type ="hidden" name ="state_value" id="state_value" value =""/>
<input type ="hidden" name ="ngo_id" id="ngo_id" value =""/>
<input type ="hidden" name ="inc" id="inc" value =""/>
<input type ="hidden" name ="incsub" id="incsub" value =""/>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="34%"><strong>
</strong></td>
</tr>
</table>
<table width="100%" cellpadding="0" cellspacing="1" bgcolor="#FAD8AB" class="middle_section_bg" style="border:1px #E4E6D8 solid">
<!-- <tr>
  <td width="50%" align="left" valign="top" class="hm_section_head_bg2" ><strong> NGO Directory</strong></td>
  <td width="50%"  valign="top" class="hm_section_head_bg2"  align="right">Total Signed Up VOs / NGOs (66982)</td>
</tr><hr> -->
<tr>
  <td colspan="2" valign="top" bgcolor="#FFFFFF" class="padding_7px">
  <table border ="0" width="100%"  cellpadding="2" cellspacing="0" align="center" >
<tr>
  <td height="2" colspan="4" ></td>
</tr>
<!-- <tr>
  <td colspan="4" class="hm_section_head_bg1"><strong>State-wise list of VOs/NGOs signed up on the NGO-DARPAN</strong></td>
</tr> -->
<tr> </tr>
<tr>
<td height="1" colspan="3"></td>
</tr>
<tr>
<td>
<ol class="rectangle-list ">


<?php
include 'lib/dao.php';
$d = new dao();
$q = $d->select1("cities", 'state_name,state_id');
$i = 0;
while ($result=mysqli_fetch_array($q)) 
{
        $i++;
?>
 

<li><a class="bluelink11px" href ="search-result.php?sid=<?php echo $result['state_id']; ?>"><?php echo $result['state_name']; ?></a>
  <?php }?> 
</li>

</ol>
<!--Changes End!-->
</td>
</tr>
</table></td>
</tr>
</table>
</form></td>
</tr>
<tr>
<td height="2" colspan="4" ></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
</div>


<?php
include 'footer.php';
?>