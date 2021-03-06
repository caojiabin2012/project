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
if (! _$jscoverage['plugins/anchor.js']) {
  _$jscoverage['plugins/anchor.js'] = [];
  _$jscoverage['plugins/anchor.js'][7] = 0;
  _$jscoverage['plugins/anchor.js'][8] = 0;
  _$jscoverage['plugins/anchor.js'][10] = 0;
  _$jscoverage['plugins/anchor.js'][11] = 0;
  _$jscoverage['plugins/anchor.js'][17] = 0;
  _$jscoverage['plugins/anchor.js'][18] = 0;
  _$jscoverage['plugins/anchor.js'][19] = 0;
  _$jscoverage['plugins/anchor.js'][20] = 0;
  _$jscoverage['plugins/anchor.js'][21] = 0;
  _$jscoverage['plugins/anchor.js'][22] = 0;
  _$jscoverage['plugins/anchor.js'][30] = 0;
  _$jscoverage['plugins/anchor.js'][31] = 0;
  _$jscoverage['plugins/anchor.js'][32] = 0;
  _$jscoverage['plugins/anchor.js'][33] = 0;
  _$jscoverage['plugins/anchor.js'][34] = 0;
  _$jscoverage['plugins/anchor.js'][35] = 0;
  _$jscoverage['plugins/anchor.js'][39] = 0;
  _$jscoverage['plugins/anchor.js'][57] = 0;
  _$jscoverage['plugins/anchor.js'][59] = 0;
  _$jscoverage['plugins/anchor.js'][60] = 0;
  _$jscoverage['plugins/anchor.js'][61] = 0;
  _$jscoverage['plugins/anchor.js'][62] = 0;
  _$jscoverage['plugins/anchor.js'][64] = 0;
  _$jscoverage['plugins/anchor.js'][65] = 0;
  _$jscoverage['plugins/anchor.js'][68] = 0;
  _$jscoverage['plugins/anchor.js'][70] = 0;
  _$jscoverage['plugins/anchor.js'][71] = 0;
  _$jscoverage['plugins/anchor.js'][72] = 0;
  _$jscoverage['plugins/anchor.js'][76] = 0;
}
_$jscoverage['plugins/anchor.js'].source = ["<span class=\"c\">/**</span>","<span class=\"c\"> * &#38170;&#28857;&#25554;&#20214;&#65292;&#20026;UEditor&#25552;&#20379;&#25554;&#20837;&#38170;&#28857;&#25903;&#25345;</span>","<span class=\"c\"> * @file</span>","<span class=\"c\"> * @since 1.2.6.1</span>","<span class=\"c\"> */</span>","","UE<span class=\"k\">.</span>plugins<span class=\"k\">[</span><span class=\"s\">'anchor'</span><span class=\"k\">]</span> <span class=\"k\">=</span> <span class=\"k\">function</span> <span class=\"k\">()</span><span class=\"k\">{</span>","    <span class=\"k\">var</span> me <span class=\"k\">=</span> <span class=\"k\">this</span><span class=\"k\">;</span>","","    me<span class=\"k\">.</span>ready<span class=\"k\">(</span><span class=\"k\">function</span><span class=\"k\">()</span><span class=\"k\">{</span>","        utils<span class=\"k\">.</span>cssRule<span class=\"k\">(</span><span class=\"s\">'anchor'</span><span class=\"k\">,</span>","            <span class=\"s\">'.anchorclass{background: url(</span><span class=\"t\">\\'</span><span class=\"s\">'</span>","                <span class=\"k\">+</span> me<span class=\"k\">.</span>options<span class=\"k\">.</span>UEDITOR_HOME_URL <span class=\"k\">+</span>","                <span class=\"s\">'themes/default/images/anchor.gif</span><span class=\"t\">\\'</span><span class=\"s\">) no-repeat scroll left center transparent;border: 1px dotted #0000FF;cursor: auto;display: inline-block;height: 16px;width: 15px;}'</span><span class=\"k\">,</span>","            me<span class=\"k\">.</span>document<span class=\"k\">)</span>","    <span class=\"k\">}</span><span class=\"k\">);</span>","    me<span class=\"k\">.</span>addOutputRule<span class=\"k\">(</span><span class=\"k\">function</span><span class=\"k\">(</span>root<span class=\"k\">)</span><span class=\"k\">{</span>","        utils<span class=\"k\">.</span>each<span class=\"k\">(</span>root<span class=\"k\">.</span>getNodesByTagName<span class=\"k\">(</span><span class=\"s\">'img'</span><span class=\"k\">),</span><span class=\"k\">function</span><span class=\"k\">(</span>a<span class=\"k\">)</span><span class=\"k\">{</span>","            <span class=\"k\">var</span> val<span class=\"k\">;</span>","            <span class=\"k\">if</span><span class=\"k\">(</span>val <span class=\"k\">=</span> a<span class=\"k\">.</span>getAttr<span class=\"k\">(</span><span class=\"s\">'anchorname'</span><span class=\"k\">))</span><span class=\"k\">{</span>","                a<span class=\"k\">.</span>tagName <span class=\"k\">=</span> <span class=\"s\">'a'</span><span class=\"k\">;</span>","                a<span class=\"k\">.</span>setAttr<span class=\"k\">(</span><span class=\"k\">{</span>","                    anchorname <span class=\"k\">:</span> <span class=\"s\">''</span><span class=\"k\">,</span>","                    name <span class=\"k\">:</span> val<span class=\"k\">,</span>","                    <span class=\"s\">'class'</span> <span class=\"k\">:</span> <span class=\"s\">''</span>","                <span class=\"k\">}</span><span class=\"k\">)</span>","            <span class=\"k\">}</span>","        <span class=\"k\">}</span><span class=\"k\">)</span>","    <span class=\"k\">}</span><span class=\"k\">);</span>","    me<span class=\"k\">.</span>addInputRule<span class=\"k\">(</span><span class=\"k\">function</span><span class=\"k\">(</span>root<span class=\"k\">)</span><span class=\"k\">{</span>","        utils<span class=\"k\">.</span>each<span class=\"k\">(</span>root<span class=\"k\">.</span>getNodesByTagName<span class=\"k\">(</span><span class=\"s\">'a'</span><span class=\"k\">),</span><span class=\"k\">function</span><span class=\"k\">(</span>a<span class=\"k\">)</span><span class=\"k\">{</span>","            <span class=\"k\">var</span> val<span class=\"k\">;</span>","            <span class=\"k\">if</span><span class=\"k\">((</span>val <span class=\"k\">=</span> a<span class=\"k\">.</span>getAttr<span class=\"k\">(</span><span class=\"s\">'name'</span><span class=\"k\">))</span> <span class=\"k\">&amp;&amp;</span> <span class=\"k\">!</span>a<span class=\"k\">.</span>getAttr<span class=\"k\">(</span><span class=\"s\">'href'</span><span class=\"k\">))</span><span class=\"k\">{</span>","                a<span class=\"k\">.</span>tagName <span class=\"k\">=</span> <span class=\"s\">'img'</span><span class=\"k\">;</span>","                a<span class=\"k\">.</span>setAttr<span class=\"k\">(</span><span class=\"k\">{</span>","                    anchorname <span class=\"k\">:</span>a<span class=\"k\">.</span>getAttr<span class=\"k\">(</span><span class=\"s\">'name'</span><span class=\"k\">),</span>","                    <span class=\"s\">'class'</span> <span class=\"k\">:</span> <span class=\"s\">'anchorclass'</span>","                <span class=\"k\">}</span><span class=\"k\">);</span>","                a<span class=\"k\">.</span>setAttr<span class=\"k\">(</span><span class=\"s\">'name'</span><span class=\"k\">)</span>","","            <span class=\"k\">}</span>","        <span class=\"k\">}</span><span class=\"k\">)</span>","    <span class=\"k\">}</span><span class=\"k\">);</span>","","    <span class=\"c\">/**</span>","<span class=\"c\">     * &#25554;&#20837;&#38170;&#28857;</span>","<span class=\"c\">     * @command anchor</span>","<span class=\"c\">     * @method execCommand</span>","<span class=\"c\">     * @param { String } cmd &#21629;&#20196;&#23383;&#31526;&#20018;</span>","<span class=\"c\">     * @param { String } name &#38170;&#28857;&#21517;&#31216;&#23383;&#31526;&#20018;</span>","<span class=\"c\">     * @example</span>","<span class=\"c\">     * ```javascript</span>","<span class=\"c\">     * //editor &#26159;&#32534;&#36753;&#22120;&#23454;&#20363;</span>","<span class=\"c\">     * editor.execCommand('anchor', 'anchor1');</span>","<span class=\"c\">     * ```</span>","<span class=\"c\">     */</span>","    me<span class=\"k\">.</span>commands<span class=\"k\">[</span><span class=\"s\">'anchor'</span><span class=\"k\">]</span> <span class=\"k\">=</span> <span class=\"k\">{</span>","        execCommand<span class=\"k\">:</span><span class=\"k\">function</span> <span class=\"k\">(</span>cmd<span class=\"k\">,</span> name<span class=\"k\">)</span> <span class=\"k\">{</span>","            <span class=\"k\">var</span> range <span class=\"k\">=</span> <span class=\"k\">this</span><span class=\"k\">.</span>selection<span class=\"k\">.</span>getRange<span class=\"k\">(),</span>img <span class=\"k\">=</span> range<span class=\"k\">.</span>getClosedNode<span class=\"k\">();</span>","            <span class=\"k\">if</span> <span class=\"k\">(</span>img <span class=\"k\">&amp;&amp;</span> img<span class=\"k\">.</span>getAttribute<span class=\"k\">(</span><span class=\"s\">'anchorname'</span><span class=\"k\">))</span> <span class=\"k\">{</span>","                <span class=\"k\">if</span> <span class=\"k\">(</span>name<span class=\"k\">)</span> <span class=\"k\">{</span>","                    img<span class=\"k\">.</span>setAttribute<span class=\"k\">(</span><span class=\"s\">'anchorname'</span><span class=\"k\">,</span> name<span class=\"k\">);</span>","                <span class=\"k\">}</span> <span class=\"k\">else</span> <span class=\"k\">{</span>","                    range<span class=\"k\">.</span>setStartBefore<span class=\"k\">(</span>img<span class=\"k\">).</span>setCursor<span class=\"k\">();</span>","                    domUtils<span class=\"k\">.</span>remove<span class=\"k\">(</span>img<span class=\"k\">);</span>","                <span class=\"k\">}</span>","            <span class=\"k\">}</span> <span class=\"k\">else</span> <span class=\"k\">{</span>","                <span class=\"k\">if</span> <span class=\"k\">(</span>name<span class=\"k\">)</span> <span class=\"k\">{</span>","                    <span class=\"c\">//&#21482;&#22312;&#36873;&#21306;&#30340;&#24320;&#22987;&#25554;&#20837;</span>","                    <span class=\"k\">var</span> anchor <span class=\"k\">=</span> <span class=\"k\">this</span><span class=\"k\">.</span>document<span class=\"k\">.</span>createElement<span class=\"k\">(</span><span class=\"s\">'img'</span><span class=\"k\">);</span>","                    range<span class=\"k\">.</span>collapse<span class=\"k\">(</span><span class=\"k\">true</span><span class=\"k\">);</span>","                    domUtils<span class=\"k\">.</span>setAttributes<span class=\"k\">(</span>anchor<span class=\"k\">,</span><span class=\"k\">{</span>","                        <span class=\"s\">'anchorname'</span><span class=\"k\">:</span>name<span class=\"k\">,</span>","                        <span class=\"s\">'class'</span><span class=\"k\">:</span><span class=\"s\">'anchorclass'</span>","                    <span class=\"k\">}</span><span class=\"k\">);</span>","                    range<span class=\"k\">.</span>insertNode<span class=\"k\">(</span>anchor<span class=\"k\">).</span>setStartAfter<span class=\"k\">(</span>anchor<span class=\"k\">).</span>setCursor<span class=\"k\">(</span><span class=\"k\">false</span><span class=\"k\">,</span><span class=\"k\">true</span><span class=\"k\">);</span>","                <span class=\"k\">}</span>","            <span class=\"k\">}</span>","        <span class=\"k\">}</span>","","    <span class=\"k\">}</span><span class=\"k\">;</span>","","","<span class=\"k\">}</span><span class=\"k\">;</span>"];
_$jscoverage['plugins/anchor.js'][7]++;
UE.plugins.anchor = (function () {
  _$jscoverage['plugins/anchor.js'][8]++;
  var me = this;
  _$jscoverage['plugins/anchor.js'][10]++;
  me.ready((function () {
  _$jscoverage['plugins/anchor.js'][11]++;
  utils.cssRule("anchor", (".anchorclass{background: url('" + me.options.UEDITOR_HOME_URL + "themes/default/images/anchor.gif') no-repeat scroll left center transparent;border: 1px dotted #0000FF;cursor: auto;display: inline-block;height: 16px;width: 15px;}"), me.document);
}));
  _$jscoverage['plugins/anchor.js'][17]++;
  me.addOutputRule((function (root) {
  _$jscoverage['plugins/anchor.js'][18]++;
  utils.each(root.getNodesByTagName("img"), (function (a) {
  _$jscoverage['plugins/anchor.js'][19]++;
  var val;
  _$jscoverage['plugins/anchor.js'][20]++;
  if ((val = a.getAttr("anchorname"))) {
    _$jscoverage['plugins/anchor.js'][21]++;
    a.tagName = "a";
    _$jscoverage['plugins/anchor.js'][22]++;
    a.setAttr({anchorname: "", name: val, "class": ""});
  }
}));
}));
  _$jscoverage['plugins/anchor.js'][30]++;
  me.addInputRule((function (root) {
  _$jscoverage['plugins/anchor.js'][31]++;
  utils.each(root.getNodesByTagName("a"), (function (a) {
  _$jscoverage['plugins/anchor.js'][32]++;
  var val;
  _$jscoverage['plugins/anchor.js'][33]++;
  if (((val = a.getAttr("name")) && (! a.getAttr("href")))) {
    _$jscoverage['plugins/anchor.js'][34]++;
    a.tagName = "img";
    _$jscoverage['plugins/anchor.js'][35]++;
    a.setAttr({anchorname: a.getAttr("name"), "class": "anchorclass"});
    _$jscoverage['plugins/anchor.js'][39]++;
    a.setAttr("name");
  }
}));
}));
  _$jscoverage['plugins/anchor.js'][57]++;
  me.commands.anchor = {execCommand: (function (cmd, name) {
  _$jscoverage['plugins/anchor.js'][59]++;
  var range = this.selection.getRange(), img = range.getClosedNode();
  _$jscoverage['plugins/anchor.js'][60]++;
  if ((img && img.getAttribute("anchorname"))) {
    _$jscoverage['plugins/anchor.js'][61]++;
    if (name) {
      _$jscoverage['plugins/anchor.js'][62]++;
      img.setAttribute("anchorname", name);
    }
    else {
      _$jscoverage['plugins/anchor.js'][64]++;
      range.setStartBefore(img).setCursor();
      _$jscoverage['plugins/anchor.js'][65]++;
      domUtils.remove(img);
    }
  }
  else {
    _$jscoverage['plugins/anchor.js'][68]++;
    if (name) {
      _$jscoverage['plugins/anchor.js'][70]++;
      var anchor = this.document.createElement("img");
      _$jscoverage['plugins/anchor.js'][71]++;
      range.collapse(true);
      _$jscoverage['plugins/anchor.js'][72]++;
      domUtils.setAttributes(anchor, {"anchorname": name, "class": "anchorclass"});
      _$jscoverage['plugins/anchor.js'][76]++;
      range.insertNode(anchor).setStartAfter(anchor).setCursor(false, true);
    }
  }
})};
});
