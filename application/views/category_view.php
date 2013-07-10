<div class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-inner">
<div class="container-fluid">
<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="brand" href="#">OpenVim</a>
<div class="nav-collapse collapse">
<p class="navbar-text pull-right">
Logged in as <a href="#" class="navbar-link">LoginIn</a>
</p>
<ul class="nav">
<? foreach ($category as $row):?>
<li><a href="#<?=$row->categoryName?>"><?=$row->categoryName?></a></li>
<?endforeach;?>
</ul>
</div><!--/.nav-collapse -->
</div>
</div>
</div>
