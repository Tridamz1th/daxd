const hellos = [
    "Hai", // Indonesia (Latin)
    "Hello", // Inggris (Latin)
    "Hola", // Spanyol (Latin)
    "Bonjour", // Prancis (Latin)
    "Ciao", // Italia (Latin)
    "こんにちは", // Jepang (Hiragana)
    "Halo", // Polandia (Latin)
    "Привет", // Rusia (Cyrillic)
    "Oi", // Portugis (Latin)
    "안녕하세요", // Korea (Hangul)
    "สวัสดี", // Thailand (Thai)
    "你好", // Mandarin (Hanzi)
    "Merhaba", // Turki (Latin)
    "مرحبا", // Arab (Arab)
    "नमस्ते", // Hindi (Devanagari)
    "Xin chào" // Vietnam (Latin dengan diakritik)
];
const helloText = document.querySelector('.hello-text');
let index = 0;

function changeHello() {
    helloText.classList.remove('active');
    setTimeout(() => {
        helloText.textContent = hellos[index];
        index = (index + 1) % hellos.length;
        helloText.classList.add('active');
    }, 500);
}

changeHello();
setInterval(changeHello, 3000);