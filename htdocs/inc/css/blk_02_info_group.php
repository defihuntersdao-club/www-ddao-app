.info_group .title
{
    
}
.info_group 
{
//    color:#b47f75;
    color:#5b5f6b;
}
body.dark-theme .info_group 
{

}
.info_group .title 
{
//    border:solid 1px red;
//    border-radius:10px;
}
.info_group .title 
{
    color:#000;
}
body.dark-theme .info_group .title
{
    color:#ffffff;
}
.info_group .title .l 
{
    width:70px;
    height:70px;
}
.info_group .title .l img
,.info_group .title .l svg
{
    width:100%;
    height:100%;
    max-width:400px;
//    max-width:400px;
//    fill:#000;
    fill:#4558BE;
}
body.dark-theme .info_group .title .l svg
{
//    fill:#ffffff;
}
.info_group .title .n
{
    padding:0 0 0 10px;
    font-size:40px;
    font-weight:bold;
}
.info_group .title .n img
{
    width:30px;
    height:30px;
}
.info_group .title .c
{
    font-size:12px;
    color:#909090;
}
.info_group .data 
{
    margin:10px 0 0 0;
}
.info_group .data table
{
    width:100%;
    text-align:center;
}
.info_group .data th
{
    color:#4558BE;;
    padding:0 0 10px 0;
    font-weight:bold;
    font-size:12px;
}
.info_group .data th:hover
{
    color:#000;
}
body.dark-theme .info_group .data th:hover
{
    color:#ffffff;
}
.info_group .data .i
{
    width:20%;
}
.info_group .data td
{
    border-top:solid 1px #909090;
    padding:10px 0 10px 0;
}
body.dark-theme .info_group .data td
{
//    border-top:solid 1px #5b5f6b;
}
.info_group .link_buy button
{
    width:100%;
}
.info_group .humster_balance
{
    text-align:center;
    color:#4558BE;
    font-weight:bold;
}
.info_group .humster
{
    text-align:center;
}
.info_group .humster img
{
//    max-width:400px;
}
.info_group .tr_act:hover
{
    
}
.info_group .tr_act .i
{
//    display:none;
//    visibility: hidden;
    background:url(/images/more_down2.png) no-repeat center center;
//    background-repeat: no-repeat;
    transition: 0.3s;    
}
.info_group .tr_act:hover .i
{
    background:url(/images/dot.gif) no-repeat center center;
//    transition: 0.3s;
    cursor:pointer;
}
.info_group .tr_act:hover .i span
{
    display:none;
    visibility: hidden;
    position:absolute;
    z-index:-99;
    top:-9999;
    left:-9999;
}
.info_group .tr_act .btn
{
    visibility: hidden;
    scale: 0;
    transition: 0.3s;    
}
.info_group .tr_act:hover .btn
{
    scale: 1;
    visibility: visible;
}