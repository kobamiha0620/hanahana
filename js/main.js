

async function supportsWebp() {
    if (!self.createImageBitmap) return false;
    
    const webpData = 'data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=';
    const blob = await fetch(webpData).then(r => r.blob());
    return createImageBitmap(blob).then(() => true, () => false);
    
  }
  
  (async () => {
    if(await supportsWebp()) {
      console.log('does support');
    }
    else {
      console.log('does not support');
    }
  })();


  const addWebpDetectionClass = () => {
    if (supportsWebp()) {
      document.body.classList.add('is-webp');

    } else {
        document.body.classList.add('is-no-webp');
    }
  };
  addWebpDetectionClass(); // 実行
  
  const anchors = document.querySelectorAll('a[href^="#"]');
  const header = document.querySelector('header').offsetHeight; //header高さ
  const urlHash = location.hash; // URLのアンカー（#以降の部分）を取得
  
  // 各 anchor にクリックイベント
  for ( let i = 0; i < anchors.length; i++ ) {
    anchors[i].addEventListener('click', (e) => {
      e.preventDefault();  //デフォルトのクリックイベント無効化
  
      // 各 anchor の href属性取得
      const href= anchors[i].getAttribute("href");
  
      // topに戻る以外のアンカー
      if (href !== '#top') {
  
        // スクロール先の要素を取得 （アンカーの リンク先 #.. の # を取り除いた名前と一致する id名の要素）
        const target = document.getElementById(href.replace('#', ''));
  
        // スクロール先の要素の位置を取得
        // header の高さ引く
        const position = window.pageYOffset + target.getBoundingClientRect().top - header;
  
        // スクロールアニメーション
        window.scroll({
          top: position,      // スクロール先要素の左上までスクロール
          behavior: 'smooth'  // スクロールアニメーション
        });
  
      // topに戻る
      } else {
        // スクロールアニメーション
        window.scroll({
          top: 0,  // スクロール先
          behavior: 'smooth'    // スクロールアニメーション
        });
  
      }
    });
  }
