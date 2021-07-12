import { onSnake, expandSnake } from './snake.js';
import { randomGridPosition } from './getRandomFoodPosition.js';

let food = { x: 10, y: 1 };


const EXPANSION_RATE = 1;

export function update() {
    if (onSnake(food)) {
        expandSnake(EXPANSION_RATE)
        food = getRandomFoodPosition();
    }
}

export function draw(gameBoard) {
    let newFoodPosition = getRandomFoodPosition();
    const foodElement = document.createElement("div");
    foodElement.style.gridRowStart = newFoodPosition.y;
    foodElement.style.gridColumnStart = newFoodPosition.x;
    foodElement.classList.add('food');
    gameBoard.appendChild(foodElement);
}

function getRandomFoodPosition() {
    let newFoodPosition;
    while (newFoodPosition == null || onSnake(newFoodPosition)) {
        newFoodPosition = randomGridPosition();
    }
    return newFoodPosition;
}