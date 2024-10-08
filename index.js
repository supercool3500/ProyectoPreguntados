document.getElementById('spinButton').addEventListener('click', () => {
    const wheel = document.getElementById('wheel');
    const randomDegree = Math.floor(Math.random() * 360) + 3600; // 3600 ensures at least 10 full rotations
    wheel.style.transform = `rotate(${randomDegree}deg)`;
});
    