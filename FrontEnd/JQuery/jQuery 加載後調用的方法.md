# jQuery 加載後調用的方法

在 jQuery 中，有幾種方法可以確保代碼在文檔加載完成後執行：

## 1. 傳統的 $(document).ready()

javascript

```js
$(document).ready(function() {
    // 這裡的代碼會在 DOM 完全加載後執行
    console.log("DOM 已完全加載");
});
```

## 2. 簡寫方式

javascript

```js
$(function() {
    // 這也是 ready 事件的簡寫形式
    console.log("DOM 已完全加載 (簡寫形式)");
});
```

## 3. jQuery 3.0+ 的 ready 方法

javascript

```js
$().ready(function() {
    // 另一種 ready 事件的寫法
    console.log("DOM 已完全加載 (jQuery 3.0+ 形式)");
});
```

## 4. 使用 window.onload (不推薦)

javascript

```js
window.onload = function() {
    // 這會在所有資源(包括圖片)加載完成後執行
    console.log("所有資源已加載完成");
};
```

## 注意事項

- `$(document).ready()` 和它的簡寫形式會在 DOM 樹構建完成後立即執行，而不需要等待圖片等外部資源加載完成
- `window.onload` 會等待所有資源(包括圖片、iframe等)加載完成
- 在現代 jQuery 版本中，簡寫形式 `$(function(){})` 是最常用的方式

## 多個 ready 處理函數

你可以使用多個 ready 處理函數，它們會按照註冊的順序執行：

javascript

```js
$(function() {
    console.log("第一個 ready 處理函數");
});

$(function() {
    console.log("第二個 ready 處理函數");
});
```

## 與原生 JavaScript 的比較

等效的原生 JavaScript 代碼：

javascript

```js
document.addEventListener('DOMContentLoaded', function() {
    // DOM 加載完成後執行
});
```