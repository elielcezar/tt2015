$(document).ready(function () {
 
   
    
  /*var highlight = function (string) {
        $("#lista-excursoes li.match").children().each(function () {
            var matchStart = $(this).text().toLowerCase().indexOf("" + string.toLowerCase() + "");
            var matchEnd = matchStart + string.length - 1;
            var beforeMatch = $(this).text().slice(0, matchStart);
            var matchText = $(this).text().slice(matchStart, matchEnd + 1);
            var afterMatch = $(this).text().slice(matchEnd + 1);
            $(this).html(beforeMatch + "<em>" + matchText + "</em>" + afterMatch);
        });
    };*/
 
 
    /* filter products */
    $("#busca").on("keyup click input", function () {
        if (this.value.length > 0) {
            $("#lista-excursoes li").removeClass("match").hide().filter(function () {
                return $(this).text().toLowerCase().indexOf($("#busca").val().toLowerCase()) != -1;
            }).addClass("match").show();
            //highlight(this.value);
            $("#lista-excursoes").show();
        }
        else {            
            $("#lista-excursoes, #lista-excursoes li").removeClass("match").show();
            $("#lista-excursoes li em").contents().unwrap();
        }
    });
 
 
});