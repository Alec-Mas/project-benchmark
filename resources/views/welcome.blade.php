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
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                        </select>
                                        <input type="text" name="type" placeholder="Project Industry" />
                                        <input type="number" name="type" placeholder="Assigned Team Members" />
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
                                        <input type="submit" name="submit" class="submit action-button" value="Benchmark" />
                                </fieldset>
                        </form>     
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection