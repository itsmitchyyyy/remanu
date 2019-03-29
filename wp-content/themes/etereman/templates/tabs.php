<?php /* Template Name: Tabs */ ?>
<?php get_header() ?>
<div class="d-flex flex-column position-relative">
    <div class="tab-careers-info-video-container ">
            <iframe src="https://www.youtube.com/embed/PHJC4jMndgE?wmode=transparent" frameborder="0"></iframe>
    </div>
    <div class="tabs-container">
        <div class="row tabs-row">
            <div class="col s12 tab-list-container">
                <button class="need-help" id="need-help">
                    <i class="fa fa-envelope"></i>
                    <span>Need Help?</span>
                </button>
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
                                <div class="col s6">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/image-loader.gif" alt="image" class="tab-content-info-right-image">
                                </div>
                                <div class="col s6">
                                    <div class="d-flex flex-column tab-content-info-right-text">
                                        <span>ETE REMAN Opens New Warehouse Locations</span>
                                        <span class="margin-t-1 d-flex align-items-center ">
                                            <i class="fa fa-calendar-alt margin-r-1"></i>
                                            January 11, 2018
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="philosophy" class="tab-content col s12">Philosophy</div>
        <div id="people" class="tab-content col s12">People</div>
        <div id="plant-tour" class="tab-content col s12">Plant Tour</div>
        <div id="employment" class="tab-content col s12">
            <div class="d-flex flex-column">
                <div class="row tab-careers-top-section">
                    <div class="col tab-careers-content-left">
                        <img src="<?php echo get_template_directory_uri() ?>/img/etereman.png" alt="image" class="tab-careers-content-left-image">
                    </div>
                    <div class="col s8 tab-careers-content-right">
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
                    <div class="d-flex flex-column">
                        <h5>Search Jobs</h5>
                        <small>Begin the application process by checking out our current openings.</small>
                    </div>
                    <div class="row">
                        <div class="col input-field s3 tab-careers-search-job-select">
                            <select>
                                <option value="" disabled selected>Job Function</option>
                                <option value="job">job</option>
                                <option value="job">job</option>
                                <option value="job">job</option>
                            </select>
                        </div>
                        <div class="col input-field s3 tab-careers-search-job-select">
                            <select>
                                <option value="" disabled selected>Location</option>
                                <option value="location">location</option>
                                <option value="location">location</option>
                                <option value="location">location</option>
                            </select>
                        </div>
                        <div class="col input-field s3 tab-careers-search-job-input">
                            <i class="fa fa-search prefix"></i>
                            <input type="text" id="keyword">
                            <label for="keyword">Keyword</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn waves-light waves-ripple default-bg">Search</button>
                    </div>
                </div>
                <div class="d-flex flex-column tab-careers-bottom-section">
                    <h4 class="text-uppercase">about ete reman</h4>
                    <span class="margin-t-2">
                        ETE REMAN is the 3rd largest transmission remanufacturer in the United States.
                        This means our remanufactured transmissions are available at installations
                        facilities throughout the entire country, and you might even have one under your own hood!
                    </span>
                    <span class="margin-t-2">
                        Remarkable Customer Service - Everyday, the ETE REMAN team is focused on one mission: 
                        To deliver remarkable customer service unmatched by others.
                    </span>
                    <span class="margin-t-2">
                        True Partnership - Sharing is one of the basic lessions we all were taught in grade school.
                        This virtue is just as important today in our business.
                        We treat our business relationships like partnerships by sharing both the joys and pains of business with our customers.
                    </span>
                    <span class="margin-t-2">
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
    <?php include(get_template_directory().'/misc/chat-box.php') ?>
</div>
<?php get_footer() ?>