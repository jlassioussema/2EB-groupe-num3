

const statusDisplay = document.getElementById('status')
const countField = document.getElementById('numberTurns')
const startBox = document.getElementById('startBox')
const playField = document.getElementById('field')
const player1_name = document.getElementById('player1_name')
const player1 = document.getElementById('player1')


let gameActive = true
let currentPlayer = '♧'
let gameState = []
let cols, rows, steps;
let counter = 0;
let playerWins = 0
let computerWins = 0
let scorep = 0
let scorebot = 0

const winnMessage = () => `${currentPlayer} has won!`
const nobodyWinsMessage = () => `it's a draw!`

// ----------------------------------  START GAME
let handleStart = () => {
    player1.innerHTML = player1_name.value === '' ? 'Player \'♧\'' : player1_name.value
    player2.innerHTML = player2_name.value === '' ? 'Bot \'♤\'' : player2_name.value
    cols = checkInput(document.getElementById('columns').value)
    rows = checkInput(document.getElementById('columns').value)
    steps = checkInput(document.getElementById('steps').value)
    if (steps > cols) steps = cols;
    createMatrix()
    drawField()
    startBox.className = 'hidden'
    document.querySelectorAll('.cell')
        .forEach(cell => cell.addEventListener('click', handleClick))
}

let checkInput = (input) => {
    input = +input
    input = (input < 4)
        ? 4
        : (input > 10)
            ? 10
            : input
    return input
}
let createMatrix = () => {
    let arr
    for (let i = 0; i < rows; i++) {
        arr = []
        for (let j = 0; j < cols; j++) {
            arr[j] = 0
        }
        gameState[i] = arr
    }
    console.log(gameState)
}
let drawField = () => {
    let cellSize = window.innerHeight * 0.5 / cols
    let box = document.createElement('div')
    box.setAttribute('id', 'container')

    let cell, row
    for (let i = 0; i < rows; i++) {
        row = document.createElement('div')
        row.className = 'row'
        for (let j = 0; j < cols; j++) {
            cell = document.createElement('div')
            cell.setAttribute('id', `${i}_${j}`)
            cell.className = 'cell'
            cell.style.width =
                cell.style.height =
                cell.style.lineHeight = `${cellSize}px`
            cell.style.fontSize = `${cellSize / 16}em`
            row.appendChild(cell)
        }
        box.appendChild(row)
    }
    playField.appendChild(box)
}
// ----------------------------------  GAME ONGOING


let handleClick = (event) => {
    let clickedIndex = event.target.getAttribute('id').split('_');
    let i = +clickedIndex[0]
    let j = +clickedIndex[1]

    if (gameState[i][j] !== 0 || !gameActive)
        return

    gameState[i][j] = (currentPlayer === '♧') ? 1 : 2
    event.target.innerHTML = currentPlayer
    countField.innerHTML = `${++counter}`
    isWinning(i, j)
    isMovesLeft()
    currentPlayer = currentPlayer === '♧' ? '♤' : '♧'
    handlePlayerSwitch()
    //console.log(gameState)
}

let handlePlayerSwitch = () => {

    if (currentPlayer !== '♧') {
        // Bot plays
        setTimeout(() => {
            let i = Math.floor(Math.random() * rows)
            let j = Math.floor(Math.random() * cols)

            while (gameState[i][j] !== 0) {
                i = Math.floor(Math.random() * rows)
                j = Math.floor(Math.random() * cols)
            }

            gameState[i][j] = 2
            let cell = document.getElementById(`${i}_${j}`)
            cell.innerHTML = currentPlayer
            countField.innerHTML = `${++counter}`
            isWinning(i, j)
            isMovesLeft()
            currentPlayer = '♧'
            handlePlayerSwitch()
        }, 500) // Delay the bot's move for half a second

    }
}

let isMovesLeft = () => {
    if (counter === (cols * rows)) {
        setTimeout(() => {
            if (scorep > scorebot) alert('Player win')
            else if (scorep < scorebot) alert('bot win')
            else alert('draw')
            gameActive = false
        }, 500);
    }
}
// ---------------------------------- WINNER ALGORITHM

