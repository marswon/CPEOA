//隔行变色
$(document).ready(function(){
  $(".tablecss tr:even").css("background-color", "#f2eada");
  
  $(".tablecss tr").hover(function(){
    $(this).addClass("tr3");
    }, function() {
    $(this).removeClass("tr3");
  });
});

function TableChange(){};
TableChange.prototype.changeLoad = function (id){
  var arraytr = document.getElementById(id).getElementsByTagName('tr');
  var bool = true; //奇数行为true
  var oldStyle; //保存原有样式
  for(var i = 1;i<arraytr.length;i++){
    //各行变色
    if(bool === true){
      arraytr[i].style.backgroundColor = "#fff";
      bool = false;
    }
    else {
      arraytr[i].style.backgroundColor = "#f2eada";
      bool = true;  
    }
    //划过变色
    arraytr[i].onmouseover = function() {
      oldStyle = this.style.backgroundColor;
      this.style.backgroundColor = "#fff7e5";
    };
    arraytr[i].onmouseout = function() {
      this.style.backgroundColor = oldStyle;
    };
  }
};

var tabChange = new TableChange();