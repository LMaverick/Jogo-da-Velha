
let tabuleiro = ['','','','','','','','',''];
let definePlayer = "1";

let ganhou = [[0,1,2],[3,4,5],[6,7,8],
              [0,3,6],[1,4,7],[2,5,8],
              [0,4,8],[2,4,6]];

const posCasa = document.querySelector(".casa");

let vez = 'X';
        function casa(index) {
        
            if (tabuleiro[index] !== '') return;
            tabuleiro[index] = vez;
            document.querySelectorAll('.casa')[index].textContent = vez;
            vez = (vez === 'X') ? 'O' : 'X';
        }