let isWinning = (y, x) => {
    let winner = currentPlayer === '♧' ? 1 : 2,
        length = steps * 2 - 1,
        radius = steps - 1,
        countWinnMoves, winnCoordinates

    if (currentPlayer === '♧') {
        // horizontal
        countWinnMoves = 0
        winnCoordinates = []
        for (let i = y, j = x - radius, k = 0; k < length; k++, j++) {
            if (i >= 0 && i < rows && j >= 0 && j < cols &&
                gameState[i][j] === winner && gameActive) {
                winnCoordinates[countWinnMoves++] = [i, j]
                if (countWinnMoves === steps) {
                    scorep++;
                    return
                }
            } else {
                countWinnMoves = 0
                winnCoordinates = []
            }
        }

        // vertical
        countWinnMoves = 0
        winnCoordinates = []
        for (let i = y - radius, j = x, k = 0; k < length; k++, i++) {
            if (i >= 0 && i < rows && j >= 0 && j < cols &&
                gameState[i][j] === winner && gameActive) {
                winnCoordinates[countWinnMoves++] = [i, j]
                if (countWinnMoves === steps) {
                    scorep++;

                    return
                }
            } else {
                countWinnMoves = 0
                winnCoordinates = []
            }
        }

        // oblique to the right
        countWinnMoves = 0
        winnCoordinates = []
        for (let i = y - radius, j = x - radius, k = 0; k < length; k++, i++, j++) {
            if (i >= 0 && i < rows && j >= 0 && j < cols &&
                gameState[i][j] === winner && gameActive) {
                winnCoordinates[countWinnMoves++] = [i, j]
                if (countWinnMoves === steps) {
                    scorep++;

                    return
                }
            } else {
                countWinnMoves = 0
                winnCoordinates = []
            }
        }

        // oblique to the left
        countWinnMoves = 0
        winnCoordinates = []
        for (let i = y - radius, j = x + radius, k = 0; k < length; k++, i++, j--) {
            if (i >= 0 && i < rows && j >= 0 && j < cols &&
                gameState[i][j] === winner && gameActive) {
                winnCoordinates[countWinnMoves++] = [i, j]
                if (countWinnMoves === steps) {
                    scorep++;

                    return
                }
            } else {
                countWinnMoves = 0
                winnCoordinates = []
            }
        }
    }
    else {
        // horizontal
        countWinnMoves = 0
        winnCoordinates = []
        for (let i = y, j = x - radius, k = 0; k < length; k++, j++) {
            if (i >= 0 && i < rows && j >= 0 && j < cols &&
                gameState[i][j] === winner && gameActive) {
                winnCoordinates[countWinnMoves++] = [i, j]
                if (countWinnMoves === steps) {
                    scorebot++;

                    return
                }
            } else {
                countWinnMoves = 0
                winnCoordinates = []
            }
        }

        // vertical
        countWinnMoves = 0
        winnCoordinates = []
        for (let i = y - radius, j = x, k = 0; k < length; k++, i++) {
            if (i >= 0 && i < rows && j >= 0 && j < cols &&
                gameState[i][j] === winner && gameActive) {
                winnCoordinates[countWinnMoves++] = [i, j]
                if (countWinnMoves === steps) {
                    scorebot++;
                    return
                }
            } else {
                countWinnMoves = 0
                winnCoordinates = []
            }
        }

        // oblique to the right
        countWinnMoves = 0
        winnCoordinates = []
        for (let i = y - radius, j = x - radius, k = 0; k < length; k++, i++, j++) {
            if (i >= 0 && i < rows && j >= 0 && j < cols &&
                gameState[i][j] === winner && gameActive) {
                winnCoordinates[countWinnMoves++] = [i, j]
                if (countWinnMoves === steps) {
                    scorebot++;
                    return
                }
            } else {
                countWinnMoves = 0
                winnCoordinates = []
            }
        }

        // oblique to the left
        countWinnMoves = 0
        winnCoordinates = []
        for (let i = y - radius, j = x + radius, k = 0; k < length; k++, i++, j--) {
            if (i >= 0 && i < rows && j >= 0 && j < cols &&
                gameState[i][j] === winner && gameActive) {
                winnCoordinates[countWinnMoves++] = [i, j]
                if (countWinnMoves === steps) {
                    scorebot++;
                    return
                }
            } else {
                countWinnMoves = 0
                winnCoordinates = []
            }
        }
    }
}
// ----------------------------------  RESET GAME
let handlePlayAgain = () => {
    gameActive = true
    currentPlayer = '♧'
    counter = 0
    countField.innerHTML = '0'
    statusDisplay.innerHTML = ''
    statusDisplay.style.color = 'black'
    player1.style.background = player2.style.background = '#f4e8bd'
    playField.removeChild(document.getElementById('container'))
    handleStart()
}

let handleRestart = () => {
    gameActive = true
    currentPlayer = '♧'
    counter = 0
    countField.innerHTML = '0'
    statusDisplay.innerHTML = ''
    statusDisplay.style.color = 'black'
    player1.style.background = player2.style.background = '#f4e8bd'
    player1_name.value = player2_name.value = ''
    player1.innerHTML = player2.innerHTML = '-'
    startBox.className = 'sidebar'
    playField.removeChild(document.getElementById('container'))
}

document.querySelector('#start').addEventListener('click', handleStart)  //1ere etape
document.querySelector('#playAgain').addEventListener('click', handlePlayAgain)
document.querySelector('#restart').addEventListener('click', handleRestart)
