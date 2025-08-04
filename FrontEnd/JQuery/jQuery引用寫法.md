# jQuery 引用寫法

以下是幾種常見的 jQuery 引用方式：

## 1. 直接引用 jQuery CDN (推薦方式)

html

```
<!-- 使用官方 jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- 或者使用 Google CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
```

## 2. 下載後本地引用

html

```
<script src="js/jquery-3.6.0.min.js"></script>
```

## 3. 使用模組化載入 (如 Webpack, RequireJS)

javascript

```
// CommonJS 方式 (Node.js)
const $ = require('jquery');

// ES6 模組方式
import $ from 'jquery';
```

## 4. 使用 defer 或 async 屬性

html

```
<!-- 非同步載入 -->
<script src="js/jquery-3.6.0.min.js" async></script>

<!-- 延遲載入 -->
<script src="js/jquery-3.6.0.min.js" defer></script>
```

## 5. 檢查 jQuery 是否載入成功

javascript

```
if (typeof jQuery == 'undefined') {
    console.log('jQuery 未載入');
    // 可以在此處添加備用載入方案
} else {
    console.log('jQuery 已載入，版本: ' + $.fn.jquery);
}
```

## 最佳實踐

1. **放在 `<head>` 或 `<body>` 開始處**：通常放在 `<head>` 中或緊接在 `<body>` 開始標籤後

2. **搭配 ready 事件使用**：

   javascript

   ```
   $(document).ready(function() {
       // 你的代碼
   });
   ```

3. **考慮使用最新穩定版本**：定期更新 jQuery 版本以獲得安全修復和新功能

4. **CDN 備用方案**：

   html

   ```
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
   if (typeof jQuery == 'undefined') {
       document.write('<script src="js/jquery-3.6.0.min.js"><\/script>');
   }
   </script>
   ```

## 版本選擇建議

- 傳統項目：jQuery 1.12.4 (兼容 IE6-8)
- 現代項目：jQuery 3.6.0+ (更小更快，放棄舊版IE支持)