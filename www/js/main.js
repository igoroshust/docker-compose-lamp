const btnNightMode = document.querySelector('.night-mode-btn');


// 1. Проверка тёмной темы на уровне системных настроек
if (window.matchMedia && window.matchMedia('(prefers-color-scheme: night)').matches) {
    btnNightMode.classList.add('night-mode-btn--active');
    document.body.classList.add('night');
}

// 2. Проверка тёмной темы в localStorage
if (localStorage.getItem('nightMode') === 'night') {
    btnNightMode.classList.add('night-mode-btn--active');
    document.body.classList.add('night');
} else if (localStorage.getItem('nightMode') === 'light') {
    btnNightMode.classList.remove('night-mode-btn--active');
    document.body.classList.remove('night');
}

// 3. Слушатель изменения системных настроек
window.matchMedia("(prefers-color-scheme: night)").addEventListener('change', (event) => {
    const newColorScheme = event.matches ? 'night' : 'light'; // определяем активную тему

    if (newColorScheme === 'dark') {
        btnNightMode.classList.add('night-mode-btn--active');
        document.body.classList.add('night');
        localStorage.setItem('nightMode', 'night');
    } else {
        btnNightMode.classList.remove('night-mode-btn--active');
        document.body.classList.remove('night');
        localStorage.setItem('nightMode', 'light');
    }
});

// Включение ночного режима по кнопке
btnNightMode.onclick = function () {
    btnNightMode.classList.toggle('night-mode-btn--active');
    const isNight = document.body.classList.toggle('night');

    if (isNight) {
        localStorage.setItem('nightMode', 'night');
    } else {
        localStorage.setItem('nightMode', 'light');
    }
};