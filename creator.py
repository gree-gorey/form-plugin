#!/usr/local/bin/python
# -*- coding:utf-8 -*-
__author__ = 'Gree-gorey'

import codecs
import sys

w = codecs.open(u'/home/stimdb/stimdb.ru/docs/output/output.csv', 'w', 'utf-8')
w.close()

s = sys.argv

print(str(s[0]) + ' <a href="http://stimdb.ru/output/output.csv">Скачать результат</a>')
