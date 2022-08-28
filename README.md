```
/**
Plugin Name: nicen-localize-image
Plugin URI:https://nicen.cn/2893.html
Description: 用于本地化文章的外部图片的插件，支持文章发布前通过编辑器插件本地化、文章发布时自动本地化、定时发布文章时自动本地化、已发布的文章批量本地化。
Version: 1.3.1
Author: 友人a丶
Author URI: https://nicen.cn
Text Domain: nicen-localize-image
License: GPLv2 or later
 */
```

# 插件介绍

nicen-localize-image，是一款用于本地化文章的外部图片的插件，支持如下功能：

1. 文章发布前通过编辑器插件本地化
2. 文章手动发布时自动本地化
3. 文章定时发布时自动本地化
4. 针对已发布的文章批量本地化。

# 更新日志：

## v1.3.1 beta

1. 新增批量本地化时，可以指定文章分类，指定文章发布时间范围；
2. 新增域名白名单，插件将忽略白名单内的域名，不会进行本地化；
3. 新增自定义图片保存类型功能
4. 新增图片批量压缩功能；
5. 接口增加随机时间戳；
6. 优化自动发布文章的定时任务
7. 修复压缩图片时图片读取失败的问题

## v1.2.0 beta

1. 增加图片本地化日志收集的功能，随时了解本地化失败的原因；
2. 新增定时发布文章的功能，可设置定时发布时是否本地化文章图片；
3. 新增批量本地化已发布文章内外部图片的功能；
4. 新增插件更新日志，便于用户及时响应插件更新；
5. 新增插件BUG在线反馈的功能，便于及时修复问题；
6. 修改接口密钥为安装插件后随机生成，防止接口被恶意利用；
7. 新增图片本地化时是否添加网站域名的功能开关，开启后本地化后的图片链接为包含域名的完整路径；

## v1.1.3

1. 本地化下载图片的方式调整为curl获取，并模拟referer绕过防盗链；
2. 修改插件全局变量、函数的命名前缀；
3. 修复没有判断图片下载结果导致的异常问题；

# 仓库地址

Github：[https://github.com/friend-nicen/nicen-localize-image](https://github.com/friend-nicen/nicen-localize-image)

Gitee：[https://gitee.com/friend-nicen/nicen-localize-image](https://gitee.com/friend-nicen/nicen-localize-image)

# 功能说明

插件提供两种本地化外部图片的模式，两种模式可同时开启，互不冲突；
![alt 属性文本](https://nicen.cn/wp-content/uploads/2022/08/1661002814846.png)
## 编辑器本地化插件
   
启用这个模式之后，会将wordpress文章编辑器切换为经典编辑器，并在编辑器上方新增一个功能图标，点击之后可以自动检测并本地化所有外部图片；


![alt 属性文本](https://nicen.cn/wp-content/uploads/2022/08/1661008460684.png)
![alt 属性文本](https://nicen.cn/wp-content/uploads/2022/08/1661008539461.png)

## 发布时自动本地化

启用这个模式之后会在文章发布时自动本地化所有外部图片；
![alt 属性文本](https://nicen.cn/wp-content/uploads/2022/08/1661008642570.png)

推荐使用【编辑器本地化插件】在发布前进行本地化，当图片数量过多或者文件太大【发布时自动本地化】可能会导致请求卡死。

# 选项说明

## 1.图片本地化时保存到数据库

不开启的话，本地化的时候下载的图片不会在数据库内新增关联信息；开启之后，本地化的图片可以在媒体库内查看，并且可以重复使用；

## 2.发布时图片自动添加alt属性

img标签指定alt属性之后对seo较为友好，您可以选择指定alt的值为文章标题，或者文章分类；

## 3.本地化保存路径

代表本地化下载图片时，文件的保存路径（文件夹要求可写）；