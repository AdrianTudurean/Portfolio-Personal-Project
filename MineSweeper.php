<!doctype html>
<html lang="en">
   <head>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
      <title>Landing Page</title>
   </head>
   <body background="BackgroundIMG.jpeg">
      <style>
         .sidenav {
        height: 100%;
        width: 162px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 20px;
      }     
      .card {
         width: 159px;
       }
       button {
         margin-top=16px;
       }
      .center {
          text-align: left;
          margin-left:9%;
          list-style-position: inside;
       }
      ol.center li {
       text-align: left;
       margin-left: -1%;
      }

      </style>


      <div class = "sidenav">
      <div class = "card"> 

      <button class = "btn btn-dark btn btn-lg" type = "button"  onclick="window.location.href='Test.php'"> Home </button>
      <button style="margin:9px;" class = "btn btn-dark btn btn-sm" type = "button"> About </button>
      <button style="margin:9px;" class = "btn btn-secondary btn btn-sm" type = "button" onclick="window.location.href='Test1.php'"> Projects </button>
      <button style="margin:9px;" class = "btn btn-dark btn btn-sm" type = "button"> Contact </button>
      </div>
      </div>
      <ol class="center"> Projects
         <li><button style="margin:9px;" class = "btn btn-secondary btn btn-lg" type = "button" onclick="window.location.href='MineSweeper.php'"><i class="las la-bomb"></i> MineSweeper </button></li>
         <li><button style="margin:9px;" class = "btn btn-dark btn btn-lg" type = "button" onclick="window.location.href='TicTacToe.php'"> TicTacToe </button></li>
         <li><button style="margin:9px;" class = "btn btn-dark btn btn-lg" type = "button" onclick="window.location.href='HangMan.php'"> HangMan </button></li>
      </ol>
      <!doctype html>
<html lang="en">
   <head>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
      <title>Minesweeper</title>
   </head>
   <body>
      <style>
         .wrapper {
         text-align: center;
         }
         .button {
         position: absolute;
         top: 50%;
         }
      </style>
      <div id = "Minesweeper" class = "container wrapper">
          <div class="wrapper">
            <button id = "startButton" type = "button" class = "btn btn-primary btn-lg button" onclick="return startGame();">Start!</button>
           </div>
          <div id = "list">
           </div>
       </div>
    </body>
   <script>
     var firstClick = 0;
var deployedBombs = [],
    deployedSafe = [100];
var bombs = 5,
    number = 1;
var win = 30 - bombs;
var matrix = [];
for (var i = 1; i <= 6; i++) {
    matrix[i] = [];
    for (var j = 1; j <= 5; j++) {
        matrix[i][j] = number;
        number++;
    }
}

function startGame() {

    deployBombs();
    deploySafe();
    var buttonNumber = 1,
        flagNumber, bombNumber, safeNumber;
    while (buttonNumber <= 30) {
        $('#list').append(`
               <button id = "` + buttonNumber + `" type = "button" onclick = "return takeSpot(` + buttonNumber + `);" onmousedown = " return checkWhich(` + buttonNumber + `); " class = "btn btn-primary btn-lg wrapper1"><i class="las la-stop"></i></button>
        `);
        flagNumber = buttonNumber + 100;
        bombNumber = buttonNumber + 200;
        safeNumber = buttonNumber + 300;
        $('#list').append(`
               <button id = "` + flagNumber + `" type = "button" onmousedown = " return checkReverse(` + flagNumber + `); " class = "btn btn-warning btn-lg wrapper1"><i class="las la-radiation-alt"></i></button>
        `);
        $('#list').append(`
               <button id = "` + bombNumber + `" type = "button"  class = "btn btn-danger btn-lg wrapper1"><i class="las la-bomb"></i></button>
        `);
        $('#list').append(`
               <button id = "` + safeNumber + `" type = "button" class = "btn btn-success btn-lg wrapper1"> (` + deployedSafe[buttonNumber] + `) </button>
        `);
        $('#' + flagNumber).hide();
        $('#' + bombNumber).hide();
        $('#' + safeNumber).hide();
        if (buttonNumber % 5 == 0) {
            $('#list').append(`
          <div> </div>
          `);
        }
        $('#startButton').hide();
        buttonNumber++;
    }
}

