<!--========================= Choose Language Section========================= -->
<section>
    <div class="container mt-5">
        <div class="text-center justify-content-left mx-auto mb-5 wow fadeInUp mt-5" data-wow-delay="0.1s">
            <h4 class="section-title text-center text-primary px-3 mb-5">Holland Code Career Test</h4>

            <p>Take this <strong>FREE </strong>career test to discover your interest in different types of
                careers in the world and find your most suitable job catergaries to work.</p>
            <p>Be yourself and answer honestly, This is a great chance to discover the tasks to do and avoid
                with your next steps towards the career. This free career quiz uses the scientific Holland Code
                model to show you which jobs will suit your interests, talents, and aptitude.</p>
            <p class="mb-4">In this model there are six career interest areas such as Building, Thinking,
                Helping, Creating, Persuading and Organising. At the end of the test you can go through your
                report and download the report in PDF format if you wish.</p>
        </div>
        <div class="row justify-content-center">
            <div class="card choose-language" style="max-width: 400px;">
                <img class="card-img-top" src="../assets/img/choose.png" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">Choose your language</h5>
                    <p class="card-text">You may continue with your convenient language</p>
                
                <form action="holland-code-career-test.php" method="POST">
                    <div class="form-check mt-4 mb-3">
                        <input class="form-check-input" type="radio" name="lang" id="english" value="english"
                            required="required" checked>
                        <label class="form-check-label option english" for="english">
                           <span>English</span>
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="lang" id="sinhala" value="sinhala">
                        <label class="form-check-label option sinhala" for="sinhala">
                        <span>සිංහල</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="lang" id="tamil" value="tamil">
                        <label class="form-check-label option tamil" for="tamil">
                        <span>தமிழ்</span>
                        </label>
                    </div>
    
                    <div class="form-group text-center pt-3 pb-3 ps-4">
                        <input class="btn btn-success" type="submit" name="submit" value="Start" />
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!--========================= End Choose Language Section========================= -->