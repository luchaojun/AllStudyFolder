# `min-height: 100vh` 详解

`min-height: 100vh` 是 CSS 中一个非常有用的属性组合，用于控制元素的最小高度。下面我将从多个角度解释它的含义和用法：

## 1. 分解解释

- **`min-height`**: 设置元素的最小高度
  - 内容少时：至少显示这个高度
  - 内容多时：可以自动扩展超过这个高度
- **`100vh`**:
  - `vh` = viewport height（视口高度单位）
  - `100vh` = 100% 的视口高度（即浏览器窗口可见区域的高度）

## 2. 实际含义

`min-height: 100vh` 表示：
"这个元素的高度至少要等于整个浏览器窗口的高度，如果内容更多则可以自动变高"

## 3. 与类似属性的区别

| 属性                | 表现                               |
| :------------------ | :--------------------------------- |
| `height: 100vh`     | 严格等于视口高度，内容溢出时会超出 |
| `min-height: 100vh` | 至少等于视口高度，内容多时自动扩展 |
| `max-height: 100vh` | 最大不超过视口高度                 |

## 4. 典型使用场景

### 全屏布局

css

```
body {
  margin: 0;
  min-height: 100vh; /* 确保页面至少占满整个屏幕 */
  display: flex;
  flex-direction: column;
}

.content {
  flex: 1; /* 中间内容区域自动扩展 */
}

footer {
  margin-top: auto; /* 页脚自动推到最底部 */
}
```

### 区块最小高度控制

css

```
.hero-section {
  min-height: 100vh; /* 首屏至少占满整个视口 */
  background: linear-gradient(blue, lightblue);
  display: flex;
  align-items: center;
  justify-content: center;
}
```

## 5. 注意事项

1. **移动端适配**：

   - 在移动浏览器中，100vh 可能包含地址栏高度

   - 更精确的替代方案：

     css

     ```
     min-height: 100dvh; /* 新的动态视口单位 */
     /* 或 */
     min-height: 100%;
     html, body { height: 100%; }
     ```

2. **嵌套元素**：

   - 父元素需要有明确的高度，子元素的百分比高度才会生效

   - 示例：

     css

     ```
     html, body { height: 100%; }
     .container { min-height: 100%; }
     ```

3. **与 padding/margin 的关系**：

   - 添加 padding 会使元素实际高度超过 100vh

   - 解决方案：

     css

     ```
     box-sizing: border-box; /* 包含padding在高度计算内 */
     ```

4. **浏览器兼容性**：

   - 所有现代浏览器都支持

   - 旧版浏览器可能需要前缀：

     css

     ```
     min-height: -moz-available;
     min-height: -webkit-fill-available;
     min-height: fill-available;
     ```

## 6. 实用技巧

### 确保内容始终可见

css

```
.wrapper {
  min-height: 100vh;
  display: grid;
  grid-template-rows: auto 1fr auto;
}
/* 页头、内容、页脚布局 */
```

### 响应式设计

css

```
@media (max-height: 600px) {
  .tall-section {
    min-height: 600px; /* 在小高度视口中保持可读性 */
  }
}
```

### 与滚动行为配合

css

```
.scroll-container {
  min-height: 100vh;
  overflow-y: auto; /* 内容多时出现滚动条 */
}
```

记住：`min-height: 100vh` 是创建全屏布局的基础工具，但需要根据实际场景配合其他属性使用才能达到最佳效果。