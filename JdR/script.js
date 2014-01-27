jQuery(function(){
    var kKeys = [];
    function Kpress(e){
        kKeys.push(e.keyCode);
        if (kKeys.toString().indexOf("38,38,40,40,37,39,37,39,66,65,13") >= 0) {
            jQuery(this).unbind('keydown', Kpress);
            kExec();
            kKeys.empty();
        }
    }
    jQuery(document).keydown(Kpress);
});

function kExec(){
   alert("KONAMI CODE !!");
   $("#welcome").attr('src', 'images/trollface.jpg');
}
jQuery(function(){
	var isAdmin=true;
	var kKeys2=[];
	function Kpress(e){
		 kKeys2.push(e.keyCode);
		 if (kKeys2.toString().indexOf("70,85,77,66,76,69,13") >= 0) {
            jQuery(this).unbind('keydown', Kpress);
            isAdmin=true;
			alert("Mode MJ ON. Vous avez le pouvoir de supprimer des joueurs !");
			var bouton = document.getElementById('bouton');
			bouton.disabled = false;
            kKeys2.empty();
        }
	}
	jQuery(document).keydown(Kpress);
});
/*jQuery(function(){
    var regexp = /[index.php?page=games]/g;  //For online and local matching
    if(regexp.test(location.href)){
        var resultat = Math.floor(Math.random()*8 -0.00001);
        var random = 'DD1.jpg';
        switch(resultat){
            case 0,1,2:
                random = 'DD1.jpg';
                break;
            case 3:
                random = 'DD2.jpg';
                break;
            case 4:
                random = 'DD3.jpg';
                break;
            case 5:
                random = 'DD4.jpg';
                break;
			case 6:
                random = 'DD5.jpg';
                break;
			case 7:
                random = 'DD6.jpg';
                break;
			
        }
        $('#DDimg').attr('src', 'images/' + random);
    }
    if(random == 'DD1.jpg'){
        $('#DDimg').css('height', '100%');
        $('#DDimg').css('width', '100%');
    }
    });*/