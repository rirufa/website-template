# 記事の作り方
hexo new page [title]で作成後、index.mdは以下のようにしてください

```
---
layout: page
title: [title]
language: [laguage]
date: [date]
tags:
thumbnail: [url of image]
summary: [summary]
---
```

拡張子をpugにすればpugも使用可能です

# 認証がないと見れないようにしたい
.htaccessの当該箇所をコメントアウトすることでGoogleのアカウントがないと見られないようにできます
本番環境ではGoogleのクライアントIDの設定が必要になります
PHP 8.1.6で動作確認済みです

# 著作権
画像はいらすとやを使用しています。それ以外はMITライセンスです
