<?php /* Template Name: Career Details */ ?>
<?php get_header() ?>
    <div class="d-flex flex-column position-relative">
        <div class="container career-details-container d-flex flex-column">
            <div class="d-flex flex-column">
                <a href="#" id="backToSearch">
                   <h5><span class="fa fa-angle-left"></span>
                    <span>Back to Search Results</span></h5>
                </a>
                <a id="applyNow" class="btn waves-effect waves-light default-bg w-25 margin-t-2">APPLY NOW</a>
            </div>
            <div class="d-flex flex-column job-content">
                <div class="job-title" id="jobTitle">
                </div>
                <div class="job-location" id="jobLocation">
                </div>
                <div class="job-details margin-t-1" id="jobDetails"></div>
            </div>
        </div>
    </div>
<?php get_footer() ?>