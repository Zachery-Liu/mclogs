<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="theme-color" content="#2d3943" />

        <title>联萌Log - 轻松粘贴、分享并自动分析您的 MC 日志</title>

        <base href="/" />

        <link rel="stylesheet" href="vendor/fonts/fonts.css" />
        <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css" />
        <link rel="stylesheet" href="css/btn.css" />
        <link rel="stylesheet" href="css/mclogs.css?v=071222" />

        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

        <meta name="description" content="轻松粘贴、分享并自动分析您的 MC 日志。">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <script>
            let _paq = window._paq = window._paq || [];
            _paq.push(['disableCookies']);
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function() {
                _paq.push(['setTrackerUrl', '/data']);
                _paq.push(['setSiteId', '5']);
                let d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
                g.async=true; g.src='/data.js'; s.parentNode.insertBefore(g,s);
            })();
        </script>
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
                    <a class="menu-item" href="/#plugin">
                        <i class="fa fa-database"></i> 插件
                    </a>
                    <a class="menu-item" href="/#mod">
                        <i class="fa fa-puzzle-piece"></i> Mod
                    </a>
                    <a class="menu-item" href="/#api">
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
                            在这粘贴您的日志内容 或 <span class="btn btn-small btn-no-margin" id="paste-select-file"><i class="fa fa-file-import"></i> 选择文件</span>
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
                        轻松地从任何来源粘贴您的Minecraft日志文件到这里。IP地址等关键信息会自动隐藏。
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
                            使用分享网址分享您的Minecraft日志并与他人一起寻找解决方案。
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
                            通过智能分析和语法高亮，自动在您的Minecraft日志中找到问题。
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row dark plugin" id="plugin">
            <div class="row-inner">
                <div class="article left">
                    <div class="article-icon">
                        <i class="fa fa-database"></i>
                    </div>
                    <div class="article-info">
                        <div class="article-title">
                            使用我们的插件
                        </div>
                        <div class="article-text">
                        有了我们的插件，您可以用一个简单的命令直接从您的服务器分享您的Minecraft日志。使用权限，与其他团队成员分享权力，共同解决问题。
                        它甚至可以导出旧的服务器日志文件，例如在崩溃之后。像IP地址这样的关键信息会自动隐藏起来，以确保安全和隐私。
                        （还未完成集成,此部分功能请使用 <a href="https://mclo.gs">mclo.gs</a>）
                        </div>
                        <div class="article-buttons">
                            <a href="https://modrinth.com/plugin/mclogs" target="_blank" class="btn btn-blue btn-no-margin">
                                <i class="fa fa-download"></i> modrinth.com
                            </a>
                            <a href="https://hangar.papermc.io/Aternos/mclogs" target="_blank" class="btn btn-blue btn-no-margin">
                                <i class="fa fa-download"></i> hangar.papermc.io
                            </a>
                            <a href="https://dev.bukkit.org/projects/mclogs" target="_blank" class="btn btn-blue btn-no-margin">
                                <i class="fa fa-download"></i> dev.bukkit.org
                            </a>
                            <a href="https://www.spigotmc.org/resources/mclo-gs.47502/" target="_blank" class="btn btn-blue btn-no-margin">
                                <i class="fa fa-download"></i> spigotmc.org
                            </a>
                            <a href="https://github.com/aternosorg/mclogs-bukkit" target="_blank" class="btn btn-blue btn-no-margin">
                                <i class="fab fa-github"></i> github.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mod" id="mod">
            <div class="row-inner">
                <div class="article right">
                    <div class="article-icon">
                        <i class="fa fa-puzzle-piece"></i>
                    </div>
                    <div class="article-info">
                        <div class="article-title">
                            使用我们的模组
                        </div>
                        <div class="article-text">
                        我们也有基于 Forge 和 Fabric 的mod，所以您可以用您最喜欢的 Mod API 来使用它。它是完全服务器端的并具有与该插件相同的功能。
                        （还未完成集成,此部分功能请使用 <a href="https://mclo.gs">mclo.gs</a>）
                        </div>
                        <div class="article-buttons">
                            <a href="https://modrinth.com/mod/mclogs" target="_blank" class="btn btn-blue btn-no-margin">
                                <i class="fa fa-download"></i> modrinth.com
                            </a>
                            <a href="https://www.curseforge.com/minecraft/mc-mods/mclo-gs" target="_blank" class="btn btn-blue btn-no-margin">
                                <i class="fa fa-download"></i> curseforge.com
                            </a>
                            <a href="https://github.com/aternosorg/mclogs-forge" target="_blank" class="btn btn-blue btn-no-margin">
                                <i class="fab fa-github"></i> Forge
                            </a>
                            <a href="https://github.com/aternosorg/mclogs-fabric" target="_blank" class="btn btn-blue btn-no-margin">
                                <i class="fab fa-github"></i> Fabric
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row dark api" id="api">
            <div class="row-inner">
                <div class="article left">
                    <div class="article-icon">
                        <i class="fa fa-code"></i>
                    </div>
                    <div class="article-info">
                        <div class="article-title">
                            使用我们的 API
                        </div>
                        <div class="article-text">
                            将<strong>API</strong>直接集成到您的服务器面板或其他软件中。这个平台是为高性能的自动化而建立的，可以轻松地将我们的HTTP API集成到任何现有的软件中。
                        </div>
                        <div class="article-buttons">
                            <a href="https://api.logs.lianmoe.cn/" class="btn btn-blue btn-no-margin">
                                <i class="fa fa-book"></i> API 文档
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer">
            <div class="row-inner">
            &copy; 2020-<?=date("Y"); ?> <a href="https://www.lianmoe.cn">联萌社区</a>
            </div>
        </div>
        <script src="js/mclogs.js?v=130221"></script>
    </body>
</html>
