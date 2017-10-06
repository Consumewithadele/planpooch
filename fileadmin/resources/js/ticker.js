
function getstyle(elem, prop) {
    if(document.defaultView)
    {
      return document.defaultView.getComputedStyle(elem, null).getPropertyValue(prop);
    }
    else if(elem.currentStyle)
    {
      var prop = prop.replace(/-(\w)/gi, function($0,$1)
      {
        //return $0.charAt($0.length - 1).toUpperCase();
        return $1.toUpperCase();
      });
      return elem.currentStyle[prop];
    }
    else return null;
  }
Function.prototype.bind = function(obj) {  
    var _method = this;
    return function() {
        return _method.apply(obj, arguments);
    };    
}   

var ttt = [];
  
function $(id) {
var $ =  (typeof id  =="string") ? document.getElementById(id) : id;
$.start ={};

$.stop = function(){
     for (i in ttt) {
        clearTimeout(ttt[i]);
     }
};

$.move = function(settings,callbk) {
    var _this = this;
    var left = getstyle(_this,"left");
    var top =  getstyle(_this,"top");
 
     _this.start.left = (left=="auto") ? 0 : parseInt(left);
    _this.start.top = (top=="auto") ? 0 : parseInt(top);
    if (settings.to.top == _this.start.top) { // x 
         
        var descend = (settings.to.left>_this.start.left) ? false : true; 
       
        var s = Math.min(_this.start.left,settings.to.left); 
        var d = Math.max(_this.start.left,settings.to.left); 
            for (i = s; i <= d; i++) { 
              (function(j) { 
            
            var delay = (descend==true) ? (d-j)*settings.delay/(d - s) : (j-s)*settings.delay/(d - s);
            
                   ttt[i] =  setTimeout(function() { 
                         _this.style.left = j+"px"; 
                          
                          if (descend==false&&j==d&&callbk!=undefined) {callbk.call(_this);} 
                          else if (descend==true&&callbk!=undefined&&j==s) {callbk.call(_this);} 
                           
                          },delay); 
                })(i); 
            } 
           
    } 
     
    else if (settings.to.left == _this.start.left) {  // y 
        var descend = (settings.to.top>_this.start.top) ? false : true;
        var s = Math.min(_this.start.top,settings.to.top);
        var d = Math.max(_this.start.top,settings.to.top);
        for (i = s; i <= d; i++) {
          (function(j) {
                var delay = (descend==true) ? (d-j)*settings.delay/(d - s) : (j-s)*settings.delay/(d - s); 
                setTimeout(function() {  
                      
                      _this.style.top = j+"px";
                      if (descend==false&&j==d&&callbk!=undefined) {callbk.call(_this);}
                      else if (descend==true&&callbk!=undefined&&j==s) {callbk.call(_this);}
                      },delay);
                     
            })(i); 
          
        }
    
    }
    
    else {
        
        var descend = (settings.to.left>_this.start.left) ? false : true;
        var s = Math.min(_this.start.left,settings.to.left);
        var d = Math.max(_this.start.left,settings.to.left);
        var k = (settings.to.top - _this.start.top)/(settings.to.left - _this.start.left);
        var b = settings.to.top  - k*settings.to.left;
        
            for (i = s; i <= d; i++) {
              (function(j) {
                    var delay = (descend==true) ? (d-j)*settings.delay/(d - s) : (j-s)*settings.delay/(d - s); 
                    setTimeout(function() {  
                         _this.style.left = j+"px";
                          _this.style.top = k*j+b+"px";
                          if (descend==false&&j==d&&callbk!=undefined) {callbk.call(_this);}
                          else if (descend==true&&callbk!=undefined&&j==s) {callbk.call(_this);}
                          },delay);
                         
                })(i); 
              
            }
   
    }
  
};

return $;
}

function ticker(id){
this.ul = document.getElementById(id);
this.lis = this.ul.getElementsByTagName("LI");
this.len = this.lis.length;
this.width = 0;
for(i=0;i<this.len;i++) {
var dd = this.lis[i].offsetWidth;
this.width +=this.lis[i].offsetWidth;
}
this.ul.style.width = this.width+"px";
this.left = this.ul.parentNode.offsetWidth;
this.ul.style.left = this.left+"px";
this.t=0;
this.delay =30000;
this.speed = (this.left+this.width)/this.delay;

}

ticker.prototype = {
repeat: function(fn,del){
    var _this = this;
    (function() { 
    _this.t = setInterval(fn,del);
    })();

},

too: function(){
     _this = this;
     left = _this.width;
     delay = Math.abs(parseInt((parseInt(this.ul.style.left)+left)/this.speed));
     $(this.ul).move({delay:delay,to:{left:-left,top:0}},function(){
     this.style.left = _this.left+"px";
     _this.go();    
    });    
},

attach:function(){

this.ul.onmouseover = function(){
    $(this).stop();
    _stop();
};

this.ul.onmouseout = function(){
if (_this.t!=0) return;
_stop();
_too();
}

},

go: function(){
    _this = this;
    _stop = this.stop.bind(this);
    _too = this.too.bind(this);
    this.attach();
    clearInterval(this.t);

    $(this.ul).move({delay:this.delay,to:{left:-this.width,top:0}},function(){       
       this.style.left = _this.left+"px";
    });
       
  this.go_on();
},

go_on:function() {

this.repeat(this.ticker1.bind(this),this.delay+10);
},

ticker1: function(){

 $(_this.ul).move({delay:_this.delay,to:{left:-_this.width,top:0}},function(){    
            this.style.left = _this.left+"px";    
 });
    
},

stop:function(){
$(this.ul).stop();
clearInterval(this.t);
this.t = 0;
}

}

var tk1 = new ticker("newsticker");
tk1.go();
