<?php include 'base.php'?>
<?php startblock('page')?>
<div class="row row-gap">
<div class="col-sm-offset-2 col-sm-8">
<h2>Page title</h2>

<!-- Paragraphs -->
<h3>Paragraphs</h3>
<p>Ut wisi enim ad minim veniam, <a href="#">quis nostrud exerci tation ullamcorper</a> suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
<hr>

<!-- Responsive images -->
<h3>Responsive images</h3>
<p>For images to be responsive (so that they will rescale to suit the width of the parent, use the <code>.img-responsive</code> class.</p>
<p><img class="img-responsive" src="http://placehold.it/800x350" alt=""></p>

<!-- Lists -->
<h3>Unordered list</h3>
<p>Unordered lists are used to markup lists where list items do not require numbering.</p>
<ul>
	<li>Ut wisi enim ad minim veniam</li>
	<li>Quis nostrud exerci tation</li>
	<li>Lamcorper suscipit lobortis nis</li>
	<li>Ut aliquip ex ea commodo consequat</li>
	<li>Duis autem vel eum iriure dolor</li>
</ul>
<hr>

<h3>Ordered list</h3>
<p>Ordered lists are used to markup lists where list items require numbering.</p>
<ol>
	<li>Hendrerit in vulputate velit esse</li>
	<li>Olestie consequat</li>
	<li>Vel illum dolore eu feugiat</li>
	<li>Nulla facilisis at vero eros</li>
	<li>Accumsan et iusto odio</li>
</ol>
<hr>

<h3>Unstyled list</h3>
<p>You can make the list unstyled using the <code>list-unstyled</code> class.</p>
<ul class="list-unstyled">
	<li>Ut wisi enim ad minim veniam</li>
	<li>Quis nostrud exerci tation</li>
	<li>Lamcorper suscipit lobortis nis</li>
	<li>Ut aliquip ex ea commodo consequat</li>
	<li>Duis autem vel eum iriure dolor</li>
</ul>
<hr>

<h3>Inline list</h3>
<p>You can make the list display inline using the <code>list-inline</code> class.</p>
<ul class="list-inline">
	<li>One</li>
	<li>Two</li>
	<li>Three</li>
	<li>Four</li>
</ul>
<hr>


<h3>Buttons</h3>
<p>You can apply the <code>btn</code> class to any element that requires a button style.</p>
<p><a href="#" class="btn">Submit</a></p>
<hr>

<!-- Tables -->
<h3>Tables</h3>
<p>Tables should be given the class of <code>table</code>.</p>
<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">1</th>
			<td>Mark</td>
			<td>Otto</td>
			<td>@mdo</td>
		</tr>
		<tr>
			<th scope="row">2</th>
			<td>Jacob</td>
			<td>Thornton</td>
			<td>@fat</td>
		</tr>
		<tr>
			<th scope="row">3</th>
			<td>Larry</td>
			<td>the Bird</td>
			<td>@twitter</td>
		</tr>
	</tbody>
</table>
</div>
</div>
<?php endblock()?>