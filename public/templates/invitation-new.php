<script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.5.0/fabric.min.js"></script>
<script>
    if (!sessionStorage.getItem('pageReloaded')) {
        sessionStorage.setItem('pageReloaded', 'true');
        window.location.reload();
    }
</script>
<link rel="stylesheet" href="https://searchmarketingservices.online/fonts/index.css">
<link href="/style.css" rel="stylesheet">
<script src="https://unpkg.com/fabric@5.3.0/dist/fabric.min.js"></script>

<style>
    body {
        background-color: #e9e9e9;
    }

    .sidebaraddtext {
        overflow: scroll;
    }
 #webtoolsdiv .topbtns{
    font-size: 1.2rem !important;
 }
    #logo {
        padding: none;
        margin: 0px;
    }

    .icon1 {
        font-size: 0.85em !important;
    }

    .borderPc>img {
        height: 120px;
        width: 100px;

    }

    #imgDiv {
        height: 540px;
    }

    #logo {
        padding: none;
        margin: 0px;
    }

    .footer {
        position: fixed;
        bottom: 0;
        left: 50%;
        transform: translate(-50%, 0%);
        background-color: #eee;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        margin-top: 20em;
        max-width: 30em;
        border-radius: 20px 20px 0 0;
    }

    .icon1 {
        font-size: 1em;
        padding: .5em;
        margin: .5em;
        margin-top: 0;
        transition: .5s ease-in-out;
        border-radius: 100%;
        border: 7px solid #eee;
    }

    .active1 {
        transform: scale(1.25) translateY(-1em);
        background: linear-gradient(135deg, #23f, #6589ff);
        border: 7px solid #dcdcdc;
        width: fit-content;
        height: fit-content;
        position: relative;
        padding: 50px;
        top: 10px;

        color: white;
    }

    .controls {
        display: flex;
        flex-direction: column;
    }

    button {
        background-color: #fff;
        color: #000;
        border: 1px solid #000;
        border-image: linear-gradient(to bottom, #000, #b88a00);
        border-image-slice: 1;
        padding: 4px 8px;
        cursor: pointer;
        margin-bottom: 4px;
        display: block;
        width: 100px;
        box-sizing: content-box;
    }

    button:hover {
        background-color: #000;
        color: #fff;
    }

    .color-picker-container {
        margin-bottom: 8px;
    }

    .color-picker-label {
        margin-bottom: 4px;
    }

    .color-picker {
        width: 100%;
    }

    .moveForward,
    .moveBackward {
        width: 100px;
        /* Set the same width as other buttons */
    }

    #opacityLabel,
    #opacityRange {
        width: 100%;
        margin-bottom: 8px;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropbtn {
        background-color: #fff;
        color: #000;
        border: 1px solid #000;
        border-image: linear-gradient(to bottom, #000, #b88a00);
        border-image-slice: 1;
        padding: 4px 8px;
        cursor: pointer;
        width: 120px;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content button {
        display: block;
        width: 100%;
        text-align: left;
        padding: 8px;
        border: none;
        background: none;
        cursor: pointer;
    }

    .dropdown-content button:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .disabled-button {
        cursor: not-allowed;
        opacity: 0.5;
        pointer-events: none;
    }


    :root {
        --button-background: dodgerblue;
        --button-color: white;

        --dropdown-highlight: dodgerblue;
        --dropdown-width: 160px;
        --dropdown-background: white;
        --dropdown-color: black;
    }

    /* Boring button styles */
    a.button {
        /* Frame */
        display: inline-block;
        padding: 10px 18px;
        box-sizing: border-box;

        /* Style */
        border: none;
        background: rgb(212, 212, 212);
        color: rgb(33, 33, 33);
        font-size: 16px;
        border-radius: 10px;
        cursor: pointer;
        text-decoration: none;
    }

    a.button:active {
        filter: brightness(75%);
    }

    /* Dropdown styles */
    .dropdown {
        position: relative;
        padding: 0;
        border: none;
    }

    .dropdown summary {
        list-style: none;
        list-style-type: none;
    }

    .dropdown>summary::-webkit-details-marker {
        display: none;
    }

    .dropdown summary:focus {
        outline: none;
    }

    .dropdown summary:focus a.button {
        border: 2px solid white;
    }

    .dropdown summary:focus {
        outline: none;
    }

    .dropdown ul {
        position: absolute;
        margin: 20px 0 0 0;
        padding: 20px 0;
        height: 300px;
        overflow: auto;
        width: var(--dropdown-width);
        /* left: 10%; */
        /* margin-left: calc((var(--dropdown-width) / 2) * -1); */
        box-sizing: border-box;
        z-index: 2;
        background: rgb(231, 231, 231);
        border-radius: 6px;
        list-style: none;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
    }

    .dropdown ul li {
        padding: 0;
        margin: 0;
    }

    .dropdown ul li a:link,
    .dropdown ul li a:visited {
        display: inline-block;
        padding: 10px 0.8rem;
        width: 100%;
        box-sizing: border-box;

        color: var(--dropdown-color);
        text-decoration: none;
    }

    .dropdown ul li a:hover {
        background-color: var(--dropdown-highlight);
        color: var(--dropdown-background);
    }

    /* Dropdown triangle */
    .dropdown ul::before {
        content: ' ';
        position: absolute;
        width: 0;
        height: 0;
        top: -10px;
        left: 50%;
        margin-left: -10px;
        border-style: solid;
        border-width: 0 10px 10px 10px;
        border-color: transparent transparent var(--dropdown-background) transparent;
    }


    /* Close the dropdown with outside clicks */
    .dropdown>summary::before {
        display: none;
    }

    .dropdown[open]>summary::before {
        content: ' ';
        display: block;
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        z-index: 1;
    }


    /* Tooltip Container */
    #custom-tooltip {
        display: none;
        position: absolute;
        background-color: #f3eadf;
        color: #000;
        border-radius: 8px;
        padding: 10px;
        font-size: 14px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        z-index: 9999;
    }

    /* Tooltip Arrow */
    #custom-tooltip::after {
        content: '';
        position: absolute;
        border-style: solid;
        border-width: 8px 0 8px 8px;
        /* modified to have the curve on the right */
        border-color: transparent transparent transparent #f3eadf;
        /* modified to match background color */
        top: 50%;
        right: -8px;
        /* modified to position on the right side */
        transform: translateY(-50%);
    }

    .modal-for-view-cards .modal-dialog.modal-xl {
    height: 100vh !important;
    margin: 0 !important;
    display: block !important;
    align-items: center !important;
    width: 100% !important;
    max-width: 100% !important;
    min-height: 100vh !important;
}

.modal-for-view-cards .modal-dialog.modal-xl>div {
    height: 100vh !important;
}

.topBar{
    margin-top: -70px!important;
}
.myCardView{
    padding-bottom: 175px;
}
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-end">
            <div class="d-flex align-items-center justify-content-end" onclick="showTutorial()">
                <div id="custom-tooltip" style="display: none; margin-right: 88px;">Tutorial</div>
                <i class="fal fa-question-circle" id="tooltip-icon"
                    style="cursor: pointer; font-size: 23px; margin-right: 53px; color: #000000;"></i>
            </div>
        </div>
    </div>
</div>

<div id="popUpDiv" style="
position: fixed;
z-index: 99999;
padding: 25px;
background: #f3eadf;
border-radius: 25px;
width: 444px;
box-shadow: 3px 2px 34px 0px rgba(0,0,0,0.75);
-webkit-box-shadow: 3px 2px 34px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 3px 2px 34px 0px rgba(0,0,0,0.75);
right: 16px;
width: 408px;
display: none;
" id="popUpWin">
    <p style="
    text-align: center;
    font-size: 25px;
    font-weight: bold;
    padding: 0;
    margin: 0;
">Tutorial</p>
    <iframe width="350" height="200" src="https://www.youtube.com/embed/AOB-idv4Xw0?si=QRhEwwjSOwQaXyl8"
        title="Invitation Page" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    <button style="
    position: absolute;
    border: 0;
    background: red;
    color: white;
    border-radius: 50%;
    top: -4px;
    right: -4px;
    width: 30px;
    height: 30px;
" onclick="closePopup()">X</button>
</div>


<div style="position: fixed; top: 87px; right: 0px; z-index: 9999; display: flex; flex-direction: column;">
    <button id="toolsbuttonid" class="btn"
        style="background-color: rgb(102, 51, 153); color: white; border: none !important; padding: 10px 0px; width: 50px;"
        onclick="showDiv()" style="width: 89%;">Tools</button>

    <div class="col-md-1 mt-2">
        <button class="btn btn-sm btn-success me-2 SaveBtn" style="padding: 10px 0px; width: 50px;" id="toolsbuttonid"
            onclick="saveAll()">Save</button>
    </div>
</div>
<!-- Mobile TOPBAR -->
<div id="myDiv" style="display: none;">
    <div class="topBar">
        <div class="d-flex justify-content-start align-items-center"
            style="margin-top: 60px; overflow: scroll; z-index: 1000;">
            <div class="col-auto"><label for="" class="btn topbtns" onclick="sidebarbackaddimg()">+ Add Card</label>
            </div>
            <div class="col-auto"><label for="" class="btn topbtns" onclick="addTemplate()">+ Add Template</label>
            </div>
            <div class="col-auto">
                <label for="uploadImage" class="btn topbtns">+ Add Image
                    <input type="file" style="display: none;" id="uploadImage" onchange="uploadImageInCanvas(event)" accept="image/*">
                </label>
            </div>
            <div class="col-auto">
                <button class="btn topbtns" onclick=" showTxtTool()">+ Add Text</button>
            </div>
            <div class="col-auto"><button class="btn topbtns" id="addsticker" onclick="show()">+Add Sticker </button>
            </div>

            <div class="col-auto">
                <button class="btn pdfbtncolor" id="save" data-bs-toggle="modal"
                    data-bs-target="#exampleModaliframe">Preview</button>
            </div>
            <button type="button" style="width:100px" class="btn pdfbtncolor" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Settings
            </button>
            <div class="col-auto" style="padding: 0%; margin: 0%;"><button type="button" style="width:100px" class="btn"
                    data-bs-toggle="modal" data-bs-target="#animationModal">Set Animations</button></div>

            <div class="col-auto">
                <button class="btn pdfbtncolor" id="downloadBtn3">Download PDF</button>
            </div>

            <div class="col-auto" style="padding: 0%; margin: 0%;">
                 <label for="uploadStamp" class="btn topbtns">+ Upload Stamp
                     <input type="file" style="display: none;" id="uploadStamp" onchange="uploadStamp(event)" accept="image/*">
                 </label>
            </div>

            <div class="col-auto" style="padding: 0%; margin: 0%;">
            <button class="btn pdfbtncolor" id="undoBtn" onclick="undo()">Undo</button>
            <button class="btn pdfbtncolor" id="redoBtn" onclick="redo()">Redo</button>
            </div>

            <!-- <div class="col-auto">

                <button onclick="switchToOld()" class="btn pdfbtncolor" id="switch">Switch to Old version</button>
            </div> -->

            <div class="col-auto">

                <button onclick="canvaClear()" class="btn pdfbtncolor">Clear Card</button>
            </div>

            <div class="col-auto">

                <button onclick="dublicateObject()" class="btn pdfbtncolor">Duplicate</button>
            </div>

            <div class="col-auto" style="padding: 0%; margin: 0%;">
        <label for="two_sided" class="btn topbtns">Two Sided Card</label>
        <input type="checkbox" name="two_sided" id="two_sided" onchange="toggleTwoSided(this)">
    </div>

<div class="col-auto" id="frontBackBox2" style="display: none;padding: 0%; margin: 0%;">
    <label for="front2" class="btn topbtns">Edit Front</label>
    <input type="radio" name="edit" id="front2" onchange="toggleSide(this)">
    <label for="back2" class="btn topbtns">Edit Back</label>
    <input type="radio" name="edit" id="back2" onchange="toggleSide(this)">
</div>

        </div>

    </div>
</div>
<div id="webtoolsdiv" class="topBar" style="display:flex; margin: 0; padding: 0;">

    <div class="mt-2">
        <img src="assets/images/image-removebg-preview.png" alt="" id="logo">
    </div>
    <div class="row d-flex flex-row justify-content-start align-items-center pb-3 ms-3"
        style="margin-left: -3px; margin-top: 45px;">

        <div class="col-auto" style="padding: 0%; margin: 0%;"><label for="" class="btn topbtns"
                onclick="sidebarbackaddimg()">+ AddCard</label></div>

        <div class="col-auto" style="padding: 0%; margin: 0%;"><label for="" class="btn topbtns"
                onclick="addTemplate()">+ Add Template</label></div>

        <div class="col-auto" style="padding: 0%; margin: 0%;"><label for="uploadImage" class="btn topbtns">+ Add Image
            <input type="file" style="display: none;" id="uploadImage" onchange="uploadImageInCanvas(event)" accept="image/*">
        </label></div>

        <div class="col-auto" style="padding: 0%; margin: 0%;"><button class="btn topbtns" onclick=" showTxtTool()">+
                Add Text</button></div>

        <div class="col-auto" style="padding: 0%; margin: 0%;"><button class="btn topbtns" id="addsticker"
                onclick="show()">+Add Sticker </button></div>

        <div class="col-auto" style="padding: 0%; margin: 0%;"><button class="btn pdfbtncolor" id="save2"
                onclick="saveData()" data-bs-toggle="modal" data-bs-target="#exampleModaliframe">Preview</button></div>

        <div class="col-auto" style="padding: 0%; margin: 0%;"><button type="button" style="width:100px"
                class="btn pdfbtncolor" data-bs-toggle="modal" data-bs-target="#exampleModal">Settings</button></div>
        <div class="col-auto" style="padding: 0%; margin: 0%;"><button type="button" style="width:100px" class="btn"
                data-bs-toggle="modal" data-bs-target="#animationModal">Set Animations</button></div>

        <div class="col-auto" style="padding: 0%; margin: 0%;"><button class="btn pdfbtncolor" onclick="dwnPDF()"
                id="downloadBtn3">Download PDF</button></div>
                
                <!-- <div class="col-auto" style="padding: 0%; margin: 0%;"><button onclick="switchToOld()" class="btn pdfbtncolor"
                id="switch">Switch to Old version</button></div> -->
                
    <div class="col-auto" style="padding: 0%; margin: 0%;">
        <label for="uploadStamp" class="btn topbtns">+ Upload Stamp
            <input type="file" style="display: none;" id="uploadStamp" onchange="uploadStamp(event)" accept="image/*">
        </label>
    </div>
                
        <div class="col-auto" style="padding: 0%; margin: 0%;"><button onclick="canvaClear()"
                class="btn pdfbtncolor">Clear Card</button></div>
        <div class="col-auto" style="padding: 0%; margin: 0%;">
            <button class="btn pdfbtncolor" id="undoBtn" onclick="undo()">Undo</button>
            <button class="btn pdfbtncolor" id="redoBtn" onclick="redo()">Redo</button>
        </div>


        <div class="col-auto" style="padding: 0%; margin: 0%;"><button onclick="dublicateObject()"
                class="btn pdfbtncolor">Duplicate</button></div>

        <div class="col-auto" style="padding: 0%; margin: 0%;"><button class="btn btn-sm btn-success" id="save1"
                onclick="saveAll()">Save</button></div>


    <div class="col-auto" style="padding: 0%; margin: 0%;">
        <label for="two_sided" class="btn topbtns">Two Sided Card</label>
        <input type="checkbox" name="two_sided" id="two_sided" onchange="toggleTwoSided(this)">
    </div>

<div class="col-auto" id="frontBackBox" style="display: none;padding: 0%; margin: 0%;">
    <label for="front" class="btn topbtns">Edit Front</label>
    <input type="radio" name="edit" id="front" onchange="toggleSide(this)">
    <label for="back" class="btn topbtns">Edit Back</label>
    <input type="radio" name="edit" id="back" onchange="toggleSide(this)">
</div>


    </div>

</div>


<!-- IframeModal -->
<!-- Modal -->
<div class="modal fade modal-for-view-cards" height="70vh" id="exampleModaliframe" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your Card</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center" style="height: 70vh;">
                <iframe id="iframe" height="100%" width="100%" src="" frameborder="0"></iframe>

                <p>You need to save the setting first</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- IframeModal Close -->

<!-- Animations Modal -->
<div class="modal fade" height="70vh" id="animationModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Set Animations</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <div class="row d-flex justify-content-center align-items-center" id="animationModalBody">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary" onclick="saveAnimation()"
                    data-bs-dismiss="modal">Save Animation</button>
                    <button type="button" class="btn btn-sm btn-warning" onclick="saveNoneOfThese()" data-bs-dismiss="modal">Non Animations</button>
            </div>
        </div>
    </div>
</div>
<!-- Animations Modal -->


<!-- Save Modal -->
<input type="hidden" id="id_card">
<div class="modal fade" id="exampleModalSave" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class=" modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Save Canva</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe id="iframe" src="" width="100%" height="100%" frameborder="0"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- End Save Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="box">
                    <form id="settingform">
                        <div class="row">

                            <div class="col-12">
                                <div class="m-5 text-center">
                                    <h3>Invitation Message title</h3>
                                    <input type="text" id="msgTitle" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-auto">
                                    <div class="col-lg-6 col-auto">
                                        <h5>Guest Name Font Style</h5><br>
                                    </div>
                                    <div class="col-auto mb-3">
                                        <div class="custom-select">
                                            <div class="select-wrapper">
                                                <span id="font" style="font-family:'Abramo Serif';"></span>
                                                <select id="font-selectorsetting" class="fontSelector1">
                                                    <option value="Abramo Serif" style="font-family: 'Abramo Serif';">
                                                        Abramo Serif</option>
                                                    <option value="Roboto-BlackItalic"
                                                        style="font-family: 'Roboto-BlackItalic',cursive;">
                                                        Roboto-BlackItalic</option>
                                                    <option value="DancingScript-VariableFont_wght"
                                                        style="font-family: 'DancingScript-VariableFont_wght';">
                                                        DancingScript-VariableFont_wght
                                                    </option>
                                                    <option value="FrankRuhlLibre-VariableFont_wght"
                                                        style="font-family: 'FrankRuhlLibre-VariableFont_wght';">
                                                        FrankRuhlLibre-VariableFont_wght</option>
                                                    <option value="Roboto-BlackItalic"
                                                        style="font-family: 'Roboto-BlackItalic';">
                                                        Roboto-BlackItalic</option>
                                                    <option value="RacingSansOne-Regular"
                                                        style="font-family: 'RacingSansOne-Regular';">
                                                        RacingSansOne-Regular</option>
                                                    <option value="PTSansNarrow-Regular"
                                                        style="font-family: 'PTSansNarrow-Regular';">
                                                        PTSansNarrow-Regular</option>
                                                    <option value="PTSansNarrow-Bold"
                                                        style="font-family: 'PTSansNarrow-Bold';">
                                                        PTSansNarrow-Bold</option>
                                                    <option value="Lobster-Regular"
                                                        style="font-family: 'Lobster-Regular';">
                                                        Lobster-Regular</option>
                                                    <option value="HerrVonMuellerhoff-Regular"
                                                        style="font-family: 'HerrVonMuellerhoff-Regular';">
                                                        HerrVonMuellerhoff-Regular</option>
                                                    <option value="Eleganta_PERSONAL_USE_ONLY"
                                                        style="font-family: 'Eleganta_PERSONAL_USE_ONLY';">
                                                        Eleganta_PERSONAL_USE_ONLY</option>
                                                    <option value="FrankRuhlLibre-VariableFont_wght"
                                                        style="font-family: 'FrankRuhlLibre-VariableFont_wght';">
                                                        FrankRuhlLibre-VariableFont_wght</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="col-lg-6 col-auto">
                                    <h5>Guest Name Font Color</h5><br>

                                    <button class="btn btn-light mb-3"><input type="color" id="colorPickersetting"
                                            style="width: 250px; background: none;"></button>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-auto">
                                        <h5>envelope Inner Color</h5><br>

                                        <button class="btn btn-light mb-3"><input type="color"
                                                id="colorPickerenvelope_innersetting"
                                                style="width: 250px; background: none;"></button>
                                    </div>

                                    <div class="col-lg-6 col-auto">
                                        <h5>envelope Outer Color</h5><br>

                                        <button class="btn btn-light mb-3"><input type="color"
                                                id="colorPickerenvelope_outsetting"
                                                style="width: 250px; background: none;"></button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <b>RSVp Option</b>
                            </div>

                            <div class="col-4"><input type="checkbox" value="1" id="flexCheckChecked1" name="attending">
                                <label for="">Attending</label>
                            </div>
                            <div class="col-4"><input type="checkbox" value="1" id="flexCheckChecked2"
                                    name="gift_suggestion"><label for="">Gift Suggestion</label></div>

                            <div class="col-4"><input type="checkbox" value="1" id="flexCheckChecked3"
                                    name="reception_check"> <label for="">At the reception Check-In</label></div>
                            <div class="col-4"><input type="checkbox" value="1" id="flexCheckChecked4"
                                    name="gift_upload_photos"><label for="">Upload your Photos</label></div>

                            <div class="col-4"><input type="checkbox" value="1" id="flexCheckChecked5"
                                    name="sorry_cant"> <label for="">Sorry! I Can't</label></div>
                            <div class="col-4"><input type="checkbox" value="1" id="flexCheckChecked6"
                                    name="go_website"><label for="">Go to the website</label></div>
                        </div>
                        <div class="col-12 mt-3 mb-3">
                            <b>Background</b>
                        </div>



                        <div style="text-align: center;" id="bgImgData">
                            <label class="borderPc py-2">
                                <input type="radio" onclick="backgroundSelecetor(this.value)" name="test"
                                    value="bg4.webp" id="bg4">

                                <img src="/assets/images/cardAnimation/bg4.webp" alt="Option 1">


                            </label>

                            <label class="borderPc py-2">
                                <input type="radio" onclick="backgroundSelecetor(this.value)" name="test"
                                    value="bg2.jpg" id="bg2">
                                <img src="/assets/images/cardAnimation/bg2.jpg" alt="Option 2">
                            </label>


                            <label class="borderPc py-2">
                                <input type="radio" onclick="backgroundSelecetor(this.value)" name="test"
                                    value="bg3.jpg" id="bg3">
                                <img src="/assets/images/cardAnimation/bg3.jpg" alt="Option 3">
                            </label>

                            <label class="borderPc py-2">
                                <input type="radio" onclick="backgroundSelecetor(this.value)" name="test"
                                    value="bg1.jpg" id="bg1">
                                <img src="/assets/images/cardAnimation/bg1.jpg" alt="Option 4">
                            </label>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" onclick="saveSetting()" class="btn btn-primary">Save</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div>
</div>

<div class="footer">
    <i class="fa fa-1x icon1" style="height: fit-content;" onclick="change(this)">

        <input type="color" id="colorPicker1" onmouseover="toggleColorChange1()" onmouseleave="stopColorChange1()">
    </i>
    <i class="fa fa-plus fa-1x icon1" style=" height: fit-content;" onclick="change(this) , increaseText() "></i>

    <i class="fa fa-minus fa-1x  icon1" style=" height: fit-content;" onclick="change(this) , decreaseText() "></i>

    <i class="fas fa-trash  fa-1x icon1 deleteBtn1" style="height: fit-content;"
        onclick="change(this) , thisTrash() "></i>

    <i class="fas fa-copy fa-1x  icon1" style="height: fit-content;" id="clone1" onclick="change(this)"></i>

    <i class="fa fa-font fa-1x  icon1" style="height: fit-content;" onclick="change(this);showfontfamily()"></i>


</div>
<div class=" sidebar" style="display: none;z-index: 1;">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-end align-items-center h-100">
            <button type="button" class="btn-close" aria-label="Close" onclick="closeSidebar()"></button>
        </div>
    </div>
    <div class="search">
        <input type="text" id="searchInput" placeholder="Search for stickers">
        <button id="btnSearch" class="btn btn-lg btn-secondary ">Search</button>
    </div>
    <div id="stickerList" onclick="clickONsticker()">
    </div>
</div>





<div id="sidebarbackgroundaddimg1" style="display: none;">
    <h1 class="text-center" style="color:purple; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
        <!-- Customization the <br>  -->
        Background Image
    </h1>
    <div id="txtTool" class="row  pt-3 pb-3">
        <button onclick="moveForward()" class="moveForward">Move Forward</button>
        <button onclick="moveBackword()" class="moveBackword">Move Backward</button>
        <div class="row" id="imgDiv"></div>
    </div>
</div>

<div id="fontfamily" style="display: none;">
    <h1 class="text-center" style="color:purple; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
        Select the font style <br>
    </h1>
    <div id="selectfont_family" class="row  pt-3 pb-3">
        <div class="ml-5" style="margin-left:15%">
            <div class="col-auto mb-3">
                <div class="custom-select">
                    <div class="select-wrapper">
                        <span id="font" style="font-family:'Abramo Serif';"></span>
                        <select id="font-selector" class="fontSelector1">
                            <option value="Arial, sans-serif">Arial</option>
                            <option value="Arial Black, sans-serif">Arial Black</option>
                            <option value="Arial Narrow, sans-serif">Arial Narrow</option>
                            <option value="Book Antiqua, serif">Book Antiqua</option>
                            <option value="Candara, sans-serif">Candara</option>
                            <option value="Century Gothic, sans-serif">Century Gothic</option>
                            <option value="Comic Sans MS, cursive">Comic Sans MS</option>
                            <option value="Courier New, monospace">Courier New</option>
                            <option value="Franklin Gothic Medium, sans-serif">Franklin Gothic Medium</option>
                            <option value="Garamond, serif">Garamond</option>
                            <option value="Georgia, serif">Georgia</option>
                            <option value="Impact, sans-serif">Impact</option>
                            <option value="Lobster, cursive">Lobster</option>
                            <option value="Lucida Console, monospace">Lucida Console</option>
                            <option value="Lucida Sans Unicode, sans-serif">Lucida Sans Unicode</option>
                            <option value="Merriweather, serif">Merriweather</option>
                            <option value="Montserrat, sans-serif">Montserrat</option>
                            <option value="Pacifico, cursive">Pacifico</option>
                            <option value="Palatino Linotype, serif">Palatino Linotype</option>
                            <option value="Playfair Display, serif">Playfair Display</option>
                            <option value="PT Sans, sans-serif">PT Sans</option>
                            <option value="Quicksand, sans-serif">Quicksand</option>
                            <option value="Raleway, sans-serif">Raleway</option>
                            <option value="Roboto, sans-serif">Roboto</option>
                            <option value="Source Sans Pro, sans-serif">Source Sans Pro</option>
                            <option value="Tahoma, sans-serif">Tahoma</option>
                            <option value="Times New Roman, serif">Times New Roman</option>
                            <option value="Trebuchet MS, sans-serif">Trebuchet MS</option>
                            <option value="Ubuntu, sans-serif">Ubuntu</option>
                            <option value="Verdana, sans-serif">Verdana</option>

                        </select>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="sidebaraddimg" style="display: none;z-index: 2;">
    <h1 class="text-center" style="color:purple ;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
        Customization
        the <br> Image</h1>
    <div id="txtTool" class="row  pt-3 pb-3">
        <div class="col-12">
            <h5>Image Size&nbsp;</h5>
        </div>
        <div class="col-12  btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group me-2" role="group" aria-label="First group">
                <button type="button" class="btn btn-secondary " style="width: 95px;"
                    onclick="increaseImageSize()">+</button>
                <button type="button" class="btn btn-secondary" style="width: 95px; border-left: 2px solid black;"
                    onclick="decreaseImageSize()">-</button>
            </div>
        </div>
        <div class="col-12 mt-12">
            <h5>Image Edit &nbsp; &nbsp;</h5>
        </div>
        <div class="col-12 mt-12">
            <img src="/icon/trash-alt-svgrepo-com.svg" class="deleteBtn2" onclick="deleteImage()" id="trash2" width="42px" height="42px"
                style="margin-top: 5px;" alt="">
        </div>
        <div class="color-picker-container">
            <label for="opacityRange2" class="color-picker-label">Opacity:</label>
            <input type="range" id="opacityRange2" min="0" max="100" step="10" value="100" class="color-picker" oninput="changeOpacity(this)">
        </div>

        <button onclick="moveForward()" class="moveForward">Move Forward</button>
        <button onclick="moveBackword()" class="moveBackword">Move Backward</button>
    </div>
</div>

<div class="sidebaraddtext" style="display: none;z-index: 2;">
    <h1 class="text-center" id="sidecustomizationtext"
        style="color:rgb(129, 2, 129) ;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
        Customization
        the <br>Text</h1>
    <div id="txtTool" class="row  pt-3 pb-3">
        <div class="col-lg-3 col-auto">
            <h5>Font Style</h5>
        </div><br>
        <div class="col-lg-9 col-auto mb-3">
            <div class="custom-select">
                <div class="select-wrapper">
                    <span id="font" style="font-family:'Abramo Serif';"></span>
                    <select id="font-selector2" onchange="changeFontStyle(this)" class="fontSelector1">
                        <option value="arial" style="font-family: arial">Arial</option>
                        <option value="Cinzel, serif" style="font-family: 'Cinzel', serif">Cinzel</option>
                        <option value="Sackers, sans-serif" style="font-family: 'Sackers', sans-serif">Sackers Gothic
                        </option>
                        <option value="Rama, sans-serif" style="font-family: 'Rama', sans-serif">Rama Gothic</option>
                        <option value="CircularSpotify, sans-serif" style="font-family: 'CircularSpotify', sans-serif">
                            CircularSpotify</option>
                        <option value="Anta, sans-serif" style="font-family: Anta;">Anta</option>
                        <option value="calig, Arial, sans-serif" style="font-family: 'calig', Arial, sans-serif;">calig
                        </option>
                        <option value="BLOODY, sans-serif" style="font-family: 'BLOODY', sans-serif;">BLOODY</option>
                        <option value="alsscrp, sans-serif" style="font-family: 'alsscrp', sans-serif;">alsscrp</option>
                        <option value="Raleway-Thin, sans-serif" style="font-family: 'Raleway-Thin', sans-serif;">
                            Raleway Regular</option>
                        <option value="Baskervville-Regular, sans-serif"
                            style="font-family: 'Baskervville-Regular', sans-serif;">Baskervville-Regular</option>
                        <!-- <option value="GreatVibes-Regular, sans-serif" style="font-family: 'GreatVibes-Regular', sans-serif;">GreatVibes-Regular</option> -->
                        <option value="califr, sans-serif" style="font-family: 'califr', sans-serif;">Califr</option>
                        <option value="califrragular, sans-serif" style="font-family: 'califrragular', sans-serif;">
                            Califr Regular</option>
                        <option value="MiltonOneBold, sans-serif" style="font-family: 'MiltonOneBold', sans-serif;">
                            MiltonOneBold</option>
                        <option value="CinzelDecorativeBold, sans-serif"
                            style="font-family: 'CinzelDecorativeBold', sans-serif;">Cinzel Decorative Bold</option>
                        <option value="CinzelDecorativeRegular, sans-serif"
                            style="font-family: 'CinzelDecorativeRegular', sans-serif;">Cinzel Decorative Regular
                        </option>
                        <option value="Agraham, sans-serif" style="font-family: 'Agraham', sans-serif;">Agraham</option>
                        <option value="GloriousCopperDEMO, sans-serif" style="font-family: 'GloriousCopperDEMO', sans-serif;">GloriousCopperDEMO</option>
                        <option value="MettaDahlia, sans-serif" style="font-family: 'MettaDahlia', sans-serif;">
                            MettaDahlia</option>
                        <option value="Darleston" style="font-family: 'Darleston';">Darleston</option>
                        <option value="GoogleMonsieurLaDoulaiseRegular"
                            style="font-family:GoogleMonsieurLaDoulaiseRegular">
                            GoogleMonsieurLaDoulaiseRegular</option>
                        <option value="DistantStroke, sans-serif" style="font-family: 'DistantStroke', sans-serif;">
                            Distant_Stroke</option>
                        <option value="Vanity-Light, sans-serif" style="font-family: 'Vanity-Light', sans-serif;">
                            Vanity-Light</option>
                        <option value="Amoun, sans-serif" style="font-family: 'Amoun', sans-serif;">Amoun</option>
                        <option value="Moonflowers, sans-serif" style="font-family: 'Moonflowers', sans-serif;">
                            Moonflowers</option>
                        <option value="ScarlettBusiat, sans-serif" style="font-family: 'ScarlettBusiat', sans-serif;">
                            ScarlettBusiat</option>
                        <option value="MontserratLight, sans-serif" style="font-family: 'MontserratLight', sans-serif;">
                            Montserrat Light</option>
                        <option value="BrockScript, sans-serif" style="font-family: 'BrockScript', sans-serif;">
                            BrockScript</option>


                        <option value="jandacelebrationscript, sans-serif"
                            style="font-family: 'jandacelebrationscript', sans-serif;">Janda Celebration Script</option>
                        <option value="anydore, sans-serif" style="font-family: 'anydore', sans-serif;">Anydore</option>
                        <option value="creattiondemo, sans-serif" style="font-family: 'creattiondemo', sans-serif;">
                            Creattion Demo</option>
                        <option value="candy, sans-serif" style="font-family: 'candy', sans-serif;">Candy</option>
                        <option value="weddingBells, sans-serif" style="font-family: 'weddingBells', sans-serif;">
                            Wedding bells</option>
                        <option value="Blacksword, sans-serif" style="font-family: 'Blacksword', sans-serif;">Blacksword
                        </option>
                        <option value="GabyDemo, sans-serif" style="font-family: 'GabyDemo', sans-serif;">Gaby Demo
                        </option>
                        <option value="arbuckle-fat, sans-serif" style="font-family: 'arbuckle-fat', sans-serif;">
                            Arbuckle Fat</option>
                        <option value="drSugiyamaRegular, sans-serif"
                            style="font-family: 'drSugiyamaRegular', sans-serif;">Dr Sugiyama Regular</option>
                        <option value="CasablancaNoirPersonalUse, sans-serif"
                            style="font-family: 'CasablancaNoirPersonalUse', sans-serif;">Casablanca Noir Personal Use
                        </option>
                        <option value="RegistaItalic, sans-serif" style="font-family: 'RegistaItalic', sans-serif;">
                            Regista Italic</option>
                        <option value="CoalhandLueTRIAL, sans-serif"
                            style="font-family: 'CoalhandLueTRIAL', sans-serif;">Coalhand Lue</option>
                        <option value="MagentaRose, sans-serif" style="font-family: 'MagentaRose', sans-serif;">Magenta
                            Rose</option>
                        <option value="Vonique92_D, sans-serif" style="font-family: 'Vonique92_D', sans-serif;">
                            Vonique92_D</option>
                        <option value="VanityBoldNarrow, sans-serif"
                            style="font-family: 'VanityBoldNarrow', sans-serif;">VanityBoldNarrow</option>
                        <option value="KugileDemo, sans-serif" style="font-family: 'KugileDemo', sans-serif;">KugileDemo
                        </option>
                        <option value="LovelyCoffee, sans-serif" style="font-family: 'LovelyCoffee', sans-serif;">lovely
                            Coffe</option>
                        <option value="GreatVibesRegular, sans-serif"
                            style="font-family: 'GreatVibesRegular', sans-serif;">GreatVibes Regular</option>
                        <option value="Atheniademo, sans-serif" style="font-family: 'Atheniademo', sans-serif;">
                            Atheniademo</option>

                        <option value="Evilof, sans-serif" style="font-family: 'Evilof', sans-serif;">Evilof</option>
                        <option value="Landliebe, sans-serif" style="font-family: 'Landliebe', sans-serif;">Landliebe
                        </option>
                        <option value="GREENFUZ, sans-serif" style="font-family: 'GREENFUZ', sans-serif;">GREENFUZ
                        </option>
                        <option value="Headhunter-Regular, sans-serif"
                            style="font-family: 'Headhunter-Regular', sans-serif;">Headhunter Regular</option>
                        <option value="victoria, sans-serif" style="font-family: 'victoria', sans-serif;">victoria
                        </option>
                        <option value="Rock Salt, cursive" style="font-family: 'Rock Salt', cursive;">Rock Salt</option>
                        <option value="playball, cursive" style="font-family: 'Playball', cursive;">Playball</option>
                        <option value="Rammetto One, sans-serif" style="font-family: 'Rammetto One', sans-serif;">
                            Playball</option>
                        <option value="Bungee Shade, sans-serif" style="font-family: 'Bungee Shade', sans-serif;">Bungee
                            Shade</option>
                        <option value="HenryMorganHand, sans-serif" style="font-family: 'HenryMorganHand', sans-serif;">
                            Henry MorganHand</option>
                        <option value="romeo, sans-serif" style="font-family: 'romeo', sans-serif;">Romeo</option>
                        <option value="XTRAFLEX, sans-serif" style="font-family: 'XTRAFLEX', sans-serif;">XTRAFLEX
                        </option>
                        <option value="DancingScript-Regular, sans-serif"
                            style="font-family: 'DancingScript-Regular', sans-serif;">DancingScript Regular</option>
                        <option value="MountainsofChristmas, sans-serif"
                            style="font-family: 'MountainsofChristmas', sans-serif;">Mountains of Christmas</option>
                        <option value="Kingthings_Foundation, sans-serif"
                            style="font-family: 'Kingthings_Foundation', sans-serif;">Kingthings_Foundation</option>
                        <option value="Royalacid_o, sans-serif" style="font-family: 'Royalacid_o', sans-serif;">
                            Royalacid_o</option>
                        <option value="Royalacid, sans-serif" style="font-family: 'Royalacid', sans-serif;">Royalacid
                        </option>
                        <option value="OrotundCaps, sans-serif" style="font-family: 'OrotundCaps', sans-serif;">
                            OrotundCaps</option>
                        <option value="qurve, sans-serif" style="font-family: 'qurve', sans-serif;">qurve</option>
                        <option value="dephun2, sans-serif" style="font-family: 'dephun2', sans-serif;">dephun2</option>
                        <option value="mysteron, sans-serif" style="font-family: 'mysteron', sans-serif;">mysteron
                        </option>
                        <option value="LETSEAT, sans-serif" style="font-family: 'LETSEAT', sans-serif;">LETSEAT</option>
                        <option value="energydimension, sans-serif" style="font-family: 'energydimension', sans-serif;">
                            Energy Dimension</option>
                        <!-- <option value="Popups, sans-serif" style="font-family: 'Popups', sans-serif;">Popups</option> -->
                        <option value="dipedthick, sans-serif" style="font-family: 'dipedthick', sans-serif;">dipedthick
                        </option>

                        <option value="EB Garamond, serif" style="font-family: EB Garamond, serif">EB Garamond</option>
                        <option value="Courier New, monospace" style="font-family: Courier New, monospace">Courier New
                        </option>
                        <option value="Lobster, sans-serif" style="font-family: Lobster;">Lobster</option>
                        <option value="Lucida Console, monospace" style="font-family: Lucida Console, monospace">Lucida
                            Console</option>
                        <option value="Montserrat, sans-serif" style="font-family: Montserrat, sans-serif">Montserrat
                        </option>
                        <option value="Pacifico, cursive" style="font-family: Pacifico, cursive">Pacifico</option>
                        <option value="PT Sans, sans-serif" style="font-family: PT Sans, sans-serif">PT Sans</option>
                        <option value="Quicksand, sans-serif" style="font-family: Quicksand, sans-serif">Quicksand
                        </option>
                        <option value="Roboto, sans-serif" style="font-family: Roboto, sans-serif">Roboto</option>
                        <option value="Source Code Pro, monospace" style="font-family: Source Code Pro, monospace">
                            Source Code Pro</option>
                        <option value="Ubuntu, sans-serif" style="font-family: Ubuntu, sans-serif">Ubuntu</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- <div class="dropdown">
            <select id="textEffectsSelect" class="dropbtn" onchange="selectOption()">
                <option value="" selected disabled hidden>Text Effects</option>
                <option value="bold">Bold</option>
                <option value="italic">Italic</option>
                <option value="shadow">Shadow</option>
                <option value="letterSpacing">Letter Spacing</option>
                <option value="lineHeight">Line Height</option>
                <option value="border">Border</option>
                <option value="textAlignment">Text Alignment</option>
                <option value="textRotation">Text Rotation</option>
                <option value="textFlip">Text Flip</option>
                <option value="textTransform">Text Transform</option>
                <option value="textOpacity">Text Opacity</option>
            </select>
        </div> -->

        <details class="dropdown">
            <summary role="button">
                <a class="button">Text Effects</a>
            </summary>
            <ul>
                <li><a href="#" onclick="boldBtn()">Bold</a></li>
                <li><a href="#" onclick="italicBtn()">Italic</a></li>
                <li><a href="#" onclick="shadowBtn()">Shadow</a></li>
                <li><a href="#" onclick="letterSpacingBtn()">Letter Spacing</a></li>
                <li><a href="#" onclick="lineHeightBtn()">Line Height</a></li>
                <li><a href="#" onclick="borderBtn()">Border</a></li>
                <li><a href="#" onclick="textAlignmentBtn()">Text Alignment</a></li>
                <li><a href="#" onclick="textRotationBtn()">Text Rotation</a></li>
                <li><a href="#" onclick="textFlipBtn()">Text Flip</a></li>
                <li><a href="#" onclick="textTransformBtn()">Text Transform</a></li>
                <li><a href="#" onclick="textOpacityBtn()">Text Opacity</a></li>
                <li><a href="#" onclick="neonText()">Neon Text</a></li>
                <li><a href="#" onclick="applyTextMirror()">Text Mirror</a></li>
                <li><a href="#" onclick="applyTextIce()">Text Ice</a></li>
                <li><a href="#" onclick="applyTextFire()">Text Fire</a></li>
                <li><a href="#" onclick="applyTextRainbow()">Text Rainbow</a></li>
                <li><a href="#" onclick="applyTextSparkle()">Text Sparkle</a></li>
                <li><a href="#" onclick="applyGradientStroke()">Gradient Stroke</a></li>
                <li><a href="#" onclick="applyShadowBlur()">Shadow Blur</a></li>
                <li><a href="#" onclick="applyTextHolographic()">Text Holographic</a></li>
                <li><a href="#" onclick="applyTextComic()">Text Comic</a></li>
                <li><a href="#" onclick="applyTextShimmer()">Text Shimmer</a></li>
            </ul>
        </details>

        <div class="col-lg-3 col-auto ">
            <label for="canvasColor" class="color-picker-label">Background Color:</label>
        </div>
        <div class="col-lg-9 col-sm-3 ">
            <input style="width: 100%;" type="color" id="canvasColor" class="color-picker" value="#ffffff"
                oninput="chnageBGColor()">
        </div>
        <div class="col-lg-3 col-auto ">
            <label for="textColor" class="color-picker-label">Text: </label>
        </div>
        <div class="col-lg-9 col-auto ">
            <input type="text" style="width: 100%;" id="textInput" placeholder="Enter text">
        </div>
    </div>
    <div class="col-lg-12 col-auto ">
        <button style="width: 100%;" onclick="addText()" class="btn btn-secondary">addText</button>
    </div>
    <div class="col-lg-3 col-auto">
        <h5>Font Size&nbsp;</h5>
    </div>
    <div class="col-lg-9 col-auto  btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-2" role="group" aria-label="First group">
            <button type="button" class="btn btn-secondary " id="buttonplus" style="width: 95px;"
                onclick="increaseText()">+</button>
            <button type="button" class="btn btn-secondary" id="buttonminus"
                style="width: 95px; border-left: 2px solid black;" onclick="decreaseText()">-</button>
        </div>
    </div>
    <div class="col-lg-3 col-auto">
        <h5>Font Color</h5>
    </div>
    <div class="col-lg-9 col-auto">
        <input type="color" id="colorPicker" oninput="changeTextColor2()">
    </div>
    <button id="deleteBtn">Delete</button>
    <button id="undoBtn" onclick="undo()">Undo</button>
    <button id="redoBtn" onclick="redo()">Redo</button>
    <button onclick="moveForward()" class="moveForward">Move Forward</button>
    <button onclick="moveBackword()" class="moveBackword">Move Backward</button>
    <input type="file" id="uploadImage2" onchange="uploadImageInCanvas(event)" accept="image/*">
    <div class="color-picker-container">
        <label for="opacityRange" class="color-picker-label">Opacity:</label>
        <input type="range" id="opacityRange" min="0" max="100" step="10" value="100" class="color-picker" oninput="changeOpacity(this)">
    </div>
</div>

<div id="viewTemplates" class="sidebaraddtext"
    style="width: 30%; display: none; z-index: 2; position: absolute; right: 0; background: white; padding: 25px 30px; overflow-y: scroll;">
    <h1 class="text-center" id="sidecustomizationtext"
        style="color:rgb(129, 2, 129) ;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
        Customize a Templates</h1>
    <div id="templates" class="row"
        style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">
    </div>
</div>

<div style="z-index:0;" class="myCardView" id="canv">
    <canvas id="canvas">Your browser doesn't support canvas</canvas>
</div>



<script>
    function showDiv() {
        var div = document.getElementById('myDiv');
        if (div.style.display === 'none') {
            div.style.display = 'block';
        } else {
            div.style.display = 'none';
        }
    }
    var fontselectorsetting = document.getElementById("font-selectorsetting");
    var colorPickersetting = document.getElementById("colorPickersetting");
    // for dropdown
    function selectOption() {
        var selectedOption = document.getElementById("textEffectsSelect").value;
        switch (selectedOption) {
            case "bold":
                boldBtn();
                break;
            case "italic":
                italicBtn();
                break;
            case "shadow":
                shadowBtn();
                break;
            case "letterSpacing":
                letterSpacingBtn();
                break;
            case "lineHeight":
                lineHeightBtn();
                break;
            case "border":
                borderBtn();
                break;
            case "textAlignment":
                textAlignmentBtn();
                break;
            case "textRotation":
                textRotationBtn();
                break;
            case "textFlip":
                textFlipBtn();
                break;
            case "textTransform":
                textTransformBtn();
                break;
            case "textOpacity":
                textOpacityBtn();
                break;
            default:
                break;
        }
    }
</script>
<script type="text/javascript">
    function showTutorial() {
        $("#popUpDiv").css("display", "block");
    }

    function closePopup() {
        // document.getElementById("popUpWin").style.display = "none";
        $("#popUpDiv").css("display", "none");
    }

    var tooltipTimer;

    // Function to show the tooltip
    function showTooltip() {
        $('#custom-tooltip').fadeIn(); // Show the tooltip
        // Set a timer to hide the tooltip after 1 second
        setTimeout(function () {
            $('#custom-tooltip').fadeOut(); // Hide the tooltip
        }, 1000); // 1000 milliseconds = 1 second
    }

    // Mouse enter event on the tooltip icon
    $('#tooltip-icon').mouseenter(function () {
        clearTimeout(tooltipTimer); // Clear the timer if the mouse hovers over the icon
        showTooltip(); // Show the tooltip immediately on hover
    });

    // Mouse leave event on the tooltip icon
    $('#tooltip-icon').mouseleave(function () {
        // Set a new timer to hide the tooltip after 1 second if the mouse leaves
        tooltipTimer = setTimeout(function () {
            $('#custom-tooltip').fadeOut(); // Hide the tooltip
        }, 1000); // 1000 milliseconds = 1 second
    });

    // Mouse enter event on the tooltip
    $('#custom-tooltip').mouseenter(function () {
        clearTimeout(tooltipTimer); // Clear the timer if the mouse hovers over the tooltip
    });

    // Mouse leave event on the tooltip
    $('#custom-tooltip').mouseleave(function () {
        // Set a new timer to hide the tooltip after 1 second if the mouse leaves
        tooltipTimer = setTimeout(function () {
            $('#custom-tooltip').fadeOut(); // Hide the tooltip
        }, 1000); // 1000 milliseconds = 1 second
    });

    // Automatically show the tooltip after 1 second
    setTimeout(showTooltip, 1000);


    // var Tawk_API = Tawk_API || {},
    //     Tawk_LoadStart = new Date();
    // (function () {
    //     var s1 = document.createElement("script"),
    //         s0 = document.getElementsByTagName("script")[0];
    //     s1.async = true;
    //     s1.src = 'https://embed.tawk.to/6603116da0c6737bd1251e52/1hptvo5j7';
    //     s1.charset = 'UTF-8';
    //     s1.setAttribute('crossorigin', '*');
    //     s0.parentNode.insertBefore(s1, s0);
    // })();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.5.0/fabric.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/5.3.1/fabric.min.js"
    integrity="sha512-CeIsOAsgJnmevfCi2C7Zsyy6bQKi43utIjdA87Q0ZY84oDqnI0uwfM9+bKiIkI75lUeI00WG/+uJzOmuHlesMA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/invitation.js"></script>