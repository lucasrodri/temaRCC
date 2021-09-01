function myFunctionEntrar() {
    //window.location.href = "https://acesso.gov.br/";
    window.open('https://acesso.gov.br/', '_blank');
}

function myFunctionBusca() {
    var termo = document.getElementById("main-searchbox").value;
    //console.log(termo)
    window.location.href = "/?s=" + termo;
}

jQuery(document).ready( function ($) {  
    (function () {
        var Contrast = {
            storage: 'contrastState',
            cssClass: 'contrast',
            currentState: null,
            contador: 0,
            check: checkContrast,
            getState: getContrastState,
            setState: setContrastState,
            toogle: toogleContrast,
            updateView: updateViewContrast
        };

        window.toggleContrast = function () { Contrast.toogle(); };

        Contrast.check();

        function checkContrast() {
            this.updateView();
        }

        function getContrastState() {
            return localStorage.getItem(this.storage) === 'true';
        }

        function setContrastState(state) {
            localStorage.setItem(this.storage, '' + state);
            this.currentState = state;
            this.contador += 1;
            this.updateView();
        }

        function updateViewContrast() {
            var body = document.body;
            if (this.currentState === null)
                {
                this.currentState = this.getState();
                //body.classList.add(this.cssClass);
                }
            if (this.currentState || this.contador==1)
            {
                body.classList.add(this.cssClass);
            }
            else if(this.currentState!=null && this.contador>0)
            {
                body.classList.remove(this.cssClass);
            }
        }

        function toogleContrast() {
            this.setState(!this.currentState);
        }
    })();
});


