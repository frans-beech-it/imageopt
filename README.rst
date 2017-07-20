TYPO3 Extension ``imageopt``
============================

.. image:: https://travis-ci.org/sourcebroker/imageopt.png
   :target: https://travis-ci.org/sourcebroker/imageopt

.. image:: https://styleci.io/repos/80069905/shield?branch=master
   :target: https://styleci.io/repos/80069905

.. image:: https://scrutinizer-ci.com/g/sourcebroker/imageopt/badges/quality-score.png?b=master
   :target: https://scrutinizer-ci.com/g/sourcebroker/imageopt/?branch=master

.. image:: http://img.shields.io/packagist/v/sourcebroker/imageopt.svg?style=flat
   :target: https://packagist.org/packages/sourcebroker/imageopt

.. image:: https://poser.pugx.org/sourcebroker/imageopt/license
   :target: https://packagist.org/packages/sourcebroker/imageopt

|

.. contents:: :local:

What does it do?
----------------

This extension allows to optimize images resized by TYPO3 so they will take less space.

TYPO3 services are used to register the providers of images optimization so own providers
can be registered also. Cron based. If you enable more than one image optimizer then all
of them will be executed and the best optimized image is choosed.

The original images, for example in folder fileadmin/, uploads/ are not optmized. Only already resized
images are optmized, so for FAL that would be files form "\_processed\_/" folder of file storages. This
make this tool safe to use because if image optimization will be bad quality or corrupted you can
recreate the resized images and optimize them again.