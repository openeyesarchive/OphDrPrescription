<h3>
	<?php echo $element->elementType->name ?>
</h3>
<h4>Drugs</h4>
<div class="eventHighlight">
		<ul>
			<?php foreach($element->items as $item) { ?>
			<li><?php echo $item->drug->name?></li>
			<?php } ?>
		</ul>
</div>

<h4><?php echo CHtml::encode($element->getAttributeLabel('comments'))?></h4>
<div class="eventHighlight comments">
		<h4><?php echo $element->comments?></h4>
</div>
