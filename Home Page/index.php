<?php
session_start();
if (!isset($_SESSION['email'])) {
    $hideCreatePost = true;
    $hideRightItem = false;

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillBarter</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="shortcut icon" href="./Assets/Fav_icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>
<script>

</script>

<body>

    <div class="container">
        <div class="buttom-top">
            <button class="up-btn" onclick="scrollToTop()">
                <svg xmlns="http://www.w3.org/2000/svg" height="44px" viewBox="0 -960 960 960" width="44px" fill="#fff">
                    <path d="M480-528 296-344l-56-56 240-240 240 240-56 56-184-184Z" />
                </svg>
            </button>
        </div>
        <section class="hero-section" id="hero-section">
            <button class="hamburger" onclick="openSidebar()"><svg xmlns="http://www.w3.org/2000/svg" height="2.3rem"
                    viewBox="0 -960 960 960" width="2.3rem" fill="#f7ad19">
                    <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                </svg>
            </button>
            


            <div class="main">
                <nav id="nav">
                    <ul class="left-items">
                        <li class="other1"><a href="#hero-section">Home</a></li>
                        <li class="other1"><a href="#services">Feed</a></li>
                        <li class="other"><a href="#courses-section">Courses</a></li>
                        <li class="other"><a href="#why-choose-us">About </a></li>
                    </ul>
                    <div class="center">
                        <h1>Skill<span>Barter</span></h1>
                    </div>
                    <ul class="right-items" style="display: <?php echo $hideRightItem ? 'none' : 'flex'; ?>">
                        <li class="other"><a href="./Register/register.html" target="_blank"
                                onclick="openProfile('form')">Register</a></li>
                        <button class="login-btn"
                            onclick="document.querySelector('.form-container').style.display='flex'">Login</button>
                    </ul>

                </nav>
                <div class="content-papa">
                    <div class="hero-content">

                        <h1 class="hero-heading">Connect, Learn, and Teach Through Skills</h1>
                        <p class="hero-para">Teach what you know, learn what you need—a community growing together by
                            bartering skills.</p>
                        <a href="#how-it-works">Know How</a>
                    </div>
                    <div class="hero-image">
                        <img src="./Assets/hero-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="center">
                    <h1>Skill<span>Barter</span></h1>
                </div>
                <button onclick="closeSidebar()">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                        fill="#ffffff">
                        <path
                            d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                    </svg>
                </button>
            </div>
            <div class="sidebar-links">
                <ul>
                    <li><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                            fill="#ffffff">
                            <path
                                d="M264-216h96v-240h240v240h96v-348L480-726 264-564v348Zm-72 72v-456l288-216 288 216v456H528v-240h-96v240H192Zm288-327Z" />
                        </svg><a href="./index.html">Home</a></li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                            fill="#ffffff">
                            <path
                                d="M384-480q-60 0-102-42t-42-102q0-60 42-102t102-42q60 0 102 42t42 102q0 60-42 102t-102 42ZM96-192v-92q0-26 12.5-47.5T143-366q55-32 116-49t125-17q11 0 20.5.5T425-430q-7 17-10.5 35t-5.5 36l-25-1q-54 0-106 14t-99 42q-4.95 2.94-7.98 8.24Q168-290.47 168-284v20h251q4.85 18.63 12.92 36.81Q440-209 451-192H96Zm543 48-12-56q-14-5-26.5-12T577-228l-55 17-32-55 41-40q-4-14-3.5-29t3.5-29l-41-39 32-56 54 16q11-10 24-17.5t27-11.5l13-56h64l13 56q14 5 27 12t24 17l54-15 32 55-40 38q2 15 2 30.05 0 15.06-3 28.95l41 39-32 55-55-16q-11 9-23.5 16.5T717-200l-14 56h-64Zm33.21-120Q702-264 723-285.21t21-51Q744-366 722.79-387t-51-21Q642-408 621-386.79t-21 51Q600-306 621.21-285t51 21Zm-288-288Q414-552 435-573.21t21-51Q456-654 434.79-675t-51-21Q354-696 333-674.79t-21 51Q312-594 333.21-573t51 21Zm-.21-72Zm35 360Z" />
                        </svg><a href="./Service/service.php">Feed</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                            fill="#ffffff">
                            <path
                                d="M264-96v-175q-57-48-88.5-115.57T144-529q0-139.58 98.29-237.29Q340.58-864 481-864q109 0 196 58.5T792-653l66 223q5 17.48-5.5 31.74Q842-384 824-384h-56v120q0 29.7-21.15 50.85Q725.7-192 696-192h-96v96h-72v-168h168v-192h80l-52-173q-22-72-89.5-117.5T481-792q-111 0-188 76.63T216-529q0 58.93 25 111.96Q266-364 311-326l25 22v208h-72Zm232-348Zm-16 108q17 0 27.5-11.1 10.5-11.09 10.5-27.5 0-16.4-10.5-27.4T480-413q-17 0-27.5 10.92Q442-391.15 442-375q0 16.58 10.5 27.79T480-336Zm-29-122h58q0-30 7-45.5t30-35.5q23-21 34-40.5t11-42.5q0-41.16-32-69.58T482-720q-39 0-69.5 21.5T370-640l52 22q6.67-21.1 23.35-34.05Q462.02-665 482.04-665q20.96 0 35.46 13.5T532-618q0 20-14.5 34.5T488-555q-22 21-29.5 40.5T451-458Z" />
                        </svg><a href="./About/about.html">About Us</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#fff">
                            <path
                                d="M560-564v-68q33-14 67.5-21t72.5-7q26 0 51 4t49 10v64q-24-9-48.5-13.5T700-600q-38 0-73 9.5T560-564Zm0 220v-68q33-14 67.5-21t72.5-7q26 0 51 4t49 10v64q-24-9-48.5-13.5T700-380q-38 0-73 9t-67 27Zm0-110v-68q33-14 67.5-21t72.5-7q26 0 51 4t49 10v64q-24-9-48.5-13.5T700-490q-38 0-73 9.5T560-454ZM260-320q47 0 91.5 10.5T440-278v-394q-41-24-87-36t-93-12q-36 0-71.5 7T120-692v396q35-12 69.5-18t70.5-6Zm260 42q44-21 88.5-31.5T700-320q36 0 70.5 6t69.5 18v-396q-33-14-68.5-21t-71.5-7q-47 0-93 12t-87 36v394Zm-40 118q-48-38-104-59t-116-21q-42 0-82.5 11T100-198q-21 11-40.5-1T40-234v-482q0-11 5.5-21T62-752q46-24 96-36t102-12q58 0 113.5 15T480-740q51-30 106.5-45T700-800q52 0 102 12t96 36q11 5 16.5 15t5.5 21v482q0 23-19.5 35t-40.5 1q-37-20-77.5-31T700-240q-60 0-116 21t-104 59ZM280-494Z" />
                        </svg>
                        <a href="./Courses/courses.html">Courses</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                            fill="#ffffff">
                            <path
                                d="M96-192v-92q0-26 12.5-47.5T143-366q54-32 115-49t126-17q23 0 46.5 3t49.5 9l-61 62q-15-2-22-2h-13q-53 0-105 14t-100 42q-4.95 2.94-7.98 8.24Q168-290.47 168-284v20h286l71 72H96Zm530 0L491-328l50-51 85 85 187-186 51 50-238 238ZM384-480q-60 0-102-42t-42-102q0-60 42-102t102-42q60 0 102 42t42 102q0 60-42 102t-102 42Zm70 216Zm-69.79-288Q414-552 435-573.21t21-51Q456-654 434.79-675t-51-21Q354-696 333-674.79t-21 51Q312-594 333.21-573t51 21Zm-.21-72Z" />
                        </svg><a href="./Register/register.html">Register</a>
                    </li>
                    <div style="border: 1px solid rgb(190, 190, 190); height: 1px; width: 100%; margin: 1rem 0;">
                    </div>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                            fill="#ffffff">
                            <path
                                d="M480-216q48.67 0 83.34-35Q598-286 600-336v-192q2-50-33.5-85t-86-35q-50.5 0-85 35T360-528v192q-1 50 34 85t86 35Zm-72-120h144v-72H408v72Zm0-120h144v-72H408v72Zm72 26Zm0 286q-60 0-109-32.5T302-264H192v-72h96v-60h-96v-72h96v-60h-96v-72h110q8-26 25.8-47.09Q345.6-668.18 369-684l-81-81 51-51 101 100q19.86-5 40.43-5t40.57 5l100-100 51 51-81 81q23 16 40 37t27 47h110v72h-96v60h96v72h-96v60h96v72H658q-20 55-69 87.5T480-144Z" />
                        </svg><a href="./HelpAndSupport/support.html">Help and Support</a>
                    </li>

                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: inline;" height="20px"
                            viewBox="0 -960 960 960" width="20px" fill="#ffffff">
                            <path
                                d="M765-144 526-383q-30 22-65.79 34.5-35.79 12.5-76.18 12.5Q284-336 214-406t-70-170q0-100 70-170t170-70q100 0 170 70t70 170.03q0 40.39-12.5 76.18Q599-464 577-434l239 239-51 51ZM384-408q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Z" />
                        </svg>
                        <select id="category" name="category" onchange="window.location.href=this.value;">
                            <option value="">Select your interest</option>
                            <option value="./Service/service.php#slider2">Music Production</option>
                            <option value="./Service/service.php#slider1">Programming</option>
                            <option value="./Service/service.php#slider3">Arts and Craft</option>
                        </select>

                    </li>
                    <div style="border: 1px solid rgb(190, 190, 190); height: 1px; width: 100%; margin: 1rem 0;">
                    </div>
                    <li style=";display: <?php echo !$hideRightItem ? 'none' : 'flex'; ?> ">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                            fill="#fff">
                            <path
                                d="M216-144q-29.7 0-50.85-21.15Q144-186.3 144-216v-528q0-29.7 21.15-50.85Q186.3-816 216-816h264v72H216v528h264v72H216Zm432-168-51-51 81-81H384v-72h294l-81-81 51-51 168 168-168 168Z" />
                        </svg>
                        <form action="login.php" method="post">
                            <!-- <a href="login.php?logout=true">Logout</a> -->
                            <button type="submit" name="logout">Logout</button>
                        </form>
                    </li>
                </ul>
                <div class="sidebar-anchor">
                    <p>&copy;Skill Exchange.INC</p>
                    <a href="#">About</a>
                    <a href="#">Terms</a>
                    <a href="#">Privacy</a>
                    <a href="#">Security</a>
                    <a href="#">Status</a>
                    <a href="#">Blogs</a>
                </div>
            </div>
        </div>
        <div class="overlay" onclick="closeSidebar()"></div>
        <div class="form-container" onclick="openLogin()">
            <div class="login-popup" id="form-popup">

                <button onclick="document.querySelector('.form-container').style.display='none'"><svg
                        xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                        fill="#000000">
                        <path
                            d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                    </svg>
                </button>
                <form action="login.php" class="form" method="post">
                    <center>
                        <h2>Login or Sign up</h2>
                    </center>
                    <input type="email" name="Email" id="email" placeholder="Email*" required>
                    <input type="password" name="password" id="password" placeholder="Password*" required>
                    <label for="show-password" id="show-password-label">
                        <input type="checkbox" id="show-password" onclick="togglePassword()"> Show Password
                    </label>
                    <button type="submit" name="login">Login</button>
                </form>
                <p>New to Website?
                    <a class="create-account" href="./Register/register.html"
                        onclick=" document.querySelector('.form-container').style.display='none'">Create
                        New Account</a>
                </p>
            </div>
        </div>
        <section class="why-choose-us" id="why-choose-us">
            <div class="head-des">
                <div class="leftBox">
                    <img src="./Assets/why-choose-us.gif" alt="whyChooseUs">
                </div>
                <div class="rightBox">
                    <h1>Discover the <span>Difference</span> with Us</h1>
                    <p>Join our platform for a unique, free skill exchange where you can learn new skills and share your
                        expertise.</p>
                </div>
            </div>
            <div class="number-container">
                <span class="item item-1">
                    <h1>1200+</h1>
                    <p>Students</p>
                </span>
                <span class="item item-2">
                    <h1>300+</h1>
                    <p>Qualified</p>
                </span>
                <span class="item item-3">
                    <h1>140+</h1>
                    <p>Mentors</p>
                </span>
                <span class="item item-4">
                    <h1>14+</h1>
                    <p>Courses</p>
                </span>
            </div>
        </section>
        <section class="services" id="services">
            <div class="service-container">
                <div class="service-items">
                    <h3>Our <span>Features</span> Special For you</h3>
                    <a href="./Service/service.php">Explore Services <svg xmlns="http://www.w3.org/2000/svg"
                            height="15px" viewBox="0 -960 960 960" width="15px" fill="#000000 ">
                            <path d="m216-160-56-56 464-464H360v-80h400v400h-80v-264L216-160Z" />
                        </svg></a>
                </div>
                <div class="service-items">
                    <img src="./Assets/GetSkilled.jpeg.jpg" alt="service image">
                    <h3>Get Skilled</h3>
                    <p>Master new skills for free by trading your own—unlock endless learning opportunities!
                    <p>
                </div>
                <div class="service-items">
                    <img src="./Assets/Peer.jpeg.jpg" alt="service image">
                    <h3>Peer Instructor</h3>
                    <p>Learn from a tutor close to your age, making every session relatable and comfortable.</p>
                </div>
                <div class="service-items">
                    <img src="./Assets/LifetimeSupport.jpeg.jpg" alt="service image">
                    <h3>Lifetime Support </h3>
                    <p>Enjoy lifetime support from our dedicated team, seamless assistance whenever you need it.</p>
                </div>
                <div class="service-items">
                    <img src="./Assets/GetCertified.jpeg.jpg " alt="service image">
                    <h3>Get Certificate</h3>
                    <p>Earn recognized certificates to showcase your skills and boost your career prospects!</p>
                </div>
            </div>
        </section>
        <section class="courses-section" id="courses-section">
            <h2 class="section-title">Popular Courses</h2>
            <div class="courses-container">
                <div class="course-card">
                    <div class="course-image-container"><img src="./Assets/course-image-1.jpg" alt="Course 1 Image"
                            class="course-image" id="course-image-1"></div>
                    <h3 class="course-title">Learn Core Python: A Beginner's Guide to Python</h3>
                    <a href="./Courses/courses.html#slider2" class="view-course-btn">View Course</a>
                </div>
                <div class="course-card">
                    <div class="course-image-container"><img src="./Assets/course-image-2.jpg" alt="Course 2 Image"
                            class="course-image" id="course-image-2"></div>
                    <h3 class="course-title">Learn to Play an Instrument: Piano Lessons</h3>
                    <a href="./Courses/courses.html#slider1" class="view-course-btn">View Course</a>
                </div>
                <div class="course-card">
                    <div class="course-image-container"><img src="./Assets/course-image-3.jpg" alt="Course 3 Image"
                            class="course-image" id="course-image-3"></div>
                    <h3 class="course-title">Learn How to Make Your Own Game: Game Development</h3>
                    <a href="./Courses/courses.html#slider3" class="view-course-btn">View Course</a>
                </div>
            </div>
        </section>
        <section class="how-it-works" id="how-it-works">
            <h1>How It Works</h1>
            <div class="container">
                <div class="item">
                    <img src="./Assets/how-it-works-LEFT.gif" alt="">
                    <h3>Sign Up</h3>
                </div>
                <div class="item">
                    <img src="./Assets/how-it-works-MIDDLE.gif" alt="">
                    <h3>Select skill of your choice</h3>
                </div>
                <div class="item">
                    <img src="./Assets/how-it-works-RIGHT.gif" alt="">
                    <h3>Connect with People</h3>
                </div>
            </div>
        </section>
        <footer>
            <div class="footer-container" id="footer">
                <div class="section">
                    <div class="center">
                        <h1>Skill<span>Barter</span></h1>
                    </div>
                    <p class="footer-text">SkillBarter is a platform made by students, for students who want to learn
                        and
                        gain skills without spending money. Here we provide an interactive place for students to
                        exchange
                        their skills and communicate.</p>
                    <div class="all-socials">
                        <img class="social-icons" src="./Assets/youtube.png" alt="">
                        <img class="social-icons" src="./Assets/social.png" alt="">
                        <img class="social-icons" src="./Assets/facebook.png" alt="">
                    </div>
                </div>
                <div class="section">
                    <h2>Navigation</h2>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="./About/about.html">About Us</a></li>
                        <li><a href="./Service/service.php">Our Feed</a></li>
                        <li><a href="./Courses/courses.html">Courses</a></li>
                        <li><a href="./HelpAndSupport/support.html">Help And Support</a></li>
                    </ul>
                </div>
                <div class="section">
                    <h2>Get In Touch</h2>
                    <pre><svg xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="15px" fill="#111  "><path d="M480.21-480Q510-480 531-501.21t21-51Q552-582 530.79-603t-51-21Q450-624 429-602.79t-21 51Q408-522 429.21-501t51 21ZM480-191q119-107 179.5-197T720-549q0-105-68.5-174T480-792q-103 0-171.5 69T240-549q0 71 60.5 161T480-191Zm0 95Q323.03-227.11 245.51-339.55 168-452 168-549q0-134 89-224.5T479.5-864q133.5 0 223 90.5T792-549q0 97-77 209T480-96Zm0-456Z"/></svg>   <span class="foot-dets">Lorem ipsum.</span></pre>
                    <pre><svg xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="15px" fill="#111  "><path d="M763-145q-121-9-229.5-59.5T339-341q-86-86-135.5-194T144-764q-2-21 12.29-36.5Q170.57-816 192-816h136q17 0 29.5 10.5T374-779l24 106q2 13-1.5 25T385-628l-97 98q20 38 46 73t57.97 65.98Q422-361 456-335.5q34 25.5 72 45.5l99-96q8-8 20-11.5t25-1.5l107 23q17 5 27 17.5t10 29.5v136q0 21.43-16 35.71Q784-143 763-145ZM255-600l70-70-17.16-74H218q5 38 14 73.5t23 70.5Zm344 344q35.1 14.24 71.55 22.62Q707-225 744-220v-90l-75-16-70 70ZM255-600Zm344 344Z"/></svg> <span class="foot-dets">+91-1234567890</span> </pre>

                    <pre><svg xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="15px" fill="#111  "><path d="M168-192q-29.7 0-50.85-21.16Q96-234.32 96-264.04v-432.24Q96-726 117.15-747T168-768h624q29.7 0 50.85 21.16Q864-725.68 864-695.96v432.24Q864-234 842.85-213T792-192H168Zm312-240L168-611v347h624v-347L480-432Zm0-85 312-179H168l312 179Zm-312-94v-85 432-347Z"/></svg>  <span class="foot-dets">skillbarter@gmail.com</span> </pre>

                    </pre>
                </div>
                <!-- </div> -->
            </div>
        </footer>

    </div>
    <script src="index.js"></script>
</body>

</html>