# HTML/CSS 中的 `outline: none` 使用指南

`outline: none` 是 CSS 属性，用于移除元素获得焦点时显示的默认轮廓线（通常是一个虚线或实线边框）。

## 基本语法

css

```
selector {
  outline: none;
}
```

## 使用场景

### 1. 移除表单元素的焦点轮廓

css

```
input, button, textarea, select {
  outline: none;
}
```

### 2. 移除链接的焦点轮廓

css

```
a {
  outline: none;
}
```

### 3. 自定义焦点样式替代默认轮廓

css

```
button:focus {
  outline: none;
  box-shadow: 0 0 0 2px #4CAF50; /* 用阴影替代默认轮廓 */
}
```

## 为什么使用 `outline: none`

1. **美观考虑**：默认的轮廓样式可能与设计不符
2. **自定义焦点样式**：希望用其他视觉提示替代默认轮廓
3. **特定交互需求**：某些情况下不需要显示焦点状态

## 注意事项

1. **可访问性问题**：移除轮廓会影响键盘用户的体验，建议提供替代的焦点样式
2. **替代方案**：最好在移除默认轮廓后提供自定义的焦点状态
3. **浏览器差异**：不同浏览器对轮廓的默认样式可能不同

## 良好实践示例

css

```
/* 移除默认轮廓但提供自定义焦点状态 */
button {
  outline: none;
}

button:focus {
  box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
}

/* 或者保持轮廓但改变样式 */
a:focus {
  outline: 2px dashed #4CAF50;
  outline-offset: 2px;
}
```

## 浏览器兼容性

`outline: none` 在所有现代浏览器中都得到良好支持，包括：

- Chrome 1+
- Firefox 1.5+
- Safari 1.2+
- Opera 7+
- IE 8+

## 替代属性

如果你只想修改轮廓样式而不是完全移除它，可以使用：

- `outline-color`
- `outline-style`
- `outline-width`
- `outline-offset` (设置轮廓与元素边缘的距离)

css

```
input:focus {
  outline: 2px solid #4CAF50;
  outline-offset: 2px;
}
```

记住，在移除默认轮廓时，始终考虑为键盘用户提供替代的视觉反馈，这是Web可访问性的重要部分。