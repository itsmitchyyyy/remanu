<?php /* Template Name: Career Search */ ?>
<?php get_header() ?>
    <div class="d-flex flex-column position-relative">
        <div class="d-flex justify-content-center careers-list-info-top align-items-center lazyload"  
        style="background-image: url(<?php echo get_template_directory_uri() ?>/img/image-loader.gif" 
        data-src="<?php echo get_template_directory_uri() ?>/img/card-1.jpg">
            <div class="d-flex justify-content-center align-items-center careers-list-info-top-text">
                <h1>careers at etereman</h1>
            </div>
        </div>
        <div class="careers-list-container container">
            <div class="d-flex flex-column careers-list-search-job">
                <form action="<?php echo get_site_url() ?>/careers-list">
                    <div class="row careers-list-search-container">
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
            <div class="d-flex flex-column careers-list-search-result-container">
                <div>
                    <h4>Search Results</h4>
                </div>
                <div class="row w-100 careers-list-search-list">
                    <div class="col s5 careers-list-search-title">
                        <small>JOB TITLE</small>
                    </div>
                    <div class="col s5 careers-list-search-title">
                        <small>LOCATION</small>
                    </div>
                    <div class="col s2 careers-list-search-title">
                        <small>DATE POSTED</small>
                    </div>
                </div>
                <div class="row w-100">
                    <div class="col s12" id="searchResultContainer"></div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer() ?>