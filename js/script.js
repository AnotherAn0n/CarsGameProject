const carElements = document.getElementsByClassName("car");
const carObjects = [];
const settings = {
	raceLength: 500,
};
let pickedCar;

class Car {
	constructor(id, multiplier) {
		this.id = id;
		this.multiplier = multiplier;
		this.distance = 0;
	}
	increaseDistanceVar() {
		this.distance += 10 * this.multiplier;
	}
	move() {
		const car = document.getElementById(this.id);
		this.increaseDistanceVar();
		car.style.left = `${this.distance}px`;
	}
}

for (const element of carElements) {
	const car = new Car(element.id, element.dataset.multiplier);
	carObjects.push(car);
}

const moveNonPickedCars = () => {
	for (const obj of carObjects) {
		const car = document.getElementById(obj.id);
		if (car.dataset.picked != "true") {
			obj.move();
		}
	}
};

const movePickedCar = (e) => {
	if (e.key == " ") {
		for (const obj of carObjects) {
			const car = document.getElementById(obj.id);
			if (car.dataset.picked == "true") {
				obj.move();
			}
		}
	}
};

const updateSettings = () => {
	settings.raceLength = raceLengthInput.value;
};

window.addEventListener("keyup", movePickedCar);
