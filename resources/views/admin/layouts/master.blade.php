@include("admin.layouts.elements.header")
@include("admin.layouts.elements.top")
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
			@include("admin.layouts.elements.sidebar")
			@yield('content')
			</div><!-- /.main-content -->
@include("admin.layouts.elements.footer")
