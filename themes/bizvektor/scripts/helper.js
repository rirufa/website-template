hexo.extend.helper.register('get_resouce', function() {
  let lang = (this.page.lang || this.page.language);
  return this.site.data.resources[lang];
});

hexo.extend.helper.register('get_current_lang', function (item) {
  //一番最初は言語タグ
  return item.path.split('/')[0];
});

hexo.extend.helper.register('get_langs', function (item) {
  return this.config.language.filter(function(item){
    return item != "default";
  })
});

hexo.extend.helper.register('get_pages', function () {
  const self = this;
  //現在表示中のページの言語
  const lang = self.get_current_lang(this.page);

  return this.site.pages.filter(function(item){
    return self.get_current_lang(item) == lang && item.layout != "index";
  });
});
