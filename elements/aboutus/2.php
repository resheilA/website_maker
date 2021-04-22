<style>
body{margin-top:20px;}

.masthead {
    padding: 3rem 0 7rem;
    position: relative;
    background-color: #dd3d31;
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
    height: 100%;
    width: 100%;
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
            <div class="col-lg-7 py-5">
                <h1 class="mb-4">About Us!</h1>
                <h2 class="m-0"><p><?php echo $content_business[0]["about_us"]; ?></p></h2>
            </div>                        
        </div>
    </div>
    <svg style="pointer-events: none" class="wave" width="100%" height="50px" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
        <defs>
            <style>
                .a {
                    fill: none;
                }
                
                .b {
                    clip-path: url(#a);
                }
                
                .c,
                .d {
                    fill: #f9f9fc;
                }
                
                .d {
                    opacity: 0.5;
                    isolation: isolate;
                }
            </style>
            <clipPath id="a">
                <rect class="a" width="1920" height="75"></rect>
            </clipPath>
        </defs>
        <title>wave</title>
        <g class="b">
            <path class="c" d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48"></path>
        </g>
        <g class="b">
            <path class="d" d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10"></path>
        </g>
        <g class="b">
            <path class="d" d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24"></path>
        </g>
        <g class="b">
            <path class="d" d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150"></path>
        </g>
    </svg>
</header>