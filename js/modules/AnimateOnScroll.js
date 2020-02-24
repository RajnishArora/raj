import $ from 'jquery';
import waypoints from '../../../../../../node_modules/waypoints/lib/noframework.waypoints';

class AnimateOnScroll {
  constructor() {
    this.imgToLook = $(".about-me__img");
    //console.log(this.imgToLook);
    this.contentToLook = $(".about-me__content");
    this.offsetPercentage = "50%";
    this.jsprogress1 = $("#jsprogress1");
    this.jsprogress2 = $("#jsprogress2");
    this.jsprogress3 = $("#jsprogress3");
    this.jsprogress4 = $("#jsprogress4");
    this.jsprogress5 = $("#jsprogress5");
    this.jsprogress6 = $("#jsprogress6");
  //  alert(this.jsprogress[0]);
  //  this.progressval = this.jsprogress.val(); 
  //  this.jsprogress.val("0");
    this.ourprojectsboxes = $(".our-projects__boxes")
    this.count = 0;
    this.iteration = 0;
    this.executed = false;
    
    //this.jsprogress.value=0;
    this.createWaypoints();
  }

    showprogress(count,limit,progressElement,that){
          if (count < limit) {
                    progressElement.val(count);
                    count++;
                    //console.log(count);
                    setTimeout(function(){ that.showprogress(count,limit,progressElement,that)  }, 10);
             }

    }

    createWaypoints() {
    
    var that = this;

      new Waypoint({
        element: that.imgToLook[0],
        handler: function() {
           that.imgToLook.addClass("about-me__img-animate");
        },
        offset: that.offsetPercentage
      });
  

      
      //if (that.executed == false) {
      new Waypoint({
        element: that.contentToLook[0],
        handler: function() {
           that.contentToLook.addClass("about-me__content-animate");
        },
        offset: that.offsetPercentage
      });
    

      this.count=0;
      var limit1 = that.jsprogress1.data("limit1");
      var progressElement1 = that.jsprogress1; 
      new Waypoint({
          element:that.jsprogress1[0],
          handler:function(){
              that.showprogress(that.count,limit1,progressElement1,that);
          },
         offset: "90%" 

      });
     
     this.count=0;
     var limit2 = that.jsprogress2.data("limit2");
      var progressElement2 = that.jsprogress2; 
      new Waypoint({
          element:that.jsprogress2[0],
          handler:function(){
              that.showprogress(that.count,limit2,progressElement2,that);
          },
         offset: "90%" 

      });

      this.count=0;
      var limit3 = that.jsprogress3.data("limit3");
      var progressElement3 = that.jsprogress3; 
      new Waypoint({
          element:that.jsprogress3[0],
          handler:function(){
              that.showprogress(that.count,limit3,progressElement3,that);
          },
         offset: "90%" 

      });

      this.count=0;
      var limit4 = that.jsprogress4.data("limit4");
      var progressElement4 = that.jsprogress4; 
      new Waypoint({
          element:that.jsprogress4[0],
          handler:function(){
              that.showprogress(that.count,limit4,progressElement4,that);
          },
         offset: "90%" 

      });

      this.count=0;
      var limit5 = that.jsprogress5.data("limit5");
      var progressElement5 = that.jsprogress5; 
      new Waypoint({
          element:that.jsprogress5[0],
          handler:function(){
              that.showprogress(that.count,limit5,progressElement5,that);
          },
         offset: "90%" 

      });

      this.count=0;
      var limit6 = that.jsprogress6.data("limit6");
      var progressElement6 = that.jsprogress6; 
      new Waypoint({
          element:that.jsprogress6[0],
          handler:function(){
              that.showprogress(that.count,limit6,progressElement6,that);
          },
         offset: "90%" 

      });

     // that.executed = true;
     // }  // ! executed
      
/*
    this.jsprogress.each(function() {
      var currentItem = this;
      currentItem.count = 0;
      var limit = currentItem.value;
      //console.log(limit);
      currentItem.value=0;
      //
      //var progressvalue = this.value;
      new Waypoint({
        element: currentItem,
        handler: function() {
           //that.showprogress(currentItem.count,limit,that.iteration,that);
           console.log(that.iteration);
        },
        offset: "90%"
      });

      that.iteration++;
    });
  */  


  }  // create waypoints ends


}

export default AnimateOnScroll;
