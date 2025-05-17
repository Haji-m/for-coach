document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        var arrow = document.querySelector('.arrow');
        if (arrow) {
            arrow.style.display = 'block';
        }
    }, 2000);
});

const scrollImage = document.getElementById('scroll');

window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;
     // ページをスクロールした際の処理
     if (scrollY > 100) { // スクロール量に応じて条件を設定
       scrollImage.classList.add('hidden'); // `hidden`クラスを追加し、画像を非表示
    } else {
       scrollImage.classList.remove('hidden'); // `hidden`クラスを削除し、画像を再表示
    }
    });
