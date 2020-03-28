AFRAME.registerComponent('audiohandler', {
    init: function() {
      let playing = false;
      
      let audioel = document.querySelector("a-sound");

      var audio = audioel.components.sound;
      audioel.setAttribute("src", "https://cdn.glitch.com/bb5e7990-a24a-418a-b54f-0f55582f7d2d%2FSeptium.mp3?v=1585426832321");

      this.el.addEventListener('click', () => {

        if (!playing) {
          audio.playSound();
        } else {
          audio.stopSound();

        }
        playing = !playing;
      });
    }
  })
