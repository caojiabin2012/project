/* automatically generated by JSCoverage - do not edit */
try {
  if (typeof top === 'object' && top !== null && typeof top.opener === 'object' && top.opener !== null) {
    // this is a browser window that was opened from another window

    if (! top.opener._$jscoverage) {
      top.opener._$jscoverage = {};
    }
  }
}
catch (e) {}

try {
  if (typeof top === 'object' && top !== null) {
    // this is a browser window

    try {
      if (typeof top.opener === 'object' && top.opener !== null && top.opener._$jscoverage) {
        top._$jscoverage = top.opener._$jscoverage;
      }
    }
    catch (e) {}

    if (! top._$jscoverage) {
      top._$jscoverage = {};
    }
  }
}
catch (e) {}

try {
  if (typeof top === 'object' && top !== null && top._$jscoverage) {
    _$jscoverage = top._$jscoverage;
  }
}
catch (e) {}
if (typeof _$jscoverage !== 'object') {
  _$jscoverage = {};
}
if (! _$jscoverage['plugins/catchremoteimage.js']) {
  _$jscoverage['plugins/catchremoteimage.js'] = [];
  _$jscoverage['plugins/catchremoteimage.js'][9] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][10] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][11] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][13] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][14] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][20] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][24] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][25] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][26] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][31] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][32] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][35] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][36] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][39] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][40] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][41] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][42] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][43] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][44] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][45] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][48] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][50] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][51] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][52] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][54] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][55] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][56] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][59] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][60] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][63] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][64] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][66] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][68] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][70] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][71] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][72] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][73] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][74] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][76] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][77] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][81] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][85] = 0;
  _$jscoverage['plugins/catchremoteimage.js'][89] = 0;
}
_$jscoverage['plugins/catchremoteimage.js'].source = ["<span class=\"c\">///import core</span>","<span class=\"c\">///commands &#36828;&#31243;&#22270;&#29255;&#25235;&#21462;</span>","<span class=\"c\">///commandsName  catchRemoteImage,catchremoteimageenable</span>","<span class=\"c\">///commandsTitle  &#36828;&#31243;&#22270;&#29255;&#25235;&#21462;</span>","<span class=\"c\">/*</span>","<span class=\"c\"> * &#36828;&#31243;&#22270;&#29255;&#25235;&#21462;,&#24403;&#24320;&#21551;&#26412;&#25554;&#20214;&#26102;&#25152;&#26377;&#19981;&#31526;&#21512;&#26412;&#22320;&#22495;&#21517;&#30340;&#22270;&#29255;&#37117;&#23558;&#34987;&#25235;&#21462;&#25104;&#20026;&#26412;&#22320;&#26381;&#21153;&#22120;&#19978;&#30340;&#22270;&#29255;</span>","<span class=\"c\"> *</span>","<span class=\"c\"> */</span>","UE<span class=\"k\">.</span>plugins<span class=\"k\">[</span><span class=\"s\">'catchremoteimage'</span><span class=\"k\">]</span> <span class=\"k\">=</span> <span class=\"k\">function</span> <span class=\"k\">()</span> <span class=\"k\">{</span>","    <span class=\"k\">if</span> <span class=\"k\">(</span><span class=\"k\">this</span><span class=\"k\">.</span>options<span class=\"k\">.</span>catchRemoteImageEnable<span class=\"k\">===</span><span class=\"k\">false</span><span class=\"k\">)</span><span class=\"k\">{</span>","        <span class=\"k\">return</span><span class=\"k\">;</span>","    <span class=\"k\">}</span>","    <span class=\"k\">var</span> me <span class=\"k\">=</span> <span class=\"k\">this</span><span class=\"k\">;</span>","    <span class=\"k\">this</span><span class=\"k\">.</span>setOpt<span class=\"k\">(</span><span class=\"k\">{</span>","        localDomain<span class=\"k\">:[</span><span class=\"s\">\"127.0.0.1\"</span><span class=\"k\">,</span><span class=\"s\">\"localhost\"</span><span class=\"k\">,</span><span class=\"s\">\"img.baidu.com\"</span><span class=\"k\">],</span>","        separater<span class=\"k\">:</span><span class=\"s\">'ue_separate_ue'</span><span class=\"k\">,</span>","        catchFieldName<span class=\"k\">:</span><span class=\"s\">\"upfile\"</span><span class=\"k\">,</span>","        catchRemoteImageEnable<span class=\"k\">:</span><span class=\"k\">true</span>","    <span class=\"k\">}</span><span class=\"k\">);</span>","    <span class=\"k\">var</span> ajax <span class=\"k\">=</span> UE<span class=\"k\">.</span>ajax<span class=\"k\">,</span>","        localDomain <span class=\"k\">=</span> me<span class=\"k\">.</span>options<span class=\"k\">.</span>localDomain <span class=\"k\">,</span>","        catcherUrl <span class=\"k\">=</span> me<span class=\"k\">.</span>options<span class=\"k\">.</span>catcherUrl<span class=\"k\">,</span>","        separater <span class=\"k\">=</span> me<span class=\"k\">.</span>options<span class=\"k\">.</span>separater<span class=\"k\">;</span>","    <span class=\"k\">function</span> catchremoteimage<span class=\"k\">(</span>imgs<span class=\"k\">,</span> callbacks<span class=\"k\">)</span> <span class=\"k\">{</span>","        <span class=\"k\">var</span> submitStr <span class=\"k\">=</span> imgs<span class=\"k\">.</span>join<span class=\"k\">(</span>separater<span class=\"k\">);</span>","        <span class=\"k\">var</span> tmpOption <span class=\"k\">=</span> <span class=\"k\">{</span>","            timeout<span class=\"k\">:</span><span class=\"s\">60000</span><span class=\"k\">,</span> <span class=\"c\">//&#21333;&#20301;&#65306;&#27627;&#31186;&#65292;&#22238;&#35843;&#35831;&#27714;&#36229;&#26102;&#35774;&#32622;&#12290;&#30446;&#26631;&#29992;&#25143;&#22914;&#26524;&#32593;&#36895;&#19981;&#26159;&#24456;&#24555;&#30340;&#35805;&#27492;&#22788;&#24314;&#35758;&#35774;&#32622;&#19968;&#20010;&#36739;&#22823;&#30340;&#25968;&#20540;</span>","            onsuccess<span class=\"k\">:</span>callbacks<span class=\"k\">[</span><span class=\"s\">\"success\"</span><span class=\"k\">],</span>","            onerror<span class=\"k\">:</span>callbacks<span class=\"k\">[</span><span class=\"s\">\"error\"</span><span class=\"k\">]</span>","        <span class=\"k\">}</span><span class=\"k\">;</span>","        tmpOption<span class=\"k\">[</span>me<span class=\"k\">.</span>options<span class=\"k\">.</span>catchFieldName<span class=\"k\">]</span> <span class=\"k\">=</span> submitStr<span class=\"k\">;</span>","        ajax<span class=\"k\">.</span>request<span class=\"k\">(</span>catcherUrl<span class=\"k\">,</span> tmpOption<span class=\"k\">);</span>","    <span class=\"k\">}</span>","","    me<span class=\"k\">.</span>addListener<span class=\"k\">(</span><span class=\"s\">\"afterpaste\"</span><span class=\"k\">,</span> <span class=\"k\">function</span> <span class=\"k\">()</span> <span class=\"k\">{</span>","        me<span class=\"k\">.</span>fireEvent<span class=\"k\">(</span><span class=\"s\">\"catchRemoteImage\"</span><span class=\"k\">);</span>","    <span class=\"k\">}</span><span class=\"k\">);</span>","","    me<span class=\"k\">.</span>addListener<span class=\"k\">(</span><span class=\"s\">\"catchRemoteImage\"</span><span class=\"k\">,</span> <span class=\"k\">function</span> <span class=\"k\">()</span> <span class=\"k\">{</span>","        <span class=\"k\">var</span> remoteImages <span class=\"k\">=</span> <span class=\"k\">[];</span>","        <span class=\"k\">var</span> imgs <span class=\"k\">=</span> domUtils<span class=\"k\">.</span>getElementsByTagName<span class=\"k\">(</span>me<span class=\"k\">.</span>document<span class=\"k\">,</span> <span class=\"s\">\"img\"</span><span class=\"k\">);</span>","        <span class=\"k\">var</span> test <span class=\"k\">=</span> <span class=\"k\">function</span> <span class=\"k\">(</span>src<span class=\"k\">,</span>urls<span class=\"k\">)</span> <span class=\"k\">{</span>","            <span class=\"k\">for</span> <span class=\"k\">(</span><span class=\"k\">var</span> j <span class=\"k\">=</span> <span class=\"s\">0</span><span class=\"k\">,</span> url<span class=\"k\">;</span> url <span class=\"k\">=</span> urls<span class=\"k\">[</span>j<span class=\"k\">++];)</span> <span class=\"k\">{</span>","                <span class=\"k\">if</span> <span class=\"k\">(</span>src<span class=\"k\">.</span>indexOf<span class=\"k\">(</span>url<span class=\"k\">)</span> <span class=\"k\">!==</span> <span class=\"k\">-</span><span class=\"s\">1</span><span class=\"k\">)</span> <span class=\"k\">{</span>","                    <span class=\"k\">return</span> <span class=\"k\">true</span><span class=\"k\">;</span>","                <span class=\"k\">}</span>","            <span class=\"k\">}</span>","            <span class=\"k\">return</span> <span class=\"k\">false</span><span class=\"k\">;</span>","        <span class=\"k\">}</span><span class=\"k\">;</span>","        <span class=\"k\">for</span> <span class=\"k\">(</span><span class=\"k\">var</span> i <span class=\"k\">=</span> <span class=\"s\">0</span><span class=\"k\">,</span> ci<span class=\"k\">;</span> ci <span class=\"k\">=</span> imgs<span class=\"k\">[</span>i<span class=\"k\">++];)</span> <span class=\"k\">{</span>","            <span class=\"k\">if</span> <span class=\"k\">(</span>ci<span class=\"k\">.</span>getAttribute<span class=\"k\">(</span><span class=\"s\">\"word_img\"</span><span class=\"k\">))</span><span class=\"k\">{</span>","                <span class=\"k\">continue</span><span class=\"k\">;</span>","            <span class=\"k\">}</span>","            <span class=\"k\">var</span> src <span class=\"k\">=</span> ci<span class=\"k\">.</span>getAttribute<span class=\"k\">(</span><span class=\"s\">\"_src\"</span><span class=\"k\">)</span> <span class=\"k\">||</span> ci<span class=\"k\">.</span>src <span class=\"k\">||</span> <span class=\"s\">\"\"</span><span class=\"k\">;</span>","            <span class=\"k\">if</span> <span class=\"k\">(</span><span class=\"s\">/^(https?|ftp):/i</span><span class=\"k\">.</span>test<span class=\"k\">(</span>src<span class=\"k\">)</span> <span class=\"k\">&amp;&amp;</span> <span class=\"k\">!</span>test<span class=\"k\">(</span>src<span class=\"k\">,</span>localDomain<span class=\"k\">))</span> <span class=\"k\">{</span>","                remoteImages<span class=\"k\">.</span>push<span class=\"k\">(</span>src<span class=\"k\">);</span>","            <span class=\"k\">}</span>","        <span class=\"k\">}</span>","        <span class=\"k\">if</span> <span class=\"k\">(</span>remoteImages<span class=\"k\">.</span>length<span class=\"k\">)</span> <span class=\"k\">{</span>","            catchremoteimage<span class=\"k\">(</span>remoteImages<span class=\"k\">,</span> <span class=\"k\">{</span>","                <span class=\"c\">//&#25104;&#21151;&#25235;&#21462;</span>","                success<span class=\"k\">:</span><span class=\"k\">function</span> <span class=\"k\">(</span>xhr<span class=\"k\">)</span> <span class=\"k\">{</span>","                    <span class=\"k\">try</span> <span class=\"k\">{</span>","                        <span class=\"k\">var</span> info <span class=\"k\">=</span> eval<span class=\"k\">(</span><span class=\"s\">\"(\"</span> <span class=\"k\">+</span> xhr<span class=\"k\">.</span>responseText <span class=\"k\">+</span> <span class=\"s\">\")\"</span><span class=\"k\">);</span>","                    <span class=\"k\">}</span> <span class=\"k\">catch</span> <span class=\"k\">(</span>e<span class=\"k\">)</span> <span class=\"k\">{</span>","                        <span class=\"k\">return</span><span class=\"k\">;</span>","                    <span class=\"k\">}</span>","                    <span class=\"k\">var</span> srcUrls <span class=\"k\">=</span> info<span class=\"k\">.</span>srcUrl<span class=\"k\">.</span>split<span class=\"k\">(</span>separater<span class=\"k\">),</span>","                        urls <span class=\"k\">=</span> info<span class=\"k\">.</span>url<span class=\"k\">.</span>split<span class=\"k\">(</span>separater<span class=\"k\">);</span>","                    <span class=\"k\">for</span> <span class=\"k\">(</span><span class=\"k\">var</span> i <span class=\"k\">=</span> <span class=\"s\">0</span><span class=\"k\">,</span> ci<span class=\"k\">;</span> ci <span class=\"k\">=</span> imgs<span class=\"k\">[</span>i<span class=\"k\">++];)</span> <span class=\"k\">{</span>","                        <span class=\"k\">var</span> src <span class=\"k\">=</span> ci<span class=\"k\">.</span>getAttribute<span class=\"k\">(</span><span class=\"s\">\"_src\"</span><span class=\"k\">)</span> <span class=\"k\">||</span> ci<span class=\"k\">.</span>src <span class=\"k\">||</span> <span class=\"s\">\"\"</span><span class=\"k\">;</span>","                        <span class=\"k\">for</span> <span class=\"k\">(</span><span class=\"k\">var</span> j <span class=\"k\">=</span> <span class=\"s\">0</span><span class=\"k\">,</span> cj<span class=\"k\">;</span> cj <span class=\"k\">=</span> srcUrls<span class=\"k\">[</span>j<span class=\"k\">++];)</span> <span class=\"k\">{</span>","                            <span class=\"k\">var</span> url <span class=\"k\">=</span> urls<span class=\"k\">[</span>j <span class=\"k\">-</span> <span class=\"s\">1</span><span class=\"k\">];</span>","                            <span class=\"k\">if</span> <span class=\"k\">(</span>src <span class=\"k\">==</span> cj <span class=\"k\">&amp;&amp;</span> url <span class=\"k\">!=</span> <span class=\"s\">\"error\"</span><span class=\"k\">)</span> <span class=\"k\">{</span>  <span class=\"c\">//&#25235;&#21462;&#22833;&#36133;&#26102;&#19981;&#20570;&#26367;&#25442;&#22788;&#29702;</span>","                                <span class=\"c\">//&#22320;&#22336;&#20462;&#27491;</span>","                                <span class=\"k\">var</span> newSrc <span class=\"k\">=</span> me<span class=\"k\">.</span>options<span class=\"k\">.</span>catcherPath <span class=\"k\">+</span> url<span class=\"k\">;</span>","                                domUtils<span class=\"k\">.</span>setAttributes<span class=\"k\">(</span>ci<span class=\"k\">,</span> <span class=\"k\">{</span>","                                    <span class=\"s\">\"src\"</span><span class=\"k\">:</span>newSrc<span class=\"k\">,</span>","                                    <span class=\"s\">\"_src\"</span><span class=\"k\">:</span>newSrc","                                <span class=\"k\">}</span><span class=\"k\">);</span>","                                <span class=\"k\">break</span><span class=\"k\">;</span>","                            <span class=\"k\">}</span>","                        <span class=\"k\">}</span>","                    <span class=\"k\">}</span>","                    me<span class=\"k\">.</span>fireEvent<span class=\"k\">(</span><span class=\"s\">'catchremotesuccess'</span><span class=\"k\">)</span>","                <span class=\"k\">}</span><span class=\"k\">,</span>","                <span class=\"c\">//&#22238;&#35843;&#22833;&#36133;&#65292;&#26412;&#27425;&#35831;&#27714;&#36229;&#26102;</span>","                error<span class=\"k\">:</span><span class=\"k\">function</span> <span class=\"k\">()</span> <span class=\"k\">{</span>","                    me<span class=\"k\">.</span>fireEvent<span class=\"k\">(</span><span class=\"s\">\"catchremoteerror\"</span><span class=\"k\">);</span>","                <span class=\"k\">}</span>","            <span class=\"k\">}</span><span class=\"k\">);</span>","        <span class=\"k\">}</span>","","    <span class=\"k\">}</span><span class=\"k\">);</span>","<span class=\"k\">}</span><span class=\"k\">;</span>"];
_$jscoverage['plugins/catchremoteimage.js'][9]++;
UE.plugins.catchremoteimage = (function () {
  _$jscoverage['plugins/catchremoteimage.js'][10]++;
  if ((this.options.catchRemoteImageEnable === false)) {
    _$jscoverage['plugins/catchremoteimage.js'][11]++;
    return;
  }
  _$jscoverage['plugins/catchremoteimage.js'][13]++;
  var me = this;
  _$jscoverage['plugins/catchremoteimage.js'][14]++;
  this.setOpt({localDomain: ["127.0.0.1", "localhost", "img.baidu.com"], separater: "ue_separate_ue", catchFieldName: "upfile", catchRemoteImageEnable: true});
  _$jscoverage['plugins/catchremoteimage.js'][20]++;
  var ajax = UE.ajax, localDomain = me.options.localDomain, catcherUrl = me.options.catcherUrl, separater = me.options.separater;
  _$jscoverage['plugins/catchremoteimage.js'][24]++;
  function catchremoteimage(imgs, callbacks) {
    _$jscoverage['plugins/catchremoteimage.js'][25]++;
    var submitStr = imgs.join(separater);
    _$jscoverage['plugins/catchremoteimage.js'][26]++;
    var tmpOption = {timeout: 60000, onsuccess: callbacks.success, onerror: callbacks.error};
    _$jscoverage['plugins/catchremoteimage.js'][31]++;
    tmpOption[me.options.catchFieldName] = submitStr;
    _$jscoverage['plugins/catchremoteimage.js'][32]++;
    ajax.request(catcherUrl, tmpOption);
}
  _$jscoverage['plugins/catchremoteimage.js'][35]++;
  me.addListener("afterpaste", (function () {
  _$jscoverage['plugins/catchremoteimage.js'][36]++;
  me.fireEvent("catchRemoteImage");
}));
  _$jscoverage['plugins/catchremoteimage.js'][39]++;
  me.addListener("catchRemoteImage", (function () {
  _$jscoverage['plugins/catchremoteimage.js'][40]++;
  var remoteImages = [];
  _$jscoverage['plugins/catchremoteimage.js'][41]++;
  var imgs = domUtils.getElementsByTagName(me.document, "img");
  _$jscoverage['plugins/catchremoteimage.js'][42]++;
  var test = (function (src, urls) {
  _$jscoverage['plugins/catchremoteimage.js'][43]++;
  for (var j = 0, url; (url = urls[(j++)]);) {
    _$jscoverage['plugins/catchremoteimage.js'][44]++;
    if ((src.indexOf(url) !== -1)) {
      _$jscoverage['plugins/catchremoteimage.js'][45]++;
      return true;
    }
}
  _$jscoverage['plugins/catchremoteimage.js'][48]++;
  return false;
});
  _$jscoverage['plugins/catchremoteimage.js'][50]++;
  for (var i = 0, ci; (ci = imgs[(i++)]);) {
    _$jscoverage['plugins/catchremoteimage.js'][51]++;
    if (ci.getAttribute("word_img")) {
      _$jscoverage['plugins/catchremoteimage.js'][52]++;
      continue;
    }
    _$jscoverage['plugins/catchremoteimage.js'][54]++;
    var src = (ci.getAttribute("_src") || ci.src || "");
    _$jscoverage['plugins/catchremoteimage.js'][55]++;
    if ((/^(https?|ftp):/i.test(src) && (! test(src, localDomain)))) {
      _$jscoverage['plugins/catchremoteimage.js'][56]++;
      remoteImages.push(src);
    }
}
  _$jscoverage['plugins/catchremoteimage.js'][59]++;
  if (remoteImages.length) {
    _$jscoverage['plugins/catchremoteimage.js'][60]++;
    catchremoteimage(remoteImages, {success: (function (xhr) {
  _$jscoverage['plugins/catchremoteimage.js'][63]++;
  try {
    _$jscoverage['plugins/catchremoteimage.js'][64]++;
    var info = eval(("(" + xhr.responseText + ")"));
  }
  catch (e) {
    _$jscoverage['plugins/catchremoteimage.js'][66]++;
    return;
  }
  _$jscoverage['plugins/catchremoteimage.js'][68]++;
  var srcUrls = info.srcUrl.split(separater), urls = info.url.split(separater);
  _$jscoverage['plugins/catchremoteimage.js'][70]++;
  for (var i = 0, ci; (ci = imgs[(i++)]);) {
    _$jscoverage['plugins/catchremoteimage.js'][71]++;
    var src = (ci.getAttribute("_src") || ci.src || "");
    _$jscoverage['plugins/catchremoteimage.js'][72]++;
    for (var j = 0, cj; (cj = srcUrls[(j++)]);) {
      _$jscoverage['plugins/catchremoteimage.js'][73]++;
      var url = urls[(j - 1)];
      _$jscoverage['plugins/catchremoteimage.js'][74]++;
      if (((src == cj) && (url != "error"))) {
        _$jscoverage['plugins/catchremoteimage.js'][76]++;
        var newSrc = (me.options.catcherPath + url);
        _$jscoverage['plugins/catchremoteimage.js'][77]++;
        domUtils.setAttributes(ci, {"src": newSrc, "_src": newSrc});
        _$jscoverage['plugins/catchremoteimage.js'][81]++;
        break;
      }
}
}
  _$jscoverage['plugins/catchremoteimage.js'][85]++;
  me.fireEvent("catchremotesuccess");
}), error: (function () {
  _$jscoverage['plugins/catchremoteimage.js'][89]++;
  me.fireEvent("catchremoteerror");
})});
  }
}));
});
