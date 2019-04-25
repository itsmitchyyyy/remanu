<?php /* Template Name: Tabs */ ?>
<?php get_header() ?>
<div class="d-flex flex-column position-relative">
    <div class="tab-careers-info-video-container ">
            <iframe src="https://www.youtube.com/embed/w4mfZZvx7Os" frameborder="0"></iframe>
    </div>
    <div class="tabs-container container">
        <div class="row">
            <div class="col s12 tab-list-container">
                <!-- <button class="need-help" id="need-help">
                    <i class="fa fa-envelope"></i>
                    <span>Need Help?</span>
                </button> -->
                <ul class="tabs">
                    <li class="tab col s4">
                        <a href="#news" class="active">News</a>
                    </li>
                    <li class="tab col s4">
                        <a href="#philosophy" class="active">Philosophy</a>
                    </li>
                    <li class="tab col s4">
                        <a href="#people" class="active">People</a>
                    </li>
                    <li class="tab col s4">
                        <a href="#plant-tour" class="active">Plant Tour</a>
                    </li>
                    <li class="tab col s4">
                        <a href="#employment" class="active">Employment</a>
                    </li>
                </ul>
            </div>
        <div id="news" class="tab-content col s12">
            <div class="row">
                <div class="col m8 s12 tab-content-info-left">
                    <h4 class="text-uppercase">ete reman news</h4>
                    <div class="tab-content-info-left-news-image" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/image-loader.gif)"></div>
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-column">
                            <h4>ATSG To Be Acquired By</h4>
                            <span>
                                ETE REMAN, the largest aftermarket automatic transmission remanufacturer in the United States,
                                announces the acquisition of ATSG (Automatic Transmission Service Group), the leader in automatic transmission
                                technical support and training. ATSG President Wayne Colonna will both remain in his current role and become the new Technical Director at
                                ETE REMAN.
                            </span>
                            <span class="margin-t-1">
                                <q>This is a perfect marriage,</q> said Sam Loshak, ETE REMAN founder and CEO.
                                <q>ETE will provide ATSG with the resources it needs to continue serving transmission specialists and rebuilders,
                                    and ATSG will provide..
                                </q>
                            </span>
                            <button class="margin-t-1 btn waves-effect waves-light default-bg tab-content-info-left-btn">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col m4 s12 tab-content-info-right">
                    <div class="d-flex flex-column tab-content-info-right-details">
                        <h4 class="text-uppercase">news & updates</h4>
                        <?php for($i = 0; $i < 4; $i++): ?>
                            <div class="row">
                                <div class="col s12">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/image-loader.gif" alt="image" class="tab-content-info-right-image">
                                </div>
                                <div class="col s12">
                                    <div class="d-flex flex-column tab-content-info-right-text">
                                        <span class="d-flex align-items-center ">
                                            <i class="fa fa-calendar-alt margin-r-1"></i>
                                            January 11, 2018
                                        </span>
                                        <span class="margin-t-1">ETE REMAN Opens New Warehouse Locations</span>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="philosophy" class="tab-content col s12">
            <div class="row">
                <div class="col m8 s12 tab-content-info-left">
                   <div class="d-flex flex-column">
                        <div class="margin-b-5 d-flex flex-column">
                            <h4 class="text-uppercase philosophy-left-header">ETE REMAN PHILOSOPHY</h4>
                            <span>Providing an Exceptional Transmission Experience</span>
                            <div class="philosophy-left-image margin-t-2" style="background-image: url(http://localhost/remanu/wp-content/themes/etereman/img/image-loader.gif)"></div>
                            <span class="margin-t-1">
                                Remarkable Customer Service - Everyday the ETE REMAN team is focused on one
                                mission: To deliver remarkable customer service unmatched by others. We are proud to
                                have a team of bright professionals who are dedicated to this mission. A team dedicated to
                                making your ETE REMAN experience more than great. Remarkable
                            </span>
                            <span class="margin-t-1">
                                True Partnership - Sharing is one of the basic lessons we all were taught in grade school.
                                This virtue is just as important today in our business. We treat our business relationships like
                                partnerships by sharing both the joys and pains of business with our customers.
                                Of course, we prefer joy and hope you do too.
                            </span>
                            <span class="margin-t-1">
                                Tremendous Quality - Quality begins, well, at the beginning. Research and Development
                                engineers analyze all transmissions and then design replacement parts which often improve
                                upon the quality of the original component. Each part and each process is designed to
                                create OE+ &trade; quality transmissions. But, the true scientists at ETE REMAN do not stop
                                there; we keep looking at our creations, at our processes, to find ways to make
                                transmissions even better.
                                Not good, not greate. Tremendous.
                            </span>
                        </div>
                        <div class="margin-b-5 d-flex flex-column">
                            <h4 class="text-uppercase philosophy-left-header">ETE REMAN'S ENGINE & TRANMISSION EXCHANGE</h4>
                            <span>Your Full Service Car Care Professionals</span>
                            <div class="philosophy-left-image margin-t-2" style="background-image: url(http://localhost/remanu/wp-content/themes/etereman/img/image-loader.gif)"></div>
                            <span class="margin-t-1">
                                Southeastern Wisconsin Auto Service and Repair
                            </span>
                            <span class="margin-t-1">
                                Engine and Transmission Exchange provides all of its customers with high-quality engine
                                repair and service at reasonable prices. We specialize in complete engine and transmission
                                repair, and we remanufacture our own engines and tranmissions to ensure the highest
                                quality possible. All of our transmissions come with a 3 year / 100,000 miles warranty.. Our
                                expert technicians know all of the latest techniques and use state-of-the-art tools.
                            </span>
                            <span class="margin-t-1">
                                Engine and tranmission Exchange Provides Complete Car Care!
                            </span>
                            <ul class="list-of-benefits">
                                <li>Brakes & Brake Repair</li>
                                <li>Mufflers & Exhaust Service</li>
                                <li>Tune-ups & Preventive Maintenance</li>
                                <li>Alignments, Steering & Suspension</li>
                                <li>Climate Control</li>
                                <li>Engine Cooling Systems</li>
                                <li>Fleet Service Brakes & Brake Repair</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col m4 s12 tab-content-info-right">
                    <div class="d-flex flex-column tab-content-info-right-details">
                        <h4 class="text-uppercase">testimonials</h4>
                        <div class="d-flex flex-column">
                            <?php for($i = 0; $i < 5; $i++): ?>
                            <div class="margin-b-2 margin-t-2 d-flex flex-column">
                                <span>
                                    <q>ETE has always been very friendly when we call and more importantly
                                        they are prompt with their quotes and very knowledgeable about their products.
                                        On time delivery, competitive, pricing and quality are important for our center;
                                        ETE meet all three of these requirements everytime. We have only ever had one bad unit,
                                        and when we did, the warranty was handled VERY FAST and VERY professionally.
                                    </q>
                                </span>
                                <div class="d-flex flex-row margin-t-2">
                                    <img class="lazyload contact-content-blank-image" data-src="<?php echo get_template_directory_uri() ?>/img/blank-avatar.png" src="<?php echo get_template_directory_uri() ?>/img/image-loader.gif"
                                     alt="avatar" height="50" width="50">
                                     <span class="margin-l-1">David Park - AAMCO Front Royal</span>
                                </div>
                            </div>
                            <?php endfor; ?>
                        </div>
                        <button class="btn waves-light waves-effect default-bg" style="width:50%">Read More</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="people" class="tab-content col s12">People</div>
        <div id="plant-tour" class="tab-content col s12">Plant Tour</div>
        <div id="employment" class="tab-content col s12">
            <div class="d-flex flex-column">
                <div class="row tab-careers-top-section">
                    <div class="col tab-careers-content-left">
                        <img src="<?php echo get_template_directory_uri() ?>/img/etereman.png" alt="image" class="tab-careers-content-left-image">
                    </div>
                    <div class="col m8 s12 tab-careers-content-right">
                        <div class="d-flex flex-column">
                            <h4 class="text-uppercase">interested in joining our team?</h4>
                            <span>Visit our careers page to learn more about our hiring departments</span>
                            <span class="margin-t-2">
                                You can also stop by our headquarters Monday-Friday from 8AM-4PM
                                to complete an application in person.
                            </span>
                            <div class="margin-t-2 d-flex flex-column">
                                <span>ETE REMAN Headquarters</span>
                                <span>8155 N. 76th St.</span>
                                <span>Milwaukee, WI 53223</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column tab-careers-search-job">
                    <form id="searchBoxForm" action="<?php echo get_site_url() ?>/careers-list">
                    <div class="d-flex flex-column">
                        <h5>Search Jobs</h5>
                        <small>Begin the application process by checking out our current openings.</small>
                    </div>
                    <div class="row margin-t-1">
                        <div class="col input-field m3 s12 ">
                            <select class="selectJobFamily" name="area" data-valueKey="name" data-displayKey="name">
                                <option value="" disabled selected>Choose a job family</option>
                            </select>
                            <label>What is your area of interest?</label>
                        </div>
                        <div class="col input-field m3 s12">
                            <select class="selectJobPosition" name="position" data-valueKey="title" data-displayKey="title" disabled>
                                <option value="" disabled selected>Choose a position type</option>
                            </select>
                            <label>What type of position?</label>
                        </div>
                        <div class="col input-field m3 s12 ">
                            <select class="selectJobOffices" name="location" data-valueKey="name" data-displayKey="name" disabled>
                                <option value="" disabled selected>Choose a location</option>
                            </select>
                            <label>Where would you like to work?</label>
                        </div>
                        <div class="col m3 s12 input-field d-flex justify-content-center align-items-center">
                            <button class="btn waves-light waves-ripple default-bg">Search</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="d-flex flex-row tab-careers-bottom-section">
                    <div class="d-flex tab-careers-bottom-section-content-image">
                        <img src="<?php echo get_template_directory_uri() ?>/img/blank-avatar.png" alt="">
                    </div>
                    <div class="d-flex flex-column padding-r-3 padding-l-3 tab-careers-bottom-section-content-text">
                        <h4 class="text-uppercase margin-t-0">about ete reman</h4>
                        <span class="margin-t-1">
                            ETE REMAN is the 3rd largest transmission remanufacturer in the United States.
                            This means our remanufactured transmissions are available at installations
                            facilities throughout the entire country, and you might even have one under your own hood!
                        </span>
                        <span class="margin-t-1">
                            Remarkable Customer Service - Everyday, the ETE REMAN team is focused on one mission: 
                            To deliver remarkable customer service unmatched by others.
                        </span>
                        <span class="margin-t-1">
                            True Partnership - Sharing is one of the basic lessions we all were taught in grade school.
                            This virtue is just as important today in our business.
                            We treat our business relationships like partnerships by sharing both the joys and pains of business with our customers.
                        </span>
                        <span class="margin-t-1">
                            Tremendous Quality - Quality begins, well, at the beginning. Research and Development engineers analyze all transmissions and then design
                            replacement parts which often, improve upon the quality of the original component. Each part and each process is designed to create OE+ &trade; quality
                            transmissions. But, the true scientists at ETE Reman do not stop there; we keep looking at our creations, at our processes,
                            to find ways to make transmissions even better.  Not good, not great, Tremendous.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include(get_template_directory().'/misc/chat-box.php') ?>
</div>
<?php get_footer() ?>