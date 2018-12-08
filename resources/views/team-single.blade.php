@extends('layout')
@section('content')
    <section class="page_breadcrumbs ds background_cover background_overlay section_padding_top_65 section_padding_bottom_65">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight">Team Member</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="team">Team</a>
                        </li>
                        <li class="active">Team Member</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_25">
        <div class="container">
            <div class="row">
                <div class="col-md-5">

                    <div class="vertical-item content-padding with_shadow text-center rounded overflow-hidden">
                        <div class="item-media">
                            <img src="images/team/01.jpg" alt="" />
                        </div>
                        <div class="item-content">
                            <p class="small-text highlight3 bottommargin_0">director</p>
                            <h4 class="topmargin_0 hover-color3">
                                <a href="team-single.html">Theresa Green</a>
                            </h4>
                            <p class="color2links">
                                <a href="#" class="social-icon soc-facebook"></a>
                                <a href="#" class="social-icon soc-twitter"></a>
                                <a href="#" class="social-icon soc-google"></a>
                            </p>
                        </div>
                    </div>

                </div>

                <div class="col-md-7">

                    <p>
                        Lorem idolorame conseetur sadipscing elitdiam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam ersed diam voluptua vero eoet accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet rem ipsum dolorsit amet
                        consetetur sadipscing elitr:
                    </p>

                    <ul class="list2 darklinks medium">
                        <li>
                            <a href="#">Lorem ipsum dolor sit amet</a>
                        </li>
                        <li>
                            <a href="#">Sint animi non ut sed</a>
                        </li>
                        <li>
                            <a href="#">Eaque blanditiis nemo</a>
                        </li>
                    </ul>

                    <p>
                        Frankfurter pancetta kevin short loin pork belly. Filet mignon corned beef tri-tip, landjaeger pancetta capicola short ribs cow ham hock swine shoulder. Sirloin strip steak short ribs corned beef porchetta biltong.
                    </p>


                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs topmargin_40" role="tablist">
                        <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Biography</a></li>
                        <li><a href="#tab2" role="tab" data-toggle="tab">Skills</a></li>
                        <li><a href="#tab3" role="tab" data-toggle="tab">Send Message</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content big-padding top-color-border bottommargin_40">

                        <div class="tab-pane fade in active" id="tab1">
                            <h4 class="topmargin_0 weight-black">Biography:</h4>
                            <p>
                                Ut wisi enim ad minim veniaquis nostrud exetation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Dutem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit.
                            </p>
                            <h4 class="weight-black">Professional Life:</h4>
                            <p>
                                Dutem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit. Praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                            </p>

                        </div>

                        <div class="tab-pane fade" id="tab2">
                            <p class="bottommargin_10">
                                <strong class="grey">Skill Name</strong>
                            </p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="90">
                                    <span>90%</span>
                                </div>
                            </div>

                            <p class="bottommargin_10">
                                <strong class="grey">Skill Name</strong>
                            </p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="100">
                                    <span>100%</span>
                                </div>
                            </div>

                            <p class="bottommargin_10">
                                <strong class="grey">Skill Name</strong>
                            </p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="75">
                                    <span>75%</span>
                                </div>
                            </div>

                            <p class="bottommargin_10">
                                <strong class="grey">Skill Name</strong>
                            </p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="95">
                                    <span>95%</span>
                                </div>
                            </div>


                        </div>

                        <div class="tab-pane fade" id="tab3">
                            <form class="contact-form" method="post" action="./">
                                <p class="contact-form-name">
                                    <!-- <label for="name">Name <span class="required">*</span></label> -->
                                    <input type="text" aria-required="true" size="30" value="" name="name" class="form-control" placeholder="Name">
                                </p>
                                <p class="contact-form-email">
                                    <!-- <label for="email">Email <span class="required">*</span></label> -->
                                    <input type="email" aria-required="true" size="30" value="" name="email" class="form-control" placeholder="Email Address">
                                </p>
                                <p class="contact-form-message">
                                    <!-- <label for="message">Message</label> -->
                                    <textarea aria-required="true" rows="4" cols="45" name="message" class="form-control" placeholder="Message"></textarea>
                                </p>
                                <p class="contact-form-submit topmargin_30">
                                    <button type="submit" name="contact_submit" class="theme_button color1">Send Message</button>
                                </p>
                            </form>
                        </div>
                    </div>
                    <!-- eof .tab-content -->

                    <p>
                        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet rem ipsum dolorsit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.
                    </p>

                    <blockquote class="text-center">
                        Occaecat shankle swine kielbasa venison labore cupidatat rump pancetta short ribs. Flank et id cupim jerky fugiat. Brisket aliquip dolore.
                        <div class="item-meta">
                            <h4 class="margin_0">Ray Cunningham</h4>
                            <p class="small-text highlight3">Client</p>
                        </div>
                    </blockquote>

                    <p>
                        Ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    </p>

                </div>

            </div>
        </div>
    </section>
@endsection