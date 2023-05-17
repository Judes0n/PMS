<?php
session_start();
include("../php/connection.php");
$uid=$_SESSION['uid'];
$sql="select * from acc where u_id='$uid'";
$reslt = mysqli_query($conn, $sql); 
$row = mysqli_fetch_array($reslt, MYSQLI_ASSOC);
$result=is_array($row); 
$sql2="SELECT u_name FROM users WHERE u_id='$uid'";
$res=mysqli_query($conn,$sql2);
$row1 = mysqli_fetch_array($res, MYSQLI_ASSOC);
if(is_array($row))
{
if($row['stats']==2)
{
  $_SESSION['app_status']=0;
  ?>
  <script>alert('You Closed Your Account!!\nRedirecting to Home');top.location.replace('../home.php');</script>
  <?php
}
$_SESSION['accid']=$row['acc_id'];
}
?>

<script>

const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
  "Jul", "Aug", "Sep", "Oct", "Nov", "Dece"
];
function display_ct6() {
var x = new Date();
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
hours = x.getHours( ) % 12;
hours = hours ? hours : 12;
var x1=x.getDate()+  "-" +monthNames[x.getMonth()] + "-"  + x.getFullYear(); 
x1 = x1 + " ( " +  hours + ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm+" ) ";
document.getElementById('ct6').innerHTML = x1;
display_c6();
 }
 function display_c6(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct6()',refresh);
}
display_c6()
</script>
<style>
  h1,h2,h3,h4,h5,h6{
	margin:0;	
	font-family: 'Economica', sans-serif;
}

.modal-header h4{
	color: #111;
    font-size: 2em;
    text-transform: uppercase;
    letter-spacing: 2px;
    text-align: center;
    font-weight: bold;
}
.modal-header h5 {
    color: #ff2f68;
    font-size: 1.4em;
    letter-spacing: 1px;
    text-align: center;
    margin: 0.3em 0 1em;
}
</style>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>User Application | PMS</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
  <script src="https://kit.fontawesome.com/88b3830aff.js" crossorigin="anonymous"></script>
<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

</head>
<body onload="display_c6();">

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" >
							<div class="modal-dialog modal-lg">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
											<center><h4 >PRESENTATION MATRIMONY SERVICE</h4>
											<h5 >Let Us Help You</h5></center>
											
											<center><span>MEMBERSHIP BROCHURE</span></center>
											<iframe src="../user/brochure.html" width="100%" height="500px"></iframe>	
									</div>
								</div>
						
							</div>
				        </div>
						<!-- //Modal5 -->
<!-- partial:index.partial.html --><br><hr>
<div class="container">

<form class="well form-horizontal" action="accform.php" method="POST" enctype="multipart/form-data" id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>APPLICATION FORM</b></h2></center></legend><br>

<div class="displaypic">
<br>
<div style="position:static; font-size: 13px;">
&nbsp;Account ID:<span class="text">&nbsp;<?php if(is_array($row)){ echo $row['acc_id'];} ?></span><br><br>
&nbsp;Date & Time:</div><div id='ct6' style="position:static; font-size: 13px; color:red;"></div><br>
<?php if($row['stats']==1){?>
&nbsp;Close Account: &nbsp;<a href="../php/closeacc.php?acc_id=<?php echo $row['acc_id'];?>"><i class="fa fa-times fa-lg" aria-hidden="true"></i><a> <?php }?>
<?php
if($result==FALSE)
      {?>
<center><img src="../uploads/default.png" height="150px" width="150px" style="border-radius: 50%;" ></center>
<?php } 
else { ?>
<center><img src="../uploads/<?php echo $row['img']; ?>" height="300px" width="225px"  style="border-radius: 5px; border: 1px solid #000; box-shadow: 5px 5px 5px #999;"></center>
<?php } ?>

<br><br>
</div>


<hr>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Full Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="fname" name="fname" placeholder="First Name" class="form-control" value="<?php if($result){echo $row['fname'];}else{echo $row1['u_name'];}?>"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Date of Birth</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="zmdi zmdi-cake"></i></span>
  <input id="bday"  name="bday" placeholder="Date of Birth" class="form-control" value="<?php if($result){echo $row['bday'];}?>" type="date"  min="<?php echo date('Y-m-d',strtotime("-60years"))?>" max="<?php echo date('Y-m-d',strtotime("-18years"))?>" data-bv-lessthan="false" data-bv-greaterthan="false" onchange="calcAge()">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Age</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="zmdi zmdi-time-interval"></i></span>
  <input id="age" name="age" placeholder="Age" class="form-control" value="<?php if($result){echo $row['age'];} ?>"  type="number" readonly>
    </div>
  </div>
