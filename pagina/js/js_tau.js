
        var mysrc = "../imagens/tau_gif.gif";

        function changeImage() {
            if (mysrc == "../imagens/tau_gif.gif") {
                document.images["pic"].src = "../imagens/tau_gif.gif";
                document.images["pic"].alt = "tau_gif";
                mysrc = "../imagens/tau_gif.gif";
            } 
                else {
                    document.images["pic"].src = "tau.jfif";
                    document.images["pic"].alt = "tau";
                    mysrc = "tau.jfif";
                }
        } 
  
