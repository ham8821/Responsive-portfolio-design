
    <div style="display:none;">
        <div id="ninja-slider3">
            <div class="slider-inner">
                <ul>
                <li>
                        <a class="ns-img" href="images/itonline1.png"></a>
                        <div class="caption">
                        </div>
                    </li>
                    <li>
                        <a class="ns-img" href="images/itonline2.png"></a>
                        <div class="caption">
                        </div>
                    </li>
                    <li>
                        <a class="ns-img" href="images/itonline3.png"></a>
                        <div class="caption">
                        </div>
                    </li>
                    <li>
                        <a class="ns-img" href="images/itonline4.png"></a>
                        <div class="caption">
                        </div>
                    </li>
                </ul>
                <div id="fsBtn3" class="fs-icon" title="Expand/Close"></div>
            </div>
        </div>
    </div>


    <style>
    body {
        font: normal 0.9em Arial;
        margin: 0;
        background: #f5f5f5;
    }

    a {
        color: #1155CC;
    }

    ul li {
        padding: 10px 0;
    }

    header {
        display: block;
        padding: 60px 0 10px;
        background-color: #191919;
        text-align: center;
    }

    header a {
        font-family: sans-serif;
        font-size: 24px;
        line-height: 24px;
        padding: 8px 13px 7px;
        color: #4d5256;
        text-decoration: none;
        transition: color 0.7s;
    }

    header a.active {
        font-weight: bold;
        width: 24px;
        height: 24px;
        padding: 4px;
        text-align: center;
        display: inline-block;
        border-radius: 50%;
        background: #4d5256;
        color: #191919;
    }

    .gallery img {
        width: 179px;
        cursor: pointer;
    }

    /* Visit http://www.menucool.com/responsive-slider for instructions */

    #ninja-slider3 {
        width: 100%;
        background: #191919;
        padding: 0;

        margin: 0 auto;
        overflow: hidden;
        box-sizing: border-box;
    }


    #ninja-slider3 #fsBtn3 {
        top: 6px;
        right: 6px;
        width: 60px;
        height: 26px;
        background: rgba(0, 0, 0, 0.2);
        z-index: 2;
        color: white;
        text-align: center;
        text-shadow: 0 0 3px black;
        font: bold 18px/36px arial;
        border-radius: 2px;
        opacity: 1;
        -webkit-transition: opacity 0.8s;
        transition: opacity 0.8s;
    }

    #ninja-slider3 .slider-inner:hover #fsBtn3,
    #ninja-slider3.fullscreen #fsBtn3 {
        opacity: 1;
    }

    #ninja-slider3 #fsBtn3::before {
        content: "EXPAND";
        display: block;
    }

    #ninja-slider3.fullscreen #fsBtn3::before {
        content: "+";
        display: block;
        font-weight: bold;
        font-size: 3em;
        transform: rotate(-45deg);
    }

    #ninja-slider3 .slider-inner {
        /*max-width:700px;*/
        margin: 0 auto;
        /*center-aligned */
        font-size: 0px;
        position: relative;
        box-sizing: border-box;
        padding-bottom: 100px !important;
    }

    #ninja-slider3.fullscreen .slider-inner {
        width: 98%;
        /* 100% will cause a big top gap issue in iPhone*/
        max-width: 900px;
    }

    #ninja-slider3 ul {
        position: relative;
        list-style: none;
        padding: 0;
        box-sizing: border-box;

        overflow: visible !important;
        /*For showing captions outside the slider when transitionType is "fade". */
    }

    #ninja-slider3 li {

        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        position: absolute;
        font-size: 12px;
        list-style: none;
        margin: 0;
        padding: 0;
        opacity: 1;
        /*overflow:hidden;*/
        /*Comment it out to show the caption*/
        box-sizing: border-box;

        margin-bottom: 100px !important;
    }

    #ninja-slider3 li.ns-show {
        opacity: 1;
    }



    /* --------- slider image ------- */
    #ninja-slider3 .ns-img {
        background-size: contain;
        /*Note: If transitionType is zoom, it will be overridden to cover.*/
        cursor: default;
        display: block;
        position: absolute;
        width: 100%;
        height: 100vh;
        background-repeat: no-repeat;
        background-position: center center;
    }


    /*---------- Captions -------------------*/
    #ninja-slider3 .caption {
        position: absolute;
        top: 98%;
        padding: 0 40px;
        margin: auto;
        width: 100%;
        text-align: center;
        font-family: sans-serif;
        font-size: 14px;
        color: #ccc;
        box-sizing: border-box;
    }


    /* ---------Arrow buttons ------- */
    /* The arrow button id should be: slider id + ("-prev", "-next", and "-pause-play") */
    #ninja-slider3-pause-play {
        display: none;
    }

    #ninja-slider3-prev,
    #ninja-slider3-next {
        position: absolute;
        display: inline-block;
        width: 42px;
        height: 56px;
        line-height: 56px;
        top: 40%;
        /* not 50% as caption at bottom should be counted.*/
        margin-top: -28px;
        background-color: rgba(0, 0, 0, 0.4);
        background-color: #ccc\9;
        /*IE8 hack*/
        backface-visibility: hidden;
        color: white;
        overflow: hidden;
        white-space: nowrap;
        -webkit-user-select: none;
        user-select: none;
        border-radius: 2px;
        z-index: 10;
        opacity: 0.3;
        font-family: sans-serif;
        font-size: 13px;
        cursor: pointer;
        -webkit-transition: all 0.7s;
        transition: all 0.4s;
    }

    .slider-inner:hover #ninja-slider3-prev,
    .slider-inner:hover #ninja-slider3-next {
        opacity: 1;
    }


    #ninja-slider3-prev {
        left: -42px;
        /*set it with a positive value if .slider-inner does not have max-width setting.*/
    }

    #ninja-slider3-next {
        right: -42px;
    }

    /* arrows */
    #ninja-slider3-prev::before,
    #ninja-slider3-next::before {
        position: absolute;
        top: 17px;
        content: "";
        display: inline-block;
        width: 20px;
        height: 20px;
        border-left: 2px solid white;
        border-top: 2px solid white;
        backface-visibility: hidden;
    }

    #ninja-slider3-prev::before {
        -ms-transform: rotate(-45deg);
        /*IE 9*/
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        left: 16px;
    }

    #ninja-slider3-next::before {
        -ms-transform: rotate(135deg);
        /*IE 9*/
        -webkit-transform: rotate(135deg);
        transform: rotate(135deg);
        right: 16px;
    }


    /*pagination num within the arrow buttons*/
    #ninja-slider3-prev:hover,
    #ninja-slider3-next:hover {
        width: 80px;
        background-color: rgba(0, 0, 0, 0.5);
    }

    #ninja-slider3-prev div {
        margin-right: 8px;
        white-space: nowrap;
        opacity: 1;
        float: right;
    }

    #ninja-slider3-next div {
        margin-left: 8px;
        white-space: nowrap;
        opacity: 1;
        float: left;
    }

    #ninja-slider3-prev:hover div,
    #ninja-slider3-next:hover div {
        opacity: 1;
    }


    /*------ pager(nav bullets) ------*/
    /* The pager id should be: slider id + "-pager" */
    #ninja-slider3-pager {
        display: none;
    }

    #ninja-slider3-prev,
    #ninja-slider3-next,
    #ninja-slider3-pause-play {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        user-select: none;
    }


    /*Responsive settings*/

    @media only screen and (max-width:1050px) {

        #ninja-slider3-prev {
            left: 0;
        }

        #ninja-slider3-next {
            right: 0;
        }
    }

    @media only screen and (max-width:600px) {

        #ninja-slider3-prev,
        #ninja-slider3-next,
        #ninja-slider3-pager {
            display: none;
        }


        #ninja-slider3 li .cap1 {
            font-size: 20px;
        }
    }
</style>