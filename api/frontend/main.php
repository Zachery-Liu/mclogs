<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="theme-color" content="#2d3943" />

        <link rel="stylesheet" href="//fonts.geekzu.org/css?family=Play:400,700">
        <link href="https://fonts.geekzu.org/css?family=Roboto+Mono:300,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet" />

        <title>API 文档 - 联萌日志服务</title>

        <base href="//<?=str_replace("api.", "", $_SERVER['HTTP_HOST']); ?>/" />

        <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/btn.css" />
        <link rel="stylesheet" href="css/mclogs.css" />

        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

        <meta name="description" content="轻松粘贴你的Minecraft日志以分享和分析它们。">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    </head>
    <body>
        <header class="row navigation">
            <div class="row-inner">
                <a href="/" class="logo">
                    <img src="img/logo.png" />
                </a>
                <div class="menu">
                    <a class="menu-social btn btn-black btn-notext btn-large btn-no-margin" href="https://github.com/Zachery-Liu/mclogs" target="_blank">
                        <i class="fa fa-github"></i>
                    </a>
                </div>
            </div>
        </header>
        <div class="row docs dark">
            <div class="row-inner">
                <div class="docs-text">
                    <h1 class="docs-title">API 文档</h1>
                    将<strong>本API</strong>直接集成到你的服务器面板或其他软件中。这个平台是为高性能的自动化而建立的，可以轻松地将我们的HTTP API集成到任何现有的软件中。
                </div>
                <div class="docs-icon">
                    <i class="fa fa-code"></i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row-inner">
                <h2>粘贴日志文件</h2>

                <div class="endpoint">
                    <span class="method">POST</span> <span class="endpoint-url">https://api.logs.lianmoe.cn/1/log</span> <span class="content-type">application/x-www-form-urlencoded</span>
                </div>
                <table class="endpoint-table">
                    <tr>
                        <th>字段</th>
                        <th>类型</th>
                        <th>描述</th>
                    </tr>
                    <tr>
                        <td class="endpoint-field">content</td>
                        <td class="endpoint-type">string</td>
                        <td class="endpoint-description">以字符串形式输出日志raw，最大为10MB或25k行，如果必要将会被缩短。</td>
                    </tr>
                </table>

                <h3>Success <span class="content-type">application/json</span></h3>
                <pre class="answer">
{
    "success": true,
    "id": "8FlTowW",
    "url": "https://logs.lianmoe.cn/8FlTowW",
    "raw": "https://api.logs.lianmoe.cn/1/raw/8FlTowW"
}</pre>
                <h3>Error <span class="content-type">application/json</span></h3>
                <pre class="answer">
{
    "success": false,
    "error": "Required POST argument 'content' is empty."
}</pre>
            </div>
        </div>
        <div class="row">
            <div class="row-inner">
                <h2>获取日志文件内容</h2>
                <div class="endpoint">
                    <span class="method">GET</span> <span class="endpoint-url">https://api.logs.lianmoe.cn/1/raw/[id]</span>
                </div>
                <table class="endpoint-table">
                    <tr>
                        <th>字段</th>
                        <th>类型</th>
                        <th>描述</th>
                    </tr>
                    <tr>
                        <td class="endpoint-field">[id]</td>
                        <td class="endpoint-type">string</td>
                        <td class="endpoint-description">日志文件的 id , 从 URl 中可获取 (https://logs.lianmoe.cn/[id])。</td>
                    </tr>
                </table>

                <h3>Success <span class="content-type">text/plain</span></h3>
                <pre class="answer">
[18:25:33] [Server thread/INFO]: Starting minecraft server version 1.16.2
[18:25:33] [Server thread/INFO]: Loading properties
[18:25:34] [Server thread/INFO]: Default game type: SURVIVAL
...
</pre>
                <h3>Error <span class="content-type">application/json</span></h3>
                <pre class="answer">
{
    "success": false,
    "error": "Log not found."
}</pre>
            </div>
        </div>
        <div class="row">
            <div class="row-inner">
                <h2>获取日志分析</h2>

                <div class="endpoint">
                    <span class="method">GET</span> <span class="endpoint-url">https://api.logs.lianmoe.cn/1/insights/[id]</span>
                </div>
                <table class="endpoint-table">
                    <tr>
                        <th>字段</th>
                        <th>类型</th>
                        <th>描述</th>
                    </tr>
                    <tr>
                        <td class="endpoint-field">[id]</td>
                        <td class="endpoint-type">string</td>
                        <td class="endpoint-description">日志文件的 id , 从 URl 中可获取 (https://logs.lianmoe.cn/[id])。</td>
                    </tr>
                </table>

                <h3>Success <span class="content-type">application/json</span></h3>
                <pre class="answer">
{
  "id": "name/type",
  "name": "Software name, e.g. Vanilla",
  "type": "Type name, e.g. Server Log",
  "version": "Version, e.g. 1.12.2",
  "title": "Combined title, e.g. Vanilla 1.12.2 Server Log",
  "analysis": {
    "problems": [
      {
        "message": "A message explaining the problem.",
        "counter": 1,
        "entry": {
          "level": 6,
          "time": null,
          "prefix": "The prefix of this entry, usually the part containing time and loglevel.",
          "lines": [
            {
              "number": 1,
              "content": "The full content of the line."
            }
          ]
        },
        "solutions": [
          {
            "message": "A message explaining a possible solution."
          }
        ]
      }
    ],
    "information": [
      {
        "message": "Label: value",
        "counter": 1,
        "label": "The label of this information, e.g. Minecraft version",
        "value": "The value of this information, e.g. 1.12.2",
        "entry": {
          "level": 6,
          "time": null,
          "prefix": "The prefix of this entry, usually the part containing time and loglevel.",
          "lines": [
            {
              "number": 6,
              "content": "The full content of the line."
            }
          ]
        }
      }
    ]
  }
}</pre>
                <h3>Error <span class="content-type">application/json</span></h3>
                <pre class="answer">
{
    "success": false,
    "error": "Log not found."
}</pre>
            </div>
        </div>
        <div class="row dark api-notes docs">
            <div class="row-inner">
                <div class="docs-text">
                    <h2>注意</h2>
                    目前，API的速率限制为每个IP地址每分钟60个请求。这样是为了确保该服务的可操作性。如果你有任何问题，请随时联系我们。
                    <div class="notes-buttons">
                        <a class="btn btn-small btn-no-margin btn-blue" href="mailto:lianmoe@outlook.com">
                            <i class="fa fa-envelope"></i> 通过电子邮件联系
                        </a>
                        <a class="btn btn-small btn-no-margin btn-blue" target="_blank" href="https://qm.qq.com/cgi-bin/qm/qr?authKey=aifKEcRSapH3pgCIIQ58qJmRs0QtiiNkeiMK3eldabfI0TJGYKje5YMgP%2FVjTFRY&k=YdLYzpkxXUwwlie6HJ1GjcnC0BgWN3es&noverify=0&group_code=749988690">
                            <i class="fa fa-qq"></i> 加入QQ群
                        </a>
                    </div>
                </div>
                <div class="docs-icon">
                    <i class="fa fa-sticky-note"></i>
                </div>
            </div>
        </div>
        <div class="row footer">
            <div class="row-inner">
                &copy; 2020-<?=date("Y"); ?> <a href="https://www.lianmoe.cn">联萌社区</a> | <a href="https://mclo.gs">mclo.gs</a>
            </div>
        </div>
    </body>
</html>
