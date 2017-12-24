  function displaySpeakerApplication(that){
      if(that.value=="speaker")
      {
            $('#getInvolvedForm').html("<a href = \"https://docs.google.com/forms/d/e/1FAIpQLSe-FSnLZLYQF9uiXdp6i6T282zeFRxtGnB-3-r3QuYCRWziRg/viewform\" class = \"btn red darken-1\">Fill out our interest form!</a>")
      }
}
  $(document).ready(function(){
    $('select').material_select();
    var scroll = new SmoothScroll('a[href*="#"]');
    $(".button-collapse").sideNav();
  });
