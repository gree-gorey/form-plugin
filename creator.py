#!/usr/local/bin/python
# -*- coding:utf-8 -*-
__author__ = 'Gree-gorey'

import codecs
import sys

s = sys.argv

w = codecs.open(u'/home/stimdb/stimdb.ru/docs/output/output.csv', 'w')
w.write(str(s[1]) + '\n')
w.write(str(s[2]))
w.close()

print('Готово! Можете <a href="http://stimdb.ru/output/output.csv">скачать результат</a>')
