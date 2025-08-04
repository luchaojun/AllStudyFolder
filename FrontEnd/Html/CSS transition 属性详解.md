# CSS `transition` 属性详解

`transition` 是 CSS 中用于创建平滑动画效果的属性，它可以让 CSS 属性的变化在一定时间内渐变完成，而不是瞬间变化。

## 1. 基本语法

css

```
transition: [property] [duration] [timing-function] [delay];
```

## 2. 参数说明

| 参数            | 描述                 | 示例值                                               |
| :-------------- | :------------------- | :--------------------------------------------------- |
| property        | 要过渡的CSS属性      | `all`, `width`, `opacity`                            |
| duration        | 过渡持续时间         | `0.3s`, `500ms`                                      |
| timing-function | 过渡速度曲线         | `ease`, `linear`, `cubic-bezier(0.1, 0.7, 1.0, 0.1)` |
| delay           | 过渡开始前的延迟时间 | `0.2s`, `100ms`                                      |

## 3. 使用示例

### 3.1 基础过渡效果

css

```
.box {
  width: 100px;
  transition: width 0.3s ease;
}

.box:hover {
  width: 200px;
}
```

### 3.2 多个属性过渡

css

```
.button {
  background: blue;
  color: white;
  transition: background 0.3s, color 0.2s linear;
}

.button:hover {
  background: darkblue;
  color: yellow;
}
```

### 3.3 所有属性过渡

css

```
.card {
  transition: all 0.5s ease-in-out;
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}
```

### 3.4 带延迟的过渡

css

```
.menu-item {
  transition: transform 0.2s ease-out 0.1s;
}

.menu-item:hover {
  transform: translateX(10px);
}
```

## 4. 过渡属性详解

### 4.1 过渡属性 (transition-property)

指定哪些CSS属性需要过渡效果：

css

```
transition-property: width, height;
```

### 4.2 过渡时间 (transition-duration)

指定过渡持续时间：

css

```
transition-duration: 0.5s;
```

### 4.3 过渡函数 (transition-timing-function)

控制过渡的速度曲线：

css

```
transition-timing-function: ease-in-out;
```

常用值：

- `ease` (默认)：慢速开始，然后变快，然后慢速结束
- `linear`：匀速过渡
- `ease-in`：慢速开始
- `ease-out`：慢速结束
- `ease-in-out`：慢速开始和结束
- `cubic-bezier(n,n,n,n)`：自定义速度曲线

### 4.4 过渡延迟 (transition-delay)

指定过渡开始前的等待时间：

css

```
transition-delay: 0.2s;
```

## 5. 实际应用场景

### 5.1 悬停效果

css

```
.nav-link {
  transition: color 0.2s ease;
}

.nav-link:hover {
  color: #ff5500;
}
```

### 5.2 加载动画

css

```
.loader {
  transition: opacity 0.5s ease-out 1s;
  opacity: 1;
}

.loader.hidden {
  opacity: 0;
}
```

### 5.3 折叠面板

css

```
.panel {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.3s ease-out;
}

.panel.open {
  max-height: 500px;
}
```

### 5.4 按钮反馈

css

```
.button {
  transition: transform 0.1s ease;
}

.button:active {
  transform: scale(0.95);
}
```

## 6. 注意事项

1. **可过渡属性**：不是所有CSS属性都可以过渡，一般数值类属性（宽高、颜色、透明度等）可以
2. **性能考虑**：避免过渡太多属性或使用复杂过渡，影响性能
3. **初始状态**：元素必须有一个初始值，过渡才能生效
4. **display属性**：`display` 属性不能过渡，可以使用 `opacity` 或 `visibility` 替代
5. **硬件加速**：使用 `transform` 和 `opacity` 的过渡性能更好

## 7. 浏览器兼容性

- 所有现代浏览器完全支持

- IE10+ 支持

- 旧版浏览器可能需要前缀：

  css

  ```
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  ```

## 8. 高级技巧

### 8.1 链式过渡

css

```
.element {
  transition: width 0.3s ease, height 0.3s ease 0.3s;
}
```

### 8.2 检测过渡结束

javascript

```
element.addEventListener('transitionend', function() {
  console.log('Transition ended');
});
```

### 8.3 禁用过渡

css

```
.no-transition {
  transition: none !important;
}
```

`transition` 是增强用户体验的强大工具，合理使用可以让界面更加生动和专业。