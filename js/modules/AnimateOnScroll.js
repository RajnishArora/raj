import $ from 'jquery';
import waypoints from '../../../../../../node_modules/waypoints/lib/noframework.waypoints';

class AnimateOnScroll {
  constructor() {
    this.imgToLook = $(".about-me__img");
    //console.log(this.imgToLook);
    this.contentToLook = $(".about-me__content");
    this.offsetPercentage = "50%";
    this.jsprogress = $("#jsprogress");
    this.progressval = this.jsprogress.val(); 
    this.jsprogress.val("0");
    this.count = 0;
    //this.jsprogress.value=0;
    this.createWaypoints();
  }


    showprogress(count,that){
          if (count < that.progressval) {
                    that.jsprogress.val(count);
                    count++;
                    console.log(count);
                    
                    setTimeout(function(){ that.showprogress(count,that) }, 10);
                               
             }

    }

    createWaypoints() {
    
    var that = this;

     this.imgToLook.each(function() {
      var currentItem = this;
      new Waypoint({
        element: currentItem,
        handler: function() {
           $(currentItem).addClass("about-me__img-animate");
        },
        offset: that.offsetPercentage
      });
    });


    this.contentToLook.each(function() {
      var currentItemC = this;
      new Waypoint({
        element: currentItemC,
        handler: function() {
           $(currentItemC).addClass("about-me__content-animate");
        },
        offset: that.offsetPercentage
      });
    });

      

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
 
*/
  }

/*
  createWaypoints() {
      var that = this;
      var currentItem = this.imageToLook;
      new Waypoint({
        element: currentItem,
        handler: function() {
          console.log(this);
          console.log(that);
          //$(this).addClass("about-me__img-animate");
        },
        offset: that.offsetPercentage
      });
      
  }
  */
}

export default AnimateOnScroll;