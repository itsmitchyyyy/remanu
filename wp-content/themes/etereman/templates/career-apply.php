<?php /* Template Name: Career Apply */ ?>
<?php get_header() ?>
<div class="d-flex flex-column position-relative">
    <div class="container career-apply-container d-flex flex-column">
        <div class="d-flex">
            <a href="#" id="backToSearch">
                <h5><span class="fa fa-angle-left"></span>
                <span>Back</span></h5>
            </a>
        </div>
        <div class="d-flex flex-column">
            <h4>Apply for this Job:</h4>
            <span><h5>Customer Support Specialist</h5>
            <h6>HQ - 8700 N. Servite Drive</h6></span>
        </div>
        <div class="divider margin-t-1"></div>
        <div class="d-flex flex-column">
            <form id="apply-form" novalidate="novalidate" enctype="multipart/form-data">
                <div class="row career-apply-form">
                    <div class="col s6 input-field">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" required="" aria-required="true">
                        <span class="helper-text" id="errorfirst_name"></span>
                    </div>
                </div>
                <div class="row career-apply-form">
                    <div class="col s6 input-field">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" required="" aria-required="true">
                        <span class="helper-text" id="errorlast_name"></span>
                    </div>
                </div>
                <div class="row career-apply-form">
                    <div class="col s6 input-field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required="" aria-required="true">
                        <span class="helper-text" id="erroremail"></span>
                    </div>
                </div>
                <div class="row career-apply-form">
                    <div class="col s6 input-field">
                        <label for="phone">Phone</label>
                        <input type="number" id="phone" name="phone" required="" aria-required="true">
                        <span class="helper-text" id="errorphone"></span>
                    </div>
                </div>
                <div class="row career-apply-form">
                    <div class="col s6 file-field input-field">
                        <div class="btn default-bg">
                            <span>Cover Letter</span>
                            <input type="file" name="cover_letter">
                        </div>
                        <div class="file-path-wrapper">
                            <input type="text" class="file-path validate" placeholder="Choose File">
                        </div>
                    </div>
                </div>
                <div class="row career-apply-form">
                    <div class="col s6 file-field input-field">
                        <div class="btn default-bg">
                            <span>Resume/CV</span>
                            <input type="file" name="resume" id="resume">
                        </div>
                        <div class="file-path-wrapper">
                            <input type="text" class="file-path validate" placeholder="Choose File">
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row career-apply-form">
                    <div class="col s6 input-field">
                        <select id="applySchool" data-valueKey="id" data-displayKey="text" name="applySchool" required="" aria-required="true">
                            <option value="" disabled selected>Select a School</option>
                        </select>
                        <label for="applySchool">School</label>
                        <span class="helper-text" id="errorapplySchool"></span>
                    </div>
                </div>
                <div class="row career-apply-form">
                    <div class="col s6 input-field">
                        <select id="applyDegree" data-valueKey="id" data-displayKey="text" name="applyDegree" required="" aria-required="true">
                            <option value="" disabled selected>Select a Degree</option>
                            <option value="School">Degree</option>
                        </select>
                        <label for="applyDegree">Degree</label>
                        <span class="helper-text" id="errorapplyDegree"></span>
                    </div>
                </div>
                <div class="row career-apply-form">
                    <div class="col s6 input-field">
                        <select id="applyDiscipline" data-valueKey="id" data-displayKey="text" name="applyDiscipline" required="" aria-required="true">
                            <option value="" disabled selected>Select a Discipline</option>
                            <option value="School">Discipline</option>
                        </select>
                        <label for="applyDiscipline">Discipline</label>
                        <span class="helper-text" id="errorapplyDiscipline"></span>
                    </div>
                </div>
                <div class="row career-apply-form">
                    <div class="col s6 input-field">
                        <label for="start_date">Start Date</label>
                        <input type="text" class="datepicker" id="start_date" name="start_date" required="" aria-required="true">
                        <span class="helper-text" id="errorstart_date"></span>
                    </div>
                </div>
                <div class="row career-apply-form">
                    <div class="col s6 input-field">
                        <label for="end_date">End Date</label>
                        <input type="text" class="datepicker" id="end_date" name="end_date" required="" aria-required="true">
                        <span class="helper-text" id="errorend_date"></span>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row career-apply-form">
                    <div class="col s6 input-field">
                        <label for="desired_salary">Desired Salary</label>
                        <input type="text" id="desired_salary" name="desired_salary" required="" aria-required="true">
                        <span class="helper-text" id="errordesired_salary"></span>
                    </div>
                </div>
                <div class="row career-apply-form">
                    <div class="col s6 input-field">
                        <label for="linkedin_profile">LinkedIn Profile</label>
                        <input type="text" id="linkedin_profile" name="linkedin_profile">
                    </div>
                </div>
                <div class="row career-apply-form">
                    <div class="col s6 input-field">
                        <label for="heard_about_this_job">How did you hear about this job?</label>
                        <textarea class="materialize-textarea h-100" rows="5" cols="30" id="heard_about_this_job" name="heard_about_this_job"></textarea>
                    </div>
                </div>
                <div class="row career-apply-form">
                    <div class="col s6 input-field">
                        <label for="start_job">When are you available to start?</label>
                        <input type="text" id="start_job" name="start_job">
                    </div>
                </div>
                <div class="row career-apply-form">
                    <div class="col s12">
                        <button class="btn waves-effect waves-light default-bg" type="submit">submit application</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php get_footer() ?>