function takeSpot(buttonNumber) {
    var bombNumber = buttonNumber + 200;
    var safeNumber = buttonNumber + 300;
    if (firstClick == 0 && deployedBombs.indexOf(buttonNumber) != -1) {
        alert("I would click somewhere else if I were you!");
        return false;
    }
    firstClick = 1;
    $('#' + buttonNumber).hide();
    if (deployedBombs.indexOf(buttonNumber) != -1) {
        $('#' + bombNumber).show();
        detonate();
    } else {
        $('#' + safeNumber).show();
        win--;
    }
        defuse();
    
    return false;
}

function detonate() {
    var bombNumber, flagNumber;
    for (var i = 0; i < deployedBombs.length; i++) {
        bombNumber = deployedBombs[i] + 200;
        flagNumber = deployedBombs[i] + 100;
        $('#' + bombNumber).show();
        $('#' + deployedBombs[i]).hide();
        $('#' + flagNumber).hide();
    }
    alert("You lost!");
}

function defuse() {
    if (win == 0) {
        alert("You woon!");
    }
}

function deployBombs() {
    var maximum = 31,
        minimum = 1,
        ok = 0;
    var bomb = Math.floor(Math.random() * (maximum - minimum) + minimum);
    while (bombs != 0) {
        while (ok == 0) {
            if (deployedBombs.indexOf(bomb) == -1) {
                deployedBombs.push(bomb);
                for (var i = 1; i <= 6; i++) {
                    for (var j = 1; j <= 5; j++) {
                        if (matrix[i][j] == bomb) {
                            matrix[i][j] = bomb + 100;
                        }
                    }
                }
                ok = 1;
            } else {
                bomb = Math.floor(Math.random() * (maximum - minimum) + minimum);
            }
        }
        ok = 0;
        bombs--;

    }
    for (var i = 1; i <= 6; i++) {
        for (var j = 1; j <= 5; j++) {
            if (matrix[i][j] < 99) {
                matrix[i][j] = 0;
            }
        }
    }

}

function deploySafe() {
    for (var i = 1; i <= 6; i++) {
        for (var j = 1; j <= 5; j++) {
            if (matrix[i][j] > 99) {
                if (i - 1 != 0) {
                    matrix[i - 1][j]++;
                }
                if (i + 1 <= 6) {
                    matrix[i + 1][j]++;
                }
                if (j - 1 != 0) {
                    matrix[i][j - 1]++;
                }
                if (j + 1 <= 5) {
                    matrix[i][j + 1]++;
                }


                if (i - 1 != 0 && j - 1 != 0) {
                    matrix[i - 1][j - 1]++;
                }
                if (i + 1 <= 6 && j + 1 <= 5) {
                    matrix[i + 1][j + 1]++;
                }
                if (j - 1 != 0 && i + 1 <= 6) {
                    matrix[i + 1][j - 1]++;
                }
                if (j + 1 <= 5 && i - 1 != 0) {
                    matrix[i - 1][j + 1]++;
                }
            }
        }


    }
    for (var i = 1; i <= 6; i++) {
        for (var j = 1; j <= 5; j++) {
            if (matrix[i][j] < 99) {
                deployedSafe.push(matrix[i][j]);
            } else {
                deployedSafe.push(-1);
            }
        }
    }

}


function checkWhich(buttonNumber) {
    flagNumber = buttonNumber + 100;
    if (event.which == 3) {
        alert("You marked the button!");
        $('#' + buttonNumber).hide();
        $('#' + flagNumber).show();
    }
    return false;
}

function checkReverse(flagNumber) {
    buttonNumber = flagNumber - 100;
    if (event.which == 3) {
        alert("You unmarked the button!");
        $('#' + buttonNumber).show();
        $('#' + flagNumber).hide();
    }
    return false;
}
   </script>
    </html>
   </body>
   
  </html>