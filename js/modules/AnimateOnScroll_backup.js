import $ from 'jquery';
import waypoints from '../../../../../../node_modules/waypoints/lib/noframework.waypoints';

class AnimateOnScroll {
  constructor() {
    this.imgToLook = $(".about-me__img");
    //console.log(this.imgToLook);
    this.contentToLook = $(".about-me__content");
    this.offsetPercentage = "50%";
    this.jsprogress = $(".jsprogress");
    this.progressval ; 
    //this.jsprogress.val("0");
    this.count = 0;
    this.once = "0";
    //this.jsprogress.value=0;
    this.createWaypoints();
  }

  showprogress(count,that){
          that.progressval = this.jsprogress.val(); 
          that.jsprogress.val("0");
          if (count < that.progressval) {
                    that.jsprogress.val(count);
                    count++;
                    console.log(count);
                    
                    setTimeout(function(){ that.showprogress(count,that) }, 10);
                               
             }

    }


  
  createWaypoints() {
    var that = this;
    /*
    new Waypoint({
      element: this.imgToLook[0],
      handler: function () {
          that.imgToLook.addClass("about-me__img-animate");
      },
      offset:that.offsetPercentage
    });
    new Waypoint({
      element: this.contentToLook[0],
      handler: function () {
          that.contentToLook.addClass("about-me__content-animate");
      },
      offset:that.offsetPercentage
    });
    */

     new Waypoint({
        element: this.jsprogress[0],
        handler: function(){
            that.showprogress(that.count,that);
            //console.log(that.progressval);
            //console.log(that.jsprogress.val());
      
        },
        offset:"90%"
    });
     /*
    this.jsprogress.each(function() {
       //console.log("out");
      var currentItem = this;
      
      new Waypoint({
        element: currentItem,
        handler: function() {
            console.log(currentItem);
            currentItem.showprogress(that.once,currentItem.val(),currentItem);
        },
        offset: that.offsetPercentage
      });
    });
*/
/*
    new Waypoint({
        element: this.jsprogress[0],
        handler: function(){
            //if (direction == "up") {
              that.showprogress(that.count,that);
            //}
        },
        offset:"90%"
     });
 */   
    
  }


}

export default AnimateOnScroll;