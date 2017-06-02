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
                            <p class="feature-description">gain a real advantage and see how your project is performing against hundreds of other projects.</p>
                        </div>
                        <div class="feature-wrapper">
                            <h2 class="feature-title">accurate project statistics</h2>
                            <div class="feture-image">
                                <i class="fa fa-5x fa-gears" aria-hidden="true"></i>                            
                            </div>
                            <p class="feature-description">generate advanced statistics about your project to help assist in better business decisions.</p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <!-- multistep form -->
                        <form id="msform" role="form" method="POST" action="{{ route('submit-report') }}">
                            {{ csrf_field() }}
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
                                    <select id="project-industry" name="project-industry">
                                            <option value="0" selected>Project Industry</option>
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
                                    <select id="project-team" name="project-team">
                                            <option value="0" selected>Assigned Team Members</option>
                                            <option value="1">1-5</option>
                                            <option value="2">5-10</option>
                                            <option value="3">10-20</option>
                                            <option value="4">20-50</option>
                                            <option value="5">50+</option>
                                    </select>             
                                    <input  value="{{ old('start-date') }}" name="start-date" onfocus="(this.type='date')" class="js-form-control" placeholder="Start Date"/>
                                    <input value="{{ old('end-date') }}" name="end-date" onfocus="(this.type='date')" class="js-form-control" placeholder="Expected Date"/>
                                    <input value="{{ old('actual-end-date') }}"name="actual-end-date"  onfocus="(this.type='date')" class="js-form-control" placeholder="Actual Date"/>
                                    <input type="button" name="next" class="next action-button" value="Next" />
                            </fieldset>
                            <fieldset>
                                    <p class="fs-title">Budget</p>
                                    <p class="fs-subtitle">Don't lie!</p>
                                    <input value="{{ old('original-budget') }}" type="number" name="original-budget" placeholder="Original Budget" />
                                    <input value="{{ old('actual-budget') }}" type="number" name="actual-budget" placeholder="Actual Budget" />
                                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next" />
                            </fieldset>
                            <fieldset>
                                    <p class="fs-title">Generate Report</p>
                                    <p class="fs-subtitle">We'll send it to you.</p>
                                    <input type="email" name="email" placeholder="Email Address" />
                                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                                    <button type="submit" class="submit action-button">Benchmark</button>
                            </fieldset>
                        </form>     
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection