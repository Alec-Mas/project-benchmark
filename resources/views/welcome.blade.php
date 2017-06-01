@extends('layouts.app') @section('content')
<section class="benefits" id="benefits-section">
    <div class="hero">
        <div class="container">
            <div class="content">
                <h1 class="page-title">project performance tool</h1>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="feature-wrapper">
                            <h2 class="feature-title">accurate project performance</h2>
                            <div class="feture-image">
                                <i class="fa fa-5x fa-tachometer" aria-hidden="true"></i>                            
                            </div>
                            <p class="feature-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin metus et dui imperdiet, a volutpat nunc facilisis.</p>
                        </div>
                        <div class="feature-wrapper">
                            <h2 class="feature-title">accurate project statistics</h2>
                            <div class="feture-image">
                                <i class="fa fa-5x fa-gears" aria-hidden="true"></i>                            
                            </div>
                            <p class="feature-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin metus et dui imperdiet, a volutpat nunc facilisis.</p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <!-- multistep form -->
                        <form id="msform">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                        <li class="active">Scope</li>
                                        <li>Budget</li>
                                        <li>Report</li>
                                </ul>
                                <!-- fieldsets -->
                                <fieldset>
                                        <p class="fs-title">Project Scope</p>
                                        <p class="fs-subtitle">Let's begin!</p>
                                        <!-- fieldsets <input type="text" name="type" placeholder="Project Type" />-->
                                        <select name="Project Type">
                                                <option value="Project Type" disabled selected>Project Type</option>
                                                <option value="Web Development">Web Development</option>
                                                <option value="Mobile Application">Mobile Application</option>
												<option value="Video Game Application">Video Game Application</option>
                                                <option value="Java Application">Java Application</option>
												<option value="Software Development">Software Development</option>
												<option value="Database Development">Database Development</option>
                                                <option value="Other">Other</option>
                                        </select>
										<select name="Project Industry">
                                                <option value="Project Industry" disabled selected>Project Industry</option>
                                                <option value="Accounting">Accounting</option>
                                                <option value="Construction">Construction</option>
												<option value="Retail">Retail</option>
                                                <option value="Food and Services">Food and Services</option>
												<option value="Information Technology">Information Technology</option>
												<option value="Medicine">Medicine</option>
												<option value="Sport">Sport</option>
                                                <option value="Research and Development">Research and Development</option>
												<option value="Law">Law</option>
                                                <option value="Engineering">Engineering</option>
                                                <option value="Other">Other</option>
                                        </select>
										<select name="Assigned Team Members">
                                                <option value="Assigned Team Members" disabled selected>Assigned Team Members</option>
                                                <option value="1-5">1-5</option>
                                                <option value="5-10">5-10</option>
												<option value="10-20">10-20</option>
                                                <option value="20-50">20-50</option>
												<option value="50+">50+</option>
                                        </select>
                                        <input onfocus="(this.type='date')" class="js-form-control" placeholder="Expected Date"/>
                                        <input onfocus="(this.type='date')" class="js-form-control" placeholder="Actual Date"/>
                                        <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset>
                                        <p class="fs-title">Budget</p>
                                        <p class="fs-subtitle">Don't lie!</p>
                                        <input type="number" name="original-budget" placeholder="Original Budget" />
                                        <input type="number" name="actual-budget" placeholder="Actual Budget" />
                                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                                        <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset>
                                        <p class="fs-title">Generate Report</p>
                                        <p class="fs-subtitle">We'll send it to you.</p>
                                        <input type="email" name="email" placeholder="Email Address" />
                                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                                        <input type="submit" name="submit" onclick="location.href='{{ url('Benchmark') }}'" class="submit action-button" value="Benchmark" />
                                </fieldset>
                        </form>     
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection