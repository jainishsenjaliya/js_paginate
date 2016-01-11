First we need to declare name space in your template file

=>  {namespace pg=JS\JsPaginate\ViewHelpers}

then after we can use following pagination script. and need to add our records [ array ] in objects 

<pg:Paginate objects="{faq}" as="paginatedObject" configuration="{itemsPerPage: 5, insertAbove: 1, insertBelow: 1, maximumVisiblePages: 5}">
	<div class="faq-list">
		<f:for each="{paginatedObject}" as="list" iteration="itemIteration">
			<div class="even {f:if(condition: itemIteration.isOdd , then: 'odd')}">
				{paginatedObject.title}
			</div>
		</f:for>
	</div>
</pg:Paginate>


/*********************************** Pagination Configuration ******************************************************/



1) itemsPerPage = 5
	5 records will display on first page

2) insertAbove = 1
	if insertAbove is true then pagination will display before content 

3) insertBelow = 1
	if insertAbove is true then pagination will display after content 

4) maximumVisiblePages = 5
	Maximum Visible Pages 5 in pagination.

