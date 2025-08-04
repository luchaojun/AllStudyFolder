# HTML/CSS `display` 属性详解

`display` 是 CSS 中最重要的布局属性之一，它决定了元素如何显示在页面上以及如何与其他元素交互。以下是 `display` 属性的全面学习指南。

## 1. 基本 display 属性值

### 1.1 `display: block` (块级元素)

- **特性**：

  - 独占一行
  - 可以设置宽度、高度、内外边距
  - 默认宽度为父元素的100%

- **常见块级元素**：

  html

  ```
  <div>, <p>, <h1>-<h6>, <ul>, <ol>, <li>, <section>, <article>
  ```

- **示例**：

  css

  ```
  div {
    display: block;
    width: 200px;
    height: 100px;
    background-color: lightblue;
  }
  ```

### 1.2 `display: inline` (行内元素)

- **特性**：

  - 不独占一行，与其他行内元素共享一行
  - 设置宽度、高度无效
  - 只能设置水平方向的内外边距

- **常见行内元素**：

  html

  ```
  <span>, <a>, <strong>, <em>, <img>, <input>
  ```

- **示例**：

  css

  ```
  span {
    display: inline;
    /* 以下设置无效 */
    width: 100px;
    height: 50px;
    /* 以下设置有效 */
    padding: 0 10px;
    margin: 0 5px;
  }
  ```

### 1.3 `display: inline-block` (行内块元素)

- **特性**：

  - 像行内元素一样排列（不独占一行）
  - 像块级元素一样可以设置宽高、内外边距

- **示例**：

  css

  ```
  button {
    display: inline-block;
    width: 120px;
    height: 40px;
    margin: 5px;
  }
  ```

## 2. 复杂 display 属性值

### 2.1 `display: none`

- 完全从文档流中移除，不占据空间

- 与 `visibility: hidden` 的区别：后者仍占据空间

- **示例**：

  css

  ```
  .hidden-element {
    display: none;
  }
  ```

### 2.2 `display: flex` (弹性布局)

- 现代布局的主要方式之一

- **示例**：

  css

  ```
  .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  ```

### 2.3 `display: grid` (网格布局)

- 二维布局系统

- **示例**：

  css

  ```
  .container {
    display: grid;
    grid-template-columns: 1fr 2fr 1fr;
    gap: 10px;
  }
  ```

### 2.4 `display: table` 系列

- 模拟表格布局

- **相关值**：

  css

  ```
  display: table;       /* 类似 <table> */
  display: table-row;   /* 类似 <tr> */
  display: table-cell;  /* 类似 <td> */
  ```

## 3. 特殊 display 属性值

### 3.1 `display: list-item`

- 使元素像列表项一样显示

- **示例**：

  css

  ```
  .custom-list {
    display: list-item;
    list-style-type: square;
    margin-left: 20px;
  }
  ```

### 3.2 `display: run-in`

- 根据上下文决定显示为块级或行内元素（浏览器支持有限）

### 3.3 `display: contents`

- 元素自身不生成任何盒子，但其子元素正常显示

- **示例**：

  css

  ```
  .parent {
    display: contents;
  }
  ```

## 4. 实际应用示例

### 4.1 导航菜单

css

```
nav ul {
  display: flex;
  list-style: none;
  gap: 20px;
}

nav li {
  display: inline-block;
}
```

### 4.2 卡片布局

css

```
.card-container {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  gap: 15px;
}

.card {
  display: flex;
  flex-direction: column;
}
```

### 4.3 响应式设计

css

```
@media (max-width: 768px) {
  .menu {
    display: none;
  }
  
  .mobile-menu {
    display: block;
  }
}
```

## 5. 注意事项

1. **display 的继承性**：display 属性不会被继承
2. **覆盖默认 display**：可以改变元素的默认显示方式，如 `span { display: block; }`
3. **性能考虑**：频繁改变 display 可能触发重排，影响性能
4. **浏览器兼容性**：flex 和 grid 在旧浏览器中可能需要前缀

## 6. 练习建议

1. 尝试将 `<div>` 改为 `inline`，观察变化
2. 用 flex 实现一个居中的登录框
3. 用 grid 创建一个响应式图片画廊
4. 比较 `display: none` 和 `visibility: hidden` 的区别

掌握 `display` 属性是 CSS 布局的基础，建议多实践不同场景下的应用。