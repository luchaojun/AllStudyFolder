# CSS `box-shadow` 属性详解

`box-shadow` 是 CSS 中用于为元素添加阴影效果的强大属性，它可以创建各种视觉效果，从简单的投影到复杂的装饰效果。

## 1. 基本语法

css

```
box-shadow: [水平偏移] [垂直偏移] [模糊半径] [扩展半径] [颜色] [inset];
```

## 2. 参数说明

| 参数     | 描述                 | 示例值                       |
| :------- | :------------------- | :--------------------------- |
| 水平偏移 | 阴影水平位移（必选） | `5px` (右移) / `-5px` (左移) |
| 垂直偏移 | 阴影垂直位移（必选） | `5px` (下移) / `-5px` (上移) |
| 模糊半径 | 阴影模糊程度（可选） | `10px` (值越大越模糊)        |
| 扩展半径 | 阴影大小变化（可选） | `5px` (扩大) / `-5px` (缩小) |
| 颜色     | 阴影颜色（可选）     | `#000`, `rgba(0,0,0,0.5)`    |
| inset    | 内阴影（可选）       | `inset` (不加则为外阴影)     |

## 3. 使用示例

### 3.1 基础阴影

css

```
.box {
  box-shadow: 5px 5px 10px 0 rgba(0,0,0,0.3);
  /* 右5px 下5px 模糊10px 无扩展 半透明黑色 */
}
```

### 3.2 内阴影

css

```
.box {
  box-shadow: inset 0 0 15px 5px rgba(0,0,0,0.2);
}
```

### 3.3 多重阴影

css

```
.box {
  box-shadow: 
    0 2px 4px rgba(0,0,0,0.1),
    0 4px 8px rgba(0,0,0,0.1),
    0 8px 16px rgba(0,0,0,0.1);
}
```

### 3.4 浮动效果

css

```
.card {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 
              0 1px 2px rgba(0,0,0,0.24);
  transition: box-shadow 0.3s ease;
}

.card:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
              0 10px 10px rgba(0,0,0,0.22);
}
```

## 4. 实用技巧

### 4.1 按钮效果

css

```
.button {
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  transition: all 0.3s ease;
}

.button:active {
  box-shadow: 0 2px 3px rgba(0,0,0,0.1);
  transform: translateY(1px);
}
```

### 4.2 霓虹灯效果

css

```
.neon {
  box-shadow: 0 0 5px #fff,
              0 0 10px #fff,
              0 0 20px #0ff,
              0 0 30px #0ff;
}
```

### 4.3 浮雕效果

css

```
.emboss {
  box-shadow: inset 3px 3px 5px rgba(255,255,255,0.5),
              inset -3px -3px 5px rgba(0,0,0,0.1);
}
```

## 5. 注意事项

1. **性能影响**：过度使用阴影（特别是大模糊半径）可能影响渲染性能
2. **叠加顺序**：多个阴影时，先定义的阴影会显示在上层
3. **与border-radius关系**：阴影会跟随元素的圆角形状
4. **透明元素**：阴影对完全透明的元素不起作用

## 6. 浏览器兼容性

- 所有现代浏览器完全支持

- IE9+ 支持基本功能

- 对于旧版浏览器可能需要前缀：

  css

  ```
  -webkit-box-shadow: 5px 5px 10px #000;
  -moz-box-shadow: 5px 5px 10px #000;
  box-shadow: 5px 5px 10px #000;
  ```

## 7. 创意应用

### 7.1 伪3D效果

css

```
.three-d {
  box-shadow: 1px 1px #333,
              2px 2px #333,
              3px 3px #333,
              4px 4px #333,
              5px 5px #333;
}
```

### 7.2 光晕效果

css

```
.glow {
  box-shadow: 0 0 20px 10px rgba(255,255,0,0.5);
}
```

### 7.3 边框替代方案

css

```
.fake-border {
  box-shadow: 0 0 0 2px #000; /* 无偏移无模糊，仅扩展 */
}
```

`box-shadow` 是一个非常灵活的 CSS 属性，通过巧妙组合各种参数，可以实现从简单的投影到复杂的装饰效果，是提升界面视觉层次感的强大工具。