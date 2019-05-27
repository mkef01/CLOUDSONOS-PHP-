init();

function init(){
    var audio = document.getElementById('audio');
    var playlist = document.getElementById('playlist');
    var tracks = playlist.getElementsByTagName('a');
    var BtnPlay = document.getElementById('btnplay');
    var BtnBook = document.getElementById('');
    var nextTrack = 0;
    audio.volume = 1.00;
    BtnPlay.addEventListener("click", playSong);
    BtnBook.addEventListener("click",bookmark);

    audio.play();
    
    //Agregamos los eventos a los links que nos permitirán cambiar de canción
    for(var track in tracks) {
      var link = tracks[track];
      if(typeof link === "function" || typeof link === "number") continue;
      link.addEventListener('click', function(e) {
      	e.preventDefault();
        var song = this.getAttribute('href');
         run(song, audio, this);
      });
    }
    // var items = document.getElementsByTagName("span");
    //     for(i = 0; i < items.length; i++) {
    //         items[i].setAttribute("text", audio.length);
    //     }
    //agregamos evento para reproducir la siguiente canción en la lista
    //si la canción es la ultima reproducir la primera otra vez
    
    audio.addEventListener('ended',function(e) {
      for(var track = 0; track < tracks.length; track++) {
        var link = tracks[track];
        nextTrack = parseInt(track) + 1;
        if(typeof link === "function" || typeof link === "number") continue;
        if(!this.src) this.src = tracks[0];
        if(track === (tracks.length - 1)) nextTrack = 0;
                                //console.log("next "+nextTrack);
                                //console.log("current "+track);
        if(link.getAttribute('href') === this.src) {
          var nextLink = tracks[nextTrack];
          run(nextLink.getAttribute('href'), audio, nextLink);
          break;
          }
          //break;
        }
    });
}

function run(song, audio, link){
        var parent = link.parentElement;
        //quitar el active de todos los elementos de la lista
        var items = parent.parentElement.getElementsByTagName('li');
        for(var item in items) {
          if(items[item].classList)
            items[item].classList.remove("active");
        }
        
        //agregar active a este elemento
        parent.classList.add("active");
        
        //tocar la cancion
        audio.src = song;
        audio.load();
        audio.play();
}

function playSong(){
     audio.play();
 }

function bookmark(){
    
}
