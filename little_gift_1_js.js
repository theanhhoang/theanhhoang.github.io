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
      var target_time = new Date("Jun 13, 2019 00:00:00");
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
