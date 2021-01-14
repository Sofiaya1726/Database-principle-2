### jieba分词

```
# encoding=utf-8
import jieba
 
seg_list = jieba.cut("我来到北京清华大学", cut_all=True)
print("Full Mode: " + "/ ".join(seg_list))  # 全模式
 
seg_list = jieba.cut("我来到北京清华大学", cut_all=False)
print("Default Mode: " + "/ ".join(seg_list))  # 精确模式
 
seg_list = jieba.cut("他来到了网易杭研大厦")  # 默认是精确模式
print(", ".join(seg_list))
 
seg_list = jieba.cut_for_search("小明硕士毕业于中国科学院计算所，后在日本京都大学深造")  # 搜索引擎模式
print(", ".join(seg_list))

```

### 添加自定义词典

```

#encoding=utf-8
from __future__ import print_function, unicode_literals
import sys
sys.path.append("../")
import jieba
 
import jieba.posseg as pseg
 
jieba.add_word('石墨烯')
jieba.add_word('凱特琳')
jieba.del_word('自定义词')
 
test_sent = (
"李小福是创新办主任也是云计算方面的专家; 什么是八一双鹿\n"
"例如我输入一个带“韩玉赏鉴”的标题，在自定义词库中也增加了此词为N类\n"
"「台中」正確應該不會被切開。mac上可分出「石墨烯」；此時又可以分出來凱特琳了。"
)
print("="*40+'before'+"="*40)
words_1 = jieba.cut(test_sent)
print('/'.join(words_1))
 
print("="*40+'after'+"="*40)
 
jieba.load_userdict("userdict.txt")
words_2 = jieba.cut(test_sent)

```
