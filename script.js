   function openFullImg(pic){
    var fullImgBox = document.getElementById("fullImgBox");
    var fullImg = document.getElementById("fullImg");

    fullImgBox.style.display = "flex";
    fullImg.src = pic;
  }
  function closeFullImg(){
    var fullImgBox = document.getElementById("fullImgBox");
    var fullImg = document.getElementById("fullImg");
    
    fullImgBox.style.display = "none";
  }

  