$(function () {
    /*=================================================
    portfolio-titleのjquery
    ===================================================*/

    setTimeout(function () {
        $(".portfolio-title").fadeIn(1600);
    }, 500);

    /*=================================================
    slick-areaのスライダー
    ===================================================*/

    $(".slick-area").slick({
        centerMode: true,
        centerPadding: '100px',
        slidesToShow: 3,
        focusOnSelect: true,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [{
            breakpoint: 1800,
            settings: {
                centerPadding: '400px',
                slidesToShow: 1,
            }
        }, {
            breakpoint: 1250,
            settings: {
                centerPadding: '300px',
                slidesToShow: 1
            }
        },{
            breakpoint: 1020,
            settings: {
                centerPadding: '0px',
                slidesToShow: 1
            }
        }]
    });

    /*=================================================
    ハンバーガーバーのjquery
    ===================================================*/

    $(".toggle_btn").on("click", function () {
        if (!$('#header').hasClass('open')) {
            $('#header').addClass('open');
        } else {
            $('#header').removeClass('open');
        }
    });

    /*=================================================
    背景のjs
    ===================================================*/

    particlesJS("particles-js", {
        "particles": {                                      //シェイプのカスタム
            "number": {                                     //シェイプの数について
                "value": 355,                               //シェイプの数を指定
                "density": {                                //密度のカスタム
                    "enable": true,                         //密度を変更するか否か
                    "value_area": 789.1476416322727         //密度の指定
                }
            },
            "color": {                                      //シェイプの色のカスタム
                "value": "#ffffff"                          //シェイプの色を指定
            },
            "shape": {                                      //シェイプの形状
                "type": "circle",                           //シェイプの形状を指定（circle:丸、edge:四角、triangle:三角、polygon:多角形、star:星形、image:画像）
                "stroke": {                                 //シェイプの外線のカスタム
                    "width": 0,                             //シェイプの外線の太さ
                    "color": "#000000"                      //シェイプの外線の色
                },
                "polygon": {                                //シェイプの形を多角形に指定した場合の設定
                    "nb_sides": 5                           //多角形の角の数
                },
                "image": {                                  //シェイプの形を画像にした時の設定
                    "src": "img/github.svg",                //写真の指定
                    "width": 100,                           //幅の指定
                    "height": 100                           //高さの指定
                }
            },
            "opacity": {                                    //シェイプの透明度のカスタム
                "value": 0.48927153781200905,               //シェイプの透明度を指定
                "random": false,                            //シェイプの透明度をランダムにするか否か
                "anim": {                                   //透明度のアニメーションカスタム
                    "enable": true,                         //シェイプの透明度をアニメーションにさせるか否か
                    "speed": 0.2,                           //アニメーションスピード
                    "opacity_min": 0,                       //透明度の最小値
                    "sync": false                           //全てのシェイプを同時にアニメーションさせるか否か
                }
            },
            "size": {                                       //シェイプの大きさについての設定
                "value": 2,                                 //シェイプの大きさを指定
                "random": true,                             //シェイプの大きさをランダムにするか否か
                "anim": {
                    "enable": true,                         //大きさのアニメーションをするか否か
                    "speed": 2,                             //アニメーションスピード
                    "size_min": 0,                          //大きさの最小値
                    "sync": false                           //アニメーションを同時にさせるか否か
                }
            },
            "line_linked": {                                //線の設定
                "enable": false,                            //線を書くか否か
                "distance": 150,                            //線をつなぐシェイプの間隔
                "color": "#ffffff",                         //線の色
                "opacity": 0.4,                             //線の透明度
                "width": 1                                  //線の太さ
            },
            "move": {                                       //動きについての設定
                "enable": true,                             //動きを設定するか否か
                "speed": 0.2,                               //シェイプの動くスピード
                "direction": "none",                        //エリア全体の動き（none,top,top-right,right,bottom-right,bottom,bottom-left,left,top-leftより選択）
                "random": true,                             //動きをランダムにするか否か
                "straight": false,                          //個々のシェイプの動きを止めるか否か
                "out_mode": "out",                          //エリア外に出たシェイプの動き
                "bounce": false,                            //跳ね返る動きをさせるか否か
                "attract": {                                //引きつける動きの設定
                    "enable": false,                        //引きつける動きをさせるか否か
                    "rotateX": 600,                         //x方向の回転度を指定
                    "rotateY": 1200                         //y方向の回転度を指定
                }
            }
        },
        "interactivity": {                                  //シェイプのイベント処理の設定
            "detect_on": "canvas",                          //イベント処理させる要素の指定
            "events": {                                     //イベント処理をカスタム
                "onhover": {                                //マウスオーバー時の処理
                    "enable": true,                         //マウスオーバーが有効か否か
                    "mode": "bubble"                        //マウスオーバー時に発動する動き
                },
                "onclick": {                                //クリック時のイベント
                    "enable": true,                         //クリックが有効か否か
                    "mode": "push"                          //クリック時に発動する動き
                },
                "resize": true                              //canvasのサイズ変更にわせて拡大縮小するか否か
            },
            "modes": {                                      //それぞれの動きのカスタム
                "grab": {                                   //カーソルとシェイプの間に線を表示させる
                    "distance": 400,                        //カーソルからの反応距離
                    "line_linked": {                        //線のカスタム
                        "opacity": 1                        //線の透明度を指定
                    }
                },
                "bubble": {                                 //シェイプがふくらむ
                    "distance": 83.91608391608392,          //カーソルからの反応速度
                    "size": 1,                              //ふくらむ大きさ
                    "duration": 3,                          //ふくらむシェイプの持続時間
                    "opacity": 1,                           //膨らむシェイプの透明度
                    "speed": 3                              //膨らむシェイプの速度
                },
                "repulse": {                                //シェイプがカーソルから逃げる
                    "distance": 200,                        //カーソルからの反応距離
                    "duration": 0.4
                },
                "push": {                                   //シェイプが増える
                    "particles_nb": 4                       //増えるシェイプの量
                },
                "remove": {                                 //シェイプが減る
                    "particles_nb": 2                       //減るシェイプの量
                }
            }
        },
        "retina_detect": true                               //Retina Displayを対応するか否か
    });
});