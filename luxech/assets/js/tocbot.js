tocbot.init({
  tocSelector: '.js-toc', //目次を表示させるセレクター
  contentSelector: '.p-services__main__contents', //文章が記載されている箇所
  headingSelector: 'h2, h3', //目次となる見出しタグ
  headingsOffset: 100,
  scrollSmoothOffset: -100,
  ignoreSelector: '.js-toc-ignore',
  disableTocScrollSync: true,
  collapseDepth: 6
});
