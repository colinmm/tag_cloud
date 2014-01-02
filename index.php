<!DOCTYPE html>
<head>
	<title>colinmm's PHP tag cloud</title>
</head>
<body>
	<div class="tag_form">
		<p>Enter Tags Below</p>
		<form id="create_tags" action="inc/new_tag.php" method="post">
			<input type="hidden" name="tag_form__id">
			<input type="text" name="tag_form__name">
			<input type="text" name="tag_form__href">
			<input type="submit" name="tag_form__submit" value="Enter">
		</form>
	</div>
	<div class="tag_cloud">
		<?php

			$tag_class = new add_tags();

            $tag_array = $tag_class->selectTag($sec_num);

            foreach ($tag_array as $single_tag) {
                echo "<a href='" . $single_tag->getTag() . " &&tag=" . $single_tag->getID() . "' class='tag" . $single_tag->getCloud_Class() . "'>" . $single_tag->getTag() . "</a>";
            }
		?>
	</div>
</body>
</html>