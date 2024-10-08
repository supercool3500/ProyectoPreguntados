document.getElementById('spinButton').addEventListener('click', () => {
    const wheel = document.getElementById('wheel');
    const randomDegree = Math.floor(Math.random() * 360) + 3600; // 3600 ensures at least 10 full rotations
    wheel.style.transform = `rotate(${randomDegree}deg)`;
});
    
document.getElementById('play-button').addEventListener('click', function() {
    document.getElementById('initial-content').classList.remove('initial-content');
    document.getElementById('initial-content').classList.add('hidden');
    document.getElementById('roulette-container').classList.remove('hidden');
});