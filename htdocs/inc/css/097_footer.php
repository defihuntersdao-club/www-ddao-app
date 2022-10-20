.footer
{
    text-align:center;
     position:fixed;
    left:0px;
    bottom:0px;
    height:30px;
    width:100%;
    font-size:12px;

    background-color:#4558BE;
    color:#ffffff;
    transition:0.5s;
    border-top:solid 1px #ffffff;
}
body.dark-theme .footer
{
    border-top:solid 1px #444444;
    background-color:#4558BE;
    color:#ffffff;
    transition:0.5s;
}
.footer:hover
{
    height:65px;
    border-top:solid 1px #4558BE;
#    background-color:#a4b1f6;
#    background-color:#f0f1f9;
    background-color:#daddf0;
    color:#4558BE;
}
body.dark-theme .footer:hover
{

//    background-color:#171e45;
    background-color:#262a32;
}

.footer .txt
{
    margin:2px;
    min-height:6px;
//    position:absolute;;
//    padding:5px 0 5px 0;
    font-size:14px;
    transition:0.3s;
    user-select: none;
}
.footer:hover .txt
{
//    margin:-40px 0 0 0;
//    padding:0;
//    visibility: hidden;
//    display:none;
    font-size:0px;
    color:rgba(0,0,0,0);
}
.footer .links
{
    text-align:center;
    margin:0 auto;
}
.footer .l
{
    display:inline;
    margin:5px;
//    border:solid 1px red;
    transition:0.4s;
    font-size:8px;
    border-radius:5px;
    background-color:#4558BE;
    color:#ffffff;
    padding:5px;
    transition: all 0.5s;
}

.footer:hover .l
{
    font-size:30px;
    border-radius:10px;
//    border:solid 1px red;
}

.footer .l i
{
    color:#ffffff;
    width:35px;
    transition: color 0.2s;
}
body.dark-theme .footer .l i
{
    color:#222222;
}
.footer .l:hover i
{
    color:#222222;
}

body.dark-theme .footer .l:hover i
{
    color:#cccccc;
}

.footer .l:hover
{
//    transform: rotate(45deg)
//    border:solid 1px red;
}
.footer .twitter:hover {
    background-color: #2a7ec3;
}
.footer .youtube:hover {
    background-color: #c70606;
}
.footer .telegram:hover {
    background-color: #259cd8;
}
.footer .facebook:hover 
{
    background-color: #2a44b9;
}
.footer .discord:hover 
{
    background-color: #5865f2;
}
.footer .medium:hover 
{
    background-color: #ffc017;
}

.footer .github:hover 
{
    background-color: #ffffff;
}

body.dark-theme .footer .github:hover 
{
    background-color: #000;
}


.footer .github:hover i
{
//    color: #ffffff !important;
}

