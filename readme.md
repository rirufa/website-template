# Readme

多言語向けウェブサイトのテンプレートです
source/_data/resources.jsonに連絡先やメードアドレスなどの情報を格納し、source/enなどに各言語ごとの記事やページを格納しています

## 言語を追加したい場合
_config.ymlのlanguage: と/themes/singleline/languages、source/_data/resources.jsonに言語を追加する必要があります
例えば、中国語（中国）の場合、

_config.yml
```
language:[zh-CN]
```

/themes/singleline/languages/zh-CN.yml
```
index:
  title:dummy
archive:
  title:dummy
```

source/_data/resources.json

```
{
	"zh-CN": {
		// いろいろあるが省略
	}
}
```

みたいな感じに言語を追加します

## 記事の作り方
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

## 認証がないと見れないようにしたい
.htaccessの当該箇所をコメントアウトすることでGoogleのアカウントがないと見られないようにできます
本番環境ではGoogleのクライアントIDの設定が必要になります
PHP 8.1.6で動作確認済みです

## 著作権
画像はいらすとやを使用しています。それ以外はMITライセンスです
