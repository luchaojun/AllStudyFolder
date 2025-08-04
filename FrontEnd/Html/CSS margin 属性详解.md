# CSS `margin` 属性详解

`margin` 是 CSS 中用于控制元素外边距（元素与元素之间的间距）的重要属性。

## 1. 基本语法

css

```
margin: [值];
```

## 2. 使用方式

### 2.1 统一设置四个边距

css

```
.box {
  margin: 20px; /* 上、右、下、左都是20px */
}
```

### 2.2 分别设置垂直和水平边距

css

```
.box {
  margin: 10px 20px; /* 上下10px，左右20px */
}
```

### 2.3 分别设置四个边距

css

```
.box {
  margin: 10px 15px 20px 25px; /* 上、右、下、左 */
}
```

### 2.4 单独设置某个边距

css

```
.box {
  margin-top: 10px;
  margin-right: 15px;
  margin-bottom: 20px;
  margin-left: 25px;
}
```

## 3. 常用值类型

- **固定值**：`10px`, `2em`, `1rem` 等
- **百分比**：`5%`（相对于包含块的宽度）
- **auto**：自动计算边距（常用于水平居中）
- **负值**：`-10px`（元素重叠效果）

## 4. 实际应用示例

### 4.1 元素水平居中

css

```
.container {
  width: 80%;
  margin: 0 auto; /* 上下0，左右auto */
}
```

### 4.2 段落间距

css

```
p {
  margin: 15px 0; /* 上下15px，左右0 */
}
```

### 4.3 卡片间距

css

```
.card {
  margin: 10px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}
```

## 5. 注意事项

1. **外边距合并**：相邻垂直边距会合并（取较大值）
2. **内联元素**：只影响左右边距，不影响上下边距
3. **负边距**：可以创建特殊布局效果
4. **auto值**：只在水平方向有效（除非使用Flex/Grid布局）

## 6. 浏览器兼容性

- 所有浏览器完全支持
- 无需前缀

## 7. 高级技巧

### 7.1 使用负边距创建特殊效果

css

```
.overlap {
  margin-top: -20px; /* 与上方元素重叠 */
}
```

### 7.2 响应式边距

css

```
@media (max-width: 768px) {
  .responsive-box {
    margin: 5px;
  }
}
```

### 7.3 重置默认边距

css

```
body {
  margin: 0; /* 移除浏览器默认边距 */
}
```

掌握 `margin` 可以精确控制元素间距，是CSS布局的基础技能之一。