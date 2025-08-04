# HTML 页面中文乱码解决方案

中文乱码问题通常是由于字符编码设置不正确导致的，以下是几种常见的解决方法：

## 1. 设置正确的 HTML 文档编码

在 HTML 的 `<head>` 部分添加以下 meta 标签：

html

```
<meta charset="UTF-8">
```

或者传统写法：

html

```
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
```

## 2. 确保文件实际编码为 UTF-8

- **使用代码编辑器**：将文件另存为 UTF-8 编码格式
  - VS Code: 右下角点击编码 → 保存为 UTF-8
  - Notepad++: 编码 → 转为 UTF-8 编码 → 保存
- **避免使用 Windows 记事本**：它可能会添加 BOM 头导致问题

## 3. 服务器端设置编码

### PHP 文件添加头部声明：

php

```
header('Content-Type: text/html; charset=UTF-8');
```

### Apache 服务器配置 (.htaccess)：

text

```
AddDefaultCharset UTF-8
```

### Nginx 服务器配置：

text

```
charset utf-8;
```

## 4. 数据库连接设置编码

如果从数据库读取中文出现乱码：

### MySQL 连接时设置：

php

```
// PDO 方式
$pdo = new PDO("mysql:host=localhost;dbname=test;charset=utf8", "user", "pass");

// MySQLi 方式
$mysqli = new mysqli("localhost", "user", "pass", "db");
$mysqli->set_charset("utf8");
```

## 5. 表单提交时的编码

确保表单提交时使用 UTF-8 编码：

html

```
<form accept-charset="UTF-8" method="post">
```

## 6. AJAX 请求设置编码

使用 jQuery AJAX 时：

javascript

```
$.ajax({
    url: 'your_script.php',
    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
    // 其他参数...
});
```

## 7. 检查浏览器自动检测编码

某些浏览器可能会错误地自动检测编码，可以强制禁用：

html

```
<meta charset="UTF-8">
<meta http-equiv="Content-Language" content="zh-CN">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
```

## 8. 检查文件是否包含 BOM 头

使用专业编辑器检查并移除 UTF-8 BOM 头，BOM 有时会导致问题。

## 9. 综合解决方案示例

完整的 HTML 文件示例：

html

```
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="zh-CN">
    <title>中文页面</title>
</head>
<body>
    <h1>中文内容测试</h1>
    <p>这是一段中文文本，应该正常显示。</p>
</body>
</html>
```

通过以上方法，大多数中文乱码问题都可以得到解决。如果问题仍然存在，请检查所有环节的编码设置是否一致。