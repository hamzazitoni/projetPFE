import { SNAKE_SPEED, getSnakeHeade, snakeIntersection } from './snake.js';
import { update as updateSnake, draw as drawSnake } from './snake.js';
import { update as updateFood, draw as drawFood } from './food.js';
import { outSideGrid } from './checkGameOver.js';


let lastRenderTime = 0;
let gameOver = false;
const gameBoard = document.getElementById('game-board');

function main(currentTime) {
    /*if (gameOver) {
        return alert('game over');
    }*/

    if (gameOver) {
        if (confirm('You lose the game,Press OK to restart.')) {
            window.location.reload();
        }
        return;
    }
    window.requestAnimationFrame(main);
    const secondsSinceLastRender = (currentTime - lastRenderTime) / 1000;
    if (secondsSinceLastRender < 1 / SNAKE_SPEED) return;
    lastRenderTime = currentTime;
    update()
    draw();
    checkGameOver();
}

function update() {
    updateSnake();
    updateFood();
}

function draw() {
    //gameBoard.innerHTML = '';
    drawSnake(gameBoard);

}

function checkGameOver() {
    gameOver = outSideGrid(getSnakeHeade()) || snakeIntersection();
}

drawFood(gameBoard);
drawFood(gameBoard);
drawFood(gameBoard);
drawFood(gameBoard);
drawFood(gameBoard);
drawFood(gameBoard);



window.requestAnimationFrame(main);