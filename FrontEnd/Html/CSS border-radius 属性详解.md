# CSS `border-radius` 属性详解

`border-radius` 是 CSS 中用于创建圆角效果的属性，它可以为元素的四个角设置圆角半径。

## 1. 基本语法

css

```
border-radius: [值];
```

## 2. 使用方式

### 2.1 统一设置四个角

css

```
.box {
  border-radius: 10px; /* 四个角都是10px圆角 */
}
```

### 2.2 分别设置四个角

css

```
.box {
  border-radius: 10px 15px 20px 25px; /* 左上 右上 右下 左下 */
}
```

### 2.3 设置水平和垂直半径

css

```
.box {
  border-radius: 10px 20px; /* 水平半径 / 垂直半径 */
}
```

### 2.4 单独设置某个角

css

```
.box {
  border-top-left-radius: 10px;     /* 左上角 */
  border-top-right-radius: 15px;    /* 右上角 */
  border-bottom-right-radius: 20px; /* 右下角 */
  border-bottom-left-radius: 25px;  /* 左下角 */
}
```

## 3. 常用值类型

- **固定值**：`10px`, `1rem` 等
- **百分比**：`50%`（常用于创建圆形）
- **组合值**：`10px 20px`（水平/垂直半径）

## 4. 实际应用示例

### 4.1 创建圆形

css

```
.circle {
  width: 100px;
  height: 100px;
  border-radius: 50%; /* 关键代码 */
  background: lightblue;
}
```

### 4.2 创建胶囊形状

css

```
.pill {
  width: 200px;
  height: 50px;
  border-radius: 25px; /* 高度的一半 */
  background: lightgreen;
}
```

### 4.3 创建不规则圆角

css

```
.custom-shape {
  border-radius: 15px 30px 30px 15px / 30px 15px 15px 30px;
  /* 左上 右上 右下 左下 / 左上 右上 右下 左下 */
}
```

## 5. 注意事项

1. **性能考虑**：过度使用大圆角可能影响渲染性能
2. **背景裁剪**：圆角区域外的背景默认可见，可用 `background-clip: padding-box` 裁剪
3. **图片圆角**：对 `<img>` 元素使用时，确保设置 `overflow: hidden`
4. **边框影响**：圆角也会影响边框的形状

## 6. 浏览器兼容性

- 所有现代浏览器都支持

- IE9+ 支持标准语法

- 对于更旧浏览器可能需要前缀：

  css

  ```
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  ```

## 7. 高级技巧

### 7.1 配合阴影使用

css

```
.box {
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}
```

### 7.2 动画效果

css

```
.button {
  border-radius: 4px;
  transition: border-radius 0.3s ease;
}

.button:hover {
  border-radius: 20px;
}
```

### 7.3 配合渐变背景

css

```
.gradient-box {
  border-radius: 15px;
  background: linear-gradient(45deg, #ff9a9e, #fad0c4);
}
```

掌握 `border-radius` 可以大大提升界面设计的视觉效果，是现代Web设计中不可或缺的工具。