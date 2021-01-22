hexo-multilangがインストールされていることが前提のテーマです
それ以外の環境下ではまともに動かない可能性があります

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
---
```

拡張子をpugにすればpugも使用可能です