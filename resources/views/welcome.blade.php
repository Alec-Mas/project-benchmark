@extends('layouts.app') @section('content')
<section class="main-hero">
    <div class="container">

        <div class="row">
            <div class="col-md-6  main-hero-text">
                <h1>use stratejos to benchmark project performance</h1>
                <p>See how your project is performing.</p>
                <a href="javascript:void(0);" class="try-free scroll-benefits">Find out how - it's free</a>
                <small>&nbsp;</small>
            </div>

            <div class="col-md-6  main-hero-video">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/exIb9xT_S-k" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
    <a href="javascript:void(0);" class="scroll-bottom scroll-benefits"><i class="ion-chevron-down"></i></a>
</section>
<!--/. hero ends-->

<section class="benefits" id="benefits-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div class="benefits-wrapper">
                    <h3>Real-time <br>project data</h3>
                    <div class="benefits-image">
                        <!--<img src="img/automate-project-reports.png" alt="Know the real status" class="img-responsive">-->
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin metus et dui imperdiet, a volutpat nunc facilisis.</p>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12">
                <div class="benefits-wrapper">
                    <h3>Analyse <br>team performance</h3>
                    <div class="benefits-image">
                        <!--<img src="img/analyse-team-performance.png" alt="Know the problems" class="img-responsive">-->
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin metus et dui imperdiet, a volutpat nunc facilisis.</p>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12">
                <div class="benefits-wrapper">
                    <h3>Auto-identify risks<br>+ Auto follow up</h3>
                    <div class="benefits-image">
                        <!--<img src="img/auto-identify-risks.png" alt="auto-identify risks + auto-follow up" class="img-responsive">-->
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin metus et dui imperdiet, a volutpat nunc facilisis.</p>
                </div>
            </div>

            <div class="col-sm-12 col-xs-12">
                <div class="section-scroll">
                    <a href="javascript:void(0);" class="scroll-bottom" id="scroll-how-it-helps"><i class="ion-chevron-down"></i></a>

                </div>
            </div>
        </div>
    </div>
</section>
<!--/. benefits ends-->
<a name="features"></a>
<section class="how-it-helps" id="how-it-helps-section">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Benchmark your project performance right now!</h2>
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
                            <input type="text" name="type" placeholder="Project Type" />
                            <input type="text" name="type" placeholder="Project Industry" />
                            <input type="number" name="type" placeholder="Assigned Team Members" />
                            <input type="date" name="type" placeholder="Start-Date" alt="Start-Date" />
                            <input type="date" name="type" placeholder="End-Date" alt="End-Date" />
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
</section>
<!--/. how-it-helps ends-->

<footer>
    <div class="foot-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-12 col-xss-12">
                    <img src="{{ asset('img/foot-logo.png') }}" alt="Logo" class="img-responsive foot-logo">
                </div>
                <div class="col-sm-3 col-xs-4 col-xss-12">
                    <h5>tool</h5>
                    <ul>
                        <li><a href="javascript:void(0);" class="scroll-benefits" title="Features">Features</a></li>
                        <li><a href="javascript:void(0);" class="nav-features" title="About">Benchmark</a></li>
                        <li><a href="{{url('login')}}" rel="nofollow" title="Login">Admin</a></li>
                    </ul>
                </div>

                <div class="col-sm-3 col-xs-4 col-xss-12">
                    <h5>Resources</h5>
                    <ul>
                        <li><a href="http://stratejos.ai/blog/" title="Blog">Blog</a></li>
                        <li><a href="#" title="Documentation" rel="nofollow">Documentation</a></li>
                    </ul>
                </div>

                <div class="col-sm-3 col-xs-4 col-xss-12">
                    <h5>Social</h5>
                    <ul>
                        <!--<li><a href="javascript:void(0);" title="Facebook">Facebook</a></li>-->
                        <li><a href="https://twitter.com/stratejos" title="Twitter" rel="nofollow">Twitter</a></li>
                        <li><a href="https://www.linkedin.com/company/10700026" title="LinkedIn" rel="nofollow">LinkedIn</a></li>
                        <!--<li><a href="javascript:void(0);" title="Google+">Google+</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="foot-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-6 col-xss-12">
                    <p>Copyright &copy; {{Carbon\Carbon::now()->year}} Stratejos All Right Reserved </p>
                </div>
                <div class="col-sm-6 col-xs-6 col-xss-12">
                    <ul>
                        <!--<li><a href="javascript:void(0);" title="Terms of Service">Terms of Service</a></li>-->
                        <li><a href="//stratejos.ai/privacy.html" title="Privacy Policy">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/. footer ends-->
@endsection