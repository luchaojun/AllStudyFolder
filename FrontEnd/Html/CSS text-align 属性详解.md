# CSS `text-align` 属性详解

`text-align` 是 CSS 中用于控制文本水平对齐方式的属性，它可以应用于块级元素和表格单元格。

## 1. 基本语法

css

```
text-align: [对齐方式];
```

## 2. 常用属性值

| 值        | 描述                 | 效果示例                         |
| :-------- | :------------------- | :------------------------------- |
| `left`    | 左对齐（默认值）     | 文本靠左对齐                     |
| `right`   | 右对齐               | 文本靠右对齐                     |
| `center`  | 居中对齐             | 文本居中显示                     |
| `justify` | 两端对齐             | 文本均匀分布（最后一行除外）     |
| `start`   | 根据书写方向起始对齐 | 类似左对齐（LTR）或右对齐（RTL） |
| `end`     | 根据书写方向末尾对齐 | 类似右对齐（LTR）或左对齐（RTL） |

## 3. 使用示例

### 3.1 基础对齐

css

```
.left-align {
  text-align: left;
}

.center-align {
  text-align: center;
}

.right-align {
  text-align: right;
}

.justify-align {
  text-align: justify;
}
```

### 3.2 多语言支持

css

```
[dir="ltr"] {
  text-align: start; /* 等同于left */
}

[dir="rtl"] {
  text-align: start; /* 等同于right */
}
```

### 3.3 表格单元格对齐

css

```
td {
  text-align: center;
}
```

## 4. 实际应用场景

### 4.1 标题居中

css

```
h1, h2, h3 {
  text-align: center;
}
```

### 4.2 文章段落

css

```
.article p {
  text-align: justify;
  text-justify: inter-word; /* 改善对齐效果 */
}
```

### 4.3 页脚文本右对齐

css

```
footer {
  text-align: right;
}
```

## 5. 注意事项

1. **继承性**：`text-align` 会被子元素继承
2. **影响范围**：只影响行内内容（文本、行内元素、行内块元素）
3. **与direction关系**：在RTL（从右到左）语言中表现不同
4. **justify限制**：最后一行文本不会两端对齐
5. **图片对齐**：对 `<img>` 无效（需用其他方法）

## 6. 特殊技巧

### 6.1 强制最后一行两端对齐

css

```
.justify-last-line {
  text-align: justify;
}

.justify-last-line::after {
  content: "";
  display: inline-block;
  width: 100%;
}
```

### 6.2 响应式对齐

css

```
@media (max-width: 768px) {
  .responsive-text {
    text-align: center;
  }
}
```

### 6.3 表单标签对齐

css

```
.form-group label {
  display: inline-block;
  width: 120px;
  text-align: right;
  margin-right: 10px;
}
```

## 7. 浏览器兼容性

- 所有浏览器完全支持基本值（left/right/center/justify）
- `start`/`end` 值在现代浏览器中支持良好
- IE8+ 支持所有常用值

`text-align` 是文本布局的基础属性，合理使用可以大大提升内容的可读性和美观度。