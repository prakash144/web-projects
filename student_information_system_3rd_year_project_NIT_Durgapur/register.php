<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registration</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="bootstrap/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="bootstrap/css/style.css" rel="stylesheet" />    
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="bootstrap/css/formValidation.css"/>
    <script type="text/javascript" src="bootstrap/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/formValidation.js"></script>
    <script type="text/javascript" src="bootstrap/js/framework/bootstrap.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap-filestyle.min.js"> </script>
</head>
<body style="background:url('images/bg.jpg') no-repeat top center;">
    <div class="container">
         <div class="row  pad-top">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <h3><strong>User Register</strong></h3>
                            </div>
                            <div class="panel-body">
                                <form role="form" id="defaultForm" method="post" action="savereg.php" class="form-horizontal">
<br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                           <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required="required" onblur="blurFunction()" />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-ok"></span></span>
                                            <input type="text" class="form-control"id="roll" name="roll" placeholder="Enter Roll No e.g 12/IT/76" required="required" />
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required"/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                                            <input type="text" class="form-control" name="mb" placeholder="Enter Mobile No" required="required" />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                                            <input type="text" class="form-control" name="city" placeholder="City/Town" required="required" />
                                        </div>
                                         <div class="form-group input-group">
                                          <span class="input-group-addon"><span class="glyphicon glyphicon-leaf"></span></span>
                                                <select class="form-control" name="gender" required="required">
                                                     <option value="na" selected="">Gender</option>
                                                    <option value="1">Male
                                                    </option>
                                                    <option value="2">Female
                                                </select>
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                            <input type="date" class="form-control" name="date" placeholder="Date" title="Date of Birth" required="required"/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="pwd" placeholder="Enter Password" required="required" />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="cpwd" placeholder="Retype Password" required="required" />
                                        </div> 
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Upload Image</span>
                                            <input type="file" class="form-control" id="photo" name="photo" placeholder="Upload CV" required="required" />
                                        </div>   
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Upload CV</span></span>
                                            <input type="file" class="form-control" name="cv" placeholder="Upload photo" required="required"/>
                                        </div>                             
                                     <!--<a href="#" class="btn btn-success ">Register Me</a>-->
                                      <button type="submit" class="btn btn-success" id="btnContactUs">
                                        Register Me</button>
                                    <hr />
                                    Already Registered ?  <a href="login.html" >Login here</a>
                                    <p class="text-center"><a href="index.html">Return to Home</a></p>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>
    <script type="text/javascript">
    var x = document.getElementById("defaultForm");
    x.addEventListener("blur", myBlurFunction, true);
    function myBlurFunction() {
    document.getElementById("name").style.backgroundColor = ""; 
    }
$(document).ready(function() {
    $('#defaultForm').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9 _\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            city: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9 _\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'You have to accept the terms and policies'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            mb: {
                message: 'The mobile no is not valid',
                validators: {
                    notEmpty: {
                        message: 'The mobile no can\'t be empty'
                    },
                    stringLength: {
                        min: 10,
                        max: 10,
                        message: 'The mobile no must be more 10 characters long'
                    },
                    regexp: {
                        regexp: /^[0-9\.]+$/,
                        message: 'The mobile no can only consist of numbers'
                    }
                }
            },
            mb1: {
                validators: {
                    phone: {
                        message: 'The input is not a valid US phone number'
                    }
                }
            },
            zipCode: {
                validators: {
                    zipCode: {
                        country: 'US',
                        message: 'The input is not a valid US zip code'
                    }
                }
            },
            pwd: {
                message: 'The password must be 6 characters long',
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 20,
                        message: 'The password must be 6 characters long'
                    },
                }
            },
            cpwd: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'pwd',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            roll: {
                message: 'The roll no is not valid',
                validators: {
                    notEmpty: {
                        message: 'The roll no is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 8,
                        max: 10,
                        message: 'e.g 12/IT/76'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9/\.]+$/,
                    }
                }
            },
        }
    });
});
</script>
</body>
</html>
