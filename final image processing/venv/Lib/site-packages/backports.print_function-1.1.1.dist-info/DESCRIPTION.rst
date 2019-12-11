.. image:: https://img.shields.io/pypi/v/backports.print_function.svg
   :target: https://pypi.org/project/backports.print_function

.. image:: https://img.shields.io/pypi/pyversions/backports.print_function.svg

.. image:: https://img.shields.io/pypi/dm/backports.print_function.svg

.. image:: https://img.shields.io/travis/jaraco/backports.print_function/master.svg
   :target: http://travis-ci.org/jaraco/backports.print_function

Add support for the Python 3.3 flush argument.

License
=======

License is indicated in the project metadata (typically one or more
of the Trove classifiers). For more details, see `this explanation
<https://github.com/jaraco/skeleton/issues/1>`_.

Usage
=====

from backports.print_function import print_

print_('Partial line', end='', flush=True)


