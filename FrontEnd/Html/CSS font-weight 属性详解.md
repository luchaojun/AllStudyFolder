# CSS `font-weight` 属性详解

`font-weight` 是 CSS 中用于控制字体粗细的属性，它可以让文本显示为不同的粗细程度。

## 1. 基本语法

css

```
font-weight: [值];
```

## 2. 常用属性值

| 值        | 描述                                 | 等效数值           |
| :-------- | :----------------------------------- | :----------------- |
| `normal`  | 正常字体粗细                         | 400                |
| `bold`    | 粗体                                 | 700                |
| `bolder`  | 比继承值更粗                         | 无固定值           |
| `lighter` | 比继承值更细                         | 无固定值           |
| `100-900` | 数值指定粗细（100为最细，900为最粗） | 100, 200, ..., 900 |

## 3. 使用示例

### 3.1 基本使用

css

```
.normal-text {
  font-weight: normal; /* 或400 */
}

.bold-text {
  font-weight: bold; /* 或700 */
}

.extra-bold {
  font-weight: 900;
}
```

### 3.2 相对值

css

```
.parent {
  font-weight: 600;
}

.child-bolder {
  font-weight: bolder; /* 可能显示为700或800 */
}

.child-lighter {
  font-weight: lighter; /* 可能显示为400或500 */
}
```

### 3.3 数值指定

css

```
.thin {
  font-weight: 100;
}

.semi-bold {
  font-weight: 600;
}
```

## 4. 实际应用场景

### 4.1 标题加粗

css

```
h1, h2, h3 {
  font-weight: bold;
}
```

### 4.2 强调文本

css

```
.emphasis {
  font-weight: 700;
}
```

### 4.3 细体文字

css

```
.light-text {
  font-weight: 300;
}
```

## 5. 注意事项

1. **字体支持**：字体必须包含对应的粗细变体才能显示效果
2. **回退机制**：浏览器会尝试匹配最接近的可用粗细
3. **继承性**：`font-weight` 会被子元素继承
4. **数值限制**：通常只有400(normal)和700(bold)被广泛支持

## 6. 浏览器兼容性

- 所有现代浏览器完全支持
- 数值100-900的支持取决于字体文件

## 7. 实用技巧

### 7.1 响应式字体粗细

css

```
@media (max-width: 768px) {
  .responsive-text {
    font-weight: 500; /* 在小屏幕上使用中等粗细 */
  }
}
```

### 7.2 配合字体变体

css

```
@font-face {
  font-family: 'MyFont';
  src: url('myfont-bold.woff2') format('woff2');
  font-weight: 700;
}

@font-face {
  font-family: 'MyFont';
  src: url('myfont-normal.woff2') format('woff2');
  font-weight: 400;
}
```

### 7.3 按钮文字加粗

css

```
.button {
  font-weight: 600; /* 比bold稍轻的加粗效果 */
}
```

`font-weight` 是控制文本视觉层次的重要属性，合理使用可以显著提升内容的可读性和美观度。