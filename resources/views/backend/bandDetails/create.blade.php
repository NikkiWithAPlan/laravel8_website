@extends('layouts.app')

@section('content')

	<div>

		<p>Create Band text</p>

		<form method="post" action="{{ route('band_details.store') }}">
			@csrf
			
			<textarea id="text" name="text">
				{!! $bandText->text !!}
			</textarea>	
			<br>
			<input class="btn btn-primary" type="submit" name="submit" value="SUBMIT">
		</form>

	</div>
	
@endsection

@section('tinyEditor')
<script>
	
var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

tinymce.init({
  selector: '#text',
  plugins: 'paste importcss searchreplace autolink directionality visualblocks visualchars fullscreen link charmap hr advlist lists textpattern charmap',
  menubar: 'file edit view insert format tools',
  toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor removeformat | charmap | link',
  toolbar_sticky: true,
  importcss_append: true,
  height: 600,
  quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote',
  noneditable_noneditable_class: 'mceNonEditable',
  toolbar_mode: 'sliding',
  contextmenu: 'link',
  skin: useDarkMode ? 'oxide-dark' : 'oxide',
  content_css: useDarkMode ? 'dark' : 'default',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
 });


</script>
@endsection
