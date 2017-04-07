@extends('layouts.app')

@section('content')
    <section class="main-hero">
        <div class="container">

            <div class="row">
                <div class="col-md-6  main-hero-text">
                    <h1>smart assistant for benchmarking projects</h1>
                    <p>See how you project is performing.</p>
                    <a href="https://onboarding.stratejos.com" rel="nofollow" class="try-free" title="Create a new team">Find out how - it's free</a>
                    <small>&nbsp;</small>
                </div>

                <div class="col-md-6  main-hero-video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/exIb9xT_S-k" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
        <a href="javascript:void(0);" class="scroll-bottom" id="scroll-benefits"><i class="ion-chevron-down"></i></a>
    </section>
    <!--/. hero ends-->

    <section class="benefits" id="benefits-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="benefits-wrapper">
                        <h3>Automate <br>project reporting</h3>
                        <div class="benefits-image">
                            <!--<img src="img/automate-project-reports.png" alt="Know the real status" class="img-responsive">-->
                        </div>
                        <p>Save time building the same old status report, let stratejos provide you interactive dashboards and reports in real-time.</p>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12">
                    <div class="benefits-wrapper">
                        <h3>Analyse <br>team performance</h3>
                        <div class="benefits-image">
                            <!--<img src="img/analyse-team-performance.png" alt="Know the problems" class="img-responsive">-->
                        </div>
                        <p>Learn more about your teams and individuals with dashboards, reports and metrics that give you measurable views of performance.</p>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12">
                    <div class="benefits-wrapper">
                        <h3>Auto-identify risks<br>+ Auto follow up</h3>
                        <div class="benefits-image">
                            <!--<img src="img/auto-identify-risks.png" alt="auto-identify risks + auto-follow up" class="img-responsive">-->
                        </div>
                        <p>Learn about problems ahead of time, avoid tediously sifting through project data each day and avoid nagging team mates.</p>
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
                    <h2>Stratejos helps you benchmark projects.<br> Agile, waterfall, ad-hoc, ongoing, you name it.</h2>
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
                        <h5>product</h5>
                        <ul>
                            <li><a href="#features" title="Features">Features</a></li>
                            <li><a href="#pricing" title="Pricing">Pricing</a></li>
                            <li><a href="./about" title="About">About</a></li>
                            <li><a href="https://marketplace.atlassian.com/plugins/stratejos/cloud/overview" rel="nofollow" title="Signup">Signup</a></li>
                            <li><a href="https://app.stratejos.com" rel="nofollow" title="Login">Login</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-3 col-xs-4 col-xss-12">
                        <h5>Resources</h5>
                        <ul>
                            <li><a href="http://stratejos.ai/blog/" title="Blog">Blog</a></li>
                            <li><a href="https://support.stratejos.ai/hc/en-us" title="Documentation" rel="nofollow">Documentation</a></li>
                            <li><a href="https://support.stratejos.ai/hc/en-us" title="Help &amp; Support" rel="nofollow">Help &amp; Support</a></li>
                            <!--<li><a href="javascript:void(0);" title="API">API</a></li>-->
                            <li><a href="https://support.stratejos.ai/hc/en-us/sections/205129188-FAQ" title="FAQ" rel="nofollow">FAQ</a></li>
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
                        <p>Copyright 2016-2017 Stratejos All Right Reserved </p>
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
