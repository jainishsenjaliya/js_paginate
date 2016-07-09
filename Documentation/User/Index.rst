.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _user-manual:

Users Manual
============

Target group: **Editors**

Here should be described how to use the extension from the editor perspective.

.. tip::

   Simple pagination configuration your plugin.


.. First need to add pagination viewhelper in your file.::

   {namespace pg=JS\JsPaginate\ViewHelpers}


   <pg:Paginate objects="{FAQ}" as="paginatedObjekt" configuration="{itemsPerPage: 10, insertAbove: 0, insertBelow: 1, maximumNumberOfLinks: 4, maximumVisiblePages: 3}">

      <f:for each="{paginatedObjekt}" as="faq">

         YOUR CONTENT

      </f:for>

   </pg:Paginate>   


.. figure:: ../Images/JSPaginate-Configuration.png
   :alt: Pagination Configuration in extension.

