<!--========================= Report Section========================= -->
<section>
    <div class="container">
        <div class="section-title text-center mt-4">
            <span data-aos="fade-up">Results</span>
            <div class="text-left">
                <p data-aos="fade-up">Welcome to your career report! There's a lot of information here, so take your
                    time and read through it at your own pace.</p>
                <p data-aos="fade-up">Your report is split up into different sections, each of which addresses a
                    different factor in your career search. You'll learn about your interests, your personality, and the
                    jobs and work environments that suit you best. You'll get personalized advice and suggestions for
                    exploring your career options and planning a successful job search.</p>
                <p data-aos="fade-up">You can read your report straight through, or you can skip to the sections that
                    interest you most.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                let's get started!
            </div>
            <div class="card-body ml-2 mr-2">

                <h4 class="card-title">Your Career Interest Profile</h4>
                <p class="card-text">This section shows your top career interest areas. There are 6 total interest
                    areas, each with its own set of typical work tasks, roles, and values. Some of these interest areas
                    will appeal to you, while others will be less attractive. Choosing a career which is a good match
                    for your interest profile ensures that you enjoy your daily work and get satisfaction out of your
                    accomplishments.</p>

                <?php include('career-interest-graph.inc.php'); ?>

                <!--Interest areas explanation-->
                <h4 class="card-title mt-4">The Six Interest Areas</h4>
                <p class="card-text">Each of the six interest areas describes a cluster of related work tasks and
                    activities. People who
                    are drawn to each of these interest areas tend to have certain characteristics, preferences, and
                    personality traits
                    in common.</p>

                <div class="row align-middle border-0 pt-3 ml-2 mr-2">
                    <div class="col-md-2"><strong>Building</strong></div>
                    <div class="col-md-10">Building jobs involve the use of tools, machines, or physical skill. Builders
                        like working
                        with their hands and bodies, working with plants and animals, and working outdoors.</div>
                    <div class="col-md-2 mt-3"><strong>Thinking</strong></div>
                    <div class="col-md-10 mt-2">Thinking jobs involve theory, research, and intellectual inquiry.
                        Thinkers like working
                        with ideas and concepts, and enjoy science, technology, and academia.</div>
                    <div class="col-md-2 mt-3"><strong>Creating</strong></div>
                    <div class="col-md-10 mt-2">Creating jobs involve art, design, language, and self-expression.
                        Creators like working
                        in unstructured environments and producing something unique.</div>
                    <div class="col-md-2 mt-3"><strong>Helping</strong></div>
                    <div class="col-md-10 mt-2">Helping jobs involve assisting, teaching, coaching, and serving other
                        people. Helpers
                        like working in cooperative environments to improve the lives of others.</div>
                    <div class="col-md-2 mt-3"><strong>Persuading</strong></div>
                    <div class="col-md-10 mt-2">Persuading jobs involve leading, motivating, and influencing others.
                        Persuaders like
                        working in positions of power to make decisions and carry out projects.</div>
                    <div class="col-md-2 mt-3"><strong>Organising</strong></div>
                    <div class="col-md-10 mt-2">Organizing jobs involve managing data, information, and processes.
                        Organizers like to
                        work in structured environments to complete tasks with precision and accuracy.</div>
                </div>
                <!--End of Interest areas explanation-->

                <!--Top Interest areas explanation-->
                <h4 class="card-title mt-4">Your Top Interests</h4>
                <p class="card-text">Your primary interest area is also called your career type. Your career type
                    describes the kind of
                    job tasks and activities you enjoy doing, as well as what motivates and satisfies you at work.
                    Certain personality
                    traits and characteristics are associated with each career type.</p>
                <!--End of Top Interest areas explanation-->
                <!--Primary interest area-->
                <?php include('primary-building.inc.php'); ?>
                <!--End of Primary interest area-->
            </div>
        </div>
    </div>
</section>
<!--========================= End Report Section========================= -->