<script>

  var audio = new Audio("audio/Em_Oi.mp3");
  audio.addEventListener('ended', function() {
      this.currentTime = 0;
      this.play();
  }, false);
  var audio_playing = false;
  AFRAME.registerComponent('updater', {

    init: function()
    {
      // this.num = 0;
      this.target = document.querySelector('#textArea');
      var target_time = new Date("Jun 14, 2019 02:51:00");
      var time_now = new Date();

      if (target_time > time_now){
        this.countDownDate = target_time.getTime();
      }else if (time_now - target_time < 86400000) {
        this.countDownDate = time_now.getTime() + 5000;
      }else{
        this.countDownDate = target_time.getTime();
      }




      this.target2 = document.querySelector('#heart_obj');

      this.target3 = document.querySelector('#play_button');


      this.target4 = document.querySelector('#pause_button');

      this.target5 = document.querySelector('#links1');

      this.target6 = document.querySelector('#links2');

      this.target7 = document.querySelector('#gangnam_style');

      this.target8 = document.querySelector('#particle');

      this.skyEl = document.querySelector('#background');
      this.plane = document.querySelector('#plane');

    },

    tick: function (time, timeDelta)
    {
      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = this.countDownDate - now;



      // If the count down is finished, write some text
      if (distance < 0) {

        if (distance < -86400000) {
          this.target.setAttribute("text-geometry", "value", "EXPIRED :((");
        }else{
          this.target.setAttribute("text-geometry", "value", "HAPPY 1ST ANNIVERSARY");

          this.target2.setAttribute('visible', true );

          this.target3.setAttribute('visible', true );

          this.target4.setAttribute('visible', true );

          this.target5.setAttribute('visible', true );

          this.target6.setAttribute('visible', true );

          this.target7.setAttribute('visible', true );

          this.target8.setAttribute('visible', true );


          this.skyEl.setAttribute('src', '#sky');
          this.plane.setAttribute('visible', true );

        }

      } else {
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        this.target.setAttribute("text-geometry", "value", days + "d " + hours + "h " + minutes + "m " + seconds + "s ");
      }


    }

  });


  var tick_counter = 0;
  var scale_up = true;
  AFRAME.registerComponent('scale_periodic', {
    schema: {
      to: {default: {x: 0.011, y: 0.011, z: 0.011}, type: "vec3"},
      from: {default: {x: 0.01, y: 0.01, z: 0.01}, type: "vec3"}
    },
    init: function()
    {
      this.num = 0
    },

    tick: function (time, timeDelta)
    {
      var data = this.data;
      var el = this.el;
      if (tick_counter === 50) {
        if (scale_up){
          el.object3D.scale.copy(data.to);
        }else {
          el.object3D.scale.copy(data.from);
        }
        scale_up = !scale_up;
        tick_counter = 0;
      }

      tick_counter++;
    }

  });



  AFRAME.registerComponent('scale-on-mouseenter', {
    schema: {
      to: {default: {x: 4, y: 4, z: 4}, type: "vec3"},
      from: {default: {x: 2, y: 2, z: 2}, type: "vec3"}
    },

    init: function () {
      var data = this.data;
      var el = this.el;
      this.el.addEventListener('mouseenter', function () {

        el.object3D.scale.copy(data.to);
      });

      this.el.addEventListener('mouseleave', function () {

        el.object3D.scale.copy(data.from);
      });
    }
  });


  AFRAME.registerComponent('play_sound', {
    init: function () {
      var el = this.el;
      this.el.addEventListener('click', function () {
        console.log(el.object3D.rotation);

        // var entity = document.querySelector('[sound]');
        // entity.components.sound.playSound();
        if (!audio_playing){
          audio.play();
          audio_playing = !audio_playing;
        }
      });
    }
  });

  AFRAME.registerComponent('pause_sound', {
    init: function () {
      var el = this.el;
      this.el.addEventListener('click', function () {
        // console.log("pause sound");
        // var entity = document.querySelector('[sound]');
        // entity.components.sound.pauseSound();
        if (audio_playing){
          audio.pause();
          audio_playing = !audio_playing;
        }

      });
    }
  });


</script>

<a-scene animation-timeline__1="timeline: #myTimeline; loop: true">
<!-- <a-scene antialias="true"> -->
    <a-assets>
      <img id="grid" src="images/border.png" crossorigin="anonymous" />
      <img id="sky" src="images/stars.jpg" crossorigin="anonymous" />

      <img id="field" src="images/field-sphere.jpg" crossorigin="anonymous" />
      <a-asset-item id="customFont" src="fonts/Roboto_Regular.json"></a-asset-item>

      <!-- timeline used to play animations in sequence -->
      <a-timeline id="myTimeline">
        <a-timeline-animation select="#text1" name="fadeout"></a-timeline-animation>
        <a-timeline-animation select="#text1" name="fadein"></a-timeline-animation>
      </a-timeline>

      <a-mixin id="text"
        text="align: center; color: #AAAAFF; width: 6; opacity: 0"
        animation__fadein="property: text.opacity; from: 0; to: 1; dur: 3000; easing: linear; autoplay: false"
        animation__fadeout="property: text.opacity; from: 1; to: 0; dur: 3000; easing: linear; autoplay: false"
        position="-10 2 -3"
        visible="false">
      </a-mixin>


      <img id="1-thumb" crossorigin="anonymous" src="images/aframe/anni/1.jpg">
      <img id="2-thumb" crossorigin="anonymous" src="images/aframe/anni/2.jpg">
      <img id="3-thumb" crossorigin="anonymous" src="images/aframe/anni/3.jpg">
      <img id="4-thumb" crossorigin="anonymous" src="images/aframe/anni/4.jpg">
      <img id="5-thumb" crossorigin="anonymous" src="images/aframe/anni/5.jpg">
      <img id="6-thumb" crossorigin="anonymous" src="images/aframe/anni/6.jpg">



      <!-- Image link template to be reused. -->
      <script id="link" type="text/html">
        <a-entity class="link"
          geometry="primitive: plane; height: 1; width: 1"
          material="shader: flat; src: ${thumb}"
          event-set__mouseenter="scale: 2 2 2"
          event-set__mouseleave="scale: 1 1 1"
        ></a-entity>
      </script>
