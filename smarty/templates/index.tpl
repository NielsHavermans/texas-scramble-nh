{* Smarty *}
{include file='header.tpl' title='Texas Scramble'}

<div class="dashboard">
	<div class="content">
		<div class="full">
			<h1>{$title|default:'Texas Scramble'}</h1>
		</div>
		<div class="half">
			{include file='flight.tpl' title='Flight indeling'}
		</div>
		<div class="half">
			{include file='list-golfers.tpl'}
			{include file='create.tpl' title='Golfer toevoegen'}
		</div>
	</div>
	<br class="clear" />
</div>
{include file='footer.tpl'}
