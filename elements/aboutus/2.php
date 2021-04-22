<style>
body{margin-top:20px;}

.masthead {
    padding: 3rem 0 7rem;
    position: relative;
    background-color: inherit;
    background-image: url(https://startbootstrap.com/assets/img/overlay.svg), linear-gradient(45deg, #dd3d31 0%, #d22f23 100%);
    background-size: cover;
    z-index: 0
}

.masthead svg.wave {
    position: absolute;
    bottom: -1px;
    left: 0
}

.masthead h1 {
    color: #fff;
    font-weight: 700;
    font-size: 2rem;
    line-height: 1.1;
    z-index: 1
}

.masthead h2 {
    color: rgba(255, 255, 255, .6);
    font-weight: 600;
    z-index: 1;
    font-size: 1.2rem
}

.masthead a {
    color: rgba(255, 255, 255, .8);
    text-decoration: underline;
    z-index: 1
}

.masthead a:hover {
    color: #fff
}

.masthead a:active {
    text-decoration: none
}

@media(min-width:992px) {
    .masthead h1 {
        font-size: 3rem
    }
    .masthead h2 {
        font-size: 1.5rem
    }
}

.masthead .masthead-cards {
    position: relative;
    z-index: 1
}

.masthead .masthead-cards .shape {
    position: absolute;   
    background-color: rgba(255, 255, 255, .3);
    top: 0;
    left: 0;
    z-index: -1;
    border-radius: 30% 70% 70% 30%/30% 30% 70% 70%
}

.masthead .masthead-cards .card {
    opacity: 1;
    font-size: .8rem;
    text-transform: uppercase;
    font-weight: 800;
    letter-spacing: .05rem;
    color: #212529;
    transition: .15s all
}

.masthead .masthead-cards .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem
}

.masthead .masthead-cards .card:active {
    margin-top: inherit;
    margin-bottom: inherit
}

.masthead .masthead-cards .card.border-bottom-blue:hover {
    color: #2092ed
}

.masthead .masthead-cards .card.border-bottom-green:hover {
    color: #28a745
}

.masthead .masthead-cards .card.border-bottom-red:hover {
    color: #dd3d31
}

.masthead .masthead-cards .card.border-bottom-yellow:hover {
    color: #ffc107
}

.masthead-page {
    padding: 1rem 0 4rem
}

@media(min-width:992px) {
    .masthead-page h1 {
        font-size: 2.5rem
    }
}

.border-bottom-yellow {
    border-color: #ffc107!important;
}

.border-bottom-red {
    border-color: #dd3d31!important;
}

.border-bottom-blue {
    border-color: #2092ed!important;
}

.border-bottom-green {
    border-color: #28a745!important;
}

.border-bottom-blue, .border-bottom-green, .border-bottom-red, .border-bottom-yellow {
    border-bottom: .4rem solid!important;
}
.shadow-lg {
    box-shadow: 0 2rem 1.5rem -1.5rem rgba(33,37,41,.15),0 0 1.5rem .5rem rgba(33,37,41,.05)!important;
}
.border-0 {
    border: 0!important;
}
</style>
<header class="masthead">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 py-2">
                <h1 class="mb-4">About Us!</h1>
                <h2 class="m-0"><p><?php echo $content_business[0]["about_us"]; ?></p></h2>
            </div>                        
        </div>
    </div>
    
</header>