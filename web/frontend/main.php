<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="theme-color" content="#2d3943" />

        <title>联萌日志服务 - 轻松粘贴、自动分析并分享您的 MC 日志</title>

        <base href="/" />

        <link rel="stylesheet" href="//fonts.geekzu.org/css?family=Play:400,700">
        <link href="https://fonts.geekzu.org/css?family=Roboto+Mono:300,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
        <link rel="stylesheet" href="css/btn.css" />
        <link rel="stylesheet" href="css/mclogs.css?v=071222" />

        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

        <meta name="description" content="轻松粘贴、自动分析并分享您的 MC 日志">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    </head>
    <body>
        <header class="row navigation">
            <div class="row-inner">
                <a href="/" class="logo">
                    <img src="img/logo.png" />
                </a>
                <div class="menu">
                    <a class="menu-item" href="/#info">
                        <i class="fa fa-info-circle"></i> 介绍
                    </a>
                    <a class="menu-item" href="/#about">
                        <i class="fa fa-puzzle-piece"></i> 关于
                    </a>
                    <a class="menu-item" href="https://api.logs.lianmoe.cn/">
                        <i class="fa fa-code"></i> API
                    </a>
                    <a class="menu-social btn btn-black btn-notext btn-large btn-no-margin" href="https://github.com/Zachery-Liu/mclogs" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
        </header>
        <div class="row dark title">
            <div class="row-inner">
                <h1 class="title-container">
                    <span class="title-verb">粘贴</span> 您的 Minecraft 日志.
                </h1>
            </div>
        </div>
        <div class="row dark paste">
            <div class="row-inner">
                <div class="paste-box">
                    <div class="paste-header">
                        <div class="paste-header-text">
                            将日志文件拖到文本框内 或 <span class="btn btn-small btn-no-margin" id="paste-select-file"><i class="fa fa-file-import"></i> 选择文件</span>
                        </div>
                        <div class="paste-save btn btn-green btn-no-margin">
                            <i class="fa fa-save"></i> 保存
                        </div>
                    </div>
                    <div id="dropzone" class="paste-body">
                        <textarea id="paste" autocomplete="off" spellcheck="false"></textarea>
                    </div>
                    <div class="paste-footer">
                        <div class="paste-save btn btn-green btn-no-margin">
                            <i class="fa fa-save"></i> 保存
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row info" id="info">
            <div class="row-inner">
                <div class="info-item info-blue">
                    <div class="info-icon">
                        <i class="fa fa-clone"></i>
                    </div>
                    <div class="info-details">
                        <div class="info-title">
                            粘贴
                        </div>
                        <div class="info-text">
                        轻松地从任何来源粘贴您的Minecraft日志文件到这里并保存。IP地址等关键信息将会自己「藏」起来。
                        </div>
                    </div>
                </div>
                <div class="info-item info-green">
                    <div class="info-icon">
                        <i class="fa fa-share-alt"></i>
                    </div>
                    <div class="info-details">
                        <div class="info-title">
                            分享
                        </div>
                        <div class="info-text">
                            使用分享网址分享您的Minecraft日志并与他人「有难同当」。
                        </div>
                    </div>
                </div>
                <div class="info-item info-red">
                    <div class="info-icon">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="info-details">
                        <div class="info-title">
                            分析
                        </div>
                        <div class="info-text">
                            通过智能分析和语法高亮，日志中的问题「无处可藏」。
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row dark plugin" id="save">
            <div class="row-inner">
                <div class="article left">
                    <div class="article-icon">
                        <i class="fa fa-clone"></i>
                    </div>
                    <div class="article-info">
                        <div class="article-title">
                            拖拉拽保存一气呵成！
                        </div>
                        <div class="article-text">
                        将日志文件拖入框中，直接单击保存即可轻松将您的日志文件上传到我们的服务器中。<br>
                                <div class="article-buttons">
                            <a href="/" target="_blank" class="btn btn-blue btn-no-margin">
                                <i class="fa fa-book"></i> 查看详细指引
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mod" id="90d">
            <div class="row-inner">
                <div class="article right">
                    <div class="article-icon">
                        <i class="fa fa-database"></i>
                    </div>
                    <div class="article-info">
                        <div class="article-title">
                            您的日志在我们这里「住」得很好！
                        </div>
                        <div class="article-text">
                        您的日志将在这里「住」满90天，如果无人问津，我们只能将它们「扫地出门」，并为您的下一个日志腾出空间。<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row dark api" id="about">
            <div class="row-inner">
                <div class="article left">
                    <div class="article-icon">
                        <i class="fa fa-code"></i>
                    </div>
                    <div class="article-info">
                        <div class="article-title">
                            查看我们的其他内容？
                        </div>
                        <div class="article-text">
                            联萌社区还有「一揽子」其他项目等你去探索！
                        </div>
                        <div class="article-buttons">
                            <a href="https://www.lianmoe.cn/" target="_blank" class="btn btn-blue btn-no-margin">
                                <i class="fa fa-earth-asia"></i> 官网
                            </a>
                            <a href="https://tutorial.lianmoe.cn/" target="_blank" class="btn btn-blue btn-no-margin">
                                <i class="fa fa-book"></i> 社区教程项目
                            </a>
                            <a href="https://qm.qq.com/cgi-bin/qm/qr?authKey=aifKEcRSapH3pgCIIQ58qJmRs0QtiiNkeiMK3eldabfI0TJGYKje5YMgP%2FVjTFRY&k=YdLYzpkxXUwwlie6HJ1GjcnC0BgWN3es&noverify=0&group_code=749988690" target="_blank" class="btn btn-blue btn-no-margin">
                                <i class="fa fa-user-group"></i> 加入 QQ 群
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer">
            <div class="row-inner">
                &copy; 2020-<?=date("Y"); ?> <a href="https://www.lianmoe.cn">联萌社区</a> | <a href="https://mclo.gs/">mclo.gs</a>
            </div>
        </div>
        <script src="js/mclogs.js?v=130221"></script>
    </body>
</html>
