					<div class="page-header">
						<h4 class="page-title"><?=$FuncName;?></h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="<?=base_url()?>">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="<?=base_url($Class)?>"><?=$ClassName;?></a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="<?=base_url($this->uri->uri_string())?>"><?=$FuncName;?></a>
							</li>
						</ul>
					</div>