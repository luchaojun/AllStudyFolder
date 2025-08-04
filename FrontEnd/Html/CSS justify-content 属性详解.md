# CSS `justify-content` 属性详解

`justify-content` 是 Flexbox 和 Grid 布局中的关键属性，用于控制主轴（main axis）上的对齐方式。以下是它的完整使用方法：

## 1. 基本概念

- **适用容器**：必须配合 `display: flex` 或 `display: grid` 使用
- **作用方向**：控制主轴（flex-direction 决定的方向）的对齐
- **不影响属性**：不控制交叉轴（侧轴）的对齐（用 `align-items` 控制）

## 2. 常用属性值及效果

### 对于 Flex 容器：

| 值                  | 效果                   | 图示示例                 |
| :------------------ | :--------------------- | :----------------------- |
| `flex-start` (默认) | 项目向主轴起点对齐     | [←项目][项目][项目]      |
| `flex-end`          | 项目向主轴终点对齐     | [项目][项目][项目]→      |
| `center`            | 项目居中对齐           | [ 项目 ][ 项目 ][ 项目 ] |
| `space-between`     | 首尾项目贴边，中间等距 | [项目]**[项目]**[项目]   |
| `space-around`      | 每个项目两侧间隔相等   | *[项目]*[项目]*[项目]*   |
| `space-evenly`      | 所有间隔完全相等       | *[项目]*[项目]*[项目]*   |

### 对于 Grid 容器（额外支持）：

- `start` / `end` / `stretch` 等值

## 3. 使用示例

### 基础示例：

css

```
.container {
  display: flex;
  justify-content: center; /* 水平居中 */
  border: 1px solid #ccc;
  padding: 10px;
}

.item {
  width: 50px;
  height: 50px;
  background: lightblue;
  margin: 0 5px;
}
```

html

```
<div class="container">
  <div class="item">1</div>
  <div class="item">2</div>
  <div class="item">3</div>
</div>
```

### 不同值效果对比：

css

```
.flex-start { justify-content: flex-start; }
.flex-end { justify-content: flex-end; }
.center { justify-content: center; }
.space-between { justify-content: space-between; }
.space-around { justify-content: space-around; }
```

## 4. 实际应用场景

### 导航菜单：

css

```
nav {
  display: flex;
  justify-content: space-between; /* 左右分列 */
  padding: 0 20px;
}

.logo { margin-right: auto; } /* 可选：让logo靠左 */
```

### 卡片居中：

css

```
.card-container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 20px;
}
```

### 表单按钮组：

css

```
.form-actions {
  display: flex;
  justify-content: flex-end;
  gap: 10px;
  margin-top: 20px;
}
```

## 5. 注意事项

1. **主轴方向影响**：

   - 默认 `flex-direction: row` 时控制水平对齐
   - `flex-direction: column` 时控制垂直对齐

2. **与 flex-wrap 配合**：

   css

   ```
   .container {
     display: flex;
     flex-wrap: wrap;
     justify-content: space-around;
   }
   ```

3. **响应式设计**：

   css

   ```
   @media (max-width: 768px) {
     .container {
       flex-direction: column;
       justify-content: flex-start;
     }
   }
   ```

4. **浏览器支持**：

   - 现代浏览器全面支持

   - 旧版可能需要前缀：

     css

     ```
     .container {
       display: -webkit-flex;
       -webkit-justify-content: center;
       display: flex;
       justify-content: center;
     }
     ```

## 6. 可视化示例

text

```
flex-start: |[item][item][item]        |
flex-end:  |        [item][item][item]|
center:    |    [item][item][item]    |
space-between: |[item]    [item]    [item]|
space-around: | [item]  [item]  [item] |
```

建议在实际项目中多尝试不同组合，结合开发者工具实时调试观察效果。