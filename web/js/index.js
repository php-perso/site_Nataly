$(document).ready(function()
{
	$('#myContainer').fullpage(
	{
		anchors: ['firstPage', 'secondPage', '3rdPage'],
		menu: '#menu',
		slidesNavigation: true,
		offsetSections: true,
		offsetSectionsKey: 'YWx2YXJvdHJpZ28uY29tX2ZZM2IyWm1jMlYwVTJWamRHbHZibk09MWpN'
	});
});

function slide_page2()
{
	window.location.href = '#secondPage';
}
function slide_page3()
{
	window.location.href = '#3rdPage';
}
function retour_1st()
{
	window.location.href = '#firstPage';
}
