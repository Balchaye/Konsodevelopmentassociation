
<div class="container">
  <iframe class="video" width="640" height="360" src="https://www.youtube.com/embed/6lMZN4UqzzI" frameborder="0" allowfullscreen></iframe>
  <button class="theater-toggle">Click to toggle Theater Mode</button>
</div>

//css code 
.container {
  width: 100%;
  height: 100%;
}

.theater {
  -webkit-transform: scale(1.5,1.5);
  position: fixed;
  left: 400px;
  top: 100px;
  border-right: 100% solid black;
  border-left: 100% solid black;
  margin: auto;
}
.theater-toggle {
  margin: auto;
}

//JS 
var main = function(){
  var video = $(".video")
  var theaterToggle = $(".theater-toggle")
  
  theaterToggle.click(function(){
    video.toggleClass("theater");
  });
};

$(document).ready(main)
