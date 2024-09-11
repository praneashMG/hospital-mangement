<?php
include('includes/db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTURE PHYSIO CLINIC</title>
    <link rel="shortcut icon" href="imgs/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c3ff7ad16f.js" crossorigin="anonymous"></script>
    <style>
    .equipment-img {
        height: 250px; 
        object-fit: cover;
    }
</style>
</head>
<body>
    <section class="colored-section" id="title">
          <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#009879;">
          <a class="navbar-brand" href="">Posture physio</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="admin_signin.html">Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pat_doc_signin.html">Sign in</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pat_signup.html">Sign up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.html">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.html">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="report.php">Report</a>
              </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01"onclick="depart_dropdown();"data-bs-toggle="dropdown" aria-expanded="true">Departments</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01" id="depart" data-bs-popper="none">
            <?php
                 $query = "SELECT depart_name FROM `department`";

                 $query_run= mysqli_query($connect,$query);
                       
                 while($row=mysqli_fetch_array($query_run))
                 {
                  echo'<li><a class="dropdown-item" href="department.php?name='.$row['depart_name'].'"> Dept-'.$row['depart_name'].'</a></li>';
                 }
                ?>
            </ul>
          </li>           
             
              <li class="nav-item">
                <a class="nav-link" href="index1.php">FEEDBACK & REVIEW</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="hero-slider">
    <div class="slider-item slide1" style="background-image:url(imgs/slider/INDE.jpeg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content style text-center">
                        <h2 class="text-white text-bold mb-2" data-aos="fade-up" data-aos-offset="300">Expert Physiotherapy Care</h2>
                        <p class="tag-text mb-4" data-aos="fade-up" data-aos-offset="300">At our physiotherapy clinic, we offer specialized care to help you regain mobility, reduce pain, and improve your overall well-being. Our experienced therapists provide personalized treatment plans designed to meet your unique needs and goals. </p>

                        <a href="pat_doc_signin.html" class="btn btn-main btn-white" data-aos="fade-up" data-duration-in="1.2">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container-fluid">
        <div class="row justify-content-center m-md-5">
            <div class="col-xl-3 p-5 emegency">
                <i class="fas fa-phone-alt"></i><br>
                <h4>EMEGENCY CASES</h4><br>
                <a href="tel:1-800-700-62000">+91 9878587458</a><br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
            </div>
            <div class="col-xl-3 p-5 hour ">
                <i class="fas fa-stethoscope"></i><br>
                <h4>24 HOUR SERVICE</h4><br>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore dignissimos officia dicta
                    suscipit
                    vel eum </p>
                <a href="html/services.html" class="btn text-white rounded border-white">Read more</a>
            </div>
            <div class="col-xl-3 p-5 work">
                <i class="far fa-clock"></i><br>
                <h4>WORKING HOURS</h4><br>
                <table class="table text-white">
                    <tbody>
                        <tr>
                            <td>MON - FRI -</td>
                            <td class="text-end">8:00 - 17:00</td>
                        </tr>
                        <tr>
                            <td>MON - FRI -</td>
                            <td class="text-end">8:00 - 17:00</td>
                        </tr>
                        <tr>
                            <td>MON - FRI -</td>
                            <td class="text-end">8:00 - 17:00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center mt-5 p-5 features">
    <div class="col-11 text-center">
    <h2><b>Best Features</b> of Our Hospital</h2>
<p>Offering specialized care tailored to individual needs and a dedicated team committed to excellence.</p>
    </div>
    <div class="col-11">
        <div class="row justify-content-center">
            <div class="col-xl-5 p-md-3">
                <img src="imgs/resource/1.png" class="img-fluid" alt="">
                <h5 class="my-3 text">OCCUPATIONAL PHYSICAL THERAPY</h5>
                <p class="ptext">Our occupational physical therapy focuses on improving daily living skills and enhancing independence for those with physical challenges. We offer personalized plans to help you regain functionality and achieve your daily goals. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, dolore?</p>
            </div>
            <div class="col-xl-5 p-md-3">
                <img src="imgs/resource/2.png" class="img-fluid" alt="">
                <h5 class="my-3 text">GERIATRIC PHYSICAL THERAPY</h5>
                <p class="ptext">Specializing in care for older adults, our geriatric physical therapy aims to improve mobility, reduce pain, and enhance overall quality of life. Our tailored exercises and treatments are designed to meet the unique needs of seniors. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, assumenda?</p>
            </div>
            <div class="col-xl-5 p-md-3">
                <img src="imgs/resource/3.png" class="img-fluid" alt="">
                <h5 class="my-3 text">PEDIATRIC PHYSICAL THERAPY</h5>
                <p class="ptext">Our pediatric physical therapy offers specialized care for infants, children, and adolescents. We focus on developmental milestones, motor skills, and injury recovery to ensure your child reaches their full potential. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, dolorum?</p>
            </div>
            <div class="col-xl-5 p-3">
                <img src="imgs/resource/4.png" class="img-fluid" alt="">
                <h5 class="my-3 text">REHABILITATIVE PHYSICAL THERAPY</h5>
                <p class="ptext">Our rehabilitative physical therapy helps individuals recover from injuries, surgeries, or illnesses. With a multidisciplinary approach, we offer comprehensive care to restore strength, mobility, and function. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, ullam?</p>
            </div>
        </div>
    </div>
</div>
        <div class="row my-5  justify-content-center">
            <div class="col-md-2 d-flex justify-content-center">
                <button class="btn btn-outline-primary m-3" onclick="btnclick1()">OCCUPATIONAL PHYSICAL THERAPY</button>
            </div>
            <div class="col-md-2  d-flex justify-content-center">
                <button class="btn btn-outline-primary m-3" onclick="btnclick2()">GERIATRIC PHYSICAL THERAPY</button>
            </div>
            <div class="col-md-2  d-flex justify-content-center">
                <button class="btn btn-outline-primary m-3" onclick="btnclick3()">PEDIATRIC PHYSICAL THERAPY</button>
            </div>
            <div class="col-md-2  d-flex justify-content-center">
                <button class="btn btn-outline-primary m-3" onclick="btnclick5()">REHABILITATIVE PHYSICAL THERAPY</button>
            </div>
        </div>
        <div class="row my-3 justify-content-center">
            <div class="col-xl-5">
                <img src="imgs/MANUAL.jpg" class="img-fluid rounded shadow" alt="" id="img">
            </div>
            <div class="col-xl-5 mt-4">
    <h3 id="title">Manual Therapy</h3>
    <p class="my-5">Manual therapy involves hands-on techniques to mobilize or manipulate joints and soft tissues. It aims to reduce pain, improve flexibility, and enhance overall function.<br>
        <br>
        Manual therapy techniques include:<br>
        • Joint mobilization to restore joint movement<br>
        • Soft tissue mobilization to release muscle tension<br>
        • Myofascial release to alleviate muscle tightness<br>
        • Trigger point therapy to address localized muscle knots<br>
        <br>
        These techniques are often used in conjunction with therapeutic exercises to optimize results.<br>
    </p>
    <a href="" class="btn btn-primary">Read More</a>
</div>
        <div class="row justify-content-center mt-5 providedservices">
    <div class="col-12 text-center mt-5">
        <h1><b>Our</b> Services</h1>
    </div>
    <div class="col-12 text-center mt-3">
        <p class="pb-4">Experience personalized physiotherapy treatments tailored to your needs. Our clinic offers a range of services designed to help you recover, improve mobility, and enhance overall well-being.<br>
            <br>
            Whether you're recovering from an injury, managing a chronic condition, or seeking preventive care, our team of experienced physiotherapists is here to support you every step of the way.</p>
    </div>
</div>
<div class="row justify-content-center providedservices pb-5">
    <div class="col-md-3 m-2 justify-content-center shadow-sm border rounded text-center">
        <img src="imgs/cold.jpeg" class="img-fluid" alt="Cold Therapy">
        <h6 class="mt-4 providedtext">Effective &amp; Soothing</h6>
        <h5>Cold Therapy</h5>
        <p class="mb-4 providedtext">Experience the benefits of cold therapy in reducing inflammation, relieving pain, and promoting healing.</p>
    </div>
    <div class="col-md-3 m-2 justify-content-center shadow-sm border rounded text-center">
        <img src="imgs/elec.jpeg" class="img-fluid" alt="Electrotherapy">
        <h6 class="mt-4 providedtext">Advanced Healing</h6>
        <h5>Electrotherapy</h5>
        <p class="mb-4 providedtext">Utilizing electrical stimulation to manage pain, improve muscle strength, and enhance recovery.</p>
    </div>

    <div class="col-md-3 m-2 justify-content-center shadow-sm border rounded text-center">
        <img src="imgs/joint.jpeg" class="img-fluid" alt="Joint Mobilization">
        <h6 class="mt-4 providedtext">Restore Mobility</h6>
        <h5>Joint Mobilization</h5>
        <p class="mb-4 providedtext">Tailored techniques to improve joint function, reduce stiffness, and enhance overall mobility.</p>
    </div>
</div>
<div class="row justify-content-center text-center my-5">
    <div class="col-12">
        <h1><b>Our Advanced</b> Equipment</h1>
       
    </div>
    <div class="col-md-3 m-2 rounded border shadow-sm">
    <img src="imgs/elec1.jpg" class="img-fluid equipment-img" alt="Electrotherapy Machine">
    <h4 class="my-4">Electrotherapy Machine</h4>
    <p>State-of-the-art equipment for pain management and muscle stimulation.</p>
    <a href="#equipment-details" class="btn btn-outline-primary mt-2 mb-5">VIEW DETAILS</a>
</div>
<div class="col-md-3 m-2 rounded border shadow-sm">
    <img src="imgs/cold1.jpg" class="img-fluid equipment-img" alt="Cold Therapy Unit">
    <h4 class="my-4">Cold Therapy Unit</h4>
    <p>Specialized unit for reducing inflammation and promoting healing.</p>
    <a href="#equipment-details" class="btn btn-outline-primary mt-2 mb-5">VIEW DETAILS</a>
</div>
<div class="col-md-3 m-2 rounded border shadow-sm">
    <img src="imgs/P3.jpg" class="img-fluid equipment-img" alt="Joint Mobilization Table">
    <h4 class="my-4">Joint Mobilization</h4>
    <p>Advanced table designed for improving joint function and mobility.</p>
    <a href="#equipment-details" class="btn btn-outline-primary mt-2 mb-5">VIEW DETAILS</a>
</div>
</div>
        <!--!  What Our customer say  *-->
<!--!
        <div class="row">
            <div class="col-12 text-center  mb-5">
                <img src="imgs/Screenshot (13).png" class="img-fluid" alt="">
            </div>
        </div>
*-->
        <!--!  Faqs and contact form  *-->

       <!--! <div class="row justify-content-center">
            <div class="col-xl-5">
                <h1>FAQ</h1>
                <div class="accordion my-5" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Why should I Choose Medical Health
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia
                                aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                anim keffiyeh helvetica, craft
                                beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                vice lomo. Leggings occaecat
                                craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                                of them accusamus labore
                                sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What are the centre's Visiting Hours?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia
                                aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                anim keffiyeh helvetica, craft
                                beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                vice lomo. Leggings occaecat
                                craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                                of them accusamus labore
                                sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How many Visitiors are allowed?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia
                                aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                anim keffiyeh helvetica, craft
                                beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                vice lomo. Leggings occaecat
                                craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                                of them accusamus labore
                                sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
*-->
            <!--! Appointment Form  * -->

            <!--!  <div class="col-xl-5">
                <h1 class="text-center pb-xl-3" id="appointment"><b>Request</b> Appointment</h1>
                <form action="https://formcarry.com/s/dae_lOKn8q" target="_blank" method="POST">
                    <div class="row g-3 justify-content-center mt-md-3 mt-3 mb-5">
                        <div class="col-md-5 form-floating">
                            <input type="text" name="name" id="name" class="form-control" placeholder="NAME"
                                aria-label="NAME" required>
                            <label for="name">NAME</label>
                        </div>
                        <div class="col-md-5 form-floating">
                            <input type="email" name="email" id="email" class="form-control" placeholder="EMAIL"
                                aria-label="EMAIL">
                            <label for="email">EMAIL</label>
                        </div>
                        <div class="col-md-5 form-floating">
                            <input type="text" name="Mobile No" id="no" class="form-control" placeholder="MOBILE NO"
                                aria-label="MOBILE NO">
                            <label for="no">MOBILE NO</label>
                        </div>
                        <div class="col-md-5 form-floating">
                            <input type="date" name="date" id="date" class="form-control" placeholder="DATE"
                                aria-label="DATE">
                            <label for="date">DATE</label>
                        </div>
                        <div class="col-md-5 form">
                            <select class="form-select py-3" aria-label="Default select example">
                                <option selected>Department</option>
                                <option value="1" name="Diagnostic">Diagnostic</option>
                                <option value="2" name="Psychological">Psychological</option>
                            </select>
                        </div>
                        <div class="col-md-5 form">
                            <select class="form-select py-3" aria-label="Default select example">
                                <option selected>Doctor</option>
                                <option value="1">Diagnostic</option>
                                <option value="2">Psychological</option>
                            </select>
                        </div>
                        <div class="col-md-10 form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>
                        <div class="col-md-10 form-floating">
                            <button type="submit" class="btn btn-danger px-md-5 py-md-2"
                                style="width: 100%; height: 100%;">Book Appointment</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>* -->
        <!--! Footer *-->
        <!--!
        <div class="row justify-content-center footer p-md-5">
            <div class="col-xl-3 mt-3 mt-md-0">
                <a href=""><img src="imgs/logo-2.png" class="img-fluid" alt=""></a>
                <p class="py-md-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, temporibus?</p>
                <i class="fas fa-map-marker-alt pb-3">&nbsp;&nbsp; Modamba, NY 80021, United States</i>
                <i class="far fa-envelope pb-3">&nbsp;&nbsp;support@medic.com</i><br>
                <i class="fas fa-phone-alt">&nbsp;&nbsp;(88017) +123 4567</i><br>

                <div class="pt-3">
                    <a href="" class="btn btn-outline-danger mt-2 social-footer me-2"><i
                            class="fab fa-facebook"></i></a>
                    <a href="" class="btn btn-outline-danger mt-2 social-footer me-2"><i
                            class="fab fa-instagram"></i></a>
                    <a href="" class="btn btn-outline-danger mt-2 social-footer me-2"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

            <div class="col-xl-3 mt-4 mt-xl-1">
                <h2 class="text-white">Services</h2>
                <ul class="my-3">
                    <a href="html/services.html" class="footer-service">
                        <li class="my-md-3">Orthopadic Liabilities</li>
                    </a>
                    <a href="html/services.html" class="footer-service">
                        <li class="my-md-3">Dental Clinic</li>
                    </a>
                    <a href="html/services.html" class="footer-service">
                        <li class="my-md-3">Dormamu Clinic</li>
                    </a>
                    <a href="html/services.html" class="footer-service">
                        <li class="my-md-3">Psycological Clinic</li>
                    </a>
                    <a href="html/services.html" class="footer-service">
                        <li class="my-md-3">Gynaecological Clinic</li>
                    </a>
                </ul>
            </div>

            <div class="col-xl-3 mt-3 mt-xl-1">
                <h2 class="text-white">Recent Posts</h2>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <img src="imgs/blog/post-thumb-small.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 text-start">
                        <h5 class="text-white">A lesson adip isicing</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <img src="imgs/blog/post-thumb-small.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 text-start">
                        <h5 class="text-white">How to make an event</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
*-->
        <!--!   copyright section   *-->

        <div class="row copyright justify-content-center">
            <div class="col-10 p-3 text-center mt-3">
                <p>© Copyright 2021. Designed & Developed By PRANEASH</p>
            </div>
        </div>

        <!--!  container fluid end  *-->
    </div>
    


    <!--! bootstrap js *-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!--! custom js *-->
    <script src="main.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>