</div>

  <div class="form-group"> 
    <label class="col-md-4 control-label">Gender</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="zmdi zmdi-male-female"></i></i></span>
         <select id="gender" name="gender" class="form-control selectpicker"  >            
             <option value="Male" <?php if($result){$v="Male"; if($v== $row['gender']) echo 'selected';} ?> >Male</option>
             <option value="Female" <?php if($result){ $v="Female"; if($v== $row['gender']) echo 'selected';} ?> >Female</option>
             <option value="Others" <?php if($result){ $v="Others"; if($v== $row['gender']) echo 'selected';} ?>>Others</option>
         </select>
     </div>
    </div>
  </div>
  
<!-- Text input-->



<!-- Text input-->

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Contact</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input id="cnct" name="cnct" maxlength="10" placeholder="Contact Number" class="form-control" value="<?php if($result){echo $row['cnct'];}?>"  type="tel">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Address</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
  <input id="addrs" name="addrs" placeholder="Address" class="form-control" value="<?php if($result){echo $row['addrss'];}?>"  type="text">
    </div>
  </div>
</div>



<div class="form-group"> 
    <label class="col-md-4 control-label">Religion</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="zmdi zmdi-accounts-alt"></i></span>
         <select id="relg" name="relg" class="form-control selectpicker">
            <option value="Hindu" <?php if($result){ $v="Hindu"; if($v== $row['relg']) echo 'selected';} ?>>Hindu</option>
             <option value="Muslim" <?php if($result){ $v="Muslim"; if($v== $row['relg']) echo 'selected';} ?>>Muslim</option>
             <option value="Christian" <?php if($result){ $v="Christian"; if($v== $row['relg']) echo 'selected';} ?>>Christian</option>
             <option value="Others" <?php if($result){ $v="Others"; if($v== $row['relg']) echo 'selected';} ?>>Others</option>
         </select>
     </div>
    </div>
  </div>


<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Height</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="zmdi zmdi-ruler"></i></span>
  <input id="height" name="height" placeholder="Height in cm" class="form-control" value="<?php if($result){echo $row['height'];}?>"  type="number">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Weight</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="zmdi zmdi-male-alt"></i></span>
  <input id="weight" name="weight" placeholder="Weight in Kg" class="form-control" value="<?php if($result){echo $row['wight'];}?>" type="number">
    </div>
  </div>
</div>

<div class="form-group"> 
    <label class="col-md-4 control-label">Income</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="zmdi zmdi-money"></i></span>
         <select id="income" name="income" class="form-control selectpicker">
            <option value="Below 1 Lakh" <?php if($result){ $v="Below 1 Lakh"; if($v== $row['income']) echo 'selected';} ?>>Below 1 Lakh</option>
             <option value="Above 1 Lakh & Below 5 lakh" <?php if($result){ $v="Above 1 Lakh & Below 5 lakh"; if($v== $row['income']) echo 'selected';} ?>>Above 1 Lakh & Below 5 lakh</option>
             <option value="Above 5 Lakh" <?php if($result){ $v="Above 5 Lakh"; if($v== $row['income']) echo 'selected';} ?>>Above 5 lakh</option>
         </select>
     </div>
    </div>
  </div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" >Education</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="zmdi zmdi-graduation-cap"></i></span>
  <input id="educ" name="educ" placeholder="Education" class="form-control" value="<?php if($result){echo $row['educ'];}?>"  type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" >Occupation</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="zmdi zmdi-case "></i></span>
  <input id="occup" name="occup" placeholder="Occupation" class="form-control" value="<?php if($result){echo $row['occup'];}?>" type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" >Image</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="zmdi zmdi-upload"></i></span>
  <input id="img" name="img" placeholder="Image" accept="image/*" class="form-control"  type="file">
  <?php if($result){?>
  <input type="text" class="form-control" value="<?php echo $row['img']; ?>" readonly>
  <?php } ?>
    </div>
   
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Instagram URL</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="fa-brands fa-instagram"></i></span>
  <input id="insta" name="insta" placeholder="Instagram URL Of Profile" class="form-control" value="<?php if($result){echo $row['insta'];}?>" type="text">
    </div>
  </div>
</div>
<hr>
<center><a data-target="#myModal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#myModal">View Membership Brochure</a><i class="fa fa-check-circle" aria-hidden="true"></i></center>
<hr>
<div class="form-group"> 
    <label class="col-md-4 control-label">Membership</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
         <select id="mid" name="mid" class="form-control selectpicker" <?php if($result){  $_SESSION['m_id']=$row['mid']; echo 'disabled'; }?>>
            <option value="0"  <?php if($result){ $v="0"; if($v== $row['mid']) echo 'selected';} ?>>Basic</option>
             <option value="1" <?php if($result){ $v="1"; if($v== $row['mid']) echo 'selected';} ?>>Premium</option>
             <option value="2" <?php if($result){ $v="2"; if($v== $row['mid']) echo 'selected';} ?>>Deluxe</option>
         </select>
     </div>
    </div>
  </div>
 
