<div style="display:none;">
    <div id="ninja-slider5">
        <div class="slider-inner">
            <ul>
                <li>
                    
                        <div class="video">
                        <iframe src="https://www.youtube.com/embed/VCkWTlGqBOs" frameborder="0" allowfullscreen data-autoplay="false" width="100%;" height="100%"></iframe>
                        </div>
                    </div>

                </li>

            </ul>
            <!-- <div class="fs-icon"></div> -->
            <div id="fsBtn5" class="fs-icon" title="Expand/Close"></div>

        </div>
    </div>
</div>


<style>
#ninja-slider5 {
    width:100%;
    background:#333;
    padding: 30px 0;
    margin:0 auto;
    overflow:hidden;
    box-sizing:border-box;
}

#ninja-slider5.fullscreen {
    background:black;
}

#ninja-slider5 #fsBtn5 {
    top:10px;
    right:6px;
    width:60px;
    height:26px;
    background: rgba(0,0,0,0.3);
    z-index:2;
    color:white;
    text-align:center;
    font:bold 11px/26px arial;
    border:1px solid rgba(255,255,255,0.3);
    border-radius:2px;
    opacity:0;
    -webkit-transition:opacity 0.8s;
    transition:opacity 0.8s;
}

#ninja-slider5 .slider-inner:hover #fsBtn5,
#ninja-slider5.fullscreen #fsBtn5 {
    opacity: 1;
}

#ninja-slider5 #fsBtn5::before {      
    content:"EXPAND";
    display:block;
}

#ninja-slider5.fullscreen #fsBtn5::before {
    content:"CLOSE";
}

#ninja-slider5 .slider-inner {
    max-width:800px;
    margin:0 auto;/*center-aligned */
    font-size:0px;
    position:relative;
    box-sizing:border-box;
}

#ninja-slider5.fullscreen .slider-inner {
    width:100%;
    max-width:950px;
}

#ninja-slider5 ul {
    /*overflow:hidden;*/
    position:relative;
    list-style:none;
    padding:0;
    box-sizing:border-box;
}

#ninja-slider5 li {
    
    width:100%;
    height:100%;
    top:0;
    left:0;
    position: absolute;
    font-size:12px;
    list-style:none;
    margin:0;
    padding:0;
    opacity:0;
    overflow:hidden;
    box-sizing:border-box;
}

#ninja-slider5 li.ns-show {
    opacity:1;
}


/* --------- slider image ------- */  
#ninja-slider5 .ns-img {
    background-color:rgba(0,0,0,0.3);
    background-size:contain;/*Note: If transitionType is zoom, it will be overridden to cover.*/

    /*decorate border*/
    box-shadow: 0 1px 5px rgba(0,0,0,.8),inset 0 0 2px rgba(255,255,255,.4);
    border-radius:4px;

    cursor:default;
    display:block;
    position: absolute;
    width:100%;
    height:100%;
    background-repeat:no-repeat;
    background-position:center center;
}


/*---------- Captions -------------------*/
#ninja-slider5 .caption {
    padding:20px 40px;
    margin:auto;
    left:0;right:0;
    top:auto;bottom:8%;
    width:50%;
    text-align:center;
    font-family:sans-serif;
    font-size:2.2em;
    color:#fff;
    background:rgba(0,0,0,0.6);
    border:1px solid rgba(255,255,255,0.4);
    border-radius:4px;
    position:absolute;
    box-sizing:border-box;
    opacity:0;
    -webkit-transition:opacity 1s ease-in;
    transition:opacity 1s ease-in;
}
#ninja-slider5 li[class*='-s'] .caption {
    opacity:1;
}


/* ---------If there are videos ------- */ 
#ninja-slider5 .video, .video-playbutton-layer 
{
    top:0; left:0; border:0;
    width: 100%;height: 100%;
    text-align: center;
    background: black;
    position: absolute;    
}

/* And if you have added the HTML: <div class="video-playbutton-layer"></div> */
.video-playbutton-layer {
    background: transparent url(video-btn.png) no-repeat center center;
    cursor:pointer;
}

