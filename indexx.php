<?php

include_once "./include/headerr.php";
$cities = ["Azara", "Delhi", "Guwahati", "Mumbai", "Kolkata", "Amravati", "Anjangaon", "Arvi"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
        <!-- <title>DTD Service</title>
        <link rel="apple-touch-icon" sizes="512x512" href="assets/images/favicon_io/android-chrome-512x512.png" />
        <link rel="apple-touch-icon" sizes="192x192" href="assets/images/favicon_io/android-chrome-192x192.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon_io/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon_io/favicon-16x16.png" />
        <link rel="manifest" href="assets/images/favicon_io/site.webmanifest" />
        <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css" />
        <link rel="stylesheet" href="assets/plugins/select2/css/select2-bootstrap-5-theme.css" />
        <link rel="stylesheet" href="assets/plugins/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/main.css"> -->
</head>

<body>
<div class="banner banner--three" style="background: url('images/123.jpg') center center/cover;">

<div class="container" style="margin-top:140px; margin-bottom: 60px;">
            
    <div class="row">
        <div class="form-group col-5">
            <label for="">City</label>
            <select class="form-control" name="city" id="city">
                <option value="none">-- Select City --</option>
                <?php foreach ($cities as $city) : ?>
                <option value="<?= $city ?>"> <?= $city ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group col-5">
            <label for="">Who's Required</label>
            <select class="form-control" name="profession" id="profession">
                <option value="none">Select Profession</option>
                <option value="electrician">Salon And Spa</option>
                <option value="plumber">Home Appliances</option>
                <option value="mobile">Cleanning</option>
                <option value="none">Home Painting</option>
                <option value="electrician">Electrician</option>
                <option value="plumber">Plumber</option>
                <option value="mobile">Mobile Repairer</option>
            </select>
        </div>

        <div class="form-group col-2">
            <label for="">Action</label>
            <button id="search" class="form-control btn btn-success" type="button">Search</button>
        </div>
    </div>

     <div class="table-responsive">
        <table id="providers" class="table">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Profession</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan='2'>Select city and profession..</td>
                </tr>
            </tbody>
        </table>
    </div> 
</div>
</div>

<!-- Poupular category Section start  -->
<section class="section popular-category">
            <div class="container">
                <h2 class="text--heading-1 section__title">Popular Category</h2>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-6">
                        <div class="category-card">
                            <div class="category-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                </svg>
                            </div>
                            <h5 class="text--body-2 category-card__title">Salon and Spa</h5>
                            <div class="category-card__view">
                                <span class="first view-number">69,590 services</span>
                                <a href="booking.php" class="second view-btn">
                                    View Service
                                    <span class="icon">
                                        <svg width="30" height="30" viewBox="0 0 50 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <!--path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path-->
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6">
                        <div class="category-card">
                            <div class="category-card__icon">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30 4.5H6C4.34315 4.5 3 5.84315 3 7.5V22.5C3 24.1569 4.34315 25.5 6 25.5H30C31.6569 25.5 33 24.1569 33 22.5V7.5C33 5.84315 31.6569 4.5 30 4.5Z"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                    <path d="M12 31.5H24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M18 25.5V31.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <h5 class="text--body-2 category-card__title">Home appliances</h5>
                            <div class="category-card__view">
                                <span class="first view-number">4,391 services</span>
                                <a href="ad-details.html" class="second view-btn">
                                    View Service
                                    <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-easel2-fill" viewBox="0 0 16 16">
                                     <path d="M8.447.276a.5.5 0 0 0-.894 0L7.19 1H2.5A1.5 1.5 0 0 0 1 2.5V10h14V2.5A1.5 1.5 0 0 0 13.5 1H8.809L8.447.276Z"/>
                                     <path fill-rule="evenodd" d="M.5 11a.5.5 0 0 0 0 1h2.86l-.845 3.379a.5.5 0 0 0 .97.242L3.89 14h8.22l.405 1.621a.5.5 0 0 0 .97-.242L12.64 12h2.86a.5.5 0 0 0 0-1H.5Zm3.64 2 .25-1h7.22l.25 1H4.14Z"/>
                                    </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6">
                        <div class="category-card">
                            <div class="category-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                                <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
                                </svg>
                            </div>
                            <h5 class="text--body-2 category-card__title">Cleanning</h5>
                            <div class="category-card__view">
                                <span class="first view-number">24,296 Services</span>
                                <a href="ad-details.html" class="second view-btn">
                                    View Service
                                    <span class="icon">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6">
                        <div class="category-card">
                            <div class="category-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                                <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
                                </svg>
                            </div>
                            <h5 class="text--body-2 category-card__title">Electrician</h5>
                            <div class="category-card__view">
                                <span class="first view-number">15,374 Services</span>
                                <a href="ad-details.html" class="second view-btn">
                                    View Service
                                    <span class="icon">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6">
                        <div class="category-card">
                            <div class="category-card__icon">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M26.0145 5.21258L20.1136 11.1135L20.9091 15.0909L24.8866 15.8864L30.7875 9.98555L30.7881 9.98531C31.5184 11.7094 31.6931 13.6183 31.2878 15.4464C30.8825 17.2744 29.9173 18.9306 28.5266 20.1844C27.1359 21.4382 25.3889 22.2272 23.5288 22.4416C21.6687 22.656 19.788 22.2852 18.1485 21.3807L18.1487 21.3804L10.2616 30.5114C9.62853 31.1438 8.77028 31.4989 7.8755 31.4986C6.98073 31.4983 6.12268 31.1428 5.48998 30.5101C4.85728 29.8774 4.50172 29.0193 4.50146 28.1246C4.50121 27.2298 4.85628 26.3715 5.48862 25.7385L14.6196 17.8515L14.6194 17.8516C13.7149 16.2121 13.344 14.3314 13.5585 12.4713C13.7729 10.6112 14.5619 8.86417 15.8157 7.47349C17.0695 6.0828 18.7257 5.11761 20.5537 4.71228C22.3817 4.30694 24.2906 4.48162 26.0148 5.21201L26.0145 5.21258Z"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </div>
                            <h5 class="text--body-2 category-card__title">Plumber</h5>
                            <div class="category-card__view">
                                <span class="first view-number">4,391 Services</span>
                                <a href="ad-details.html" class="second view-btn">
                                    View service
                                    <span class="icon">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.25 12H20.75" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M14 5.25L20.75 12L14 18.75" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6">
                        <div class="category-card">
                            <div class="category-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-paint-bucket" viewBox="0 0 16 16">
                                <path d="M6.192 2.78c-.458-.677-.927-1.248-1.35-1.643a2.972 2.972 0 0 0-.71-.515c-.217-.104-.56-.205-.882-.02-.367.213-.427.63-.43.896-.003.304.064.664.173 1.044.196.687.556 1.528 1.035 2.402L.752 8.22c-.277.277-.269.656-.218.918.055.283.187.593.36.903.348.627.92 1.361 1.626 2.068.707.707 1.441 1.278 2.068 1.626.31.173.62.305.903.36.262.05.64.059.918-.218l5.615-5.615c.118.257.092.512.05.939-.03.292-.068.665-.073 1.176v.123h.003a1 1 0 0 0 1.993 0H14v-.057a1.01 1.01 0 0 0-.004-.117c-.055-1.25-.7-2.738-1.86-3.494a4.322 4.322 0 0 0-.211-.434c-.349-.626-.92-1.36-1.627-2.067-.707-.707-1.441-1.279-2.068-1.627-.31-.172-.62-.304-.903-.36-.262-.05-.64-.058-.918.219l-.217.216zM4.16 1.867c.381.356.844.922 1.311 1.632l-.704.705c-.382-.727-.66-1.402-.813-1.938a3.283 3.283 0 0 1-.131-.673c.091.061.204.15.337.274zm.394 3.965c.54.852 1.107 1.567 1.607 2.033a.5.5 0 1 0 .682-.732c-.453-.422-1.017-1.136-1.564-2.027l1.088-1.088c.054.12.115.243.183.365.349.627.92 1.361 1.627 2.068.706.707 1.44 1.278 2.068 1.626.122.068.244.13.365.183l-4.861 4.862a.571.571 0 0 1-.068-.01c-.137-.027-.342-.104-.608-.252-.524-.292-1.186-.8-1.846-1.46-.66-.66-1.168-1.32-1.46-1.846-.147-.265-.225-.47-.251-.607a.573.573 0 0 1-.01-.068l3.048-3.047zm2.87-1.935a2.44 2.44 0 0 1-.241-.561c.135.033.324.11.562.241.524.292 1.186.8 1.846 1.46.45.45.83.901 1.118 1.31a3.497 3.497 0 0 0-1.066.091 11.27 11.27 0 0 1-.76-.694c-.66-.66-1.167-1.322-1.458-1.847z"/>
                                </svg>
                            </svg>
                            </div>
                            <h5 class="text--body-2 category-card__title">Home painting</h5>
                            <div class="category-card__view">
                                <span class="first view-number">39,400 Services</span>
                                <a href="ad-details.html" class="second view-btn">
                                    View Service
                                    <span class="icon">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6">
                        <div class="category-card">
                            <div class="category-card__icon">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M33.8509 17.126L30.375 18.8639L25.875 10.2461L29.3863 8.49047C29.6501 8.35857 29.9552 8.33554 30.2358 8.42635C30.5164 8.51716 30.7501 8.71453 30.8867 8.97598L34.345 15.599C34.4142 15.7314 34.4563 15.8763 34.4688 16.0252C34.4814 16.1741 34.4642 16.3239 34.4182 16.4661C34.3722 16.6082 34.2983 16.7398 34.2009 16.8531C34.1035 16.9664 33.9846 17.0591 33.8509 17.126V17.126Z"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M5.62515 18.7133L2.14923 16.9753C2.0156 16.9085 1.89662 16.8157 1.79923 16.7025C1.70184 16.5892 1.62799 16.4576 1.58199 16.3155C1.53599 16.1733 1.51877 16.0234 1.53132 15.8746C1.54388 15.7257 1.58596 15.5808 1.65511 15.4484L5.1135 8.82535C5.25001 8.5639 5.48375 8.36652 5.76436 8.27572C6.04498 8.18491 6.35004 8.20794 6.61384 8.33984L10.1251 10.0955L5.62515 18.7133Z"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M30.375 18.864L28.125 21.4962L22.9504 26.6708C22.813 26.8082 22.6424 26.9076 22.4552 26.9595C22.268 27.0113 22.0705 27.0138 21.8821 26.9667L13.7319 24.9292C13.579 24.8909 13.4359 24.821 13.3117 24.724L5.625 18.7133"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M28.1247 21.4962L21.9372 16.9962L20.1372 18.3462C19.3583 18.9304 18.4109 19.2462 17.4372 19.2462C16.4635 19.2462 15.5161 18.9304 14.7372 18.3462L13.9749 17.7745C13.846 17.6778 13.7393 17.5545 13.6621 17.413C13.585 17.2715 13.5392 17.115 13.5277 16.9542C13.5163 16.7935 13.5396 16.6321 13.5959 16.4811C13.6523 16.3301 13.7404 16.193 13.8544 16.079L19.3577 10.5757C19.4622 10.4713 19.5862 10.3884 19.7227 10.3319C19.8592 10.2753 20.0054 10.2462 20.1532 10.2462H25.8747"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path d="M10.2056 10.0953L17.4224 7.99137C17.6802 7.91622 17.9564 7.93575 18.2011 8.04645L23.0623 10.2461" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.75 29.9337L11.5116 28.8741C11.3396 28.8311 11.1803 28.748 11.0465 28.6317L7.875 25.875" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <h5 class="text--body-2 category-card__title">Event Organizar</h5>
                            <div class="category-card__view">
                                <span class="first view-number">2,874 Services</span>
                                <a href="ad-details.html" class="second view-btn">
                                    View Services
                                    <span class="icon">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6">
                        <div class="category-card">
                            <div class="category-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-usb-mini" viewBox="0 0 16 16">
                                <path d="M3.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-9Z"/>
                                <path d="M3 3a1 1 0 0 0-1 1v1.293L.293 7A1 1 0 0 0 0 7.707V12a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V7.707A1 1 0 0 0 15.707 7L14 5.293V4a1 1 0 0 0-1-1H3Zm0 1h10v1.293a1 1 0 0 0 .293.707L15 7.707V12H1V7.707L2.707 6A1 1 0 0 0 3 5.293V4Z"/>
                            </svg>
                            </div>
                            <h5 class="text--body-2 category-card__title">Carpenter</h5>
                            <div class="category-card__view">
                                <span class="first view-number">1,888 Services</span>
                                <a href="ad-details.html" class="second view-btn">
                                    View Services
                                    <span class="icon">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Poupular category Section end   -->

        <!-- recent-post section start  -->
        <section class="section recent-post">
            <div class="container">
                <h2 class="text--heading-1 section__title">Our Popular Services</h2>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="cards cards--one cards--highlight">
                            <a href="ad-details.html" class="cards__img-wrapper">
                                <img src="assets/images/mobile.png" alt="card-img" class="img-fluid" />
                            </a>
                            <div class="cards__info">
                                <div class="cards__info-top">
                                    <h6 class="text--body-4 cards__category-title">
                                        <span class="icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8 14.5L14 11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2 8L8 11.5L14 8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2 5L8 8.5L14 5L8 1.5L2 5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        Electronics
                                    </h6>
                                    <a href="ad-details.html" class="text--body-3-600 cards__caption-title">Mobile</a>
                                </div>
                                <div class="cards__info-bottom">
                                    <h6 class="cards__location text--body-4">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 10.625C11.3807 10.625 12.5 9.50571 12.5 8.125C12.5 6.74429 11.3807 5.625 10 5.625C8.61929 5.625 7.5 6.74429 7.5 8.125C7.5 9.50571 8.61929 10.625 10 10.625Z"
                                                    stroke="#27C200"
                                                    stroke-width="1.2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                                <path
                                                    d="M16.25 8.125C16.25 13.75 10 18.125 10 18.125C10 18.125 3.75 13.75 3.75 8.125C3.75 6.4674 4.40848 4.87769 5.58058 3.70558C6.75269 2.53348 8.3424 1.875 10 1.875C11.6576 1.875 13.2473 2.53348 14.4194 3.70558C15.5915 4.87769 16.25 6.4674 16.25 8.125V8.125Z"
                                                    stroke="#27C200"
                                                    stroke-width="1.2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                        Guwahati
                                    </h6>
                                    <span class="cards__price-title text--body-3-600">₹220.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="cards cards--one">
                            <a href="ad-details.html" class="cards__img-wrapper">
                                <img src="assets/images/laptop.png" alt="card-img" class="img-fluid" />
                            </a>
                            <div class="cards__info">
                                <div class="cards__info-top">
                                    <h6 class="text--body-4 cards__category-title">
                                        <span class="icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8 14.5L14 11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2 8L8 11.5L14 8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2 5L8 8.5L14 5L8 1.5L2 5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        Electronics
                                    </h6>
                                    <a href="ad-details.html" class="text--body-3-600 cards__caption-title">Laptop</a>
                                </div>
                                <div class="cards__info-bottom">
                                    <h6 class="cards__location text--body-4">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 10.625C11.3807 10.625 12.5 9.50571 12.5 8.125C12.5 6.74429 11.3807 5.625 10 5.625C8.61929 5.625 7.5 6.74429 7.5 8.125C7.5 9.50571 8.61929 10.625 10 10.625Z"
                                                    stroke="#27C200"
                                                    stroke-width="1.2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                                <path
                                                    d="M16.25 8.125C16.25 13.75 10 18.125 10 18.125C10 18.125 3.75 13.75 3.75 8.125C3.75 6.4674 4.40848 4.87769 5.58058 3.70558C6.75269 2.53348 8.3424 1.875 10 1.875C11.6576 1.875 13.2473 2.53348 14.4194 3.70558C15.5915 4.87769 16.25 6.4674 16.25 8.125V8.125Z"
                                                    stroke="#27C200"
                                                    stroke-width="1.2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                        Guwahati
                                    </h6>
                                    <span class="cards__price-title text--body-3-600">₹320.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="cards cards--one">
                            <a href="ad-details.html" class="cards__img-wrapper">
                                <img src="assets/images/iconn/hair.jpg" alt="card-img" class="img-fluid" />
                            </a>
                            <div class="cards__info">
                                <div class="cards__info-top">
                                    <h6 class="text--body-4 cards__category-title">
                                        <span class="icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8 14.5L14 11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2 8L8 11.5L14 8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2 5L8 8.5L14 5L8 1.5L2 5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        Salon and Spa
                                    </h6>
                                    <a href="ad-details.html" class="text--body-3-600 cards__caption-title">Men Hair Cut</a>
                                </div>
                                <div class="cards__info-bottom">
                                    <h6 class="cards__location text--body-4">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 10.625C11.3807 10.625 12.5 9.50571 12.5 8.125C12.5 6.74429 11.3807 5.625 10 5.625C8.61929 5.625 7.5 6.74429 7.5 8.125C7.5 9.50571 8.61929 10.625 10 10.625Z"
                                                    stroke="#27C200"
                                                    stroke-width="1.2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                                <path
                                                    d="M16.25 8.125C16.25 13.75 10 18.125 10 18.125C10 18.125 3.75 13.75 3.75 8.125C3.75 6.4674 4.40848 4.87769 5.58058 3.70558C6.75269 2.53348 8.3424 1.875 10 1.875C11.6576 1.875 13.2473 2.53348 14.4194 3.70558C15.5915 4.87769 16.25 6.4674 16.25 8.125V8.125Z"
                                                    stroke="#27C200"
                                                    stroke-width="1.2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                        Guwahati
                                    </h6>
                                    <span class="cards__price-title text--body-3-600">₹150.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="cards cards--one">
                            <a href="ad-details.html" class="cards__img-wrapper">
                                <img src="assets/images/iconn/gimages.jpg" alt="card-img" class="img-fluid" />
                            </a>
                            <div class="cards__info">
                                <div class="cards__info-top">
                                    <h6 class="text--body-4 cards__category-title">
                                        <span class="icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8 14.5L14 11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2 8L8 11.5L14 8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2 5L8 8.5L14 5L8 1.5L2 5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        Salon and Spa
                                    </h6>
                                    <a href="ad-details.html" class="text--body-3-600 cards__caption-title">Girl Hair cut</a>
                                </div>
                                <div class="cards__info-bottom">
                                    <h6 class="cards__location text--body-4">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 10.625C11.3807 10.625 12.5 9.50571 12.5 8.125C12.5 6.74429 11.3807 5.625 10 5.625C8.61929 5.625 7.5 6.74429 7.5 8.125C7.5 9.50571 8.61929 10.625 10 10.625Z"
                                                    stroke="#27C200"
                                                    stroke-width="1.2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                                <path
                                                    d="M16.25 8.125C16.25 13.75 10 18.125 10 18.125C10 18.125 3.75 13.75 3.75 8.125C3.75 6.4674 4.40848 4.87769 5.58058 3.70558C6.75269 2.53348 8.3424 1.875 10 1.875C11.6576 1.875 13.2473 2.53348 14.4194 3.70558C15.5915 4.87769 16.25 6.4674 16.25 8.125V8.125Z"
                                                    stroke="#27C200"
                                                    stroke-width="1.2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                        Guwahati
                                    </h6>
                                    <span class="cards__price-title text--body-3-600">₹220.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="cards cards--one cards--highlight">
                            <a href="ad-details.html" class="cards__img-wrapper">
                                <img src="assets/images/iconn/home.jpg" alt="card-img" class="img-fluid" />
                            </a>
                            <div class="cards__info">
                                <div class="cards__info-top">
                                    <h6 class="text--body-4 cards__category-title">
                                        <span class="icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8 14.5L14 11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2 8L8 11.5L14 8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2 5L8 8.5L14 5L8 1.5L2 5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        Home appliances
                                    </h6>
                                    <a href="ad-details.html" class="text--body-3-600 cards__caption-title">T.v , Fridge, A.C, Fan etc...</a>
                                </div>
                                <div class="cards__info-bottom">
                                    <h6 class="cards__location text--body-4">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 10.625C11.3807 10.625 12.5 9.50571 12.5 8.125C12.5 6.74429 11.3807 5.625 10 5.625C8.61929 5.625 7.5 6.74429 7.5 8.125C7.5 9.50571 8.61929 10.625 10 10.625Z"
                                                    stroke="#27C200"
                                                    stroke-width="1.2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                                <path
                                                    d="M16.25 8.125C16.25 13.75 10 18.125 10 18.125C10 18.125 3.75 13.75 3.75 8.125C3.75 6.4674 4.40848 4.87769 5.58058 3.70558C6.75269 2.53348 8.3424 1.875 10 1.875C11.6576 1.875 13.2473 2.53348 14.4194 3.70558C15.5915 4.87769 16.25 6.4674 16.25 8.125V8.125Z"
                                                    stroke="#27C200"
                                                    stroke-width="1.2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                        Guwahati
                                    </h6>
                                    <span class="cards__price-title text--body-3-600">₹2220.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="cards cards--one">
                            <a href="ad-details.html" class="cards__img-wrapper">
                                <img src="assets/images/iconn/car.jpg" alt="card-img" class="img-fluid" />
                            </a>
                            <div class="cards__info">
                                <div class="cards__info-top">
                                    <h6 class="text--body-4 cards__category-title">
                                        <span class="icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8 14.5L14 11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2 8L8 11.5L14 8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2 5L8 8.5L14 5L8 1.5L2 5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        Carpenter
                                    </h6>
                                    <a href="ad-details.html" class="text--body-3-600 cards__caption-title">Furniture making and Repair</a>
                                </div>
                                <div class="cards__info-bottom">
                                    <h6 class="cards__location text--body-4">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 10.625C11.3807 10.625 12.5 9.50571 12.5 8.125C12.5 6.74429 11.3807 5.625 10 5.625C8.61929 5.625 7.5 6.74429 7.5 8.125C7.5 9.50571 8.61929 10.625 10 10.625Z"
                                                    stroke="#27C200"
                                                    stroke-width="1.2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                                <path
                                                    d="M16.25 8.125C16.25 13.75 10 18.125 10 18.125C10 18.125 3.75 13.75 3.75 8.125C3.75 6.4674 4.40848 4.87769 5.58058 3.70558C6.75269 2.53348 8.3424 1.875 10 1.875C11.6576 1.875 13.2473 2.53348 14.4194 3.70558C15.5915 4.87769 16.25 6.4674 16.25 8.125V8.125Z"
                                                    stroke="#27C200"
                                                    stroke-width="1.2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                        Guwahati
                                    </h6>
                                    <span class="cards__price-title text--body-3-600">₹220.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="cards cards--one">
                            <a href="ad-details.html" class="cards__img-wrapper">
                                <img src="assets/images/iconn/clean.jpg" alt="card-img" class="img-fluid" />
                            </a>
                            <div class="cards__info">
                                <div class="cards__info-top">
                                    <h6 class="text--body-4 cards__category-title">
                                        <span class="icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8 14.5L14 11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2 8L8 11.5L14 8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2 5L8 8.5L14 5L8 1.5L2 5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        Cleanning
                                    </h6>
                                    <a href="ad-details.html" class="text--body-3-600 cards__caption-title">Cleanning of house, bathroom etc</a>
                                </div>
                                <div class="cards__info-bottom">
                                    <h6 class="cards__location text--body-4">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 10.625C11.3807 10.625 12.5 9.50571 12.5 8.125C12.5 6.74429 11.3807 5.625 10 5.625C8.61929 5.625 7.5 6.74429 7.5 8.125C7.5 9.50571 8.61929 10.625 10 10.625Z"
                                                    stroke="#27C200"
                                                    stroke-width="1.2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                                <path
                                                    d="M16.25 8.125C16.25 13.75 10 18.125 10 18.125C10 18.125 3.75 13.75 3.75 8.125C3.75 6.4674 4.40848 4.87769 5.58058 3.70558C6.75269 2.53348 8.3424 1.875 10 1.875C11.6576 1.875 13.2473 2.53348 14.4194 3.70558C15.5915 4.87769 16.25 6.4674 16.25 8.125V8.125Z"
                                                    stroke="#27C200"
                                                    stroke-width="1.2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                        Guwahati
                                    </h6>
                                    <span class="cards__price-title text--body-3-600">₹220.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="cards cards--one">
                            <a href="ad-details.html" class="cards__img-wrapper">
                                <img src="assets/images/iconn/plm.jpg" alt="card-img" class="img-fluid" />
                            </a>
                            <div class="cards__info">
                                <div class="cards__info-top">
                                    <h6 class="text--body-4 cards__category-title">
                                        <span class="icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 11L8 14.5L14 11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2 8L8 11.5L14 8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2 5L8 8.5L14 5L8 1.5L2 5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        Plumber
                                    </h6>
                                    <a href="ad-details.html" class="text--body-3-600 cards__caption-title">Repairing of pipe line.</a>
                                </div>
                                <div class="cards__info-bottom">
                                    <h6 class="cards__location text--body-4">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 10.625C11.3807 10.625 12.5 9.50571 12.5 8.125C12.5 6.74429 11.3807 5.625 10 5.625C8.61929 5.625 7.5 6.74429 7.5 8.125C7.5 9.50571 8.61929 10.625 10 10.625Z"
                                                    stroke="#27C200"
                                                    stroke-width="1.2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                                <path
                                                    d="M16.25 8.125C16.25 13.75 10 18.125 10 18.125C10 18.125 3.75 13.75 3.75 8.125C3.75 6.4674 4.40848 4.87769 5.58058 3.70558C6.75269 2.53348 8.3424 1.875 10 1.875C11.6576 1.875 13.2473 2.53348 14.4194 3.70558C15.5915 4.87769 16.25 6.4674 16.25 8.125V8.125Z"
                                                    stroke="#27C200"
                                                    stroke-width="1.2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                        Guwahati
                                    </h6>
                                    <span class="cards__price-title text--body-3-600">₹500.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="recent-post__btn">
                    <a href="blog-list.html" class="btn">
                        View All
                        <span class="icon--right">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.25 12H20.75" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M14 5.25L20.75 12L14 18.75" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </section>
        <!-- recent-post section end -->

        <!-- work section start  -->
        <section class="section work bgcolor--gray-10">
            <div class="container">
                <h2 class="text--heading-1 section__title">How it Work</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="work-card">
                            <span class="work-card__icon">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.2" d="M25 31.25C31.9036 31.25 37.5 25.6536 37.5 18.75C37.5 11.8464 31.9036 6.25 25 6.25C18.0964 6.25 12.5 11.8464 12.5 18.75C12.5 25.6536 18.0964 31.25 25 31.25Z" fill="#FF4F4F"></path>
                                    <path d="M34.375 10.9375H43.75" stroke="#FF4F4F" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M39.0625 6.25V15.625" stroke="#FF4F4F" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M6.05255 42.1857C7.97357 38.8606 10.7358 36.0996 14.0617 34.18C17.3876 32.2605 21.1601 31.25 25.0002 31.25C28.8403 31.25 32.6128 32.2606 35.9387 34.1803C39.2646 36.0999 42.0267 38.8609 43.9477 42.1861"
                                        stroke="#FF4F4F"
                                        stroke-width="2.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                    <path
                                        d="M36.7287 23.0826C35.8932 25.3386 34.4241 27.3054 32.4978 28.7467C30.5716 30.188 28.2702 31.0424 25.8701 31.2075C23.47 31.3725 21.0733 30.8411 18.9679 29.677C16.8625 28.5129 15.138 26.7657 14.0015 24.6453C12.865 22.5249 12.3649 20.1215 12.5613 17.7237C12.7576 15.326 13.6421 13.0359 15.1084 11.1287C16.5747 9.22143 18.5605 7.77809 20.8272 6.97207C23.094 6.16604 25.5452 6.03161 27.8865 6.58493"
                                        stroke="#FF4F4F"
                                        stroke-width="2.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                </svg>
                            </span>
                            <span class="work-card__count-number">
                                01
                            </span>
                            <h2 class="work-card__title text--body-1">Create Account</h2>
                            <p class="work-card__description text--body-3">
                               Create an Account and Enjoy the services that are available in this website at your door step.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="work-card">
                            <span class="work-card__icon">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        opacity="0.2"
                                        d="M10.9375 7.8136H39.0625C39.4769 7.8136 39.8743 7.97822 40.1674 8.27124C40.4604 8.56427 40.625 8.9617 40.625 9.3761V39.0636C40.625 40.3068 40.1311 41.4991 39.2521 42.3782C38.373 43.2572 37.1807 43.7511 35.9375 43.7511H14.0625C12.8193 43.7511 11.627 43.2572 10.7479 42.3782C9.86886 41.4991 9.375 40.3068 9.375 39.0636V9.3761C9.375 8.9617 9.53962 8.56427 9.83265 8.27124C10.1257 7.97822 10.5231 7.8136 10.9375 7.8136Z"
                                        fill="#FFBF00"
                                    ></path>
                                    <path d="M18.75 25.0012H31.25" stroke="#FFBF00" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M18.75 31.2512H31.25" stroke="#FFBF00" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M10.9375 7.8136H39.0625C39.4769 7.8136 39.8743 7.97822 40.1674 8.27124C40.4604 8.56427 40.625 8.9617 40.625 9.3761V39.0636C40.625 40.3068 40.1311 41.4991 39.2521 42.3782C38.373 43.2572 37.1807 43.7511 35.9375 43.7511H14.0625C12.8193 43.7511 11.627 43.2572 10.7479 42.3782C9.86886 41.4991 9.375 40.3068 9.375 39.0636V9.3761C9.375 8.9617 9.53962 8.56427 9.83265 8.27124C10.1257 7.97822 10.5231 7.8136 10.9375 7.8136Z"
                                        stroke="#FFBF00"
                                        stroke-width="2.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                    <path d="M15.625 4.68872V10.9387" stroke="#FFBF00" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M25 4.68872V10.9387" stroke="#FFBF00" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M34.375 4.68872V10.9387" stroke="#FFBF00" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <span class="work-card__count-number">
                                02
                            </span>
                            <h2 class="work-card__title text--body-1">Search for service</h2>
                            <p class="work-card__description text--body-3">
                                Search for service that are available in this website and book a service at your on time and enjoy.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="work-card">
                            <span class="work-card__icon">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        opacity="0.2"
                                        d="M6.46637 14.5736C6.32466 14.814 6.24995 15.0879 6.25 15.3669V34.633C6.25 34.9103 6.32377 35.1825 6.46374 35.4219C6.6037 35.6612 6.80483 35.8589 7.04647 35.9949L24.234 45.6628C24.4678 45.7944 24.7317 45.8635 25 45.8635L25.002 45.8635L25.1854 25L6.46641 14.5736L6.46637 14.5736Z"
                                        fill="#27C200"
                                    ></path>
                                    <path
                                        d="M43.75 34.633V15.3669C43.75 15.0897 43.6762 14.8174 43.5363 14.5781C43.3963 14.3388 43.1952 14.141 42.9535 14.0051L25.766 4.33714C25.5322 4.20558 25.2683 4.13647 25 4.13647C24.7317 4.13647 24.4678 4.20558 24.234 4.33714L7.04647 14.0051C6.80483 14.141 6.6037 14.3388 6.46374 14.5781C6.32377 14.8174 6.25 15.0897 6.25 15.3669V34.633C6.25 34.9103 6.32377 35.1825 6.46374 35.4219C6.6037 35.6612 6.80483 35.859 7.04647 35.9949L24.234 45.6628C24.4678 45.7944 24.7317 45.8635 25 45.8635C25.2683 45.8635 25.5322 45.7944 25.766 45.6628L42.9535 35.9949C43.1952 35.859 43.3963 35.6612 43.5363 35.4219C43.6762 35.1825 43.75 34.9103 43.75 34.633Z"
                                        stroke="#27C200"
                                        stroke-width="2.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                    <path d="M34.5746 29.7873V19.6311L15.625 9.17969" stroke="#27C200" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M43.5345 14.5756L25.1853 25L6.46631 14.5736" stroke="#27C200" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M25.1853 25L25.002 45.8635" stroke="#27C200" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <span class="work-card__count-number">
                                03
                            </span>
                            <h2 class="work-card__title text --body-1">Payment</h2>
                            <p class="work-card__description text--body-3">
                                Payment will be offline after service is done you can pay. Payment will be mention on order. Don't pay extra.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work section end -->

        <!-- feature section start  -->
        <section class="section feature-ads">
            <div class="container">
                <h2 class="text--heading-1 section__title">Newest Services</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cards cards--two cards--highlight">
                            <a href="ad-details.html" class="cards__img-wrapper">
                                <img src="assets/images/iconn/event.jpg" alt="card-img" />
                            </a>
                            <div class="cards__info">
                                <div class="cards__info-top">
                                    <div class="text--body-3 cards__category-title">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.5 13.75L10 18.125L17.5 13.75" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 10L10 14.375L17.5 10" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 6.25L10 10.625L17.5 6.25L10 1.875L2.5 6.25Z" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        Event
                                        <div class="tag-label tag-label--member">
                                            <span class="icon">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="16" height="16" rx="8" fill="#FF4F4F" />
                                                    <path
                                                        d="M8.17231 10.4505L10.1424 11.6987C10.3943 11.8582 10.7069 11.6209 10.6322 11.327L10.063 9.08782C10.047 9.02546 10.0489 8.95983 10.0685 8.8985C10.0881 8.83716 10.1246 8.78261 10.1738 8.74111L11.9405 7.27066C12.1727 7.07745 12.0529 6.69219 11.7546 6.67284L9.44743 6.5231C9.38528 6.51866 9.32568 6.49666 9.27556 6.45966C9.22543 6.42265 9.18685 6.37217 9.16431 6.31409L8.30382 4.14718C8.28043 4.08553 8.23884 4.03246 8.18458 3.99501C8.13031 3.95756 8.06594 3.9375 8 3.9375C7.93407 3.9375 7.86969 3.95756 7.81543 3.99501C7.76116 4.03246 7.71957 4.08553 7.69618 4.14718L6.8357 6.31409C6.81315 6.37217 6.77457 6.42265 6.72445 6.45966C6.67432 6.49666 6.61472 6.51866 6.55258 6.5231L4.24539 6.67284C3.94715 6.69219 3.82733 7.07745 4.05947 7.27066L5.82616 8.74111C5.87539 8.78261 5.91192 8.83716 5.93152 8.8985C5.95113 8.95983 5.95303 9.02546 5.937 9.08782L5.40912 11.1644C5.31944 11.5171 5.69465 11.8019 5.99685 11.6104L7.82769 10.4505C7.87919 10.4177 7.93896 10.4003 8 10.4003C8.06104 10.4003 8.12082 10.4177 8.17231 10.4505Z"
                                                        fill="white"
                                                    />
                                                </svg>
                                            </span>
                                            Member
                                        </div>
                                        <div class="tag-label tag-label--feature">
                                            Featured
                                        </div>
                                    </div>
                                    <a href="ad-details.html" class="text--body-3-600 cards__caption-title">Weeding, Parties, Bussiness...</a>

                                    <div class="cards__user-details">
                                       
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 8.5C9.10457 8.5 10 7.60457 10 6.5C10 5.39543 9.10457 4.5 8 4.5C6.89543 4.5 6 5.39543 6 6.5C6 7.60457 6.89543 8.5 8 8.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M13 6.5C13 11 8 14.5 8 14.5C8 14.5 3 11 3 6.5C3 5.17392 3.52678 3.90215 4.46447 2.96447C5.40215 2.02678 6.67392 1.5 8 1.5C9.32608 1.5 10.5979 2.02678 11.5355 2.96447C12.4732 3.90215 13 5.17392 13 6.5V6.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                Guwahati
                                            </h5>
                                        </div>
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 14C11.3137 14 14 11.3137 14 8C14 4.68629 11.3137 2 8 2C4.68629 2 2 4.68629 2 8C2 11.3137 4.68629 14 8 14Z" stroke="#939AAD" stroke-miterlimit="10"></path>
                                                        <path d="M8 4.5V8H11.5" stroke="#939AAD" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                                schedule
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="cards__info-bottom">
                                    <span class="cards__price-title text--body-2">₹5200.00</span>
                                    <button class="btn-icon">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 20.25C12 20.25 2.625 15 2.625 8.62501C2.62519 7.49826 3.01561 6.40635 3.72989 5.53493C4.44416 4.66351 5.4382 4.06636 6.54299 3.84501C7.64778 3.62367 8.79514 3.79179 9.78999 4.32079C10.7848 4.84979 11.5658 5.70702 12 6.74673L12 6.74673C12.4342 5.70702 13.2152 4.84979 14.21 4.32079C15.2049 3.79179 16.3522 3.62367 17.457 3.84501C18.5618 4.06636 19.5558 4.66351 20.2701 5.53493C20.9844 6.40635 21.3748 7.49826 21.375 8.62501C21.375 15 12 20.25 12 20.25Z"
                                                    stroke="#00AAFF"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cards cards--two cards--highlight">
                            <a href="ad-details.html" class="cards__img-wrapper">
                                <img src="assets/images/view/img-02.png" alt="card-img" />
                            </a>
                            <div class="cards__info">
                                <div class="cards__info-top">
                                    <h6 class="text--body-3 cards__category-title">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.5 13.75L10 18.125L17.5 13.75" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 10L10 14.375L17.5 10" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 6.25L10 10.625L17.5 6.25L10 1.875L2.5 6.25Z" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        Vehicles
                                         <div class="tag-label tag-label--member">
                                          <span class="icon">
                                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <rect width="16" height="16" rx="8" fill="#FF4F4F"/>
                                                  <path d="M8.17231 10.4505L10.1424 11.6987C10.3943 11.8582 10.7069 11.6209 10.6322 11.327L10.063 9.08782C10.047 9.02546 10.0489 8.95983 10.0685 8.8985C10.0881 8.83716 10.1246 8.78261 10.1738 8.74111L11.9405 7.27066C12.1727 7.07745 12.0529 6.69219 11.7546 6.67284L9.44743 6.5231C9.38528 6.51866 9.32568 6.49666 9.27556 6.45966C9.22543 6.42265 9.18685 6.37217 9.16431 6.31409L8.30382 4.14718C8.28043 4.08553 8.23884 4.03246 8.18458 3.99501C8.13031 3.95756 8.06594 3.9375 8 3.9375C7.93407 3.9375 7.86969 3.95756 7.81543 3.99501C7.76116 4.03246 7.71957 4.08553 7.69618 4.14718L6.8357 6.31409C6.81315 6.37217 6.77457 6.42265 6.72445 6.45966C6.67432 6.49666 6.61472 6.51866 6.55258 6.5231L4.24539 6.67284C3.94715 6.69219 3.82733 7.07745 4.05947 7.27066L5.82616 8.74111C5.87539 8.78261 5.91192 8.83716 5.93152 8.8985C5.95113 8.95983 5.95303 9.02546 5.937 9.08782L5.40912 11.1644C5.31944 11.5171 5.69465 11.8019 5.99685 11.6104L7.82769 10.4505C7.87919 10.4177 7.93896 10.4003 8 10.4003C8.06104 10.4003 8.12082 10.4177 8.17231 10.4505Z" fill="white"/>
                                                  </svg>
                                                  
                                          </span>
                                          Member
                                      </div>
                                        < <div class="tag-label tag-label--feature">
                                          Featured
                                      </div>
                                    </h6>
                                    <a href="#" class="text--body-3-600 cards__caption-title">Car Repairing...</a>

                                    <div class="cards__user-details">
                                        
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 8.5C9.10457 8.5 10 7.60457 10 6.5C10 5.39543 9.10457 4.5 8 4.5C6.89543 4.5 6 5.39543 6 6.5C6 7.60457 6.89543 8.5 8 8.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M13 6.5C13 11 8 14.5 8 14.5C8 14.5 3 11 3 6.5C3 5.17392 3.52678 3.90215 4.46447 2.96447C5.40215 2.02678 6.67392 1.5 8 1.5C9.32608 1.5 10.5979 2.02678 11.5355 2.96447C12.4732 3.90215 13 5.17392 13 6.5V6.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                Delhi
                                            </h5>
                                        </div>
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 14C11.3137 14 14 11.3137 14 8C14 4.68629 11.3137 2 8 2C4.68629 2 2 4.68629 2 8C2 11.3137 4.68629 14 8 14Z" stroke="#939AAD" stroke-miterlimit="10"></path>
                                                        <path d="M8 4.5V8H11.5" stroke="#939AAD" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                                schedule
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="cards__info-bottom">
                                    <span class="cards__price-title text--body-2">₹5200.00</span>
                                    <button class="btn-icon">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 20.25C12 20.25 2.625 15 2.625 8.62501C2.62519 7.49826 3.01561 6.40635 3.72989 5.53493C4.44416 4.66351 5.4382 4.06636 6.54299 3.84501C7.64778 3.62367 8.79514 3.79179 9.78999 4.32079C10.7848 4.84979 11.5658 5.70702 12 6.74673L12 6.74673C12.4342 5.70702 13.2152 4.84979 14.21 4.32079C15.2049 3.79179 16.3522 3.62367 17.457 3.84501C18.5618 4.06636 19.5558 4.66351 20.2701 5.53493C20.9844 6.40635 21.3748 7.49826 21.375 8.62501C21.375 15 12 20.25 12 20.25Z"
                                                    stroke="#00AAFF"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cards cards--two cards--highlight">
                            <a href="ad-details.html" class="cards__img-wrapper">
                                <img src="assets/images/view/img-03.png" alt="card-img" />
                            </a>
                            <div class="cards__info">
                                <div class="cards__info-top">
                                    <h6 class="text--body-3 cards__category-title">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.5 13.75L10 18.125L17.5 13.75" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 10L10 14.375L17.5 10" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 6.25L10 10.625L17.5 6.25L10 1.875L2.5 6.25Z" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        Electronic
                                    </h6>
                                    <a href="ad-details.html" class="text--body-3-600 cards__caption-title">Laptop hardware repairing...</a>

                                    <div class="cards__user-details">
                                    
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 8.5C9.10457 8.5 10 7.60457 10 6.5C10 5.39543 9.10457 4.5 8 4.5C6.89543 4.5 6 5.39543 6 6.5C6 7.60457 6.89543 8.5 8 8.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M13 6.5C13 11 8 14.5 8 14.5C8 14.5 3 11 3 6.5C3 5.17392 3.52678 3.90215 4.46447 2.96447C5.40215 2.02678 6.67392 1.5 8 1.5C9.32608 1.5 10.5979 2.02678 11.5355 2.96447C12.4732 3.90215 13 5.17392 13 6.5V6.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                Mumbai
                                            </h5>
                                        </div>
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 14C11.3137 14 14 11.3137 14 8C14 4.68629 11.3137 2 8 2C4.68629 2 2 4.68629 2 8C2 11.3137 4.68629 14 8 14Z" stroke="#939AAD" stroke-miterlimit="10"></path>
                                                        <path d="M8 4.5V8H11.5" stroke="#939AAD" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                                schedule
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="cards__info-bottom">
                                    <span class="cards__price-title text--body-2">₹5200.00</span>
                                    <button class="btn-icon">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 20.25C12 20.25 2.625 15 2.625 8.62501C2.62519 7.49826 3.01561 6.40635 3.72989 5.53493C4.44416 4.66351 5.4382 4.06636 6.54299 3.84501C7.64778 3.62367 8.79514 3.79179 9.78999 4.32079C10.7848 4.84979 11.5658 5.70702 12 6.74673L12 6.74673C12.4342 5.70702 13.2152 4.84979 14.21 4.32079C15.2049 3.79179 16.3522 3.62367 17.457 3.84501C18.5618 4.06636 19.5558 4.66351 20.2701 5.53493C20.9844 6.40635 21.3748 7.49826 21.375 8.62501C21.375 15 12 20.25 12 20.25Z"
                                                    stroke="#00AAFF"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cards cards--two">
                            <a href="ad-details.html" class="cards__img-wrapper">
                                <img src="assets/images/iconn/cl.png" alt="card-img" />
                                <span class="cards__tag text--body-5">
                                    New
                                </span>
                            </a>
                            <div class="cards__info">
                                <div class="cards__info-top">
                                    <h6 class="text--body-3 cards__category-title">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.5 13.75L10 18.125L17.5 13.75" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 10L10 14.375L17.5 10" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 6.25L10 10.625L17.5 6.25L10 1.875L2.5 6.25Z" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        Home Appliances
                                    </h6>
                                    <a href="#" class="text--body-3-600 cards__caption-title">Video call consultant...</a>

                                    <div class="cards__user-details">
                                        
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 8.5C9.10457 8.5 10 7.60457 10 6.5C10 5.39543 9.10457 4.5 8 4.5C6.89543 4.5 6 5.39543 6 6.5C6 7.60457 6.89543 8.5 8 8.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M13 6.5C13 11 8 14.5 8 14.5C8 14.5 3 11 3 6.5C3 5.17392 3.52678 3.90215 4.46447 2.96447C5.40215 2.02678 6.67392 1.5 8 1.5C9.32608 1.5 10.5979 2.02678 11.5355 2.96447C12.4732 3.90215 13 5.17392 13 6.5V6.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                Mumbai
                                            </h5>
                                        </div>
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 14C11.3137 14 14 11.3137 14 8C14 4.68629 11.3137 2 8 2C4.68629 2 2 4.68629 2 8C2 11.3137 4.68629 14 8 14Z" stroke="#939AAD" stroke-miterlimit="10"></path>
                                                        <path d="M8 4.5V8H11.5" stroke="#939AAD" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                                schedule
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="cards__info-bottom">
                                    <span class="cards__price-title text--body-2">₹5200.00</span>
                                    <button class="btn-icon">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 20.25C12 20.25 2.625 15 2.625 8.62501C2.62519 7.49826 3.01561 6.40635 3.72989 5.53493C4.44416 4.66351 5.4382 4.06636 6.54299 3.84501C7.64778 3.62367 8.79514 3.79179 9.78999 4.32079C10.7848 4.84979 11.5658 5.70702 12 6.74673L12 6.74673C12.4342 5.70702 13.2152 4.84979 14.21 4.32079C15.2049 3.79179 16.3522 3.62367 17.457 3.84501C18.5618 4.06636 19.5558 4.66351 20.2701 5.53493C20.9844 6.40635 21.3748 7.49826 21.375 8.62501C21.375 15 12 20.25 12 20.25Z"
                                                    stroke="#00AAFF"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cards cards--two">
                            <a href="ad-details.html" class="cards__img-wrapper">
                                <img src="assets/images/view/img-05.png" alt="card-img" />
                            </a>
                            <div class="cards__info">
                                <div class="cards__info-top">
                                    <h6 class="text--body-3 cards__category-title">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.5 13.75L10 18.125L17.5 13.75" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 10L10 14.375L17.5 10" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 6.25L10 10.625L17.5 6.25L10 1.875L2.5 6.25Z" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        Carpenter
                                    </h6>
                                    <a href="#" class="text--body-3-600 cards__caption-title">Hairing Professional...</a>

                                    <div class="cards__user-details">
                                    
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 8.5C9.10457 8.5 10 7.60457 10 6.5C10 5.39543 9.10457 4.5 8 4.5C6.89543 4.5 6 5.39543 6 6.5C6 7.60457 6.89543 8.5 8 8.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M13 6.5C13 11 8 14.5 8 14.5C8 14.5 3 11 3 6.5C3 5.17392 3.52678 3.90215 4.46447 2.96447C5.40215 2.02678 6.67392 1.5 8 1.5C9.32608 1.5 10.5979 2.02678 11.5355 2.96447C12.4732 3.90215 13 5.17392 13 6.5V6.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                Bengaluru
                                            </h5>
                                        </div>
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 14C11.3137 14 14 11.3137 14 8C14 4.68629 11.3137 2 8 2C4.68629 2 2 4.68629 2 8C2 11.3137 4.68629 14 8 14Z" stroke="#939AAD" stroke-miterlimit="10"></path>
                                                        <path d="M8 4.5V8H11.5" stroke="#939AAD" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                                schedule
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="cards__info-bottom">
                                    <span class="cards__price-title text--body-2">₹5200.00</span>
                                    <button class="btn-icon">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 20.25C12 20.25 2.625 15 2.625 8.62501C2.62519 7.49826 3.01561 6.40635 3.72989 5.53493C4.44416 4.66351 5.4382 4.06636 6.54299 3.84501C7.64778 3.62367 8.79514 3.79179 9.78999 4.32079C10.7848 4.84979 11.5658 5.70702 12 6.74673L12 6.74673C12.4342 5.70702 13.2152 4.84979 14.21 4.32079C15.2049 3.79179 16.3522 3.62367 17.457 3.84501C18.5618 4.06636 19.5558 4.66351 20.2701 5.53493C20.9844 6.40635 21.3748 7.49826 21.375 8.62501C21.375 15 12 20.25 12 20.25Z"
                                                    stroke="#00AAFF"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cards cards--two">
                            <a href="ad-details.html" class="cards__img-wrapper">
                                <img src="assets/images/view/img-06.png" alt="card-img" />
                            </a>
                            <div class="cards__info">
                                <div class="cards__info-top">
                                    <h6 class="text--body-3 cards__category-title">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.5 13.75L10 18.125L17.5 13.75" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 10L10 14.375L17.5 10" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 6.25L10 10.625L17.5 6.25L10 1.875L2.5 6.25Z" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        Electrician
                                    </h6>
                                    <a href="#" class="text--body-3-600 cards__caption-title">Hairing Professional...</a>

                                    <div class="cards__user-details">
                                        
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 8.5C9.10457 8.5 10 7.60457 10 6.5C10 5.39543 9.10457 4.5 8 4.5C6.89543 4.5 6 5.39543 6 6.5C6 7.60457 6.89543 8.5 8 8.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M13 6.5C13 11 8 14.5 8 14.5C8 14.5 3 11 3 6.5C3 5.17392 3.52678 3.90215 4.46447 2.96447C5.40215 2.02678 6.67392 1.5 8 1.5C9.32608 1.5 10.5979 2.02678 11.5355 2.96447C12.4732 3.90215 13 5.17392 13 6.5V6.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                Kolkata
                                            </h5>
                                        </div>
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 14C11.3137 14 14 11.3137 14 8C14 4.68629 11.3137 2 8 2C4.68629 2 2 4.68629 2 8C2 11.3137 4.68629 14 8 14Z" stroke="#939AAD" stroke-miterlimit="10"></path>
                                                        <path d="M8 4.5V8H11.5" stroke="#939AAD" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                                schedule
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="cards__info-bottom">
                                    <span class="cards__price-title text--body-2">₹5200.00</span>
                                    <button class="btn-icon">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 20.25C12 20.25 2.625 15 2.625 8.62501C2.62519 7.49826 3.01561 6.40635 3.72989 5.53493C4.44416 4.66351 5.4382 4.06636 6.54299 3.84501C7.64778 3.62367 8.79514 3.79179 9.78999 4.32079C10.7848 4.84979 11.5658 5.70702 12 6.74673L12 6.74673C12.4342 5.70702 13.2152 4.84979 14.21 4.32079C15.2049 3.79179 16.3522 3.62367 17.457 3.84501C18.5618 4.06636 19.5558 4.66351 20.2701 5.53493C20.9844 6.40635 21.3748 7.49826 21.375 8.62501C21.375 15 12 20.25 12 20.25Z"
                                                    stroke="#00AAFF"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature section end -->

        <!-- popular-loc section start  -->
        <section class="section popular-location">
            <div class="container">
                <h2 class="text--heading-1 section__title">Popular Location</h2>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="location-card">
                            <a href="ad-details.html" class="location-card__img-wrapper">
                                <img src="assets/images/iconn/delhi.jpg" alt="location" />
                            </a>
                            <div class="location-card__info">
                                <h2 class="location-card__loc-title text--body-2-600">Delhi, India</h2>
                                <div class="location-card__view">
                                    <span class="first view-number">4,391</span>
                                    <a href="ad-details.html" class="second view-btn">
                                        View Services
                                        <span class="icon">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="location-card">
                            <a href="ad-details.html" class="location-card__img-wrapper">
                                <img src="assets/images/iconn/kolkata.jpg" alt="location" />
                            </a>
                            <div class="location-card__info">
                                <h2 class="location-card__loc-title text--body-2-600"> Kolkata, India</h2>
                                <div class="location-card__view">
                                    <span class="first view-number">4,391</span>
                                    <a href="ad-details.html" class="second view-btn">
                                        View services
                                        <span class="icon">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="location-card">
                            <a href="ad-details.html" class="location-card__img-wrapper">
                                <img src="assets/images/location/img-03.png" alt="location" />
                            </a>
                            <div class="location-card__info">
                                <h2 class="location-card__loc-title text--body-2-600">Mumbai, India</h2>
                                <div class="location-card__view">
                                    <span class="first view-number">4,391</span>
                                    <a href="ad-details.html" class="second view-btn">
                                        View Services
                                        <span class="icon">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="location-card">
                            <a href="ad-details.html" class="location-card__img-wrapper">
                                <img src="assets/images/iconn/guwahati.jpg" alt="location" />
                            </a>
                            <div class="location-card__info">
                                <h2 class="location-card__loc-title text--body-2-600">Guwahati, India</h2>
                                <div class="location-card__view">
                                    <span class="first view-number">4,391</span>
                                    <a href="ad-details.html" class="second view-btn">
                                        View Services
                                        <span class="icon">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="location-card">
                            <a href="ad-details.html" class="location-card__img-wrapper">
                                <img src="assets/images/iconn/beng.jpg" alt="location" />
                            </a>
                            <div class="location-card__info">
                                <h2 class="location-card__loc-title text--body-2-600">Bengaluru, India</h2>
                                <div class="location-card__view">
                                    <span class="first view-number">4,391</span>
                                    <a href="ad-details.html" class="second view-btn">
                                        View Services
                                        <span class="icon">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="location-card">
                            <a href="ad-details.html" class="location-card__img-wrapper">
                                <img src="assets/images/iconn/shillong.jpg" alt="location" />
                            </a>
                            <div class="location-card__info">
                                <h2 class="location-card__loc-title text--body-2-600">Shillong, India</h2>
                                <div class="location-card__view">
                                    <span class="first view-number">4,391</span>
                                    <a href="ad-details.html" class="second view-btn">
                                        View Services
                                        <span class="icon">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="location-card">
                            <a href="ad-details.html" class="location-card__img-wrapper">
                                <img src="assets/images/iconn/channai.jpg" alt="location" />
                            </a>
                            <div class="location-card__info">
                                <h2 class="location-card__loc-title text--body-2-600">Chennai, India</h2>
                                <div class="location-card__view">
                                    <span class="first view-number">4,391</span>
                                    <a href="ad-details.html" class="second view-btn">
                                        View Services
                                        <span class="icon">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="location-card">
                            <a href="ad-details.html" class="location-card__img-wrapper">
                                <img src="assets/images/iconn/goa.jpg" alt="location" />
                            </a>
                            <div class="location-card__info">
                                <h2 class="location-card__loc-title text--body-2-600">Goa, India</h2>
                                <div class="location-card__view">
                                    <span class="first view-number">4,391</span>
                                    <a href="ad-details.html" class="second view-btn">
                                        View Services
                                        <span class="icon">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- popular-loc section end -->


        <!-- subscribe section start  -->
        <section class="subscribe bgcolor--g">
            <div class="container">
                <div class="subscribe__content">
                    <div class="subscribe__left">
                        <h2 class="subscribe__title text--heading-2">Join as service provider</h2>
                        <p class="text--body-3 subscribe__description">
                            Join now with us today and earn more.
                        </p>
                    </div>
                    <div class="subscribe__right">
                        <form action="#">
                            <div class="subscribe__input-group">
                                <span class="icon">
                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 1.25L10 9.5L1 1.25" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M1 1.25H19V14C19 14.1989 18.921 14.3897 18.7803 14.5303C18.6397 14.671 18.4489 14.75 18.25 14.75H1.75C1.55109 14.75 1.36032 14.671 1.21967 14.5303C1.07902 14.3897 1 14.1989 1 14V1.25Z"
                                            stroke="#00AAFF"
                                            stroke-width="1.6"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path d="M8.36357 8L1.2312 14.538" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M18.7687 14.5381L11.6362 8" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <input type="text" placeholder="Email Address" />
                                <button class="btn">Request</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe section end  -->

        <!-- Back To Top Btn -->
        <button class="scrollTop">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 20.25V3.75" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M5.25 10.5L12 3.75L18.75 10.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>

        <!-- Script Goes here  -->
        <script src="assets/plugins/jquery.min.js"></script>
        <script src="assets/plugins/bootstrap.bundle.min.js"></script>
        <script src="assets/plugins/bvselect.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js"></script>
        <script src="assets/js/app.js"></script>
            <!-- Purchase Button -->
    </body>
</html>

<script src="js/jquery.js"></script>
<script>
    $(function() {
        $("#search").click(function() {
            var city = $("#city").val();
            var profession = $("#profession").val();

            if (city == "none" || profession == "none") {
                alert("Don't leave fields empty!");
                tbody = "<tr><td colspan='5'>please </td></tr>";
            } else {
                $.post('scripts/searchproviders.php', {
                    city: city,
                    profession: profession
                }, function(res) {
                    var providers = JSON.parse(res);
                    var tbody = "";

                    if (providers.failed == true) {
                        tbody = "<tr><td colspan='5'>No Service Providers found...</td></tr>";
                    } else {
                        providers.forEach(function(provider, i) {
                            tbody += "<tr>" +
                                "<td><img style='height:150px' src='images/" + provider
                                .photo +
                                "'/></td>" +
                                "<td>" + provider.name + "</td>" +
                                "<td>" + provider.adder1 + ",<br>" + provider.adder2 +
                                ",<br>" +
                                provider.city + "</td>" +
                                "<td>" + provider.profession + "</td>" +
                                "<td><a href='booking.php?provider=" + provider.id +
                                "' class='btn btn-primary btn-block'>Book</a></td>";
                        });
                    }
                    $("#providers tbody").html(tbody);
                });
            }
        });
    });
</script>

<?php include_once "./include/footer.php";
