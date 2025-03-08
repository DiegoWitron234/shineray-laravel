document.addEventListener("DOMContentLoaded", function () {
    const car = document.querySelector(".car");

    if (car) {
        let position = 0;
        let direction = 1; // 1 = derecha, -1 = izquierda

        setInterval(() => {
            if (position >= 180) {
                direction = -1;
            } else if (position <= 0) {
                direction = 1;
            }
            position += direction * 5;
            car.style.transform = `translateX(${position}px)`;
        }, 100);
    }
});
