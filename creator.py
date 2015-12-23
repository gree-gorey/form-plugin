#!/usr/local/bin/python
# -*- coding:utf-8 -*-
__author__ = 'Gree-gorey'

import codecs

a = 10
b = 15
w = codecs.open(u'/home/stimdb/stimdb.ru/docs/output/output.csv', 'w', 'utf-8')
w.write(str(a))
w.write(u'\n')
w.write(str(b))
w.close()

print('<a href="http://stimdb.ru/output/output.csv">Скачать результат</a>')
