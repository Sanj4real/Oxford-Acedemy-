<?php @include('partial/header.php') ?>

<section class="page__details">
    <div class="page__detail ">
        <div class="overflow"></div>
        <div class="page__detail__inner">
            <div class="text-center">
                <div id="breadcrumb" class="breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="current">Enquiry</span>
                </div>
                <h1 class="page__title">Enquiry Now</h1>
            </div>
        </div>
    </div>
</section>

<section class="about__page padding-spacing contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 contact__form__wrap">
                <h1 class="site__header">Ask a question / Schedule an appointment</h1>
                <div class="about__page__left enquiry contact__form">
                    <h3>Student Details</h3>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="name" type="text" id="name" class="form-control"
                                        placeholder="Full Name" value="" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="input">
                                        <option value="" selected="selected" class="">Select Class
                                        </option>
                                        <option value="LKG">LKG</option>
                                        <option value="UKG">UKG</option>
                                        <option value="Grade 1">Grade 1</option>
                                        <option value="Grade 2">Grade 2</option>
                                        <option value="Grade 3">Grade 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="input">
                                        <option value="" selected="selected" class="">Select Gender
                                        </option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="date" type="date" id="date" class="form-control"
                                        placeholder="Date of Birth" value="" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="input">
                                        <option value="" selected="selected" class="">Acedamic Session
                                        </option>
                                        <option value="2022">2022</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="input">
                                        <option value="" selected="selected" class="">Reference
                                        </option>
                                        <option value="Newspaper">Newspaper</option>
                                        <option value="Internet">Internet</option>
                                        <option value="Friends/Relatives">Friends/Relatives</option>
                                        <option value="Exhibition">Exhibition</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    <h3>Perents Details</h3>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="name" type="text" id="name" class="form-control"
                                        placeholder="Father name*" value="" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="name" type="text" id="name" class="form-control"
                                        placeholder="Mother name*" value="" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="input">
                                        <option value="" selected="selected" class="">Select Qualification
                                        </option>
                                        <option value="SLC">SLC</option>
                                        <option value="+2">+2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="input">
                                        <option value="" selected="selected" class="">Select Qualification
                                        </option>
                                        <option value="SLC">SLC</option>
                                        <option value="+2">+2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="input">
                                        <option value="" selected="selected" class="">Select Occupation
                                        </option>
                                        <option value="Academic">Academic</option>
                                        <option value="Dentist">Dentist</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="input">
                                        <option value="" selected="selected" class="">Select Occupation
                                        </option>
                                        <option value="Academic">Academic</option>
                                        <option value="Dentist">Dentist</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    <h3>Contact Details</h3>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="tel" type="tel" id="tel" class="form-control" placeholder="Mobile no"
                                        value="" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="email" type="email" id="email" class="form-control" placeholder="Email"
                                        value="" />
                                </div>
                            </div>
                        </div>
                    </form>
                    <h3>Other Details</h3>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control"
                                        placeholder="Your child's strength in acedamic, sports or any other talents:"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control"
                                        placeholder="Reason for change of school:"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-default site-btn mb-3">Send
                            Message</button>
                    </div>
                </div>
                <p> for more info please call <a href="tel:+911 9804653214">9804653214</a> and mail to <a
                        href="mailto:info@gmail.com">info@gmail.com</a> </p>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4">
                <div class="about--sidebar">
                    <h1 class="site__header">Explore More</h1>
                    <ul>
                        <li>
                            <a href="apply.php">How to apply</a>
                        </li>
                        <li class="active">
                            <a href="enquiry.php">Admission Enquiry</a>
                        </li>
                        <li>
                            <a href="faq.php">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



















<?php @include('partial/footer.php') ?>