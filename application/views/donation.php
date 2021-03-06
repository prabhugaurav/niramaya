<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once('header.php');
?>

        <section class="ftco-section bg-light text-white">
            <div class="page-holder overlay overlay-2" style="background-image:url(https://prium.github.io/tryposh/assets/images/about-company.jpg);"></div>
            <div class="container">
                <div class="page-holder-title">
                    <h1 class="">Donation</h1>
                    <!-- <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum eos excepturi.</p> -->
                    <ol class="breadcrumb breadcrumb-style-1">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Donation</li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="ftco-section">
            <div class="container">
                <h2 class="heading-style-1 mb-4"> — Your contribution is always valued. </h2>
                <p class="lead mb-4"> What you're about to do could transform the life of a child/women living in danger.  Whether you decide to make a one-off gift or pledge a monthly contribution, we promise that the donation you make to Niramaya Health Foundation today will mean education, nutrition and life to a struggling family. </p>
                <p class="lead mb-4"> Niramaya Health Foundation welcomes such intentions and promises to take them to the most deserving people. You can make a donation towards any of the following purpose. </p>
                <div class="row mr-0">
                    <div class="col-sm-10">

                        <div class="card mb-4">
                            <div class="card-body bg-light text-dark">
                                <form id="needs-validation" novalidate name="contactForm" action="confirmation.php" method="post">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="firstname" class="font-600">First Name <span class="text-danger">*</span> </label>
                                                <input type="text" pattern="^[a-zA-Z\s]+$" id="firstname" name="firstname" placeholder="First Name" class="form-control" aria-describedby="inputGroupPrepend" required autocomplete="off" />  
                                                <div class="invalid-feedback">Please enter first name.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="lastname" class="font-600">Last Name <span class="text-danger">*</span> </label>
                                                <input type="text" pattern="^[a-zA-Z\s]+$" id="lastname" name="lastname" placeholder="Last Name" class="form-control" aria-describedby="inputGroupPrepend" required autocomplete="off" />  
                                                <div class="invalid-feedback">Please enter last name.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="contactno" class="font-600">Contact No <span class="text-danger">*</span> </label>
                                                <input type="text" id="contactno" name="contactno" placeholder="Contact No" class="form-control" aria-describedby="inputGroupPrepend" required autocomplete="off" />  
                                                <div class="invalid-feedback">Please enter Contact No.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="emailId" class="font-600">Email Id <span class="text-danger">*</span> </label>
                                                <input type="text" id="emailId" name="emailId" placeholder="Email Id" class="form-control" aria-describedby="inputGroupPrepend" required autocomplete="off" />  
                                                <div class="invalid-feedback">Please enter Email Id.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="amountDonate" class="font-600">Amount <span class="text-danger">*</span> </label>
                                                <input type="number" id="amountDonate" name="amountDonate" placeholder="Amount" class="form-control" aria-describedby="inputGroupPrepend" required autocomplete="off" />  
                                                <div class="invalid-feedback">Please enter Amount.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <textarea class="form-control" rows="2" id="address" aria-describedby="inputGroupPrepend" required></textarea>
                                                <div class="invalid-feedback">please enter address</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="cityName" class="font-600">City <span class="text-danger">*</span> </label>
                                                <input type="text" id="cityName" placeholder="City" class="form-control" aria-describedby="inputGroupPrepend" required autocomplete="off" />  
                                                <div class="invalid-feedback">Please enter City.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="pinCodeno" class="font-600">Pin Code <span class="text-danger">*</span> </label>
                                                <input type="number" id="pinCodeno" placeholder="Pin Code" class="form-control" aria-describedby="inputGroupPrepend" required autocomplete="off" />  
                                                <div class="invalid-feedback">Please enter Pin Code.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="panCard" class="font-600">Pan Card <span class="text-danger">*</span> </label>
                                                <input type="number" id="panCard" placeholder="Pan Card" class="form-control" aria-describedby="inputGroupPrepend" required autocomplete="off" />  
                                                <div class="invalid-feedback">Please enter Pan Card.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                                        <div class="col-sm-4 col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="Gender">Gender</label>
                                                <select class="custom-select" required>
                                                    <option value="">Select Gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                                <div class="invalid-feedback">Please choose gender</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="email">Email address</label>
                                                <input type="email" class="form-control" id="email" placeholder="email address" aria-describedby="inputGroupPrepend" required>  
                                                <div class="invalid-feedback">Please provide a valid email.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="phonenumber">Mobile Number</label>
                                                <input type="tel" pattern="^\d{10}$" class="form-control" id="phonenumber" placeholder="Mobile Number" aria-describedby="inputGroupPrepend" required>  
                                                <div class="invalid-feedback">Please enter 10 digit mobile number.</div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="row">
                                        <div class="col-sm-12 col-md-12 col-xs-12">
                                            <div class="form-group">  
                                                <label>Mandatory Skills</label>                                        
                                            </div>
                                            <div class="form-check-inline">
                                                <div class="custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input" id="html" aria-describedby="inputGroupPrepend" name="radio-html" required>  
                                                    <label class="custom-control-label" for="html">HTML 5</label>
                                                    <div class="invalid-feedback">Choose skill</div>
                                                </div>
                                            </div>
                                            <div class="form-check-inline">
                                                <div class="custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input" id="javascript" aria-describedby="inputGroupPrepend" name="radio-javascript" required>  
                                                    <label class="custom-control-label" for="javascript">JavaScript</label>
                                                    <div class="invalid-feedback">Choose skill</div>
                                                </div>
                                            </div>
                                            <div class="form-check-inline">
                                                <div class="custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input" id="csharp" aria-describedby="inputGroupPrepend" name="radio-csharp" required>  
                                                    <label class="custom-control-label" for="csharp">C# Programming</label>
                                                    <div class="invalid-feedback">Choose skill</div>
                                                </div>
                                            </div>
                                            <div class="form-check-inline">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="aspdotnet" aria-describedby="inputGroupPrepend" name="radio-aspdotnet" required>  
                                                    <label class="custom-control-label" for="aspdotnet">ASP.NET</label>
                                                    <div class="invalid-feedback">Choose skill</div>
                                                </div>
                                            </div>
                                            <div class="form-check-inline">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="MVC" name="radio-MVC" required>  
                                                    <label class="custom-control-label" for="MVC">ASP.NET MVC</label>
                                                    <div class="invalid-feedback">Choose skill</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="row">
                                        <div class="col-sm-12 col-md-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Profile Picture</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>  
                                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                    <div class="invalid-feedback">Choose file for upload</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="row">
                                        <div class="col-sm-12 col-md-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <textarea class="form-control" rows="3" id="address" aria-describedby="inputGroupPrepend" required></textarea>
                                                <div class="invalid-feedback">please enter address</div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="row">
                                        <div class="col-sm-12 col-md-12 col-xs-12">
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>  
                                                    <label class="form-check-label" for="invalidCheck">  
                                                    Agree to terms and conditions  
                                                    </label>
                                                    <div class="invalid-feedback">  
                                                        You must agree before submitting.  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-xs-12">
                                            <div class="float-right">  
                                                <!-- <button class="btn btn-danger rounded-0" type="submit">Cancel</button>   -->
                                                <button class="btn btn-primary rounded-0" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <p class="lead"> If you wish to donate but want to know more about our projects first then please write to <strong class="font-600"><a href="javascript:void(0)">niramayahealth@gmail.com</a></strong> </p>
            </div>
        </section>

<?php
	require_once('footer.php');
?>
<script type="text/javascript">
        (function () {  
            'use strict';
            window.addEventListener('load', function () {
                var form = document.getElementById('needs-validation');
                var fnameVar = document.contactForm.firstname.value;
                var lnameVar = document.contactForm.lastname.value;
                var contnoVar = document.contactForm.contactno.value;
                var emlIdVar = document.contactForm.emailId.value;
                var amtDontVar = document.contactForm.amountDonate.value;
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {  
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                    var dataPreview = "You've entered the following details: \n" +
                                    "First Name: " + fnameVar + "\n" +
                                    "Last Name: " + lnameVar + "\n" +
                                    "Contact Number: " + contnoVar + "\n" +
                                    "Email Id: " + emlIdVar + "\n" +
                                    "Donation: " + amtDontVar + "\n";
                    alert(dataPreview);
                }, false);
            }, false);
        })();
        /*function validateForm() {
            
        };*/
    </script>