/* And if you have YouTube or Vimeo */
#ninja-slider5 div.stopVideoIcon 
{
    position:absolute;
    width:30px;height:30px;
    top:0;right:0px;
    margin:0 0 6px 6px;
    background:rgba(0,0,0,0.7);
    border-bottom-left-radius:4px;
    cursor:pointer;
}
#ninja-slider5 div.stopVideoIcon::before {
    content:"+";
    color:white;
    font:bold 30px/30px arial;
    -webkit-transform:rotate(45deg);
    transform: rotate(45deg);
    display:block;
}


/* ---------Arrow buttons ------- */   
/* The arrow button id should be: slider id + ("-prev", "-next", and "-pause-play") */   
#ninja-slider5-pause-play { display:none;} 

#ninja-slider5-prev, #ninja-slider5-next
{
    position: absolute;
    display:inline-block;
    width:60px;
    height:100px;
    line-height:100px;
    top: 50%;
    margin:0;
    margin-top:-65px;/*pager's height should also be counted*/
    background-color:none;
    background-color:#ccc\9;/*IE8 hack*/
    backface-visibility:hidden;
    color:white;
    overflow:hidden;
    white-space:nowrap;
    -webkit-user-select: none;
    user-select:none;
    border-radius:3px; 
    z-index:10;
    opacity:0.2;
    cursor:pointer;
    font-family:sans-serif;
    font-size:11px;
    cursor:pointer;
    -webkit-transition:all 0.7s;
    transition:all 0.7s;
    -webkit-transform:scale(1,1.3);
    transform:scale(1,1.3);
    /*border:1px solid white;*/
}
#ninja-slider5-prev:hover, #ninja-slider5-next:hover {
    opacity:1;
    /*background-color:rgba(0,0,0,0.4);*/
}

#ninja-slider5-prev {
    left: -70px;
}

#ninja-slider5-next {
    right: -70px;
}

/*pagination within the prev/next buttons*/
#ninja-slider5-prev div {opacity:0;margin-left:30px;transition:opacity 0.7s;}
#ninja-slider5-next div {opacity:0;float:right;margin-right:30px;transition:opacity 0.7s;}
#ninja-slider5-prev:hover div, #ninja-slider5-next:hover div{opacity:1;}

/* arrows */
#ninja-slider5-prev::before, #ninja-slider5-next::before {
    position: absolute;
    top: 25px;
    content: "";
    display: inline-block;
    width: 50px;
    height: 50px;
    border-left: 3px solid #ccc;
    border-top: 3px solid #ccc;
}

#ninja-slider5-prev::before {
    -ms-transform:rotate(-45deg);/*IE 9*/
    -webkit-transform:rotate(-45deg);
    transform: rotate(-45deg);
    backface-visibility:hidden;
    right:-16px;
}

#ninja-slider5-next::before {
    -ms-transform:rotate(135deg);/*IE 9*/
    -webkit-transform:rotate(135deg);
    transform: rotate(135deg);
    backface-visibility:hidden;
    left:-16px;
}



/*------ pager(nav bullets) ------*/      
/* The pager id should be: slider id + "-pager" */
/* #ninja-slider5-pager { display:none;}*/
#ninja-slider5-pager
{
    padding-top:30px; /* set the distance away from the slider */
    margin:0 auto; /* center align */
    text-align:center;
    display:table;
    font-size:0;
}
         
#ninja-slider5-pager a 
{
    display:inline-block;
    width: 10px;
    height: 10px;
    background-color: #888;
    font-size:0; /* Non-zero will show the index num */
    margin:2px 6px;
    cursor:pointer;
    border-radius:10px;
    box-shadow:inset 0 1px 3px #666666;
}

#ninja-slider5-pager a:hover 
{
    opacity:0.6;
}
#ninja-slider5-pager a.active 
{
    background-color:#ccc;
    box-shadow:0 1px 1px rgba(0,0,0,.5);
}

   

#ninja-slider5-pager, #ninja-slider5-prev, #ninja-slider5-next, #ninja-slider5-pause-play
{
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    user-select: none;
}


/*------ Responsive settings ------*/
@media only screen and (max-width:950px){
    
    #ninja-slider5-prev {
        left: -12px;
    }

    #ninja-slider5-next {
        right: -12px;
    }
}

@media only screen and (max-width:600px){
      
    #ninja-slider5-prev, #ninja-slider5-next, #ninja-slider5-pager {
        display:none;
    }
}



</style>