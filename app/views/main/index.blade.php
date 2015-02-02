@extends('main.master')
@section('content')
<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - August 05, 2013!</div>
	<div class="container_12">
		<div class="grid_12">
			<h3>Top Destinations</h3>
		</div>
		<div class="boxes">
			<?php if (isset($top_img)): ?>
				<?php foreach ($top_img as $value): ?>
					
				<div class="grid_4">
					<figure>
						<div><img src="{{URL::asset('uploadtop/'.$value->img_url)}}" alt=""></div>
						<figcaption>
							<h3>{{$value->title}}</h3>
							{{$value->text}}
							<a href="" class="btn">Details</a>
						</figcaption>
					</figure>
				</div>
									
				<?php endforeach ?>
			<?php endif ?>
		</div>
				<div class="grid_8">
					 <div id="tabs">
	<ul>

		<?php if (isset($tab)): ?>
			<?php $i = 1 ?>
			<?php foreach ($tab as $value): ?>
				<?php if (!empty($value->tab_name)): ?>
					<li><a href="#tabs-{{$i}}">{{$value->tab_name}}</a></li>
					<?php ++$i ?>
				<?php endif ?>
			<?php endforeach ?>
		<?php endif ?>
		<!-- <li><a href="#tabs-1">last Minute</a></li>
		<li><a href="#tabs-2">hot Deals</a></li>
		<li><a href="#tabs-3">All-Inclusive</a></li> -->
	</ul>
	<div class="clear"></div>
	<div class="tab_cont" id="tabs-1">
	<?php if (isset($tab)): ?>
		<?php $i = 1 ?>
		<?php foreach ($tab as $value): ?>
			<?php if ($i > 2): ?>
				<?php break ?>
			<?php endif ?>
			
			
		<div class="tag_img"><img src="{{URL::asset('uploadtab/'.$value->img_url)}}" alt=""></div>
		<div class="extra_wrapper">
			<div class="text1">{{$value->title}}</div>
			<p class="style1">{{$value->text}}</p>

<div class="clear "></div>

		</div>
		<div class="clear cl1"></div>
		
				<?php ++$i ?>
			<?php endforeach ?>
		<?php endif ?>		
	</div>
	<div class="tab_cont" id="tabs-2">
		
			<?php if (isset($tab)): ?>
				<?php $i = 1 ?>
				<?php foreach ($tab as $value): ?>
					<?php if ($i > 4): ?>
						<?php break ?>
					<?php endif ?>
					<?php if ($i <= 2): ?>
						<?php ++$i ?>
						<?php continue ?>
					<?php endif ?>
					
					<div class="tag_img"><img src="{{URL::asset('uploadtab/'.$value->img_url)}}" alt=""></div>
				<div class="extra_wrapper">
					<div class="text1">{{$value->title}}</div>
					<p class="style1">{{$value->text}}</p>
		
		<div class="clear "></div>

				</div>
				<div class="clear cl1"></div>
				
						<?php ++$i ?>
					<?php endforeach ?>
				<?php endif ?>		
			
	</div>
 <div class="tab_cont" id="tabs-3">
 	
 	
 		<?php if (isset($tab)): ?>
 			<?php $i = 1 ?>
 			<?php foreach ($tab as $value): ?>
 				<?php if ($i > 6): ?>
 					<?php break ?>
 				<?php endif ?>
 				<?php if ($i <= 4): ?>
 					<?php ++$i ?>
 					<?php continue ?>
 				<?php endif ?>
 				
 				<div class="tag_img"><img src="{{URL::asset('uploadtab/'.$value->img_url)}}" alt=""></div>
 			<div class="extra_wrapper">
 				<div class="text1">{{$value->title}}</div>
 				<p class="style1">{{$value->text}}</p>
 	
 	<div class="clear "></div>

 			</div>
 			<div class="clear cl1"></div>
 			
 					<?php ++$i ?>
 				<?php endforeach ?>
 			<?php endif ?>		
 		
 	
 </div>
</div>
		</div>
	
	
	<div class="clear"></div></div>
</div>
<div class="bottom_block">
	<div class="container_12">
		<div class="grid_2 prefix_2">
			<ul>
				<li><a href="#">FAQS Page</a></li>
				<li><a href="#">People Say</a></li>
			</ul>
		</div>
		<div class="grid_2">
			<ul>
				<li><a href="#">Useful links</a></li>
				<li><a href="#">Partners</a></li>
			</ul>
		</div>
		<div class="grid_2">
			<ul>
				<li><a href="#">Insurance</a></li>
				<li><a href="#">Family Travel</a></li>
			</ul>
		</div>
		<div class="grid_2">
			<h4>Contact Us:</h4>
			TEL: 1-800-234-5678<br><a href="#">info@demolink.org</a>
		 
		</div>
		<div class="clear"></div>
		</div>
	</div>
@stop
