# 記事の作り方
hexo new page [title]ではまともに作れません
手動で以下の感じになるように記事を作ってください

```
/[language]/[title]/index.md
```

index.mdは以下のようにしてください

```
---
layout: page
title: [title]
language: [laguage]
date: 2020-11-20 11:42:59
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
