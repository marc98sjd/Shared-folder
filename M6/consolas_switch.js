function consolas(){
        var vconsola="Xbox";
        	
        switch(vconsola){
            case "Xbox":
                document.getElementById("demo").innerHTML="Soy Xboxer";
                break;
            
            case "PS":
                document.getElementById("demo").innerHTML="Soy Sonyer";
                break;
            
            case "Nintendo":
                document.getElementById("demo").innerHTML="Soy Nintendero";
                break;
            
            default:
                document.getElementById("demo").innerHTML="Soy PCGamer";
                break;
        }
}