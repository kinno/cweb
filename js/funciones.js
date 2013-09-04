$(window).load(function(){
    var list = ['DIVERGENTE', 'PRÓXIMAMENTE'];  // list of blurbs

var txt = $('#txtlzr');  // The container in which to render the list

var options = {
  duration: 5000,          // Time (ms) each blurb will remain on screen
  rearrangeDuration: 3000, // Time (ms) a character takes to reach its position
  effect: 'random',        // Animation effect the characters use to appear
  centered: true           // Centers the text relative to its container
}

txt.textualizer(list, options); // textualize it!
txt.textualizer('start'); // start
});

$(function(){
    $("#dialog").dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      },
      draggable:false,
      resizable:false,
      height:500,
      width:600
    });
    
    $("#banner").click(function(){
        $("#dialog").dialog("open");
        
    })
});

