"""
>>> print_('foo', flush=True)
foo
"""

from __future__ import print_function

import sys


def print_(*args, **kwargs):
	flush = kwargs.pop('flush', False)
	file = kwargs.get('file', sys.stdout)
	print(*args, **kwargs)
	if flush:
		file.flush()


if sys.version_info >= (3,3):
	globals().update(print_=print)
