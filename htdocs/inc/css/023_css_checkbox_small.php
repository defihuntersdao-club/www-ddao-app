.switch2 
{
  position: relative;
  display: inline-block;
  width: 30px;
  height: 17px;
}

/* Hide default HTML checkbox */
.switch2 input 
{
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.switch2 .slider 
{
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}
.dark-theme .switch2 .slider
{
  background-color: #555555;
}

.switch2 .slider:before 
{
  position: absolute;
  content: "";
  height: 13px;
  width: 13px;
  left: 2px;
  bottom: 2px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

.switch2 input:checked + .slider 
{
  background-color: #4558BE;
}

.switch2 input:focus + .slider 
{
  box-shadow: 0 0 1px #4558BE;
}

.switch2 input:checked + .slider:before 
{
  -webkit-transform: translateX(13px);
  -ms-transform: translateX(13px);
  transform: translateX(13px);
}

/* Rounded sliders */
.switch2 .slider.round 
{
  border-radius: 17px;
}

.switch2 .slider.round:before 
{
  border-radius: 50%;
}
