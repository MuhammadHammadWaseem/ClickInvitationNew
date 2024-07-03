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

    #webtoolsdiv .row {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        margin: 0 !important;
        column-gap: 20px;
        row-gap: 20px;
        padding: 20px;
        margin-bottom: 10px !important;
    }

    #webtoolsdiv .row label {
        border: 1px solid #ebb819;
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        align-items: center;
        justify-content: center;
        box-shadow: 0px 0px 10px 5px #ebb81924;
        transition: .3s;
        font-size: 12px;
    }

    svg {
        width: 30px;
        height: 30px;
    }

    #webtoolsdiv .row button {
        border: 1px solid #ebb819;
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        align-items: center;
        justify-content: center;
        width: 83%;
        box-shadow: 0px 0px 10px 5px #ebb81924;
        transition: .3s;
        font-size: 12px;
    }

    #webtoolsdiv .row label:hover,
    #webtoolsdiv .row button:hover {
        background: rgb(238, 196, 66);
        background: linear-gradient(90deg, rgba(238, 196, 66, 1) 0%, rgba(131, 99, 2, 1) 100%);
        color: white;
    }

    #webtoolsdiv .row label:hover svg path,
    #webtoolsdiv .row button:hover svg path {
        fill: white;
    }

    svg,
    path {
        transition: .3s;
    }

    #webtoolsdiv .row .col-auto {
        width: 110px;
    }

    #myDiv .d-flex.justify-content-start.align-items-center {
        display: flex !important;
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center !important;
        justify-content: center !important;
        padding: 20px;
        column-gap: 10px;
        row-gap: 10px;
        margin-top: 0px !important;
    }

    #myDiv .d-flex.justify-content-start.align-items-center label {
        border: 1px solid #ebb819;
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        align-items: center;
        justify-content: center;
        box-shadow: 0px 0px 10px 5px #ebb81924;
        transition: .3s;
        font-size: 12px;
    }

    #myDiv .d-flex.justify-content-start.align-items-center button {
        border: 1px solid #ebb819;
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        align-items: center;
        justify-content: center;
        box-shadow: 0px 0px 10px 5px #ebb81924;
        transition: .3s;
        font-size: 12px;
    }

    #myDiv .d-flex.justify-content-start.align-items-center label svg,
    #myDiv .d-flex.justify-content-start.align-items-center button svg {
        width: 25px;
        height: 25px;
    }

    #myDiv .d-flex.justify-content-start.align-items-center .col-auto {
        width: 110px !important;
    }

    #myDiv .d-flex.justify-content-start.align-items-center .col-auto label {
        width: 100%;
    }

    #myDiv .d-flex.justify-content-start.align-items-center .col-auto button {
        width: 80%;
    }

    .mobile-tools-save {
        position: absolute !important;
        top: -7px !important;
        right: auto !important;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        width: 100%;
        left: -100px !important;
        align-items: flex-end;
        justify-content: flex-end;
        z-index: 999 !important;
        column-gap: 10px;
    }

    .mobile-tools-save button {
        border: 1px solid #ebb819 !important;
        padding: 5px !important;
        font-size: 12px;
        margin: 0 !important;
        background-color: #ff000000 !important;
        color: black !important;
        width: 70px;
        transition: .3s;
    }

    .mobile-tools-save button:hover {
        color: white !important;
        background: rgb(238, 196, 66);
        background: linear-gradient(90deg, rgba(238, 196, 66, 1) 0%, rgba(131, 99, 2, 1) 100%);
    }

    .mobile-tools-save button:focus {
        box-shadow: none;
    }


    @media only screen and (max-width: 575px){
        nav.navbar.fixed-top.navbar-expand-lg.navbar-light.bg-light a.navbar-brand img {
        width: 150px !important;
    }

    nav.navbar.fixed-top.navbar-expand-lg.navbar-light.bg-light button.navbar-toggler {
        width: 50px;
    }
    }

    div#canv {
        display: flex;
        align-content: flex-start;
        flex-direction: row;
        flex-wrap: wrap;
        padding-top: 20px;
        overflow: auto;
    }

    div#canv .canvas-container {
        width: 500px !important;
        height: 700px !important;
        object-position: top !important;
    }

    div#canv .canvas-container canvas {
        height: 550px !important;
        object-fit: contain !important;
    }

    div#sidebarbackgroundaddimg1 h1.text-center {
        color: #ebb819 !important;
    }

    div#viewTemplates h1 {
        color: #ebb819 !important;
        font-size: 30px !important;
        font-weight: 600 !important;
    }

    .sidebaraddtext h1 {
        color: #ebb819 !important;
        font-size: 30px !important;
        font-weight: 600 !important;
    }

    div#sidebarbackgroundaddimg1 div#txtTool {
        padding: 0px !important;
        margin: 0 !important;
        display: flex !important;
        row-gap: 10px;
    }

    div#sidebarbackgroundaddimg1 div#txtTool button {
        width: 90% !important;
        border: 1px solid #ebb819 !important;
        border-radius: 5px;
        transition: .3s;
    }

    div#sidebarbackgroundaddimg1 div#txtTool button:hover {

        color: white;
        background: rgb(238, 196, 66);
        background: linear-gradient(90deg, rgba(238, 196, 66, 1) 0%, rgba(131, 99, 2, 1) 100%);
        box-shadow: 0px 0px 10px 5px #ebb81924;

    }

    div#imgDiv {
        display: flex !important;
        column-gap: 10px;
        row-gap: 10px;
        padding-bottom: 150px !important;
    }


    div#imgDiv .col-6.mb-3 {
        width: 48%;
        margin: 0 !important;
        padding: 0 !important;
        border: 1px solid #ecc241;
        border-radius: 5px;
        box-shadow: 0px 0px 5px 3px #ecc24129;
    }

    div#imgDiv .col-6.mb-3 img {
        width: 100%;
        max-width: 100%;
        object-fit: contain;
    }


    div#imgDiv::-webkit-scrollbar {
        width: 5px;
    }

    div#imgDiv::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
    }

    div#imgDiv::-webkit-scrollbar-thumb {
        background: #ebb819;
        border-radius: 10px;
    }

    div#imgDiv::-webkit-scrollbar-thumb:hover {
        background: black;
    }

    div#viewTemplates::-webkit-scrollbar {
        width: 10px;
    }

    div#viewTemplates::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
    }

    div#viewTemplates::-webkit-scrollbar-thumb {
        background: #B59120;
        border-radius: 10px;
    }

    div#viewTemplates::-webkit-scrollbar-thumb:hover {
        background: black;
    }

    div#viewTemplates .col-md-12.shadow.border.rounded.p-3.template.m-3.d-flex.justify-content-center.align-items-center.flex-column {
        margin: 0 !important;
        background: rgb(238, 196, 66);
        background: linear-gradient(90deg, rgb(239 205 100) 0%, rgb(187 144 14) 100%);
        margin-top: 5px !important;
        margin-bottom: 5px !important;
        box-shadow: 0px 0px 10px 5px #ebb8192e !important;
        border: 1px solid #ecc241 !important;
        border-radius: 10px !important;
    }

    div#viewTemplates .col-md-12.shadow.border.rounded.p-3.template.m-3.d-flex.justify-content-center.align-items-center.flex-column img {
        margin: 0 !important;
    }

    div#viewTemplates .col-md-12.shadow.border.rounded.p-3.template.m-3.d-flex.justify-content-center.align-items-center.flex-column p {
        margin: 0 !important;
        color: white !important;
        padding-top: 10px !important;
    }

    .sidebaraddtext div#txtTool h5 {
        font-size: 16px;
        margin: 0;
        font-weight: 600;
        padding-top: 5px;
    }

    .sidebaraddtext div#txtTool .custom-select select {
        width: 100%;
        border-radius: 5px;
        height: 35px;
        padding-left: 10px;
        border: 1px solid #c09d2a;
        box-shadow: 0px 0px 5px 5px #c09d2a0f;
    }

    .sidebaraddtext .f-color-bg-color {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .sidebaraddtext .f-color-bg-color label,
    .sidebaraddtext .f-color-bg-color h5 {
        font-size: 16px;
        margin: 0;
        font-weight: 600;
        padding-top: 5px;
        text-align: center;
        height: 29px;
    }

    .sidebaraddtext .f-color-bg-color input {
        width: 100%;
        height: 40px !important;
        margin-top: 5px;
        border: 1px solid #c09d2a;
        box-shadow: 0px 0px 10px 2px #c09d2a38;
    }

    .sidebaraddtext .f-color-bg-color .box {
        width: 45%;
    }

    .sidebaraddtext .add-text-boxes {
        display: flex;
        align-items: center;
        column-gap: 10px;
        margin-bottom: 10px;
    }

    .sidebaraddtext .add-text-boxes label {
        font-size: 16px;
        margin: 0;
        font-weight: 600;
        nter;
    }

    .sidebaraddtext .add-text-boxes input {
        width: 100%;
        border-radius: 5px;
        height: 35px;
        padding-left: 10px;
        border: 1px solid #c09d2a;
        box-shadow: 0px 0px 5px 5px #c09d2a0f;
        color: black;
        max-width: 235px;
        width: 235px !important;
    }

    .sidebaraddtext .add-text-boxes input::placeholder {
        color: black;
    }

    .sidebaraddtext .add-text-boxes button.btn.btn-secondary {
        width: 100% !important;
        max-width: 100% !important;
        padding: 0;
        background: rgb(238, 196, 66);
        background: linear-gradient(90deg, rgba(238, 196, 66, 1) 0%, rgba(131, 99, 2, 1) 100%);
        color: white;
        border: 1px solid #ebb819;
        padding: 5px 7px;
        transition: .3s;
    }

    .sidebaraddtext .add-text-boxes button.btn.btn-secondary:hover {
        background: linear-gradient(90deg, black 0%, black 100%);
    }

    .sidebaraddtext .btn-group.me-2 {
        display: flex;
        width: 100% !important;
        justify-content: flex-start;
        margin: 0 !important;
        column-gap: 10px;
    }

    .sidebaraddtext .btn-group.me-2 button {
        width: 20px !important;
        height: 40px !important;
        display: flex;
        align-items: center;
        justify-content: center;
         !important;
        background: rgb(238, 196, 66);
        background: linear-gradient(90deg, rgba(238, 196, 66, 1) 0%, rgba(131, 99, 2, 1) 100%);
        color: white;
        border: 1px solid #ebb819 !important;
        border-radius: 10px !important;
        font-size: 30px;
        /* line-height: 0 !important; */
        padding: 0;
        max-width: 50px !important;
        transition: .3s;
    }

    .sidebaraddtext .btn-group.me-2 button:hover {
        background: linear-gradient(90deg, black 0%, black 100%);
    }

    .sidebaraddtext .many-btns-inline {
        margin-bottom: 15px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        column-gap: 10px;
        row-gap: 10px;
        align-items: center;
        justify-content: center;
    }

    .sidebaraddtext .many-btns-inline button {
        width: 25% !important;
        max-width: 100% !important;
        padding: 0;
        background: rgb(238, 196, 66);
        background: linear-gradient(90deg, rgba(238, 196, 66, 1) 0%, rgba(131, 99, 2, 1) 100%);
        color: white;
        border: 1px solid #ebb819;
        padding: 5px;
        transition: .3s;
        border-radius: 5px;
        font-size: 12px;
        box-shadow: 0px 0px 10px 0px #0000002b;
        transition: .3s;
    }

    .sidebaraddtext .many-btns-inline button:hover {
        background: linear-gradient(90deg, black 0%, black 100%);
    }

    .sidebaraddtext .font-etc-inline a.button {
        width: 150px;
        max-width: 100% !important;
        padding: 0;
        background: rgb(238, 196, 66);
        background: linear-gradient(90deg, rgba(238, 196, 66, 1) 0%, rgba(131, 99, 2, 1) 100%);
        color: white;
        border: 1px solid #ebb819;
        /* padding: 5px 7px; */
        transition: .3s;
        height: 42px;
        display: flex;
        align-items: center;
        padding: 0px 10px;
        justify-content: space-between;
        transition: .3s;
    }

    .sidebaraddtext .font-etc-inline a.button:hover {
        background: linear-gradient(90deg, black 0%, black 100%);
    }

    .sidebaraddtext .font-etc-inline {
        display: flex;
        column-gap: 10px;
        justify-content: space-between;
    }

    .sidebaraddtext .font-etc-inline h5 {
        font-size: 16px;
        padding-top: 10px;
    }

    .sidebaraddtext input#uploadImage2 {
        border: 1px solid #eac040;
        width: 100%;
        border-radius: 5px;
        height: 50px;
        padding-top: 10px;
        padding-left: 15px;
    }

    .sidebaraddtext .color-picker-container {
        display: flex;
        column-gap: 10px;
        align-items: center;
        justify-content: center;
        margin-top: 15px;
    }

    .sidebaraddtext .color-picker-container input {
        margin-top: 5px;
    }

    .myCardView {
    padding-bottom: 150px;
    /* Jugar-lagaye-hai */
    background-color: white !important;
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


<div class="mobile-tools-save">
    <button id="toolsbuttonid" class="btn" onclick="showDiv()">Tools</button>
    <button class="btn btn-sm btn-success me-2 SaveBtn" id="toolsbuttonid" onclick="saveAll()">Save</button>
</div>
<!-- Mobile TOPBAR -->
<div id="myDiv" style="display: none;">
    <div class="topBar">
        <div class="d-flex justify-content-start align-items-center"
            style="margin-top: 60px; overflow: scroll; z-index: 1000;">
            <div class="col-auto"><label for="" class="btn topbtns" onclick="sidebarbackaddimg()"><svg width="39"
                        height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M32.3498 3.89758H13.2112C11.4521 3.89758 10.0215 5.32819 10.0215 7.08735V26.2259C10.0215 27.9851 11.4521 29.4157 13.2112 29.4157H32.3498C34.109 29.4157 35.5396 27.9851 35.5396 26.2259V7.08735C35.5396 5.32819 34.109 3.89758 32.3498 3.89758ZM13.2112 26.2259V7.08735H32.3498L32.353 26.2259H13.2112Z"
                            fill="#C09D2A" />
                        <path
                            d="M6.83234 13.467H3.64258V32.6056C3.64258 34.3647 5.07319 35.7953 6.83234 35.7953H25.9709V32.6056H6.83234V13.467ZM24.376 10.2772H21.1863V15.0619H16.4016V18.2516H21.1863V23.0363H24.376V18.2516H29.1607V15.0619H24.376V10.2772Z"
                            fill="#C09D2A" />
                    </svg> + Add Card</label>
            </div>
            <div class="col-auto"><label for="" class="btn topbtns" onclick="addTemplate()"><svg width="39" height="39"
                        viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M29.344 27.8209C31.1031 27.8209 32.5337 26.3903 32.5337 24.6311V8.68232C32.5337 6.92316 31.1031 5.49255 29.344 5.49255H10.2054C8.44623 5.49255 7.01562 6.92316 7.01562 8.68232V24.6311C7.01562 26.3903 8.44623 27.8209 10.2054 27.8209H29.344ZM10.2054 8.68232H29.344L29.3472 24.6311H10.2054V8.68232ZM7.01562 31.0107H32.5337V34.2004H7.01562V31.0107Z"
                            fill="#C09D2A" />
                    </svg> + Add Template</label>
            </div>
            <div class="col-auto">
                <label for="uploadImage" class="btn topbtns"><svg width="39" height="39" viewBox="0 0 39 39" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.57648 8.68232H27.3099V19.8465H30.4997V8.68232C30.4997 6.92316 29.0691 5.49255 27.3099 5.49255H6.57648C4.81733 5.49255 3.38672 6.92316 3.38672 8.68232V27.8209C3.38672 29.58 4.81733 31.0107 6.57648 31.0107H19.3355V27.8209H6.57648V8.68232Z"
                            fill="#C09D2A" />
                        <path
                            d="M12.9565 18.2515L8.17188 24.6311H25.7156L19.336 15.0618L14.5514 21.4413L12.9565 18.2515Z"
                            fill="#C09D2A" />
                        <path
                            d="M30.4978 23.0363H27.3081V27.8209H22.5234V31.0107H27.3081V35.7953H30.4978V31.0107H35.2825V27.8209H30.4978V23.0363Z"
                            fill="#C09D2A" />
                    </svg> + Add Image
                    <input type="file" style="display: none;" id="uploadImage" onchange="uploadImageInCanvas(event)"
                        accept="image/*">
                </label>
            </div>
            <div class="col-auto">
                <button class="btn topbtns" onclick=" showTxtTool()"><svg width="40" height="39" viewBox="0 0 40 39"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.79883 13.4669H11.9886V10.2772H17.1751L13.0731 29.4157H8.79883V32.6055H21.5579V29.4157H17.9662L22.0682 10.2772H27.9374V13.4669H31.1272V7.0874H8.79883V13.4669Z"
                            fill="#C09D2A" />
                    </svg> + Add Text</button>
            </div>
            <div class="col-auto"><button class="btn topbtns" id="addsticker" onclick="show()"><svg width="39"
                        height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M34.7754 16.6279C33.265 9.2516 26.6941 3.89758 19.1519 3.89758C10.3578 3.89758 3.20312 11.0522 3.20312 19.8464C3.20312 27.3886 8.55714 33.9595 15.9335 35.4699C16.1919 35.5247 16.4599 35.5138 16.713 35.438C16.966 35.3621 17.1959 35.2239 17.3816 35.036L34.34 18.0777C34.7196 17.6981 34.8823 17.1558 34.7754 16.6279ZM17.5571 29.4157C17.5497 26.874 18.3084 24.3891 19.7341 22.285C20.1935 21.6069 20.7157 20.9736 21.2939 20.3934C21.8733 19.8162 22.5055 19.2945 23.1822 18.8352C23.8661 18.3748 24.5924 17.9807 25.3512 17.6582C26.1184 17.3345 26.9238 17.0841 27.7452 16.915C28.884 16.6888 30.0481 16.6169 31.2061 16.7013L17.6033 30.304C17.5826 30.009 17.5571 29.7139 17.5571 29.4157ZM6.39289 19.8464C6.39289 12.8114 12.1169 7.08735 19.1519 7.08735C23.7914 7.08735 27.9684 9.62161 30.2029 13.4748C29.1621 13.4786 28.1242 13.5844 27.104 13.7906C26.0785 14.0012 25.0721 14.3138 24.1072 14.7204C23.1592 15.1238 22.2519 15.6167 21.3975 16.1925C20.5475 16.7683 19.7548 17.4222 19.0387 18.1383C18.3226 18.8544 17.6703 19.6454 17.0914 20.4987C16.5188 21.3488 16.0228 22.2595 15.6209 23.2068C14.7926 25.172 14.3664 27.2831 14.3673 29.4157C14.3673 30.1988 14.4438 30.9771 14.5571 31.7458C9.7246 29.875 6.39289 25.1669 6.39289 19.8464Z"
                            fill="#C09D2A" />
                    </svg> +Add Sticker </button>
            </div>

            <div class="col-auto">
                <button class="btn pdfbtncolor" id="save" data-bs-toggle="modal"
                    data-bs-target="#exampleModaliframe"><svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.83333 8.33333H17.1667V5H5.5V16.6667H8.83333V8.33333ZM17.1667 31.6667H8.83333V23.3333H5.5V35H17.1667V31.6667ZM35.5 23.3333H32.1667V31.6667H23.8333V35H35.5V23.3333ZM32.1667 16.6667H35.5V5H23.8333V8.33333H32.1667V16.6667Z"
                            fill="#C09D2A" />
                    </svg> Preview</button>
            </div>
            <button type="button" class="btn pdfbtncolor" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg
                    width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20.5007 26.6667C24.1773 26.6667 27.1673 23.6767 27.1673 20C27.1673 16.3234 24.1773 13.3334 20.5007 13.3334C16.824 13.3334 13.834 16.3234 13.834 20C13.834 23.6767 16.824 26.6667 20.5007 26.6667ZM20.5007 16.6667C22.3073 16.6667 23.834 18.1934 23.834 20C23.834 21.8067 22.3073 23.3334 20.5007 23.3334C18.694 23.3334 17.1673 21.8067 17.1673 20C17.1673 18.1934 18.694 16.6667 20.5007 16.6667Z"
                        fill="#C09D2A" />
                    <path
                        d="M5.2413 26.8934L6.90797 29.7767C7.79297 31.305 9.92297 31.8784 11.458 30.9934L12.3396 30.4834C13.3039 31.2419 14.367 31.8654 15.4996 32.3367V33.3334C15.4996 35.1717 16.9946 36.6667 18.833 36.6667H22.1663C24.0046 36.6667 25.4996 35.1717 25.4996 33.3334V32.3367C26.6319 31.8653 27.6949 31.2424 28.6596 30.485L29.5413 30.995C31.0796 31.8784 33.2046 31.3084 34.093 29.7767L35.758 26.895C36.1997 26.1295 36.3195 25.22 36.091 24.3663C35.8626 23.5125 35.3046 22.7843 34.5396 22.3417L33.698 21.855C33.8769 20.626 33.8769 19.3774 33.698 18.1484L34.5396 17.6617C35.3043 17.2188 35.8619 16.4906 36.0903 15.637C36.3187 14.7833 36.1992 13.874 35.758 13.1084L34.093 10.2267C33.208 8.69337 31.0796 8.11837 29.5413 9.00671L28.6596 9.51671C27.6954 8.75822 26.6323 8.1347 25.4996 7.66337V6.66671C25.4996 4.82837 24.0046 3.33337 22.1663 3.33337H18.833C16.9946 3.33337 15.4996 4.82837 15.4996 6.66671V7.66337C14.3674 8.13478 13.3043 8.75768 12.3396 9.51504L11.458 9.00504C9.91797 8.12004 7.7913 8.69337 6.9063 10.225L5.2413 13.1067C4.79961 13.8722 4.67982 14.7817 4.90826 15.6355C5.1367 16.4892 5.69468 17.2174 6.45964 17.66L7.3013 18.1467C7.12169 19.3752 7.12169 20.6232 7.3013 21.8517L6.45964 22.3384C5.69491 22.7816 5.13719 23.5101 4.90879 24.364C4.6804 25.2179 4.79998 26.1275 5.2413 26.8934ZM10.7846 22.2967C10.5964 21.5456 10.5007 20.7743 10.4996 20C10.4996 19.23 10.5963 18.4567 10.783 17.7034C10.8709 17.3523 10.842 16.9821 10.7006 16.6488C10.5593 16.3156 10.3132 16.0375 9.99964 15.8567L8.12797 14.7734L9.7913 11.8917L11.6996 12.995C12.0108 13.1751 12.3721 13.2494 12.7291 13.2067C13.0861 13.1641 13.4196 13.0067 13.6796 12.7584C14.8072 11.686 16.1669 10.8881 17.653 10.4267C17.9943 10.3225 18.2932 10.1114 18.5057 9.82459C18.7181 9.53775 18.8328 9.1903 18.833 8.83337V6.66671H22.1663V8.83337C22.1665 9.1903 22.2812 9.53775 22.4936 9.82459C22.706 10.1114 23.0049 10.3225 23.3463 10.4267C24.8321 10.8887 26.1917 11.6865 27.3196 12.7584C27.5799 13.0062 27.9134 13.1632 28.2703 13.2059C28.6272 13.2486 28.9883 13.1746 29.2996 12.995L31.2063 11.8934L32.873 14.775L30.9996 15.8567C30.6863 16.0377 30.4404 16.3158 30.299 16.649C30.1577 16.9822 30.1287 17.3523 30.2163 17.7034C30.403 18.4567 30.4996 19.23 30.4996 20C30.4996 20.7684 30.403 21.5417 30.2146 22.2967C30.1272 22.648 30.1565 23.0182 30.2981 23.3514C30.4397 23.6846 30.686 23.9626 30.9996 24.1434L32.8713 25.225L31.208 28.1067L29.2996 27.005C28.9885 26.8247 28.6272 26.7503 28.2701 26.7929C27.9131 26.8356 27.5795 26.9931 27.3196 27.2417C26.1921 28.3141 24.8324 29.112 23.3463 29.5734C23.0049 29.6776 22.706 29.8887 22.4936 30.1755C22.2812 30.4623 22.1665 30.8098 22.1663 31.1667L22.1696 33.3334H18.833V31.1667C18.8328 30.8098 18.7181 30.4623 18.5057 30.1755C18.2932 29.8887 17.9943 29.6776 17.653 29.5734C16.1671 29.1114 14.8076 28.3135 13.6796 27.2417C13.4201 26.9924 13.0864 26.8346 12.729 26.7921C12.3717 26.7497 12.0103 26.8251 11.6996 27.0067L9.79297 28.11L8.1263 25.2284L9.99964 24.1434C10.3133 23.9626 10.5596 23.6846 10.7012 23.3514C10.8428 23.0182 10.8721 22.648 10.7846 22.2967Z"
                        fill="#C09D2A" />
                </svg> Settings</button>
            <div class="col-auto" style="padding: 0%; margin: 0%;"><button type="button" class="btn"
                    data-bs-toggle="modal" data-bs-target="#animationModal"><svg width="50" height="50"
                        viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M41.6667 4.16669H16.6667C14.3687 4.16669 12.5 6.03544 12.5 8.33335V33.3334C12.5 35.6313 14.3687 37.5 16.6667 37.5H41.6667C43.9646 37.5 45.8333 35.6313 45.8333 33.3334V8.33335C45.8333 6.03544 43.9646 4.16669 41.6667 4.16669ZM16.6667 33.3334V8.33335H41.6667L41.6708 33.3334H16.6667Z"
                            fill="#C09D2A" />
                        <path
                            d="M8.33268 16.6667H4.16602V41.6667C4.16602 43.9646 6.03477 45.8333 8.33268 45.8333H33.3327V41.6667H8.33268V16.6667ZM31.2493 12.5H27.0827V18.75H20.8327V22.9167H27.0827V29.1667H31.2493V22.9167H37.4993V18.75H31.2493V12.5Z"
                            fill="#C09D2A" />
                    </svg>
                    Set Animations</button></div>

            <div class="col-auto">
                <button class="btn pdfbtncolor" id="downloadBtn3"><svg width="50" height="50" viewBox="0 0 50 50"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.2223 30.5833C16.8389 30.5833 16.5806 30.6208 16.4473 30.6583V33.1125C16.6056 33.15 16.8035 33.1604 17.0764 33.1604C18.0743 33.1604 18.6889 32.6562 18.6889 31.8041C18.6889 31.0416 18.1598 30.5833 17.2223 30.5833ZM24.4868 30.6083C24.0702 30.6083 23.7993 30.6458 23.6389 30.6833V36.1208C23.7993 36.1583 24.0577 36.1583 24.291 36.1583C25.9931 36.1708 27.1014 35.2333 27.1014 33.25C27.1139 31.5208 26.1035 30.6083 24.4868 30.6083Z"
                            fill="#C09D2A" />
                        <path
                            d="M29.1673 4.16669H12.5007C11.3956 4.16669 10.3358 4.60567 9.55437 5.38708C8.77297 6.16848 8.33398 7.22829 8.33398 8.33335V41.6667C8.33398 42.7718 8.77297 43.8316 9.55437 44.613C10.3358 45.3944 11.3956 45.8334 12.5007 45.8334H37.5007C38.6057 45.8334 39.6655 45.3944 40.4469 44.613C41.2283 43.8316 41.6673 42.7718 41.6673 41.6667V16.6667L29.1673 4.16669ZM19.7882 33.7292C19.1444 34.3334 18.1944 34.6042 17.0882 34.6042C16.8737 34.6065 16.6593 34.594 16.4465 34.5667V37.5375H14.584V29.3375C15.4245 29.2121 16.2738 29.155 17.1236 29.1667C18.284 29.1667 19.109 29.3875 19.6652 29.8313C20.1944 30.2521 20.5527 30.9417 20.5527 31.7542C20.5506 32.5709 20.2798 33.2604 19.7882 33.7292ZM27.7194 36.5521C26.8444 37.2792 25.5132 37.625 23.8861 37.625C22.9111 37.625 22.2215 37.5625 21.7527 37.5V29.3396C22.5936 29.2169 23.4426 29.1591 24.2923 29.1667C25.8694 29.1667 26.8944 29.45 27.6944 30.0542C28.559 30.6959 29.1007 31.7188 29.1007 33.1875C29.1007 34.7771 28.5194 35.875 27.7194 36.5521ZM35.4173 30.7709H32.2257V32.6688H35.209V34.1979H32.2257V37.5396H30.3382V29.2292H35.4173V30.7709ZM29.1673 18.75H27.084V8.33335L37.5007 18.75H29.1673Z"
                            fill="#C09D2A" />
                    </svg>
                    Download PDF</button>
            </div>

            <!-- <div class="col-auto">

                <button onclick="switchToOld()" class="btn pdfbtncolor" id="switch">Switch to Old version</button>
            </div> -->

            <div class="col-auto">

                <button onclick="canvaClear()" class="btn pdfbtncolor"><svg width="39" height="39" viewBox="0 0 39 39"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22.4294 4.36496C22.2814 4.21672 22.1056 4.09912 21.9121 4.01888C21.7186 3.93864 21.5112 3.89734 21.3018 3.89734C21.0923 3.89734 20.8849 3.93864 20.6914 4.01888C20.4979 4.09912 20.3222 4.21672 20.1742 4.36496L10.8601 13.6791C10.8362 13.6775 10.8138 13.6647 10.7899 13.6647C10.5805 13.6645 10.373 13.7057 10.1795 13.7859C9.986 13.8661 9.81024 13.9837 9.66234 14.132L7.40717 16.3872C6.96188 16.8309 6.60888 17.3584 6.36854 17.9393C6.1282 18.5202 6.00527 19.1429 6.00687 19.7715C6.00687 21.0506 6.50607 22.2532 7.40877 23.1543L8.53635 24.2818L5.15201 27.6662C4.70567 28.1045 4.3522 28.6282 4.11271 29.2061C3.87322 29.784 3.75261 30.4042 3.75809 31.0298C3.75055 31.7306 3.89873 32.4243 4.19192 33.0609C4.4851 33.6974 4.91598 34.261 5.45344 34.7108C6.28119 35.4109 7.34816 35.7953 8.4598 35.7953C9.78993 35.7953 11.0977 35.2514 12.0483 34.3009L15.3018 31.0489L16.4294 32.1749C18.238 33.9819 21.3879 33.9835 23.1949 32.1765L25.4517 29.9213C25.6 29.7734 25.7176 29.5977 25.7978 29.4042C25.878 29.2107 25.9192 29.0032 25.919 28.7938C25.919 28.7523 25.8982 28.714 25.895 28.6725L35.1884 19.3792C35.3367 19.2312 35.4543 19.0554 35.5345 18.8619C35.6147 18.6685 35.656 18.4611 35.656 18.2516C35.656 18.0421 35.6147 17.8347 35.5345 17.6412C35.4543 17.4478 35.3367 17.272 35.1884 17.124L22.4294 4.36496ZM20.9381 29.9213C20.6343 30.2114 20.2303 30.3732 19.8102 30.3729C19.3902 30.3726 18.9864 30.2103 18.683 29.9197L16.4278 27.6662C16.2798 27.5179 16.1041 27.4003 15.9106 27.3201C15.7171 27.2399 15.5097 27.1986 15.3002 27.1986C15.0908 27.1986 14.8834 27.2399 14.6899 27.3201C14.4964 27.4003 14.3206 27.5179 14.1727 27.6662L9.79312 32.0441C9.44023 32.4 8.96092 32.6018 8.4598 32.6055C8.11461 32.6111 7.77872 32.4935 7.51244 32.2738C7.32968 32.1225 7.18383 31.9316 7.086 31.7154C6.98816 31.4993 6.94091 31.2637 6.94785 31.0266C6.94618 30.8213 6.98585 30.6178 7.06449 30.4282C7.14313 30.2386 7.25913 30.0668 7.40558 29.9229L11.9175 25.411C12.0657 25.263 12.1833 25.0873 12.2636 24.8938C12.3438 24.7003 12.3851 24.4929 12.3851 24.2834C12.3851 24.074 12.3438 23.8666 12.2636 23.6731C12.1833 23.4796 12.0657 23.3038 11.9175 23.1559L9.66074 20.8991C9.5124 20.7516 9.39484 20.5761 9.3149 20.3828C9.23495 20.1895 9.19421 19.9823 9.19504 19.7731C9.19504 19.3457 9.3609 18.9454 9.66234 18.6439L10.7899 17.5164L22.0673 28.7954L20.9381 29.9213ZM23.9509 26.1064L13.447 15.6025L21.3018 7.7477L31.8057 18.2516L23.9509 26.1064Z"
                            fill="#C09D2A" />
                    </svg> Clear Card</button>
            </div>

            <div class="col-auto">

                <button onclick="dublicateObject()" class="btn pdfbtncolor"><svg width="39" height="39"
                        viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M32.286 3.89758H16.3372C14.578 3.89758 13.1474 5.32819 13.1474 7.08735V13.4669H6.76789C5.00873 13.4669 3.57812 14.8975 3.57812 16.6566V32.6054C3.57812 34.3646 5.00873 35.7952 6.76789 35.7952H22.7167C24.4759 35.7952 25.9065 34.3646 25.9065 32.6054V26.2259H32.286C34.0451 26.2259 35.4758 24.7953 35.4758 23.0362V7.08735C35.4758 5.32819 34.0451 3.89758 32.286 3.89758ZM6.76789 32.6054V16.6566H22.7167L22.7199 32.6054H6.76789ZM32.286 23.0362H25.9065V16.6566C25.9065 14.8975 24.4759 13.4669 22.7167 13.4669H16.3372V7.08735H32.286V23.0362Z"
                            fill="#C09D2A" />
                    </svg> Duplicate</button>
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
                onclick="sidebarbackaddimg()"><svg width="39" height="39" viewBox="0 0 39 39" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M32.3498 3.89758H13.2112C11.4521 3.89758 10.0215 5.32819 10.0215 7.08735V26.2259C10.0215 27.9851 11.4521 29.4157 13.2112 29.4157H32.3498C34.109 29.4157 35.5396 27.9851 35.5396 26.2259V7.08735C35.5396 5.32819 34.109 3.89758 32.3498 3.89758ZM13.2112 26.2259V7.08735H32.3498L32.353 26.2259H13.2112Z"
                        fill="#C09D2A" />
                    <path
                        d="M6.83234 13.467H3.64258V32.6056C3.64258 34.3647 5.07319 35.7953 6.83234 35.7953H25.9709V32.6056H6.83234V13.467ZM24.376 10.2772H21.1863V15.0619H16.4016V18.2516H21.1863V23.0363H24.376V18.2516H29.1607V15.0619H24.376V10.2772Z"
                        fill="#C09D2A" />
                </svg>
                + Add Card</label></div>

        <div class="col-auto" style="padding: 0%; margin: 0%;"><label for="" class="btn topbtns"
                onclick="addTemplate()"><svg width="39" height="39" viewBox="0 0 39 39" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M29.344 27.8209C31.1031 27.8209 32.5337 26.3903 32.5337 24.6311V8.68232C32.5337 6.92316 31.1031 5.49255 29.344 5.49255H10.2054C8.44623 5.49255 7.01562 6.92316 7.01562 8.68232V24.6311C7.01562 26.3903 8.44623 27.8209 10.2054 27.8209H29.344ZM10.2054 8.68232H29.344L29.3472 24.6311H10.2054V8.68232ZM7.01562 31.0107H32.5337V34.2004H7.01562V31.0107Z"
                        fill="#C09D2A" />
                </svg>
                + Add Template</label></div>

        <div class="col-auto" style="padding: 0%; margin: 0%;"><label for="uploadImage" class="btn topbtns"><svg
                    width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.57648 8.68232H27.3099V19.8465H30.4997V8.68232C30.4997 6.92316 29.0691 5.49255 27.3099 5.49255H6.57648C4.81733 5.49255 3.38672 6.92316 3.38672 8.68232V27.8209C3.38672 29.58 4.81733 31.0107 6.57648 31.0107H19.3355V27.8209H6.57648V8.68232Z"
                        fill="#C09D2A" />
                    <path d="M12.9565 18.2515L8.17188 24.6311H25.7156L19.336 15.0618L14.5514 21.4413L12.9565 18.2515Z"
                        fill="#C09D2A" />
                    <path
                        d="M30.4978 23.0363H27.3081V27.8209H22.5234V31.0107H27.3081V35.7953H30.4978V31.0107H35.2825V27.8209H30.4978V23.0363Z"
                        fill="#C09D2A" />
                </svg>
                + Add Image
                <input type="file" style="display: none;" id="uploadImage" onchange="uploadImageInCanvas(event)"
                    accept="image/*">
            </label></div>

        <div class="col-auto" style="padding: 0%; margin: 0%;"><button class="btn topbtns" onclick=" showTxtTool()"><svg
                    width="40" height="39" viewBox="0 0 40 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.79883 13.4669H11.9886V10.2772H17.1751L13.0731 29.4157H8.79883V32.6055H21.5579V29.4157H17.9662L22.0682 10.2772H27.9374V13.4669H31.1272V7.0874H8.79883V13.4669Z"
                        fill="#C09D2A" />
                </svg>
                + Add Text</button></div>

        <div class="col-auto" style="padding: 0%; margin: 0%;"><button class="btn topbtns" id="addsticker"
                onclick="show()"><svg width="39" height="39" viewBox="0 0 39 39" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M34.7754 16.6279C33.265 9.2516 26.6941 3.89758 19.1519 3.89758C10.3578 3.89758 3.20312 11.0522 3.20312 19.8464C3.20312 27.3886 8.55714 33.9595 15.9335 35.4699C16.1919 35.5247 16.4599 35.5138 16.713 35.438C16.966 35.3621 17.1959 35.2239 17.3816 35.036L34.34 18.0777C34.7196 17.6981 34.8823 17.1558 34.7754 16.6279ZM17.5571 29.4157C17.5497 26.874 18.3084 24.3891 19.7341 22.285C20.1935 21.6069 20.7157 20.9736 21.2939 20.3934C21.8733 19.8162 22.5055 19.2945 23.1822 18.8352C23.8661 18.3748 24.5924 17.9807 25.3512 17.6582C26.1184 17.3345 26.9238 17.0841 27.7452 16.915C28.884 16.6888 30.0481 16.6169 31.2061 16.7013L17.6033 30.304C17.5826 30.009 17.5571 29.7139 17.5571 29.4157ZM6.39289 19.8464C6.39289 12.8114 12.1169 7.08735 19.1519 7.08735C23.7914 7.08735 27.9684 9.62161 30.2029 13.4748C29.1621 13.4786 28.1242 13.5844 27.104 13.7906C26.0785 14.0012 25.0721 14.3138 24.1072 14.7204C23.1592 15.1238 22.2519 15.6167 21.3975 16.1925C20.5475 16.7683 19.7548 17.4222 19.0387 18.1383C18.3226 18.8544 17.6703 19.6454 17.0914 20.4987C16.5188 21.3488 16.0228 22.2595 15.6209 23.2068C14.7926 25.172 14.3664 27.2831 14.3673 29.4157C14.3673 30.1988 14.4438 30.9771 14.5571 31.7458C9.7246 29.875 6.39289 25.1669 6.39289 19.8464Z"
                        fill="#C09D2A" />
                </svg>
                +Add Sticker </button></div>

        <div class="col-auto" style="padding: 0%; margin: 0%;"><button class="btn pdfbtncolor" id="save2"
                onclick="saveData()" data-bs-toggle="modal" data-bs-target="#exampleModaliframe"><svg width="41"
                    height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.83333 8.33333H17.1667V5H5.5V16.6667H8.83333V8.33333ZM17.1667 31.6667H8.83333V23.3333H5.5V35H17.1667V31.6667ZM35.5 23.3333H32.1667V31.6667H23.8333V35H35.5V23.3333ZM32.1667 16.6667H35.5V5H23.8333V8.33333H32.1667V16.6667Z"
                        fill="#C09D2A" />
                </svg>
                Preview</button></div>

        <div class="col-auto" style="padding: 0%; margin: 0%;"><button type="button" class="btn pdfbtncolor"
                data-bs-toggle="modal" data-bs-target="#exampleModal"><svg width="41" height="40" viewBox="0 0 41 40"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20.5007 26.6667C24.1773 26.6667 27.1673 23.6767 27.1673 20C27.1673 16.3234 24.1773 13.3334 20.5007 13.3334C16.824 13.3334 13.834 16.3234 13.834 20C13.834 23.6767 16.824 26.6667 20.5007 26.6667ZM20.5007 16.6667C22.3073 16.6667 23.834 18.1934 23.834 20C23.834 21.8067 22.3073 23.3334 20.5007 23.3334C18.694 23.3334 17.1673 21.8067 17.1673 20C17.1673 18.1934 18.694 16.6667 20.5007 16.6667Z"
                        fill="#C09D2A" />
                    <path
                        d="M5.2413 26.8934L6.90797 29.7767C7.79297 31.305 9.92297 31.8784 11.458 30.9934L12.3396 30.4834C13.3039 31.2419 14.367 31.8654 15.4996 32.3367V33.3334C15.4996 35.1717 16.9946 36.6667 18.833 36.6667H22.1663C24.0046 36.6667 25.4996 35.1717 25.4996 33.3334V32.3367C26.6319 31.8653 27.6949 31.2424 28.6596 30.485L29.5413 30.995C31.0796 31.8784 33.2046 31.3084 34.093 29.7767L35.758 26.895C36.1997 26.1295 36.3195 25.22 36.091 24.3663C35.8626 23.5125 35.3046 22.7843 34.5396 22.3417L33.698 21.855C33.8769 20.626 33.8769 19.3774 33.698 18.1484L34.5396 17.6617C35.3043 17.2188 35.8619 16.4906 36.0903 15.637C36.3187 14.7833 36.1992 13.874 35.758 13.1084L34.093 10.2267C33.208 8.69337 31.0796 8.11837 29.5413 9.00671L28.6596 9.51671C27.6954 8.75822 26.6323 8.1347 25.4996 7.66337V6.66671C25.4996 4.82837 24.0046 3.33337 22.1663 3.33337H18.833C16.9946 3.33337 15.4996 4.82837 15.4996 6.66671V7.66337C14.3674 8.13478 13.3043 8.75768 12.3396 9.51504L11.458 9.00504C9.91797 8.12004 7.7913 8.69337 6.9063 10.225L5.2413 13.1067C4.79961 13.8722 4.67982 14.7817 4.90826 15.6355C5.1367 16.4892 5.69468 17.2174 6.45964 17.66L7.3013 18.1467C7.12169 19.3752 7.12169 20.6232 7.3013 21.8517L6.45964 22.3384C5.69491 22.7816 5.13719 23.5101 4.90879 24.364C4.6804 25.2179 4.79998 26.1275 5.2413 26.8934ZM10.7846 22.2967C10.5964 21.5456 10.5007 20.7743 10.4996 20C10.4996 19.23 10.5963 18.4567 10.783 17.7034C10.8709 17.3523 10.842 16.9821 10.7006 16.6488C10.5593 16.3156 10.3132 16.0375 9.99964 15.8567L8.12797 14.7734L9.7913 11.8917L11.6996 12.995C12.0108 13.1751 12.3721 13.2494 12.7291 13.2067C13.0861 13.1641 13.4196 13.0067 13.6796 12.7584C14.8072 11.686 16.1669 10.8881 17.653 10.4267C17.9943 10.3225 18.2932 10.1114 18.5057 9.82459C18.7181 9.53775 18.8328 9.1903 18.833 8.83337V6.66671H22.1663V8.83337C22.1665 9.1903 22.2812 9.53775 22.4936 9.82459C22.706 10.1114 23.0049 10.3225 23.3463 10.4267C24.8321 10.8887 26.1917 11.6865 27.3196 12.7584C27.5799 13.0062 27.9134 13.1632 28.2703 13.2059C28.6272 13.2486 28.9883 13.1746 29.2996 12.995L31.2063 11.8934L32.873 14.775L30.9996 15.8567C30.6863 16.0377 30.4404 16.3158 30.299 16.649C30.1577 16.9822 30.1287 17.3523 30.2163 17.7034C30.403 18.4567 30.4996 19.23 30.4996 20C30.4996 20.7684 30.403 21.5417 30.2146 22.2967C30.1272 22.648 30.1565 23.0182 30.2981 23.3514C30.4397 23.6846 30.686 23.9626 30.9996 24.1434L32.8713 25.225L31.208 28.1067L29.2996 27.005C28.9885 26.8247 28.6272 26.7503 28.2701 26.7929C27.9131 26.8356 27.5795 26.9931 27.3196 27.2417C26.1921 28.3141 24.8324 29.112 23.3463 29.5734C23.0049 29.6776 22.706 29.8887 22.4936 30.1755C22.2812 30.4623 22.1665 30.8098 22.1663 31.1667L22.1696 33.3334H18.833V31.1667C18.8328 30.8098 18.7181 30.4623 18.5057 30.1755C18.2932 29.8887 17.9943 29.6776 17.653 29.5734C16.1671 29.1114 14.8076 28.3135 13.6796 27.2417C13.4201 26.9924 13.0864 26.8346 12.729 26.7921C12.3717 26.7497 12.0103 26.8251 11.6996 27.0067L9.79297 28.11L8.1263 25.2284L9.99964 24.1434C10.3133 23.9626 10.5596 23.6846 10.7012 23.3514C10.8428 23.0182 10.8721 22.648 10.7846 22.2967Z"
                        fill="#C09D2A" />
                </svg>Settings</button></div>

        <div class="col-auto" style="padding: 0%; margin: 0%;"><button type="button" class="btn" data-bs-toggle="modal"
                data-bs-target="#animationModal"><svg width="41" height="40" viewBox="0 0 50 50" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M41.6667 4.16669H16.6667C14.3687 4.16669 12.5 6.03544 12.5 8.33335V33.3334C12.5 35.6313 14.3687 37.5 16.6667 37.5H41.6667C43.9646 37.5 45.8333 35.6313 45.8333 33.3334V8.33335C45.8333 6.03544 43.9646 4.16669 41.6667 4.16669ZM16.6667 33.3334V8.33335H41.6667L41.6708 33.3334H16.6667Z"
                        fill="#C09D2A" />
                    <path
                        d="M8.33268 16.6667H4.16602V41.6667C4.16602 43.9646 6.03477 45.8333 8.33268 45.8333H33.3327V41.6667H8.33268V16.6667ZM31.2493 12.5H27.0827V18.75H20.8327V22.9167H27.0827V29.1667H31.2493V22.9167H37.4993V18.75H31.2493V12.5Z"
                        fill="#C09D2A" />
                </svg>
                Set Animations</button></div>

        <div class="col-auto" style="padding: 0%; margin: 0%;"><button class="btn pdfbtncolor" onclick="dwnPDF()"
                id="downloadBtn3"><svg width="41" height="40" viewBox="0 0 50 50" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.2223 30.5833C16.8389 30.5833 16.5806 30.6208 16.4473 30.6583V33.1125C16.6056 33.15 16.8035 33.1604 17.0764 33.1604C18.0743 33.1604 18.6889 32.6562 18.6889 31.8041C18.6889 31.0416 18.1598 30.5833 17.2223 30.5833ZM24.4868 30.6083C24.0702 30.6083 23.7993 30.6458 23.6389 30.6833V36.1208C23.7993 36.1583 24.0577 36.1583 24.291 36.1583C25.9931 36.1708 27.1014 35.2333 27.1014 33.25C27.1139 31.5208 26.1035 30.6083 24.4868 30.6083Z"
                        fill="#C09D2A" />
                    <path
                        d="M29.1673 4.16669H12.5007C11.3956 4.16669 10.3358 4.60567 9.55437 5.38708C8.77297 6.16848 8.33398 7.22829 8.33398 8.33335V41.6667C8.33398 42.7718 8.77297 43.8316 9.55437 44.613C10.3358 45.3944 11.3956 45.8334 12.5007 45.8334H37.5007C38.6057 45.8334 39.6655 45.3944 40.4469 44.613C41.2283 43.8316 41.6673 42.7718 41.6673 41.6667V16.6667L29.1673 4.16669ZM19.7882 33.7292C19.1444 34.3334 18.1944 34.6042 17.0882 34.6042C16.8737 34.6065 16.6593 34.594 16.4465 34.5667V37.5375H14.584V29.3375C15.4245 29.2121 16.2738 29.155 17.1236 29.1667C18.284 29.1667 19.109 29.3875 19.6652 29.8313C20.1944 30.2521 20.5527 30.9417 20.5527 31.7542C20.5506 32.5709 20.2798 33.2604 19.7882 33.7292ZM27.7194 36.5521C26.8444 37.2792 25.5132 37.625 23.8861 37.625C22.9111 37.625 22.2215 37.5625 21.7527 37.5V29.3396C22.5936 29.2169 23.4426 29.1591 24.2923 29.1667C25.8694 29.1667 26.8944 29.45 27.6944 30.0542C28.559 30.6959 29.1007 31.7188 29.1007 33.1875C29.1007 34.7771 28.5194 35.875 27.7194 36.5521ZM35.4173 30.7709H32.2257V32.6688H35.209V34.1979H32.2257V37.5396H30.3382V29.2292H35.4173V30.7709ZM29.1673 18.75H27.084V8.33335L37.5007 18.75H29.1673Z"
                        fill="#C09D2A" />
                </svg>

                Download PDF</button></div>

        <!-- <div class="col-auto" style="padding: 0%; margin: 0%;"><button onclick="switchToOld()" class="btn pdfbtncolor"
                id="switch">Switch to Old version</button></div> -->

        <div class="col-auto" style="padding: 0%; margin: 0%;"><button onclick="canvaClear()"
                class="btn pdfbtncolor"><svg width="39" height="39" viewBox="0 0 39 39" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M22.4294 4.36496C22.2814 4.21672 22.1056 4.09912 21.9121 4.01888C21.7186 3.93864 21.5112 3.89734 21.3018 3.89734C21.0923 3.89734 20.8849 3.93864 20.6914 4.01888C20.4979 4.09912 20.3222 4.21672 20.1742 4.36496L10.8601 13.6791C10.8362 13.6775 10.8138 13.6647 10.7899 13.6647C10.5805 13.6645 10.373 13.7057 10.1795 13.7859C9.986 13.8661 9.81024 13.9837 9.66234 14.132L7.40717 16.3872C6.96188 16.8309 6.60888 17.3584 6.36854 17.9393C6.1282 18.5202 6.00527 19.1429 6.00687 19.7715C6.00687 21.0506 6.50607 22.2532 7.40877 23.1543L8.53635 24.2818L5.15201 27.6662C4.70567 28.1045 4.3522 28.6282 4.11271 29.2061C3.87322 29.784 3.75261 30.4042 3.75809 31.0298C3.75055 31.7306 3.89873 32.4243 4.19192 33.0609C4.4851 33.6974 4.91598 34.261 5.45344 34.7108C6.28119 35.4109 7.34816 35.7953 8.4598 35.7953C9.78993 35.7953 11.0977 35.2514 12.0483 34.3009L15.3018 31.0489L16.4294 32.1749C18.238 33.9819 21.3879 33.9835 23.1949 32.1765L25.4517 29.9213C25.6 29.7734 25.7176 29.5977 25.7978 29.4042C25.878 29.2107 25.9192 29.0032 25.919 28.7938C25.919 28.7523 25.8982 28.714 25.895 28.6725L35.1884 19.3792C35.3367 19.2312 35.4543 19.0554 35.5345 18.8619C35.6147 18.6685 35.656 18.4611 35.656 18.2516C35.656 18.0421 35.6147 17.8347 35.5345 17.6412C35.4543 17.4478 35.3367 17.272 35.1884 17.124L22.4294 4.36496ZM20.9381 29.9213C20.6343 30.2114 20.2303 30.3732 19.8102 30.3729C19.3902 30.3726 18.9864 30.2103 18.683 29.9197L16.4278 27.6662C16.2798 27.5179 16.1041 27.4003 15.9106 27.3201C15.7171 27.2399 15.5097 27.1986 15.3002 27.1986C15.0908 27.1986 14.8834 27.2399 14.6899 27.3201C14.4964 27.4003 14.3206 27.5179 14.1727 27.6662L9.79312 32.0441C9.44023 32.4 8.96092 32.6018 8.4598 32.6055C8.11461 32.6111 7.77872 32.4935 7.51244 32.2738C7.32968 32.1225 7.18383 31.9316 7.086 31.7154C6.98816 31.4993 6.94091 31.2637 6.94785 31.0266C6.94618 30.8213 6.98585 30.6178 7.06449 30.4282C7.14313 30.2386 7.25913 30.0668 7.40558 29.9229L11.9175 25.411C12.0657 25.263 12.1833 25.0873 12.2636 24.8938C12.3438 24.7003 12.3851 24.4929 12.3851 24.2834C12.3851 24.074 12.3438 23.8666 12.2636 23.6731C12.1833 23.4796 12.0657 23.3038 11.9175 23.1559L9.66074 20.8991C9.5124 20.7516 9.39484 20.5761 9.3149 20.3828C9.23495 20.1895 9.19421 19.9823 9.19504 19.7731C9.19504 19.3457 9.3609 18.9454 9.66234 18.6439L10.7899 17.5164L22.0673 28.7954L20.9381 29.9213ZM23.9509 26.1064L13.447 15.6025L21.3018 7.7477L31.8057 18.2516L23.9509 26.1064Z"
                        fill="#C09D2A" />
                </svg>
                Clear Card</button></div>
        <div class="col-auto" style="padding: 0%; margin: 0%;">
            <button class="btn pdfbtncolor" id="undoBtn" onclick="undo()"><svg width="41" height="40"
                    viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15.4993 16.6667H25.4993C28.256 16.6667 30.4993 18.91 30.4993 21.6667C30.4993 24.4234 28.256 26.6667 25.4993 26.6667H20.4993V30H25.4993C30.0943 30 33.8327 26.2617 33.8327 21.6667C33.8327 17.0717 30.0943 13.3334 25.4993 13.3334H15.4993V8.33337L7.16602 15L15.4993 21.6667V16.6667Z"
                        fill="#C09D2A" />
                </svg>
                Undo</button>
        </div>

        <div class="col-auto" style="padding: 0%; margin: 0%;">

            <button class="btn pdfbtncolor" id="redoBtn" onclick="redo()"><svg width="41" height="40"
                    viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15.4993 30H20.4993V26.6667H15.4993C12.7427 26.6667 10.4993 24.4234 10.4993 21.6667C10.4993 18.91 12.7427 16.6667 15.4993 16.6667H25.4993V21.6667L33.8327 15L25.4993 8.33337V13.3334H15.4993C10.9043 13.3334 7.16602 17.0717 7.16602 21.6667C7.16602 26.2617 10.9043 30 15.4993 30Z"
                        fill="#C09D2A" />
                </svg>
                Redo</button>
        </div>


        <div class="col-auto" style="padding: 0%; margin: 0%;"><button onclick="dublicateObject()"
                class="btn pdfbtncolor"><svg width="39" height="39" viewBox="0 0 39 39" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M32.286 3.89758H16.3372C14.578 3.89758 13.1474 5.32819 13.1474 7.08735V13.4669H6.76789C5.00873 13.4669 3.57812 14.8975 3.57812 16.6566V32.6054C3.57812 34.3646 5.00873 35.7952 6.76789 35.7952H22.7167C24.4759 35.7952 25.9065 34.3646 25.9065 32.6054V26.2259H32.286C34.0451 26.2259 35.4758 24.7953 35.4758 23.0362V7.08735C35.4758 5.32819 34.0451 3.89758 32.286 3.89758ZM6.76789 32.6054V16.6566H22.7167L22.7199 32.6054H6.76789ZM32.286 23.0362H25.9065V16.6566C25.9065 14.8975 24.4759 13.4669 22.7167 13.4669H16.3372V7.08735H32.286V23.0362Z"
                        fill="#C09D2A" />
                </svg>
                Duplicate</button></div>

        <div class="col-auto" style="padding: 0%; margin: 0%;"><button class="btn save-btn-new" id="save1"
                onclick="saveAll()"><svg width="41" height="40" viewBox="0 0 51 50" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M25.1634 4.16669C13.6759 4.16669 4.33008 13.5125 4.33008 25C4.33008 36.4875 13.6759 45.8334 25.1634 45.8334C36.6509 45.8334 45.9967 36.4875 45.9967 25C45.9967 13.5125 36.6509 4.16669 25.1634 4.16669ZM25.1634 41.6667C15.9738 41.6667 8.49675 34.1896 8.49675 25C8.49675 15.8104 15.9738 8.33335 25.1634 8.33335C34.353 8.33335 41.8301 15.8104 41.8301 25C41.8301 34.1896 34.353 41.6667 25.1634 41.6667Z"
                        fill="#C09D2A" />
                    <path
                        d="M20.9949 28.3063L16.2053 23.525L13.2637 26.475L20.9991 34.1938L34.9699 20.2229L32.0241 17.2771L20.9949 28.3063Z"
                        fill="#C09D2A" />
                </svg>
                Save</button></div>

    </div>

</div>


<!-- IframeModal -->
<!-- Modal -->
<div class="modal fade modal-for-view-cards" height="70vh" id="exampleModaliframe" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <button type="button" class="btn btn-sm btn-warning" onclick="saveNoneOfThese()"
                    data-bs-dismiss="modal">Non Animations</button>
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
        Background Image </h1>
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
            <img src="/icon/trash-alt-svgrepo-com.svg" class="deleteBtn2" onclick="deleteImage()" id="trash2"
                width="42px" height="42px" style="margin-top: 5px;" alt="">
        </div>
        <div class="color-picker-container">
            <label for="opacityRange2" class="color-picker-label">Opacity:</label>
            <input type="range" id="opacityRange2" min="0" max="100" step="10" value="100" class="color-picker"
                oninput="changeOpacity(this)">
        </div>

        <button onclick="moveForward()" class="moveForward">Move Forward</button>
        <button onclick="moveBackword()" class="moveBackword">Move Backward</button>
    </div>
</div>

<div class="sidebaraddtext" style="display: none;z-index: 2;">
    <h1 class="text-center" id="sidecustomizationtext"
        style="color:rgb(129, 2, 129) ;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
        Customization the Text</h1>
    <div id="txtTool" class="row  pt-3 pb-3">
        <div class="col-lg-3 col-auto">
            <h5>Font Style:</h5>
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
                        <option value="GloriousCopperDEMO, sans-serif"
                            style="font-family: 'GloriousCopperDEMO', sans-serif;">GloriousCopperDEMO</option>
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

        <div class="f-color-bg-color">
            <div class="box">
                <label for="canvasColor" class="color-picker-label">Background Color:</label>
                <input style="width: 100%;" type="color" id="canvasColor" class="color-picker" value="#ffffff"
                    oninput="chnageBGColor()">
            </div>
            <div class="box">
                <h5>Font Color: </h5>
                <input type="color" id="colorPicker" oninput="changeTextColor2()">
            </div>
        </div>

        <div class="add-text-boxes">
            <div class="box">
                <label for="textColor" class="color-picker-label">Text: </label>
            </div>
            <div class="box">
                <input type="text" style="width: 100%;" id="textInput" placeholder="Enter text">
            </div>
            <div class="box">
                <button style="width: 100%;" onclick="addText()" class="btn btn-secondary">Add Text</button>
            </div>
        </div>
    </div>

    <div class="font-etc-inline">
        <div class="col-lg-3 col-auto">
            <h5>Font Size: </h5>
        </div>
        <div class="col-lg-3 col-auto  btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group me-2" role="group" aria-label="First group">
                <button type="button" class="btn btn-secondary " id="buttonplus" style="width: 95px;"
                    onclick="increaseText()">+</button>
                <button type="button" class="btn btn-secondary" id="buttonminus"
                    style="width: 95px; border-left: 2px solid black;" onclick="decreaseText()">-</button>
            </div>
        </div>


        <details class="dropdown">
            <summary role="button">
                <a class="button">Text Effects <i class="fa fa-angle-down" aria-hidden="true"></i></a>
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
            </ul>
        </details>

    </div>








    <div class="many-btns-inline">
        <button id="deleteBtn">Delete</button>
        <button id="undoBtn" onclick="undo()">Undo</button>
        <button id="redoBtn" onclick="redo()">Redo</button>
        <button onclick="moveForward()" class="moveForward">Move Forward</button>
        <button onclick="moveBackword()" class="moveBackword">Move Backward</button>
    </div>

    <input type="file" id="uploadImage2" onchange="uploadImageInCanvas(event)" accept="image/*">
    <div class="color-picker-container">
        <label for="opacityRange" class="color-picker-label">Opacity:</label>
        <input type="range" id="opacityRange" min="0" max="100" step="10" value="100" class="color-picker"
            oninput="changeOpacity(this)">
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


    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/6603116da0c6737bd1251e52/1hptvo5j7';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.5.0/fabric.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/5.3.1/fabric.min.js"
    integrity="sha512-CeIsOAsgJnmevfCi2C7Zsyy6bQKi43utIjdA87Q0ZY84oDqnI0uwfM9+bKiIkI75lUeI00WG/+uJzOmuHlesMA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/invitation.js"></script>