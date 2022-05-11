<?php
	include("include/header.php");
	?>
<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>DTD || Sign Up</title>
        
        <link rel="apple-touch-icon" sizes="512x512" href="assets/images/favicon_io/android-chrome-512x512.png" />
        <link rel="apple-touch-icon" sizes="192x192" href="assets/images/favicon_io/android-chrome-192x192.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon_io/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon_io/favicon-16x16.png" />
        <link rel="manifest" href="assets/images/favicon_io/site.webmanifest" />
        <link rel="stylesheet" href="assets/plugins/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
</head>

    <body>
        <!-- breedcrumb section start  -->
        <section class="breedcrumb" style="background: url('assets/images/bg/bg-04.jpg') center center/cover no-repeat;">
            <div class="container">
                <div class="col-lg-12 col-2">
                 <h2 class="breedcrumb__title text--heading-4">Sign Up</h2>
                 <ul class="breedcrumb__page">
                    <li class="breedcrumb__page-item">
                        <a href="home.html" class="breedcrumb__page-link text--body-3">Home</a>
                    </li>
                    <li class="breedcrumb__page-item">
                        <a href="#" class="breedcrumb__page-link text--body-3">/</a>
                    </li>
                    <li class="breedcrumb__page-item">
                        <a href="#" class="breedcrumb__page-link text--body-3">Account</a>
                    </li>
                    <li class="breedcrumb__page-item">
                        <a href="#" class="breedcrumb__page-link text--body-3">/</a>
                    </li>
                 </ul>
                </div>
            </div>
        </section>
        <!-- breedcrumb section end  -->

        <!-- registration section start   -->
        <section class="section registration">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="registration__features">
                            
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-0">
                        <div class="registration-form">
                            <h2 class="text-center text--heading-1 registration-form__title">Sign Up</h2>


                            <!-- <h2 class="registration-form__alternative-title text--body-3">or Sign Up With Email</h2> -->

                            <div class="registration-form__wrapper">
                                <form action="signupserver.php" method="POST">
                                    <div class="input-field__group">
                                        <div class="input-field">
                                            <input type="text" placeholder="User Name" name="username" id="username"/>
                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" placeholder="Username or email address" name="email" id="email" />
                                        <span class="icon icon--success">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="20" height="20" rx="10" fill="#27C200" />
                                                <path d="M14 7L8.5 12.5L6 10" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <span class="icon icon--alart">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.29 3.86L1.82002 18C1.64539 18.3024 1.55299 18.6453 1.55201 18.9945C1.55103 19.3437 1.64151 19.6871 1.81445 19.9905C1.98738 20.2939 2.23675 20.5467 2.53773 20.7239C2.83871 20.901 3.18082 20.9962 3.53002 21H20.47C20.8192 20.9962 21.1613 20.901 21.4623 20.7239C21.7633 20.5467 22.0127 20.2939 22.1856 19.9905C22.3585 19.6871 22.449 19.3437 22.448 18.9945C22.4471 18.6453 22.3547 18.3024 22.18 18L13.71 3.86C13.5318 3.56611 13.2807 3.32312 12.9812 3.15448C12.6817 2.98585 12.3438 2.89725 12 2.89725C11.6563 2.89725 11.3184 2.98585 11.0188 3.15448C10.7193 3.32312 10.4683 3.56611 10.29 3.86Z"
                                                    fill="#FF4F4F"
                                                />
                                                <path d="M12 9V13" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 17H12.01" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="input-field">
                                        <input type="password" placeholder="Password" id="password" name="password"/>
                                        <span class="icon icon--eye" onclick="showPassword('password',this)">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="#191F33" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                                    stroke="#191F33"
                                                    stroke-width="1.3"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                            </svg>
                                        </span>
                                        <span class="icon icon--success">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="20" height="20" rx="10" fill="#27C200" />
                                                <path d="M14 7L8.5 12.5L6 10" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <span class="icon icon--alart">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.29 3.86L1.82002 18C1.64539 18.3024 1.55299 18.6453 1.55201 18.9945C1.55103 19.3437 1.64151 19.6871 1.81445 19.9905C1.98738 20.2939 2.23675 20.5467 2.53773 20.7239C2.83871 20.901 3.18082 20.9962 3.53002 21H20.47C20.8192 20.9962 21.1613 20.901 21.4623 20.7239C21.7633 20.5467 22.0127 20.2939 22.1856 19.9905C22.3585 19.6871 22.449 19.3437 22.448 18.9945C22.4471 18.6453 22.3547 18.3024 22.18 18L13.71 3.86C13.5318 3.56611 13.2807 3.32312 12.9812 3.15448C12.6817 2.98585 12.3438 2.89725 12 2.89725C11.6563 2.89725 11.3184 2.98585 11.0188 3.15448C10.7193 3.32312 10.4683 3.56611 10.29 3.86Z"
                                                    fill="#FF4F4F"
                                                />
                                                <path d="M12 9V13" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 17H12.01" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="input-field">
                                        <input type="password" placeholder="Confirm Password" id="cpassword" name="cpassword" />
                                        <span class="icon icon--eye" onclick="showPassword('cpassword',this)">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="#191F33" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                                    stroke="#191F33"
                                                    stroke-width="1.3"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                            </svg>
                                        </span>
                                        <span class="icon icon--success">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="20" height="20" rx="10" fill="#27C200" />
                                                <path d="M14 7L8.5 12.5L6 10" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <span class="icon icon--alart">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.29 3.86L1.82002 18C1.64539 18.3024 1.55299 18.6453 1.55201 18.9945C1.55103 19.3437 1.64151 19.6871 1.81445 19.9905C1.98738 20.2939 2.23675 20.5467 2.53773 20.7239C2.83871 20.901 3.18082 20.9962 3.53002 21H20.47C20.8192 20.9962 21.1613 20.901 21.4623 20.7239C21.7633 20.5467 22.0127 20.2939 22.1856 19.9905C22.3585 19.6871 22.449 19.3437 22.448 18.9945C22.4471 18.6453 22.3547 18.3024 22.18 18L13.71 3.86C13.5318 3.56611 13.2807 3.32312 12.9812 3.15448C12.6817 2.98585 12.3438 2.89725 12 2.89725C11.6563 2.89725 11.3184 2.98585 11.0188 3.15448C10.7193 3.32312 10.4683 3.56611 10.29 3.86Z"
                                                    fill="#FF4F4F"
                                                />
                                                <path d="M12 9V13" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 17H12.01" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="registration-form__option">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkme" />
                                            <label class="form-check-label" for="checkme">
                                                I've read and agree with your <a href="#">Privacy Policy</a> and
                                                <a href="#">
                                                    Terms & Conditions
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    <button class="btn btn--lg w-100 registration-form__btns" type="submit">
                                        Sign Up
                                        <a href="signin.php"></a>
                                        <span class="icon--right">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.75 12H20.25" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            
                                        </span>
                                    </button>

                                    <p class="text--body-3 registration-form__redirect">Already Have an Account ? <a href="signin.php">Sign In</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- registration section  end    -->

        <!-- Back To Top Btn -->
        <button class="scrollTop" >
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 20.25V3.75" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M5.25 10.5L12 3.75L18.75 10.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>

        <script src="assets/plugins/jquery.min.js"></script>
        <script src="assets/plugins/bootstrap.bundle.min.js"></script>
        
        <script src="src/js/passwordType.html"></script>
        <script src="assets/js/app.js"></script>    
       
    </body>
</html>
<?php include("include/footer.php"); ?>
 