<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message"><i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" id="btn" name="btn" class="btn btn-warning">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
    
<!-- partial -->
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

 <!-- <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>
  <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
  <script>

function calcAge(){

    var today = new Date();
    var birthDate = new Date(document.getElementById('bday').value);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
  $("#age").val(age);

}

function display_ct() {
var x = new Date()
document.getElementById('ct').innerHTML = x;
display_c();
 }
 
 $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
      excluded: [':disabled',':hidden',':not(:visible)','.group'],
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            fname: {
                validators: {
                    regexp: {
                        regexp: /^[a-zA-Z\s\.]+$/,
                        message: 'Full Name Can Only Consist of Alphabets and Dots'
                    },
                    stringLength: {
                        min: 4,
                        max: 30,
                        message: 'Fullname must be more than 4 and less than 30 characters long'
                    },
                        notEmpty: {
                        message: 'Please Enter Your Full Name'
                    }
                }
            },
            bday: {
                validators: {
                    lessThan: {
                        enabled: false,
                        value:<?php echo date('Y-m-d',strtotime("-18years"));?> ,
                        inclusive: false,
                        message: 'DOB has to be less than <?php echo date('Y-m-d',strtotime("-18years"));?>'
                        },
                    greaterThan: {
                        enabled: false,
                        value:<?php echo date('Y-m-d',strtotime("-60years"));?>,
                        inclusive: false,
                        message: 'DOB has to be Greater than or Equals to <?php echo date('Y-m-d',strtotime("-60years"));?>'
                    },
                    }
                },
             age: {
                validators: {
                    lessThan: {
                        value: 60,
                        inclusive: true,
                        message: 'Age has to be less than 60'
                    },
                    greaterThan: {
                        value: 18,
                        inclusive: true,
                        message: 'Age has to be Greater than or Equals to 18'
                    },
                    notEmpty: {
                        enabled:false,
                        message: 'Please Enter Your Age',
                    }
                }
            },
			 educ: {
                validators: {
                  regexp: {
                        regexp: /^[a-zA-Z,\.]+$/,
                        message: 'Educational Qualifications Can Only Consist of Alphabets and Commas'
                    },
                    stringLength: {
                        min: 3,
                        max: 50,
                        message: 'Educational Qualification must be more than 3 and less than 50 characters long'
                    },
                    notEmpty: {
                        message: 'Please Enter Your Educational Qualification'
                    }
                }
            },
            occup: {
                validators: {
                  regexp: {
                        regexp: /^[a-zA-Z,\.]+$/,
                        message: 'Occupation Can Only Consist of Alphabets and Commas'
                    },
                    stringLength: {
                        min: 5,
                        max: 30,
                        message: 'Occupation must be more than 5 and less than 30 characters long'
                    },
                    notEmpty: {
                        message: 'Please Enter Your Occupation'
                    }
                }
            },
			cnct: {
                validators: {
                    notEmpty: {
                        message: 'Please Enter Your Contact Number'
                    },
                    regexp: {
                        regexp: /^[6-9]\d{9}$/,
                        message: 'Enter A Valid Phone Number!'
                    }
                }
            },
            addrs: {
                validators: {
                  stringLength: {
                        min: 6, 
                        message: 'Address Must Be More than 6 Characters Long',  
                  },
                    notEmpty: {
                        message: 'Please Enter Your Address'
                    },
                }
            },
            weight: {
                validators: {
                  lessThan: {
                        value: 150,
                        inclusive: true,
                        message: 'Weight has to be less than 150 Kg'
                    },
                    greaterThan: {
                        value: 40,
                        inclusive: false,
                        message: 'Weight has to be Greater than or Equals to 40 Kg'
                    },
                    notEmpty: {
                        message: 'Please Enter Your Weight'
                     }
                }
            },
            insta: {
                validators: {
                  uri: {
                        allowLocal: true,
                        message: 'Given is Not a Valid URL'
                    } ,
                    notEmpty: {
                        message: 'Please Enter Your Insta URL'
                    }   
                }
            },
			 height: {
                validators: {
                  lessThan: {
                        value: 202,
                        inclusive: true,
                        message: 'Height has to be less than 202 cm'
                    },
                    greaterThan: {
                        value: 100,
                        inclusive: false,
                        message: 'Height has to be Greater than or Equals to 100'
                    },
                    notEmpty: {
                        message: 'Please Enter Your Height in cm'
                    }
                }
            }
                
            }
      })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

                document.getElementById("contact_form").submit();
                /* Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post('accform.php', $form.serialize(), function(result) {
              alert('ok');
                console.log(result);
            }, 'json');*/
        });
});


</script>





</body>
</html>
