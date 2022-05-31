<section id="banner-section">
    <div class="banner-content d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="top-area justify-content-center text-center">
                            <h3>Play Unlimited</h3>
                            <h1>Tournaments</h1>
                            <p>Compete in Free and Paid entry Tournaments. Transform your
                                games to real money eSports</p>
                            <div class="btn-play d-flex justify-content-center align-items-center">
                                <a href="/register" class="cmn-btn">Get Started</a>
                                <a href="#" class="mfp-iframe popupvideo">
                                    <img src="images/play-icon.png" alt="play">
                                </a>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="bottom-area text-center">
                                            <img src="images/versus.png" alt="banner-vs">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ani-illu">
                <img class="left-1 wow fadeInUp" src="images/left-banner.png" alt="image">
                <img class="right-2 wow fadeInUp" src="images/right-banner.png" alt="image">
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->

<!-- Available Game In start -->
<section id="available-game-section">
    <div class="overlay pb-120">
        <div class="container wow fadeInUp">
            <div class="main-container">
                <div class="row justify-content-between">
                    <div class="col-lg-10">
                        <div class="section-header">
                            <h2 class="title">Available Games</h2>
                            <p>We are constantly adding new games</p>
                        </div>
                    </div>
                </div>
                <div class="available-game-carousel">



                  @foreach($games as $game)
                    <div class="single-item">
                        <a href=""><img src="{{'Games/'.$game->image}}" alt="image"></a>
                    </div>
                  @endforeach
                </div>
                <div class="btn-area text-center">
                    <a href="{{ route('tournaments.index') }}" class="cmn-btn">View All</a>
                </div>
            </div>
        </div>
    </div>
</section>
