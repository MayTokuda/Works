if (window.matchMedia("(max-width: 767px)").matches){
    /*================================================
        ハンバーガーメニュー
    ================================================*/
    $(function() {
        $('.hamburger').click(function() {
            $(this).toggleClass('active');
            if ($(this).hasClass('active')) {
                $('.globalMenuSp').addClass('active');
            } else {
                $('.globalMenuSp').removeClass('active');
            }
        });
    });


}

$(function () {
    /*================================================
        スライダー
    ================================================*/  
    $('#work-slider').slick({
        arrows: false, // 前・次のボタンを表示する
        dots: true, // ドットナビゲーションを表示する
        appendDots: $('.work-bar'), // ドットナビゲーションの生成位置を変更
        speed: 1000, // スライドさせるスピード（ミリ秒）
        slidesToShow: 1, // 表示させるスライド数
        centerMode: true, // slidesToShowが奇数のとき、現在のスライドを中央に表示する
        variableWidth: true, // スライド幅の自動計算を無効化
        responsive: [
            {
                breakpoint: 767, // 767px以下のサイズに適用
                settings: {
                    variableWidth: false, // スライド幅の自動計算を無効化
                },
            },
        ],
    });
    $('#apartment-slider').slick({
        arrows: false, // 前・次のボタンを表示する
        dots: true, // ドットナビゲーションを表示する
        appendDots: $('.apartment-bar'), // ドットナビゲーションの生成位置を変更
        speed: 1000, // スライドさせるスピード（ミリ秒）
        slidesToShow: 1, // 表示させるスライド数
        centerMode: true, // slidesToShowが奇数のとき、現在のスライドを中央に表示する
        variableWidth: true, // スライド幅の自動計算を無効化
        responsive: [
            {
                breakpoint: 767, // 767px以下のサイズに適用
                settings: {
                    variableWidth: false, // スライド幅の自動計算を無効化
                },
            },
        ],
    });
});