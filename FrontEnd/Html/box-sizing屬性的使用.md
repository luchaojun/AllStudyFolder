# box-sizing屬性的使用

`box-sizing` 是 CSS 的一个重要属性，用于控制元素的盒模型计算方式。它决定了元素的 `width` 和 `height` 是否包含 `padding` 和 `border`。以下是它的用法详解：

------

### **1. 属性值**

`box-sizing` 有两个主要取值：

- **`content-box`**（默认值）
  - `width` 和 `height` **仅包含内容区域**，不包含 `padding` 和 `border`。
  - 总宽度 = `width` + `padding` + `border`。
- **`border-box`**
  - `width` 和 `height` **包含内容、padding 和 border**。
  - 总宽度 = `width`（已包含 `padding` 和 `border`）。

------

### **2. 使用方法**

#### （1）全局设置（推荐）

css

```
* {
  box-sizing: border-box; /* 所有元素使用 border-box 模型 */
  margin: 0;
  padding: 0;
}
```

**作用**：统一所有元素的盒模型，避免布局计算混乱。

#### （2）单独设置

css

```
div {
  width: 200px;
  padding: 20px;
  border: 5px solid #333;
  box-sizing: border-box; /* 总宽度仍为 200px */
}
```

**效果**：

- 如果 `box-sizing: border-box`，`div` 的实际内容宽度 = `200px - 2*20px(padding) - 2*5px(border)` = `150px`。
- 如果默认 `content-box`，总宽度会变成 `200px + 2*20px + 2*5px` = `250px`。

------

### **3. 实际应用场景**

#### **场景 1：固定宽度布局**

html

```
<div class="box">内容</div>
```

css

```
.box {
  width: 300px;
  padding: 20px;
  border: 2px solid red;
  box-sizing: border-box; /* 确保总宽度始终为 300px */
}
```

#### **场景 2：网格系统**

css

```
.column {
  width: 25%; /* 四列布局 */
  padding: 15px;
  float: left;
  box-sizing: border-box; /* 避免百分比宽度因 padding 溢出 */
}
```

------

### **4. 兼容性**

- 所有现代浏览器（Chrome/Firefox/Safari/Edge）均支持。

- IE8+ 支持 `border-box`，如需兼容旧版浏览器可加前缀：

  css

  ```
  div {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  ```

------

### **5. 对比示例**

html

```
<div class="content-box">content-box</div>
<div class="border-box">border-box</div>
```

css

```
div {
  width: 200px;
  height: 100px;
  padding: 20px;
  border: 5px solid #333;
  margin: 10px;
}

.content-box {
  box-sizing: content-box; /* 默认值，总宽度 = 200 + 40 + 10 = 250px */
}

.border-box {
  box-sizing: border-box; /* 总宽度 = 200px（包含 padding 和 border） */
}
```

------

### **总结**

- **`content-box`**：传统模型，`width` 不包含 `padding` 和 `border`。
- **`border-box`**：更直观的模型，`width` 包含 `padding` 和 `border`（推荐使用）。
- 最佳实践：在 CSS 开头全局设置 `* { box-sizing: border-box; }`，避免布局问题。